<?php
$full_name=$_POST['name'];
$mobile_no=$_POST['mobile'];
$email_id=$_POST['email'];
$ErrMsg="error";
$nameError="";
$emailError="";
$mobileError="";

if (empty($full_name)) {
$nameError = "Name is required</br>";
echo $nameError;
} else {
if (!preg_match("/^[a-zA-Z ]*$/", $full_name)) {  
    $ErrMsg = "Only alphabets and whitespace are allowed.</br>";  
             echo $ErrMsg;  
} else {  
    echo $full_name."</br>";  
}
}


if (empty($mobile_no)) {
$mobileError = "Mobile number is required</br>";
} else {
if (!preg_match ("/^[0-9]*$/", $mobile_no) ){  
    $ErrMsg = "Only numeric value is allowed.</br>";  
    echo $ErrMsg;  
} else {  
    
} 
}


if (empty($email_id)) {
$emailError = "Email is required</br>";
} else {
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
if (!preg_match ($pattern, $email_id) ){  
    $ErrMsg = "Email is not valid.";  
            echo $ErrMsg."</br>";  
} else {
	echo "<h3>thank you to conact us.!!<h3>";
	
}
}



?>