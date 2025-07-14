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
	    <span class="breade_color">Profile view page</span>
		<p class="breaderr">This is profile view page </p>   
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
	<span style="color: #0D6EFD; font-size: 18px;">This is your details info </span>
	<br/><br/>
  <div class="form-group">
    <input type="text" class="form-control" id="Name" name="name"  value="{{auth()->user()->Name}}" placeholder="Name" required>
  </div> <br/>
  
  <div class="form-group">
    <input type="phone" class="form-control" id="email"  value="{{auth()->user()->email}}" aria-describedby="emailHelp" placeholder="Email"  required>
  </div><br/> 
  
  <div class="form-group">
<input type="phone" class="form-control" id="mobile" maxlength="11" min="11" value="{{auth()->user()->Mobile}}" placeholder="Mobile"  required>
  </div><br/>
  <span class="text-primary">Your states:</span> <span class="text-danger">{{auth()->user()->AdminCat}}</span>

  <br/>
 
  <br/>
		</div>	
	</div>
	<div class="col-4 h-400">
		<div class="fromadd">
		 <img id="frame" src="{{ asset('images') }}/{{auth()->user()->image}}" class="img-fluid" width="150px" height="150px" />
		<br><br>
		<div class="fromaddtwo">
         
			<div class="container">
            <div class="mb-5"> 
                <br>
              
              </form>
            </div> 
        </div>
	 <a href="{{ route('overview')}}"  class="btn btn-primary" >Home</a>
      
		</div>
		</div>	
	</div>
</div>
 </div>
 
  

</div>
   <div class="col-4 h-500">
   
	    </div>
	       	 <br>	  
</div>

	
   
@endsection
