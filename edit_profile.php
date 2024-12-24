<?php
session_start();
include 'includes/select.class.php';
if(isset($_SESSION['id']) && $_SESSION['id']==true){


}

else{
header('location:login.page.php');	
}

$conn_select_edit_profile = new Select_class();
$user_id =$_GET['user_id'];
$read_profile_user = $conn_select_edit_profile->select_user_edit($user_id);
$row =mysqli_fetch_array($read_profile_user);
?>
<!Doctype html>
<html>

	<head>
	<style>
	*{
		margin:0px;
	padding:0px;
	}
		input{
			margin-bottom:5px;
			line-height:40px;
			min-width:100%;
			text-indent:5px;
			
			
			
		}
		.edit_profile_form{
			box-shadow:1px 1px 10px 1px #eee;
			
		}
		h2{
			color:grey;
			font-family:calibri;
		}
		input[type=submit]{
			background:#5aaf6f;
			border:none;
			color:white;
			font-family:calibri;
			font-size:16px;
		}
	</style>
	</head>
	<body>
		<div class="edit_profile_form" style="max-width:400px;padding:30px;border-top:3px solid #2da2d8;margin:120px auto;">
		<h2>Edit Profile</h2></br>
		<form method="post" style="width:100%;" action="functions/update_user.php?user_id=<?php echo $user_id;?>" enctype="multipart/form-data">
			<input type="text" name="fname" value="<?php echo $row['fname']?>" /></br>
			<input type="text" name="lname" value="<?php echo $row['lname']?>" /></br>
			<input type="text" name="username" value="<?php echo $row['username']?>" /></br>
			<input type="password" name="password" value="<?php echo $row['password']?>" /></br>
			<input type="file" name="profile" value="<?php echo $row['profile_image']; ?>" /></br>
			<input type="submit" name="update-profile-btn" value="Update"/>
		</form>
		</div>
	</body>
</html>
