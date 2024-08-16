@extends('layout.master')
@section('content')

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

.headertable{	
	text-align: center;
	height: 50px;
	background-color: #ffffffff;
}
</style>
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


<div class="px-4 col-6 card p-3">
  <span class="mx-auto text-capitalize" style="color: green; font-size: 18px;">You can search with Barcode Scan or Manual</span>
    <form id="uploadFormbar">
     <?php echo csrf_field(); ?>
     <div class="form-group">
       <label for="exampleInputName">Barcode</label>
        <input type="text" class="form-control" id="product_barcode" name="product_barcode" aria-describedby="emailHelp" placeholder="Barcode" onkeypress="return /[0-9a-zA-Z]/i.test(event.key)" required>
     </div> 
    </form>

<div class="form-group">
<div class="form-row">
	<div class="form-group col-md-8 p-2 "> 
		<div class="form-group">
			<div class="addvist animate-charctertwo">
			<span class="h5">Product per unite load</span>
			</div>
		</div> 
	</div>
 

<div class="form-group col-md-4 "> 
  <div class="form-group">
<div class="form-row pricsss">
	<div class="form-group col-md-3 p-1"> 
		<div class="form-group">
		  <input type="checkbox"  id="checkboxpises" class="form-check-input" style="width: 25px; height: 25px;">
		</div> 
	</div>
  <div class="form-group col-md-9 p-1 "> 
    <div class="form-group" style="height: 30px;">
      <input type="hidden" class="form-control" placeholder="pieces" name="pieces" id="pieces"/>
    </div> 
   </div>
</div>
</div> 
</div>

</div>
</div> 
    



    
<form id="uploadFormstock">
  <?php echo csrf_field();?>
   
<div class="form-row">
<div class="form-group col-md-6 p-1"> 
  <div class="form-group">
   <label for="exampleInputName">Product Discout %</label>
    <input type="number" value="0"  class="form-control" id="productdiscout"  name="Descount_rate" placeholder="Product Discout" onkeypress="return /[0-9a-zA-Z]/i.test(event.key)" required>
 </div> 
 </div>
    <div class="form-group col-md-6 p-1">
   <label for="exampleInputName">Purchase Units</label>
    <input type="number"  class="form-control" id="productunity"  name="Product_units" placeholder="Total product" onkeypress="return /[0-9a-zA-Z]/i.test(event.key)" required>
  <br/>
    </div>
    <div class="form-group col-md-6 p-1">
      <label for="PurchesPrice">Purchase Price</label>
      <input type="number" class="form-control" id="PurchesPrice" name="Purches_Price" placeholder="Price" onkeypress="return /[0-9a-zA-Z]/i.test(event.key)"  required>
       <br/> 
    </div>
    <div class="form-group col-md-6 p-1">
      <label for="Selesprice">Seles price</label>
       <input type="number" class="form-control" id="Selesprice" name="Sales_Price" placeholder="Rate" onkeypress="return /[0-9a-zA-Z]/i.test(event.key)" required>
       <br/> 
    </div>
 
  <div class="form-group col-md-6">
    <label for="exampleInputName">Product Expire Date</label>
     <input type="date"  class="form-control" id="expire_date"  name="Expire_date" ><br/>
    </div>

    <div class="form-group col-md-6">
     <div class="addd">
    	<label for="PurchesPrice" class="animate-charcter" style="color: red;">Unlimited date</label>
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="width: 25px; height: 25px">
     </div>  
     <br/> 
    </div>
 </div>
</div>



<div class="col-6 h-600 card">
<div id="testt">
<div class="form-group px-5 pt-1">
  <div class="form-group">
   <label style="color: blue; font-size: 27px; height: 27px;" id="available"> </label>
  </div>

 
   <div class="form-group pt-2">
   <label for="exampleInputName">Product Name</label>
    <input type="text" class="form-control" id="productname"  name="Product_name" placeholder="Product name" readonly >
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


</div>	
</div>

</div>

<div class="col-4 h-750">
</br>
</br>


<div class="card">
<div class="active_full" id="listss">
		<div class="searchbar ">
			<div class="p-1 text-center ">
  		<h6 class="">Today is Stock loaded</h6>
 		</div>
	</div>
	</div>		  

