<?php
include 'connect.php';
if(isset($_POST['submit']))
{
	if(!empty($_POST['user'])&&!empty($_POST['pass']))
	{ 
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$select="select *from student_info where enroll_no='$user' && password='$pass'";
		$sql=mysql_query($select)or die(mysql_error());
		if(mysql_num_rows($sql)== 1)
		{
			
			echo "hello  mister you have sucessfully LOGged    IN";
		}
		else
		{
			echo "cannot connect";
		}
	}
	
}
?>