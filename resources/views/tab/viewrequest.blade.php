<!--this is page.-->
@extends('layouts.user')

@section('content')
<div class="container">
    <!--a  href="{{route('tab.addrequest')}}">
        tab Request
    </a>
    <a class="ml-3" href="{{route('tab.viewrequest')}}">
        View Request
    </a-->
    <br>
    <h2 class="text-center">CHECK YOUR INFORMATION</h2>
    <hr class="mb-4 ml-5 mt-3">
    <!--h5 class="text-center">Check your information again and confirm your request.</h5-->
  
    @if(Session::get('success'))
           <div class="alert alert-success">{{ Session::get('success') }}</div>
    @elseif(Session::get('error'))
           <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif
    <div class="card mb-4 ml-5"  style="width: 75rem;">
        <div class="card-header bg-primary text-white">
            <i class="fas fa-table me-1"></i>
            Check Your Information
        </div>
        <div class="card-body" >

            <table class="table table-striped" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>School</th>
                        <th>Zone</th>
                        <th>District</th>
                        <th>Status</th>
                        <th>Grade</th>
                        <th>Tel.No.</th>
                        <th>Postal Address</th>
                        <th>Reason</th>                   
                        <th>Request Status </th>
                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $d->user->name }}</td>
                        <td>{{ $d->schoolName  }}</td>
                        <td>{{ $d->zonalEducationOffice }}</td>
                        <td>{{ $d->district }}</td>
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
                        <td  width="20%">
                            <a style="width: 100%;" href="{{route('tab.editrequest',$d->id)}}" class="btn btn-primary btn-md">Edit</a><br><br>
                            <a style="width: 100%;" href="{{route('tab.destroy',$d->id)}}" class="btn btn-danger btn-md">Delete</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>





        </div>
    </div>
</div>
@endsection
