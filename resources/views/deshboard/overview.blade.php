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
 
 <style>
   .barchart{
      width: 99%;
      height: 400px;
      text-align: center;
   }
 </style>

<div class="row">
	<div class="col-9 h-500 border">	
   <div class="row">
	<div class="col-6 h-500 border">	
      <div class="barchart">
      <canvas id="myChart" style="width:100%; max-width:700px; height: 200px;"></canvas>
      </div>
  

   </div>
	<div class="col-6 h-500 border">
   <div class="barchart">
      <canvas id="myChrt" style="width:100%; max-width:500px"></canvas>
      </div>
   </div>
</div>


   </div>
	<div class="col-3 h-500 border">
   <canvas id="myChrweb"  style="width:100%;max-width:700px"></canvas>

   </div>
</div>






<div class="row">
	<div class="col-9 h-500 border">	
   <div class="row">
	<div class="col-6 h-500 border">	
      <div class="barchart">
   
      

      </div>
  

   </div>
	<div class="col-6 h-500 border">
   <div class="barchart">
    
   


      </div>
   </div>
</div>


   </div>
	<div class="col-3 h-500 border">
  
   
   

   </div>
</div>






</div>


</div>


<script>


let ctxs = document.getElementById('myChart');
let ctxsd = document.getElementById('myChrt');
let myChrweb = document.getElementById('myChrweb');
let myChart;
let Jsondata;
 
const datadd = [
   { "month": "Ian", "income": 1210 },
    { "month": "Feb", "income": 1920},
    { "month": "mar", "income": 830 },
    { "month": "Apr", "income": 1300 },
    { "month": "Mai", "income": 990 }
];
 
createChart(datadd, 'bar',ctxs);
createChart(datadd, 'doughnut',ctxsd);
createChartweb(datadd, 'radar',myChrweb);


function createChart(data, type,ctx){
   myChart = new Chart(ctx, { 
      type: type, 
      data: {
         labels: data.map(row => row.month),  
         datasets: [{
            label: '# Total sale some months',
            data: data.map(row => row.income),
            borderWidth: 1,
            // backgroundColor: [
            //    'rgba(255, 99, 132, 0.2)',
            //    'rgba(255, 159, 64, 0.2)',
            //    'rgba(255, 205, 86, 0.2)',
            //    'rgba(75, 192, 192, 0.2)',
            //    'rgba(54, 162, 235, 0.2)',
            //    'rgba(153, 102, 255, 0.2)',
            //    'rgba(201, 203, 207, 0.2)'
            //  ],
            //  borderColor: [
            //    'rgb(255, 99, 132)',
            //    'rgb(255, 159, 64)',
            //    'rgb(255, 205, 86)',
            //    'rgb(75, 192, 192)',
            //    'rgb(54, 162, 235)',
            //    'rgb(153, 102, 255)',
            //    'rgb(201, 203, 207)'
            //  ],


       backgroundColor: [
               '#61bc84',
               '#8FBC8F',
               '#c6ffe6',
               '#FFAD3F',
               '#e0e0e0'
             ],
             borderColor: [
               '#2E8B57',
               '#8FBC8F',
               '#c6ffe6',
               '#FFAD3F',
               '#e0e0e0'
             ],


        }]

      },
      options: {
         scales: {
            y: {
               beginAtZero: true
            }
         },     
         responsive: true,
         maintainAspectRatio: false,
      }
   });
}
 

function createChartweb(data, type,ctx){
   myChart = new Chart(ctx, { 
      type: type, 
      data: {
         labels: data.map(row => row.month),  
         datasets: [{
            label: '# of Income',
            data: data.map(row => row.income),
            borderWidth: 1,
            backgroundColor: [
               'rgba(255, 99, 132, 0.2)',

             ],
             borderColor: [
               'rgb(255, 99, 132)',
             ],

        }]

      },
      options: {
         scales: {
            y: {
               beginAtZero: true
            }
         },     
         responsive: true,
         maintainAspectRatio: false,
      }
   });
}
 

function setChartType(chartType){
   myChart.destroy();
   createChart(Jsondata, chartType);
}





















	var takss=document.getElementById('takas');
	var product=document.getElementById('product');
	var salesproduct=document.getElementById('salesproduct');
	var totalcomvalues=document.getElementById('COMVALUE');
	
	check();

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
    url: '{{ route('deshboard-all-info-route') }}',
    success: function (data) {
	  var dategert=JSON.parse(data);
	  numberWithCommas(dategert.Total_product,dategert.salesproduct,dategert.totalcomvalu); 
	  product.innerHTML=dategert.total_product;
    },
    error: function() { 
		takss.innerHTML="Loading....";
        // console.log(data);
		product.innerHTML="Loading....";
    }
   });
    }


</script>


@endsection