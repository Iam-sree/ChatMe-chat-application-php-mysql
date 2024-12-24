<?php
include_once '../includes/insert.class.php';

if(isset($_POST['reg-btn'])){


$conn_add_user = new Insert_class();

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$username = $_POST['username'];
$password = $_POST['password'];

$create_new_user = $conn_add_user->insert_new_user($firstname,$lastname,$username,$password);
	
	
	echo "<script>alert('added new record');</script>";
	echo "<script>window.location.href='../login.page.php'</script>";

}
?>