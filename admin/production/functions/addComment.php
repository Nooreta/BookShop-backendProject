<?php
 session_start();
 require_once("../../../includes/connect.php");
 $userId=$_SESSION['userId'];
 $comContent=$_POST['commentContent'];
 $blogId=$_POST['blogId']; 

$addComment="insert into comment(commentContent,blogId,commentUser) values('$comContent','$blogId','$userId')";
if(mysqli_query($conn,$addComment))
{ ?>
<script>alert("comment added successfully");</script>
    <?php 
    // header("location: ".$_SERVER['HTTP_REFERER']); 
     header("refresh:0; url=".$_SERVER['HTTP_REFERER']);

    // ../../../blog-details.php
} ?>

