<?php
 include('db/connection.php');
 $id=$_GET['del'];
 $query=mysqli_query($conn,"delete  from category where id='$id'");
  if ($query) {
  	 echo "<script> alert('category deleted !')</script> ";
  	   echo "<script >window.location='http://localhost/newsphp/category.php' ;</script>";

  }else{
  	echo "Please Try again";
  }


?>