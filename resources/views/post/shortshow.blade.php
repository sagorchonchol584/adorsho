<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style>
table, th, td {
  border:1px solid black;
}
</style>
  </head>
  <body>
    <h2>A basic HTML table .....shortshow.php</h2>

<table style="width:50%">
  <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>action</th>
  </tr>


<?php
foreach ($posts as $post){
?>
<tr>
  <td><?php  echo $post->id;  ?></td>
  <td><?php  echo $post->name;  ?></td>
  <td><?php  echo $post->email ;  ?></td>
  <td><a href="<?php echo url('/post/show',$post->id);?>">Show</a>
     ||<a href="<?php echo url('/post/update',$post->id);?>">Edit</a>
     ||
<form action="<?php echo url('/post/delete',$post->id);?>" method="post" >
  <?php echo csrf_field(); ?>
  
  @csrf
  @method('DELETE')
  
<input hidden type="text" name="_method" value="DELETE">
<button>Delete</button>
</form>

</tr>

<?php
}

 ?>


</table>
  </body>
</html>
