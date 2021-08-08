 <?php
 //the connection to the database of the student's login details, student and password 
 $con=mysqli_connect("localhost","root","pa55word","oepdb");
 if(isset($_POST['loginsubmit'])){
	 $username=$_POST['username'];
	 $password=$_POST['password'];
 $query="select * from logintb where username='$username' and password='$password'";
 $result=mysqli_query($con,$query);
 if(mysqli_num_rows($result)==1)
 {
	header("Location:admin.php"); 
 }
 else
 {
	 echo "<script>alert('Error login')</script>";
	 echo "<script>window.open('login.php','_self')</script>";
 }
 }
 //UI Elements validation for admin page
  if(isset($_POST['next'])){
	if(isset($_POST['declation']) && $_POST['declation']!="")
	if(isset($_POST['exam_type']) && $_POST['exam_type']!="")
	if(isset($_POST['module_code']) && $_POST['module_code']!="")
	
	header("Location:admin1.php"); 
 
	 echo "<script>alert('You must agree to the honor pledge by checking the box next to the honor pledge statement to procceed.')</script>";
	 echo "<script>alert('You must select the appropriate exam type')</script>";
	 echo "<script>alert('You must select the appropriate module code')</script>";
	 echo "<script>window.open('admin.php','_self')</script>";

 }
	
	//Code validation for uploading the correct file type for admin1 page
	if(isset($_POST['upload'])){

	header("Location:admin2.php"); 
 
	 echo "<script>alert('Error login')</script>";
	 echo "<script>window.open('admin1.php','_self')</script>";

 }
 
 ////admin2 page
	if(isset($_POST['submit'])){

	header("Location:admin3.php"); 
 
	 echo "<script>alert('Error login')</script>";
	 echo "<script>window.open('admin2.php','_self')</script>";

 }
 
 ///admin3 page
	if(isset($_POST['home'])){

	header("Location:index.php"); 
 
	 echo "<script>alert('Error login')</script>";
	 echo "<script>window.open('login.php','_self')</script>";

 }
 
 //admin3 page
	if(isset($_POST['backhome'])){

	header("Location:index.php"); 
 }
 
 ?>
 
 
 
 