<?php
 include('db/connection.php');
 $id=$_GET['del'];
 $query=mysqli_query($conn,"delete  from headlines where id='$id'");
  if ($query) {
  	 echo "<script> alert('headline deleted !')</script> ";
  	   echo "<script >window.location='http://localhost/newsphp/headline.php' ;</script>";

  }else{
  	echo "Please Try again";
  }


?>