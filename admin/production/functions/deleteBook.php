<?php
$deleteBook="delete from book where bookId=$bookId";
if(mysqli_query($conn,$deleteBook)){?>
<script>alert("Book deleted");
</script>
<?php header("refresh:0 ; url=controlBook.php"); }

else {
 die("error".mysqli_error($conn));
}
?>