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
    <nav aria-label="breadcrumb ">
      <ol class="breadcrumb col-lg-3 border"> 
    	 <li class="breadcrumb-item"><i class='bx bx-home bx-sm' ></i></li>
   		 <li class="breadcrumb-item"><a class="breade" href="#">Page</a></li>
  		  @foreach(Request::segments() as $segment)
   		 <li  class="breadcrumb-item"> <a href="#" class="breade">{{$segment}} </a> </li>
         @endforeach
    </ol>
    <ul class="pagination justify-content-end">
    <li class="page-item">
      <a class="btn btn-primary m-lg-1" href="{{route('cat-add-route')}}">Add Cat</a>
    </li>
  </ul>
</nav>
</div>




<!--This is a pop loading deing  -->
<style>
.maindailoboax {
  padding: 5px;
  height: 460px;
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
  <div class="table-wrapper-scroll-y my-custom-scrollbar  border-dark">
<table class="table table-hover  p-2">
  <thead>
    <tr >
      <th scope="col" style="text-align:left">
        <img src="{{url('images/1701069398.jpg') }}">
      </th>
       <th scope="col">Unite</th>
    </tr>
  </thead>
  <tbody class="supplierlist">
    
  </tbody>
</table>
</div>
</div>

<div class="info  border">
  <div class="inputtsupper">
   <div class="input-group border">
    <div class="col-12">
      <h4 class="align-middle">middle</h4>
    </div>
   </div>
  </div> 

  <div class="inputtsuppertwo">
   <div class="col-12">
     <input type="number" value="" id="supplierpayment" class="form-control" visible="none">
    </div>
  </div>

</div>

<div class="butttons">
	<button id="paymentbtm" type="button" onclick="datatranfer()" class="btn btn-primary">Sent</button>&nbsp;
</div>
</div>

</div>




<script>
  function pop_custom_on(){
		document.getElementById('fadea').style.display='block';
		document.getElementById('lighta').style.display='block';
		document.getElementById('maindailoboax').style.display='block';
    document.getElementById('payableid').style.display='none';
}

// function pop_custom_payable(){
// 		document.getElementById('fadea').style.display='block';
// 		document.getElementById('lighta').style.display='block';
// 		document.getElementById('maindailoboax').style.display='none';
//     document.getElementById('payableid').style.display='block';
// }


function pop_custom_off(){
		document.getElementById('lighta').style.display='none';
		document.getElementById('fadea').style.display='none';
		document.getElementById('maindailoboax').style.display='none';
   // clearlyalldata();
   document.getElementById('payableid').style.display='none';
   $('.cashs').html(" ");
   $('.cashspay').html(" ");
}
</script>











<button onclick="pop_custom_on()">show</button>

<div class="row">
<div class="col-12 h-60"></div>
</div>
<div class="row">
<div class="col-12 h-750 card">
 
<div id="add">


</div>







<div class="main">
<div class="child1">
   
</div>
<div class="child2">
    <p>Name
        <i class='bx bx-expand-vertical'></i>
    </p>
</div>

<div class="child3">
    <p>Products
    <i class='bx bx-expand-vertical'></i>
    </p>
</div>
<div class="child4">
    <p>Status
    <i class='bx bx-expand-vertical'></i>
    </p>
</div>
<div class="child5">
    <p>Active</p>
</div>
</div>




<div class='table-wrapper-scroll-y my-custom-scrollbarcatagory'>
<div id="mainidcatgo">



</div>
</div>
</div>



<script>
var datasave;
let clickvalue=0;
for(var i=0;i<30; i++){
 // createtablecat();
}

function createtablecat(id,name,data,shop){

 // catagorys(id);
let maindiv=document.getElementById("mainidcatgo");
let maindivtwo=document.createElement('div');
maindivtwo.setAttribute('id','maintwoscat'+id);
maindivtwo.className='fixmain';
  //--------------------------------------------------
let maintwo=document.createElement("div");
    maintwo.className='togle';
    maintwo.setAttribute('id','mainids'+id);

   //--------------------------------------------------
   let iconanddiv=document.createElement("div");
   let child=document.createElement("div");
    child.className='clot1';
    let iconone=document.createElement('i');
    iconone.className='bx bx-chevron-up-circle bx-md';
    iconone.setAttribute('id','icon'+id);
    //iconone.style.color='var(--bg-100)';
    iconone.style.transition='0.3s';
    child.appendChild(iconone);
    iconanddiv.className='child1andtwo';
    iconanddiv.setAttribute('id',id);
    iconanddiv.setAttribute('onclick', 'catagorycolis(this)');
    iconanddiv.appendChild(child);
  
  //--------------------------------------------------
    let child1=document.createElement("div");
    child1.className='clot2';
    child1.setAttribute('id',id);
    let par2=document.createElement("span");
    par2.style.color="var(--bg-100)";
    par2.innerHTML=name;
    child1.appendChild(par2);
    iconanddiv.appendChild(child1);
  

 //--------------------------------------------------
    let child3=document.createElement("div");
    child3.className='clot3';
    let par3=document.createElement("span");
    par3.innerHTML=id;
    child3.appendChild(par3);
    
   //--------------------------------------------------
    let child4=document.createElement("div");
    child4.className='clot4';
    let par4=document.createElement("span");
    par4.innerHTML=shop;
    child4.appendChild(par4);

 //--------------------------------------------------
 let child44=document.createElement("div");
    child44.className='clot44';
    child44.addEventListener("click", function () {
      updatedata(id);
    });
    let child44two=document.createElement("div");
    child44two.className='clo1';

    let child44text=document.createElement("div");
    child44two.style.paddingTop='=10px';
  

    let par44=document.createElement("span");
    let icon44=document.createElement('i');
    //icon44.setAttribute('onclick',' updatedata(this)');
    icon44.className='bx bx-edit-alt bx-sm';

    par44.innerHTML="Edit";
    child44two.appendChild(icon44);
    child44text.appendChild(child44two);
    child44.appendChild(child44two);
    child44.appendChild(child44text);
    child44.appendChild(par44);

  
 //--------------------------------------------------
 

    let child5=document.createElement("div");
    child5.className='clot5';
    let icon5=document.createElement('i');
    let iconbackg=document.createElement('div');
    iconbackg.className="deleta";
    icon5.setAttribute('onclick',' testison()');
    icon5.className='bx bx-trash-alt bx-sm';
   // icon5.style.background='#e9ecef';
   iconbackg.appendChild(icon5);
    child5.appendChild(iconbackg);
  
 //--------------------------------------------------
    let child6=document.createElement("div");
    child6.className='clot6';
    let par6=document.createElement("span");
    par6.innerHTML=data;
    child6.appendChild(par6);
 //--------------------------------------------------
    maintwo.appendChild(iconanddiv);
    maintwo.appendChild(child3);
    maintwo.appendChild(child4);
    maintwo.appendChild(child6);
    maintwo.appendChild(child44);
    maintwo.appendChild(child5);
   
    maindivtwo.appendChild(maintwo);
    maindiv.appendChild(maindivtwo);

} 


function catagorys(ids){

let idget=ids.id;
let maindiv=document.getElementById('maintwoscat'+idget);
let maindivtwo=document.createElement('div');
maindivtwo.setAttribute('id' ,'catagorysshow'+idget);
maindivtwo.setAttribute('class' ,'catagorysshowclass');

   const filterByDate = (idget) => {
 
       return datasave.catagory.filter(item => item.catagory_id === idget);
          };

    const filteredCategories = filterByDate(''+idget);

  // console.log("Filtered Categories:", filteredCategories);
    filteredCategories.forEach(item => {

 // catagorystable(item.catagory_id,item.catagory_name,item.date,item.Shop_cat_id);



//  let maindivtwo=document.createElement('div');
// maindivtwo.setAttribute('id','maintwosub'+item.id);
// maindivtwo.className='fixmainsub';

//  //--------------------------------------------------
// let maintwo=document.createElement("div");
//   maintwo.className='togle';
//   maintwo.setAttribute('id','mainids'+item.id);

//  //--------------------------------------------------
//  let iconanddiv=document.createElement("div");
//  let child=document.createElement("div");
//   child.className='clot1';
//   let iconone=document.createElement('i');
//   iconone.className='bx bx-chevron-up-circle bx-md';
//   iconone.setAttribute('id','icon'+item.id);
//   iconone.style.color='blue';
//   iconone.style.transition='0.3s';
//   child.appendChild(iconone);
//   iconanddiv.className='child1andtwo';
//   iconanddiv.setAttribute('id',item.id);
//   iconanddiv.setAttribute('onclick', 'catagorycolis(this)');
//   iconanddiv.appendChild(child);
// //--------------------------------------------------
//   let child1=document.createElement("div");
//   child1.className='clot2';
//   child1.setAttribute('id',item.id);
//   let par2=document.createElement("span");
//   par2.innerHTML=item.catagory_name;
//   child1.appendChild(par2);
//   iconanddiv.appendChild(child1);


// //--------------------------------------------------
//   let child3=document.createElement("div");
//   child3.className='clot3';
//   let par3=document.createElement("span");
//   par3.innerHTML=item.id;
//   child3.appendChild(par3);
  
//  //--------------------------------------------------
//   let child4=document.createElement("div");
//   child4.className='clot4';
//   let par4=document.createElement("span");
//   par4.innerHTML=item.Shop_cat_id;
//   child4.appendChild(par4);

// //--------------------------------------------------
//   let child5=document.createElement("div");
//   child5.className='clot5';
//   let icon5=document.createElement('i');
//   icon5.setAttribute('onclick',' testison()');
//   icon5.className='bx bx-trash-alt bx-sm';
//   child5.appendChild(icon5);

// //--------------------------------------------------
//   let child6=document.createElement("div");
//   child6.className='clot6';
//   let par6=document.createElement("span");
//   par6.innerHTML=item.date;
//   child6.appendChild(par6);
// //--------------------------------------------------
 
//   maintwo.appendChild(iconanddiv);
//   maintwo.appendChild(child3);
//   maintwo.appendChild(child4);
//   maintwo.appendChild(child6);
//   maintwo.appendChild(child5);
//   maindivtwo.appendChild(maintwo);
//   maindiv.appendChild(maindivtwo);
 
// //--------------------------------------------------

var datalist='<div id="maintwosub'+item.id+'" class="fixmainsub"><div class="togle" id="mainids'+item.id+'" ><div class="child1andtwo" id="'+item.id+'"  onclick="sub_funcation(this)"><div class="clot1"><i class="bx bx-chevron-up-circle bx-md" id="icon'+item.id+'" style="color: var(--bg-100); transition: 0.3s;"></i></div><div class="clot2" id="'+item.id+'"><span>'+item.catagory_name_s+'</span></div></div><div class="clot3"><span>'+item.id+'</span></div><div class="clot4"><span>'+item.Shop_cat_id+'</span></div><div class="clot6"><span>'+item.date+'</span></div><div class="clot44"><div class="clo1"><i onclick=" updatedata('+item.id+')" class="bx bx-edit-alt bx-sm"></i></div><div></div><span>Edit</span></div><div class="clot5"><i onclick=" testison()" class="bx bx-trash-alt bx-sm deleta"></i></div></div></div>';
setTimeout(function(){
  $('#catagorysshow'+idget).append(datalist);  
}, 20);
    maindiv.appendChild(maindivtwo);

});



}



// ----------this a sub to sub catagory items----
function sub_funcation(value){
  console.log('hello world');
  let idget=value.id;
  
  let maindiv=document.getElementById('maintwosub'+idget);
  let maindivtwo=document.createElement('div');
maindivtwo.setAttribute('id' ,'catagorysshow_sub'+idget);
maindivtwo.setAttribute('class' ,'catagorysshowclass_sub');

  const filterByDate = (idget) => {
       return datasave.sub_catgory.filter(item => item.sub_catagory_id === idget);
          };

    const filteredCategories = filterByDate(''+idget);

   // ----------this a sub to sub catagory items----
    filteredCategories.forEach(item => {
      console.log(item.id);
      var datalist='<div id="maintwosub'+item.id+'" class="fixmainsub-sub"><div class="togle" id="mainids'+item.id+'" ><div class="child1andtwo" id="'+item.id+'"  onclick="sub_funcation(this)"><div class="clot1"><i class="bx bx-chevron-up-circle bx-md" id="icon'+item.id+'" style="color: var(--bg-100); transition: 0.3s;"></i></div><div class="clot2" id="'+item.id+'"><span>'+item.sub_catagory_name+'</span></div></div><div class="clot3"><span>'+item.id+'</span></div><div class="clot4"><span>'+item.Shop_cat_id+'</span></div><div class="clot6"><span>'+item.date+'</span></div><div class="clot44"><div class="clo1"><i onclick=" updatedata('+item.id+')" class="bx bx-edit-alt bx-sm"></i></div><div></div><span>Edit</span></div><div class="clot5"><i onclick=" testison()" class="bx bx-trash-alt bx-sm deleta"></i></div></div></div>';
$('#catagorysshow_sub'+idget).append(datalist);  
maindiv.appendChild(maindivtwo);

});




}




$.ajax({
    url: '{{route('get-all-data-to-catagories')}}',
    type: 'GET',
    success:function(data){
     // datasave=JSON.parse(data);
     datasave=data;
     // testt(data);
     catagorymain(data);

    console.log('successfull mesage');
   // datasent(data);
  //  displayCategories(data);
    },
    error:function(){
  //  console.log('data loaded fail');
    }
});


function catagorymain(data){
  // const parsedData = JSON.parse(data);
   const parsedData = data;
   parsedData.maincat.forEach(item => {
  createtablecat(item.id,item.catagory_name,item.date,item.Shop_cat_id,);
      
});
}

function  updatedata(id){


  console.log('Helllo bangldesh'+id);
}

function catagorycolis(value){
var ddd=$('#maintwoscat'+value.id).hasClass("togletwo");
var catagory_show_condi=$('#catagorysshow'+value.id).hasClass("catagorysshowclass");


if(!ddd){
  $('#maintwoscat'+value.id).toggleClass("togletwo");
  document.getElementById('maintwoscat'+value.id).style.height='inherit';
  $('#catagorysshow').show();

  
if(!catagory_show_condi){
  catagorys(value);
  console.log('if');
  $('#catagorysshow').show();
}else{
  console.log('else---------------');
 
}


}
else
{
  $('#maintwoscat'+value.id).removeClass("togletwo");
  $('#catagorysshow').hide();
  document.getElementById('maintwoscat'+value.id).style.height='67px';
  //$('#icon'+value.id).css('color','var(--bg-100');
 // document.getElementById('icon'+value.id).style.color='red';

}

 // console.log(ddd)
  $('#mainids'+value.id).toggleClass("toglet");
  $('#icon'+value.id).toggleClass("bx-rotate-180 ggg");
 // document.getElementById('icon'+value.id).className='ggg';
  

  //iconone.style.color='var(--primary-100)';

// if(clickvalue==0){
//     clickvalue=1;
//     console.log(value);
//   document.getElementById('icon'+value.id).className='bx bx-chevron-up-circle bx-md bx-rotate-180';
//  document.getElementById('icon'+value.id).style.transition='0.3s';
//   document.getElementById('maintwoscat'+value.id).style.height='300px';
//   document.getElementById('mainids'+value.id).style.borderBottom='1px solid  #e0e0e0';
//  document.getElementById('maintwoscat'+value.id).style.transition='0.3s';
//   }else{
//     clickvalue=0;
//     console.log(value);
//     document.getElementById('icon'+value.id).className='bx bx-chevron-up-circle bx-md';
//   //  document.getElementById('icon'+value.id).style.transition='0.3s';
//    document.getElementById('maintwoscat'+value.id).style.height='70px';
//     document.getElementById('mainids'+value.id).style.borderBottom='0px solid #e0e0e0';
//    document.getElementById('maintwoscat'+value.id).style.transition='0.3s';
//  }

}


</script>






<!-- <button id="btm" onclick="testyt()">BTM</button>
<div id="tt">

</div> -->


<div id="renderList"></div>

<script>
  var i=0;


  function myFunctiontffffwo(id){

        var s=document.getElementById(id.id);
        const parsedData = JSON.parse(datasave);
        var ul = document.createElement('ul');
        ul.setAttribute('id','last');
        let getid=id.id;
        const filterByDate = (getid) => {
        return parsedData.sub_catgory.filter(item => item.sub_catagory_id === getid);
          };

    const filteredCategories = filterByDate(''+getid);
    filteredCategories.forEach(item => {
        var li = document.createElement('li');
        li.setAttribute('class','itemlast');
        li.setAttribute('id',item.id);
      //  li.addEventListener("click", function(){ myFunctiontffffwo(li.id)});
        li.innerHTML=li.innerHTML + item.sub_catagory_name;  
        ul.appendChild(li);
        s.appendChild(ul);
      });
      }
      

      function temmsu(id){

        if(bntclick===0){
          bntclick=1;
          console.log('on')

          let getdi=id.id;
        var s=document.getElementById('dd'+id.id);
        s.style.color = "#ff0000";
        const parsedData = JSON.parse(datasave);
        var ul = document.createElement('ul');
        ul.setAttribute('id','pppdd');
        ul.setAttribute('class','catagorys');

      const filterByDate = (getdi) => {
       return parsedData.catagory.filter(item => item.catagory_id === getdi);
          };

    const filteredCategories = filterByDate(''+getdi);
    console.log("Filtered Categories:", filteredCategories);

        filteredCategories.forEach(item => {
        var li = document.createElement('li');
        var ii=document.createElement('i');
        ii.className="bx bx-chevron-down-circle bx-md";
        ii.setAttribute('id',item.id);
       ii.setAttribute('onclick','myFunctiontffffwo(this)');
       li.appendChild(ii);
        li.setAttribute('class','itemwo');
        li.setAttribute('id',item.id);
        li.innerHTML=li.innerHTML + item.catagory_name;  
        ul.appendChild(li);
        s.appendChild(ul);
      });




        }else{
          console.log('off')
          bntclick=0;
           var element = document.getElementById('pppdd');
           element.style.height="0px";
         element.setAttribute('class','catagorystwo');

        }

        
      }
</script>


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









// Function to display categories
function displayCategories(data) {
  const parsedData = JSON.parse(data);

  parsedData.catagory.forEach(item => {
  console.log(`ID: ${item.catagory_id}`);
});


  const tableBody = document.getElementById("categoryTable");

 // tableBody.innerHTML = ""; // Clear table
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


  //  tableBody.insertAdjacentHTML("beforeend", row);
  });
}


// Initial display


function test(ids){
  const parsedData = JSON.parse(datasave);
    const filterByDate = (id) => {
  return parsedData.catagory.filter(item => item.catagory_id === id);
  };
    const filteredCategories = filterByDate(''+ids);
    console.log("Filtered Categories:", filteredCategories);
}
  </script>




  
@endsection
