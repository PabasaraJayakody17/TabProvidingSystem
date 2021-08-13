@extends('layouts.admin')

@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="pull-left">Tab List</h1>
        </div>
        <div class="col-lg-12 pull-left" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-success " href="{{route('tablist.create')}}"> Add Tab</a>
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
                <form action="{{ route('tablist.destroy',$data->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('tablist.show',$data->id)}}">Show</a>
                <a class="btn btn-primary" href="{{ route('tablist.edit',$data->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach

        </table>
@endsection