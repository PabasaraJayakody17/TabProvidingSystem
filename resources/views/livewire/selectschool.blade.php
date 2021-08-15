@extends('layouts.user')

@section('content')
<div class="container">

    <!-- <br>
    <h2 class="text-center">We will provide you a tab.</h2>
    <h5 class="text-center">Enter your information... Request for a tab...</h5> -->


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">

                    <form method="POST" action="{{route('livewire.selectschool')}}" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group row">
                        <strong>District:</strong>
                        <select class="form-control custom-select" wire:model="selectedDistrict">
                            <option value="">Select District</option>
                            @foreach($school as $schl)
                                <option value="{{ $schl->schoolId }}">{{ $schl->district }}</option>
                            @endforeach

                        </select>
                        </div>

                        @if (!is_null($zones))
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="status">Select a Zone</label>
                                <select class="form-control" wire:model="selectedZones">
                                    <option value="">Select a Zone</option>
                                    @foreach ($zones as $zone)
                                    <option value="{{ $zone->schoolId }}">{{ $zone->zonalEducationOffice }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @endif




                        <div class="form-group row ml-5">
                            <div class="col-md-3"></div>
                            <div class="col-md-6 text-center ">
                                <button type="submit" class="btn btn-primary  btn-block" wire:loading.attr="disabled">
                                    {{ __('Submit') }}
                                </button>
                                <div wire:loading>
                                    Hold on..
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

