<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='prabhat123';
if(!@mysql_connect($mysql_host,$mysql_user,$mysql_password))
	
{
	die('cannot connect to database');
}
else

{
if(@mysql_select_db('faculty'))
{
	echo '<br>';
}
else
{
	die('cannot connect to database');
}
}	

?>