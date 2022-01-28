<?php
    require ("db_con.php");


    $sqlstr = 'UPDATE user SET username = :username, password = :password, email = :email WHERE userid = :userID';

    $updateUser = $conn->prepare($sqlstr);
    

    $sqlstr = 'UPDATE user SET username = :username, password = :password, email = :email , user_fname = :user_fname, user_lname = :user_lname, user_contact = :user_contact, user_type= :user_type,
    user_status = :userstatus, WHERE userID = :userID';

    $updateUser = $conn->prepare($sqlstr);

    $updateUser->bindparam(':userID', $_POST['userID']);
    $updateUser->bindparam(':username', $_POST['username']);
    $updateUser->bindparam(':password', $_POST['password']);
    $updateUser->bindparam(':email', $_POST['email']);

    $updateUser->bindparam(':role', $_POST['role']);

    $updateUser->execute();


	echo "
    	<script>
    		alert ('Sucessfullly Updated');
    	</script>
		";

        header ("Location: showuser.php");

 ?>