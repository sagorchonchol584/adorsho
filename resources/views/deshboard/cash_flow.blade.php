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
<input type="number" class="form-control" aria-label="Large" id="hiddenamout" hidden>
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
	<button id="cashbtm" type="button"   class="btn btn-primary">Sent</button>&nbsp;
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
<div class="col-12 h-70 fs-5 fw-bold  pt-4"><span class="totalsales">00.00 Tk</span></div>
<div class="col-12 h-50 fs-6 fw-bold  pt-1"><span>Total Sales</span></div>
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
<div class="col-12 h-70 fs-5 fw-bold  pt-4 "><span class="todaycash">00.00 Tk</span></div>
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
<div class="col-12 h-70 fs-5 fw-bold  pt-4"><span class="montyexpence">00.00 Tk</span></div>
<div class="col-12 h-50 fs-6 fw-bold  pt-1"><span>Monthly Expences </span></div>
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
<div class="col-12 h-70 fs-5 fw-bold  pt-4"><span class="monthy_suppier_exp">00.00 Tk</span></div>
<div class="col-12 h-50 fs-6 fw-bold  pt-1"><span>Monthly Supplier Expences</span></div>
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
<div class="col-12 h-50 fs-6 fw-bold  pt-1"><span>Notification</span></div>
</div>
</div>
</div>

</div>


</diV>



</div>

</div>

<!------------------This is a top info bar ------------------>

</div>
<div class="col-12 h-600 card">
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
 <div style="width: 100%; text-align:center; font-size:20px; font-weight:bold;"> <span >Expence List of days</span></div>
 <hr>
<div class="table-wrapper-scroll-y my-custom-scrollbartree">
      <table class="table table-hover" id="section1" style=" font-size:18px;">
       <thead>

        <tr>
         <th>Details</th>
	    	 <th class="text-right-side"></th>
        </tr>

       </thead>
       <tbody >

       <tr>
         <th> Salse Today</th>
	    	 <th class="text-right-side"><span id="salescash"> </span></th>
        </tr>

        <tr>
         <th>Supplier Expance</th>
	    	 <th class="text-right-side"><span id="supex"> </span></th>
        </tr>

        <tr >
         <th>Total Expence</th>
	    	 <th class="text-right-side"><span id="expenc"> </span></th>
        </tr>
        
        <tr  class="table-secondary">
         <th scope="col">Net Cash </th>
	    	 <th class="text-right-side bderre"><span id="Cashid"> </span></th>
        </tr>
       

        <tr >
         <th>Sent Balance </th>
	    	 <th class="text-right-side">
         <select class="stceted_cash_sent" id="cashid">
   
         </select>

         </th>
        </tr>


        <tr >
         <th> </th>
	    	 <th class="text-right-side">
          <button id="cashsentbnt" onclick="confrm_cash_sent()" class="btn btn-primary">Sent </button>
        </th>
        </tr>


    
       </tbody>
      </table>
     </div>
     <button >ALL PAYABLE DUE</button>
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
var cashid=document.getElementById("cashid");
var cashsentbnt=document.getElementById('cashsentbnt');
cashsentbnt.disabled=true;

var check=false;
let idsss=0;




//------this very inportens data type---
let total_sales=0;
let cashaviable=0;
let today_expen=0;
let today_supplier=0;
let today_cash=0;
let today_net_cash=0;
let add_expence=0;





fetch_customer_data();



cashbtm.addEventListener("click", expencedata);


