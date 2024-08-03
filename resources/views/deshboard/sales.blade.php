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
   
   
 
<div class="col-8 h-750 ">
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

.box {
  height: 450px;
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

.black_overlay {
  display: none;
  position: absolute;
  top: 0%;
  left: 0%;
  width: 100%;
  height: 100%;
  background-color: black;
  z-index: 1001;
  -moz-opacity: 0.8;
  opacity: .50;
  filter: alpha(opacity=80);
 
}
.white_content {
 display: none;
 position: absolute;
 top:0;
 left:0;

 width: 100%;
 height: 100%;
 background-color:hsla(0,0%,0%,0.0);
 z-index: 1002;
}


	
.gggg{
	
	text-align: right;
}

.ddd{
	width: 30px;
	height: 30px;
	background-color: red;
	border: none;
}

/*
@keyframes fadeIn {
	
	0% {
		
		scale(0.7);
		opacity: 0;
	}
	45% {
	
		scale(1.05);
		opacity: 1;
	}
	80% {
	
		scale(0.95);
	}
	100% {
		
		scale(1);
	}     
  
 
}
   */
	.exitdd{
		height: 50px;
		width: 100%;
	    background-color:#F5F5F5;
	   
	}
.mainedd{
		height: 295px;
		width: 100%;
		border-top: 1px solid #a6a6a6ff;
		background-color: #FFFFFF;
	}
.butttons{
		height: 50px;
		width: 100%;
		text-align: right;
		padding-top: 5px;
	}


.info{
		height: 50px;
		width: 100%;
		text-align: center;
		padding-top: 5px;
	}
	
.dddd{
  height: 450px;
  width: 600px;
  margin: auto;
  border: 1px solid red;
  text-align: center;
border-radius: 5px;
background: white;
position: relative;
top:20%;

}

.maindailoboax{
	padding: 5px;
}


#printarea{
	display: none;
	background-color: red;
}

</style>
    
    
    

<div id="light" class="white_content"> 
<div class="box" id="boxx">
 <div class="maindailoboax">
  <div class="exitdd">
  	<div class="gggg" >
  	<button class="ddd" onclick="exit()"><span style="color: white" >X</span></button>
   </div>
  </div> 
<div class="mainedd">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Details Information</th>
       <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Total price :</td> 
      <td><span id="totals"></span></td>
    </tr>
    <tr id="trs">
      <td >Discount : 
		<select id="discoutss" onchange="seletfun()">
		  <option  value="percent">Percent(%)</option>
		  <option value="Amount">Amount(tk)</option>
		</select>
      </td> 
      <td>
      <input type="number" value="0" id="disinput" style="width: 80px" min="0" max="99"/> 
      </td>
    </tr>
    <tr>
      <td>Net price :</td> 
      <td><span id="nets"></span></td>
    </tr> 
     <tr>
    
      <td>Payment A :</td> 
      <td> <input type="number" value="" id="Payment" style="width: 100%; font-size: 20px; font-weight: bold;" min="0" max="99"/></td>
    </tr>  <tr>
    
      <td>States :</td> 
      <td><span id="States" style="color: red; font-weight:bold; font-size:20px ">gggg</span></td>
    </tr>
   
  </tbody>
</table>
</div>

<div class="info">
	<h2 id="infomag">bangladeshahss</h2>
</div>

<div class="butttons">
	<button id="paymentbtm" type="button" onclick="finnall()" class="btn btn-primary">Continus</button>&nbsp;
</div>

  </div>
  </div>
 
 
 
<div class="box" id="boxtwo">
 <div class="maindailoboax">
  <div class="exitdd">
  	<div class="gggg">
  	<button class="ddd"  onclick="failexit()"><span style="color: white">X</span></button>
   </div>
  </div>
   
   
<div id="printarea">

 <div class="ticket">
 
 <div class="iconprint">
 	<img src="{{ asset('icon/logo.png') }}" alt="Logo">
 </div>

<div class="printaddree" >
       <span>Kamarpara,Mohanpur</span> <br>
      <span style="font-size: 10px;">Mob:01713-742051</span>  
</div>
          <div class="details">
               <table>
                   <thead>
                       <tr>
                           <th class="quantity">Description</th>
                           <th class="description">Q</th>
                           <th class="price">Price</th>
                           <th class="price">Net</th>
                       </tr>
                   </thead>
                   
                   <tbody id="printsbody">
                               
                   </tbody>    
               </table>
<br>
               <div class="printaddree">
                <span style="font-size: 12px;">Thanks for your purchase!</span> <br>
                <span style="font-size: 10px;">www.adarshashop.com</span>
            </div>    
        </div>
     </div>
</div>
<div class="butttons">
	<button id="paymentbtm" type="button" onclick="finnallprint()" class="btn btn-primary">Print</button>&nbsp;
	  <button id="paymentbtm" type="button" onclick="failexit()" class="btn btn-primary">Ok</button>
</div>
</div>
</div>


