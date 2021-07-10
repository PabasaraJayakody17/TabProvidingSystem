<!--this is page.-->
@extends('layouts.app')

@section('content')
<div class="container">
    <h5>We can give you a Tab...!!</h5>
    <h5>Check your information again and confirm your request.</h5>

    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <i class="fas fa-table me-1"></i>
            Check Your Information
        </div>
        <div class="card-body">
            @if(Session::get('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            <table class="table table-striped" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Student/Teacher</th>
                        <th>Grade</th>
                        <th>Tel Number</th> 
                        <th>Email Address</th>
                        <th>Postal Address</th>  
                        <th>Reason for the request</th>                       
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $d->user->name }}</td>
                        <td>{{ $d->student_or_teacher }}</td>
                        <td>{{ $d->grade }}</td>
                        <td>{{ $d->telNo }}</td>
                        <td>{{ $d->emailAddress }}</td>
                        <td>{{ $d->postalAddress }}</td>
                        <td>{{ $d->reason }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row"> 
                <div><a href="{{route('tab/editrequest',$data->id)}}" class="btn btn-primary btn-md">Edit</a></div>
                <div><a href="{{route('tab/deleterequest',$data->id)}}" class="btn btn-danger btn-md">Delete</a></div>
                <div><a href="" class="btn btn-success btn-md">Confirm Request</a></div>
                 
                 
            </div>
        </div>
    </div>
</div>
@endsection