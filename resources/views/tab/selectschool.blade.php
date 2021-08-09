@extends('layouts.user')

@section('content')
<div class="container">

    <br>
    <h2 class="text-center">We will provide you a tab.</h2>
    <h5 class="text-center">Enter your information... Request for a tab...</h5>

    @if(Session::get('success'))
      <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">{{ __('Your Information') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{route('tab.selectschool')}}" >
                        @csrf

                        <div class="form-group row">
                            <label for="grade" class="col-md-3 col-form-label text-md-left ml-2">{{ __('Grade')}}</label>
                            <div class="col-md-8">
                                <input type="text" id="grade" class="form-control @error('grade') is-invalid @enderror" name="grade" value="{{ old('grade') }}" required autocomplete="grade" autofocus>
                                @error('grade')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telNo" class="col-md-3 col-form-label text-md-left ml-2">{{ __('Tel Number')}}</label>
                            <div class="col-md-8">
                                <input type="text" id="telNo" class="form-control @error('telNo') is-invalid @enderror" name="telNo" value="{{ old('telNo') }}" required autocomplete="telNo" autofocus>
                                @error('telNo')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row ml-5">
                            <div class="col-md-3"></div>
                            <div class="col-md-6 text-center ">
                                <button type="submit" class="btn btn-primary  btn-block">
                                    {{ __('Submit') }}
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