<style>
	
  .boxr {
  height: 500px;
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
.popoo{
    height: 80px;
    width: 100%;
    background-color:  #e9e9e9;
  }
 .purchestwosss{
  height: 410px;
  width: 100%;
  overflow-y: scroll;
 }
</style>

<div class="boxr" id="purches">
 
  <div class="exitdd">
  	<div class="gggg">
  	 <button class="ddd" onclick="exittwo()"><span style="color: white">X</span></button>
    </div>
  </div>
  
  <span style="color: black; font-size: 16px; font-weight: 500;">**Purches list**</span>

  <div class="purchestwosss">
  
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Qty</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody id="purschssss">
   
  </tbody>
</table>

</div>
<div class="popoo">
<div class="col-6 h-80 text-md-end p-4">
  <span id="discoutchack" style="color: black; font-size: 20px; font-weight: 500;">Discount:8%</span>
</div>
<div class="col-6  h-80 text-md-end p-4 color: red;">
<span id="detailschack" style="color: black; font-size: 20px; font-weight: 500;">Total:38100 TK</span>
</div>
</div>
</div>





</div>
   
<div id="fade" class="black_overlay"></div> 
    
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

<div class="row">
<div class="card">
<div class="col-12 h-600 card">
	<div class="row">
		<div class="col-12">
		<div class="row">
		<div class="col-3">
			<div class="p-2 float-left">
		<form id="searchid">
		<?php echo csrf_field(); ?>
		<input class="form-control" name="product_barcode" id="product_barcode" type="text" onkeypress="return /[0-9a-zA-Z]/i.test(event.key)">
		</form>	
		</div>
		</div>	
		<div class="col-3">
		<div class="custom float-right">
			 <span id="count" style=" font-size: 18px; font-weight: 600;"></span>
		</div> 
		</div>
		
		<div class="col-3">
		<div class="custom float-right">
			<span  style=" font-size: 18px; font-weight: 600;">Customer Name: </span>
			   <input type="checkbox"  id="checkboxpises" class="form-check-input" style="width: 25px; height: 25px;">
		</div>	  
		</div>
		
		<div class="col-3">
			<div class="p-2 float-right">
				 <form id="searchid">
				<?php echo csrf_field(); ?>
				<input class="form-control" name="customername" id="customername" type="text" class="inputFile"/>
			 </form>	
		</div>
			
		</div>
			<hr>
		</div>
		
	</div>
	
</div>

<div>
<style>


.custom{
	height:50px;
	 padding-top:8px;
}


.my-custom-scrollbar {
position: relative;
height: 520px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}	

.me{
	
	font-weight: 500;
	font-size: 15px;
}
 
 .mes{
	
	
	font-size: 16px;
}
 
  
.addd{
	 color: red;
	font-weight: bold;
	font-size: 18px;
    padding: 3px;
	
}



.tableFixHead { overflow: auto; height: 520px; }
.tableFixHead thead th { position: sticky; top: 0; z-index: 1; }


.saleslist{
	height: 700px;
	width: 100%;
}
.tatols{
	box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
}

</style>
 <div class="table-wrapper-scroll-y my-custom-scrollbar">
<div class="tableFixHead">
	<table class="table" id="employee_table">
  <thead>
    <tr>
      <th scope="col" style="width: 50px;">#</th>
      <th scope="col" style="width: 100px;">Barcode</th>
      <th scope="col">Product</th>
      <th scope="col"><span class="float-right">Qty</span> </th>
      <th scope="col"><span class="float-right">Price</span> </th> 
      <th scope="col"></th>
    </tr>
  </thead>
      <tbody id="tbody">

        </tbody>
</table>
		
	
</div>
</div>	
</div>
</div>

<div class="col-12 h-90">
<hr>

<div class="tatols">
</div>
<button class="btn btn-outline-primary" id="clearbtn" onclick="confram()">Clear</button>
<div class="float-right" >
		<span style=" font-size: 22px; font-weight: 600; ">Total Price:</span>
		<span id="sum" style=" font-size: 22px; font-weight: 600;"></span>&nbsp&nbsp&nbsp&nbsp
		<button  id="ajax" class="btn btn-primary" onclick="continus()">Continuous</button>
	</div>
</div>
</div>
</div>
</div>



<div class="col-4 h-750">

<br><br>

<div class="card saleslist table-wrapper-scroll-y my-custom-scrollbar">		
<div class="p-2 ">	
<table class="table table-striped">
  <thead  style="text-align: right">
    <tr >
      <th scope="col">#</th>
      <th scope="col">Sales Man</th>
      <th scope="col">Date</th>
    <!--  <th scope="col">Discount</th> -->
      <th scope="col">Sales</th>
    </tr>
  </thead>
  <tbody id="proftgg" style="text-align: right">
   
  </tbody>
</table>
</div>
</div>
  
  
<script>

var detailschack = document.getElementById('detailschack');
var discoutchack = document.getElementById('discoutchack');


tessst();

function purchesdatashow(ddd){
	
document.getElementById('light').style.display='block';
document.getElementById('fade').style.display='block';
document.getElementById('purches').style.display='block';
document.getElementById('boxtwo').style.display='none';
document.getElementById('boxx').style.display='none';


var purschssss = document.getElementById('purschssss');

    $.ajax({
    type: 'GET', 
    url: '/profitdatails/'+ddd,
    success: function (data, status) {
    
    var getdata = JSON.parse(data);
    
    
    // this total show 
    var objone = getdata.profit_with_discout;
    for(var key in objone){
     console.log(objone[key].Net_Sale);


     detailschack.innerHTML="Total: "+objone[key].Total_sales+"Tk";
     discoutchack.innerHTML="Discount: "+objone[key].Discount_type;
     }

  // this details show 

  var obj = getdata.profitdatailsfun;

  for(var key in obj){ 	
  let nametrr = document.createElement('tr');
     	
  let siretdr = document.createElement('td');
	let sirespanr = document.createElement('span');
	sirespanr.innerHTML=key;
	siretdr.appendChild(sirespanr);
	nametrr.appendChild(siretdr);
	
 
	let nametdr = document.createElement('td');
	let ar = document.createElement('a');
	ar.className="link"
	var dddr=obj[key].Recive_num;
 // ar.href = "{{route('profitdatailsname',"")}}/"+dddr;
	let namespanr = document.createElement('span');
	namespanr.innerHTML=obj[key].product_Name;
	ar.appendChild(namespanr);
	nametdr.appendChild(ar);
	nametrr.appendChild(nametdr);	

	let datetdr = document.createElement('td');
	let datespanr = document.createElement('span');
	datespanr.innerHTML=obj[key].product_unite;;
	datetdr.appendChild(datespanr);
	nametrr.appendChild(datetdr);
	
	let saletdr = document.createElement('td');
	let salesspanr = document.createElement('span');
	salesspanr.innerHTML=obj[key].Sales_price+" tk";
	saletdr.appendChild(salesspanr);
	nametrr.appendChild(saletdr);
	purschssss.appendChild(nametrr);	 


 

		}
 
    },
    error: function() { 

    }
});
	
	
	
	
	
	
	
	
	

	
	//var obj = JSON.parse(cart);	
	//	for(var key in cart){
	//		console.log(cart[key].qty);
	//		console.log("hello"+key);
	//	}	
    // console.log(cart);
}


function tessst(){

	var proft = document.getElementById('proftgg');
	var name,dates,salest;
  
    $.ajax({
    type: 'GET', 
    url: '/profitshow',
    success: function (data) {
      console.log("date add refurn value");
        // console.log(data);
     var obj = JSON.parse(data);
     for(var key in obj){
     	
 let nametr = document.createElement('tr');
     	
  let siretd = document.createElement('td');
	let sirespan = document.createElement('span');
	sirespan.innerHTML=key;
	siretd.appendChild(sirespan);
	nametr.appendChild(siretd);
	
     	
    
	let nametd = document.createElement('td');
	let buttons = document.createElement('button');
  var ddd=obj[key].Recive_number;

  buttons.innerHTML=obj[key].Starf_Name;
	buttons.className="link";
	buttons.id=ddd;
	buttons.setAttribute("onClick", "purchesdatashow("+ddd+")");
	
	nametd.appendChild(buttons);
	nametr.appendChild(nametd);	
	
	
	

	let datetd = document.createElement('td');
	let datespan = document.createElement('span');
	datespan.innerHTML=obj[key].Date;;
	datetd.appendChild(datespan);
	nametr.appendChild(datetd);



/*
  let disc = document.createElement('td');
	let discspan = document.createElement('span');
	discspan.innerHTML=obj[key].Discount_type;
	disc.appendChild(discspan);
	nametr.appendChild(disc);
	
*/
	
	
	let saletd = document.createElement('td');
	let salesspan = document.createElement('span');
	salesspan.innerHTML=obj[key].Total_sales+" tk";
	
	
	
	
	
	saletd.appendChild(salesspan);
	nametr.appendChild(saletd);

	proft.appendChild(nametr);	
     
		}
    },
    error: function() { 

    }
});
	
	
	
	
	
	
	
	
	

	
	//var obj = JSON.parse(cart);	
	//	for(var key in cart){
	//		console.log(cart[key].qty);
	//		console.log("hello"+key);
	//	}	
    // console.log(cart);
}





var Sales_Price,Product_name,produ_id,Image,pieces,product_tittle,purches_Price;
var pro_bar =document.getElementById("product_barcode");
var clearbtn =document.getElementById("clearbtn");
var continubtnone =document.getElementById("ajax");
var continubtn =document.getElementById("paymentbtm");
var totalss=document.getElementById("totals");
var selectElement = document.getElementById('discoutss');
var disinput = document.getElementById('disinput');
var netss = document.getElementById('nets');
var trs = document.getElementById('trs');
var infomag = document.getElementById('infomag');
var States = document.getElementById('States');
var Payment = document.getElementById('Payment');
var customername = document.getElementById('customername');
var checkboxpises = document.getElementById('checkboxpises');





let cart = {};
var addd;
let count = 0;
let sum = 0;
let profit=0;
let qtps= 1;
pro_bar.focus();

var dis=false;
let disconttk=0;
let disconttkPayment=0;
let nettkbal=0;
let totaldiscout=0;
let discount_cat;


if (localStorage.getItem("count")) {
	
    count = parseInt(localStorage.getItem("count"));
    if(count<=0)
	{
	 clearbtn.disabled=true; 
	 continubtnone.disabled=true;
	}else{
	 continubtnone.disabled=false;
	 clearbtn.disabled=false;
	}
    
}else{
	
	continubtnone.disabled=true;
	clearbtn.disabled=true;
}


if (localStorage.getItem("sum")) {
    sum = parseInt(localStorage.getItem("sum"));
}


if (localStorage.getItem("profit")) {
    profit = parseInt(localStorage.getItem("profit"));
}


if (localStorage.getItem("cart")) {
    cart = JSON.parse(localStorage.getItem("cart"));
   // console.log(JSON.stringify(cart));
}

cheackbox();

//this a test purpose ,this succssfull methoth,,,route name length,,,and controlar function name length

  		
function inputfunction(){    
	
console.log("working");

const arrayLike = {
  "a": "a",
  "d": "b",
  length: 2,
};
	
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
            url: 'hhhh',
            type: 'POST',
            data: {_token: CSRF_TOKEN, hello:arrayLike},
            dataType: 'JSON',
            success: function (data) { 
              //  $(".writeinfo").append(data.catagory_name); 
              //	var obj = JSON.parse(data);
               console.log(data);
            }
        });   	
   }
       




 checkboxpises.onclick = function() {
 	
 	if(checkboxpises.checked==true){
 		customername.value="Unknown";
 		customername.disabled = true;
 	console.log("true");
 	}else{
 		customername.value="";
        customername.disabled = false;
 	}
 	
 }



