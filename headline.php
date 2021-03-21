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
          <li class="breadcrumb-item active"><a href="category.php">Headline</a></li>
          <li class="breadcrumb-item ">Add headline</li>
        </ul>       
      </div>

  <div style=" width: 70%; margin-left: 25%; margin-top: 10%">
  	    <div class="text-right">
  	    <a class="btn btn-primary" href="add_headline.php">Add Headline</a> 
  	    	
   </div>
    <table class="table table-bordered">
       <tr>
         <th>Id</th>
         <th>Headline</th>
         <th>Update status</th>
       </tr>
        <?php
        include('db/connection.php');
        $query=mysqli_query($conn,"select * from headlines");
        while($row=mysqli_fetch_array($query)){

        ?>
        <tr>
          <td><?php echo $row['id'];?></td>
           <td><?php echo substr($row['headline_data'],0,100);?></td>
            <td><?php echo $row['update_status'];?></td>
            <td> <a href="edit_headline.php?edit=<?php echo $row['id']; ?>" class="btn btn-info" >edit</a></td>
            <td> <a href="delete_headline.php?del=<?php echo $row['id']; ?>" class="btn btn-danger" >delete</a></td>
        </tr>
       <?php } ?>  
    </table>

  </div>

  <?php
 include('include/footer.php')

  ?>