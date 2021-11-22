<?php 
require_once("includes/connect.php");
$selectBlog="select * from blog where blogId=$blogId";
$selectBlogResult=mysqli_query($conn,$selectBlog);
$thisBlog=mysqli_fetch_assoc($selectBlogResult);
?>