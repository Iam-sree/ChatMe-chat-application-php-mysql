<?php




if(isset($_POST['login-btn'])){

    include_once '../includes/dbh.inc.php';
include '../includes/select.class.php';
$conn_select_account = new Select_class();

session_start();

$username= $_POST['username'];
$password =$_POST['password'];

//$username= mysqli_real_escape_string($connection,$_POST['username']);
//$password = mysqli_real_escape_string($connection,$_POST['password']);

$read_user = $conn_select_account->select_account($username,$password);

if(mysqli_num_rows($read_user)==0){


    echo "<script>alert('Login Failed!');<script>";
    echo "<script>window.location.href='../login.page.php';</script>";


}
else{

 $row=mysqli_fetch_assoc($read_user);
 $_SESSION['id']=$row['user_id'];
 echo "<script>window.location.href='../index.php?contact_id=$_SESSION[id]';</script>";


}

}

?>