@extends('layout.master')
@section('content')

<div class="row">
<div class="col-12 h-80">
				
<div class="top_breadc">
	<div class="top_breadcone"><i class='bx bxs-dashboard bx-lg card' ></i></div>
	  <div class="top_breadctwo">
	    <span class="breade_color">Product page</span>
		<p class="breaderr">This is Product page add information admin page.</p>   
      </div>
</div>	
	</div>
   </div>
    <div class="row">
	<div class="col-8 h-750">
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




<div class="p-5 col-6 card">
  <div class="form-group">
  <label for="exampleInputName">Barcode</label>
<input type="text" class="form-control" id="product_barcode" name="product_barcode" aria-describedby="emailHelp" placeholder="Barcode" required>
  </div> <br/>
  
  <div class="form-group">
   <label for="exampleInputName">Product Name</label>
    <input type="phone" min="11" class="form-control" id="productname" maxlength="11" name="Product_name" placeholder="Product name"  required>
  </div>
  <br/>
  
     <div class="form-group" id="radiosss">
     <label for="exampleInputName">Choice Weight --</label>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="Weightchack" id="inlineRadio" value="Liter" >
  <label class="form-check-label" for="inlineRadio2">Liter</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="Weightchack" id="inlineRadio1" value="Kg">
  <label class="form-check-label" for="inlineRadio3">KG</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="Weightchack" id="inlineRadio2" value="Prices">
  <label class="form-check-label" for="inlineRadio3">Pices</label>
</div>
  </div><br/>
   
   
   
   
     
      
      
      
<div class="form-row">
<div class="form-group col-md-6 p-1"> 
 <label for="exampleInputName">Weight</label>
<div class="input-group mb-2">
   <input type="number" class="form-control" id="Weight" name="Weight" placeholder="Weight" required>
    <div class="input-group-prepend">
    <div class="input-group-text"><span class="text-primary" id="weightshow">@</span></div>
   </div>
   </div>   
    </div>
    <div class="form-group col-md-6 p-1">
   <label for="exampleInputName">Purches Unity</label>
    <input type="number"  class="form-control" id="productunity"  name="Product_units" placeholder="Total product"  required>
  <br/>
    </div>
    <div class="form-group col-md-6 p-1">
      <label for="PurchesPrice">Purches Price</label>
      <input type="number" class="form-control" id="PurchesPrice" name="Product_rate" placeholder="Price" required>
       <br/> 
    </div>
    <div class="form-group col-md-6 p-1">
      <label for="Selesprice">Seles price</label>
      <input type="number" class="form-control" id="Selesprice" name="Sales_rate" placeholder="Rate" required>
       <br/> 
    </div>
 

   <div class="form-group">
   <label for="exampleInputName">Product Discout %</label>
    <input type="number" value="0"  class="form-control" id="productdiscout"  name="Descount_rate" placeholder="Product Discout"  required>
 </div>
 <br>
 
 
 
  <div class="form-group col-md-6">
   <label for="exampleInputName">Product Expire Date</label>
    <input type="date"  class="form-control" id="expire_date"  name="Expire_date" placeholder="Total product">
  <br/>
    </div>
    
    <style>
    	.animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
 font-size: 20px;
}
.addd{
	padding-left: 5px;
	margin-top: 23px;
}
@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
    </style>
    <div class="form-group col-md-6">
    <div class="addd">
    	<label for="PurchesPrice" class="animate-charcter" style="color: red;">Unlimited date</label>
     <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="width: 30px; height: 30px">
  
    </div>
      
    
       <br/> 
    </div>
 </div>



</div>

<div class="col-6 h-600 card">

<div class="form-group p-5">
<label for="exampleInputName"> Product Catagory </label>   
<select class="form-control" id="sub_category_name">
    <option selected>Choose...</option>
    @foreach($data as $categories)
    <option value="{{$categories->id}}">{{$categories->catagory_name}}</option>
    @endforeach
</select>


