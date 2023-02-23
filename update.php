<?php include("config.php");

$id =  $_GET['id'];

$query = "SELECT * FROM client where id= '$id'";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
 *{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
 } 
 body{
  background-color: gray;
  padding: 0 10px;
 }
 .container{
  
  max-width: 500px;
  width: 100%;
  background-color: white;
  margin: 20px auto;
  padding: 30px;
 }
 .container .title{
  font-size: 24px;
  font-weight: 600;
  margin-bottom: 25px;
  color: #D071F9;
  text-transform: uppercase;
  text-align: center;
 }
 .container .form{
  width: 100%;
 }
 .container .form .input_field{
  margin-bottom: 15px;
  display: flex;
  align-items: center;
 }
 .container .form .input_field label{
  margin-right: 10px;
  font-size: 14px;
  width: 200px;
 }
 .container .form .input_field .input{
  width: 100%;
  outline: none;
  border: 1px solid #D071F9;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.5s ease;
 }
 .container .form .input_field .input:focus,
 .container .form .input_field .select:focus{
  border: 1px solid #fec137;
 }
 .container .form .input_field .selectbox{
  position: relative;
  width: 100%;
  height: 37px;
 }
 .container .form .input_field .selectbox select{
  
  width: 100%;
  height: 40px;
  border: 1px solid #D071F9;
  -webkit-appearance: none;
  appearance: none;
  border-radius: 3px;
  outline: none;
 }
 .container .form .input_field p {
  font-size: 14px;
  color: #757575;
  
 }
 .container .form .input_field .check{
  width: 15px;
  height: 15px;
  position: relative;
  display: block;
  cursor: pointer;
 }
 .container .form .input_field .check input[type="checkbox"]{
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
 }
 .container .form .input_field .check .checkmark{
  width: 15px;
  height: 15px;
  border: 1px solid #D071F9;
  display: block;
  position: relative;
 }
 .container .form .input_field .check input[type="checkbox"]:checked ~ .checkmark {
  background: blueviolet;
 }
 .container .form .input_field .btn{
   width: 100%;
   padding: 8px 10px;
   font-size: 15px; 
   background: #D071F9;
   color: white; 
   cursor: pointer;
   border-radius: 3px;
   outline: none;
 }

</style>
<body>
  <div class="container">
    <form action="#" method="POST">
    <div class="title">Updated 
       Form</div>

    <div class="form"> 
      <div class="input_field">
        <label for="">First Name</label>
        <input type="text" value="<?php echo $result['fname']; ?>" class="input" name="fname">
      </div>

      
        <div class="input_field">
          <label for="">Last Name</label>
          <input type="text"  value="<?php echo $result['lname']; ?>" class="input" name="lname">
        </div>

        
          <div class="input_field">
            <label for="">Password</label>
            <input type="password" 
            value="<?php echo $result['password']; ?>" class="input" name="password">
          </div>

          
            <!-- <div class="input_field">
              <label for="">Confirm Password</label>
              <input type="password" class="input">
            </div> -->

            <div class="input_field">
              <label >Gender</label>

              <select name="gender" id="" class="selectbox">
                <option value="select">--select--</option>
                <option value="Male" <?php if($result['gender'] == 'male'){
                  echo "selected";
                } ?>>Male</option>
                <option value="Female"  <?php if($result['gender'] == 'female'){
                  echo "selected";
                } ?>>Female</option>
                <option value="Other">Other</option>
              </select>
          
            </div>
            
            <div class="input_field">
              <label for="">Email</label>
              <input type="email"  value="<?php echo $result['email']; ?>" class="input" name="email">
            </div>

            <div class="input_field">
              <label for="">Phone</label>
              <input type="text"  value="<?php echo $result['phone']; ?>" class="input" name="phone">
            </div>

            <div class="input_field">
              <label for="">Age</label>
              <input type="text"  value="<?php echo $result['age']; ?>" class="input" name="age">
            </div>

            <!-- radio button-->
            <div class="input_field">
              <label style="margin-right: 110px;" for="">State</label>
              <input type="radio" name="state" value="Kerala"
              
              <?php
                  if($result['state'] == 'Kerala')
                  {
                     echo "checked";
                  }
              ?>
              >
              <label style="margin-left: 5px;" for="">Kerala</label>
              <input type="radio" name="state" value="Karanataka"
              
              <?php
                  if($result['state'] == "Karnataka")
                  {
                     echo "checked";
                  }
              ?>
              >
              <label style="margin-left: 5px;" for="">Karnataka</label>
              <input type="radio" name="state" value="Tamilnadu"
              
              <?php
                  if($result['state'] == 'Tamilnadu')
                  {
                     echo "checked";
                  }
              ?>
              >
              <label style="margin-left: 5px;" for="">Tamilnadu</label >
              <input type="radio" name="state" value="Kashmir"
              
              <?php
                  if($result['state'] == 'Kashmir')
                  {
                     echo "checked";
                  }
              ?>
              >
              <label style="margin-left: 5px;" for="">Kashmir</label>

            </div>
           
            <div class="input_field terms">
              <label class="check">
              <input type="checkbox"  >
              <span class="checkmark"></span>
            </label>
            <p>Agree to terms and Conditions</p>
            </div>
             <div class="input_field">
              <input type="submit" value="Update " class="btn" name="update">
             </div>
    </div>
  </form>
  </div>
</body>
</html>

<?php 
  if($_POST['update'])
  {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $state = $_POST['state'];

    if($fname != "" && $lname != "" && $password != "" && $gender  != "" && $email != "" && $phone != "" && $age != "" && $state != "")
    {
    
  $query =  "UPDATE client set fname='$fname', lname='$lname',password='$password', gender='$gender', email='$email', phone='$phone', age='$age', state='$state' WHERE id='$id'"; 
  
  $data = mysqli_query($conn,$query);

  if($data)
  {
    echo "<script>alert('Updated Succesfully')</script>";
    ?>
       <meta http-equiv = "refresh" content = "1; url =http://localhost:8080/form%20crud/view.php " /> <!-- redirect -->

    <?php 
  }
  else 
  {
    echo "Fail to update";
  }
}
 else
 {
   echo "<script>alert('Fill the form first');</script>";
 }
  }
?>