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
	
	
	
	
	
	
	<style>

.box {
  height: 100px;
  width: 100px;
  border-radius: 80%;
  text-align: center;
  border: 3px solid;
  border-color: orange transparent;
  animation: spin 1s infinite ease-out;
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
  
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
  opacity: .80;
  filter: alpha(opacity=80);
}
.white_content {
  display: none;
  position: absolute;
  top: 40%;
  left:45%;
  width: auto;
  height: auto;
  padding: 16px;
 opacity: .80;
 background-color:hsla(0,0%,0%,0.0);
  opacity: .80;
  z-index: 1002;

}
	
</style>
    
    
    

  <div id="light" class="white_content">
  <div class="box"></div>
  </div>
  <div id="fade" class="black_overlay"></div> 
    

	

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


 <form id="uploadFormbar">
 <?php echo csrf_field(); ?>
  <div class="form-group">
  <label for="exampleInputName">Barcode</label>
<input type="text" class="form-control" id="product_barcode" name="product_barcode" aria-describedby="emailHelp" placeholder="Barcode" required>
  </div> 
 </form>
  
<div class="form-group">
 <div class="addvist animate-charctertwo">
<h4 id="imgSpinner1">Product per unite load</h4>





</div>
</div> 
    



    
    
    
    
    
    
    
<form id="uploadFormstock">
  	 <?php echo csrf_field(); ?>
   
<div class="form-row">
<div class="form-group col-md-6 p-1"> 
  <div class="form-group">
   <label for="exampleInputName">Product Discout %</label>
    <input type="number" value="0"  class="form-control" id="productdiscout"  name="Descount_rate" placeholder="Product Discout"  required>
 </div> 
 </div>
    <div class="form-group col-md-6 p-1">
   <label for="exampleInputName">Purchase Units</label>
    <input type="number"  class="form-control" id="productunity"  name="Product_units" placeholder="Total product"  required>
  <br/>
    </div>
    <div class="form-group col-md-6 p-1">
      <label for="PurchesPrice">Purchase Price</label>
      <input type="number" class="form-control" id="PurchesPrice" name="Purches_Price" placeholder="Price" required>
       <br/> 
    </div>
    <div class="form-group col-md-6 p-1">
      <label for="Selesprice">Seles price</label>
      <input type="number" class="form-control" id="Selesprice" name="Sales_Price" placeholder="Rate" required>
       <br/> 
    </div>
 
  <div class="form-group col-md-6">
   <label for="exampleInputName">Product Expire Date</label>
    <input type="date"  class="form-control" id="expire_date"  name="Expire_date" >
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
  <div class="form-group">
   <label for="exampleInputName">Product Name</label>
    <input type="text" class="form-control" id="productname"  name="Product_Name" placeholder="Product name" readonly >
  </div>
  <br/>
	
<br>
<div class="form-group">
<label for="exampleFormControlTextarea1">Product Image</label>
  <img  class="border" id="frame" src="{{asset('frontend/img/demo.jpg')}}" class="img-fluid" width="150px" height="157px" />
  </div>
<br>

  	<div id="targetLayer"></div>
<br>
  <button type="submit" id="inputdd"  class="btn btn-primary">Submit</button>
<br><br>
  </form>

