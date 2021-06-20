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



#partitioned {
  padding-left: 15px;
  letter-spacing: 37px;
  border: 0;
  background-image: linear-gradient(to left, black 70%, rgba(255, 255, 255, 0) 0%);
  background-position: bottom;
  background-size: 50px 1px;
  background-repeat: repeat-x;
  background-position-x: 35px;
  width: 220px;
}
</style>   
</head>    
<body>  
</br>
</br>  
    <center> <p style="color: #fff;">ENTER OTP</p></center>   
	</br></br>
    <form style="margin-left: 30%;padding :2px" method="POST" action = "<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">  
        <div class="container" >   
		<h2>ENTER OTP</h2>
            <label>OTP : </label>   </br>
            <input id="partitioned" type="text"  name="otp" maxlength="4" /> </br>
            <button type="submit" class="button"style="margin-left: %;border-radius: 5px;" name="submit">VERIFY OTP</button>   
            
        </div>   
    </form>
	<?php
	include 'conn.php';
	
	if(isset($_POST['submit']))
	{
		$name=$_SESSION['userid'];
		$otp=$_POST['otp'];
		$query=" SELECT (OTP) FROM userlogin WHERE name='".$name."';";
		$res=mysqli_query($conn,$query);
		$rows=mysqli_num_rows($res);
		
		if($rows)
		{
			while($row=$res->fetch_assoc())
			{
				$fetch_OTP=$row['OTP'];
				if($fetch_OTP==$otp)
				{
					header('location:setNewPassword.php');
				}
				else
				{
					echo "Invalid otp";
				}
			}
		}
		
		
	}
	
	?>
	
	</body>
	</html>