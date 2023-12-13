@extends('layout.master')
@section('content')

<div class="row">
<div class="col-12 h-80">
				
<div class="top_breadc">
	<div class="top_breadcone"><i class='bx bxs-dashboard bx-lg card' ></i></div>
	  <div class="top_breadctwo">
	    <span class="breade_color">Stock page</span>
		<p class="breaderr">This is Stock page add information hole store.</p>   
      </div>
</div>	
	</div>
   </div>
    <div class="row">
	<div class="col-8 h-500">

<!--This is a follder opening show -->
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb"> 
    <li class="breadcrumb-item"><i class='bx bx-home bx-sm' ></i></li>
    <li class="breadcrumb-item"><a class="breade" href="#">Page</a></li>
    @foreach(Request::segments() as $segment)
    <li  class="breadcrumb-item"> <a href="#" class="breade">{{$segment}} </a> </li>
    @endforeach
</ol>
</nav>

<style>
	
	.breade_color{
		font-size: 25px;
		color: #484F56;
	}
	
		.breade{
		font-size: 20px;
		color: #484F56;
	}
	.breaderr{
		font-size: 13px;
		color: #484F56;
	}
	

	
	.top_breadc{
		height: 80px;
		width: 100%;
	  background: #FFFFFF;
	 // box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	
	.top_breadcone{
		height: 50px;
		width: 50px;;
		float: left;	
		padding-top:8px;	
	}
	
	.top_breadctwo{
		height: 30px;
		width:500px;
		float: left;
		padding-left:8px;	
	
	}
	
	.shodows{
		box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
	
	}
	
	
</style>




<div class="p-5 col-6">

<form action="{{ route('customerdateAdd')}}" id="myForm" method="post">
  <?php echo csrf_field(); ?>
  <div class="form-group">
    <input type="text" class="form-control" id="Name" name="customer_name" aria-describedby="emailHelp" placeholder="Name" required>
  </div> <br/>
  
  <div class="form-group">
    <input type="phone" min="11" class="form-control" id="mobile" maxlength="11" name="mobile" placeholder="Mobile"  required>
  </div><br/>
  
   <div class="form-group">
    <input type="text" class="form-control" id="address" name="address" placeholder="address" required>
   </div><br/>

  <button type="submit" onclick="suct()" class="btn btn-primary">Submit</button>
</form>



</div>


	</div>
	
	<div class="col-4 h-500">
	
	        </div>
             </div>


<div class="row">
	<div class="col-12 h-250">
	
	<div class="row">
	<div class="col-6 h-300">
		

	</div>
	<div class="col-6 h-300">
		
		
	</div>		
   </div>	
   </div>
  
@endsection
