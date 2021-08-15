@extends('layouts.admin')

@section('content')

<h1 class="mt-4">Dashboard</h1>
    <div>
        @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{session('status')}}
            </div>
        @endif
    </div>
    
    <br>
    <!--ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Static Navigation</li>
    </ol-->

<div class="row">
    <div class="col-xl-4 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body text-center">User Count</div>
            <div class="card-footer align-items-center">
                <p class="small text-white text-center"> {{count($users)}}</p>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card bg-info text-white mb-4">
            <div class="card-body text-center">Tab Count</div>
            <div class="card-footer align-items-center">
                <p class="small text-white text-center"> {{count($tabs)}}</p>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body text-center">School Count</div>
            <div class="card-footer align-items-center">
                <p class="small text-white text-center"> {{count($schools)}}</p>
            </div>
        </div>
    </div>
    <!--div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">Danger Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div-->
</div>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Tab Request Information
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Student/Teacher</th>
                    <th>Grade</th>
                    <th>Tel.No</th>
                    <th>Address</th>
                    <th>Reason</th>
                    <th>Request Status</th>
                    <th>Change Status</th>
                    <th>Remove User</th>                         
                </tr>
            </thead>
            <!--tfoot>
                <tr>
                    <th>Name</th>
                    <th>Student/Teacher</th>
                    <th>Grade</th>
                    <th>Tel.No</th>
                    <th>Address</th>
                    <th>Reason</th>
                    <th>Request Status</th>
                    <th>Change Status</th>
                    <th>Remove User</th>    
                </tr>
            </tfoot-->
            <tbody>
                @foreach ($users as $u)
                    @if($u->user->role == 'user')
                    <tr>                  
                       <td>{{$u->user->name}}</td>                                            
                       <td>{{$u->student_or_teacher}}</td> 
                       <td>{{ $u->grade }}</td>
                       <td>{{ $u->telNo }}</td>
                       <td>{{ $u->postalAddress }}</td>
                       <td>{{ $u->reason }}</td>     
                        @if($u->user->tab_status == 0)
                          <td>Not Requsted</td>
                        @elseif($u->user->tab_status == 1 )
                          <td>Requested</td>
                        @else
                           <td>Accepted</td>
                        
                        @endif  
                   
                        <td>
                            <a href="{{route('user.updateTabStatus',$u->user->id)}}" class="btn btn-primary btn-sm">Accepted</a>
                            <a href="{{route('user.updateTabStatusBack',$u->user->id)}}" class="btn btn-success btn-sm">Requested</a>
                            <a href="{{route('user.updateTabStatusToZero',$u->user->id)}}" class="btn btn-warning btn-sm">Not Requested</a>
                        </td>   
                        <td><a href="{{route('user.delete',$u->user->id)}}" class="btn btn-danger btn-sm">Remove</a></td>                              
                    </tr>
                    @endif
                @endforeach
               
                
            </tbody>
        </table>
    </div>
</div>
@endsection