</br>
<label for="exampleInputName"> Sub Catagory </label>   
 <select class="form-control formselect required" placeholder="Select Sub Category" id="sub_category">
</select>
</br>
    <script>
                $(document).ready(function () {
                $('#sub_category_name').on('change', function () {
                let id = $(this).val();
                $('#sub_category').empty();
                $('#sub_category').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                type: 'GET',
                url: 'GetSubCatAgainstMain/' + id,
                success: function (response) {
                var response = JSON.parse(response);
               // console.log(response);   
                $('#sub_category').empty();
                $('#sub_category').append(`<option value="0" disabled selected>Select Sub Category*</option>`);
                response.forEach(element => {
                    $('#sub_category').append(`<option value="${element['id']}">${element['catagory_name']}</option>`);
                    });
                }
            });
        });
    });
    </script>
    
    
<label for="exampleInputName"> Sub to Sub Catagory </label>   

<select class="form-control" id="subtosutcatagory">
    <option selected>Choose...</option>
   
</select>


   <script>
                $(document).ready(function () {
                $('#sub_category').on('change', function () {
                let id = $(this).val();
                
                $('#subtosutcatagory').empty();
                $('#subtosutcatagory').append(`<option value="0" disabled selected>Processing...</option>`);
                
                $.ajax({
                type: 'GET',
                url: 'GetSubCatAgainstMainmulti/' + id,
                success: function (response) {
                var response = JSON.parse(response);
                
                $('#subtosutcatagory').empty();
                $('#subtosutcatagory').append(`<option value="0" disabled selected>Select Sub Category*</option>`);
                response.forEach(element => {
                    $('#subtosutcatagory').append(`<option value="${element['id']}">${element['sub_catagory_name']}</option>`);
                    });
                }
            });
        });
    });
    
    
    </script>
  

	
<br>
<div class="form-group">
<label for="exampleFormControlTextarea1">Product Image</label>
  <img  class="border" id="frame" src="{{asset('frontend/img/demo.jpg')}}" class="img-fluid" width="150px" height="150px" />
  </div>
<br>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Image</label>
    <input class="form-control" type="file" id="formFile"  onchange="preview()" name="Image" >
  </div>
