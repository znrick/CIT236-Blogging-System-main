<?php
session_start(); 

include("db_con.php");



 if(isset($_SESSION["userID"]))
{
    $user_id = $_SESSION["userID"];

    $con=mysqli_connect("username","password","bloggingsystem");

    if (mysqli_connect_errno()){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT banned FROM user where userID = ".$userID);

    while($row = mysqli_fetch_array($result)){
        $banned= $row['banned'];
    }

    mysqli_close($con);

    if($banned == "1"){
        header("Location:lectureaccount.php");
    }
    else{   
        header("Location:banned.php");
    }
}

?>
