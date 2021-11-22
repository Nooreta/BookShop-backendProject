<?php 
require_once( '../../../includes/connect.php ');
 $bookTitle=$_POST['bookTitle'];
 $bookPrice=$_POST['bookPrice'];
 $bookDescription=$_POST['bookDescription'];
 $bookPublishingHouse=$_POST['bookPublishingHouse'];
 $bookDedication=$_POST['bookDedication'];
 $bookId=$_POST['bookId'];
 $updateBook= "update book set 
 bookTitle='$bookTitle',
 bookPrice='$bookPrice',
 bookDescription='$bookDescription',
 bookPublishingHouse='$bookPublishingHouse',
 bookDedication= '$bookDedication'
 where bookId='$bookId'
  ";
if(mysqli_query($conn,$updateBook))
{ ?>
<script>alert("Book Updated")</script>

<?php 
header("refresh:0; url=../controlBook.php");
}
else {
    die("error". mysqli_error($conn));
}
?>