function expencedata(){

   if(check==false){
    console.log("not update")
  
    if(expens.value=="select"){
  dailogmess("Please Select The Option","Not Selected Data","info");
    }else{
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
  
  
  }else{

    console.log("this updatedata")

    if(expens.value=="select"){
  dailogmess("Please Select The Option","Not Selected Data","info");
    }else{
      if(parseInt(amountcash.value)>0){
        if(parseInt(cashaviable)>=amountcash.value){
            confrm_expenc_update_cost_sent(amountcash.value,expens.value);
             }else{
             dailogmess("Not Enough Cash","You sale cash "+cashaviable+" Tk","info");
              }
      }else{
           dailogmess("Please fillup cash field","Empty field","info");
            }
      }


   }
 






  


}


function expenccostsent(tks,select){


  console.log(tks);
  console.log(select);

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
   text: "you will be able to this sent data!",
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


function confrm_expenc_update_cost_sent(tk,selcetdd){
  pop_custom_off();
 swal({
   title: "Are you sure?",
   text: "you will update data!",
   icon: "warning",
   buttons: true,
   dangerMode: true,
 })
 .then((willDelete) => {
   if (willDelete) {
     swal("Your data update ", {
       icon: "success",
     }).then(function(){
    //  expenccostsent(tk,selcetdd);
    confrm_expenc_update_data_sent(tk,selcetdd);
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




function confrm_expenc_update_data_sent(amountcash,expens){

  $.ajaxSetup({
                headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
             });
     $.ajax({
         type: 'POST', //THIS NEEDS TO BE GET
         url: '/expence_update/',
         data: {tk:amountcash,selectvale:expens,id:idsss}, 
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







//------------sent data funcation----------

function confrm_cash_sent(){
 
  console.log(cashid.value);
if(parseInt(cashid.value)==0){
  dailogmess("Please Check Selcet Option","Choose stafName","info")
}else{
 
 swal({
   title: "Are you sure?",
   text: "you will be able to this sent data!",
   icon: "warning",
   buttons: true,
   dangerMode: true,
 })
 .then((willDelete) => {
   if (willDelete) {
     swal("Your data Sent ", {
       icon: "success",
     }).then(function(){
console.log("hello");
    cash_sent_any_prsonal(cashid.value);
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

   }


function cash_sent_any_prsonal(id){


  console.log("id :"+id);
  $.ajax({
     type: 'GET', //THIS NEEDS TO BE GET
     url: '/get_data_to_cash_sent/'+id,
     success: function (data) {
	var datajos=JSON.parse(data);

     console.log(datajos);
     fetch_customer_data();
       
     },
     error: function() { 

     }
    });


}



var showpayablelist=false;

var supplierpayment=document.getElementById("supplierpayment");

let ff=0;


//button_chack_for_sent();


function fetch_customer_data()
 {
  $.ajax({
  method:'GET',
   url:"{{ route('cashflowstatesroute') }}",
   dataType:'json',
   success:function(data)
   {
    //$('.supplier').html(data.table_data); 

    all_cash_sent_fuc(data.totalsates, data.today_suppier_exps, data.today_expence_tk, data.cash_crdits);
    total_sales=data.totalsates;
   

    $('.stceted_cash_sent').html(data.setectvalue); 

    today_expen=parseInt(data.today_expence_tk);
    today_supplier=parseInt(data.monthy_suppier_exps);
    add_expence=today_supplier+today_expen;

    today_cash=parseInt(data.cash_crdits);
    today_net_cash=today_cash-add_expence;

  var net_cash = today_net_cash.toString().split('.');
  net_cash[0] = net_cash[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');



    var monthy_expences = data.monthy_expence.toString().split('.');
    monthy_expences[0] = monthy_expences[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    
    var today_expences = data.today_expence_tk.toString().split('.');
    today_expences[0] = today_expences[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');


    $('.montyexpence').html(monthy_expences.join('.')+" Tk");
    $('#expenc').html(" - "+today_expences.join('.')+" Tk");
    $('#expenc').css("color", "red");


 

    var totalsatess = data.totalsates.toString().split('.');
    totalsatess[0] = totalsatess[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    $('#salescash').html(totalsatess.join('.')+" Tk");




    var total_show_Not_funs = data.total_show_Not_fun.toString().split('.');
    total_show_Not_funs[0] = total_show_Not_funs[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    $('.totalsales').html(total_show_Not_funs.join('.')+" Tk");



    if(parseInt(data.cash_crdits)<0){
      $("#cashsentbnt").attr("disabled","disabled");
    }


  
    var todaycash = data.cash_crdits.toString().split('.');
    todaycash[0] = todaycash[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    $('.todaycash').html(todaycash.join('.')+" Tk");
    $('#Cashid').html(todaycash.join('.')+" Tk");

   

    var monthy_suppier_expence = data.monthy_suppier_exps.toString().split('.');
    monthy_suppier_expence[0] = monthy_suppier_expence[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');

    var today_suppier_expence = data.today_suppier_exps.toString().split('.');
    today_suppier_expence[0] = today_suppier_expence[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');

    $('.monthy_suppier_exp').html(monthy_suppier_expence.join('.')+" Tk");


    
    $('#supex').html(" - "+today_suppier_expence.join('.')+" Tk");
    $('#supex').css("color", "red");


    $('.cashflow_log').html(data.cashflow_log);


if(parseInt(data.not_show_admin)>0){
  $('.invoice').html(data.not_show_admin+" NO CHECK");
  $('.invoice').css({"color": "red"});
}else{
  $('.invoice').html(" CHECKED");
  $('.invoice').css({"color": "green"});
}



    // if(showpayablelist==false){
    //   $('.cashflow_log').html(data.cashflow_log);
    // }else{
    //   $('.cashflow_log').html(data.payableyear);
    // }
  
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







function all_cash_sent_fuc(sale,supplier,expens,cash){
  total_sales=sale;
  today_supplier=supplier;

if(cash<=0){
  cashsentbnt.disabled=true;
}else{
  cashsentbnt.disabled=false;
  //cashsent.disabled=true;
}



}


function updatedata(id){
  check=true;
  idsss=id;
  //cashbtm.onclick =expencedata(2);
	$.ajax({
     type: 'GET', //THIS NEEDS TO BE GET
     url: '/get_data_to_update/'+id,
     success: function (data) {
	var datajos=JSON.parse(data);
      if(datajos.message=="exitdata"){
        dailogmess("This Data is Not Your or Not Today","Please Try Another Data And Same Day","info");
      }else{
        amountcash.value=datajos.debit_taka; 
        expens.value=datajos.datails;
       document.getElementById("hiddenamout").value=datajos.id;
        pop_custom_on();

      }
       
     },
     error: function() { 

     }
    });

}





function deletdata(id){
  check=true;
  idsss=id;
  //cashbtm.onclick =expencedata(2);
	$.ajax({
     type: 'GET', //THIS NEEDS TO BE GET
     url: '/get_data_to_update/'+id,
     success: function (data) {


	var datajos=JSON.parse(data);
      if(parseInt(datajos.message)==0){
        dailogmess("This Data is Not Your or Not Today","Please Try Another Data And Same Day","info");
      }else{
        console.log("whats happend")
      conformdeleta(id);
      }
       
     },
     error: function() { 

     }
    });
}

function conformdeleta(id){
       swal({
   title: "Are you sure?",
   text: "you will not be able to return!",
   icon: "warning",
   buttons: true,
   dangerMode: true,
 })
 .then((willDelete) => {
   if (willDelete) {
     swal("Data has Deleted ", {
       icon: "success",
     }).then(function(){
     datedeleteinfo(id);
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

function datedeleteinfo(id){
  $.ajax({
     type: 'GET', //THIS NEEDS TO BE GET
     url: '/get_data_to_delete/'+id,
     success: function (data) {
	var datajos=JSON.parse(data);

     console.log(datajos);
     fetch_customer_data();
       
     },
     error: function() { 

     }
    });
}

</script>






@endsection