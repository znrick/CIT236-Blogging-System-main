<?php
	require ('db_con.php');
	
	
	$email = $_POST['email'];
	$password = $_POST['password'];

	$usersql = $conn->prepare ("Select * from user where email = '$email' AND password = '$password'");

	$usersql->execute();
	$user = $usersql->fetch();
	if ($user) {
		if ($user['role'] == 'admin') {
			echo "
			<script>
				alert ('WELCOME ADMIN');
			</script> ";
			header('Location: admin_panel.php');
		}
		else if ($user['role'] == 'user') {
			"<script>
				alert ('WELCOME USER');
			</script> ";
			header('Location: admin_panel.php?id='.$user['userid']);		
		} else {
			"<script>
				alert ('No Records Found');
				window.location.href = 'index.php';
			</script> ";
		}
	}
	else {
		echo"
			<script>
				alert ('INVALID USER');
			</script>";
		}
	echo "
		<script>
			window.location.href = 'index.php';
		</script>
		";
?>