<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Hash;
class ForgotPasswordController extends Controller
{

    public function show_forgot()
    {

        return view('auth.forgot_password');
    }


    public function submit_forgot(Request $request)
    {
        if ($request->has('email')) {
            $user = User::where('email', $request->email)->first();
            if ($user) {
                $user->forgot_token = Str::random(32);
                $user->send_time = date('Y-m-d H:i:s');
                $user->save();

                $to      = $user->email;
                $subject = 'Resetare Parola';
                $message = 'Salut,'. "\r\n" ."viziteaza link-ul urmatorul pentru resetarea parolei ";
                $message.="http://127.0.0.1:8000/change_password/".$user->forgot_token ." Link valabil 4h";
                $headers = 'From: no-replay@david.ro' . "\r\n" .
                    'Reply-To: no-replay@david.ro' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

                mail($to, $subject, $message, $headers);
                return back()->with('success', 'Un email a fost trimis cu success');
            }
            return back()->with('message', 'Adresa de email Invalida');
        }

        return back()->with('message', 'CEVA NU A MERS BINE');
    }

    public function change_password($token)
    {
        $user=User::where('forgot_token',$token)->first();
        $ok=0;
        if($user)
        {
            if(strtotime($user->send_time)+14400 >= strtotime(date('Y-m-d H:i:s')))
            {
                $ok=1;
                $messages="Valid Token";
                return view('auth.change_password',compact('token','ok','messages'));
            }
            $messages="Timpul a expirat";
            return view('auth.change_password',compact('token','ok','messages'));
        }
        $messages="Invalid Token";
        return view('auth.change_password',compact('token','ok','messages'));
    }

    public function change_password_submit(Request $request)
    {
        $user=User::where('forgot_token',$request->token)->first();
        $ok=0;
        $token=$request->token;
        if($user)
        {
            if($request->password == $request->confirm_password)
            {
                $user->password=Hash::make($request->password);
                $user->forgot_token='';
                $user->send_time='';
                $user->save();
                return redirect('/login');
            }
            $messages="Parole invalide";
        return view('auth.change_password',compact('token','ok','messages'));
        }
        $messages="Invalid Token";
        return view('auth.change_password',compact('token','ok','messages'));
    }
}