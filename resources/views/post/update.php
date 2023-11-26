<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <p>hello method postcontra......Update.php </p>
  <?php

  foreach ($posts as $post){

    ?>

  <form action="<?php echo url('post/editupdate',$post->Adminid); ?>" method="post">
    <?php echo csrf_field(); 
      ?>


	
  <input type="text" name="name" value="<?php echo $post->Name; ?>"></br></br>
  <input type="text" name="email" value="<?php echo $post->email."@gamil.com";?>"></br></br>
  <button>Sumit</button>

  </form>
  <?php
  }

   ?>
</html>
