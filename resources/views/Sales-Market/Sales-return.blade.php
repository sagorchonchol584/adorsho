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
            <div class="col-md-3 border">
                <div class="input-group">
                  <input type="text" class="form-control" id="searchsalerecived" placeholder="Recived num" value="392148648591">
                  <div class="input-group-prepend">
                    <button class="btn btm-primary-cus" id="submitbtn">Search</button>
                  </div>
                  
                </div>
              </div>

              <div class="col-md-9 border">
                <div class="input-group justify-content-end">
               <span class="fs-4">To</span>
                <div class="form-group mx-sm-3 mb-2">
                  <label for="inputPassword2" class="sr-only">Password</label>
                  <input type="text" class="form-control" id="searchsalerecived" placeholder="Start Date">
                </div>
                <span class="fs-4">From</span>
                <div class="form-group mx-sm-3 mb-2">
                  <label for="inputPassword2" class="sr-only">Password</label>
                  <input type="text" class="form-control" id="searchsalerecived" placeholder="End Date">
                </div>
                
                  <div class="input-group-prepend">
                    <button class="btn btm-primary-cus" id="submitbtn">Search</button>
                  </div>  
                </div>
              </div>

            

             
        </div>
    </div>
</div>

<style>
.my-custom-scrollbartable {
position: relative;
height: 500px;
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
<div class="form-group">
    <label for="exampleFormControlTextarea1">Return for Reason</label>
    <textarea class="form-control" id="retrunreason" rows="5"></textarea>
  </div>
</div>
</div>

<div class="info ">
  <div class="tkinfo">
    <div class="col-4"> <span class="cashs"></span></div>
    <div class="col-8">  <h4 id="infomag">
    </h4></div>

  </div>
  <div class="inputtsupper">
  <div class="input-group ">
  <span class="stceted p-1 fs-5" id="inputGroupSelect03">   
</span>

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
let return_product=0;
let product_avablie=0;
let product_price=0;

let balance=0;

if (Number.isInteger(parseInt({{ $cashCredit }}))) {
     balance=parseInt({{ $cashCredit }});
  
} else {
    console.log("Value is NOT an integer.");
    errorfunt('Please check cashcredit balance ','And again try it','warning');;
}


$(document).ready(function () {

function recivednumbercheck() {
    let datacheck = $("#searchsalerecived").val();
$.ajax({
    type: 'GET', 
    url: '{{ route('sales.retruns') }}', //done
    data:{recivednumber:datacheck},
    success: function (data) {
       // console.log(data);
        $('#saladatashow').html(data.listofreturn);
        $('#custmoreinfo').html(data.custmorinfo);


       
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
    $("#searchsalerecived").val('392148648591');
    
});
});

function errorfunt(tittle,sectittle,mess){
  swal({
   title: tittle,
   text: sectittle,
   icon: mess,
 })
}





function returndataupdate(value_p,product_id,input_retrunreason) {

$.ajax({
    type: 'GET', 
    url: '{{route('returndataupdate')}}',
    data:{number:value_p,product_id:product_id,return_reason:input_retrunreason},
    success: function (data) {
   $('#retun_data').val('');  
    $('#retrunreason').val('');

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

 

 // console.log(text) 757,Deshi Shosha 11111,5,600---->id,Name,qty,price---0,1,2,3,4
  pop_custom_on();
  const myArray = text.split(",");
  product_qty=myArray[2];
  product_id=myArray[0];
  return_product=myArray[4];
  product_price=myArray[3];
  product_avablie=parseInt(product_qty)-parseInt(return_product);
var showdata='<tr><th scope=row>'+myArray[1]+'</th><th style="text-align:right">'+myArray[3]+'</th></tr>';

  $('.supplierlist').html(showdata);
  $('#inputGroupSelect03').html('Total product: '+product_avablie)
 
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
  let input_retrunreason=$('#retrunreason').val();


  console.log(input_value_for_return);

  if(input_value_for_return===''){
   $('#retun_data').attr('class','form-control is-invalid');
  }else{
if(product_avablie>=input_value_for_return && input_value_for_return>0){

  if(balance>parseInt(product_price)){
  confram(input_value_for_return,product_id,input_retrunreason);
  pop_custom_off();
  }else{
    errorfunt('Please check your Cash less then return porduct','And again try it','warning');
  }

}else{
  errorfunt('Your input number is wrong or mistake','And again try it','warning');
}
  }
 




}


function confram(input_value_for_return,product_id,input_retrunreason){

swal({
  title: "Are you sure?",
  text: "Sales is Return, not be able to recover this imaginary data!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Your Product Return succssfull ", {
      icon: "success",
    }).then(function(){
   //  console.log("deleta data");
    location.reload();
    });
    returndataupdate(input_value_for_return,product_id,input_retrunreason);

  } else {
    swal("Do you want Exit ?",{
    	closeOnClickOutside: false,
    });
  }
});

	}
			

function return_product_view(id){


// fetch('{{route('returnview') }}')
// .then(response => response.json())  
// .then(data => {           
// console.log(data);
  
//             })
// .catch(error => console.error('Error:', error));

 // errorfunt('Internal Server Error or 500','And again try it','warning');;


$.ajax({
  type: 'GET', 
    url: '{{route('returnview')}}',
    data:{idvaule:id},
    success: function (data) {

      errorfunt(data,'Product Retrun info','info');
  console.log(data)
       
    },
    error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status);
        alert(thrownError);
       // errorfunt();;
      }
});
        


}


</script>






<div class="container card showsale ">
    <div class="row border-cus-top  h-710 ">
        <div class="col-8">
        <p class="text-center p-3 fw-bold fs-4 lh-1">**This Month Sales Return list**</p>
    
        <hr>
<div class="table-wrapper-scroll-y my-custom-scrollbartable ">
 <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Total Product</th>
      <th scope="col">Total Retrun</th>
      <th scope="col">Retrun TK</th>
      <th scope="col">Sales</th>
 
    </tr>
  </thead>
  <tbody id="saladatashow">
  
  @if ($sale_list && count($sale_list) > 0) 
    @foreach ($sale_list as $show)
        <tr>
            <td scope="row" onclick="return_product_view({{ $show->id }})" class="border"><bold>{{ $show->product_Name }}</bold></td>
            <td>{{ $show->product_unite }}</td>
            <td>{{ $show->return_product }}</td>
            <td>{{ $show->return_product * $show->Sales_price }}</td>
            <td>{{ $show->product_unite - $show->return_product }}</td>
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

        <p class="text-center p-3 fw-bold fs-4 lh-1">Total Product {{$returnlist}} Return</p>
        
        <hr>
        <table class="table">
  <tbody id="custmoreinfo">
    <tr>
      <td><strong>Total Customer :</strong> </td>
      <td><span>{{ $total_customer_count }} Persons</span></td>
    </tr>
    <tr>
      <td><strong>Month :</strong></td>
      <td><span>{{ $nowmonth }}</span></td>
    </tr>
    <tr>
      <td><strong>Totol Return :</strong></td>
      <td><span>{{ $Total_return_price }} Tk</span></td>
    </tr>
  </tbody>
</table>
        </div>
    </div>
</div>












  
@endsection
