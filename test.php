
<html>
<script>
function h(){


var a=<?php echo "hi"; ?>+1;


document.getElementById("p").innerHTML=a;
}
</script>
<body>
<p id='p' OnClick="h()" > hi vinay</p>

</body>
<?php



function read(){
	
		$id=37;

		include 'conn.php';
	
	
		
		 $res="update user_info set read_unread ='0' where id=".$id;
		 $q=mysqli_query($conn,$res);
		 if($q)
		 {
			 echo "set id".$id;
		 }
		 else
		 {
			 echo "not set id to 1";
		 }
}
		 
?>



</html>