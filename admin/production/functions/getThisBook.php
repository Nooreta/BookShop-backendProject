<?php 
$selectBook="select * from book where bookId=$bookId";
$selectBookResult=mysqli_query($conn,$selectBook);
$thisBook=mysqli_fetch_assoc($selectBookResult);
?>