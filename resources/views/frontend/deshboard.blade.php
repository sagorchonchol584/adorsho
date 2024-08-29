@extends('layout.master')
@section('content')

<div class="row">
<div class="col-12 h-80">
				
<div class="top_breadc">
	<div class="top_breadcone"><i class='bx bxs-dashboard bx-lg card' ></i></div>
	  <div class="top_breadctwo">
	    <span class="breade_color">Deshboard page</span>
		<p class="breaderr">This is deshboard page add information whole store.</p>   
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
    <li class="breadcrumb-item"><a class="breade" href="#">Deshboard</a></li>
    @foreach(Request::segments() as $segment)
    <li  class="breadcrumb-item"> <a href="#" class="breade">{{$segment}} </a> </li>
    @endforeach
</ol>
</nav>
</div>
</div>


<div class="row">
<div class="col-12 m-0">
 <div class="bg-my">
  <div class="row m-2">
   <div class="container-fluid">
	 <div class="col-12 "> 
	   <div class="mbg-3 alert alert-info alert-dismissible fade show" role="alert">
	 	<span class="pr-2"><i class="fa fa-question-circle"></i></span>
	 	This dashboard example was created using only the available elements and components, no additional SCSS was
	 	written!
	   </div> 
	 </div>
   </div>
 </div> 
 </div>

 

 <div class="row m-2">
  <div class="container-fluid">
   <div class="col-3 h-150 ">
	<div class="container ">
	<div class="testttt">
	 <div class="bg-blue card-btm-border card-boder">
		<div class="container-fluid h-10 w-100 p-1 widget-chart widget-chart2  card-btm-border  card h-75">
	   <span class="text-left fw-bold text-black-50 m-1 "> SALES TODAY</span>
	   <span class=" text-left fw-bold fs-1">
	   <span id="takas">Loading..</span>
	   <svg class=" " width="30" height="30"> <use xlink:href="#taka"/></svg>
	   </span>
	 



	
	   </div>
		</div>
	 </div>
	</div>
   </div> 
 


 <div class="container-fluid">
  <div class="col-3 h-150 ">
   <div class="container">
	<div class="bg-red  card-btm-border card-boder ">
	<div class="container-fluid h-10 w-100 p-1 widget-chart widget-chart2  card-btm-border  card h-75">
	   <span class="text-left fw-bold text-black-50">NOMBER OF SALES</span>
	   <span class=" text-left fw-bold fs-1">
	   <span id="salesproduct">Loading..</span>
	  
	   </span>

	</div>
	</div>
   </div>
  </div> 
 </div>


 <div class="container-fluid">
  <div class="col-3 h-150 ">
   <div class="container">
	<div class="bg-yellow  card-btm-border card-boder ">
	  <div class="container-fluid h-10 w-100 p-1 widget-chart widget-chart2  card-btm-border card h-75">
	  <span class="text-left text-center fw-bold text-black-50">COMPANY VALUE</span>
	  <span class=" text-left fw-bold fs-1">
	   <span id="COMVALUE">Loading..</span>
	   <svg class=" " width="30" height="30"> <use xlink:href="#taka"/></svg>
	   </span>
	  </div>
	</div>
   </div>
  </div>
 </div>


 <div class="container-fluid">
  <div class="col-3 h-150 ">
   <div class="container">
	<div class="bg-green  card-btm-border card-boder ">
	  <div class="container-fluid h-10 w-100 p-1 widget-chart widget-chart2  card-btm-border  card h-75 ">
	  <span class="text-left text-center fw-bold text-black-50">TOTAL PRODUCT ITEMS</span>
	  <span class=" text-left fw-bold fs-1">
	   <span id="product">Loading..</span>
	  
	   </span>
	  </div>
	 </div>
   </div>
  </div>	
 </div>
 </div>
</div>
 
 

<div class="row">
	<div class="col-9 h-500">	
		@if(session()->has('success'))	
		<h2>{{session('success')}}</h2>
		@endif
		
		@auth
	
		{{auth()->user()}}
		@endauth
	
		
	</div>
	<div class="col-3 h-500">ii</div>
</div>


<div class="row">
	<div class="col-4 h-250">ii</div>
	<div class="col-4 h-250">ii</div>
	<div class="col-4 h-250">ii</div>
</div>
</div>


</div>

<script>
	var takss=document.getElementById('takas');
	var product=document.getElementById('product');
	var salesproduct=document.getElementById('salesproduct');
	var totalcomvalues=document.getElementById('COMVALUE');
	
	check();
	totalproduct();

//takss.innerHTML=getNumber(1600850);

function numberWithCommas(number,totals,comvalue) {


    var parts = number.toString().split('.');
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');

	var partscomvalue = comvalue.toString().split('.');
    partscomvalue[0] = partscomvalue[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');


	takss.innerHTML=parts.join('.');
	salesproduct.innerHTML=totals;
	totalcomvalues.innerHTML=partscomvalue.join('.');
}


function check(){
    $.ajax({
    type: 'GET', //THIS NEEDS TO BE GET
    url: '/tkshow/',
    success: function (data) {
      //  console.log("date add refurn value"+data); 
	  var dategert=JSON.parse(data);
	  numberWithCommas(dategert.Total_product,dategert.salesproduct,dategert.totalcomvalu); 
		
    },
    error: function() { 
		takss.innerHTML="Loading....";
        // console.log(data);
    }
   });
    }



function totalproduct(){
    $.ajax({
    type: 'GET', //THIS NEEDS TO BE GET
    url: '/totalproduct/',
    success: function (data) {
      //  console.log("date add refurn value"+data); 
	  
	  product.innerHTML=data;
    },
    error: function() { 
		product.innerHTML="Loading....";
        // console.log(data);
    }
});
}


	
</script>


@endsection