<div class="headto " id="ddd">
     <div id="showss">
<div class="container ">
   <div class="panel panel-default">
    <div class="panel-body">
     <div class="table-responsive">


<style>
.my-custom-scrollbar {
position: relative;
height: 520px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}	
      </style>
      
      <div class="table-wrapper-scroll-y my-custom-scrollbar">
      <table class="table table-striped table-bordered" id="section1" >
       <thead>
        <tr>
         
         <th>Product Name</th>
         <th>Unity</th>
		 <th>Unity</th>
		 <th><span><input type="checkbox" id="allselected"></span></th>
        </tr>
       </thead>
       <tbody class="hello">

       </tbody>
      </table>
     </div>
    </div>    
   </div>
  </div> 
  </div>

      </div>
        <div class="text-sm-end p-1 ">
			<button  type="button"  id="datasent" class="btn btn-primary text-sm-end" onclick="datasenteds()">Sent</button>
		</div>	
   </div>
 </div>
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
    var checkboxpises=document.getElementById('checkboxpises'); 
    var pieces=document.getElementById('pieces'); 
    var available=document.getElementById('available');   
    var esxpire_date=document.getElementById('expire_date');	
    var inputdd=document.getElementById('inputdd'); 


	var allselect=document.getElementById("allselected");
	
	var datasent=document.getElementById("datasent");


    var Product_ID ,Product_name, Barcode, Product_name, Weights,Image, Catagory, Sub_Catagory, Sub_to_sub_catagory;
    var total_product,prises,exprie_date,suppliername;               
    var Product_Name,Avilable_Product,Facility_Product,Total_product,Purches_Price,Sales_Price,Product_Expire_date,Image;   
    let Product_sent_of_admin;
    let upload_product_count=0;
    let count=0;

     idddd.focus();



fetch_customer_data();
//button_chack_for_sent();
datasent.disabled=true;





