<html>
<head><title>SAVE</title></head>
<body background="alumnae.png">
<center>
<?php
if( !empty($_POST['name']))
{
	$nm =$_POST['name'];
	$ad =$_POST['address'];
	$co =$_POST['contact'];
	$em =$_POST['email'];
	$pr =$_POST['profession'];
	$y =$_POST['yop'];

  $conn = mysql_connect("localhost","root","student");
if( !$conn ) {
die("could not connect to database" .mysql_error() );
exit(0);
}

mysql_select_db("web",$conn);
$sql="insert into alumnae(name,address,contact,email,profession,yop) values ('$nm','$ad','$co','$em','$pr','$y')";

if ( mysql_query($sql,$conn) ) {
	echo"<h1>User data saved</h1><hr>";
	echo "<h1><a href='wel.php'>HOME</a></h1>";
        
}else {
	echo"<h1> error while saving data</h1>". mysql_error();
}
 mysql_close($conn);
}else 
{
	echo"<h1> Please Fill the form correctly</h1>";
}
?>
</center>
</body>
</html>
