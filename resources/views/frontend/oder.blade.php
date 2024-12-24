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
		<a href="{{ route('overview')}}"     class="textand" >home</a>
		<a href="{{ route('product')}}"  class="textand" >product</a>
		<a href="{{ route('oder')}}"     class="textand" >oder</a>
		<a href="{{ route('customer')}}" class="textand" >customer</a>
		<h1>Oder page</h1>

	<div class="col-3 h-500">
		

</head>
<body>

<div class="bgColor">
<form action="{{route('loadertest')}}" method="post">
 <?php echo csrf_field(); ?>
<div id="targetOuter">
	<div id="targetLayer"></div>
	<div class="icon-choose-image" >
	<input name="product_barcode" id="product_barcode" type="text" class="inputFile" />
	 
	</div>
</div>
<div>
<input type="submit" value="Submit" class="btnSubmit" />
</form>

</div>

		
</div>
</div>


<div class="row">
	<div class="col-4 h-250">
	</div>
	<div class="col-4 h-250">ii</div>
	<div class="col-4 h-250">ii</div>
</div>
@endsection
