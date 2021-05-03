<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="endless admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, endless admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
  <title>practica roweb</title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <!-- Font Awesome-->
  <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/feather-icon.css">
  <!-- Plugins css start-->
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link id="color" rel="stylesheet" href="../assets/css/light-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
</head>

<body>
  <div class="page-wrapper">
    <div class="auth-bg">
      <div class="authentication-box">
        <div class="text-center"><img src="../assets/images/logo-login.png" alt=""></div>
        <div class="card mt-4">
          <div class="card-body">
            <div class="text-center">
              <h4>Schimba Parola</h4>
                 
              @if($ok==0)
              
              <p class="alert alert-danger">{{ $messages }}</p>
          
              
              @elseif($ok==1)
              <h6>Enter your email adress </h6>
            </div>
            <form method="POST" action="/change_password">
              @csrf

            

              
          
              <p class="alert alert-success">{{ $messages }}</p>
          
              <input class="form-control" type="hidden" name="token" value="{{$token}}" required="">
              <div class="form-group">
                <label class="col-form-label pt-0">New Password</label>
                <input class="form-control" type="password" name="password" required="">
                
              </div>

              <div class="form-group">
                <label class="col-form-label pt-0">Confirm Password</label>
                <input class="form-control" type="password" name="confirm_password" required="">
                
              </div>
              
          
              <div class=" form-group form-row mt-3 mb-0">
                <button class="btn btn-primary btn-block" type="submit">Schimba Parola</button>
                <span><a href="/login">Logheaza-te</a></span>
              </div>
          
          
          
            </form>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/script.js"></script>

</body>

</html>