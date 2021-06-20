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
        display: inline-block;   
        border: 2px solid #fff;   
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
    <center> <p style="color: #fff;">PASSWORD PANEL</p></center>   
	</br></br>
    <form style="margin-left: 30%;padding :2px" method="POST" action = "<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">  
        <div class="container" >   
		<h2>SET PASSWORD</h2>
            <label>NEW PASSWORD : </label>   </br>
            <input type="password" placeholder="************" name="passwordOne" required>  
			</br>
            <label>RE-ENTER PASSWORD : </label>   </br>
            <input type="password" placeholder="************" name="passwordTwo" required>   
            <button type="submit" class="button"style="margin-left: 25%;border-radius: 5px;" name="submit">CHANGE PASSWORD</button>   
            
        </div>   
    </form>   	
<?php

include 'conn.php';

if(isset($_POST['submit']))
{
    $name=$_SESSION['userid'];
	$passwordOne=$_POST['passwordOne'];
	$passwordTwo=$_POST['passwordTwo'];

    $query=" SELECT * FROM userlogin where name = '".$name."'";
	
	
	$res=mysqli_query($conn,$query);
	
	
	$num=mysqli_num_rows($res);
	
	if($num){
		
		if($passwordOne==$passwordTwo)
		{
			$message='27';
			$q=" update userlogin set password=md5('".$passwordOne."') where name=('".$name."')";
			$result=mysqli_query($conn,$q);
			if($result)
			{
				
				echo "<script>if(alert(".$message.")) {
                      
                   }</script>";
				header('location:login.php');
			}
			
		
		
		}
		else{
			echo "password not matched please check again.";
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