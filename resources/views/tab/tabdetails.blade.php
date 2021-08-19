@extends('layouts.user')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<div class="container">
<br>
    <h2 class="text-center">Tab Details</h2>
    

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
                        <th>Serial Number</th>
                        <th>Tab Category[Student/Teacher]</th>
                        <th>Tab Name</th>
                        <th>Product Description</th>
                        <th>Iamge</th> 
                           
                                      
                    </tr>
                </thead>
                <tbody>
                
            <tr>
                <td>3456Awsd</td>
                <td>student</td>
                <td>BMVSTU1</td>
                <td>Ram-2gb
                    storage-16gb
                    camera-8px
                </td>
                <td class="w-25">
			      <img src="https://buyabans.com/upload/product/Laptop/ACPCLSP513I78G512SSD/1.jpg?1620124024495" class="img-fluid img-thumbnail" alt="tab">
		      </td>
                
            </tr>
            <tr>
                <td>1234AS456</td>
                <td>student</td>
                <td>BMVSTU1</td>
                <td>Technology-GSM / HSPA / 3G/4G
                Display Size-10.1 Inches
                Resolution-1280×800 pixels
                Internal Memory-32GB , 3 GB RAM
                </td>
                <td class="w-25">
			      <img src="https://buyabans.com/upload/product/Tab/GTTAB-A10GR/1.jpg?1624613742203" class="img-fluid img-thumbnail" alt="tab">
		      </td>
                
            </tr>
            <tr>
                <td>A3456cdh12</td>
                <td>teacher</td>
                <td>BMVTEA1</td>
                <td>Ram=2gb
                    storage=16gb
                    camera=8px
                </td>
                <td class="w-25">
			      <img src="https://buyabans.com/upload/product/Tab/GTTAB-A10BK/4.jpg?1624614909080" class="img-fluid img-thumbnail" alt="tab">
		      </td>
                
            </tr>
            <tr>
                <td>1234abc</td>
                <td>student</td>
                <td>BCSTU2</td>
                <td>Ram=2gb
                    storage=16gb
                    camera=8px
                </td>
                <td class="w-25">
			      <img src="https://buyabans.com/upload/product/Tab/GTTAB-A8PRGR/7.jpg?1622737638121" class="img-fluid img-thumbnail" alt="tab">
		      </td>
                
            </tr>
            <tr>
                <td>ssblk123</td>
                <td>teacher</td>
                <td>RBVTEA1</td>
                <td>Display Size-10.1 Inches
                Resolution-1280×800 pixels
                camera=8px
                </td>
                <td class="w-25">
			      <img src="https://buyabans.com/upload/product/Tab/GTTAB-A10GR/1.jpg?1624613742203" class="img-fluid img-thumbnail" alt="tab">
		      </td>
                
            </tr>
            <tr>
                <td>Sab35Avw23</td>
                <td>student</td>
                <td>BBCSTU1</td>
                <td>OS-Android OS,10.0 android Q
                storage-16gb
                    camera-8px
                    CPU-1.6 Ghz Dual Core Processor
                </td>
                <td class="w-25">
			      <img src="https://buyabans.com/upload/product/Laptop/ACPCLSP513I78G512SSD/1.jpg?1620124024495" class="img-fluid img-thumbnail" alt="tab">
		      </td>
                
            </tr>
            <tr>
                <td>TA435cadQ</td>
                <td>student</td>
                <td>RBVSTU3</td>
                <td>Technology-GSM / HSPA / 3G/4G
                Display Size-10.1 Inches
                Resolution-1280×800 pixels
                Internal Memory-32GB , 3 GB RAM
                </td>
                <td class="w-25">
			      <img src="https://buyabans.com/upload/product/Tab/GTTAB-A8PRGR/7.jpg?1622737638121" class="img-fluid img-thumbnail" alt="tab">
		      </td>
                
            </tr>
            <tr>
                <td>eAq12n56n</td>
                <td>teacher</td>
                <td>RBVTEA4</td>
                <td>
                Resolution-1280×800 pixels
                Internal Memory-32GB , 3 GB RAM
                    camera-8px
                </td>
                <td class="w-25">
			      <img src="https://buyabans.com/upload/product/Tab/GTTAB-A8PRGR/7.jpg?1622737638121" class="img-fluid img-thumbnail" alt="tab">
		      </td>
                
            </tr>
            <tr>
                <td>56Qade330</td>
                <td>student</td>
                <td>BMVSTU45</td>
                <td>Internal Memory-32GB , 3 GB RAM
                WLAN-Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot
                    camera-8px
                </td>
                <td class="w-25">
			      <img src="https://buyabans.com/upload/product/Tab/GTTAB-A8PRGR/7.jpg?1622737638121" class="img-fluid img-thumbnail" alt="tab">
		      </td>
                
            </tr>
            <tr>
                <td>ASQ134vff</td>
                <td>student</td>
                <td>BMVSTU7</td>
                <td>Ram=2gb
                    storage=16gb
                    camera=8px
                </td>
                <td class="w-25">
			      <img src="https://buyabans.com/upload/product/Tab/GTTAB-A8PRGR/7.jpg?1622737638121" class="img-fluid img-thumbnail" alt="tab">
		      </td>
                
            </tr>
</tbody>
<tfoot>
    
             <tr>
                        <th>Serial Number</th>
                        <th>Tab Category[Student/Teacher]</th>
                        <th>Tab Name</th>
                        <th>Product Description</th>
                        <th>Iamge</th>         
            </tr>
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