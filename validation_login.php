<?php
$full_name=$_POST['username'];
$password=$_POST['password'];
$nameError="";
$passwordError="";
$ErrMsg="";

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

if (empty($password)) {
$nameError = "Name is required</br>";
echo $passwordError;
} else {
if (!preg_match("(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}", $password)) {  
    $ErrMsg = "Only alphabets and whitespace are allowed.</br>";  
             echo $ErrMsg;  
} else {  
    echo $password."</br>";  
}
}
?>