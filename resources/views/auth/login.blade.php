<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{asset('js/jquery.multi-select.js')}}"></script>
    <script src="https://kit.fontawesome.com/6cbcb9b6dc.js" crossorigin="anonymous"></script>
@extends('base')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



<div class="container d-flex justify-content-center w-auto ">
    <div class="login-box">
        <div class="login-logo" >
            <a href="{{route('dashboard')}}"><b>Admin</b>LTE</a>
        </div>
        <!-- /.login-logo -->
        <div class="card ">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                @if ($errors->has('login'))
                    <div class="alert alert-danger">{{$errors->first('login')}}</div> @endif

                <form action="{{route('login')}}" method="post">
                    @csrf
                    @if ($errors->has('email'))
                        <div class="alert alert-danger">{{$errors->first('email')}}</div> @endif
                    <div class="input-group mb-3">
                        <input name="email" type="email" class="form-control @if ($errors->has('email')) is-invalid @endif" placeholder="Email" value="{{old('email')}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @if ($errors->has('password'))
                        <div class="alert alert-danger">{{$errors->first('password')}}</div> @endif
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control @if ($errors->has('password')) is-invalid @endif" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="/forgot_password">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="{{route('register')}}" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    </div>
    <!-- /.login-box -->
@endsection