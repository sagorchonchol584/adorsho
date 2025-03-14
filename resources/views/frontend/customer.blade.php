@extends('layout.master')
@section('content')
<div class="col-12 h-900">
<div class="row">
<div class="col-12 h-80">
				
<div class="top_breadc">
	<div class="top_breadcone"><i class='bx bxs-dashboard bx-lg card' ></i></div>
	  <div class="top_breadctwo">
	    <span class="breade_color">Customer page</span>
		<p class="breaderr">This is an example dashboard created using build-in elements and components.</p>   
      </div>
</div>	
	</div>
   </div>
    <div class="row">
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
    <li class="breadcrumb-item"><a class="breade" href="#">Page</a></li>
    @foreach(Request::segments() as $segment)
    <li  class="breadcrumb-item"> <a href="#" class="breade">{{$segment}} </a> </li>
    @endforeach
</ol>
</nav>



<div class="full_from">
<div class="form_hand card">
<div class="p-5 col-6">

<form action="{{route('customerdateAdd')}}" id="myForm" method="post">
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

<script>


	function suct(){
			
    var a = document.forms["myForm"]["Name"].value;
    var b = document.forms["myForm"]["mobile"].value;
    var c = document.forms["myForm"]["address"].value;
    
    if (a == "") {
    errr();
    }
    else if(b == "")
    {
    errr();
    }
    else if(c == "")
    {
    errr();
    }else
    {
	suss();

    }
}

function errr(){
swal({
 	 title: "Empty Field?",
  	text: "Chack tha all field ?",
 	 icon: "error",
});
}


function suss(){
	swal({
         title: "Successfull!",
         text: "You clicked the button!",
         icon: "success",
});
}

function delet(){
	swal({
         title: "Delete data!",
         text: "Delet you information !",
         icon: "success",
});
}

</script>



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
  <tbody>

  
<script>
      
const date = new Date();
function formatDate(date, format) {
    const map = {
        mm: date.getMonth() + 1,
        dd: date.getDate(),
        yy: date.getFullYear().toString().slice(-4),
        yyyy: date.getFullYear()
    }

    return format.replace(/mm|dd|yy|yyy/gi, matched => map[matched])
}

var currentdate=formatDate(date, 'yy-mm-dd');


function datachack( datec,datecc){
	const day =(1000 * 60 * 60 * 24);
	let date1 = new Date(datec);
	let date2 = new Date(datecc);
 	let diff = date2.getTime() - date1.getTime();
	date1d = new Date(date1);
	date2d = new Date(date2);
	ms = Math.abs(date1d - date2d);
     return Math.round(ms/day);   
}

</script>

 
  
  	@foreach($posts as $post)

    <tr>
    <script>
    	var kk="{{$post->last_purches_date}}";
    	var oo = datachack(kk,currentdate);
    </script>
    
      <th scope="row"></th>
      <td>{{$post->customer_name}}</td>
      <td><span id="dayid" style="color: gray;"> <script>
      
      if(oo===0){
        document.write("Today");
    
      }else{
          document.write(oo+" Days ago");
      }
      
      
      
      </script></span></td>
      <td><span style="color: green; font-weight: bold;">
       <script>
       
       if(oo<7){
       	     document.write("<font color=\"green\"> Active </font>");
         }else if( oo<10){
         	 document.write("<font color=\"gray\"> Active</font>");
         } else if(oo<14){
         	document.write("<font color=\"violet\">Active</font>");
         }else if(oo<20){
         	document.write("<font color=\"red\">Active</font>");
         }else if(oo<30){
         	document.write("<font color=\"orange\">Active</font>");
         }else {
         	document.write("<font color=\"black\">Notres</font>");
         }
       
       </script></span></td>
    </tr>
    
    @endforeach
 
 
  </tbody>
   
</table>
</div>	
	    <div class="d-flex justify-content-center p-1">{{$posts->onEachSide(0)->links()}}</div>	
 </div>
</div>
 </div>


<div class="row">
	<div class="col-12 h-250">
	
	<div class="row">
	<div class="col-6 h-300">
		
<div class="shodows">
<table class="table table-sm">
  <thead >
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Last Purches</th>
      <th scope="col">Delete</th>
   
    </tr>
  </thead>
  <tbody>
  	@foreach($poststwo as $postst)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$postst->customer_name}}</td>
      <td>{{$postst->last_purches_date}}</td>
      <td> <a  href="{{route('customerdelet',$postst->id)}}"><span style="color: red; font-weight: bold;">
      <i class='bx bxs-x-square bx-sm' onclick="delet()"></span></a></td>
    </tr> 
    	@endforeach
  </tbody>
</table>	
	</div>
	</div>
	<div class="col-6 h-300">
		
<div class="shodows">
<table class="table  table-sm">
  <thead >
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Last Purches</th>
      <th scope="col">States</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($posts as $post)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$post->customer_name}}</td>
      <td>{{$post->last_purches_date}}</td>
      <td><span style="color: green; font-weight: bold;">Active</span></td>
    </tr> 
    	@endforeach
  </tbody>
</table>
	
		
	</div>
		
	</div>		
   </div>	
   </div>
@endsection
