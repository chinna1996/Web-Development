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

           </div>
           <div class="container">


               <div class="row">
                  <h2 style="font-family:Verdana Pro Black;"><font color="red">New To Supplements?</font></h2>
                  <p style="font-family:Verdana Pro Black;"><font color="red">Dont worry, you're in the right place. We sell products that fit and supporrt your fitness goals.</font></p>
                   <div class="col-xs-4">
                       <div  class="thumbnail">

                           <a href="goal.php">
                                <img src="img/male2.jpg" alt="Male2">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Male</p>

                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="femalegoal.php">
                               <img src="img/female.jpg" alt="Female">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Female</p>

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
