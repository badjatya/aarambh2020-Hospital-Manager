<?php
session_start();
$con=mysqli_connect("localhost","root","","hmsdb");
if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from logintb where username='$username' and password='$password';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['username']=$username;
		header("Location:admin-panel.php");
	}
    else
    {
        echo "window.open('index.php');";
        echo "<script>alert('Enter correct details.');</scripts>";
    }
} 

function get_patient_details(){
	global $con;
	$query="select * from doctorapp";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)){
		$fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
		$contact=$_POST['contact'];
		echo "<tr>
		<th >$fname/th>
		<th >$lname</th>
		<th > $email</th>
		<th >$contact</th>
		
		</tr>";
        
 
}
}

 
 function display_docs()
{
	global $con;
	$query="select * from doctb";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$name=$row['name'];
		echo '<option value="'.$name.'">'.$name.'</option>';
	}
}

	
?>