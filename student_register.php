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
<p><a=href="student_register.php">register</a> | <a href="login.php">login</a></p>
<h3>Registration form</h3>
<form action="" method="POST">
 NAME:<input type="text" name="user"></br>
 PASSWORD:<input type="password" name="pass"><br/>
 MEDICAL HISTORY:<input type="text" name="medical_history"></br>
 CASTE:<input type="text" name="caste"></br>
 GENDER:<input type="text" name="gender"></br>
 CONTACT:<input type="text" name="contact"></br>
 ENROLLMENT NUMBER:<input type="text" name="enroll_no"></br>
 MATRIC %:<input type="text" name="percentage_10"></br>
 INTER %:<input type="text" name="percentage_12"></br>
 BOARD:<input type="text" name="board"></br>
 FATHER NAME:<input type="text" name="father_name"></br>
MOTHER NAME:<input type="text" name="mother_name"></br>
ADDRESS:<input type="text" name="address"></br>
 FATHER CONTACT:<input type="text" name="father_contact"></br>
 NATIONALITY:<input type="text" name="nationality"></br>
 BRANCH:<input type="text" name="branch"></br>
 BATCH:<input type="text" name="batch"></br>

 <input type="submit" value="login" name="submit"/>
 </form>
 <?php
 if(isset($_POST["submit"]))
 {
	 $user=$_POST['user'];
	  $address=$_POST['address'];
	 $pass=$_POST['pass'];
	 $medical_history=$_POST['medical_history'];
	 $caste=$_POST['caste'];
	 $gender=$_POST['gender'];
	 $contact=$_POST['contact'];
	 $enroll_no=$_POST['enroll_no'];
	 $percentage_10=$_POST['percentage_10'];
	 $percentage_12=$_POST['percentage_12'];
	 $board=$_POST['board'];
	 $father_name=$_POST['father_name'];
	 $mother_name=$_POST['mother_name'];
	 $father_contact=$_POST['father_contact'];
	 $nationality=$_POST['nationality'];
	 $branch=$_POST['branch'];
	 $batch=$_POST['batch'];
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
	 mysql_select_db('student_details');
	 $query=mysql_query("SELECT * FROM student_info WHERE enroll_no='.enroll_no'");
	 
	 $numrows=mysql_num_rows($query)or die(mysql_error());
	 if($numrows==0)
	 {
		 $sql="INSERT INTO student_info(name,medical_history,caste,gender,contact,enroll_no,address,10_percentage,12_percentage,board,father_name,mother_name,father_contact,nationality,branch,batch,password) VALUES ('$user','$medical_history','$caste','$gender','$contact','$enroll_no','$address','$percentage_10','$percentage_12','$board','$father_name','$mother_name','$father_contact','$nationality','$branch','$batch','$pass')";
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
 </body>
 </html>
 