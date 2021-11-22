<?php
  
require_once("../../../includes/connect.php");
  $categoryName=$_POST['categoryName'];
 
  // insert data to DB
   $insertCategory="insert into  category(categoryName) 
   values('$categoryName')";
   
   if(mysqli_query($conn,$insertCategory))
   {   ?>
          <!-- Write JS code  -->
          <script> 
        alert(" Category added successfully");
          </script>
      <?php
      header("refresh:0; url=../category.php");
    }  //used to execute sql query
    else 
 {
    die( mysqli_error($conn));
 }

?>