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
include 'connect.php';
echo '<br>';
if(isset($_POST['submit']))
{

	$user=$_POST['user'];
   $pass=$_POST['pass'];
$sql=mysql_query("SELECT * FROM attendence WHERE enroll_no='$user' ORDER BY enroll_no ASC");

$sociall='sociall';


while($rows=mysql_fetch_assoc($sql))
{
	echo 'ATTENDENCE IN SOCIAL IS::'.$rows[$sociall];
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