function cheackbox(){
	
	checkboxpises.checked=true; 
if(checkboxpises.checked==true){
 		customername.value="Unknown";
 		customername.disabled = true;
 	console.log("true");
 	}else{
 		customername.value="";
        customername.disabled = false;
 	}

}


function profitshow(){
	var Product_name;
    $.ajax({
    type: 'GET', 
    url: '/profitshow',
    success: function (data) {
    	
        console.log("date add refurn value");
        // console.log(data);
        var obj = JSON.parse(data);
     for(var key in obj){
		console.log(obj[key].Recive_number);
     
		}
    },
    error: function() { 

    }
});
    }


//this a test purpose ,this succssfull methoth,,,route name length,,,and controlar function name length end



function finnall(){
	
	document.getElementById('boxx').style.display='none';
	document.getElementById('boxtwo').style.display='block';
    printdatashow();
    purchedata();
}

function finnallprint(){
 var disp_setting="toolbar=yes,location=no,";
disp_setting+="directories=yes,menubar=yes,";
disp_setting+="scrollbars=yes,width=650, height=600, left=100, top=25";
   var content_vlue = document.getElementById("printarea").innerHTML;
   var docprint=window.open("","",disp_setting);
   docprint.document.open();
   docprint.document.write('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"');
   docprint.document.write('"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">');
   docprint.document.write('<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">');
   docprint.document.write('<head><title>My Title</title>'); 
   docprint.document.write("<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontend/css/prints.css') }}\" />"); 
   docprint.document.write('<style type="text/css"> body{ margin:0px; height:100%; width:80mm;');
   docprint.document.write('font-family:verdana,Arial;color:#000;');
   docprint.document.write('font-family:Verdana, Geneva, sans-serif; font-size:12px;}');
   docprint.document.write('a{color:#000;text-decoration:none;} </style>');
   docprint.document.write('</head><body onLoad="self.print()"><left>');
   docprint.document.write(content_vlue);
   docprint.document.write('</left></body></html>');
   docprint.document.close();
   docprint.focus();
    failexit();
}


