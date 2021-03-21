<?php
session_start();
error_reporting(0);
if ( $_SESSION['email']==true) {
  # code...
}else
header('location:admin_login.php');
$page='headline';
 include('include/header.php');

  ?>

  <?php
 include('db/connection.php');
  $id=$_GET['edit'];

  $query=mysqli_query($conn,"select * from headlines where id='$id' ");

 while ($row=mysqli_fetch_array($query)) {
 	 $headline=$row['headline_data'];
  	 $update=$row['update'];

 }
 

  ?>

  <div style=" width: 70%; margin-left: 25%; margin-top: 10%">
  	   
  	
		<form action="edit_headline.php" method="post" name="headlineform" onsubmit=" return validateform() ">
			<h1>Update Headline</h1>
			<hr>
		  <div class="form-group">
		    <label for="email"> Headline:</label>
            <textarea class="form-control" rows="5" name="headline" id="comment"><?php echo $update; ?></textarea>

          </div>
		  <div class="form-group">
			  <label for="comment">update status:</label>
             <input type="text" name="update" value="<?php  echo $update;  ?>" class="form-control" id="email">

            </div>
			<input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>" >
		  <input type="submit" name="submit" class="btn btn-primary" value=" Update Headline">
		</form>
		<script>
			
       function validateform(){
         var x = document.forms['headlineform']['headline'].value;
          if (x=="") {
          	alert('Headine Must Be Filled Out !');
          	return false;
          }
       }

		</script>

  </div>

  <?php
include('db/connection.php');
if (isset($_POST['submit'])) {
	$id=$_POST['id'];
     $headline =$_POST['headline'];
     $update=$_POST['update'];

     $query1=mysqli_query($conn,"update headlines set headline_data='$headline' , update_status='$update' where id='$id' ");
     if($query1){
     	echo "<script>alert('Headline Updated Successfully !')</script>";
       echo "<script >window.location='http://localhost/newsphp/headline.php' ;</script>";
     	

     }else{
     	echo "headline Not Update";
     }
}


  ?>

  <?php
 include('include/footer.php');

  ?>
