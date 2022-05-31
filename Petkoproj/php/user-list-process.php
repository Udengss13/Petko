<?php
session_start();
require('connection.php');

$errors = array();
if(isset($_POST['delete_user'])){
    //This is for the password when delete user
    $user_id = $_POST['user_id'];
    $password =  mysqli_real_escape_string($db_admin_account, $_POST['password']);

    $sql = "SELECT * FROM admin_login WHERE password = '$password'";
    $result = mysqli_query($db_admin_account,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);
      
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count == 1) {
        //This is for deleting user
      $sqldelete = "DELETE FROM usertable WHERE id = $user_id";
      mysqli_query($con, $sqldelete);
      header("location: ../admin-dashboard.php");
    }
    else {
    
     header("location: ../admin-dashboard.php");
    }
  }
   
  

?>