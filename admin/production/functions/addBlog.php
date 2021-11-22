<?php
  require_once("../../../includes/connect.php");
  $blogTitle=$_POST['blogTitle'];
 $blogImage=$_FILES['blogImage'];
    //   "<pre>";
    //  print_r($blogImage);   //to print all objects of the image file
    //   "</pre>";
   $blogImgName=$blogImage['name'];  //name of the image
   $blogImgTmpName=$blogImage['tmp_name'];
   $blogDescription=$_POST['blogDescription'];
   // insert data to DB
   $insertblog="insert into  blog(blogTitle,blogImage,blogDescription) 
   values('$blogTitle','$blogImgName','$blogDescription')";
   
   if(mysqli_query($conn,$insertblog))
   {
      move_uploaded_file("$blogImgTmpName","../images/$blogImgName");
            echo "Image added successfully";
          ?>
          <!-- Write JS code  -->
          <script> 
        alert(" blog added successfully");
          </script>
      <?php
      header("refresh:0; url=../blog.php");
    }  //used to execute sql query
    else 
 {
    die( mysqli_error($conn));
 }

?>