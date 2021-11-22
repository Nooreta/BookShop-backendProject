<?php
$countUsers="select count(userId) as userNumber from users";
$userNumberResult=mysqli_query($conn,$countUsers);
$userNumber=mysqli_fetch_assoc($userNumberResult);
?>