@extends('layout.master')
@section('content')

<div class="row">
<div class="col-12 h-80">
				
<div class="top_breadc">
	<div class="top_breadcone"><i class='bx bxs-dashboard bx-lg card' ></i></div>
	  <div class="top_breadctwo">
	    <span class="breade_color">Supplier page</span>
		<p class="breaderr">This is product supplier page add information whole store.</p>   
      </div>
</div>	
</div>
</div>

<div class="row"> 
<div class="col-12 h-60">
<!--This is a follder opening show -->
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb"> 
    <li class="breadcrumb-item"><i class='bx bx-home bx-sm' ></i></li>
    <li class="breadcrumb-item"><a class="breade" href="#">Supplier</a></li>
    @foreach(Request::segments() as $segment)
    <li  class="breadcrumb-item"> <a href="#" class="breade">{{$segment}} </a> </li>
    @endforeach
</ol>
</nav>
</div>
</div>


<div class="row">
<div class="col-12 h-750">
<div class="row">
<div class="col-12 h-120 card">

<!------------------This is a top info bar ------------------>
<div class="row">
<div class="col-3 h-120"> 

<div class="row">
<div class="col-3 h-120 p-3"> 
<div class="cerlll p-2" ><i class='bx bxs-calendar bx-lg'></i> </div>  
</div>

<div class="col-9 h-120 "> 
<div class="row">
<div class="col-12 h-70 fs-4 fw-bold  pt-4"><span>00.00 Tk</span></div>
<div class="col-12 h-50 fs-5 fw-bold  pt-1"><span>MONTH TO DATE</span></div>
</div>
</div>
</div>

</div>

<div class="col-3 h-120">

<div class="row">
<div class="col-3 h-120 p-3"> 
<div class="cerlll p-2" ><i class='bx bxs-calendar-alt bx-lg'></i> </div>  
</div>

<div class="col-9 h-120 "> 
<div class="row">
<div class="col-12 h-70 fs-4 fw-bold  pt-4"><span>00.00 Tk</span></div>
<div class="col-12 h-50 fs-5 fw-bold  pt-1"><span>YEAR TO DATE</span></div>
</div>
</div>
</div>
</div>

<div class="col-3 h-120">

<div class="row">
<div class="col-3 h-120 p-3"> 
<div class="cerlll p-2" ><i class='bx bx-money bx-lg'></i> </div>  
</div>

<div class="col-9 h-120 "> 
<div class="row">
<div class="col-12 h-70 fs-4 fw-bold  pt-4"><span>00.00 Tk</span></div>
<div class="col-12 h-50 fs-5 fw-bold  pt-1"><span>UNPAID</span></div>
</div>
</div>
</div>

</div>

<div class="col-3 h-120">

<div class="row">
<div class="col-3 h-120 p-3"> 
<div class="cerlll p-2" ><i class='bx bxs-file-blank bx-lg'></i> </div>  
</div>

<div class="col-9 h-120 "> 
<div class="row">
<div class="col-12 h-70 fs-4 fw-bold  pt-4"><span>00.00 Tk</span></div>
<div class="col-12 h-50 fs-5 fw-bold  pt-1"><span>INVOICE DUE</span></div>
</div>
</div>
</div>

</div>

</div>

<!------------------This is a top info bar ------------------>
<style>
.my-custom-scrollbar {
position: relative;
height: 520px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}	
</style>

</div>
<div class="col-12 h-600">
<div class="row">
<div class="col-9 h-600 card">

<div class="table-wrapper-scroll-y my-custom-scrollbar">
      <table class="table table-striped table-bordered" id="section1" >
       <thead>
        <tr>
         
         <th></th>
         <th>Product Name</th>
		 <th>Prices</th>
		 <th><span><input type="checkbox" id="allselected"></span></th>
        </tr>
       </thead>
       <tbody class="supplierLog">

       </tbody>
      </table>
     </div>


</div>
<div class="col-3 h-600 card">
<div class="table-wrapper-scroll-y my-custom-scrollbar">
      <table class="table table-striped table-bordered" id="section1" >
       <thead>
        <tr>
         
         <th>Product Name</th>
         <th>Unity</th>
		 <th>Prices</th>
		 <th><span><input type="checkbox" id="allselected"></span></th>
        </tr>
       </thead>
       <tbody class="supplier">

       </tbody>
      </table>
     </div>
<button class="btn bg-primary" onclick="datatranfer()">use</button>
</div>
</div>
</div>
</div>
</div>

</div>



<script>


fetch_customer_data();
//button_chack_for_sent();



function fetch_customer_data()
 {
  $.ajax({
  method:'GET',
   url:"{{ route('supplierstates') }}",
   dataType:'json',
   success:function(data)
   {
    $('.supplier').html(data.table_data);
  //  $('#total_records').text(data.total_data);
   //   console.log(data.total_data);
      button_chack_for_sent();
	  if(parseInt(data.total_data)==0){
		allselect.disabled=true;
		datasent.disabled=true;
	  }else{
		allselect.disabled=false;
		datasent.disabled=true;
	  }
   }
  });

  $.ajax({
  method:'GET',
   url:"{{ route('supplierlog') }}",
   dataType:'json',
   success:function(data)
   {
    $('.supplierLog').html(data.table_data);
  //  $('#total_records').text(data.total_data);
   //   console.log(data.total_data);
      button_chack_for_sent();
	  if(parseInt(data.total_data)==0){
		allselect.disabled=true;
		datasent.disabled=true;
	  }else{
		allselect.disabled=false;
		datasent.disabled=true;
	  }
   }
  });

 }


 function datatranfer() {
$.ajaxSetup({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });
 $.ajax({
     type: 'POST', //THIS NEEDS TO BE GET
     url: '/chackingtwo/',
     data: {catagory_name:myArray}, 
     success: function (data) {
        console.log("date add refurn value"+data); 
     },
     error: function() { 
      // meass.innerHTML="Data failed";
      //    console.log(data);
     }
    });
   }

</script>






@endsection