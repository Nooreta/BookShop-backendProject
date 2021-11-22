<?php
session_start();
require_once("../../../includes/connect.php");
  $userName=$_POST['userName'];
  $userEmail=$_POST['userEmail'];
  $userPassword=$_POST['userPassword'];
  $phoneNumber=$_POST['phoneNumber'];
   $userImage=$_FILES['userImage'];
   $userImageName=$userImage['name'];
   $userImgTmpName=$userImage['tmp_name'];
   $DOB=$_POST['dob'];
  //echo $imgType=$userImage['type'];
   $imgType=pathinfo($userImageName,PATHINFO_EXTENSION);
   $randomString=uniqid();
   $userImageName="$randomString . $imgType";
  //  $userPassword=md5($userPassword);
  $userPassword=password_hash($userPassword,PASSWORD_DEFAULT);
  $insertUser="insert into users (userName,userEmail,userPassword,userPhone,userImage,DOB) VALUES ('$userName', '$userEmail','$userPassword','$phoneNumber',
  '$userImageName','$DOB')";

if(mysqli_query($conn,$insertUser))
{
    move_uploaded_file($userImgTmpName,"../images/$userImageName");
    $_SESSION['userId']=$conn -> insert_id;
    echo $_SESSION['userId']; //get the last id entered the data base
    header("location: ../../../index.php");
}
else{
    echo mysqli_error($conn);
}
?>