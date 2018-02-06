<!doctype html>
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
<title>register</title>
</head>
<body bgcolor=orange>
<p><a=href="register.php">register</a> | <a href="login.php">login</a></p>
<h3>Registration form</h3>
<form action="" method="POST">
 USERNAME:<input type="text" name="user"></br>
 PASSWORD:<input type="password" name="pass"><br/>
 <input type="submit" value="login" name="submit"/>
 </form>
 <p>
 <?php
 if(isset($_POST["submit"]))
 {
	 $user=$_POST['user'];
	 $pass=$_POST['pass'];
	 $pass_len=strlen($pass);
	 if(empty($user))
	 {
		 echo "enter username";		 
	 }
	 else if(empty($pass))
		 {
			 echo "enter password";
		 }
		 else if($pass_len<7)
		 {
			 echo "enter paasword greater then 7";
		 }
		else
		{
	 
	 $con=mysql_connect('localhost','root','prabhat123')or die(msql_error());
	 mysql_select_db('login');
	 $query=mysql_query("SELECT * FROM login WHERE user='.$user'");
	 $numrows=mysql_num_rows($query);
	 if($numrows==0)
	 {
		 $sql="INSERT INTO login(user,pass) VALUES ('$user','$pass')";
		 $result=mysql_query($sql);
		 if($result)
		 {
			 echo "account created sucess";
		 }
		 else
		 {
			 echo "failure";
		 }
		 }
		 else{
			 echo "username already exist";
		 }
		}
		 
 }
 ?>
 </p>
 </p>
 </body>
 </html>
 