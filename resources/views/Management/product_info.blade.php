@extends('layout.master')
@section('content')

		<div class="row">
			<div class="col-12 h-80">				
				<div class="top_breadc">
					<div class="top_breadcone">
					  <i class='bx bxs-dashboard bx-lg card' ></i>
					</div>
					<div class="top_breadctwo">
						<span class="breade_color">Product page</span>
						<p class="breaderr">This is Product page add information admin page.</p>   
					</div>
				</div>	
			</div>
		 </div>



		<div class="col-12 h-700">
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
		</div>
		<style>

		.breade_color {
			font-size: 25px;
			color: #484F56;
		}

		.breade {
			font-size: 20px;
			color: #484F56;
		}

		.breaderr {
			font-size: 13px;
			color: #484F56;
		}

		.top_breadc {
			height: 80px;
			width: 100%;
			background: #FFFFFF;
			/* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
		}

		.top_breadcone {
			height: 50px;
			width: 50px;
			;
			float: left;
			padding-top: 8px;
		}

		.top_breadctwo {
			height: 30px;
			width: 500px;
			float: left;
			padding-left: 8px;

		}

		.shodows {
			box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;

		}

		.addvist {
			text-align: center;
			height: 170px;
			background-color: #ffffffff;
		}

		.my-custom-scrollbarproduct {
			position: relative;
			height: 650px;
			overflow: auto;
		}

		.table-wrapper-scroll-y {
			display: block;
		}

		.maindailoboax {
		  padding: 5px;
		  height: 80%;
		  width: 80%;
		  margin: auto;
		  border: 1px solid #555500ff;
		  text-align: left;
		  border-radius: 9px;
		  background: white;
		  position: relative;
		  top:10%;

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
			<span style="font-size:20px; font-weight:bold";>This is all product by suppliers</span>
			</diV>
			  <div class="close_pop_up" >
			<button class="close_pop_up_btn" onclick="pop_custom_off()"><span style="color: white" >X</span></button>
		   </div>
		  </div> 
		<div class="mainedd">


		 <!-- this pop product update -->

				<div class="p-5 col-6  card ">


						<div class="form-group">
							<label for="exampleInputName">Barcode</label>
							<input type="text" class="form-control" id="updateBarcodedd" name="Barcodedd" aria-describedby="emailHelp"
								placeholder="Barcode" required>
						</div> <br />


						<div class="form-group">
							<label for="exampleInputName">Product Name</label>
							<input type="text" class="form-control" id="updateproductname" name="Product_name" placeholder="Product name"
								required>
						</div> <br />

						<div class="form-group">
							<label for="exampleInputName">Weight</label>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<div class="input-group-text"><span class="text-primary" id="weightshow"> ± </span></div>
								</div>
								<input type="number" class="form-control" id="updateWeight" name="Weight" placeholder="Weight">
								<div class="input-group-prepend">
									<div class="input-group-text"><span class="text-primary" id="weightshow">gm</span></div>
								</div>
							</div>
						</div><br/>

						<div id="adddome">
							<label for="exampleInputName"> Product Catagory </label>

							<select class="form-control" id="updatecatagorys">
								<option selected>Choose...</option>

							</select>
							</br>

							<label for="exampleInputName"> Sub Catagory </label>
						 <select class="form-control formselect required" placeholder="Select Sub Category" id="update_sub_category">
								<option selected>Choose...</option>
							</select> 
							</br>

							<label for="exampleInputName"> Sub to Sub Catagory </label>
							<select class="form-control" id="updatesubtosutcatagory">
								<option selected>Choose...</option>
							</select>
						</div>

				</div>
				<div class="col-6 h-600 card">
				<div id="testt">
		<div class="row">
			<div class="col text-center p-3">
			<img class="border" id="updateframe" src="{{asset('frontend/img/demo.jpg')}}" class="img-fluid"
									width="150px" height="157px" />
			</div>
			<div class="col text-right p-5">
				
			<input class="form-control" type="file" id="updateProductimage" onchange="updatepreview()" name="Productimage">
			</div>
		</div>

					
			<div class="addvist">

		<style>


		.toolbar button, select, input[type="color"] {
		  padding: 5px;
		  margin-right: 5px;
		}
		.toolbar {
		  margin-bottom: 10px;
		}



	 #editor {
	  width: 100%;
	  max-width: 100%;
	  min-height: 300px;
	  max-height: 100%;
	  overflow-y: auto;
	  border: 1px solid #ccc;
	  border-radius: 5px;
	  padding: 10px;
	  margin-bottom: 15px;
	  background-color: #fff;
	}

	  </style>

	<!-- Toolbar -->
	<div class="toolbar">
	  <button onclick="formatText('bold')"><b>B</b></button>
	  <button onclick="formatText('italic')"><i>I</i></button>
	  <button onclick="formatText('underline')"><u>U</u></button>
	  <button onclick="formatText('insertUnorderedList')">• List</button>
	  <button onclick="formatText('createLink')">🔗 Link</button>

	  <select id="fontSizeSelector" onchange="applyCustomFont()">
		<option value="">Font Size</option>
		<option value="12px">12px</option>
		<option value="16px">16px</option>
		<option value="20px">20px</option>
		<option value="24px">24px</option>
		<option value="32px">32px</option>
		 <option value="35px">35px</option>
		<option value="40px">40px</option>
		<option value="45px">45px</option>
	  </select>

	  <select id="fontFamilySelector" onchange="applyCustomFont()">
		<option value="">Font Family</option>
		<option value="Arial">Arial</option>
		<option value="Georgia">Georgia</option>
		<option value="Courier New">Courier New</option>
		<option value="Times New Roman">Times New Roman</option>
		<option value="Verdana">Verdana</option>
	  </select>

	  <input type="color" onchange="setFontColor(this.value)" title="Text Color">
	  <button onclick="formatText('removeFormat')">🧹 Clear</button>
	</div>

	<!-- Editor -->
	<div id="editor" contenteditable="true">
	  Type your product description here...
	</div>

	<script>
	  function formatText(command) {
		if (command === "createLink") {
		  const url = prompt("Enter the URL:");
		  if (url) {
			document.execCommand(command, false, url);
		  }
		} else {
		  document.execCommand(command, false, null);
		}
	  }

	  function setFontColor(color) {
		document.execCommand('foreColor', false, color);
	  }

	  function applyCustomFont() {
		const size = document.getElementById("fontSizeSelector").value;
		const font = document.getElementById("fontFamilySelector").value;

		if (size || font) {
		  const style = `style="${size ? 'font-size:' + size + ';' : ''}${font ? 'font-family:' + font + ';' : ''}"`;
		  const selection = window.getSelection();
		  const text = selection.toString();
		  if (text.length > 0) {
			const span = `<span ${style}>${text}</span>`;
			document.execCommand('insertHTML', false, span);
		  }
		}
	  }



	  function saveToDatabase() {
		const content = document.getElementById("editor").innerHTML;

		$.ajax({
				url:'{{ route('updatedata') }}',
				type: 'GET',
				data:{description:content},
				dataType:'JSON',
				success : function (data){
					console.log(data)
				},
				error: function(data){

				}

			});










		// fetch('/save-product-description', {
		//   method: 'POST',
		//   headers: { 'Content-Type': 'application/json' },
		//   body: JSON.stringify({ description: content })
		// })
		// .then(response => response.json())
		// .then(data => {
		//   alert("Saved to database!");
		//   console.log(data);
		// })
		// .catch(err => {
		//   alert("Error saving!");
		//   console.error(err);
		// });
	  }
	</script>



						</div>
					</div>
				</div>

			<!-- this product update end -->
			<br>
			</div>
			
		<div class="butttons">
			
			<button id="paymentbtm" type="button" onclick="saveToDatabase()" class="btn btn-primary">Sent</button>&nbsp;
		</div>
		</div>

		</div>






		<div class="p-5 col-4 card ">

		<form id="gg"  method="post">
		<?php echo csrf_field(); ?>
		  <div class="form-group">
			  <label for="exampleInputName">Barcode</label>
			  <input type="text" class="form-control" id="Barcode" name="Barcode" aria-describedby="emailHelp" placeholder="Barcode" required>
		  </div> <br/>
		 </form>
		<form id="uploadForm"  method="post">
		<?php echo csrf_field(); ?>
		  <div class="form-group">
			<label for="exampleInputName">Product Name</label>
			<input type="text"  class="form-control" id="productname"  name="Product_name" placeholder="Product name"  required>
		  </div> <br/>


		<div class="form-group">
		  <label for="exampleInputName">Weight</label>
			<div class="input-group mb-2">
			   <div class="input-group-prepend">
				  <div class="input-group-text"><span class="text-primary" id="weightshow"> ± </span></div>
			   </div>
					  <input type="number" class="form-control" id="Weight" name="Weight" placeholder="Weight" >
			   <div class="input-group-prepend">
				  <div class="input-group-text"><span class="text-primary" id="weightshow">gm</span></div>
			   </div>
		   </div>
		</div><br/> 


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
				<option selected>Choose...</option>
			</select>
			</br>

			<label for="exampleInputName"> Sub to Sub Catagory </label>
			<select class="form-control" id="subtosutcatagory">
				<option selected>Choose...</option>
			</select>
		</div>
		</div>

		 <div class="col-3  card p-5" >
			<div id="testt">
			 <div class="form-group ">
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
			   
			 </div>
				   <div class="addvist border animate-charcter pt-5">
					   <h3>Product image must be backgroud white</h3>
				   </div>
			</div>	
		 </div>
		
		<style>

		.addvist{	
			text-align: center;
			height: 170px;
			background-color: #ffffffff;
		}
		</style>


		<div class="col-5 card p-3">
		  <div class="card ">




			


		  <style>

.toolbar button, select, input[type="color"] {
  padding: 5px;
  margin-right: 5px;
}
.toolbar {
  margin-bottom: 10px;
  width: 100%;
}



#editor {
width: 100%;
max-width: 100%;
min-height: 300px;
max-height: 100%;
overflow-y: auto;
border: 1px solid #ccc;
border-radius: 5px;
padding: 10px;
margin-bottom: 15px;
background-color: #fff;
}

</style>

<!-- Toolbar -->
<div class="toolbar p-2">
<button onclick="formatText('bold')" class="btn border"><b>B</b></button>
<button onclick="formatText('italic')" class="btn border"><i>I</i></button>
<button onclick="formatText('underline')" class="btn border"><u>U</u></button>
<button onclick="formatText('insertUnorderedList')" class="btn border">• List</button>
<button onclick="formatText('createLink')" class="btn border">🔗 Link</button>

<select id="fontSizeSelector" onchange="applyCustomFont()" class="btn border">
<option value="">Font Size</option>
<option value="12px">12px</option>
<option value="16px">16px</option>
<option value="20px">20px</option>
<option value="24px">24px</option>
<option value="32px">32px</option>
 <option value="35px">35px</option>
<option value="40px">40px</option>
<option value="45px">45px</option>
</select>

<select id="fontFamilySelector" onchange="applyCustomFont()" class="btn border">
<option value="">Font F</option>
<option value="Arial">Arial</option>
<option value="Georgia">Georgia</option>
<option value="Courier New">Courier New</option>
<option value="Times New Roman">Times N R</option>
<option value="Verdana">Verdana</option>
</select>

<input type="color" onchange="setFontColor(this.value)" title="Text Color" class="btn border">
<button onclick="formatText('removeFormat')" class="btn border">🧹 Clear</button>
</div>


<!-- Editor -->
<div id="editor" contenteditable="true">
Type your product description here...
</div>
<button type="submit" id="inputdd" class="btn btn-primary">Submit</button>
</form>
<script>
function formatText(command) {
if (command === "createLink") {
  const url = prompt("Enter the URL:");
  if (url) {
	document.execCommand(command, false, url);
  }
} else {
  document.execCommand(command, false, null);
}
}

function setFontColor(color) {
document.execCommand('foreColor', false, color);
}

function applyCustomFont() {
const size = document.getElementById("fontSizeSelector").value;
const font = document.getElementById("fontFamilySelector").value;

if (size || font) {
  const style = `style="${size ? 'font-size:' + size + ';' : ''}${font ? 'font-family:' + font + ';' : ''}"`;
  const selection = window.getSelection();
  const text = selection.toString();
  if (text.length > 0) {
	const span = `<span ${style}>${text}</span>`;
	document.execCommand('insertHTML', false, span);
  }
}
}



function saveToDatabase() {
const content = document.getElementById("editor").innerHTML;

$.ajax({
		url:'{{ route('updatedata') }}',
		type: 'GET',
		data:{description:content},
		dataType:'JSON',
		success : function (data){
			console.log(data)
		},
		error: function(data){

		}

	});










// fetch('/save-product-description', {
//   method: 'POST',
//   headers: { 'Content-Type': 'application/json' },
//   body: JSON.stringify({ description: content })
// })
// .then(response => response.json())
// .then(data => {
//   alert("Saved to database!");
//   console.log(data);
// })
// .catch(err => {
//   alert("Error saving!");
//   console.error(err);
// });
}
</script>









<!-- 



					  <div class="active_full" id="listss">
						<div class="searchbar">
						   <div class="input-group rounded" style="width:95%; margin: 0 auto ; padding-right: 10px;">
							   <input type="text" name="search" id="search" class="form-control" placeholder="Search" />		 
						   </div>

						</div>
					  </div>


		<div class="headto" id="ddd">
		<div id="showss">     
		<div class="container box">
		   <div class="panel panel-default">
			<div class="panel-body">
			 <div class="table-responsive">
		<style>
		.my-custom-scrollbar {
		position: relative;
		height: 650px;
		overflow: auto;
		}
		.table-wrapper-scroll-y {
		display: block;
		}	
			  </style>

			  <div class="table-wrapper-scroll-y my-custom-scrollbar">
			  <table class="table table-striped table-bordered" id="section1" >
			   <thead >
				<tr>
				 <th>S.R</th>
				 <th>Barcode</th>
				 <th>Product Name</th>
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



		<script>

		$(document).ready(function(){
		fetch_customer_data();

		 function fetch_customer_data(query ='')
		 {
		  $.ajax({
		   url:"{{ route('live_search_product.action') }}",
		   method:'GET',
		   data:{query:query},
		   dataType:'json',
		   success:function(data)
		   {
			$('.hello').html(data.table_data);
			$('#total_records').text(data.total_data);
		   }
		  })
		 }

		 $(document).on('keyup', '#search', function(){
		  var query = $(this).val();
		  fetch_customer_data(query);
		 });

		});


		</script>
			  </div>
		   </div>
		 </div> -->


		</div>

		<div class="row">
			<div class="col-12 h-120 card ms-2">




			</div>
		</div>

		<script>


		//[1]--------- Sub to Sub Catagory[1]


		var getCategoryUrl = "{{ route('Get-Sub-Cat-Against-Main', ['id' => 'PLACEHOLDER']) }}";
						$(document).ready(function () {
						$('#sub_category_name').on('change', function () {
						let id = $(this).val();
						let url = getCategoryUrl.replace('PLACEHOLDER', id);
						$('#sub_category').empty();
						$('#sub_category').append(`<option value="0" disabled selected>Processing...</option>`);
						$.ajax({
						type: 'GET',
						url: '' +url ,
						success: function (response) {
						var response = response;
					   // console.log(response);   
						$('#sub_category').empty();
						$('#sub_category').append(`<option value="0" disabled selected>Select Sub Category*</option>`);
						response.forEach(element => {
							$('#sub_category').append(`<option value="${element['id']}">${element['catagory_name_s']}</option>`);
							});
						}
					});
				});
			});


		//[2]--------- Sub to Sub Catagory		

		var getSubCategoryUrl = "{{ route('Get-Sub-Cat-Against-Mainmulti', ['id' => 'PLACEHOLDER']) }}";
			   $(document).ready(function () {
					$('#sub_category').on('change', function () {
					let id = $(this).val();
					let url = getSubCategoryUrl.replace('PLACEHOLDER', id);

					$('#subtosutcatagory').empty();
					$('#subtosutcatagory').append(`<option value="0" disabled selected>Processing...</option>`);

					$.ajax({
					type: 'GET',
					url: ''+url,
					success: function (responseh) {
					var responsetwo = responseh; 
					$('#subtosutcatagory').empty();
					$('#subtosutcatagory').append(`<option value="0" disabled selected>Select Sub Category*</option>`);
					responsetwo.forEach(elementdata => {
					$('#subtosutcatagory').append(`<option value="${elementdata['id']}">${elementdata['sub_catagory_name']}</option>`);

					 });

					}
				});
			});
		});



		//[3]-----------product loaded this js     


		let total_prire;
		let unlimitesdate;

		var product_barcode=document.getElementById('Barcode');
		var productname=document.getElementById('productname'); 
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

		product_barcode.focus();

	 $(document).ready(function (e) {
			$("#uploadForm").on('submit',(function(e) {
				e.preventDefault();		
				if(!formFile.value==""){
			  //------this image vailded chack-----
				var reader = new FileReader();
				var size = formFile.files[0].size;
				var extn = formFile.files[0].type.split('/')[1];
				var maxSize = 100000;
				  var valid = ["gif", "png", "jpg", "jpeg","webp"];
				if (!valid.includes(extn)){


				 errrrr("invaild "+extn);
				 // console.log("image formet not match");

				  }
				  else if(size > maxSize){

				 errrrr("Image size less then 100kb");

				  }
				  else
				  {
			  //------this image vailded chack-----


			}


				//----------------------------------
			  const formData = new FormData(this);

			   formData.append("Barcode", product_barcode.value);
			   formData.append("Catagory", sub_category_name.value);  
			   formData.append("Sub_Catagory", sub_category.value); 
			   formData.append("Sub_to_sub_catagory", subtosutcatagory.value);
			   formData.append("Description", Description.value);

			   if(placehol.value===""){
					formData.append("Weight", "empty");
					console.log("empty");
			   }else{
					formData.append("Weight", "± "+placehol.value+" gm");
			   }


				$.ajax({
				url: "{{route('loader')}}",
				type: "POST",
				data:  formData,
				contentType: false,
				processData:false,      
				success: function(data)
				{  	    	
				//$("#targetLayer").html(data);	
				console.log(data);
				const obj = JSON.parse(data);	


				if(obj.message=="Exit"){
			 //   console.log(obj.message);	
				orrning("Barcode allready exit");

				}else{	
					successfull("Product Load");
					 allclear();
					 //document.getElementById("showss").innerHTML.reload;
				}

				},
				  error: function() 
				{
				} 	        
				});							

				//------this image vailded chack-----
				  //console.log("all right");

				  }
				 //------this image vailded chack-----

				//----------------------------------


				}));});   





			$(document).ready(function (e) {
			$("#gg").on('submit',(function(e) {
				e.preventDefault();		

			console.log("ok")
			productname.focus();
				}));});   









		   inputdd.onclick = function() {

			 if(product_barcode.value == ""){
				  errrrr("Bar Code Empty");  	
			  }else if(productname.value == ""){
				  errrrr("Product Name Empty");  
			  }else if(sub_category_name.selectedIndex=="0"){
				  errrrr("Choose Catagory Empty");
			  }else if( sub_category.selectedIndex=="0"){
				  errrrr("Choose Sub-Catagory Empty");
			  }else if( formFile.value==""){
				  errrrr("Not Image load");
			  }else{  }	
		 };  



		   function allclear(){
				   formFile.value="";
				  frame.src = "{{asset('frontend/img/demo.jpg')}}";   
				  seleteclear.innerHTML=seleteclear.innerHTML; 
				  productname.value=""; 
				   placehol.value="";
				   product_barcode.value="";
		   }


		function preview() {
				frame.src = URL.createObjectURL(event.target.files[0]);

		} 

		function updatepreview() {
				updateframe.src = URL.createObjectURL(event.target.files[0]);

		} 





		//[4]-----------this add catagory and show catgoral all data			


			var cat=document.getElementById('catagory');
			var catbtn=document.getElementById('cbtn');
		//	show();

			// catbtn.addEventListener("click", chack);  		


			// function chack(){

			  // 		if ( cat.value == "")
			  // 		{
			   // 			  console.log("gfhjjh");
			   // 			  errr();
			  // 		}
			  // 		else{
			  // 			inputfunction();
			  // 			}
			//         }




			function inputfunction(){    	
				   var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
					   $.ajax({
							url: 'catagoryloaddata',
							type: 'POST',
							data: {_token: CSRF_TOKEN, catagory_name:cat.value},
							dataType: 'JSON',
							success: function (data) { 
							  //  $(".writeinfo").append(data.catagory_name); 
							  //  show();
								suss();   
							}
						});   	
				   }






		//[5]--------------thsi sub catagory loaded  data 									


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










		clicks = 0;
		$("#sunmetbtnsub").hide();

		function add_sub()
		{
		var i = catgor.selectedIndex;
		var ii = subcatgor.selectedIndex;
		if(i>0 && ii>0){			
		 $("#sunmetbtnsub").show(); 
		  catgor.disabled=true;
		  subcatgor.disabled=true;
		 $rownosub=$("#employee_table_sub tr").length;
		 $rownosub=$rownosub+1;

		 if($rownosub<=7){
		 $("#employee_table_sub tr:last").after("<tr id='row"+$rownosub+"'><td><input type='hidden' name='catagory_id[]' class='form-control rounded' placeholder='<?php echo "hello" ?>' value="+catgor.value+" readonly></td><td><input type='text' name='sub_catagory_id[]' class='form-control rounded' placeholder='<?php echo "hello" ?>' value="+subcatgor.value+" readonly></td><td><input type='text' name='sub_catagory_name[]' class='form-control rounded' placeholder='Sub-catagory'>	</td><td ><span style='color: red; font-weight: bold;'> <i class='bx bxs-x-square bx-sm' onclick=delete_row_sub('row"+$rownosub+"')>	</td></tr>");

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





		function pop_custom_on(id){
				document.getElementById('fadea').style.display='block';
				document.getElementById('lighta').style.display='block';
				document.getElementById('maindailoboax').style.display='block';
				updatedateget(id);

		}


		function pop_custom_off(){
			document.getElementById('lighta').style.display='none';
			document.getElementById('fadea').style.display='none';
			document.getElementById('maindailoboax').style.display='none';
			$('#updatecatagorys').empty();
			$('#update_sub_category').empty();	
			$('#updatesubtosutcatagory').empty();
		}


	  function updatedateget(id){
			$.ajax({
				url:'{{ route('dataupdate') }}',
				type: 'GET',
				data:{product_id:id},
				dataType:'JSON',
				success : function (data){
					catagordata(data);
				},
				error: function(data){

				}

			});


	  }

	function catagordata(data){




		$('#updatecatagorys').append('<option selected value="">'+data.cat_id[0]+'</option>');
	if(data.cat_id[1]===null){
		   $('#update_sub_category').append('<option selected>Choose...</option>');
	}else {
		$('#update_sub_category').append('<option selected value="">'+data.cat_id[1]+'</option>');
	}

	if(data.cat_id[2]===null){
		 $('#updatesubtosutcatagory').append('<option selected>Choose...</option>');
	}else{ 

		 $('#updatesubtosutcatagory').append('<option selected value="">'+data.cat_id[2]+'</option>');

	}





	// 	this main catagory system 
	data.catagory.forEach(function(item, index) {

		$('#updatecatagorys').append('<option value="'+item.id+'">'+item.catagory_name+'</option>');

		 });


	// 	this sub catagory system 
		$( "#updatecatagorys" ).on("change", function() {

			let ids = $('#updatecatagorys').val();
	 const results = data.subcat.filter(items => items.catagory_id === ids);

		$('#update_sub_category').empty();
		$('#updatesubtosutcatagory').empty();
		$('#updatesubtosutcatagory').append(`<option selected>Choose...</option>`);
		$('#update_sub_category').append(`<option value="0" disabled selected>Select Sub Category*</option>`);

	   results.forEach(function(item, index) { 

		   $('#update_sub_category').append('<option value="'+item.id+'">'+item.catagory_name_s+'</option>');
		 });

		} );


	// 	this sub to sun catagory system 
		$( "#update_sub_category" ).on("change", function() {

		   let ids = $('#update_sub_category').val();
	 const subresult = data.sub_to_sub_cat.filter(items => items.sub_catagory_id === ids);

		$('#updatesubtosutcatagory').empty();
		$('#updatesubtosutcatagory').append(`<option value="0" disabled selected>Select Sub Category*</option>`);

		subresult.forEach(function(item, index) { 
		   $('#updatesubtosutcatagory').append('<option value="'+item.id+'">'+item.sub_catagory_name+'</option>');
		 });

		} );

		//updateBarcodedd,updateproductname,updateWeight
	  $('#updateBarcodedd').val(data.product_info_data[0]);
	  $('#updateproductname').val(data.product_info_data[1]);

	  const numericValue = parseFloat(data.product_info_data[2].replace(/[^0-9.]/g, ''));
	  $('#updateWeight').val(numericValue);


	updateframe.src =window.location.origin+'/'+data.product_info_data[3];


	}

	function deleteproduct(id){


		// $.ajax({
		// 		url:'{{ route('deletedata') }}',
		// 		type: 'GET',
		// 		data:{product_id:id},
		// 		dataType:'JSON',
		// 		success : function (data){
		// 			console.log(data)
		// 		},
		// 		error: function(data){

		// 		}

		// 	});
	}


		</script>


@endsection
