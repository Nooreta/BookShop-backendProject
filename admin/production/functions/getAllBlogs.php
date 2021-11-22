<?php
$getAllBlog="select * from blog";
$getAllBlogResult=mysqli_query($conn,$getAllBlog);
$blogNumber=mysqli_num_rows($getAllBlogResult);
?>