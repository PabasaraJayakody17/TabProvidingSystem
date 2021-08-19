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
    <h2 class="text-center">PROFILE SETTINGS</h2>
    <hr class="mb-4 ml-5 mt-3">
    
    
     @if(Session::get('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
    @elseif(Session::get('error'))
            <div class="alert alert-danger">{{ Session::get('error') }}</div>
     @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">{{ __('Update Your Information') }}</div>

                <div class="card-body">


                    <form method="POST" action="{{route('user.update',auth()->user()->id)}}" >
                        @csrf

                        <div class="form-group row">
                            <label for="pospostalAddresstal" class="col-md-3 col-form-label text-md-right">{{ __('Name')}}</label>
                            <div class="col-md-8">
                                <input type="text" id="names" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ auth()->user()->name }}"  required autocomplete="Name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror    
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="emailAddress" class="col-md-3 col-form-label text-md-right">{{ __('Email')}}</label>
                            <div class="col-md-8">
                                <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{auth()->user()->email}}" required autocomplete="emailAddress" autofocus>
                                @error('email')
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