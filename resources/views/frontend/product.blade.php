@extends('layout.master')
@section('content')
<div class="col-12 h-900">
<div class="row">
	<div class="col-3 h-150">ii</div>
	<div class="col-3 h-150">ii</div>
	<div class="col-3 h-150">ii</div>
	<div class="col-3 h-150">ii</div>
</div>

<div class="row">
	<div class="col-9 h-500">
		<a href="{{ route('home')}}"  class="textand" >home</a>
		<a href="{{ route('product')}}"  class="textand" >product</a>
		<a href="{{ route('oder')}}"  class="textand" >oder</a>
		<a href="{{ route('customer')}}"  class="textand" >customer</a>

		<h1>Product page</h1>
		
		
		
		
		<div class="full_from">
<div class="form_hand card">
<div class="p-5 col-6">

{{ route('customerdateAdd')}}

<form action="#"  onsubmit="suct()">
  <?php echo csrf_field(); ?>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" name="customer_name" aria-describedby="emailHelp" placeholder="Name" required>
  </div> <br/>
  
  <div class="form-group">
    <input type="phone" min="11" class="form-control" id="inputPhone" maxlength="11" name="mobile" placeholder="Mobile"  required>
  </div><br/>
  
   <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" name="address" placeholder="address" required>
  </div><br/>
<button class="btn btn-primary" >Submit</button>
  
</form>

<script>
	function suct(){

swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
  button: "OK",
});
}
</script>
		
		
		
		
		
		
		
		
	</div>
	<div class="col-3 h-500">ii</div>
</div>


<div class="row">
	<div class="col-4 h-250">ii</div>
	<div class="col-4 h-250">ii</div>
	<div class="col-4 h-250">ii</div>
</div>
@endsection
