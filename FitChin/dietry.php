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
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
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

           <div class="container">


               <div class="row">
                  <h2 style="font-family:Verdana Pro Black;"><font color="red">Any Dietry Preferences?</h2>

                   <div class="col-xs-4">
                       <div  class="thumbnail">

                           <a href="leanmusclenone.php">
                                <img src="img/none.jpg" alt="None" style="width:500px;height:300px;">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">None</p>

                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="leanmusclevegan.php">
                               <img src="img/vegan.jpg" alt="Vegan" style="width:500px;height:300px;">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Vegan</p>

                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="leanmusclegluten.php">
                               <img src="img/gluten.jpg" alt="Gluten" style="width:500px;height:300px;">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Gluten</p>

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
