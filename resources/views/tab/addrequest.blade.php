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
  
    <h2 class="text-center">ENTER YOUR INFORMATION</h2>
    <hr class="mb-4 ml-5 mt-3">
    <!--h5 class="text-center">... Request for a tab...</h5-->

    @if(Session::get('success'))
           <div class="alert alert-success">{{ Session::get('success') }}</div>
   @elseif(Session::get('error'))
           <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">{{ __('Your Information') }}</div>

                <div class="card-body">
   
                    <form method="POST" action="{{route('tab.addrequest')}}" >
                        @csrf
                            <div class="form-group row">
                                <label  class="col-md-3 col-form-label text-md-left ml-2">{{ __('Student/Teacher')}}</label>
                                
                                <div class="col-md-8">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('student_or_teacher') is-invalid @enderror" type="radio" name="student_or_teacher" id="student" value="student">
                                        <label class="form-check-label" for="student">Student</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('student_or_teacher') is-invalid @enderror" type="radio" name="student_or_teacher" id="teacher" value="teacher">
                                        <label class="form-check-label" for="teacher">Teacher</label>
                                        @error('student_or_teacher')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>                        
                        

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

                        <!--div class="form-group row">
                            <label for="emailAddress" class="col-md-3 col-form-label text-md-right">{{ __('Email Address')}}</label>
                            <div class="col-md-8">
                                <input type="text" id="emailAddress" class="form-control @error('emailAddress') is-invalid @enderror" name="emailAddress" value="{{auth()->user()->email}}" required autocomplete="emailAddress" autofocus>
                                @error('emailAddress')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div-->

                        <div class="form-group row">
                            <label for="pospostalAddresstal" class="col-md-3 col-form-label text-md-left ml-2">{{ __('Postal Address')}}</label>
                            <div class="col-md-8">
                                <input type="text" id="postalAddress" class="form-control @error('postalAddress') is-invalid @enderror" name="postalAddress" value="{{ old('postalAddress') }}" required autocomplete="postalAddress" autofocus>
                                @error('postalAddress')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror    
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="reason" class="col-md-3 col-form-label text-md-left ml-2">{{ __('Why you request a tab')}}</label>
                            <div class="col-md-8">
                                <textarea type="text" id="reason" rows="3" class="form-control @error('reason') is-invalid @enderror" name="reason" value="{{ old('reason') }}" required autocomplete="reason" autofocus></textarea>
                                @error('reason')
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