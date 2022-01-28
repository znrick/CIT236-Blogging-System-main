<?php
	require('db_con.php');
	$id = $_GET['id'];
	$usersql = $conn->prepare ("Select * from user where userID='$id'");
	$usersql->execute();
	$user = $usersql->fetch();

?>
<!DOCTYPE html>
<html>

	<head> 
			<title> Set as Admin </title>

	<link rel="stylesheet" type="text/css" href="css/set.css">    
</head>
	<body>
		<div class="container">
		<form name="update" action="update_save.php" method="POST">
					<hr>
					<input type = "hidden" id = "userID" name = "userID" value="<?= $user['userID']; ?>" required/>
					<label><b>Role</b></label>
					<input type = "text" id = "role" name = "role" placeholder="Enter Role" value="<?= $user['role']; ?>" required/>
					<br><br>
					<label><b>Username</b></label>
					<input type = "text" id = "username" name = "username" placeholder="Enter Username" value="<?= $user['username']; ?>" required/>
					<br><br>
					<label><b>Email</b></label>
					<input type="email" id="email" name="email" placeholder="Enter E-mail" value="<?= $user['email']; ?>" required />
					<br><br>
					<label><b>Password</b></label>
					<input type = "password" id="password" name = "password" placeholder="Enter password" value="<?= $user['password']; ?>" required/> 
					<br><br>
					<br/>
					<br>
					<input type="submit" value="Update" id="submit" name="update" />
		</form>	
	</body></div>
</html>