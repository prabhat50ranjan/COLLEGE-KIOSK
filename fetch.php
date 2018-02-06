<?php
include 'connect.php';
echo '<br>';
$sql=mysql_query("SELECT * FROM student_info ORDER BY enroll_no ASC");

$add='address';
$pass='10_percentage';
while($rows=mysql_fetch_assoc($sql))
{
	
	echo 'ADDRESSSSSS::'.$rows[$add];
	echo '<br>';                                                 
}
?>