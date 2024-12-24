<?php 
include '../includes/insert.class.php';

if(isset($_POST['update-profile-btn'])){

$conn_update_profile =new Insert_class();
$user_id =$_GET['user_id'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$password = $_POST['password'];
$profile_image = $_FILES['profile']['name'];

$profile_folder ="uploads/".$profile_image;//target na folder 
$profile =$profile_image;

$profile_temp = $_FILES['profile']['tmp_name'];

move_uploaded_file($profile_temp, "../uploads/$profile");

$conn_update_user =$conn_update_profile->update_user_profile($fname,$lname,$username,$password,$profile_folder,$user_id);

	if($conn_update_user){
			
			echo "<script>alert('Update successfully');</script>";
			echo "<script>window.location.href='../index.php?contact_id=".$user_id."';</script>";
	}
		else{
			
			echo "<script>alert('failed to update!');</script>";
			echo "<script>window.location.href='../index.php?contact_id=".$user_id."';</script>";
	}
}
?>