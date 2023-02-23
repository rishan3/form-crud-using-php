<?php 
$severname = "localhost";   //db =server ,table= client 
$username = "root";
$password = "";
$dbname = "server";

$conn = mysqli_connect($severname,$username,$password,$dbname);
if($conn)
{
  // echo "Connection ok";
}
else
{ 
  echo "Connection failed";
}
?>