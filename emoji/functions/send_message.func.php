<?php
session_start();
include '../includes/insert.class.php';

$conn_Insert = new Insert_class();

if(isset($_REQUEST['send-btn'])){

$message = $_REQUEST['type-message']; 
$sender_id = $_SESSION['id'];
$reciever_id = $_REQUEST['contact_id'];

$insert_message = $conn_Insert->add_message($message,$sender_id,$reciever_id);

if($insert_message){

echo  "<script></script>"; /*alert('Message Sent!');*/
echo "<script>window.location.href='../index.php?contact_id=$reciever_id';</script>";

}

else{

    echo  "<script>alert('failed!');</script>";
    echo  "<script>window.location.href='../index.php';</script>";
    
    }
}


?>