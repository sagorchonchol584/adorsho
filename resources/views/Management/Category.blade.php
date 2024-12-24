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
   
   
 
<div class="col-12">
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

<div class="row">
<div class="col-12 h-60"></div>
</div>
<div class="row">
<div class="col-12 h-750">
 
<div id="add">

</div>


<div class="row">
<div class="col-12 h-80">

</div>
</div>




<!-- 
<table>
      <thead>
        <tr class="icomching">
          <th class="icomching"></th>
          <th>Name</th>
          <th>Featured</th>
          <th>Products</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody id="categoryTable">
       
      </tbody>
    </table> -->

</div>
</div>


	<style>
/* General Reset */


table {
  width: 100%;
  border-collapse: collapse;
}

th{
  border: 1px solid #ddd;
  text-align: left;
  padding: 12px;
} 

 th {
  background-color: #f4f4f4;
  font-weight: bold;
}

.icomching{
border: 1px solid #ddd;
width: 35px;
height: 50px;
}


.icomchingtwo{
border: 1px solid #ddd;
height: 50px;
}
.bogg{

height: 200px;
}

    </style>	


  <script>
var datasave;

$.ajax({
    url: '/get_all_data_to_categorys',
    type: 'GET',
    success:function(data){
      datasave=data;
    console.log('successfull mesage');
    datasent(data);
    displayCategories(data);
    },
    error:function(){
  //  console.log('data loaded fail');
    }
});


function datasent(datdget){
  const parsedData = JSON.parse(datdget);
parsedData.catagory.forEach(item => {
  console.log(`ID: ${item.catagory_id}`);
});
const filterByDate = (id) => {
  return parsedData.catagory.filter(item => item.catagory_id === id);
};

//console.log("Filtered Categories:", filteredCategories);
}





const categories = [
  { name: "Clothes for women", featured: "✔", products: 5, status: "Inactive" },
  { name: "Clothes for Kids", featured: "✔", products: "-", status: "Active" },
  { name: "Clothes for men", featured: "✘", products: 13, status: "Active" },
  { name: "Shoes", featured: "✔", products: 10, status: "Active" },
  { name: "Health and Beauty", featured: "✘", products: 5, status: "Active" },
  { name: "Ralph Lauren", featured: "✔", products: 3, status: "Active" },
  { name: "Alienware", featured: "✔", products: 11, status: "Inactive" }
];





// Function to display categories
function displayCategories(data) {
  const parsedData = JSON.parse(data);

  parsedData.catagory.forEach(item => {
  console.log(`ID: ${item.catagory_id}`);
});


  const tableBody = document.getElementById("categoryTable");

  tableBody.innerHTML = ""; // Clear table
  parsedData.maincat.forEach((category) => {
    const row = `
      <tr>
        <td class="icomching" id="iconsdd"><i class='bx bx-chevron-down-circle bx-sm'  onclick="test(${category.id})"></i></td>
        <td class="icomchingtwo"><span">${category.catagory_name}</span></td>
        <td class="icomchingtwo">${category.id}</td>
        <td class="icomchingtwo">${category.id}</td>
        <td class="icomchingtwo">${category.id}</td>
        <td class="icomchingtwo"><button>Edit</button></td>
      </tr>
    `;


    tableBody.insertAdjacentHTML("beforeend", row);
  });
}


// Initial display


function test(ids){
  
  var hssss=document.getElementById('iconsdd');
  hssss.className="bogg";

  const parsedData = JSON.parse(datasave);
    console.log(ids);

    const filterByDate = (id) => {
  return parsedData.catagory.filter(item => item.catagory_id === id);
  };

    const filteredCategories = filterByDate(''+ids);
    console.log("Filtered Categories:", filteredCategories);
}
  </script>




  
@endsection
