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
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
                    <form method="POST" action="{{ route('register') }}" class="form-signin">
                        <h3 class="form-signin-heading">Register</h3>
                            <hr class="colorgraph"><br>
                        @csrf
                        <div class="form-group row">
                            <!--label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label-->

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!--label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label-->

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-Mail Address"value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <!--label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label-->

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <br>
                        <div>
                            <p class="text-center">OR<p>
                            <p class="text-center"><a  href="{{ route('login') }}">I have already account</a></p>
                        </div>
                    </form>
        </div>
    </div>
</div>

<script src="{{ asset('js/bootstrap.min.js') }}"></script> 
</body>
</html>