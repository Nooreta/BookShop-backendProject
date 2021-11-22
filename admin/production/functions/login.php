<?php
// echo "Yes"; //to check if i access to this page correctly
session_start();
require_once("../../../includes/connect.php");
 $userEmail=$_POST['email'];
 $userPassword=$_POST['password'];

 $login="select * from users where userEmail='$userEmail'"; //to ensure that the entered information is identical
$loginResult=mysqli_query($conn,$login);
$userData=mysqli_fetch_assoc($loginResult);


if(mysqli_num_rows($loginResult)>0)
{
  if(password_verify($userPassword,$userData['userPassword'])) 
  {
    $_SESSION['userId']=$userData['userId'];
  header("location:../../../index.php" );

   }
   else{
    header("location: ../../../index.php");
     }
    }
else{
   header("location: ../../../index.php");
}


?>