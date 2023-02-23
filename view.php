<html>
  <head>
    <style>
      .update, .delete{
      background-color: blue;
      color: white;
      border: 0;
      outline: none;
      border-radius: 4px;
      height: 23px;
      width: 80px;
      font-weight: bold;
      cursor: pointer;
    }
    .update:hover,
    .delete:hover {
      opacity: 0.5;
    }
    .delete{
      background-color: red;
    }
    h2{
      text-align: center;
      background-color: blanchedalmond;
      width: 20%;
      margin-left: 40%;
      font-style: italic;
    }
    </style>
  </head>
</html>

<?php 
include("config.php");

$query = "SELECT * FROM client";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);




if($total !=0)
{ 
  ?>
      <h2>Data</h2>
     <table border="4" cellpadding="3" cellspacing="8" width="97%"> 
      <tr>
      <th width="5%">ID</th>
      <th width="10%">First Name</th>
      <th width="10%">Last Name</th>
      <th width="10%">Password</th>
      <th width="10%">Gender</th>
      <th width="20%">Email</th>
      <th width="10%">Phone</th>
      <th width="5%">Age</th>
      <th width="5%">State</th>
      <th width="12%">Action</th>
      </tr>


     <?php

     while($result = mysqli_fetch_assoc($data))
     {
        echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['fname']."</td>
                <td>".$result['lname']."</td>
                <td>".$result['password']."</td>
                <td>".$result['gender']."</td>
                <td>".$result['email']."</td>
                <td>".$result['phone']."</td>
                <td>".$result['age']."</td>
                <td>".$result['state']."</td>

                <td><a href='update.php?id=$result[id]'><input type='submit' value='Update' class='update'></a>
                  <a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick = 'return checkdelete()'></a></td>
                  
        </tr>";
     }
}
else
{
  echo "No records found";
}
?>
</table>

<script>
     function checkdelete()
     {
      return confirm('Are you sure you want to delete?');
     }
</script>

