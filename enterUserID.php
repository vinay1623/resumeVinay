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
}	
</style>   
</head>    
<body>  
</br>
</br>  
    <center> <p style="color: #fff;">FORGOT PASSWORD</p></center>   
	</br></br>
    <form style="margin-left: 30%;padding :2px" method="POST" action = "<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">  
        <div class="container" >   
		<h2>ENTER USERNAME</h2>
            <label>USERNAME : </label>   </br>
            <input type="text" placeholder="Enter Username" name="name" required>  
            <button type="submit" class="button"style="margin-left: %;border-radius: 5px;" name="submit">SUBMIT</button>   
            
        </div>   
    </form>
	<?php
	include 'conn.php';
	
	if(isset($_POST['submit']))
	{
	
		$name=$_POST['name'];
		
		$query=" SELECT * FROM userlogin where name = '".$name."'";
		$result=mysqli_query($conn,$query);
		$res=mysqli_num_rows($result);
		if($res)
		{
			$random=rand(1000,9999);
			$q="update userlogin set OTP=('".$random."') where name='".$name."'";
			$re=mysqli_query($conn,$q);
			if($re)
			{
			//echo "<script> if(alert('$random');</script>";  
			$_SESSION['userid']=$name;
			echo "<script>if(confirm(".$random.")) {
                      window.location.href ='otp.php'
                   }</script>";
			}
			
			
		}else
		{
			echo "username not exist.";
		}
		
	}
	
	?>
	
	</body>
	</html>