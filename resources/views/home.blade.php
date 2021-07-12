@extends('layouts.app')

@section('content')
<div class="container">
    <a  href="{{route('tab.addrequest')}}">
        tab Request
    </a>
    <a class="ml-3" href="{{route('tab.viewrequest')}}">
        View Request
    </a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   Logged In..
                  
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
