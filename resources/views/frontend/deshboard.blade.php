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
	<div class="container">
	 <div class="bg-blue  card-btm-border card-boder ">
	  <div class="container-fluid h-10 w-100 p-1 widget-chart widget-chart2  card-btm-border  card">
	   <h3 class="text-center ">Sales to Today</h3>
	   </div>
	 </div>
	</div>
   </div> 
 


 <div class="container-fluid">
  <div class="col-3 h-150 ">
   <div class="container">
	<div class="bg-red  card-btm-border card-boder ">
	  <div class="container-fluid h-10 w-100 p-1 widget-chart widget-chart2  card-btm-border  card">
	    <h3 class=" text-center">Wellcome </br> to </br> Shop name</h3>
	  </div>
	</div>
   </div>
  </div> 
 </div>


 <div class="container-fluid">
  <div class="col-3 h-150 ">
   <div class="container">
	<div class="bg-red  card-btm-border card-boder ">
	  <div class="container-fluid h-10 w-100 p-1 widget-chart widget-chart2  card-btm-border  card">
	    <h3 class=" text-center">Wellcome </br> to </br> Shop name</h3>
	  </div>
	</div>
   </div>
  </div>
 </div>


 <div class="container-fluid">
  <div class="col-3 h-150 ">
   <div class="container">
	<div class="bg-red  card-btm-border card-boder ">
	  <div class="container-fluid h-10 w-100 p-1 widget-chart widget-chart2  card-btm-border  card">
	    <h3 class=" text-center">Wellcome </br> to </br> Shop name</h3>
	  </div>
	 </div>
   </div>
  </div>	
 </div>
 </div>
</div>
 
 

<div class="row">
	<div class="col-9 h-500">
		<a href="{{route('home')}}"  class="textand" >home</a>
		<a href="{{route('product')}}"  class="textand" >product</a>
		<a href="{{route('oder')}}"  class="textand" >oder</a>
		<a href="{{route('customer')}}"  class="textand" >customer</a>

		<h1>Deshboard page</h1>
		
		@if(session()->has('success'))	
		<h2>aa{{session('success')}}</h2>
		@endif
		
		@auth
	
		{{auth()->user()}}
		@endauth
		
		
		
		<h1> <a href="{{route('loginout')}}">Out</a> </h1>
		<h1> <a href="{{route('chonchol')}}">data show</a> </h1>
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




@endsection