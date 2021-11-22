<?php
$getComment="select * from comment INNER JOIN blog on comment.blogId=blog.blogId
 inner join users on comment.commentUser=users.userId where blog.blogId=$blogId"; //get informations of comment,blog and users

$getCommentResult=mysqli_query($conn,$getComment);

?>