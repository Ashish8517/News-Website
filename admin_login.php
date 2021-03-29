<?php
 session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<!-- costom css -->
	  <link rel="stylesheet" href="style/admin.css">
</head>
<body>
   <div class="container">

  <form action="admin_login.php" method="post">
  	<h3>Admin Login</h3>
  <div class="form-group">
    <label for="email">Username:</label>
    <input type="Username"  name="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password" id="pwd">
  </div>
  
  <input type="submit" name="submit" class="btn btn-primary" value="login">
</form>
   	
   </div>

</body>
</html>

<?php
 include('db/connection.php');

  if (isset($_POST['submit'])) {
    $email=$_POST['email'];
   $password=$_POST['password'];

    $query=mysqli_query($conn,"select * from admin_login where email='$email' AND password='$password' ");

   if ($query) {
   	  if (mysqli_num_rows($query)>0) {
          $_SESSION['email']=$email;
        
   	  	  header('location:home.php');
      }else{
      	echo "<script>  alert('Invalid Credentails,Please Try Again')</script>";
      }
   }

  	
  }


?>