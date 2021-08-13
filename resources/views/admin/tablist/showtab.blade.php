@extends('layouts.admin')

@section('content')

<div class="row">
        <div class="col-lg-8">
            <h2 class="text-center">Show Tab</h2>
        </div>
        <div class="col-lg-8 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{route('tablist.index')}}"> Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Serial Number: </strong>
                {{$data->serialNumber}}
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Tab Category: </strong>
                {{$data->category}}
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Tab Name: </strong>
                {{$data->tabName}}
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Product Description: </strong>
                {{$data->description}}
            </div>
        </div>
    </div>
    
@endsection    