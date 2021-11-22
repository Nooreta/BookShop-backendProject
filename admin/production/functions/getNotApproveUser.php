<?php
require_once("../../includes/connect.php");
$getNotAppUser="select * from users where userStatus=1";
$getNotrAppUserResult=mysqli_query($conn,$getNotAppUser);

?>