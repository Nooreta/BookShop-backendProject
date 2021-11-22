<?php
 $email="From:".$_POST['email'];
 $subject=$_POST['subject'];
 $message=$_POST['message'];

 $to="noorkhjallad@gmail.com";
 mail($to,$subject,$message,$email);
 header("refresh:0 ; url=../../../contact.php");

?>