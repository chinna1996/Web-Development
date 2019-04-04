<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>

        <title>FitChin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        
        <!-- External CSS -->

    </head>
    <style>
body {
  background-image: url("img/background.jpg");
  background-position: 100;
  background-repeat: repeat;
  background-size: cover;
}
</style>
        <div>
           <?php
            require 'header.php';
           ?>

<center>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/protein.jpg" alt="Protein" style="width:2000px;height:600px;" >
        <div class="carousel-caption">
          <h3>Protein Powder</h3>
          <p>Available to purchase in the shop!</p>
        </div>
      </div>

      <div class="item">
        <img src="img/personaltrainer.jpg" alt="Personal Trainer" style="width:2000px;height:600px;" >
        <div class="carousel-caption">
          <h3>Personal Training</h3>
          <p>We have the best PT's around! Have a look!</p>
        </div>
      </div>

      <div class="item">
        <img src="img/running.jpg" alt="Blog" style="width:2000px;height:600px;" >
        <div class="carousel-caption">
          <h3>Blogs</h3>
          <p>Want some inspiration? Check our blogs!</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</center>



         <center>
         <h1 style="font-family:Verdana Pro Black;"><font color="red">Shop By Category</font></h1>
         </center>

           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/protein.jpg" alt="Protein" style="width:500px;height:300px;">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Protein & Amino Acids</p>
                                        <p>Browse among the best avaliable to maximise your workout performance.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/proteinbars.jpg" alt="Protein Bar" style="width:500px;height:300px;">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Food & Snacks</p>
                                    <p>A Mouthwatering selection to choose from. </p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/skippingrope.jpg" alt="Accessories" style="width:500px;height:300px;">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Accessories</p>
                                   <p>An exqusite collection of Accessories.</p>
                               </div>
                           </center>
                       </div>
                   </div>

               </div>
           </div>
            <br><br> <br><br><br><br>
            <footer class="footer">
                <div class="container">
                <center>
                     <p>Copyright &copy FitChin. All Rights Reserved.</p>

                </center>
                </div>
            </footer>
        </div>
    </body>
</html>
