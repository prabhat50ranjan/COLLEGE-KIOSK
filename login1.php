








<?php
include 'connect.php';
if(isset($_POST['submit']))
{
	if(!empty($_POST['user'])&&!empty($_POST['pass']))
	{ 
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$select="select *from login where user='$user' && pass='$pass'";
		$sql=mysql_query($select)or die(mysql_error());
		if(mysql_num_rows($sql)== 1)
		{
			
			echo "LOGIN";
		}
		else
		{
			echo "cannot connect";
		}
	}
	
}
?>





















<html>
<head>
<body bgcolor="red">
<font>
<center><h1>LOGIN</h1></center>
</font>
<form action="login1.php" method="post">
USERNAME:<input type="text" name="user">
PASSWORD:<input type="password" name="pass"><br>
<input type="submit" value="login" name="submit">
</form>
</body>
</head>
</html>