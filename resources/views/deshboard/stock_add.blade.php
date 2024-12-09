@extends('layout.master')
@section('content')

<div class="row">
<div class="col-12 h-80">
				
<div class="top_breadc">
	<div class="top_breadcone"><i class='bx bxs-dashboard bx-lg card' ></i></div>
	  <div class="top_breadctwo">
	    <span class="breade_color">Stock page</span>
		<p class="breaderr">This is Stock page add information hole store.</p>   
      </div>
</div>	
	</div>
   </div>
    <div class="row">
	<div class="col-8 h-500">

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


 <form id="uploadForm"  method="post">
<?php echo csrf_field(); ?>


  <div class="form-group">
  <label for="exampleInputName">Barcode</label>
<input type="text" class="form-control" id="product_barcode" name="product_barcode" aria-describedby="emailHelp" placeholder="Barcode" required>
  </div> <br/>
    <?php echo csrf_field(); ?>
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
   <label for="exampleInputName">Purchase Units</label>
    <input type="number"  class="form-control" id="productunity"  name="Product_units" placeholder="Total product"  onkeypress="return /[0-9a-zA-Z]/i.test(event.key)" required>
  <br/>
    </div>
    <div class="form-group col-md-6 p-1">
      <label for="PurchesPrice">Purchase Price</label>
      <input type="number" class="form-control" id="PurchesPrice" name="Purchase_rate" placeholder="Price" onkeypress="return /[0-9a-zA-Z]/i.test(event.key)" required>
       <br/> 
    </div>
    <div class="form-group col-md-6 p-1">
      <label for="Selesprice">Seles price</label>
      <input type="number" class="form-control" id="Selesprice" name="Sales_rate" placeholder="Rate" onkeypress="return /[0-9a-zA-Z]/i.test(event.key)" required>
       <br/> 
    </div>
 

   <div class="form-group">
   <label for="exampleInputName">Product Discout %</label>
    <input type="number" value="0"  class="form-control" id="productdiscout"  name="Descount_rate" placeholder="Product Discout" onkeypress="return /[0-9a-zA-Z]/i.test(event.key)"  required>
 </div>
 <br>
 
 
 
  <div class="form-group col-md-6">
   <label for="exampleInputName">Product Expire Date</label>
    <input type="date"  class="form-control" id="expire_date"  name="Expire_date" placeholder="Total product">
  <br/>
    </div>
    
    <style>

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


<div id="testt">
	

<div class="form-group p-5">
<div id="adddome">
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



</div>

	
<br>
<div class="form-group">
<label for="exampleFormControlTextarea1">Product Image</label>
  <img  class="border" id="frame" src="{{asset('frontend/img/demo.jpg')}}" class="img-fluid" width="150px" height="157px" />
  </div>
<br>


<div class="form-group">
    <label for="exampleFormControlTextarea1">Image</label>
    <input class="form-control" type="file" id="Productimage"  onchange="preview()" name="Productimage" >
  
  </div>
  	<div id="targetLayer"></div>
<br>
  <button type="submit" id="inputdd" class="btn btn-primary">Submit</button>
<br><br>
</form>



