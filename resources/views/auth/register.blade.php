@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/app.css')}}" />
<section class="formContent register ">
<div class="login-logo" >
            <a href="{{route('dashboard')}}"><b>Admin</b>LTE</a>
        </div>
        <div class="container d-flex justify-content-center">
<div class="card ">
    <div class="card-body register-card-body ">
    <p class="login-box-msg">Register a new membership</p>
        <form role="form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="row mb-2">
                <input  type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus />
            </div>

            <div class="row mb-2">
                <input  type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus />
            </div>

            <div class="row mb-2">
                <input  type="password" class="form-control" placeholder="password"name="password" required />
            </div>

            <div class="row mb-2">
                <input  type="password" class="form-control"  placeholder="Retype password"name="password_confirmation" required>
            </div>
            <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
            <div class="row center col-4">
                <button type="submit" class="btn btn-primary ml-4">
                    Register
                </button>
            </div>
            <div class="social-auth-links text-center mb-3 ml-2">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary  ">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger mWidth">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div>
            <div class="row center ml-2">
            <a href="/login">I already have a membership</a>
            </div>
        </form>
        </div>
        </div>
        </div>
</section>


@endsection