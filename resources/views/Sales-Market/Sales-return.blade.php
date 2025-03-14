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
   
   
 
<div class="col-12 h-50 ">
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

<div class="container card">
    <div class="row">
        <div class="col-12 h-50 p-3">
            <div class="col-md-3">
                <div class="input-group">
                  <input type="text" class="form-control" id="searchsalerecived" placeholder="Recived num" value="775836136309">
                  <div class="input-group-prepend">
                    <button class="btn btm-primary-cus" id="submitbtn">Search</button>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>

<style>
    .my-custom-scrollbar {
position: relative;
height: 450px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}	

.checkmark{
  height: 20px;
  width: 20px;
  accent-color: var(--primary-100);
}

.maindailoboax {
  padding: 5px;
  height: 460px;
  width: 600px;
  margin: auto;
  border: 1px solid #555500ff;
  text-align: center;
  border-radius: 9px;
  background: white;
  position: relative;
  top:20%;
  text-align: center;
  border-radius: 5px;
  animation: fadeIn 0.5s ease-in-out forwards;
 
}

.black_overlaya {
  display: none;
  position: absolute;
  top: 0%;
  left: 0%;
  width: 100%;
  height: 100%;
  background-color: black;
  z-index: 1001;
  -moz-opacity: 0.8;
  opacity: .70;
  filter: alpha(opacity=80);
 
}

.white_contenta {
 display: none;
 position: absolute;
 top:0;
 left:0;
 width: 100%;
 height: 100%;
 background-color:hsla(0,0%,0%,0.0);
 z-index: 1002;
}
.tittle_name{
	text-align: center;
  width: 90%;
  float: left;
}
	
.close_pop_up{
	text-align: right;
  width: 10%;
  float: left;
}
.close_pop_up_btn{
	width: 30px;
	height: 30px;
	background-color: red;
	border: none;
}
.exitdd{
		height: 50px;
		width: 100%;
	  background-color:#F5F5F5;
	   
	}

.mainedd{
		height: 260px;
		width: 100%;
		border-top: 1px solid #a6a6a6ff;
		background-color: #FFFFFF;
	}

.butttons{
		height: 40px;
		width: 100%;
		text-align: right;
		padding-top: 5px;
	}

.info{
		height: 90px;
		width: 100%;
	}

.tkinfo{
		height: 40px;
		width: 100%;
		padding: 5px 10px 10px 0px;
    text-align: right;
}

.my-custom-scrollbar {
position: relative;
height: 253px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}	

.inputtsupper{
width: 50%;
height: 60px;
float: left;
}

.inputtsuppertwo{
  width: 50%;
height: 60px;
float: right;
}

.stceted{
  width: 100%;
  height: 40px;
  text-align: center;
  border: 1px solid #555500ff;
  border-radius: 10px;
}
</style>




<div id="fadea" class="black_overlaya"></div>
<div id="lighta" class="white_contenta"> 



<div class="maindailoboax" id="maindailoboax">
  <div class="exitdd">
    <diV class="tittle_name">
    <span style="font-size:20px; font-weight:bold";>Return Product List</span>
    </diV>
  	<div class="close_pop_up" >
    <button class="close_pop_up_btn" onclick="pop_custom_off()"><span style="color: white" >X</span></button>
   </div>
  </div> 
<div class="mainedd">
  <div class="table-wrapper-scroll-y my-custom-scrollbar  border-dark">
<table class="table table-hover  p-2">
  <thead>
    <tr >
      <th scope="col" style="text-align:left">Product Name</th>

       <th scope="col" style="text-align:right">Total Price</th>
    </tr>
  </thead>
  <tbody class="supplierlist">
    
  </tbody>
</table>
</div>
</div>

<div class="info  border">
  <div class="tkinfo">
    <div class="col-4"> <span class="cashs"></span></div>
    <div class="col-8">  <h4 id="infomag"></h4></div>

  </div>
  <div class="inputtsupper">
  <div class="input-group ">
  <span class="stceted p-1 fs-5" id="inputGroupSelect03"> </span>
</div>

  </div> 
  <div class="inputtsuppertwo">
  <input type="number" value="" id="retun_data" class="form-control" visible="none">
  </div>


</div>

<div class="butttons">
	<button id="paymentbtm" type="button" onclick="datatranfer()" class="btn btn-primary">Sent</button>&nbsp;
