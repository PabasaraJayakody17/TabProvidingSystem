@extends('layouts.user')

@section('content')
<div class="container">
    <!--a  href="{{route('tab.addrequest')}}">
        tab Request
    </a>
    <a class="ml-3" href="{{route('tab.viewrequest')}}">
        View Request
    </a-->
   <br>
    <h2 class="text-center">CHANGE PASSWORD </h2>
    <hr class="mb-4 ml-5 mt-3">
    
    @if(Session::get('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @elseif(Session::get('error'))
    <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">{{ __('Update Your Password') }}</div>

                <div class="card-body">


                    <form method="POST" action="{{route('user.updatePassword')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="pospostalAddresstal" class="col-md-3 col-form-label text-md-left ml-2">{{ __('Old Password')}}</label>
                            <div class="col-md-8">
                                <input type="password" id="oldPassword" class="form-control @error('oldPassword') is-invalid @enderror" name="oldPassword"  required  autofocus>
                                @error('oldPassword')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror    
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pospostalAddresstal" class="col-md-3 col-form-label text-md-left ml-2">{{ __('New Password')}}</label>
                            <div class="col-md-8">
                                <input type="password" id="newPassword" class="form-control @error('newPassword') is-invalid @enderror" name="newPassword"  required autofocus>
                                @error('newPassword')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror    
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pospostalAddresstal" class="col-md-3 col-form-label text-md-left ml-2">{{ __('Confirm Password')}}</label>
                            <div class="col-md-8">
                                <input type="password" id="confirmPassword" class="form-control @error('confirmPassword') is-invalid @enderror" name="confirmPassword"  required autofocus>
                                @error('confirmPassword')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror    
                            </div>
                        </div>

                        <div class="form-group row ml-5">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Change') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection