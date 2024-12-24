<?php
include_once 'dbh.inc.php';

class Select_class extends Database{

public function __construct(){

	$this->db_connect();


}

//check if already exist user? 

public function check_user($username){
	
	$query="Select * from tbl_chat_users WHERE username='$username'";
	$result =mysqli_query($this->connection,$query);
	
	return $result;
}

public function select_contacts(){

	$query="Select * from tbl_chat_users";
	$result=mysqli_query($this->connection,$query);
	return $result;
}

// login select User

public function select_account($username,$password){

	$query="Select * from tbl_chat_users where username='$username' && password='$password'";
	$result=mysqli_query($this->connection,$query);
	return $result;
}

// display current login user details //
public function select_details($current_user){

	$query="Select * from tbl_chat_users where user_id ='".$current_user."'";
	$result=mysqli_query($this->connection,$query);
	return $result;
}

// get message 

public function get_messages($contact_id,$current_user){




$query ="Select tbl_chat.message, tbl_chat.sender_id, tbl_chat.reciever_id, 
		 tbl_chat.sent_on,tbl_chat_users.user_id,tbl_chat_users.fname,tbl_chat_users.lname
		 FROM tbl_chat_users JOIN tbl_chat ON tbl_chat_users.user_id =tbl_chat.sender_id

		WHERE (tbl_chat.sender_id = '".$current_user."' 
		AND tbl_chat.reciever_id = '".$contact_id."')
		OR (tbl_chat.sender_id = '".$contact_id."'
		AND tbl_chat.reciever_id = '".$current_user."')
		ORDER BY sent_on
		
		";



////$query ="Select tbl_chat.message, tbl_chat.sent_on,tbl_users.user_id, tbl_users.fname, tbl_users.lname From tbl_users 

//CROSS JOIN tbl_chat ON  tbl_chat.reciever_id= '$contact_id' WHERE tbl_chat.sender_id= tbl_users.user_id AND tbl_chat.sender_id=tbl_users.user_id 

//";


$result =mysqli_query($this->connection,$query);



return $result;

}

public function get_contact_name($contact_name){

	$query="Select fname, lname ,profile_image from tbl_chat_users where user_id ='$contact_name'";
	$result=mysqli_query($this->connection,$query);
	return $result;
}



//search contact 

public function search_contact($search_text){
	
	$query="Select * from tbl_chat_users where concat(fname,lname) LIKE '%".$search_text."%' ";
	$result=mysqli_query($this->connection,$query);
	return $result;
	}
	
	
	
	// select for edit 
 public function select_user_edit($user_id){
	 
	 $query ="Select * from tbl_chat_users where user_id = '$user_id'";
	 $result=mysqli_query($this->connection,$query);
	 return $result;
	 
	 
	 
 }

	
}



?>
