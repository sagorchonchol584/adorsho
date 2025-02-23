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
	 /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
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
	
	.addvist{	
	text-align: center;
	height: 170px;
	background-color: #ffffffff;
}
</style>




		





<div class="row">
	  <div class="col-4 h-500">
		<br>
 			<span style="text-align: center; color: black;"> Recent catagory uploaded</span>
			  <div class="active_full">
				<div class="searchbar">
					<div class="input-group rounded">
   						 <input type="search" class="form-control rounded" placeholder="Catagory add"
   						  id="catagory" aria-label="Search" aria-describedby="search-addon"/>
 						 <button class="input-group-text bg-primary"  id="cbtn">Add</button> 
					</div>
				</div>
				<div class="headto card" id="showData"></div>	
			 </div>
		</div>


<div class="col-4 h-500">
<br>
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
		 				  <tr id="row1"></tr>
		 			 </table>
					<div class="input-group rounded">
					 <button class="btn btn-primary" name="submit_row"  id="sunmetbtn">SUBMIT</button>
					</div>
			</form>
		</div>
    </div>	
</div>
		

<div class="col-4 h-500">
<br>
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
	  			    <tr id="row1"></tr>
	  			  </table>
	   			 <div class="input-group rounded">
	       		   <button class="btn btn-primary" name="submit_row"  id="sunmetbtnsub">SUBMIT</button>
	    		  </div>
			  </form>
		 </div>		
		<div class="form-group p-5"></div>
   </div>
   </div>
<script>


//[1]--------- Sub to Sub Catagory[1]


                $(document).ready(function () {
                $('#sub_category_name').on('change', function () {
                let id = $(this).val();
                $('#sub_category').empty();
                $('#sub_category').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                type: 'GET',
                url: 'GetSubCatAgainstMain'+ id,
                success: function (responses) {
                var response = responses;
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
 
	
//[2]--------- Sub to Sub Catagory		

	
// 	   $(document).ready(function () {
//             $('#sub_category').on('change', function () {
//             let id = $(this).val();
            
//             $('#subtosutcatagory').empty();
//             $('#subtosutcatagory').append(`<option value="0" disabled selected>Processing...</option>`);
            
//             $.ajax({
//             type: 'GET',
//             url: 'GetSubCatAgainstMainmulti' + id,
//             success: function (response) {
//             var response = JSON.parse(response);
            
//             $('#subtosutcatagory').empty();
//             $('#subtosutcatagory').append(`<option value="0" disabled selected>Select Sub Category*</option>`);
//             response.forEach(element => {
//                 $('#subtosutcatagory').append(`<option value="${element['id']}">${element['sub_catagory_name']}</option>`);
//                 });
//             }
//         });
//     });
// });
	

	      	
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
    
     var formFile=document.getElementById('Productimage'); 
   
     var dd=document.getElementById('uploadForm'); 
     var seleteclear=document.getElementById('adddome'); 
     

   

 
            
//[4]-----------this add catagory and show catgoral all data			

	
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
                    url: '{{route('loader_catagory')}}',
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
       
		
		

		
       function show(){
			    $.ajax({
                type: 'GET',
                url: '{{route('catagory_showdata')}}',
                success: function (response) {
                const myBooks = response;     
        
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



		
		

			
//[6]--------------thsi sub catagory insert data   					

    
    var catgor=document.getElementById('subcatload');
    var subcatgor=document.getElementById('sub_category_two');
    
	     

                $(document).ready(function () {
                $('#subcatload').on('change', function () {
                let id = $(this).val();
				console.log(id);
                $('#sub_category_two').empty();
                $('#sub_category_two').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                type: 'GET',
                url: 'GetSubCatAgainstMain/' + id,
                success: function (responsed) {
                var response = responsed;
               // console.log(response);   
                $('#sub_category_two').empty();
                $('#sub_category_two').append(`<option value="0" disabled selected>Select Sub Category*</option>`);
                response.forEach(element => {
                    $('#sub_category_two').append(`<option value="${element['id']}">${element['catagory_name_s']}</option>`);
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
                

	
</script>

  
@endsection