</div>
</div>

</div>

<script>
//recivednumberlist();
let product_qty=0;
let product_id=0;
$(document).ready(function () {

function recivednumbercheck() {
    let datacheck = $("#searchsalerecived").val();
$.ajax({
    type: 'GET', 
    url: '{{ route('sales.retruns') }}', //done
    data:{recivednumber:datacheck},
    success: function (data) {
       // console.log(data);
        $('#saladatashow').html(data);
       
    },
    error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status);
        alert(thrownError);
        errorfunt('Internal Server Error or 500','And again try it','warning');;
      }
})
}


$("#submitbtn").click(function () {
 

    recivednumbercheck();
    $("#searchsalerecived").val('775836136309');
    
});
});

function errorfunt(tittle,sectittle,mess){
  swal({
   title: tittle,
   text: sectittle,
   icon: mess,
 })
}





function returndataupdate(value_p,product_id) {

$.ajax({
    type: 'GET', 
    url: '{{route('returndataupdate')}}',
    data:{number:value_p,product_id:product_id},
    success: function (data) {
   $('#retun_data').val('');
  console.log(data)
       
    },
    error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status);
        alert(thrownError);
       // errorfunt();;
      }
})
}




function return_update_fun(text) {

 // console.log(text) 757,Deshi Shosha 11111,5,600---->id,Name,qty,price---0,1,2,3
  pop_custom_on();
  const myArray = text.split(",");
  product_qty=myArray[2];
  product_id=myArray[0];

var showdata='<tr><th scope=row>'+myArray[1]+'</th><th style="text-align:right">'+myArray[3]+'</th></tr>';

  $('.supplierlist').html(showdata);
  $('#inputGroupSelect03').html('Total product: '+myArray[2])
 
}


function pop_custom_on(){
		document.getElementById('fadea').style.display='block';
		document.getElementById('lighta').style.display='block';
		document.getElementById('maindailoboax').style.display='block';
    
}



function pop_custom_off(){
		document.getElementById('lighta').style.display='none';
		document.getElementById('fadea').style.display='none';
		document.getElementById('maindailoboax').style.display='none';
    $('#retun_data').val('');

}


function datatranfer(){
 
  let input_value_for_return=$('#retun_data').val();
  if(input_value_for_return===''){
   $('#retun_data').attr('class','form-control is-invalid');
  }else{
if(product_qty>=input_value_for_return && input_value_for_return>0){

  returndataupdate(input_value_for_return,product_id);
  pop_custom_off();

}else{
  errorfunt('Your input number is wrong or mistake','And again try it','warning');;
}
  }
 
}

</script>






<div class="container card showsale">
    <div class="row border-cus-top  h-710">
        <div class="col-8 ">
        <p class="text-center p-3 fw-bold fs-4 lh-1">**This Month Sales Return list**</p>
    
        <hr>
<div class="table-wrapper-scroll-y my-custom-scrollbar">

 <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Total Retrun</th>
      <th scope="col">Price</th>
      <th scope="col">Total TK</th>
    </tr>
  </thead>
  <tbody id="saladatashow">
  
  @if ($sale_list && count($sale_list) > 0) 
    @foreach ($sale_list as $show)
        <tr>
            <td scope="row" >{{ $show->product_Name }}</td>
            <td>{{ $show->return_product }}</td>
            <td>{{ $show->product_Price }}</td>
            <td>{{ $show->product_Price * $show->return_product }}</td>
        </tr>
    @endforeach
@else
   
    <tr><td align="center" colspan="5">Not found this month sales  return list </td></tr>
   
@endif
    
  </tbody>
</table>
</div>
    <div class="container">
     <div class="float-end p-1">
   
     </div>
    </div>
        </div>
        <div class="col-4 border-cus-right">

        <p class="text-center p-3 fw-bold fs-4 lh-1">Total Return {{$returnlist}}</p>
        <hr>
        <table class="table">
  <tbody>
    <!-- <tr>
      <td>Name</td>
      <td>sagor</td>
    </tr>
    <tr>
      <td>Sales Date</td>
      <td>12-06-2024</td>
    </tr>
    <tr>
      <td>Net price</td>
      <td>1200</td>
    </tr> -->
  </tbody>
</table>
        </div>
    </div>
</div>












  
@endsection