function fetch_customer_data()
 {
  $.ajax({
  method:'GET',
   url:"{{ route('stock_show_ronter') }}",
   dataType:'json',
   success:function(data)
   {
    $('.hello').html(data.table_data);
  //  $('#total_records').text(data.total_data);
   //   console.log(data.total_data);
      button_chack_for_sent();
	  if(parseInt(data.total_data)==0){
		allselect.disabled=true;
		datasent.disabled=true;
	  }else{
		allselect.disabled=false;
		datasent.disabled=true;
	  }
   }
  })
 }




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
			dailogmess("Not Found Data","Chack this Barcode ?","info");
			productname.value="";
			idddd.value="";
				//idddd.focus();
		}else{
					
		for(var key in obj){
		Weights=obj[key].Weight;
		Product_sent_of_admin=obj[key].Product_sent_of_admin;
		console.log(Product_sent_of_admin);
		if(parseInt(Weights)==0){
		  Product_name=obj[key].Product_name;
		}else{
		  Product_name=obj[key].Product_name+obj[key].Weight;
		}
		productname.value=Product_name;
		Barcode=obj[key].Barcode;
		Image=obj[key].Image;
        frame.src = "{{asset('product')}}/"+Image;
		Catagory=obj[key].Catagory;
		Sub_Catagory=obj[key].Sub_Catagory;
		Sub_to_sub_catagory=obj[key].Sub_to_sub_catagory;
	    total_product=obj[key].Total_product; 
	    prises=obj[key].pieces; 
	    exprie_date=obj[key].Expire_date;

		if(obj[key].Sales_Price==null||obj[key].Purches_Price==null)
		{
			console.log("just undefined remove ");
		}else{
			Selesprice.value=obj[key].Sales_Price; 
            PurchesPrice.value=obj[key].Purches_Price;
		}
      
		}
		
		
		

	    if(total_product==null){
		//console.log(total_product);
		available.innerHTML="";
	    }else
		{	
	    	available.innerHTML="Product is Available: "+total_product;
	    	esxpire_date.value=exprie_date;		
			if(total_product==0){
	    		esxpire_date.disabled=false;
	    	}else{
	    	    esxpire_date.disabled=true;
	    	    $(".addd").hide();
	    	}	

	    	if(prises=="0"){
	    		
	    		//esxpire_date.disabled=false;	
	    	}else{
	    		pieces.type="text";
	    		pieces.value=prises;
	    		checkboxpises.checked=true;
	    	}
	    }
	
	    
		}
		
		},
	  	error: function() 
    	{
    		console.log("network problem");
			dailogmess("Data Load Fail!","Chack your Network?","error");
    	} 	        
        });							
	
	
        }));});   
        
        
        

      
    
    $(document).ready(function (e) {
	$("#uploadFormstock").on('submit',(function(e) {
		e.preventDefault();			
	  //----------------------------------
	  const formData = new FormData(this);
		//console.log("test "+unlimitesdate);
	if(!productname.value==" "){
		
	if(!idddd.value==" "){
	
	if(parseInt(PurchesPrice.value)<parseInt(Selesprice.value))
	{

	//	errrrr("done to work");
	 total_prire=(PurchesPrice.value*productunity.value);
	if(unlimitesdate==""){	
		console.log("Unlimited inviled");
		}else{	
		
	   formData.append("Barcode", idddd.value); 
	   formData.append("Catagory", Catagory);
       formData.append("Sub_Catagory",Sub_Catagory); 
       formData.append("Sub_to_sub_catagory", Sub_to_sub_catagory);
       formData.append("Expire_date", unlimitesdate);
       formData.append("Image", Image); 
       formData.append("Weight", Weights);
      
      
      if(Weights=="0"){
       	 formData.append("Weight", "empty");
         console.log("weight of web");
       }else{
          formData.append("Weight", Weights);
		  console.log("weight of true"+Weights);
       }
    
    
	   if(pieces.value==""){
       	 formData.append("pieces", "empty");
       }else{
         formData.append("pieces", pieces.value);
       }
	

        //  console.log(formData.get("Weight"));
		
		if(parseInt(Product_sent_of_admin)===0){
			dailogmess("Not sent product","Product_sent_of_admin","info");
		}else{

			//dailogmess(" Product_sent_of_admin 1","Product_sent_of_admin","success");
	

		$.ajax({
        url: "{{route('stockload')}}",
		type: "POST",
		data:  formData,
		contentType: false,
        processData:false,      
		success: function(data)
	    {
	    	console.log(data);
		const obj = JSON.parse(data);
			
		if(obj.message=="Exit"){
			dailogmess("Barcode allready exit","Chack this Barcode ?","info");	
			  allclear();
		}else{	
		    dailogmess("Product Load","Data Uploaded Success?","success");
	         allclear();  
			 fetch_customer_data();
		}
		
		},
	  	error: function() 
    	{
    	} 	        
        });		
		

	    }

		}



		 }

		 else
		 { 
		 dailogmess("Purchase price more than sales price","Chack the field ?","info");
		 }
		 
		 
		 //this chack empty ofr barcode
		 }else{
		 	
		console.log("empty ");
		dailogmess("Please Input Barcode with Scanner","Chack the field ?","info");
		idddd.focus();
	   }
	
	}
	else{
		dailogmess("Can't found product name ","Chack the field ?","info");
		idddd.focus();
	}
		 
		 
		 
        }));});   
        
          
        inputdd.onclick = function() {
   	
     if(productunity.value==""){
		dailogmess("Product Units Empty","Chack the field ?","info");
      }else if(PurchesPrice.value==""){
		dailogmess("Purchase Price Empty","Chack the field ?","info");
      }else if(Selesprice.value==""){
		dailogmess("sales Price Empty","Chack the field ?","info");
      }else if(productdiscout.value==""){
		dailogmess("Product Discout Empty","Chack the field ?","info");
      }else if(esxpire_date.value=="" && ischeckbox1.checked  == false){
      	unlimitesdate="";
      	dailogmess("Expire Date Empty","Chack the field ?","info");
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
			 // console.log(unlimitesdate); // 👉️ true
			}else{
			//console.log("this not right"); // 👉️ true
			dailogmess("Expire date Inviled","Chack the field ?","info");
			}
             //  console.log(esxpire_date.value);
						
			}else{
				
			const date = new Date();
			let day = date.getDate();
			let month = date.getMonth() + 1;
			let year = date.getFullYear()+2;
			let currentDate = `${year}-${month}-${day}`;
			
			console.log(currentDate);
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
   
   
   
   checkboxpises.onclick = function() {
   	
  if(checkboxpises.checked  == true){
  	 pieces.type="text";
  	
  }else{
  	 pieces.type="hidden";
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
          available.innerHTML="";
          pieces.type="hidden";
          checkboxpises.checked=false;
          esxpire_date.value="";
   }
   
 
   	
   	 function preview() {
                frame.src = URL.createObjectURL(event.target.files[0]);
              //  console.log('hello');
            } 
              
     
  function dailogmess(mess,messtwo,messtheree){
		    swal({
		 	      title: ""+mess+"",
		  	     text: ""+messtwo+"",
		 	      icon: ""+messtheree+"",
		       });
		 }     
		  
		 
//-------------this all funtion is checking all option and sent to admin data

function button_chack_for_sent(){
 var nodeListss = document.querySelectorAll("#myChecka");
    for (let i = 0; i < nodeListss.length; i++) {
		nodeListss[i].addEventListener("click",function(){
			if( nodeListss[i].checked == true){
			datasent.disabled=false;
		//	console.log("dfhdsjhfdfsh");
		    }else{
			datasent.disabled=true;
			}
		});
    }
	
}


allselect.addEventListener("click",allsetect_function);      


function allsetect_function(){
 var nodeList = document.querySelectorAll("#myChecka");
  if(count===0){
    count=1;
	datasent.disabled=false;
    for (let i = 0; i < nodeList.length; i++) {
    nodeList[i].checked = true;
    }
  }else{
    count=0;
	datasent.disabled=true;
    for (let i = 0; i < nodeList.length; i++) {
    nodeList[i].checked = false;}
  }

}
	



function datatranfer(barcodes) {
	
 $.ajax({
     type: 'GET', //THIS NEEDS TO BE GET
     url: '/chacking/'+barcodes,
     success: function (data) {
	//var dategert=JSON.parse(data);
	console.log(data);
	
     },
     error: function() { 
        // console.log(barcodes);
      }
     });
	      
   }
	

   
 function dataloadedfun(ff){
    swal({
  title: "Suppiler Total Amount is "+ff+" Tk",
  text: "Will be write supplier name or company name",
  content: "input",
  buttons: true,
  dangerMode: true,
  closeOnClickOutside: false,
})
.then((willDelete) => {
  if (willDelete!= "" && willDelete != null) {
	
//-------------------------
suppliername=willDelete;
	swal({
  title: "Are you sure?",
  text: "Will be sent to Admin",
  buttons: true,
  dangerMode: true,
  closeOnClickOutside: false,
})
.then((willDeletes) => {
  if (willDeletes) {

    finallydatatrenfer(suppliername);
    fetch_customer_data();
	swal("Your data sent ", {
      icon: "success",
    }).then(function(){});


//-------------------------

  } else {
    swal("Close your supplier page",{
    	closeOnClickOutside: false,
    });
  }
});

  } else {
    swal("Close your supplier page",{
    	closeOnClickOutside: false,
    });
  }
});

 }  
 
function finallydatatrenfer(names){
	var nodeList = document.querySelectorAll("#myChecka");
    for (let i = 0; i < nodeList.length; i++) {
		if( nodeList[i].checked == true){
	    const datastwo = nodeList[i].value.split("-");
	   datatranfer(datastwo[0]);
		}
    }

}

function datasenteds(){
 var nodeList = document.querySelectorAll("#myChecka");
    for (let i = 0; i < nodeList.length; i++) {
		if( nodeList[i].checked == true){
	    const datas = nodeList[i].value.split("-");
     	let Amountss=datas[1];
	    upload_product_count+=parseInt(Amountss);
		}
    }
	dataloadedfun(upload_product_count);
}


//-------------this all funtion is checking all option and sent to admin data


   </script>


  
@endsection