@extends('layouts.user')

@section('content')
<div class="container">

    <br>
    <h2 class="text-center">SELECT SCHOOL</h2>



    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 <div class="card-header bg-primary text-white">{{ __('School') }}</div>
                 <div class="card-body">
                    <form method="GET" action="{{route('tab.addrequest')}}" >
                        @csrf

                        <div class="form-group row">
                        <!-- <strong>School:</strong> -->
                        <select name="school" class="form-control custom-select">
                            <option value="">Select School</option>
                            @foreach($school as $schl)
                                <option value="$schl->schoolName">{{ $schl->schoolName }}</option>
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
