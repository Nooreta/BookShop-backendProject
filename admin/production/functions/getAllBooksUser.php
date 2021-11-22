<?php
//require_once("../../../includes/connect.php");
$getAllBooks="select * from book limit $page_1,2";
$getAllBookRes=mysqli_query($conn,$getAllBooks);

?>