<br>
  <button type="submit" onclick="productADAFunction()"  class="btn btn-primary">Submit</button>




   <script>
   
   var mesagess;
   var product_barcode=document.getElementById('product_barcode');
   	var productname=document.getElementById('productname'); 
   	var Weightchack=document.getElementById('Weightchack');
   	var Weight=document.getElementById('Weight');
   	var productunity=document.getElementById('productunity'); 
   	var PurchesPrice=document.getElementById('PurchesPrice');
   	var Selesprice=document.getElementById('Selesprice');
   	var productdiscout=document.getElementById('productdiscout'); 
    var esxpire_date=document.getElementById('expire_date');
    var ischeckbox1=document.getElementById('inlineCheckbox1');
   
   
   	var oneradio=document.getElementById('inlineRadio');
   	var tworadio=document.getElementById('inlineRadio1'); 
   	var threeradio=document.getElementById('inlineRadio2');  
   	 var radiosss=document.getElementById('radiosss');
   	
     var showt=document.getElementById('weightshow');  
     var placehol=document.getElementById('Weight'); 
     
   
      
       	var sub_category_name=document.getElementById('sub_category_name');
        var sub_category=document.getElementById('sub_category'); 
   	    var subtosutcatagory=document.getElementById('subtosutcatagory');
   		var formFile=document.getElementById('formFile');

      
    
   
    
   oneradio.onclick = function() {
   	
   	showt.innerHTML="Liter";  	
   	placehol.placeholder="Liter";
   	oneradio.required = true;
   	tworadio.checked = false;
   	threeradio.checked = false;
   	radiosss.style.color="black";
   		
   };  
     
     
     
   inlineCheckbox1.onclick = function() {
   	
  if(inlineCheckbox1.checked  == true){
  	 esxpire_date.disabled=true;
  }else{
  	 esxpire_date.disabled=false;
  }
   		
   } 
   
   
   
    tworadio.onclick = function() {
    	
   	 showt.innerHTML="KG";  
   	 placehol.placeholder="KG";  
   	  oneradio.checked = false;
   	threeradio.checked = false;
   	radiosss.style.color="black";
   	
   }
   
   
   	  threeradio.onclick = function() {
    	
   	 showt.innerHTML="Price"; 	
   	  placehol.placeholder="Price"; 
   	 tworadio.checked = false;
   	oneradio.checked = false;
   	 radiosss.style.color="black";
   	   	
   };
   	
   	
   	 function preview() {
                frame.src = URL.createObjectURL(event.target.files[0]);
              //  console.log('hello');
            } 
              
          
        
          
              
       function productADAFunction(){
      
       	
      if(product_barcode.value == ""){
      	errrrr("Bar Code Empty");  	
      }else if(productname.value == ""){
      	errrrr("Product Name Empty");  
      }else if(showt.innerText==="@"){
      	radiosss.style.color="red";
      	 errrrr("Weight Empty");  
      }else if(Weight.value==""){
      	errrrr("Liter|KG|Pices Empty");
      }else if(productunity.value==""){
      	errrrr("Product Unity Empty");
      }else if(PurchesPrice.value==""){
      	errrrr("Purches Price Empty");
      }else if(Selesprice.value==""){
      	errrrr("Sales Price Empty");
      }else if(productdiscout.value==""){
      	errrrr("Product Discout Empty");
      }else if(esxpire_date.value==""){
      	errrrr("Expire Date Empty");
      }else if(sub_category_name.selectedIndex=="0"){
      	errrrr("Choose Catagory Empty");
      }else if( sub_category.selectedIndex=="0"){
      	errrrr("Choose Sub-Catagory Empty");
      }else if( formFile.value==""){
      	errrrr("Not Image load");
      }else{
      	
      	
      	
      }
      	
      
      
      
      
      
       }       
  function errrrr(varr){
		    swal({
		 	      title: ""+varr+"",
		  	     text: "Chack the field ?",
		 	      icon: "error",
		       });
		 }     
                 
   </script>







</div>	
 </div>

</div>
	<style>
	
		.headertable{	
			text-align: center;
			height: 50px;
			background-color: #ffffffff;
		}
		
	</style>
<div class="col-4 h-750">

</br>
</br>

<div class="active_full">
<div class="searchbar">
<div class="input-group rounded">
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon"/>
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
      <th scope="col">---</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>hhhh</td>
      <td></td>
      <td> <span style="color: green; font-weight: bold;"> fffff</td> 
    </tr>
  </tbody>  
</table>
</div>	

<div class="d-flex justify-content-center p-1"> </div>	
</div>
</div>

<div class="row">
<div class="col-4 h-500">
 <span style="text-align: center; color: black;"> Recent catagory uploaded</span>
<div class="active_full">

<div class="searchbar">
<div class="input-group rounded">
  <input type="search" class="form-control rounded" placeholder="Catagory add" id="catagory" aria-label="Search" aria-describedby="search-addon"/>
  <button class="input-group-text bg-primary"  id="cbtn">
   Add
  </button>
  
  <div id="ffff">
  	

  	
  </div>
  
 
</div>
</div>


<div class="headto card" id="showData">