function printdatashow(){
let printbody = document.getElementById("printsbody");
let printtrtwo = document.createElement('tr');
let printtrtthree = document.createElement('tr');
let nettr = document.createElement('tr');
   

    for (let id in cart) {
    let item = cart[id];
    let printtr = document.createElement('tr')
   
    let printtdname = document.createElement("td");
    const newBussname = document.createElement('span');
     newBussname.textContent =item.Product; 
     printtdname.appendChild(newBussname);
     printtr.appendChild(printtdname); 
   
    let printtd = document.createElement("td");
    const newBuss = document.createElement('span');
     newBuss.textContent =item.qty; 
     printtd.appendChild(newBuss);
     printtr.appendChild(printtd);  
     
    let printtdtk = document.createElement("td");
    const newBusstk = document.createElement('span');
     newBusstk.textContent =item.price+" x"; 
     printtdtk.appendChild(newBusstk);
     printtr.appendChild(printtdtk);  
      
    let printtdnet = document.createElement("td");
    const newBussnet = document.createElement('span');
     newBussnet.textContent =item.qty*item.price+" Tk"; 
     printtdnet.appendChild(newBussnet);
     printtr.appendChild(printtdnet);  
     printbody.appendChild(printtr);
	}






     let printtddis = document.createElement("td");
     printtddis.className="tatols"
     printtrtwo.appendChild(printtddis);
        
        
        
        
     let printtdnet = document.createElement("td");
     printtdnet.className="tatols"
    const newBussnet = document.createElement('span');
     newBussnet.textContent ="Total"; 
     printtdnet.appendChild(newBussnet);
     printtrtwo.appendChild(printtdnet); 
     
     
     
     
     let printtdnett = document.createElement("td");
     printtdnett.className="tatols"
    const newBussnett = document.createElement('span');
     newBussnett.textContent =""; 
     printtdnett.appendChild(newBussnett);
     printtrtwo.appendChild(printtdnett);  
     
     
     
     
     let printtdnettnet = document.createElement("td");
      printtdnettnet.className="tatols"
    const newBussnettnet = document.createElement('span');
     newBussnettnet.textContent =sum+" Tk"; 
     printtdnettnet.appendChild(newBussnettnet);
     printtrtwo.appendChild(printtdnettnet);
     
     
     
     //-------------gdfgdfg----------------
     
     
     let distd = document.createElement("td");
     const disspanon = document.createElement('span');
     disspanon.textContent =""; 
     distd.appendChild(disspanon);
     printtrtthree.appendChild(distd);
        
        
        
        
     let distdtwo = document.createElement("td");
      const disspan = document.createElement('span');
     disspan.textContent ="Discount"; 
     distdtwo.appendChild(disspan);
     printtrtthree.appendChild(distdtwo); 
     
     
     
     
     let distdthree = document.createElement("td");
    const disspanthree = document.createElement('span');
    
    if(dis==false){
    	 disspanthree.textContent =disconttk+"%"; 
    }else{
    	// disspanthree.textContent =disconttk; 
    }
     distdthree.appendChild(disspanthree);
     printtrtthree.appendChild(distdthree);  
     
     
     
     
     let distdfour = document.createElement("td");
    const disspanfour = document.createElement('span');
     disspanfour.textContent =totaldiscout+" Tk"; 
     distdfour.appendChild(disspanfour);
     printtrtthree.appendChild(distdfour);
     
     
     //------------net tk--------------------
     
     

     let nettd = document.createElement("td");
     nettd.className="tatols"
     nettr.appendChild(nettd);
        
        
        
        
     let nettdtwo = document.createElement("td");
     nettdtwo.className="tatols"
    const netsapn = document.createElement('span');
     netsapn.textContent ="Net Price"; 
     nettdtwo.appendChild(netsapn);
     nettr.appendChild(nettdtwo); 
     
     
     
     
     let nettdthree = document.createElement("td");
     nettdthree.className="tatols"
    const netsapnthree = document.createElement('span');
     netsapnthree.textContent =""; 
     nettdthree.appendChild(netsapnthree);
     nettr.appendChild(nettdthree);  
     
     
     
     
     let nettdfour = document.createElement("td");
     nettdfour.className="tatols"
    const netsapnfour = document.createElement('span');
     netsapnfour.textContent =nettkbal+" Tk"; 
     nettdfour.appendChild(netsapnfour);
     nettr.appendChild(nettdfour);
     
     
     
     //-------------gdfgdfg----------------
     
     
  
     printbody.appendChild(printtrtwo);
     printbody.appendChild(printtrtthree); 
     printbody.appendChild(nettr);
	
}


