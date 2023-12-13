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
	
	.center{
		
	padding: 10px 90px 10px 90px;
	}
	
	
</style>
<div class="row">
<div class="col-12 h-80">
		
 <div class="top_breadc">
	<div class="top_breadcone"><i class='bx bxs-dashboard bx-lg card' ></i></div>
	  <div class="top_breadctwo">
	    <span class="breade_color">New Employee page</span>
		<p class="breaderr">This is new employee created this page and view all employee by admim.</p>   
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

 @if(auth()->user()->AdminCat =='Admin')
 <div class="col-8 h-500">
 
 
						
		                   	
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
 
 <div class="form_hand card">
 	<div class="row">
	<div class="col-8 h-400">
		
	<div class="center">
	<span style="color: #0D6EFD; font-size: 18px;">This form is new employee  users create with email</span>
	<form action="{{route('Employee')}}" id="myForm" method="post" enctype="multipart/form-data">
 
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
 

		</div>
		
		
	</div>
	<div class="col-4 h-400">
		<div class="fromadd">
		 <img id="frame" src="{{asset('frontend/img/demo.jpg')}}" class="img-fluid" width="150px" height="150px" />
		<div class="fromaddtwo">
        
			<div class="container">
            <div class="mb-5">
                <label for="Image" class="form-label"> Preview</label>
                <input class="form-control" type="file" id="formFile"  onchange="preview()" name="image" >
                <br>
               <button type="submit" onclick="suss()" class="btn btn-primary">Submit</button>
              </form>
            </div> 
        </div>
	 <script>
            function preview() {
                frame.src = URL.createObjectURL(event.target.files[0]);
            }
       
            
            function suss(){
						swal({
      				   title: "Successfull!",
      				    text: "You employee users create ",
      				    icon: "success",
						});
						}         
        </script>
       
		</div>
		</div>	
	</div>
</div>
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
    
      <th scope="row">
		<img src="{{ asset('images') }}/{{$post->image}}" width="32px" height="32px" class="rounded-circle"/>                  
      </th>
      <td>{{$post->Name}}</td>
      <td><span id="dayid" style="color: gray;"> {{ \Carbon\Carbon::parse($post->last_seen)->diffForHumans() }}</span></td>
      <td>
            
                   @if(Cache::has('is_online' . $post->id))
                      <span style="color:#008000;   font-weight: bold;"">Online</span>
                   @else
                   <span class="text-gray-500">Offline</span>
                   @endif
      </td>
    </tr>
    
    @endforeach
 
 
  </tbody>
   
</table>
	     </div>	
	    <div class="d-flex justify-content-center p-1">{{$posts->onEachSide(0)->links()}}</div>	
		   </div>
		   
	        </div>
	        <p style="color: gray; padding:5px; font-size:25px; text-align: left; ">New Member list show only </p>
	        
	       @else
	       	 <br>
           <h1 class="text-center border text-primary">Your are not Admin users,  Only access admin users</h1>     
           
	 @endif	
	
	  
</div>

	
   
@endsection
