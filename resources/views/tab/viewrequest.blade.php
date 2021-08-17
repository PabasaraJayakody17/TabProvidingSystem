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
    <h2 class="text-center">We can give you a Tab...!!</h2>
    <h5 class="text-center">Check your information again and confirm your request.</h5>
        @if(Session::get('success'))
            <div class="alert alert-success mb-4 ml-5">{{ Session::get('success') }}</div>
        @endif
    <div class="card mb-4 ml-0">
        <div class="card-header bg-primary text-white">
            <i class="fas fa-table me-1"></i>
            Check Your Information
        </div>
        <div class="card-body">

            <table class="table table-striped" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Student/Teacher</th>
                        <th>Grade</th>
                        <th>Tel Number</th>
                        <th>Postal Address</th>
                        <th width="15%">Reason for the request</th>
                        <th>School</th>
                        <th>Zone</th>
                        <th>District</th>
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
                        <td>{{ $d->schoolName  }}</td>
                        <td>{{ $d->zonalEducationOffice }}</td>
                        <td>{{ $d->district }}</td>
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