function printdatashownotjsonfile(unity, name, price){
		
 let printbody = document.getElementById("printsbody");

let printtrtwo = document.createElement('tr')
    printtrtwo.className="totalnet";
    
    let printtr = document.createElement('tr')

   
    let printtd = document.createElement("td");
    const newBuss = document.createElement('span');
     newBuss.textContent =unity; 
     printtd.appendChild(newBuss);
     printtr.appendChild(printtd);  
     
     
    let printtdname = document.createElement("td");
    const newBussname = document.createElement('span');
     newBussname.textContent =name; 
     printtdname.appendChild(newBussname);
     printtr.appendChild(printtdname);  
     
     
    let printtdtk = document.createElement("td");
    const newBusstk = document.createElement('span');
     newBusstk.textContent =price; 
     printtdtk.appendChild(newBusstk);
     printtr.appendChild(printtdtk);    
     printbody.appendChild(printtr);
		
}


function seletfun(){
	
	if(selectElement.value=="Amount"){
		
	dis=true;
	disinput.value="0";
	disinput.max="100000";
	disconttk=0;
	totalAc();
	}else{
		
	dis=false;
    disinput.value="0";
    disinput.max="99";
    disconttk=0;
    totalAc();
    correctgg('');
	}	
}

disinput.addEventListener("input", updateValue);
function updateValue(e) {
  disconttk = e.target.value; 
  totalAc();
}



Payment.addEventListener("input", updateValuePayment);
function updateValuePayment(e) {
  disconttkPayment = e.target.value; 
  totalAc();
}




function popups(){
totalss.textContent=sum+" Tk";
		}

