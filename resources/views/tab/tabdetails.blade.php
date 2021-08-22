@extends('layouts.user')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<div class="container">
<br>
    <h2 class="text-center">TAB INFORMATION</h2>
    <hr class="mb-4 ml-5 mt-3">

    <div class="card mb-4 ml-5">
  <h5 class="card-header bg-info text-white">  
  <i class="fas fa-exclamation-triangle "></i> Instructions</h5>
  <div class="card-body">
    <h5 class="card-title">General Instructions related to the tab computer</h5>
    <p class="card-text"><i class="fas fa-edit"></i> Follow the manufacturer's instructions on how to charge the battery to activate the computer to get started</p>
    <p class="card-text"><i class="fas fa-edit"></i> Use a charging rack provided to charge the battery and be careful about safety.
    </p>
    <p class="card-text"><i class="fas fa-edit"></i> Installation of accessories for the computer should be done only with the permission of the teacher in charge of the subject</p>
    <p class="card-text"><i class="fas fa-edit"></i> Use without water, chemicals etc.</p>

  </div>
</div> 

<div class="card mb-4 ml-5">
        <div class="card-header bg-primary text-white">
            <i class="fas fa-table me-1"></i>
            Tab Information
        </div>
        <div class="card-body">
        <table class="table table-striped" id="datatablesSimple">
        <thead>
                    <tr>
                        <!--th>Serial Number</th>
                        <th>Tab Category[Student/Teacher]</th>
                        <th>Tab Name</th>
                        <th>Product Description</th>
                        <th>Iamge</th--> 
                        <th>No</th>
                        <th>Serial Number</th>
                        <th>Tab Category[Student/Teacher]</th>
                        <th>Tab Name</th>
                        <th>Product Description</th>
                        <th>Image</th> 
                                      
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tablist as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->serialNumber}}</td>
                        <td>{{$data->category}}</td>
                        <td>{{$data->tabName}}</td>
                        <td>{{$data->description}}</td>
                        <td><img src="/image/{{ $data->image }}" width="100px"></td>
                    </tr>
                    @endforeach
         
</tbody>
<tfoot>
    
             <!--tr>
                        <th>Serial Number</th>
                        <th>Tab Category[Student/Teacher]</th>
                        <th>Tab Name</th>
                        <th>Product Description</th>
                        <th>Iamge</th>         
            </tr-->
</tfoot>
        </table>
        </div>
</div>
</div>
<script>
    $('#datatablesSimple').DataTable();
</script> 
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('js/datatables-simple-demo.js')}}"></script>         
@endsection