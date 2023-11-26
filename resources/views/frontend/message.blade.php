<!DOCTYPE html>
<html>
	<head>
	
	</head>
	<body>
	<div style="padding-left: 700px ; padding-top: 200px;">
	 <h1>hello bangldesh</h1>
    <form action="{{route('regdata')}}" method="post" >
    	<?php echo csrf_field(); ?>
	<input type="text" name="name" placeholder="name"/>     <br><br>
	<input type="text" name="email" placeholder="email"/>    <br><br>
	<input type="text" name="password" placeholder="passworld"/> <br><br>	
	<input type="text" name="Mobile" id="mobile" maxlength="11" min="11" placeholder="Mobile"/>     <br><br>
	<input type="text" name="Shopname" placeholder="Shopname"/> <br><br>
	<input type="text" name="ShopAddress" placeholder="ShopAddress"/>   <br><br>	
	<input type="text" name="AdminCat" placeholder="AdminCat" value="Admin"/> <br><br>	
	<input type="text" name="MobileVerifa" placeholder="MobileVerifa" value="OK"/> <br><br>	
	<input type="text" name="ProfileImage" placeholder="ProfileImage" value="OKfgfgfggf"/> <br><br>	
	<input type="text" name="UpdateProfileCout" placeholder="UpdateProfileCout" value="10"/> <br><br>

 

	<button type="submit"> Submit </button>
    </form>
	</div>
	<a href="{{route('login')}}" >login</a>
	
	<a href="{{route('gggg')}}" >show</a>

	</body>
</html>