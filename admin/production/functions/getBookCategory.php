<?php 
$bookCategory="select * from book where categoryId=$categoryId";
$bookCategoryResult=mysqli_query($conn,$bookCategory);
$numBook=mysqli_num_rows($bookCategoryResult);
?>