  <?php
session_start();
if ( $_SESSION['email']==true) {
  # code...
}else
header('location:admin_login.php');
$page='prductt';
 include('include/header.php');

  ?>

		   <div style="margin-left:17%;  width: 80%;">
		        <ul class="breadcrumb">
		        	<li class="breadcrumb-item active"><a href="home.php">Home</a></li>
		        	<li class="breadcrumb-item active"><a href="news.php">News</a></li>
		        	<li class="breadcrumb-item active">Add News</li>
		        </ul>  	   	
		   </div>

         <div style=" width: 70%; margin-left: 25%; ">
  	    <form action="AddNews.php" method="post" enctype="multipart/form-data" name="categoryform" onsubmit=" return validateform() ">
			<h1>Add News</h1>
			<hr>
		  <div class="form-group">
		    <label for="email"> Title:</label>
		    <input type="text" placeholder="Title..." name="title" class="form-control" id="email">
		  </div>

		  <div class="form-group">
			  <label for="comment">Description:</label>
			 <textarea class="form-control" placeholder="Description..." rows="5" name="description" id="comment"></textarea>
			</div>

			<div class="form-group">
		    <label for="email"> Date:</label>
		    <input type="date"  name="date" class="form-control" id="email">
		  </div>

           <div class="form-group">
		    <label for="email"> Thumbnail:</label>
		    <input type="file"  name="thumbnail" class="form-control img-thumbnail" id="email">
		  </div>

		    <div class="form-group">
		    <label for="email"> Category:</label>
		     
               
		        <select class="form-control"  name="category" >
		       <?php
                include('db/connection.php');
                  $query=mysqli_query($conn,"select * from category");

                while($row=mysqli_fetch_array($query)){

                	
                	?>
		        	 <option value="<?php echo $row['category_name'];?>"><?php echo $row['category_name'];?></option>
		        	 
                 <?php } ?>
		        </select>
		        </div>


		        <div class="form-group">
		        	<label for="admin">Admin</label>
		        	<input type="text" class="form-control" disabled value="<?php echo $_SESSION['email'];  ?> ">
		        	
		        </div>
		  

		  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
		</form>
		<script>
			
       function validateform(){
         var x = document.forms['categoryform']['title'].value;
         var y = document.forms['categoryform']['description'].value;
         var z = document.forms['categoryform']['date'].value;
         var w = document.forms['categoryform']['category'].value;
         if (x=="") {
          	alert('Title Must Be Filled Out !');
          	return false;
          }
          if (y=="") {
          	alert('Description Must Be Filled Out !');
          	return false;
          }
           if (y.length<10) {
          	alert('Description Atleast 100 character !');
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
	$title=$_POST['title'];
	$description=$_POST['description'];
		$date=$_POST['date'];

			$thumbnail=$_FILES['thumbnail']['name'];
			$tmp_thumbnail=$_FILES['thumbnail']['tmp_name'];
				$category=$_POST['category'];
				$admin=$_SESSION['email'];
			move_uploaded_file($tmp_thumbnail,"images/$thumbnail");

     $query1=mysqli_query($conn,"insert into news(title,description,date,category,thumbnail,admin)values('$title','$description','$date','$category','$thumbnail','$admin')");
     if ($query1) {
     	# code...
     	echo "<script>alert('News uploaded Successfully !!')</script>  ";
     }else{
     	echo "<script>alert('Please Try Again!!')</script>  ";

     }


}

  ?>
