@extends('layouts.user')

@section('content')
<div class="container">

    <br>
    <h2 class="text-center">SELECT ZONE</h2>


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

            <div class="card-header bg-primary text-white">{{ __('Zone') }}</div>
                <div class="card-body">

                    <form method="POST" action="{{route('tab.selectschool')}}" >
                        @csrf

                        <div class="form-group row">
                        <!-- <strong>Zone:</strong> -->
                        <select name="zonalEducationOffice" class="form-control custom-select">
                            <option value="">Select Zone</option>
                            @foreach($school as $schl)
                                <option value="{{ $schl->zonalEducationOffice }}"  selected>{{ $schl->zonalEducationOffice}}</option>
                            @endforeach

                        </select>
                        </div>




                        <div class="form-group row ml-5">
                            <div class="col-md-3"></div>
                            <div class="col-md-6 text-center ">
                                <button type="submit" class="btn btn-primary  btn-block">
                                    {{ __('Submit') }}
                                </button>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
