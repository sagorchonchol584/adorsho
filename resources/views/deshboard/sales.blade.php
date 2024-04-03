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
 center:0;
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


@keyframes fadeIn {
	
	0% {
		
		scale(.7);
		opacity: 0;
	}
	45% {
	
		scale(1.05);
		opacity: 1;
	}
	80% {
	
		scale(.95);
	}
	100% {
		
		scale(1);
	}     
  
}
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
</style>
    
    
    

  <div id="light" class="white_content">
  <div class="box">
  
  
 <div class="maindailoboax">
  <div class="exitdd">
  	<div class="gggg" onclick="exit()">
  	<button class="ddd "><span style="color: white">X</span></button>
    
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
      <td><span id="totals""></span></td>
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
   
  </tbody>
</table>
</div>


<div class="info">
	<h2 id="infomag">bangladeshahss</h2>
</div>

<div class="butttons">
	<button id="paymentbtm" type="button" class="btn btn-primary">Continus</button>&nbsp;
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
				<input class="form-control" name="product_barcode" id="product_barcode" type="text" class="inputFile"/>
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
<div class="card saleslist">
		
<div class="p-2">
	
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>  <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>  <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>  <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>  <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>  <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>  <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
</div>
  
  
<script>




var Sales_Price,Product_name,produ_id,Image,pieces,product_tittle;
var pro_bar =document.getElementById("product_barcode");
var clearbtn =document.getElementById("clearbtn");
var continubtn =document.getElementById("paymentbtm");
var totalss=document.getElementById("totals");
var selectElement = document.getElementById('discoutss');
var disinput = document.getElementById('disinput');
var netss = document.getElementById('nets');
var trs = document.getElementById('trs');
var infomag = document.getElementById('infomag');




let cart = {};
var addd;
let count = 0;
let sum = 0;
let qtps= 1;
pro_bar.focus();

var dis=false;
let disconttk=0;

if (localStorage.getItem("count")) {
	
    count = parseInt(localStorage.getItem("count"));
    if(count<=0)
	{
	 clearbtn.disabled=true;
	}else{
	 clearbtn.disabled=false;
	}
    
}else{
	
	clearbtn.disabled=true;
}


if (localStorage.getItem("sum")) {
    sum = parseInt(localStorage.getItem("sum"));
}


if (localStorage.getItem("cart")) {
    cart = JSON.parse(localStorage.getItem("cart"));
   // console.log(JSON.stringify(cart));
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
    correctgg();
	}

	
}

disinput.addEventListener("input", updateValue);

function updateValue(e) {
  disconttk = e.target.value; 
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
  		wronggg();
  	}else{
  	
  		let g=Math.round(tatt);
  		netss.textContent=g+"Tk";
  		correctgg();
  	}

  }else{
  	let d=s;
  	let tatss=sum-d;
  	if(tatss<=0)
  	{
  		wronggg();
  	}else{
  		netss.textContent=tatss+"Tk";
  		correctgg();
  	}
  }
}



function wronggg(){
	    netss.textContent="0 Tk";
	    infomag.innerHTML="Wrong Discout amount";
  		infomag.style.color="red";
  		trs.style.borderBottom="1px solid red";
  		disinput.style.border="1px solid red";
  		continubtn.disabled=true;
}

function correctgg(){
	    infomag.innerHTML="";
  		infomag.style.color="black";
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
      // console.log(obj[key].Product_name);
        add(Sales_Price,Product_name,produ_id,Image,product_tittle,1);
        
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


function tessst(){
		//var obj = JSON.parse(cart);	
		for(var key in cart){
			console.log(cart[key].qty);
			console.log("hello"+key);
		}
		
console.log(cart);
}


function check(id,qty)
    {
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


function continus(){
document.getElementById('light').style.display='block';
document.getElementById('fade').style.display='block';
popups();
disinput.value="0";
totalAc();
}


function exit(){
	
	document.getElementById('light').style.display='none';
	document.getElementById('fade').style.display='none';
    disinput.value="0";
}


function add_data(){
	
	for(var key in cart){
		//console.log(cart[key].qty);
		//console.log("hello"+key);
		check(key,cart[key].qty);
		var ffff=document.getElementById("n"+key);
     	ffff.remove();
		   }	
		   
  //  console.log("uuu"+cart);
	localStorage.clear();
	document.getElementById("sum").textContent ="0 Tk";
    document.getElementById("count").textContent = "Total Product: 0";
    clearbtn.disabled=true;
   // 
   
}



	

function add(prices,names,ids,imagess,pro_tit,oo) {

    pro_bar.focus();
    let tbody = document.getElementById("tbody");
    let tr = document.createElement('tr') 
	tr.id ="n"+ids;
	
	let totals;
    let price = prices;
    let Product = names+" "+pro_tit;
    let id = ids;
    let images = imagess;
	 
	var qtyadd; 
    count++;
    sum += price;

    // console.log("looog"+cart);
	 
if (ids in cart) {
	
    cart[ids].qty++;
    qtps=cart[ids].qty;
    console.log(qtps);
    var aa=document.getElementById("h"+ids).textContent=qtps;
   // aa.innerHTML=qtps;
   //   console.log(qtps);

} else {


    let cartItem = {
        Product: Product,
        price: price,
		images: images,
        qty: 1
    };
	
    cart[ids] = cartItem
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
   //  console.log(qtyadd);
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
    localStorage.setItem("count", count);
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
	 clearbtn.disabled=true;
	}else{
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
