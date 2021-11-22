<?php
$updateUserStatus="update users set userStatus=2 where userId=$userId";
if(mysqli_query($conn,$updateUserStatus))
{?>
<script>alert("user has been approved"); </script>
<?php
}
header("refresh:0; url=user_not_approve.php")

?>