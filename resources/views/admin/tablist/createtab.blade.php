@extends('layouts.admin')

@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="pull-left">Add New Tab</h1>
        </div>
        <!--div class="col-lg-12 pull-left" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary " href="{{route('admin.tablist')}}"> Back</a>
        </div-->
    </div>
    
    @if ($errors->any())
<div class="alert alert-danger">
    <strong>Oops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<br>
<form action="{{route('admin.storetab')}}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Serial Number:</strong>
                <input type="text" name="serialNumber" class="form-control" placeholder="Serial Number">
            </div>
        </div>
        <fieldset class="form-group mt-2">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mt-2">
            <strong>Tab Category:</strong>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="category" id="student" value="student">
                <label class="form-check-label" for="student">Student</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="category" id="teacher" value="teacher">
                <label class="form-check-label" for="teacher">Teacher</label>
            </div>
            </div>
        </div>
        </fieldset>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mt-2">
                <strong>Tab Name:</strong>
                <input type="text" name="tabName" class="form-control" placeholder="Tab Name">
            </div>
        </div>       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mt-2">
                <strong>Product Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Product Description"></textarea>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
        </div>
    </div>
</form>
    
        
@endsection