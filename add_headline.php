<?php
session_start();
if ( $_SESSION['email']==true) {
  # code...
}else
header('location:admin_login.php');
$page='headline';
 include('include/header.php');

  ?>
<div style="margin-left:16%;  width: 90%;">
        <ul class="breadcrumb">
          <li class="breadcrumb-item active"><a href="home.php">Home</a></li>         
          <li class="breadcrumb-item active"><a href="headline.php">Headline</a></li>
          <li class="breadcrumb-item "><a href="add_headline.php"> Add headline</a></li>
        </ul>       
      </div>
  <div style=" width: 70%; margin-left: 25%; margin-top: 10%">
  	   
  	
		<form action="add_headline.php" method="post" name="headlineform" onsubmit=" return validateform() ">
			<h1>Add Headline</h1>
			<hr>
		  <div class="form-group">
		    <label for="email"> Headline:</label>
            <textarea class="form-control" placeholder="Enter Headline" rows="5" name="headline" id="comment"></textarea>

          </div>
		  <div class="form-group">
			  <label for="comment">Update status:</label>
              <input type="text" placeholder="Enter Update status" name="update" class="form-control" id="email">
			</div>
		  <input type="submit" name="submit" class="btn btn-primary" value="Add Headline">
		</form>
		<script>
			
       function validateform(){
         var x = document.forms['headlineform']['headline'].value;
          if (x=="") {
          	alert('Headline Must Be Filled Out !');
          	return false;
          }
       }

		</script>

  </div>
    
  <?php
 include('db/connection.php');

if (isset($_POST['submit'])) {
	
	$headline_data=$_POST['headline'];
	$update_status=$_POST['update'];

	$cheak = mysqli_query($conn,"select * from headline where headline_name='$headline' ");

	if (mysqli_num_rows($cheak)>0) {
	  	 echo "<script> alert('Headline Already exist !!')</script>";
	  exit();
   }

   $query=mysqli_query($conn,"insert into  headlines(headline,des)values('$headline','$des')");

	if($query){
		 echo "<script> alert('headline Added Successfully')</script>";
	}else{
		 echo "<script> alert('Please try Again')</script>";
	}
}
  ?>
  <?php
 include('include/footer.php')

  ?>