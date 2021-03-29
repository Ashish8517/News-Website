
<?php
 error_reporting(0);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
     <!--logo css link-->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <title>Host Programming</title>
            <script>
                function display_ct6() {
                    var x = new Date()
                    var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
                    hours = x.getHours( ) % 12;
                    hours = hours ? hours : 12;
                    var x1= "Date and Time : " +x.getDate() + "/" + (x.getMonth() + 1 ) + "/" + x.getFullYear(); 
                    x1 = x1 + " - " +  hours + ":" +  x.getMinutes() + ":" +  x.getSeconds() + "-" + ampm;
                    document.getElementById('ct6').innerHTML = x1;
                    display_c6();
                }
                function display_c6(){
                    var refresh=1000; // Refresh rate in milli seconds
                    mytime=setTimeout('display_ct6()',refresh)
                }
                display_c6()
            </script>
            <span id='ct6' style="background-color: transparent; color: #303030 ; font-size: 12px; float: right; font-weight: bold;"></span>
            <style>
              #myBtn {
                display: none;
                position: fixed;
                bottom: 20px;
                right: 30px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                background-color: rgb(212, 84, 84);
                color: white;
                cursor: pointer;
                padding: 10px;
                border-radius: 50px;
              }

              #myBtn:hover {
                background-color: #555;
              }
            </style>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <link href="style/blog.css" rel="stylesheet">
       

        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  </head>

  <body>

    <div class="container-fluid">

      <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

        <span  id='ct' onload=display_ct();></span>


        <a href="index.php"><img src="images/logo.png"  width="120" height="50" alt="" loading="lazy" style="padding-top: 5px;"></a>

      <!-- header -->
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <hr>
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
               <?php
               include('db/connection.php');
                $query1=mysqli_query($conn,"select * from category");
                while($row=mysqli_fetch_array($query1)){                

               ?>
              <li class="nav-item" ><a class="nav-link" href="category_page.php?single=<?php echo$row['category_name'];  ?>"><?php echo $row['category_name']; ?> </a></li>
              <?php } ?>
              <li class="nav-item active"><a class="nav-link" href="contect.php"> Contact us</a></li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    More
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Articles</a>
                    <a class="dropdown-item" href="#">Daily Editorials</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Horoscope</a>
                  </div>
              </li>
            </ul>
              <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
                <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">Search</button>
              </form>
          </div>
        </nav>
        <br><br>
      <!-- header -->  

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Contect Us
          </h3>


          <div class="blog-post">
     <form action="contect.php" method="post" class="needs-validation" novalidate>
      <div class="form-group">

    <label for="uname">Enter Your Name:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter Your Name" name="name" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="pwd">Email:</label>
    <input type="email" class="form-control" id="pwd" placeholder="Enter email" name="email" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
 <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea name="comment" class="form-control" rows="5" id="comment"></textarea>
</div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<?php
 include('db/connection.php');

 if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $comment=$_POST['comment'];

  $query=mysqli_query($conn,"insert into comment(name,email,comment)values('$name','$email','$comment') ");
  if ($query) {
    echo "<script>alert('your comment has been send ')";
    
  }else{
    echo "Please try again";

  
  }
 }



?>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>


           
          </div><!-- /.blog-post -->
  
        
        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
