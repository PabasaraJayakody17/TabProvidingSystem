@extends('layouts.user')

@section('content')
<div class="container">
    <h2 class="mb-4 ml-5 mt-3">Dashboard</h2>
    <hr class="mb-4 ml-5 mt-3">
    <div class="row  mb-4 ml-5">
        <div class="col-md-4">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-body text-center">
                    <i class="fas fa-folder fa-5x"></i>
                    <h4 class="text-white"><a class="text-white" href="{{route('tab.choosedistrict')}}">BOOKING NOW</a></h4>
                </div>
              </div>
            
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-body text-center">
                    <i class="fas fa-folder fa-5x"></i>
                    <h4 class="text-white"><a class="text-white" href="{{route('tab.viewrequest')}}">BOOKING HISTORY</a></h4>
                </div>
              </div>
            
        </div>
    </div>
    


</div>

@endsection