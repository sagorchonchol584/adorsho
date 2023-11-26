@extends('layout.master')
@section('content')
<div class="col-12 h-900">

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

.form_hand{
	height: 80%;
	width: 100%;
	padding-left: 50px;
}

.full_from{
	height: 100%;
	width: 100%;
	
}
	.active_full{
		height: 100%;
	   width: 95%;
	  text-align: right;
	    padding-top:5px;
	}
	.headto{
		
		height: 400px;
		padding: 10px;
		margin-top: 5px;
	}
	
	.paging{
		
		text-align: center;
		width: 100%;
		background: red;
	}
	.searchbar{
		padding-left: 180px;
	  
	
	}
	
	.shodows{
		box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
	
	}
	
	
</style>
<div class="row">
<div class="col-12 h-80">
		
 <div class="top_breadc">
	<div class="top_breadcone"><i class='bx bxs-dashboard bx-lg card' ></i></div>
	  <div class="top_breadctwo">
	    <span class="breade_color">New Employee page</span>
		<p class="breaderr">This is an example dashboard created using build-in elements and components.</p>   
      </div>
	</div>
 </div>
</div>
   
   
  
		
 
	 	
	 		
	 	
	 	@if($errors->all())
    @foreach ($errors->all() as $error)
     <div class="col-12 h-80">
    <div class="mbg-3 alert alert-info alert-dismissible fade show" role="alert">
        <span class="pr-2">
        <i class="fa fa-question-circle"></i>
        {{ $error }}
        </span>
        </div>
        </div>
    @endforeach
@endif

	

   
   
   
   
   	<div class="col-8 h-500">

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

.form_hand{
	height: 80%;
	width: 100%;
	padding-left: 50px;
}

.full_from{
	height: 100%;
	width: 100%;
	
}
	.active_full{
		height: 100%;
	   width: 95%;
	  text-align: right;
	    padding-top:5px;
	}
	.headto{
		
		height: 400px;
		padding: 10px;
		margin-top: 5px;
	}
	
	.paging{
		
		text-align: center;
		width: 100%;
		background: red;
	}
	.searchbar{
		padding-left: 180px;
	  
	
	}
	
	.shodows{
		box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
	
	}
	
	
</style>

<!--This is a follder opening show -->
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb"> 
    <li class="breadcrumb-item"><i class='bx bx-home bx-sm' ></i></li>
    <li class="breadcrumb-item"><a class="breade" href="#">Profile</a></li>
    @foreach(Request::segments() as $segment)
    <li  class="breadcrumb-item"> <a href="#" class="breade">{{$segment}} </a> </li>
    @endforeach
</ol>
</nav>

 

<div class="full_from">
<div class="form_hand card">
<div class="p-5 col-6">


<form action="{{route('Employee')}}" id="myForm" method="post">
  <?php echo csrf_field(); ?>
  
  <div class="form-group">
    <input type="text" class="form-control" id="Name" name="name"  placeholder="Name" required>
  </div> <br/>
  
  <div class="form-group">
    <input type="phone" class="form-control" id="email"  name="email" aria-describedby="emailHelp" placeholder="Email"  required>
  </div><br/> 
  
  <div class="form-group">
    <input type="phone" class="form-control" id="mobile" maxlength="11" min="11" name="Mobile" placeholder="Mobile"  required>
  </div><br/>
  
   <div class="form-group">
    <input type="text" class="form-control" id="address" name="password" placeholder="Password" required>
  </div>
  
  <br/>
    <div class="form-group">
    <input type="radio" id="address" name="AdminCat" value="employee" required> <span>Employee</span>
  </div>
  <br/>

  <button type="submit" onclick="suct()" class="btn btn-primary">Submit</button>
</form>

</div>
</div>
<p style="color: gray; padding:5px; font-size:25px; text-align: left; ">New Member list show only </p>
</div>

</div>
   <div class="col-4 h-500">
	<div class="active_full">
	<div class="searchbar">
<div class="input-group rounded">
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <span class="input-group-text  bg-primary" id="searchid">
    <i class="fas fa-search"></i>
  </span>
</div>
</div>
<div class="headto card">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Last Purches</th>
      <th scope="col">States</th>
    </tr>
  </thead>
  
  
  	@foreach($posts as $post)

    <tr>
    <script>
    
    
    </script>
    
      <th scope="row"></th>
      <td>{{$post->Name}}</td>
      <td><span id="dayid" style="color: gray;"> <script> document.write(" Days ago"); </script></span></td>
      <td><span style="color: green; font-weight: bold;">
      </td>
    </tr>
    
    @endforeach
 
 
  </tbody>
   
</table>
	     </div>	
	    <div class="d-flex justify-content-center p-1">{{$posts->onEachSide(0)->links()}}</div>	
		   </div>
	        </div>
             </div>

   

@endsection
