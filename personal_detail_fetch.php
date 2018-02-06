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
<body>
<p>


<?php
include 'connect.php';
echo '<br>';
if(isset($_POST['submit']))
{

	$user=$_POST['user'];
   $pass=$_POST['pass'];
$sql=mysql_query("SELECT * FROM student_info WHERE enroll_no='$user' AND password='$pass' ORDER BY enroll_no ASC");

$enroll_no='enroll_no';
$caste='caste';
$name='name';
$gender='gender';
$contact='contact';
$father_name='father_name';
$mother_name='mother_name';
$father_contact='father_contact';

while($rows=mysql_fetch_assoc($sql))
{
	echo 'NAME:'.$rows[$name];
	echo '<br>';
	echo 'ENROLLMENT NUMBER:'.$rows[$enroll_no];
	echo '<br>';
	echo 'CASTE'.$rows[$caste];
	echo '<br>';
	echo 'GENDER:'.$rows[$gender];
	echo '<br>';
	echo 'STUDENT CONTACT:'.$rows[$contact];
	echo '<br>'; 
    echo 'MOTHER NAME:'.$rows[$contact];
	echo '<br>';
	echo 'FATHER NAME:'.$rows[$father_name];
	echo '<br>';
	echo 'FATHER CONTACT:'.$rows[$contact];
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