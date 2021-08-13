@extends('layouts.admin')

@section('content')

<div class="container">
<div class="form-group row">
    <div class="col-lg-12 margin-tb">
        <h2 class="float-left">Edit School</h2>
    </div>

    <div class="col-lg-12 float-left" style="margin-top:10px;margin-bottom: 10px;">
        <a class="btn btn-primary" href="{{route('school.index')}}"> Back</a>
    </div>
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
<form action="{{route('school.update',$data->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>School ID:</strong>
                <input type="text" name="schoolId" class="form-control" value="{{$data->schoolId}}" placeholder="School ID">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>School Type:</strong>
                <select class="form-control" name="schoolType" value="">
                <option selected>{{$data->schoolType}}</option>
                <option>A1</option>
                <option>A2</option>
                <option>B1</option>
                <option>B2</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>School Category:</strong>
            <select class="form-control" name="schoolcategory" value="">
                <option selected>{{$data->schoolcategory}}</option>
                <option>Provincial</option>
                <option>Private</option>
                <option>Piriwen</option>
                <option>Central Government</option>
                <option>Other</option>
            </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Province:</strong>
                <select class="form-control" name="province" value="">
                <option selected>{{$data->province}}</option>    
                <option>Western Province</option>
                <option>Central Province</option>
                <option>Southern Province</option>
                <option>Uva Province</option>
                <option>Sabaragamuwa Province</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>District:</strong>
                <select class="form-control" name="district" value="">
                <option selected>{{$data->district}}</option>    
                <option>Colombo</option>
                <option>Gampaha</option>
                <option>Kaluthara</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Zonal Education Office:</strong>
                <select class="form-control" name="zonalEducationOffice" value="">
                <option selected>{{$data->zonalEducationOffice}}</option>       
                <option>Minuwangoda</option>
                <option>Gampaha</option>
                <option>Kadawatha</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Education Division:</strong>
                <select class="form-control" name="educationDivision" value="">
                <option selected>{{$data->educationDivision}}</option>
                <option>Mirigama</option>
                <option>Divlapitiya</option>
                <option>Veyangoda</option>
                <option>Nittabuwa</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>School Name:</strong>
                <input type="text" name="schoolName" class="form-control" value="{{$data->schoolName}}" placeholder="School Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <textarea class="form-control" style="height:150px" name="address" value="" placeholder="Address">{{$data->address}}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telephone No:</strong>
                <input type="text" class="form-control" name="telNo" value="{{$data->telNo}}" placeholder="Telephone No">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" value="{{$data->email}}" placeholder="Email Address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</form>
</div>

@endsection