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
                    <form method="POST" action="{{url('tabrequestinfo')}}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name')}}</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="name">
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-md-3 text-md-right">Student/Teacher</legend>
                            <div class="col-md-8">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Student</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option2">
                                    <label class="form-check-label" for="inlineRadio1">Teacher</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label for="grade" class="col-md-3 col-form-label text-md-right">{{ __('Grade')}}</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="grade">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="telNo" class="col-md-3 col-form-label text-md-right">{{ __('Tel Number')}}</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="telNo">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Email Address')}}</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="postal" class="col-md-3 col-form-label text-md-right">{{ __('Postal Address')}}</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="postal">    
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="reason" class="col-md-3 col-form-label text-md-right">{{ __('Why you request a tab')}}</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id="reason" rows="3"></textarea>
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