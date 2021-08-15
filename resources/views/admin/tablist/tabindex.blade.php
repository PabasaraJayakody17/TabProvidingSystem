@extends('layouts.admin')

@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="pull-left">Tab List</h1>
        </div>
        <div class="col-lg-12 pull-left" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-success " href="{{route('admin.createtab')}}"> Add New Tab</a>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Serial Number</th>
                <th>Category</th>
                <th>Tab Name</th>
                <th>Product Description</th>
                <th width="280px">More</th>
            </tr>
            @foreach ($tablist as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->serialNumber}}</td>
                <td>{{$data->category}}</td>
                <td>{{$data->tabName}}</td>
                <td>{{$data->description}}</td>
                <td>
               
                <a class="btn btn-info" href="{{ route('admin.showtab',$data->id)}}">Show</a>
                <a class="btn btn-primary" href="{{ route('admin.edittab',$data->id) }}">Edit</a>
                <a class="btn btn-danger" href="{{ route('admin.tabdestroy',$data->id) }}">Delete</a>
               
             
                </td>
            </tr>
            @endforeach

        </table>
@endsection