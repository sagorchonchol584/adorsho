<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>show</title>
  </head>
  <body>
	  <h1 style="color: red;">hello ..........show.php</h1>
<?php

foreach ($posts as $post){

  ?>
<h1> <?php echo $post->Name; ?></h1>
<h1> <?php echo $post->email; ?></h1>
<?php
}

 ?>
  </body>
</html>
