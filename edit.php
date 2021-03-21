  <?php
session_start();
error_reporting(0);
if ( $_SESSION['email']==true) {
  # code...
}else
header('location:admin_login.php');
$page='category';
 include('include/header.php');

  ?>

  <?php
 include('db/connection.php');
  $id=$_GET['edit'];

  $query=mysqli_query($conn,"select * from category where id='$id' ");

 while ($row=mysqli_fetch_array($query)) {
 	 $category=$row['category_name'];
  	 $des=$row['des'];

 }
 

  ?>

  <div style=" width: 70%; margin-left: 25%; margin-top: 10%">
  	   
  	
		<form action="edit.php" method="post" name="categoryform" onsubmit=" return validateform() ">
			<h1>Update Category</h1>
			<hr>
		  <div class="form-group">
		    <label for="email"> Category:</label>
		    <input type="text" name="category" value="<?php  echo $category;  ?>" class="form-control" id="email">
		  </div>
		  <div class="form-group">
			  <label for="comment">Description:</label>

			 <textarea class="form-control" rows="5" name="des" id="comment"><?php echo $des; ?></textarea>
			</div>
			<input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>" >
		  <input type="submit" name="submit" class="btn btn-primary" value=" Update Category">
		</form>
		<script>
			
       function validateform(){
         var x = document.forms['categoryform']['category'].value;
          if (x=="") {
          	alert('Category Must Be Filled Out !');
          	return false;
          }
       }

		</script>

  </div>

  <?php
include('db/connection.php');
if (isset($_POST['submit'])) {
	$id=$_POST['id'];
     $category =$_POST['category'];
     $des=$_POST['des'];

     $query1=mysqli_query($conn,"update category set category_name='$category' , des='$des' where id='$id' ");
     if($query1){
     	echo "<script>alert('Category Updated Successfully !')</script>";
       echo "<script >window.location='http://localhost/newsphp/category.php' ;</script>";
     	

     }else{
     	echo "Category Not Update";
     }
}


  ?>

  <?php
 include('include/footer.php');

  ?>
