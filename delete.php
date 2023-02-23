<?php 
include ("config.php");

$id = $_GET['id'];

$query = "DELETE  FROM client where id= '$id'";
$data = mysqli_query($conn, $query);

if($data)
{
  echo "<script>alert('Record Deleted')</script>";
  ?>

     <meta http-equiv = "refresh" content = "2; url =http://localhost:8080/form%20crud/view.php " />

  <?php
}
else{
  echo "Failed to Delete";
}
?>