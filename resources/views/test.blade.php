<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>my first projcet laravel </title>
  </head>
  <body>

<p>hello method postcontra....................test.blade.php </p>


<form action="<?php echo url('post/store'); ?>" method="post">
  <?php echo csrf_field(); ?>
<input type="text" name="name" value="sagor"></br></br>
<input type="text" name="email" value="i am boss"></br></br>
<input type="text" name="password" value="dfdfdfdf"></br></br>
<button>Sumit</button>

</form>



<form action="<?php echo url('/post/systems'); ?>" method="post">
  <?php echo csrf_field(); ?>
<input type="text" name="company_Id" value="sagor"></br></br>
<input type="text" name="company_Name" value="i am boss"></br></br>
<input type="text" name="date" value="<?php echo date("Y-m-d"); ?>"></br></br>

<button>Sumit</button>

</form>



  </body>
</html>
