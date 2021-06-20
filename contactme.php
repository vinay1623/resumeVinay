<html>
<head>
<style>
div.a {
  font-size: 40px;
  align:center;
}

p{
  font-size: 40px;
}
div.b {
  font-size: 30px;
}
div.c {
  font-size: 20px;
}
.button{
background-color: #000;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1{

  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

#aDiv{width: 300px; height: 300px; margin: 0 auto;}

.myDiv {
  background-color: #b5d51d;
  height: 285px;
  width: 100%;
  
}
div.a {
  font-size: 40px;
}

.error {color: #FF0001;} 





form {   
		width: 40%;
        border: 0px solid #f1f1f1;   
		position: absolute;
  left: 400px; 
		
    }   
 input[type=text], input[type=password],textarea {   
 align:center;
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid #e7e9eb;   
        box-sizing: border-box;   
		border-radius: 5px;
    }  
	
	
	
	
	.container { 
 border-radius: 10px;
        padding: 25px;   
        background-color: #F2F2F2; 
		
    } 
.button{
background-color: #000;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
}





</style>
<title>
Resume
</title>


<script>
function validateForm() {
	
	
	var name_check	= /^[A-Za-z' ]+$/;   
		
		 var mailformat = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
	
	
	
  var name = document.forms["form"]["name"].value;
  var mobile = document.forms["form"]["mobile"].value;
  var email = document.forms["form"]["email"].value;
  
   if(name=="" || name==null)
		   {
			  
			   document.getElementById("nameError").innerHTML="*Name should not be empty..!!";
			   return false;
		   }
		   else if(name.length<3)
		   {
			   document.getElementById("nameError").innerHTML="*Name must be atleast 3 characters..!!";
			   return false;
		   }
		    else if(name.length>20)
		   {
			   document.getElementById("nameError").innerHTML="*Name must be less than 20 characters..!!";
			   return false;
		   }
		   else if(!name.match(name_check))
		   {
			   document.getElementById("nameError").innerHTML="*Name must be alphabets only.!!";
			   return false;
		   }
		   
		   
		   
		   console.log("the mobile is ",mobile);
		    var num_check=/^[0-9]+$/;
			if(mobile=="")
			{
				document.getElementById("mobileError").innerHTML="*mobile number empty.";
			   return false;
			}
}






	
		   
		   
		
		  





</script>

</head>
<body>

<?php
$nameErr = $emailError = $mobileError ="";
$name = $email = $mobile =  "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } 
  else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["name"])) {
    $mobileError = "Mobile is required";
  } else {
    $mobile = test_input($_POST["mobile"]);
    if (!preg_match('/^[0-9]{10}+$/', $mobile)) {
      $mobileError = "10 digit Number"; 
    }
  }
  if (empty($_POST["email"])) {
    $emailError = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email format"; 
    }
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="myDiv">


<img src="man.jpg" alt="image_of_man" align="left">

<div class="a"style="font-family: 'Lato', sans-serif;">DEVLOPER NAME</div>
<div class="b"style="font-family: 'Lato', sans-serif;">Web Devloper</div>
<div class="c"style="font-family: 'Lato', sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed pellentesque neque. Etiam sodales orci sed odio tristique vestibulum. Curabitur aliquam dui sed orci viverra, non vehicula fells auctor. Aenean sit amet consequat nulla, non volutpat odio. Nullam elementum tortor diam. 


</div>



</div>

<div style="container"; >

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  name="form" >


<p style="font-family: 'Lato', sans-serif;">
CONTACT ME 
</p>
<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed pellentesque neque. Etiam sodales orci sed olio tristique vestibulum. Curabitur aliquam dui sed orci viverra, non vehicula fells auctor. 
</h4>

  <label for="full_name" align="left"style="font-family: 'Lato', sans-serif;"><b>FULL NAME</b></label></br>
  <input type="text"  id="full_name" name="name" placeholder="Exaple Name" style="font-family: 'Lato', sans-serif;">
 
	<span class="error"style="font-family: 'Lato', sans-serif;" id="nameError"> </span>

  
  
</br></br>
  <label for="mobile" align="left"style="font-family: 'Lato', sans-serif;"><b>MOBILE</b></label></br>
  <input type="text" id="mobile" name="mobile" placeholder="1234567890" style="font-family: 'Lato', sans-serif;">
 <span class="error"style="font-family: 'Lato', sans-serif;" id="mobileError"> </span>
  



  </br></br>
  <label for="email" align="left" style="font-family: 'Lato', sans-serif;"><b>EMAIL</b></label></br>
  <input type="text"  id="email" name="email" placeholder="example@mail.com" style="font-family: 'Lato', sans-serif;">
  <span class="error"style="font-family: 'Lato', sans-serif;"id="emailError"> </span>
 
 
  
  </br></br>
  <label for="MESSAGE" align="left" style="font-family: 'Lato', sans-serif;"><b>MESSAGE</b></label></br>
  <textarea id="w3review" rows="6" cols="83" placeholder="Some Message" name="message" style="border-radius: 5px"></textarea>
  </br></br>
  <button type="button" class="button1" style="margin-left: 48% ; border-radius: 5px;"style="font-family: 'Lato', sans-serif;">Back</button>
  <button type="submit" class="button"style="margin-left: 10%; border-radius: 5px;" name="submit" style="font-family: 'Lato', sans-serif;" onclick="event.preventDefault(); validateForm();">Submit</button>
  
</form>

</div>
<?php
include 'conn.php';

if(isset($_POST['submit'])){
 

$full_name=$_POST['name'];
$mobile_no=$_POST['mobile'];
$email_id=$_POST['email'];
$message_id=$_POST['message'];

if($full_name !="" && $mobile_no!="" && $email_id!=""){

$sql_query=" INSERT INTO user_info(fullname,mobile,email,message,date_time)
               VALUES ('$full_name','$mobile_no','$email_id','$message_id',now()) ";
$res=mysqli_query($conn,$sql_query);



if($res){
  ?>
  <script>
  alert("data saved to databse");
	</script>
	<?php
}
else
{
  ?>
<script>
alert("data saved to databse");
	</script>
<?php
}
mysqli_close($conn);
 }
}else
{
	
}

 ?>



</body>
</html>