</div>


   <script>       
   
    let total_prire;
    let unlimitesdate;
    var weight_fasality;
    var product_barcode=document.getElementById('product_barcode');
   	var productname=document.getElementById('productname'); 
   	var Weightchack=document.getElementById('Weightchack');
   //	var Weight=document.getElementById('Weight');
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
    var btn=document.getElementById('btnss'); 
    
     var inputdd=document.getElementById('inputdd'); 
     var formFile=document.getElementById('Productimage'); 
   
     
     var dd=document.getElementById('uploadForm'); 
     var seleteclear=document.getElementById('adddome');
 
 
 

   
     $(document).ready(function (e) {
	$("#uploadForm").on('submit',(function(e) {
		e.preventDefault();		
			
		//----------------------------------

	  const formData = new FormData(this);
		console.log("test "+unlimitesdate);
	
	if(PurchesPrice.value<Selesprice.value)
	{
		total_prire=(PurchesPrice.value*productunity.value);
	if(unlimitesdate==null){	
		console.log("Unlimited inviled");
		}else{	
		
	     formData.append("catagory_id", sub_category_name.value);
       formData.append("Sub_catagory_id", sub_category.value); 
       formData.append("Sub_to_sub_catagory", subtosutcatagory.value);
       formData.append("Total_purchase_Price", total_prire); 
       formData.append("Expire_date", unlimitesdate);
       formData.append("Weight", placehol.value+" "+weight_fasality);
	
				
		$.ajax({
    url: "{{route('loader')}}",
		type: "POST",
		data:  formData,
		contentType: false,
    processData:false,      
		success: function(data)
	    {
	    	    	
		//$("#targetLayer").html(data);
		
		const obj = JSON.parse(data);	
		if(obj.message=="Exit"){
			console.log(obj.message);
			
			 orrning("Barcode allready exit");
			 allclear();
			
		}else{	
		    successfull("Product Load");
	
		   
		}
		
		},
	  	error: function() 
    	{
    	} 	        
        });							
		}
 
		 }
		 else
		 { 
		 errrrr("Purchase price more than sales price");
		 }
	
	  
		
		
		//----------------------------------
		
	
        }));});   
        
        
  
         
   inputdd.onclick = function() {
   	
     if(product_barcode.value == ""){
      	errrrr("Bar Code Empty");  	
      }else if(productname.value == ""){
      	errrrr("Product Name Empty");  
      }else if(showt.innerText==="@"){
      	radiosss.style.color="red";
      	 errrrr("Choice Weight Empty");  
      }else if(placehol.value==""){
      	errrrr("Liter|KG|Pices Empty");
      }else if(productunity.value==""){
      	errrrr("Product Units Empty");
      }else if(PurchesPrice.value==""){
      	errrrr("Purchase Price Empty");
      }else if(Selesprice.value==""){
      	errrrr("sales Price Empty");
      }else if(productdiscout.value==""){
      	errrrr("Product Discout Empty");
      }else if(esxpire_date.value=="" && ischeckbox1.checked  == false){
      	errrrr("Expire Date Empty");
      }else if(sub_category_name.selectedIndex=="0"){
      	errrrr("Choose Catagory Empty");
      }else if( sub_category.selectedIndex=="0"){
      	errrrr("Choose Sub-Catagory Empty");
      }else if( formFile.value==""){
      	errrrr("Not Image load");
      }else{ 
      
			if(ischeckbox1.checked  == false){
				
			const date = new Date();
			let day = date.getDate();
			let month = date.getMonth() + 1;
			let year = date.getFullYear();

			let currentDate = `${year}-${month}-${day}`;
			const cont_currentdata = new Date(currentDate);
			const inputs = new Date(esxpire_date.value);

			if(cont_currentdata.getTime()<inputs.getTime()){
	          unlimitesdate=esxpire_date.value;
			console.log("right"); // 👉️ true
			}else{
			console.log("this not right"); // 👉️ true
			errrrr("Expire date Inviled")
			}
      console.log(esxpire_date.value);
						
			}else{
				
			const date = new Date();
			let day = date.getDate();
			let month = date.getMonth() + 1;
			let year = date.getFullYear()+2;
			let currentDate = `${year}-${month}-${day}`;
			
			//console.log(currentDate);
			unlimitesdate=currentDate;
			
			
			}
      
        }	
   };  
       
       
       
            
   oneradio.onclick = function() {
   	
   	showt.innerHTML="Liter";  	
   	placehol.placeholder="Liter";
   	oneradio.required = true;
   	tworadio.checked = false;
   	threeradio.checked = false;
   	radiosss.style.color="black";
   	weight_fasality="Liter";
   };  
     
     
     
   ischeckbox1.onclick = function() {
   	
  if(ischeckbox1.checked  == true){
  	 esxpire_date.disabled=true;
  }else{
  	 esxpire_date.disabled=false;
  	// esxpire_date.innerHTML="0000-00-00";
  }
   		
   } 
   
   
   
   function allclear(){
     	  productname.value=""; 
     	  productunity.value=""; 
     	  PurchesPrice.value="";
     	  Selesprice.value=""; 
     	  productdiscout.value="0";
     	  placehol.value="";
     	  formFile.value="";
          frame.src = "{{asset('frontend/img/demo.jpg')}}";
          esxpire_date.disabled=false;     
          seleteclear.innerHTML=seleteclear.innerHTML;
          sub_category_name=value=0;
          productname.value=""; 
     	  productunity.value=""; 
     	  PurchesPrice.value="";
     	  Selesprice.value=""; 
     	  productdiscout.value="0";
     	  placehol.value="";
     	  product_barcode.value="";
   		oneradio.required = false;
   	     tworadio.checked = false;
       threeradio.checked = false; 
       ischeckbox1.checked = false;
   }
   
   
   
   
   
   
   
   
   
    tworadio.onclick = function() {
    	
   	 showt.innerHTML="KG";  
   	 placehol.placeholder="KG";  
   	  oneradio.checked = false;
   	threeradio.checked = false;
   	radiosss.style.color="black";
   	weight_fasality="KG";
   	
   }
   
   
   	 threeradio.onclick = function() {
    	
   	 showt.innerHTML="Price"; 	
   	  placehol.placeholder="Price"; 
   	 tworadio.checked = false;
   	oneradio.checked = false;
   	 radiosss.style.color="black";
   	 weight_fasality="Price";
   };
   	
   	
   	 function preview() {
                frame.src = URL.createObjectURL(event.target.files[0]);
              //  console.log('hello');
            } 
              
     
  function errrrr(varr){
		    swal({
		 	      title: ""+varr+"",
		  	     text: "Chack the field ?",
		 	      icon: "error",
		       });
		 }     
		  
		  
	 function orrning(varr){
		    swal({
		 	      title: ""+varr+"",
		  	     text: "Chack this Barcode ?",
		 	      icon: "info",
		       });
		 }     
		 
		 
  function successfull(gd){
		    swal({
		 	      title: ""+gd+"",
		  	     text: "Chack the field ?",
		 	      icon: "success",
		       });
		 }   
		 
		 
		      
		function suss(){
			swal({
		         title: "Successfull!",
		         text: "You clicked the button!",
		         icon: "success",
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
	<div class="col-12 h-250">
	
	<div class="row">
	<div class="col-6 h-300">
		

	</div>
	<div class="col-6 h-300">
		
		
	</div>		
   </div>	
   </div>
  
@endsection
