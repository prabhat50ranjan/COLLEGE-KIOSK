<html>
<head>
<style>
p{
	color:green;
	margin:10px auto;
}

a:link{
	
	color:red;
	text-decoration:none;
	
}
a:active
{
	colors:blue;
	
}
a:hover
{
	color:orange;
}
a:visited
{
color:yellow;	
	
}

</style>

<title></title>
<body bgcolor=orange>
<p style="color:red;font-size:40px;">
<?php
include 'connect.php';
echo '<br>';
if(isset($_POST['submit']))
{

	$user=$_POST['user'];
   $pass=$_POST['pass'];
$sql=mysql_query("SELECT * FROM student_info WHERE enroll_no='$user' AND password='$pass' ORDER BY enroll_no ASC");

$percentage='10_percentage';


while($rows=mysql_fetch_assoc($sql))
{
	echo 'CLASS 10 PERCENTAGE::'.$rows[$percentage];
	echo '<br>';                                              
}
}
else
{
	
	echo "connection failed";
}
?>
</p>
</body>
</html>