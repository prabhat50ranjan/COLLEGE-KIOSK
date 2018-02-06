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
</head>
<body bgcolor=orange>
<p>


<?php
include 'connect1.php';
echo '<br>';
if(isset($_POST['submit']))
{

	$user=$_POST['user'];
   $pass=$_POST['pass'];
$sql=mysql_query("SELECT * FROM faculty_info WHERE id='$user' AND password='$pass' ORDER BY id ASC");

$grade='grade';


while($rows=mysql_fetch_assoc($sql))
{
	echo 'GRADE:'.$rows[$grade];
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