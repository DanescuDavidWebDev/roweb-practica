<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="endless admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, endless admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
  <title>proiect roweb</title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Font Awesome-->
  <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="app.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/feather-icon.css">
  <!-- Plugins css start-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <!-- App css-->


  <!-- Responsive css-->

</head>

<body>
  <div class="login-logo logod">
    <a href="../../index2.html" class="logod"><b>Admin</b>LTE</a>
  </div>
  <div class="page-wrapper d-flex justify-content-center">
    <div class="auth-bg ">
      <div class="authentication-box">
        <div class="text-center"><img src="../assets/images/logo-login.png" alt=""></div>
        <div class="card" style="width:500px;">
          <div class="card-body">
            <div class="text-center">
              <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
            </div>
            <form method="POST" action="/forgot_password_send">
              @csrf


              @if(Session::has('message'))

              <p class="alert alert-danger">{{ Session::get('message') }}</p>

              @endif

              @if(Session::has('success'))

              <p class="alert alert-success">{{ Session::get('success') }}</p>

              @endif
              <div class="form-group">
                <label class="col-form-label pt-0">Email</label>
                <input class="form-control" type="text" name="email" required="">
                @error('email')
                <span class="invalid-feedback " role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>


              <div class=" form-group form-row mt-3 mb-2">
                <button class="btn btn-primary btn-block" type="submit">Request new password</button </div>



            </form>

            <div class="forgot-links">
              <a href="login">Login</a>
              <a href="register">Register a new membership</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/script.js"></script>

</body>

</html>