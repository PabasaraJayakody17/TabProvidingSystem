<!--this is page.-->
@extends('layouts.app')

@section('content')
<div class="container">
    <a  href="{{route('tab.addrequest')}}">
        tab Request
    </a>
    <a class="ml-3" href="{{route('tab.viewrequest')}}">
        View Request
    </a>
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
                        <th>Postal Address</th>  
                        <th>Reason for the request</th>  
                        <th>Request Status </th>                  
                        <th>Actions</th>    
                                      
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $d->user->name }}</td>
                        <td>{{ $d->student_or_teacher }}</td>
                        <td>{{ $d->grade }}</td>
                        <td>{{ $d->telNo }}</td>
                        <td>{{ $d->postalAddress }}</td>
                        <td>{{ $d->reason }}</td>
                        @if($d->user->tab_status == 0)
                          <td>
                        <a href="{{route('tab.updateTabStatus',$d->userId)}}" class="btn btn-success btn-md">Confirm Request</a>
                          </td>                  
                        @elseif($d->user->tab_status == 1 )
                          <td>Requested</td>
                        @else
                          <td>Accepted</td>                  
                        @endif                  
                        <td>
                            <a href="{{route('tab.editrequest',$d->id)}}" class="btn btn-primary btn-md">Edit</a>
                            <a href="{{route('tab.destroy',$d->id)}}" class="btn btn-danger btn-md">Delete</a>                          
                        </td>
                      
                    </tr>
                @endforeach 
                </tbody>
            </table>
           
                
                 
           
         
        </div>
    </div>
</div>
@endsection