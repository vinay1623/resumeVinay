<!DOCTYPE html>   

<?php

session_start();



?>

<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: #b5d51d;  
}  
 
 form {   
		width: 40%;
        border: 0px solid #f1f1f1;   
		
    }   
 input[type=text], input[type=password] {   
 align:center;
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        border: 0px #fff;   
        box-sizing: border-box;   
		border-radius: 5px;
    }  
 
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container { 
        padding: 25px;   
        background-color: #F2F2F2;  
		border-radius: 10px;
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
</style>   
</head>    
<body>  
</br>
</br>  
    <center> <p style="color: #fff;">ADMIN PANEL</p></center>   
	</br></br>
    <form style="margin-left: 30%;padding :2px" method="POST" action = "<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">  
        <div class="container" >   
		<h2>LOGIN</h2>
            <label>USERNAME : </label>   </br>
            <input type="text" placeholder="Enter Username" name="name" required>  
			</br>
            <label>PASSWORD : </label>   </br>
            <input type="password" placeholder="************" name="password" required>  
			<a href="enterUserID.php" style="text-decoration: none; color:#000">Forgot password? </a>   
            <button type="submit" class="button"style="margin-left: 75%;border-radius: 5px;" name="submit" >LOGIN</button>   
            
        </div>   
    </form>   	
<?php

include 'conn.php';

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];

    $query=" SELECT * FROM userlogin where name = '".$name."'";
	
	$q=" SELECT password from userlogin where name='".$name."';";
	
	$res=mysqli_query($conn,$query);
	
	
	$num=mysqli_num_rows($res);
	
	if($num){
		
		$decode_password=md5($password);
		
		
		
		while($row = $res->fetch_assoc()) {
		$fatch_password=$row["password"];
		
		
		if($fatch_password==$decode_password)
		{
			
		
			
			
			
			$_SESSION['username']=$name;
		
			
			header('location:messagepage.php?id=0');
		}
		else{
			echo "password incorrect!!! try again...";
		}
		}
		
		
    }
	else {
    echo "user not found.";
         }
	
	

$conn->close();
     
	 
	 
	

}

?>

</body>     
</html>  