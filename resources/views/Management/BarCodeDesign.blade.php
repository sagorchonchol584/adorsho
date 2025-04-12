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

@page {
        size: auto;
        margin: 0mm;
    }
    
    @media print {
        body {
            margin: 0;
            padding: 0;
        }
        .no-print {
            display: none;
        }
    }
    #loadnumber{
        width: 50px;
        height: 40px;
      
    }
</style>



<div class="card">
<div class="row h-600">
    <div class="col-6 border">

    <div class="card">
  <h5 class="card-header">PRODUCT BARCODE</h5>
  <div class="card-body">
    <h5 class="card-title">Type or Scan the barcode value here</h5>

    <form id="searchidbar">
	<input class="form-control" name="product_barcode" id="product_barcode" placeholder="0000000002757" type="number" onkeypress="return /[0-9a-zA-Z]/i.test(event.key)">
	</form>	

<br><br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Barcode</th>
      <th scope="col">Stock</th>
      <th scope="col">Mark</th>
    </tr>
  </thead>
  <tbody class="barcoderstable">
  <tr>
    <td align='center' colspan='5'>No Data Found</td>
</tr>
  </tbody>
</table>


<style>
#bardodess{
    display: none;
}

</style>

<div id="printable-content">
<div id="bardodess"></div>
</div>

 </div>
</div>

    </div>
    <div class="col-6 border">f</div>
</div>
</div>


<script>
$(document).ready(function (e) {
 	 $("#searchidbar").on('submit',(function(e) {
		e.preventDefault();		
      
        var bar= $('#product_barcode').val();
	if(!bar==""){

        if(bar.toString().length>=13){
          
            barcodee(bar);
        }
     //  barcodee(bar);
    //  console.log('are u ok')
    }
     }))});



function barcodee(bar){
$.ajax({
    type: 'GET',
    url: 'productInfosearch/' + bar,//done
    success: function(data)
    {

    if(data.datashow===0){
    dailogmess("Stock Don't Add Data","Please Chack Your Stock","info");
    }else{
        data.datashow.forEach(element => {    
            try{
               $('.barcoderstable').html('<tr><th scope="row">'+element.Product_name+'</th><td>'+element.Barcode+'</td><td><svg id="barcode"></svg></td><td><input  value="0" type="number" id="loadnumber"></td><td><button class="btn btm-primary-cus" id="creatbtm">Barcode</button></td></tr>');
                JsBarcode("#barcode", element.Barcode,{
                format: "EAN13",
                width: 1.1,
                height: 35,
                displayValue: true, 
                margin: 0,
                lineColor: "#000",
                });
         create_barcode(element.Product_name,element.Sales_Price,element.Barcode);
            }catch(error) {
                    console.error("Barcode generation failed:", error);
                    return false; // Failed
                }
                });
              }
            }});
}



function printWithOptions(Product_name,Sales_Price,Barcode,numbe) {
    
     $('#product_barcode').val("");
     $('.barcoderstable').html("<tr><td align='center' colspan='5'>Barcode Create Successfully</td></tr>");
    try{
             
            for(let i=0; i<numbe;i++){
             $('#bardodess').append('<div class="barcode-container"><div class="product-info"><div class="product-name">'+Product_name+'</div><div class="product-price">$'+Sales_Price+'</div></div><svg id="barcode"><br></svg><span style="font-size:7px;">www.adarshashop.com</span></div>');

                JsBarcode("#barcode", Barcode,{
                format: "EAN13",
                width: 1.1,
                height: 35,
                displayValue: true, 
                margin: 0,
                lineColor: "#000",
                });

            }

            }catch(error) {
                    console.error("Barcode generation failed:", error);
                    return false; // Failed
                }

        // Open print dialog with a print-friendly version
        const printWindow = window.open('', '', 'width=800,height=600');
        printWindow.document.write(`
            <html>
            <head>
    <style>
     body{margin:0 auto; padding:0px;}
    .barcode-container {
    text-align: center;
    font-family: Arial, sans-serif;
    width: 144px;
    height:96px;
    position: relative;	
}

.product-name {
    font-size: 10px;
    margin-bottom: 0px;
    margin-left: 0px;
    font-weight: bold;
    height: 20px;
    padding-top: 1px;
    overflow: hidden;
}

.product-price {
    font-size: 12px;
    font-weight: 600;
    height: 15px;
    z-index: 2;

}

.barcode{
 position: absolute;
 top: 20;
}
        </style>
            </head>
            <body>
                ${document.getElementById('printable-content').innerHTML}
                <script>
                
                    window.onload = function() {
                        setTimeout(function() {
                            window.print();
                            window.close();
                            ${location.reload()}
                        }, 200);
                    };
                <\/script>
            </body>
            </html>
        `);
        printWindow.document.close();
    }



    // padding-bottom: 16px;

   
function create_barcode(Product_name,Sales_Price,Barcode){
var btn=document.getElementById('creatbtm');
btn.addEventListener("click", barcodecreate = () => {
var barcodefff=parseInt($('#loadnumber').val());

  

   if(barcodefff>0){
    printWithOptions(Product_name,Sales_Price,Barcode,barcodefff);
   }else{
    dailogmess("Stock Field is Empty","Please Chack Your field","info");
    $('#loadnumber').css('border', '1px solid red');
   }
});
}

function dailogmess(mess,messtwo,messtheree){
		    swal({
		 	      title: ""+mess+"",
		  	     text: ""+messtwo+"",
		 	      icon: ""+messtheree+"",
		       });
              
		 }     
		  
</script>



@endsection
