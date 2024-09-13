@extends('layout.master')
@section('content')

<div class="row">
<div class="col-12 h-80">
				
<div class="top_breadc">
	<div class="top_breadcone"><i class='bx bxs-dashboard bx-lg card' ></i></div>
	  <div class="top_breadctwo">
	    <span class="breade_color">Supplier page</span>
		<p class="breaderr">This is product supplier page add information whole store.</p>   
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
    <li class="breadcrumb-item"><a class="breade" href="#">Supplier</a></li>
    @foreach(Request::segments() as $segment)
    <li  class="breadcrumb-item"> <a href="#" class="breade">{{$segment}} </a> </li>
    @endforeach
</ol>
</nav>
</div>
</div>

<!--This is a pop loading deing  -->
<style>
.maindailoboax {
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

.ddd{
	width: 30px;
	height: 30px;
	background-color: red;
	border: none;
}

.exitdd{
		height: 50px;
		width: 100%;
	  background-color:#F5F5F5;
    text-align: right;
	   
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

	
.dddd{
  height: 650px;
  width: 600px;
  margin: auto;
  text-align: center;
  border-radius: 5px;
  background: white;
  position: relative;
  top:20%;
}

.maindailoboax{
	padding: 5px;
}

.my-custom-scrollbar {
position: relative;
height: 503px;
overflow: auto;
}

.my-custom-scrollbartree {
position: relative;
height: 550px;
overflow: auto;
}
.my-custom-scrollbartwo {
position: relative;
height: 480px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}	

.supperbutton{
  border: none;
  background: rgba(0,0,0,0);
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
    
    <button class="ddd" onclick="pop_custom_off()"><span style="color: white" >X</span></button>
   
  </div> 
<div class="mainedd">
<div class="col-12 h-80 fw-bold p-1" ><span style="font-size: 20px;" >Today is Expends Our shop</span></div>

<div class="col-12 h-60">
<div class="col-6 h-60 ttt"><span style="font-size: 20px;" >Details :</span></div>
<div class="col-6 h-60">
<div class="input-group ">
  <select class="stceted" id="expens">
    <option value="select" selected>--Selected Cost--</option>
    <option value="LunchCost">Lunch Cost</option>
    <option value="SnackCost">Snack Cost</option>
    <option value="GuestCost">Guest Cost</option>
    <option value="BreakTimeCost">Break Time Cost</option>
    <option value="VehicleRent">Vehicle Rent</option>
    <option value="EmployerTake">Employer Take</option>

  </select>
</div>
</div>
</div>

<div class="col-12 h-60">
<div class="col-6 h-60 ttt"><span style="font-size: 20px;" >Amount :</span></div>
<div class="col-6 h-60">
<input type="number" class="form-control" aria-label="Large" id="amountcash">
</div>
</div>
<div class="col-12 h-60"></div>

</div>

<div class="info ">
  <div class="tkinfo">
	<h4 id="infomag"></h4>
  </div>
  <div class="inputtsupper">


  </div> 
  <div class="inputtsuppertwo">

  </div>

</div>

<div class="butttons">
	<button id="cashbtm" type="button"  class="btn btn-primary">Sent</button>&nbsp;
</div>
</div>
</div>

<!--This is a pop coustom desgin end -->


<div class="row">
<div class="col-12 h-750">
<div class="row">
<div class="col-12 h-120 card">
<!------------------This is a top info bar ------------------>
<div class="row">
<div class="col-2 h-120"> 

<div class="row">
<div class="col-3 h-120 p-3"> 
<div class="cerlll p-2" ><i class='bx bxs-calendar bx-lg'></i> </div>  
</div>

<div class="col-9 h-120 "> 
<div class="row">
<div class="col-12 h-70 fs-5 fw-bold  pt-4"><span class="month">00.00 Tk</span></div>
<div class="col-12 h-50 fs-6 fw-bold  pt-1"><span>Total Expends</span></div>
</div>
</div>
</div>

</div>


<div class="col-2 h-120">

<div class="row">
<div class="col-3 h-120 p-3"> 
<div class="cerlll p-2" ><i class='bx bxs-calendar-alt bx-lg'></i> </div>  
</div>

<div class="col-9 h-120 "> 
<div class="row">
<div class="col-12 h-70 fs-5 fw-bold  pt-4"><span class="year">00.00 Tk</span></div>
<div class="col-12 h-50 fs-6 fw-bold  pt-1"><span>Today Cash</span></div>
</div>
</div>
</div>
</div>

<div class="col-8 h-120">
<diV class="row">
 



<div class="col-4 h-120">

<div class="row">
<div class="col-3 h-120 p-3"> 
<div class="cerlll p-2" ><i class='bx bxs-calendar-alt bx-lg'></i> </div>  
</div>

<div class="col-9 h-120 "> 
<div class="row">
<div class="col-12 h-70 fs-5 fw-bold  pt-4"><span class="PAYABLEyear">00.00 Tk</span></div>
<div class="col-12 h-50 fs-6 fw-bold  pt-1"><span>Sent Cash To Admin</span></div>
</div>
</div>
</div>
</div>

<div class="col-4 h-120">

<div class="row">
<div class="col-3 h-120 p-3"> 
<div class="cerlll p-2" ><i class='bx bx-money bx-lg'></i> </div>  
</div>

<div class="col-9 h-120 "> 
<div class="row">
<div class="col-12 h-70 fs-5 fw-bold  pt-4"><span class="unpaid">00.00 Tk</span></div>
<div class="col-12 h-50 fs-6 fw-bold  pt-1"><span>Monthly Expends</span></div>
</div>
</div>
</div>

</div>

<div class="col-4 h-120">

<div class="row">
<div class="col-3 h-120 p-3"> 
<div class="cerlll p-2" ><i class='bx bxs-file-blank bx-lg'></i> </div>  
</div>

<div class="col-9 h-120 "> 
<div class="row">
<div class="col-12 h-70 fs-5 fw-bold  pt-4"><span class="invoice">00.00 Tk</span></div>
<div class="col-12 h-50 fs-6 fw-bold  pt-1"><span>INVOICE DUE</span></div>
</div>
</div>
</div>

</div>


</diV>



</div>

</div>

<!------------------This is a top info bar ------------------>

</div>
<div class="col-12 h-600">
<div class="row">
<div class="col-7 h-600 ">

@if(auth()->user()->AdminCat =='Admin')

<div class="row">
  <div class="col-10 p-3 text-center fw-bold "><span >Show The Monthly All Expences List</span></div>
  <div class="col-2 p-3 text-center"><button class="btn btn-primary" onclick="pop_custom_on()">Add Expence</button></div>
  </div>
<div class="table-wrapper-scroll-y my-custom-scrollbartwo">
      <table class="table table-striped table-bordered" id="section1" >
       <thead>   
        <tr>
         <th>Name</th>
         <th>Details</th>
		     <th>Days</th>
         <th>Tk</th>
         <th><input type="checkbox" id="cashselect" ></th>
         </tr>
       </thead>

       <tbody class="cashflow_log">

       </tbody>
      </table>
      
     </div>
     <div class="col-12 p-1" style="	text-align: right;">
     <button class="btn btn-primary" onclick="cashconfim()" id="cashsent">Sent</button>
     </div>
     <script src="{{ asset('frontend/customizejavas/cashflow.js') }}"> </script>	
     @else 


<!---------------------this condition system----------------->
     <div class="row">
  <div class="col-10 p-3 text-center fw-bold "><span >Show The Monthly All Expences List</span></div>
  <div class="col-2 p-3 text-center"><button class="btn btn-primary" onclick="pop_custom_on()">Add Expence</button></div>
  </div>
<div class="table-wrapper-scroll-y my-custom-scrollbartwo">
      <table class="table table-striped table-bordered" id="section1" >
       <thead>
     
          <tr>
         <th>Details</th>
		     <th>Date</th>
		     <th>Days</th>
         <th>Tk</th>
         <th>Admin.C</th>
         </tr>
       
       </thead>
       <tbody class="cashflow_log">

       </tbody>
      </table>
     </div>
     @endif

</div>
<div class="col-5 h-600 card">
 <div style="width: 100%; text-align:center; font-size:20px; font-weight:bold;"> <span > Supplier Info</span></div>
<div class="table-wrapper-scroll-y my-custom-scrollbartree">
      <table class="table table-striped table-bordered" id="section1" >
       <thead>
        <tr>
         
         <th>Supplier Name</th>
         <th>Name</th>
         <th>Date</th>
         <th>Unity</th>
	    	 <th>Prices</th>
         
        </tr>
       </thead>
       <tbody class="supplier">

       </tbody>
      </table>
     </div>
     <button onclick="showpayablelist()">ALL PAYABLE DUE</button>
</div>
</div>
</div>
</div>
</div>

</div>


<script>





var expens=document.getElementById("expens");
var amountcash=document.getElementById("amountcash");
var cashbtm=document.getElementById("cashbtm");









cashbtm.addEventListener("click", expencedata);

function expencedata(){
if(expens.value=="select"){
  dailogmess("Please Select The Option","Not Selected Data","info");
}
else{
  if(parseInt(amountcash.value)>0){
if(parseInt(cashaviable)>=amountcash.value){
  confrm_expenc_cost_sent(amountcash.value,expens.value);
}else{
  dailogmess("Not Enough Cash","You sale cash "+cashaviable+" Tk","info");
}
}else{
  dailogmess("Please fillup cash field","Empty field","info");
}
}
}





function expenccostsent(tks,select){
  $.ajaxSetup({
                headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
             });
     $.ajax({
         type: 'POST', //THIS NEEDS TO BE GET
         url: '/expenceadd/',
         data: {tk:tks,selectvale:select}, 
         success: function (data) {
            console.log(data); 
         //   location.reload();
         fetch_customer_data();
         },
         error: function() { 
          // meass.innerHTML="Data failed";
          //    console.log(data);
         }
        });

       
}





function confrm_expenc_cost_sent(tk,selcetdd){
  pop_custom_off();
 swal({
   title: "Are you sure?",
   text: "you will not be able to recover this imaginary data!",
   icon: "warning",
   buttons: true,
   dangerMode: true,
 })
 .then((willDelete) => {
   if (willDelete) {
     swal("Your data Sent ", {
       icon: "success",
     }).then(function(){
      expenccostsent(tk,selcetdd);

     });
 
   } else {
     swal("Do you want Exit ?",{
       closeOnClickOutside: false,
     }).then((mee)=>{
 
       //---------this pop alert---------
     
     });
   }
 });

   }


























































































var showpayablelist=false;

var supplierpayment=document.getElementById("supplierpayment");

let idsforsupplier=0;
let total_price=0;
let payabletksa=0;
var inputname;
let cashaviable=0;




fetch_customer_data();
//button_chack_for_sent();


function fetch_customer_data()
 {
  $.ajax({
  method:'GET',
   url:"{{ route('cashflowstatesroute') }}",
   dataType:'json',
   success:function(data)
   {
    $('.supplier').html(data.table_data); 

    var payableyearmonths = data.payableyear.toString().split('.');
    payableyearmonths[0] = payableyearmonths[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    

    $('.PAYABLEyear').html(payableyearmonths.join('.')+" Tk");


    var months = data.months_pay.toString().split('.');
    months[0] = months[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    $('.month').html(months.join('.')+" Tk");


    var years = data.year_pay.toString().split('.');
    years[0] = years[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    $('.year').html(years.join('.')+" Tk");


    var unpaid = data.allduetk.toString().split('.');
    unpaid[0] = unpaid[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    $('.unpaid').html(unpaid.join('.')+" Tk");


    $('.invoice').html(data.INVOICEDUE+" INVOICES");
    if(showpayablelist==false){
      $('.cashflow_log').html(data.cashflow_log);
    }else{
      $('.cashflow_log').html(data.payableyear);
    }
  
    cashaviable=data.cash_crdits;

   }
  });
 }


// function datatranfer() {

// let tks=parseInt(supplierpayment.value);
// if(supplierpayment.value!==""){
// if(total_price>=tks){
//  payabletksa=total_price-tks;
// confram();
// pop_custom_off();
// }else{
//   dailogmess("Don't Less Then Total Tk","Please Check Total Tk","info");
//   supplierpayment.value="";
// }

//   console.log("worring");
// }else
// {
//   dailogmess("Please fillup cash field","Empty field","info");
 
// }

//    }



// function datashowwite(id){
//   pop_custom_on();
//   idsforsupplier=id;
//   $.ajax({
//   method:'GET',
//     url: '/supplierlist/'+id+"/",
//    dataType:'json',
//    success:function(data)
//    {
//   $('.supplierlist').html(data.table_data);
//   // console.log(data.table_data); 
//   total_price=data.total_data;
//   if(data.admincat=="Admin"){
//     inputSelect0.options[2].disabled = false;
//   }else{
//    inputSelect0.options[2].disabled = true;
//    console.log(data.admincat);
//   }

// 	 var partscomvalue = total_price.toString().split('.');
//     partscomvalue[0] = partscomvalue[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');

//    $('#infomag').html("Total Tk:"+partscomvalue.join('.'));
//    }
//   });
// }



function pop_custom_on(){
		document.getElementById('fadea').style.display='block';
		document.getElementById('lighta').style.display='block';
		document.getElementById('maindailoboax').style.display='block';
}

function pop_custom_off(){
		document.getElementById('lighta').style.display='none';
		document.getElementById('fadea').style.display='none';
		document.getElementById('maindailoboax').style.display='none';
   // clearlyalldata();
   amountcash.value="";
   expens.options[0].selected = true
}

     
function dailogmess(mess,messtwo,messtheree){
		    swal({
		 	      title: ""+mess+"",
		  	     text: ""+messtwo+"",
		 	      icon: ""+messtheree+"",
		       });
		 }     
		  

// function confram(){
 
// swal({
//   title: "Are you sure?",
//   text: "you will not be able to recover this imaginary data!",
//   icon: "warning",
//   buttons: true,
//   dangerMode: true,
// })
// .then((willDelete) => {
//   if (willDelete) {
//     swal("Your data Sent ", {
//       icon: "success",
//     }).then(function(){
//       sentdata();

//     });

//   } else {
//     swal("Do you want Exit ?",{
//     	closeOnClickOutside: false,
//     }).then((mee)=>{

//       //---------this pop alert---------
//       clearlyalldata();
//     });
//   }
// });

// 	}


//   function clearlyalldata(){
//     supplierpayment.disabled=true;
  
//     supplierpayment.placeholder=" ";
//     supplierpayment.value="";
//     inputSelect0.options[0].selected = true
//   }

// function sentdata(){

//   console.log("internet data sent");
//   $.ajaxSetup({
//             headers: {
//                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             }
//          });
//  $.ajax({
//      type: 'POST', //THIS NEEDS TO BE GET
//      url: '/stockloadfinally/',
//      data: {id:idsforsupplier,tk:supplierpayment.value,payabletk:payabletksa,methedpay:inputSelect0.value}, 
//      success: function (data) {
//         console.log(data); 
//      //   location.reload();
//      clearlyalldata()
//      },
//      error: function() { 
//       // meass.innerHTML="Data failed";
//       //    console.log(data);
//      }
//     });

//     fetch_customer_data();
// }


// function showpayablelist(){
//   showpayablelist=true;
// }


</script>






@endsection