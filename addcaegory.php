  <?php
session_start();
if ( $_SESSION['email']==true) {
  # code...
}else
header('location:admin_login.php');
$page='category';
 include('include/header.php');

  ?>
<div style="margin-left:16%;  width: 90%;">
        <ul class="breadcrumb">
          <li class="breadcrumb-item active"><a href="home.php">Home</a></li>         
          <li class="breadcrumb-item active"><a href="category.php">Category</a></li>
          <li class="breadcrumb-item "><a href="addcaegory.php"> Add category</a></li>
        </ul>       
      </div>
  <div style=" width: 70%; margin-left: 25%; margin-top: 10%">
  	   
  	
		<form action="addcaegory.php" method="post" name="categoryform" onsubmit=" return validateform() ">
			<h1>Add Categories</h1>
			<hr>
		  <div class="form-group">
		    <label for="email"> Category:</label>
		    <input type="text" placeholder="Enter Category Name " name="category" class="form-control" id="email">
		  </div>
		  <div class="form-group">
			  <label for="comment">Description:</label>
			 <textarea class="form-control" placeholder="Enter Category Description" rows="5" name="des" id="comment"></textarea>
			</div>
		  <input type="submit" name="submit" class="btn btn-primary" value="Add Category">
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
 include('include/footer.php')

  ?>
  <?php
 include('db/connection.php');

if (isset($_POST['submit'])) {
	
	$category_name=$_POST['category'];
	$des=$_POST['des'];

	 $cheak = mysqli_query($conn,"select * from category where category_name='$category_name' ");

	  if (mysqli_num_rows($cheak)>0) {
	  	 echo "<script> alert('Category Name Already Be taken !!')</script>";
	  exit();
   }

	$query=mysqli_query($conn,"insert into  category(category_name,des)values('$category_name','$des')");

	if($query){
		 echo "<script> alert('Category Add Successfully')</script>";
	}else{
		 echo "<script> alert('Please try Again')</script>";
	}
}



  ?>