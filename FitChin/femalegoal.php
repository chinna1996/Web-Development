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
                  <h2 style="font-family:Verdana Pro Black;"><font color="red">What's Your Goal?</h2>

                   <div class="col-xs-4">
                       <div  class="thumbnail">

                           <a href="femaleleanmuscledietry.php">
                                <img src="img/female6.jpg" alt="Female2" style="width:500px;height:400px;">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Lean Muscle</p>

                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="femaleweightlossdietry.php">
                               <img src="img/female3.jpg" alt="Female3" style="width:500px;height:400px;">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Weight Loss</p>

                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="femalemusclemassdietry.php">
                               <img src="img/female4.jpg" alt="Female4" style="width:500px;height:400px;">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Muscle Mass</p>

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
