<?php
  require('db_con.php');
  $id = $_GET['id'];

    $deleteUsersSql = $conn->prepare ("Delete from user where userid='$id'");
    $deleteUsersSql->execute();

        echo"
                <script>
                    alert ('Succes');
                </script> ";
        
        header ("Location: showuser.php");
            
?>