</div>	
</div>
		<script>
		
			   var cat=document.getElementById('catagory');
			var catbtn=document.getElementById('cbtn');
			catbtn.addEventListener("click", chack);  		
				show();
			
	function chack(){
     	 	
  			if ( cat.value == "")
  			{
   				  console.log("gfhjjh");
   				  errr();
  			}
  			else{
  				inputfunction();
  				}
            }
     		
	function inputfunction(){    	
           var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
       	    $.ajax({
                    url: 'catagoryloaddata',
                    type: 'POST',
                    data: {_token: CSRF_TOKEN, catagory_name:cat.value},
                    dataType: 'JSON',
                    success: function (data) { 
                      //  $(".writeinfo").append(data.catagory_name); 
                        show();
                        suss();   
                    }
                });   	
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
       
		
		function show(){
			    $.ajax({
                type: 'GET',
                url: 'catagoryshowdata',
                success: function (response) {
                const myBooks = JSON.parse(response);     
        
			    let col = [];
			    for (let i = 0; i < myBooks.length; i++) {
			      for (let key in myBooks[i]) {
			        if (col.indexOf(key) === -1) {
			          col.push(key);
			        }
			      }
			    }


			    // Create a table.
			    const table = document.createElement("table"); 
			     table.classList.add("table"); 
			     table.classList.add("table-hover");
			     
			    // Create table header row using the extracted headers above.
			    let tr = table.insertRow(-1);                   // table row.

			    for (let i = 0; i < col.length; i++) {
			      let th = document.createElement("th");      // table header.
			      th.innerHTML = col[i];
			      tr.appendChild(th);
			    }

			    // add json data to the table as rows.
			    for (let i = 0; i < myBooks.length; i++) {

			      tr = table.insertRow(-1);

			      for (let j = 0; j < col.length; j++) {
			        let tabCell = tr.insertCell(-1);   
			        tabCell.innerHTML = myBooks[i] [col[j]];
			      }
			    }

			    // Now, add the newly created table with json data, to a container.
			    const divShowData = document.getElementById('showData');
			    divShowData.innerHTML = "";
			    divShowData.appendChild(table);
			    //  response.forEach(element => {$('#named').append(`${element['catagory_name']}`); });
			                }                
			            });
		            }
		
		</script>
		



  	
	
	</div>
<div class="col-4 h-500">
	
<label for="exampleInputName"> Product Catagory </label>  
<div class="active_full">
<div class="searchbar">
<div class="input-group rounded">
 

<select class="form-control" id="catd">
    <option value="0" disabled selected>Choose...</option>
    @foreach($data as $categories)
    <option value="{{$categories->id}}">{{$categories->catagory_name}}</option>
    @endforeach
</select>



</div>
</div>

 



 
<div class="headto card">

<div class="input-group rounded">
 <button class="btn btn-primary" onclick="add_row()">ADD</button>
</div>


<form action="{{ route('sub_loader_catagory')}}" method="post">
 <?php echo csrf_field(); ?>
  <table id="employee_table"  class="table table-hover">
   <tr id="row1">
   
   
   </tr>
  </table>
  
  
<div class="input-group rounded">
 <button class="btn btn-primary" name="submit_row"  id="sunmetbtn">SUBMIT</button>
</div>
  
</form>
</div>

<script type="text/javascript">


var dd=document.getElementById('catd');
 clicks = 0;
$("#sunmetbtn").hide();



function add_row()
{

	//dd.options[i].text
var i = dd.selectedIndex;

if(i>0){	
			
 $("#sunmetbtn").show(); 

 dd.disabled=true;
 $rowno=$("#employee_table tr").length;
 $rowno=$rowno+1;

 if($rowno<=7){
 $("#employee_table tr:last").after("<tr id='row"+$rowno+"'><td><input type='text' name='catagory_id[]' class='form-control rounded' placeholder='<?php echo "hello" ?>' value="+dd.value+" readonly></td><td><input type='text' name='catagory_name[]' class='form-control rounded' placeholder='Sub-catagory'></td><td ><span style='color: red; font-weight: bold;'> <i class='bx bxs-x-square bx-sm' onclick=delete_row('row"+$rowno+"')></td></tr>");

}
else{
	
}
}
else
{
	errr();
}
	
}


function delete_row(rowno)
{
 $('#'+rowno).remove();
}



function errr(){
		    swal({
		 	      title: "Empty Selectd?",
		  	     text: "Chack tha selectd field ?",
		 	      icon: "error",
		        });
}

function full(){
		    swal({
		 	      title: "Full Add Items?",
		  	       text: "Not Alow add ?",
		 	      icon: "info",
		        });
}


</script



</div>	
</div>
		
</div>
<div class="col-4 h-500">
	<label for="exampleInputName"> Product Catagory </label>   

<select class="form-control" id="subcatload">
    <option selected>Choose...</option>
    @foreach($data as $categories)
    <option value="{{$categories->id}}">{{$categories->catagory_name}}</option>
    @endforeach
</select>

<label for="exampleInputName"> Sub Catagory </label>   
 <select class="form-control formselect required" placeholder="Select Sub Category" id="sub_category_two" name="selets">
</select>



<div class="headto card">
<div class="input-group rounded">
 <button class="btn btn-primary" onclick="add_sub()">ADD</button>
</div>


<form action="{{ route('sub_to_sub_loader_catagory')}}" method="post">
 <?php echo csrf_field(); ?>
  <table id="employee_table_sub"  class="table table-hover">
   <tr id="row1">
   
   
   </tr>
  </table>
  
  
<div class="input-group rounded">
 <button class="btn btn-primary" name="submit_row"  id="sunmetbtnsub">SUBMIT</button>
</div>
  
</form>
</div>
	
	
	
	
	
	
<div class="form-group p-5">

    <script>
    
    var catgor=document.getElementById('subcatload');
    var subcatgor=document.getElementById('sub_category_two');
    
    
                $(document).ready(function () {
                $('#subcatload').on('change', function () {
                let id = $(this).val();
                $('#sub_category_two').empty();
                $('#sub_category_two').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                type: 'GET',
                url: 'GetSubCatAgainstMain/' + id,
                success: function (response) {
                var response = JSON.parse(response);
               // console.log(response);   
                $('#sub_category_two').empty();
                $('#sub_category_two').append(`<option value="0" disabled selected>Select Sub Category*</option>`);
                response.forEach(element => {
                    $('#sub_category_two').append(`<option value="${element['id']}">${element['catagory_name']}</option>`);
                    });
                }
            });
        });
    });
    
    
    
    
    
