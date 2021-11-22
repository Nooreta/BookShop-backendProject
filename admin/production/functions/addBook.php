<?php
//  ("hello");
require_once("../../../includes/connect.php");
 echo $bookTitle=$_POST['bookTitle'];
 $bookImage=$_FILES['bookImage'];
 echo $bookImgName=$bookImage['name']; //name of the image
 echo $bookImgTmpName=$bookImage['tmp_name'];
   echo "<pre>";
   print_r($bookImage);
   echo "</pre>";

  echo $bookPrice=$_POST['bookPrice'];
  echo $bookDescription=$_POST['bookDescription'];
  echo $bookPublishingHouse=$_POST['bookPublishingHouse'];
  echo $bookPublishingDate=$_POST['bookPublishingDate'];
  echo $bookElectronicLink=$_POST['bookElectronicLink'];
 echo $bookDedication=$_POST['bookDedication'];
 echo $categoryId=$_POST['categoryId'];

  //insert data to DB
  $insertBook="insert into book(bookTitle,bookImage,bookDescription,bookPublishingHouse,bookPublishingDate,bookDedication,bookElectronicLink,bookPrice,categoryId) 
  values('$bookTitle','$bookImgName','$bookDescription','$bookPublishingHouse','$bookPublishingDate','$bookDedication','$bookElectronicLink','$bookPrice','$categoryId')";
   
  if(mysqli_query($conn , $insertBook))
  {
      move_uploaded_file("$bookImgTmpName","../images/$bookImgName");
    ?>
      <!-- Write JS code -->
      <script>
      alert("Book added successfully");
    </script>
  <?php
  header("refresh:0; url=../book.php");
} //used to execute sql query
else 
{
    die( mysqli_connect_error($conn));
}

?>