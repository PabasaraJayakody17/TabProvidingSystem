@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">Enter your information... Request for a tab...</h2>
    <h2 class="text-center">We will provide you a tab.</h2>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">{{ __('Your Information') }}</div>

                <div class="card-body">

                    @if(Session::get('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif

                    <form method="POST" action="{{route('tab.addrequest')}}" >
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name')}}</label>
                            <div class="col-md-8">
                                <select class="form-control" name="userID">
                                    @foreach($user as $u)
                                    <option value="{{$u->id}}">{{$u->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name')}}</label>
                            <div class="col-md-8">
                                <input type="text" readonly id="name" class="form-control" name="userId" value="">
                                <@error('name')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror>
                            </div-->
                        </div>

                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-md-3 text-md-right">Student/Teacher</legend>
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
                        </fieldset>

                        <div class="form-group row">
                            <label for="grade" class="col-md-3 col-form-label text-md-right">{{ __('Grade')}}</label>
                            <div class="col-md-8">
                                <input type="text" id="grade" class="form-control @error('grade') is-invalid @enderror" name="grade" value="{{ old('grade') }}" required autocomplete="grade" autofocus>
                                @error('grade')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telNo" class="col-md-3 col-form-label text-md-right">{{ __('Tel Number')}}</label>
                            <div class="col-md-8">
                                <input type="text" id="telNo" class="form-control @error('telNo') is-invalid @enderror" name="telNo" value="{{ old('telNo') }}" required autocomplete="telNo" autofocus>
                                @error('telNo')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emailAddress" class="col-md-3 col-form-label text-md-right">{{ __('Email Address')}}</label>
                            <div class="col-md-8">
                                <input type="text" id="emailAddress" class="form-control @error('emailAddress') is-invalid @enderror" name="emailAddress" value="{{ old('emailAddress') }}" required autocomplete="emailAddress" autofocus>
                                @error('emailAddress')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pospostalAddresstal" class="col-md-3 col-form-label text-md-right">{{ __('Postal Address')}}</label>
                            <div class="col-md-8">
                                <input type="text" id="postalAddress" class="form-control @error('postalAddress') is-invalid @enderror" name="postalAddress" value="{{ old('postalAddress') }}" required autocomplete="postalAddress" autofocus>
                                @error('postalAddress')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror    
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="reason" class="col-md-3 col-form-label text-md-right">{{ __('Why you request a tab')}}</label>
                            <div class="col-md-8">
                                <textarea type="text" id="reason" rows="3" class="form-control @error('reason') is-invalid @enderror" name="reason" value="{{ old('reason') }}" required autocomplete="reason" autofocus></textarea>
                                @error('reason')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary">
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