clicks = 0;
$("#sunmetbtnsub").hide();



function add_sub()
{

	//dd.options[i].text
var i = catgor.selectedIndex;
var ii = subcatgor.selectedIndex;

if(i>0 && ii>0){	
			
 $("#sunmetbtnsub").show(); 

  catgor.disabled=true;
  subcatgor.disabled=true;
 $rownosub=$("#employee_table_sub tr").length;
 $rownosub=$rownosub+1;

 if($rownosub<=7){
 $("#employee_table_sub tr:last").after("<tr id='row"+$rownosub+"'><td><input type='hidden' name='catagory_id[]' class='form-control rounded' placeholder='<?php echo "hello" ?>' value="+catgor.value+" readonly></td><tr id='row"+$rownosub+"'><td><input type='text' name='sub_catagory_id[]' class='form-control rounded' placeholder='<?php echo "hello" ?>' value="+subcatgor.value+" readonly></td><td><input type='text' name='sub_catagory_name[]' class='form-control rounded' placeholder='Sub-catagory'></td><td ><span style='color: red; font-weight: bold;'> <i class='bx bxs-x-square bx-sm' onclick=delete_row_sub('row"+$rownosub+"')></td></tr>");

}
else{
	
}
}
else
{
	errr();
}
	
}


function delete_row_sub(rowno)
{
 $('#'+rowno).remove();
}



function errr(){
		    swal({
		 	      title: "Empty Selectd?",
		  	     text: "Chack tha selectd field ?",
		 	      icon: "error",
		        });
}

function full(){
		    swal({
		 	      title: "Full Add Items?",
		  	       text: "Not Alow add ?",
		 	      icon: "info",
		        });
}

    
    
    
    
</script>
    
    
</div>
</div>



  
@endsection
