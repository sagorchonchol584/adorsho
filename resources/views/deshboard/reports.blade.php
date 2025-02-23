@extends('layout.master')
@section('content')

<div class="row">
	<div class="col-12 h-80">				
		<div class="top_breadc">
			<div class="top_breadcone">
			  <i class='bx bxs-dashboard bx-lg card' ></i>
			</div>
			<div class="top_breadctwo">
			    <span class="breade_color">Sales page</span>
				<p class="breaderr">This is Sales page add information admin page.</p>   
		    </div>
		</div>	
	</div>
 </div>
   
<div class="row">
<div class="col-12">
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





<div class="col-12 h-1000">

<!-- Button trigger modal -->
<button type="button" onclick="test()" >
  Launch static backdrop modal
</button>

<button type="button" onclick="shoetest()" >
 show
</button>






<script>
	
function hello(){
Swal.fire({
  title: "Do you want to save the changes?",
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: "Save",
  denyButtonText: `Don't save`
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
  	addd(result.isConfirmed);
    Swal.fire("Saved!", "", "success");
  } else if (result.isDenied) {
    Swal.fire("Changes are not saved", "", "info");
  }
});



}

function addd(){
swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
}

		      
function suss(){
	
swal("Write something here:", {
  content: "input",
})
.then((value) => {
  swal(`You typed: ${value}`);
  console.log(value);
});
		
		
		}


function test(){
	
	$.ajax({
     type: 'GET', //THIS NEEDS TO BE GET
     url: '{{ route('transication') }}',
     success: function (data) {
     console.log(data);  
     },
     error: function() { 

     }
    });
	
			
	}



	function shoetest(){
	
	$.ajax({
     type: 'GET', //THIS NEEDS TO BE GET
     url: '{{ route('transicationshow') }}',
     success: function (data) {
     console.log(data);  
     },
     error: function() { 

     }
    });
	
			
	}


</script>




</div>

</div>
 
    
  
@endsection