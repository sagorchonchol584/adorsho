@extends('layout.master')
@section('content')

<div class="row">
<div class="col-12 h-80">
				
<div class="top_breadc">
	<div class="top_breadcone"><i class='bx bxs-dashboard bx-lg card' ></i></div>
	  <div class="top_breadctwo">
	    <span class="breade_color">Supplier page</span>
		<p class="breaderr">This is product supplier page add information whole store.</p>   
      </div>
</div>	
</div>
</div>

<div class="row"> 
<div class="col-12 h-60">
<!--This is a follder opening show -->
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb"> 
    <li class="breadcrumb-item"><i class='bx bx-home bx-sm' ></i></li>
    <li class="breadcrumb-item"><a class="breade" href="#">Supplier</a></li>
    @foreach(Request::segments() as $segment)
    <li  class="breadcrumb-item"> <a href="#" class="breade">{{$segment}} </a> </li>
    @endforeach
</ol>
</nav>
</div>
</div>



<h3>A demonstration of how to access a Checkbox</h3>

Checkbox: <input type="checkbox" id="myChecka" value="5"><br>
Checkbox: <input type="checkbox" id="myChecka" value="6"><br>
Checkbox: <input type="checkbox" id="myChecka" value="15"><br>
Checkbox: <input type="checkbox" id="myChecka" value="51"><br>
Checkbox: <input type="checkbox" id="myChecka" value="59"><br>
Checkbox: <input type="checkbox" id="myChecka" value="65"><br>
Checkbox: <input type="checkbox" id="myChecka" value="50"><br>

<p>Click the "Try it" button to check the checkbox.</p>
<span id="meass">message</span>
<button onclick="myFunction()">Try it</button>
<button onclick="myFunctiontwo()">networks</button>
<script>

var nodeList = document.querySelectorAll("#myChecka");
var meass=document.getElementById('meass');

let count=0;
let addtionmath=0;

console.log(nodeList);

for (let i = 0; i < nodeList.length; i++) {
 nodeList[i].addEventListener("click",function(){
  single_funation(nodeList[i].value,nodeList[i]);
 // console.log(nodeList[i].value);
 });

    }

function single_funation(datas,btn){

  if(btn.checked===true){
    addtionmath+=parseInt(datas);
  }else{
    addtionmath-=parseInt(datas);
  } 
  //console.log(datas);
  console.log(addtionmath);
}


function myFunction() {
  addtionmath=0;
  if(count===0){
    count=1;
    for (let i = 0; i < nodeList.length; i++) {
    nodeList[i].checked = true;
//console.log(nodeList[i].value);
datatranfer(nodeList[i].value);
addtionmath+=parseInt(nodeList[i].value);
console.log(addtionmath);
    }

  }else{
    count=0;

    for (let i = 0; i < nodeList.length; i++) {
    nodeList[i].checked = false;}
  }

 // var x = document.getElementById("myCheck");

 // x.checked = true;
}

function myFunctiontwo() {
 

$.ajax({
    type: 'GET', //THIS NEEDS TO BE GET
    url: '/chacking/102030405060',
    success: function (data) {
     //  console.log("date add refurn value"+data); 
      meass.innerHTML="Data loadded"+data;
		
    },
    error: function() { 
      meass.innerHTML="Data failed";
        // console.log(data);
    }
   });
  }

  function datatranfer(barcodes) {
 

 $.ajax({
     type: 'GET', //THIS NEEDS TO BE GET
     url: '/chacking/'+barcodes,
     success: function (data) {
      //  console.log("date add refurn value"+data); 
       meass.innerHTML="Data loadded"+data;
     
     },
     error: function() { 
       meass.innerHTML="Data failed";
         // console.log(data);
     }
    });
   }

</script>






@endsection