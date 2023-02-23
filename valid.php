 <?php 

    //call d error
    $fnameErr = $lnameErr = $passwordErr = $genderErr = $emailErr = $phoneErr = $stateErr = $ageErr = " ";          
    $fname = $lname = $password = $gender = $email = $phone = $state = $age = " "; //ready
    //call the method
  if ($_SERVER['REQUEST_METHOD'] == "POST"){ 
    
    //to server request method
    //validate name...
  
    if(empty($_POST['fname'])){
      $fnameErr = "First Name is required*";
    }
    else{
      $fname = input_data($_POST['fname']);
      if(!preg_match("/^[a-zA-Z ]*$/",$fname)){ 
        //regular expression
  $fnameErr = "Only alphabets and white space are allowed";
      }
    }
    if(empty($_POST['lname'])){
      $lnameErr = "Last Name is required*";
    }
    else{
      $lname = input_data($_POST['lname']);
      if(!preg_match("/^[a-zA-Z ]*$/",$lname)){ 
        //regular expression
  $lnameErr = "Only alphabets and white space are allowed";
      }
    }
    //validate email
  if(empty($_POST['email'])){
    $emailErr = "Email is required*";
  }
  else{
    $email = input_data($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
      //its a special character for email validating...
      $emailErr = "Invalid email Format";
    } 
 } 
 
 //validating phone number...
 if(empty($_POST['phone'])){
  $phoneErr= "Phone number is required";
 }
 else{
  $phone = Input_data($_POST['phone']);
  if(!preg_match("/^[0-9]*$/",$phone)){
    $phoneErr = "Only numeric value is allowed";
  }
  else if (strlen($phone) !=10){
    $phoneErr = "Phone number must contain 10 digits";
  }
 }
 //Validates password .
 if(!empty($_POST["password"])) {
  $passwordErr = "password is required";
 }
 else{
  $password=input_data($_POST["password"]);
  if (strlen($_POST["password"]) <= '8') {
      $passwordErr = "Your Password Must Contain At Least 8 Characters!";
  }
  elseif(!preg_match("#[0-9]+#",$password)) {
      $passwordErr = "Your Password Must Contain At Least 1 Number!";
  }
  elseif(!preg_match("#[A-Z]+#",$password)) {
      $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
  }
  elseif(!preg_match("#[a-z]+#",$password)) {
      $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
  }
}
//Gender validating...
if(empty($_POST['gender'])){
  $genderErr = "Gender is required*";
}
else{
  $gender = Input_data($_POST['gender']);
}
//validate age...
if(empty($_POST['age'])){
  $ageErr = "age is required*";
}
 else{
   $age = Input_data($_POST['age']);
  }
  //state validating...
if(empty($_POST['state'])){
  $stateErr = "Select your state*";
}
else{
  $state = Input_data($_POST['state']);
}
  
}

  function input_data($data){
    $data = trim($data); //remove the white spaces ending nd beginning
    $data = stripslashes($data); //remove the un quoted
    $data = htmlspecialchars($data); //remove all the special characters
    return $data;
  } 

  ?>