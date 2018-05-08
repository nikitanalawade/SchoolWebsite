<html>
<head>
</head>
<body background="bodyback2.png" >
<center>
<br></br>
<table bgcolor="white" cellpadding="5" cellsapcing="50" height="25%" width="75%" style="margin-top:-30px">
	<tr><td align=center style="font-family:century;font-size:72;color:#993399">JM</td><td 			align=center style="font-family:comic sans MS;font-size:30;"><b>ST.FELIX HIGH 	SCHOOL,PUNE</td></b></tr>
</table>

<table  bgcolor="339999" cellpadding="5" cellsapcing="5"  width="75%" style="margin-top:-2px">
	<tr align=center><td><a href="wel.php">HOME</a></td><td><a 		href="history.php">HISTORY</a></td><td><a href="mission.php">OUR MISSION</a></td><td><a 			href="about.php">ABOUT US</a></td><td><a href="contact.php">CONTACT US</a></td></tr>
</table>

<table bgcolor="white" cellpadding="1" cellsapcing="3" height="50%" width="20%" style="margin-right:670px;margin-top:5px">
	<tr bgcolor=#CC66FF>
<td align=center style="font-family:bradley hand itc;font-size:30;"><b>Parent's Login</b></td></tr>
	<tr><td align=center bgcolor="white"><a href="login.php"><img src="parentLogin.png"></a></td></tr>
</table>

<table  cellpadding="5" cellsapcing="5" height="50%" width="55%" style="margin-top:-285px;margin-left:250px;">
	<td align="center"><img src="convent.png"></td></tr>
</table>

<table bgcolor="white" cellpadding="1" cellsapcing="3" height="50%" width="30%" style="margin-right:550px;margin-top:5px">
	<tr><td align=center  bgcolor=#339999 colspan="2"><a href="co.php" target="_blank">CO-	CIRRICULAR ACTIVITIES</a>	</td></tr>
	<tr><td align=center  bgcolor=#339999><a href="facilities.php" 		target="_blank">FACILITIES</a></td></tr>
	<tr><td  bgcolor=#339999 align=center><a href="add.php" target="_blank">ADD-ON 	COURSES</a></td></tr>
	<tr><td  bgcolor=#339999 align=center><a href="alum.php" 		target="_blank">ALUMNAE</a></td></tr>
	<tr><td bgcolor=#339999 align=center><a href="gallery.php" 		target="_blank">GALLERY</a></td></tr>
</table>

<table cellpadding="5" cellsapcing="5" height="50%" width=45%" style="margin-top:-285px;margin-left:370px;">
	<tr><td style="font-family:cambria;font-size:20">
               <img src="clasrum.png"  align="left" style="margin-bottom:120px">
<?php
$conn=mysql_connect("localhost","root","student");
mysql_select_db("web",$conn);
$sql="select * from facilities";
$resultSet=mysql_query($sql,$conn);
echo "<table   cellspacing='5' cellpadding='5'  height='35%' width='65%' style='margin-top:10px'>";
echo "<tr><th style='font-family:arial'>CLASSROOMS</th></tr>";
$row=mysql_fetch_array($resultSet);
echo "<tr><td style='font-family:cambria'>$row[classroom]</td></tr>";
echo "</table>"
?>
</td></tr>
</table>

<table  cellpadding="5" cellsapcing="5" height="15%" width=76%">
	<td bgcolor=#FFFFCC align=center>Copyright © St. Felix High School, Pune.</td></tr>
</table>
</center>
</body>
</html>



