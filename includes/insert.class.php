<?php
include 'dbh.inc.php';

class Insert_class extends Database{

public function __construct(){

    $this->db_connect();


}


public function add_message($message,$sender_id,$reciever_id){

    $query="insert into tbl_chat (message,sender_id,reciever_id) values ('$message','$sender_id','$reciever_id')";
    $result=mysqli_query($this->connection,$query);
    return $result;




}

public function insert_new_user($firstname,$lastname,$username,$password){
	
	$query="Insert into tbl_chat_users (fname,lname,username,password,profile_image) values ('$firstname','$lastname','$username','$password','profile_icon.png')";
	$result=mysqli_query($this->connection,$query);
	return $result;
}

//update user profile_icon

public function update_user_profile($fname,$lname,$username,$password,$profile_folder,$user_id){

$query ="Update tbl_chat_users set fname='$fname',lname='$lname',username='$username',password='$password',profile_image='$profile_folder' where user_id ='$user_id' ";
$result=mysqli_query($this->connection,$query);
return $result;
}

}


?>