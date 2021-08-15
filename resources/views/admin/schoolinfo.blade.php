@extends('layouts.admin')

@section('content')

<div class="container">
<div class="pull-left">
    <h1>School Information</h1>
</div>
<div class="form-group row">
    <div class="col-lg-12 margin-tb" style="margin-top:10px;margin-bottom: 10px;">
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('admin.createschool')}}">Add New School</a>
        </div>
    </div>
</div>       
    @if($msg = Session::get('add'))
        <div class="alert alert-success">
            <p>{{$msg}}</p>
        </div>    
    @endif
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>School Id</th>
                <th>School Type</th>
                <th>School Category</th>
                <th>Province</th>
                <th>District</th>
                <th>Zonal Education Office</th>
                <th>Education Division</th>
                <th>School Name</th>
                <th>Address</th>
                <th>TelNo</th>
                <th>Email</th>
                <th>More</th>
            </tr>
            @foreach ($school as $data)
            <tr>
              <td>{{$data->id}}</td>
              <td>{{$data->schoolId}}</td>
              <td>{{$data->schoolType}}</td>
              <td>{{$data->schoolcategory}}</td>
              <td>{{$data->province}}</td>
              <td>{{$data->district}}</td>
              <td>{{$data->zonalEducationOffice}}</td>
              <td>{{$data->educationDivision}}</td>
              <td>{{$data->schoolName}}</td>
              <td>{{$data->address}}</td>
              <td>{{$data->telNo}}</td>
              <td>{{$data->email}}</td>
              <td>
                    
                    <a class="btn btn-primary mt-2" href="{{route('admin.editschool',$data->id)}}">Edit</a>
                
                    <a class="btn btn-danger mt-2" href="{{route('admin.schooldestroy',$data->id)}}">Delete</a>
                
                  
                   
              </td>

            </tr>
            @endforeach       
            </table>

</div>



@endsection