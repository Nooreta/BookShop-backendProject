<?php
//require_once("../../../includes/connect.php");
$getAllBooks="select * from book";
$getAllBookResult=mysqli_query($conn,$getAllBooks);
$numOfBooks=mysqli_num_rows($getAllBookResult);

?>