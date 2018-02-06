<?php
require('connect.php');
if(isset($_POST['submit']))
{
 $username=mysql_escape_string($_POST['uname']);
 $password=mysql_escape_string($_POST['pass'])
 if (!empty($_POST['uname']) && !empty($_POST['pass']))
 {
 echo "you didnt do it properly";
 exit();
 
 }
 else
 {
	 echo "GREAT";
 }
 $sql=my sql_query(SELECT * FROM login WHERE user='$username' AND  pass='$password'" );
 if($sql)
 {
 echo  "login sucessful";

 }
 else
 {
 echo "check username password";
 exit();
 }
}
?>