</div>
   <script>       
  
  
  

   	var productunity=document.getElementById('productunity'); 
   	var PurchesPrice=document.getElementById('PurchesPrice');
   	var Selesprice=document.getElementById('Selesprice');
   	var productdiscout=document.getElementById('productdiscout'); 
   
	


     	var idddd=document.getElementById('product_barcode');
     	var productname=document.getElementById('productname');	
     	var frame=document.getElementById('frame');
     	var ischeckbox1=document.getElementById('inlineCheckbox1');  
     	var esxpire_date=document.getElementById('expire_date');	
     	   var inputdd=document.getElementById('inputdd'); 
     	var Product_ID ,Product_name, Barcode, Product_name, Weight,Image, Catagory, Sub_Catagory, Sub_to_sub_catagory;
     	idddd.focus();


     
     $(document).ready(function (e) {
	$("#uploadFormbar").on('submit',(function(e) {
		e.preventDefault();		
	
		$.ajax({
        type: 'GET',
        url: 'barcode/' + idddd.value,
 
        beforeSend: function() { 	
           hidddenshow();
        },            
      complete: function() {
          hiddden();
       },
        
		success: function(data)
	    {
		   	 
		var obj = JSON.parse(data);

		if(obj.message=="Exit"){
				frame.src = "{{asset('frontend/img/demo.jpg')}}";
				orrning("Not Found Data");
				productname.value="";
				idddd.value="";
		}else{
					
		for(var key in obj){
		Product_name=obj[key].Product_name;
		productname.value=Product_name;
		//productname.disabled=true;
		//Product_ID=obj[key].Product_ID;
		Barcode=obj[key].Barcode;
		Weight=obj[key].Weight;
		Image=obj[key].Image;
		
		console.log(Image);
        frame.src = "{{asset('product')}}/"+Image;
		Catagory=obj[key].Catagory;
		Sub_Catagory=obj[key].Sub_Catagory;
		Sub_to_sub_catagory=obj[key].Sub_to_sub_catagory;
	
		console.log(obj[key].Product_name);
		
		}
	
		}
		
		},
	  	error: function() 
    	{
    		console.log("network problem");
    		testtt();
    	} 	        
        });							
	
	
        }));});   
        
        
        
        
        
        
        
        
        var Product_Name,Avilable_Product,Facility_Product,Total_product,Purches_Price,Sales_Price,Product_Expire_date,Image;
      
    
        
      
     $(document).ready(function (e) {
	$("#uploadFormstock").on('submit',(function(e) {
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
		
	   formData.append("Product_barcode_id", Barcode); 
	   formData.append("catagory_id", Catagory);
       formData.append("Sub_catagory_id",Sub_Catagory); 
       formData.append("Sub_to_sub_catagory", Sub_to_sub_catagory);
       formData.append("Expire_date", unlimitesdate);
       formData.append("Weight", Weight);
       formData.append("Image", Image); 
      // formData.append("Product_Name", Product_name);
	
				
		$.ajax({
        url: "{{route('stockload')}}",
		type: "POST",
		data:  formData,
		contentType: false,
        processData:false,      
		success: function(data)
	    {
		const obj = JSON.parse(data);	
		if(obj.message=="Exit"){
			 orrning("Barcode allready exit");	
			  allclear();
		}else{	
		    successfull("Product Load");
	         allclear();  
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
        }));});   
        
          
        inputdd.onclick = function() {
   	
     if(productunity.value==""){
      	errrrr("Product Units Empty");
      }else if(PurchesPrice.value==""){
      	errrrr("Purchase Price Empty");
      }else if(Selesprice.value==""){
      	errrrr("sales Price Empty");
      }else if(productdiscout.value==""){
      	errrrr("Product Discout Empty");
      }else if(esxpire_date.value=="" && ischeckbox1.checked  == false){
      	errrrr("Expire Date Empty");
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
          
   
        
     ischeckbox1.onclick = function() {
   	
  if(ischeckbox1.checked  == true){
  	 esxpire_date.disabled=true;
  }else{
  	 esxpire_date.disabled=false;
  	// esxpire_date.innerHTML="0000-00-00";
  }
   		
   }  
 
 
 	function hiddden(){
		document.getElementById('light').style.display='none';
		document.getElementById('fade').style.display='none';
	}	
	
	function hidddenshow(){
		document.getElementById('light').style.display='block';
		 document.getElementById('fade').style.display='block';
	}
		
 
  
   
   function allclear(){
     	  productname.value=""; 
     	  productunity.value=""; 
     	  PurchesPrice.value="";
     	  Selesprice.value=""; 
     	  productdiscout.value="0";
     	  idddd.value="";
     	  frame.src = "{{asset('frontend/img/demo.jpg')}}";
          esxpire_date.disabled=false;     
         ischeckbox1.checked = false;
   }
   
 
   	
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
		
		
				      
		function testtt(){
		  swal({
		 	      title: "Data Load Fail!",
		  	     text: "Chack your Network ?",
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
	<div class="col-12 h-250">
	
	<div class="row">
	<div class="col-6 h-300">
		

	</div>
	<div class="col-6 h-300">
		
		
	</div>		
   </div>	
   </div>
  
@endsection