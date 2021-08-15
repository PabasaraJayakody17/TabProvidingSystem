@extends('layouts.admin')

@section('content')

<div class="container">
<div class="form-group row">
    <div class="col-lg-12 margin-tb">
        <h2 class="float-left">Add New School</h2>
    </div>

    <!--div class="col-lg-12 float-left" style="margin-top:10px;margin-bottom: 10px;">
        <a class="btn btn-primary" href="{{route('admin.schoolinfo')}}"> Back</a>
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
<form action="{{route('admin.storeschool')}}" method="POST">
    @csrf
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>School ID:</strong>
                <input type="text" name="schoolId" class="form-control" placeholder="School ID">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mt-2">
                <strong>School Type:</strong>
                <select class="form-control" name="schoolType">
                <option selected>Open this select menu</option>
                <option>A1</option>
                <option>A2</option>
                <option>B1</option>
                <option>B2</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mt-2">
                <strong>School Category:</strong>
            <select class="form-control" name="schoolcategory">
            <option selected>Open this select menu</option>
                <option>Provincial</option>
                <option>Private</option>
                <option>Piriwen</option>
                <option>Central Government</option>
                <option>Other</option>
            </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mt-2">
                <strong>Province:</strong>
                <select class="form-control" name="province">
                <option selected>Open this select menu</option>
                <option>Western Province</option>
                <option>Central Province</option>
                <option>Southern Province</option>
                <option>Uva Province</option>
                <option>Sabaragamuwa Province</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mt-2">
                <strong>District:</strong>
                <select class="form-control" name="district">
                <option selected>Open this select menu</option>
                <option>Colombo</option>
                <option>Gampaha</option>
                <option>Kaluthara</option>
                </select>
            </div>
        </div> 
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mt-2">
                <strong>Zonal Education Office:</strong>
                <select class="form-control" name="zonalEducationOffice">
                <option selected>Open this select menu</option>    
                <option>Minuwangoda</option>
                <option>Gampaha</option>
                <option>Kadawatha</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mt-2">
                <strong>Education Division:</strong>
                <select class="form-control" name="educationDivision">
                <option selected>Open this select menu</option>
                <option>Mirigama</option>
                <option>Divlapitiya</option>
                <option>Veyangoda</option>
                <option>Nittabuwa</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mt-2">
                <strong>School Name:</strong>
                <input type="text" name="schoolName" class="form-control" placeholder="School Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mt-2">
                <strong>Address:</strong>
                <textarea class="form-control" style="height:150px" name="address" placeholder="Address"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mt-2">
                <strong>Telephone No:</strong>
                <input type="text" class="form-control" name="telNo" placeholder="Telephone No">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mt-2">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Enter Email">
            </div>
        </div>
        <div class="form-group row mt-3">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
        </div>
    
</form>
</div>

@endsection