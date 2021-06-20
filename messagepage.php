<?php

$count_unread=0;
if (isset($_GET['id'])) {
	include 'conn.php';
		 $id_get=$_GET['id'];
		 $q="update user_info set read_unread='1' where id=".$id_get;
		 $qu="select count(*) from user_info where read_unread=0";
		 $re=mysqli_query($conn,$q);
		 $result=mysqli_query($conn,$qu);
		 $row = mysqli_fetch_array($result);
         $co = $row['count(*)'];
}
		 
		 
		 
session_start();

if(!isset($_SESSION['username'])){

	header('location:login.php');
}

?>

<html>

<head>



<style> 




#scroll {
                margin:4px, 4px;
                padding:4px;
                background-color: green;
                width: 500px;
                height: 110px;
                overflow-x: hidden;
                overflow-y: auto;
                text-align:justify;
            }









#div1{
	
	background-color: #b5d51d;
  height: 100px;
  width: 100%;
  border-radius: 10px;
}
img {
	margin-left: 40%;
	width: 75px;
  height: 75px;
   border: 5px solid #fff;
  border-radius: 50%;
  padding: 5px;
}

#div_welcome{
	float: left;
	
	margin-left:4% ;
	
}
#div_name
{
	
	
	margin-left:11.5% ;
	font-weight: bold;
	
}
#b1 {
    border: none;
    background: none;
    cursor: pointer;
    margin: 0;
    padding: 0;
	
}

#left{
	padding-top:40pt;
	margin-left: 4%;
	
}
#bold{
	font-weight: bold;
}
#left2{
	overflow-y: auto;
	padding-top:00pt;
	margin-left: 0%;
	border: 1px solid #e7e9eb;
	height: 600px;
  width: 25%;
  
              
}
#left1{
	padding-top:00pt;
	margin-left: 4%;
	border: 1px solid #e7e9eb;
	height: 600px;
  width: 90%;
}
#left3
{
	height: 600px;
	border: 1px solid #e7e9eb;
	float: right;
	width:74.6%;
	
}
#text1{
	font-weight: bold;
	color:#000;
	font-size:15pt;
}
#left4
{
	
	height: 400px;
}

#left5
{
	border: 1px solid #e7e9eb;
	height: 50px;
	padding: 5pt;
}

#image{
	height: 8px;
	width:8px;
}
a{color: #000;};



</style>



</head>

<body>

<?php

	include 'conn.php';

$name=$_SESSION['username'];

$fullname="";
$mobile="";
$email="";
$message="";
$date_time="";
$info="";
$read_unread="";
$brandColor = "";



$recipient="SELECT * from user_info";
$res=mysqli_query($conn,$recipient);
$result=mysqli_num_rows($res);
$count=0;

if($result)
{
while($row=$res->fetch_assoc())
			{
				$id_info[]=$row['id'];
				$fullname[]=$row['fullname'];
				
				$mobile[]=$row['mobile'];
				$email[]=$row['email'];
				$message[]=$row['message'];
				$date_time[]=$row['date_time'];
				$read_unread[]=$row['read_unread'];
				$count++;
				
				
			}
			
			
			
			
			
			
			
			
			function trimm($a){
				$str= substr($a, 0, 10);
				echo $a;
				
			}
			
			
		
		 
		 
		 
		
		 
		 
}
			
			
	 


 
 
if (isset($_GET['id'])) {
		$id_get=0;
		 $id_get=$_GET['id'];
		
		 $query1="SELECT fullname,mobile,email,message,date_time,read_unread from user_info where id=".$id_get;
		 
		 
 $res = mysqli_query($conn, $query1);

if ($res) {

    $row = mysqli_fetch_row($res);
    $fullname_array= $row[0];
	$mobile_array= $row[1];
	$email_array= $row[2];
	$message_array= $row[3];
	$date_time_array= $row[4];
	$read_unread_array=$row[5];
	
	
	
}

mysqli_free_result($res);
  
  
		 } 
		 
		 
		

		
 


?>








<div id="div1">
	
 <div style="float: right; padding-top:23pt;padding-right:120pt;">
 <form action="logout.php">
       <button id="b1"style="font-size:15pt;color: white;"  type="submit" name="logout">Logout</button>
 </form>
 </div>
 <div style="float: right; padding-top:20pt;padding-right:15pt;">
 <form action="logout.php">
 <button id="b1"style="font-size:15pt;color: white;"  type="submit" name="logout">
	<img id="image" src="logout.png"></img>
	</button>
	</form>
	</div>
  <div style="float: left;padding: 3px;" ><img src="man.jpg" alt="image_of_man" /></div>
 <div id="div_welcome"><p style="font-size:15pt;width: 10px;height: 10px;color: white;" style="font-family: 'Lato', sans-serif;">welcome</p></div></br>
 <div id="div_name"><p style="font-size:25pt;color: white;" style="font-family: 'Lato', sans-serif;"><?php echo $_SESSION['username'] ?></p></div>

 
</div>
</div>
<div id="left">
<h1 id="bold" style="font-family: 'Lato', sans-serif;"> MESSAGE (<?php echo $count; ?>)</h1>
<h3 id="bold" style="font-family: 'Lato', sans-serif;"><?php echo $co; ?> New Messages</h3>
</div>
<div id="left1" >
<div id="left3">

<div style="padding:10pt;">
<p id="name" style="font-weight: bolder;"style="font-family: 'Lato', sans-serif;"><b><?php echo $fullname_array; ?></b></p>
<p id="date_time"style="font-family: 'Lato', sans-serif;"> <?php echo $date_time_array;?></p>
</br>

<span><b>mob :</b></span>
<span id="number"style="font-family: 'Lato', sans-serif;"><?php echo $mobile_array;?></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span style="font-family: 'Lato', sans-serif;"><b>Email :</b></span>
<span id="email" style="font-family: 'Lato', sans-serif;"><?php echo $email_array; ?></span>
<div id="left4">
<svg height="32" width="800">
  <g fill="none">
<path stroke="#e7e9eb" d="M7 25 l2150 0" />
</g>
</svg>

<p id="message" style="font-family: 'Lato', sans-serif;"><?php echo $message_array; ?></p>

</div>
</br>
</div>


</div>



<div id="left2">

<?php    for($x = 0; $x < $count ;$x++){   ?>

<a href="messagepage.php?id=<?php echo $id_info[$x]; ?>" style="text-decoration: none;"><div id="left5"  style="opacity:<?php if($read_unread[$x]==1){echo "1";}else{echo "0.3";}?>;"><?php echo $fullname[$x]."</br>".substr($message[$x],0,31)."..."?>

</div>

</a>
<?php
}; ?>




</div>

</div>
</body>
</html>