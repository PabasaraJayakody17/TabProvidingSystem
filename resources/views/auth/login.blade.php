<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TPS</title>
        <link href="{{asset('css/authStyle.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
    </head>
    <body>

<div class="container">
    <br>
     @if(Session::get('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
    @elseif(Session::get('error'))
            <div class="alert alert-danger">{{ Session::get('error') }}</div>
     @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="wrapper">
                    <form method="POST" action="{{ route('login') }}" class="form-signin">
                        <h3 class="form-signin-heading">Login</h3>
                            <hr class="colorgraph"><br>
          
                        @csrf

                        <div class="form-group row">
                            <!--label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label-->

                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="E-Mail Address"class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!--label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label-->

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div>
                         <p class="text-center">OR<p>
                            <a class="btn btn-info btn-block"  href="{{ route('register') }}">Create an Account</a>
                        </div>          
                </form>
            </div>
        </div>
    </div>

<script src="{{ asset('js/bootstrap.min.js') }}"></script> 
</body>
</html>