function totalAc(){
	let s=disconttk;
	
   if(dis==false){
   	
  	let ass=s/100;
  	let dc=sum*ass;
  
  	let tatt=sum-dc;
  	
  	if(tatt<=0)
  	{
  		wronggg("Wrong Discout amount");
  	}else{
  		let g=Math.round(tatt);
  		totaldiscout=Math.round(dc);
      discount_cat=disconttk+'%';
  		netss.textContent=g+"Tk";
  		nettkbal=g;
  		correctgg('');
  	}



  }else{
  	let d=s;
  	let tatss=sum-d;
  	if(tatss<=0)
  	{
  		wronggg("Wrong Discout amount");
  	}else{
  		netss.textContent=tatss+"Tk";
  		nettkbal=tatss;
  		totaldiscout=d;
      discount_cat=s+'TK';
  		correctgg('');
  	}
  }
  
  let paymt=disconttkPayment;
  
  if(paymt>=1){
  	let paymttwo=nettkbal-disconttkPayment;
    
    if(paymttwo<=0){
    	let kk=-1;
    	let kett=kk*paymttwo;
    	
    	if(nettkbal==paymt)
    	{
    	correctgg('Congratulation');
    	States.innerHTML="PAID";
    	}
    	else
    	{
    	 correctgg('Change amount '+kett+' Tk');
    	 States.innerHTML="PAID";
    	}
    	
    	//console.log(paymttwo+paymt);
    }
    
  }
  
  
}



function wronggg(mgs){
	    netss.textContent="0 Tk";
	    infomag.innerHTML=mgs;
  		infomag.style.color="red";
  		trs.style.borderBottom="1px solid red";
  		disinput.style.border="1px solid red";
  		continubtn.disabled=true;
}

function correctgg(mgs){
	    infomag.innerHTML=mgs;
  		infomag.style.color="green";
  		trs.style.borderBottom="1px solid #c8c7c8ff";
  		disinput.style.border="1px solid black";
  		continubtn.disabled=false;
}



$(document).ready(function (e) {
 	 $("#searchid").on('submit',(function(e) {
		e.preventDefault();		
	
	if(!pro_bar.value==""){
	
		$.ajax({
        type: 'GET',
        url: 'getsearch/' + pro_bar.value,
 
        beforeSend: function() { 	
         //  hidddenshow();
        },            
      complete: function() {
          //hiddden();
       },
        
		success: function(data)
	    {
		   	pro_bar.value="";
		   	 
		var obj = JSON.parse(data);
		if(obj.message=="Exit"){
			if(obj.data=="NO"){
				orrning("Stock not Available","Please stock loaded");
			}else{
				orrning("Not Found Data","Plase search Again");
			}
			console.log("not found");
			
		}else{
					
		for(var key in obj){
			
		Product_name=obj[key].Product_name;
		produ_id=obj[key].Barcode;
		product_tittle=obj[key].Weight;
		Image=obj[key].Image; 
	  Sales_Price=obj[key].Sales_Price;  
	  pieces=obj[key].pieces; 
	  purches_Price=obj[key].Purches_Price; 
      // console.log(obj[key].Product_name);
    add(Sales_Price,Product_name,produ_id,Image,product_tittle,purches_Price);
     
		}	
		}	
		},
	  	error: function() 
    	{
    		console.log("network problem");
    		//testtt();
    	} 	        
        });							
	
	
	}else{
		orrning("Empty Sales barcode","Plase check field")
	}
	
        }));});  


allfuncaliondata();



function check(id,qty){
    $.ajax({
    type: 'GET', //THIS NEEDS TO BE GET
    url: '/heo/'+id+"/"+qty,
    success: function (data) {
        console.log("date add refurn value");  
       
       // $("#data").append(data);
    },
    error: function() { 
        // console.log(data);
    }
});
    }
    
    
function purcheschack(id,qty,num){
    $.ajax({
    type: 'GET', //THIS NEEDS TO BE GET
    url: '/purchers/'+id+"/"+qty+"/"+num,
    success: function (data) {
    	
        console.log("date add refurn value");
         console.log(data);
       // $("#data").append(data);
    },
    error: function() { 
        // console.log(data);
    }
});
    }
    
    
    
    
    

    
function profit_data_load(discat,dis,sales,amount,num,name){
	
	
	
    $.ajax({
    type: 'GET', //THIS NEEDS TO BE GET
    url: '/profiturl/'+discat+"/"+dis+"/"+sales+"/"+amount+"/"+num+"/"+name,
    success: function (data) {
    	
        console.log("date add refurn value");
         console.log(data);
       // $("#data").append(data);
    },
    error: function() { 
        // console.log(data);
    }
});
    }


function continus(){
	
	
document.getElementById('light').style.display='block';
document.getElementById('fade').style.display='block';
popups();
disinput.value="0";
totalAc();

document.body.style.overflow= "hidden";
Payment.focus();
document.getElementById('boxtwo').style.display='none';
document.getElementById('boxx').style.display='block';
 document.getElementById('purches').style.display='none';
 
 
 
}



