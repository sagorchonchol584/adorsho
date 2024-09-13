
let count=0;
var allselect=document.getElementById("cashselect");
var cashsentbtm=document.getElementById("cashsent");
cashsentbtm.disabled=true;



allselect.addEventListener("click",allsetect_function);      


function allsetect_function(){
  
 var nodeList = document.querySelectorAll("#cashfun");
  if(count===0){
    count=1;
	cashsent.disabled=false;
    for (let i = 0; i < nodeList.length; i++) {
    nodeList[i].checked = true;
    }
  }else{
    count=0;
 	cashsent.disabled=true;
    for (let i = 0; i < nodeList.length; i++) {
    nodeList[i].checked = false;
  }
  }

}
	


function all_cash_show(){
  
 var nodeList = document.querySelectorAll("#cashfun");
    for (let i = 0; i < nodeList.length; i++) {
      sentdatacash(nodeList[i].value);
    }
}



function cashconfim(){
  conframcash();

}


function conframcash(){
 
  swal({
    title: "Are you sure?",
    text: "you will not be able to recover this imaginary data!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      swal("Your data Sent ", {
        icon: "success",
      }).then(function(){
      
        all_cash_show()
      });
  
    } else {
      swal("Do you want Exit ?",{
        closeOnClickOutside: false,
      }).then((mee)=>{
  
        //---------this pop alert---------
      
      });
    }
  });

    }


    function sentdatacash(idcahs){


      $.ajaxSetup({
                headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
             });
     $.ajax({
         type: 'POST', //THIS NEEDS TO BE GET
         url: '/cashshowadmin/',
         data: {id:idcahs}, 
         success: function (data) {
            console.log(data); 
         //   location.reload();
         fetch_customer_data();
         },
         error: function() { 
          // meass.innerHTML="Data failed";
          //    console.log(data);
         }
        });
    
   
    }
    