function purchedata(){
var nameofcoustmor=customername.value; 
if(nameofcoustmor==""){
	nameofcoustmor="Unknown"
}

var minm = 100000000000; 
var maxm = 999999999999;       
var num= Math.floor(Math.random() * (maxm - minm + 1)) + minm;
	
	
	
	
	profit_data_load(discount_cat,totaldiscout,nettkbal,profit,num,nameofcoustmor);
	
	for(var key in cart){
		purcheschack(key,cart[key].qty,num);
		var ffff=document.getElementById("n"+key);
     	ffff.remove();
		   }	
		   
  //  console.log("uuu"+cart);
//	localStorage.clear();
  localStorage.removeItem("cart");
  localStorage.removeItem("sum");
  localStorage.removeItem("profit");
  localStorage.removeItem("count");

	document.getElementById("sum").textContent ="0 Tk";
    document.getElementById("count").textContent = "Total Product: 0";
    continubtnone.disabled=true;
    clearbtn.disabled=true;
    
   
}


function exit(){
	
	document.getElementById('light').style.display='none';
	document.getElementById('fade').style.display='none';
    disinput.value="0";
}

function exittwo(){

	document.getElementById('light').style.display='none';
	document.getElementById('fade').style.display='none';
    location.reload();
}


function failexit(){
	document.getElementById('light').style.display='none';
	document.getElementById('fade').style.display='none';
	
	console.log("failexit");
    disinput.value="0";
     location.reload();
   
}


function add_data(){
	for(var key in cart){
		check(key,cart[key].qty);
		var ffff=document.getElementById("n"+key);
     	ffff.remove();
		   }	
		   
  //  console.log("uuu"+cart);
	localStorage.removeItem("cart");
  localStorage.removeItem("sum");
  localStorage.removeItem("profit");
  localStorage.removeItem("count");

  // localStorage.setItem("cart", JSON.stringify(cart));
  //  localStorage.setItem("sum", sum); 
  //  localStorage.setItem("profit", profit);
  //  localStorage.setItem("count", count);

	document.getElementById("sum").textContent ="0 Tk";
  document.getElementById("count").textContent = "Total Product: 0";
  continubtnone.disabled=true;
  clearbtn.disabled=true;
   // 
   
}


function add(prices,names,ids,imagess,pro_tit,purchesPrice) {

    pro_bar.focus();
    let tbody = document.getElementById("tbody");
    //-----this print line for payment-------
let printbody = document.getElementById("printsbody");
    
    
    let tr = document.createElement('tr') 
	tr.id ="n"+ids;
	
	let totals;
    let price = prices;
    let Product = names+" "+pro_tit;
    let id = ids;
    let images = imagess;
	let prod=price-purchesPrice;
	
	var qtyadd; 
    count++;
    sum += price;
    profit+=prod;
    // console.log("looog"+cart);
	 console.log("this is single profit"+profit);
if (ids in cart) {
	
    cart[ids].qty++;
    qtps=cart[ids].qty;
  //  console.log(qtps);
    var aa=document.getElementById("h"+ids).textContent=qtps;
 
 
 
 
 
} else {


    let cartItem = {
        Product: Product,
        price: price,
		images: images,
        qty: 1
    };
	
    cart[ids] = cartItem
    continubtnone.disabled=false; 
    clearbtn.disabled=false; 
    
    
    
    //---------hhhh----------------	
	 let title_td_id = document.createElement('td');
	var oImg = document.createElement("img");
	oImg.setAttribute('src', "{{asset('product')}}/"+images);
	oImg.setAttribute('height', '45px');
	oImg.setAttribute('class', 'rounded');
	oImg.setAttribute('width', '45px');
	title_td_id.appendChild(oImg);
	tr.appendChild(title_td_id);
	
	
    let title_td_ids = document.createElement('td');
    let title_td_id_span = document.createElement('span');
    title_td_id_span.textContent = ids;
    title_td_id_span.classList.add("me");
    title_td_ids.appendChild(title_td_id_span);
    tr.appendChild(title_td_ids);
	

    
     let title_td = document.createElement('td')
     const newButtons  = document.createElement('span');
     newButtons.classList.add("mes"); 
     newButtons.textContent = Product;
     title_td.appendChild(newButtons);
     tr.appendChild(title_td);
    

     let qty_td = document.createElement("td");
    const newBus = document.createElement('span');
     newBus.classList.add("float-right");
     newBus.id="h"+ids;
     newBus.textContent = "1";
     qty_td.appendChild(newBus);
     tr.appendChild(qty_td);
    
    

    let price_td = document.createElement("td");
    const newBu = document.createElement('span');
     newBu.classList.add("float-right");
      newBu.textContent = price;
     price_td.appendChild(newBu);
    tr.appendChild(price_td);
    
    
    

	 let price_td_dd = document.createElement("td");
     const newButton = document.createElement('span');
     newButton.textContent = 'X';
     newButton.classList.add("float-right");
     newButton.classList.add("btn"); 
     newButton.classList.add("btn-outline-danger");
     price_td_dd.appendChild(newButton);
     tr.appendChild(price_td_dd);
     
	 
     newButton.addEventListener("click", function(){
      some_function(ids,price);
      console.log("clear alll");
     }, false);
	 
	 
	
    tbody.appendChild(tr);
	
	
	 //-----this print line for payment-------

let printtrtwo = document.createElement('tr')
    printtrtwo.className="totalnet";
    
    let printtr = document.createElement('tr')

   
    let printtd = document.createElement("td");
    const newBuss = document.createElement('span');
     newBuss.textContent ="1"; 
     printtd.appendChild(newBuss);
     printtr.appendChild(printtd);  
     
     
    let printtdname = document.createElement("td");
    const newBussname = document.createElement('span');
     newBussname.textContent =Product; 
     printtdname.appendChild(newBussname);
     printtr.appendChild(printtdname);  
     
     
    let printtdtk = document.createElement("td");
    const newBusstk = document.createElement('span');
     newBusstk.textContent =price; 
     printtdtk.appendChild(newBusstk);
     printtr.appendChild(printtdtk);  
     
       
     printbody.appendChild(printtr);
	
	
	
//-------------hhhhh----------	
    
    
    
    
    
}


  
   
   
    localStorage.setItem("cart", JSON.stringify(cart));
    
   // console.log(cart);
    
    updateCart();
}

function updateCart() {
	
	
   document.getElementById("sum").textContent = sum+" Tk";
   document.getElementById("count").textContent = "Total Product: "+count;
   localStorage.setItem("sum", sum); 
   localStorage.setItem("profit", profit);
   localStorage.setItem("count", count);
   console.log("this is profit total"+profit);
}



function allfuncaliondata(){
	
//-------------------------this new data load------------------------------

    let tbody = document.getElementById("tbody");


    for (let id in cart) {
    let item = cart[id];
    let tr = document.createElement('tr')
	  tr.id = "n"+id;
	
	
	
	 let title_td_id = document.createElement('td')
	var oImg = document.createElement("img");
	oImg.setAttribute('src', "{{asset('product')}}/"+item.images);
	oImg.setAttribute('height', '45px');
	oImg.setAttribute('class', 'rounded');
	oImg.setAttribute('width', '45px');
	title_td_id.appendChild(oImg);
	tr.appendChild(title_td_id)
	
	
    let title_td_ids = document.createElement('td');
    let title_td_id_span = document.createElement('span');
    title_td_id_span.textContent = id;
    title_td_id_span.classList.add("me");
    title_td_ids.appendChild(title_td_id_span);
    tr.appendChild(title_td_ids);


    let title_td = document.createElement('td')
     const newButtons = document.createElement('span');
     newButtons.classList.add("mes"); 
     newButtons.textContent = item.Product;
     title_td.appendChild(newButtons);
     tr.appendChild(title_td)
    

    let qty_td = document.createElement("td");
    const newBus = document.createElement('span');
     newBus.classList.add("float-right")
     newBus.textContent = item.qty;
     newBus.id="h"+id;
     qty_td.appendChild(newBus);
     tr.appendChild(qty_td);
    


    let price_td = document.createElement("td");
    const newBu = document.createElement('span');
     newBu.classList.add("float-right");
      newBu.textContent = item.price;
     price_td.appendChild(newBu);
    tr.appendChild(price_td);
    
    
     let price_td_dd = document.createElement("td");
     const newButton = document.createElement('span');
     newButton.textContent = 'X';
     newButton.classList.add("float-right");
     newButton.classList.add("btn"); 
     newButton.classList.add("btn-outline-danger");
     price_td_dd.appendChild(newButton);
     tr.appendChild(price_td_dd);
     
	 
     newButton.addEventListener("click", function(){
      some_function(id,item.price);
     }, false);
	
    tbody.appendChild(tr);
}
	

document.getElementById("sum").textContent = sum+" Tk";
document.getElementById("count").textContent = "Total Product: "+count;

}


function some_function(id,price){
	
	var aa=document.getElementById("h"+id);
	let a;
	a=aa.innerText;
    delete cart[id];
	localStorage.setItem("cart", JSON.stringify(cart));
    var ffff=document.getElementById("n"+id);
 	ffff.remove();
    count-=a;
    sum-=price*a;
    
    if(count<=0)
	{
	 continubtnone.disabled=true;
	 clearbtn.disabled=true;
	 
	}else{
	 continubtnone.disabled=false;
	 clearbtn.disabled=false;
	}
	console.log("hello mewe");
    updateCart();
    check(id,a);
    popups();
    
}


function clearss(){
			swal({
		         title: "Are you sure!",
		         text: "Do you want to clear",
		         icon: "info",
		        });
		}


function confram(){

swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary data!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Your data Deleted ", {
      icon: "success",
    }).then(function(){
   //  console.log("deleta data");
    location.reload();
    });
   add_data();
  } else {
    swal("Do you want Exit ?",{
    	closeOnClickOutside: false,
    });
  }
});

	}
			

function orrning(varr,varss){
		    swal({
		 	      title: ""+varr+"",
		  	     text: ""+varss+"!",
		 	      icon: "info",
		       });       
		 } 

 
function hiddden(){
		document.getElementById('light').style.display='none';
		document.getElementById('fade').style.display='none';
	}	
	
function hidddenshow(){
		document.getElementById('light').style.display='block';
		 document.getElementById('fade').style.display='block';
	}



//hidddenshow();



</script>
  
@endsection
