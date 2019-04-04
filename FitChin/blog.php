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
                  <h1 style="font-family:Verdana Pro Black;"><font color="red">THE FITCHIN BLOG</font></h1>
                  <br>
                  <p style="font-family:Verdana Pro Black;"><font color="red">Browse through a collection of of articles on personal training, sports performance and lifestyle tips .</font></p>


                   <div class="col-xs-4">
                       <div class="thumbnail">


                           <a href="https://collectivedge.com/blog/new-year-new-top-6-health-fitness-bloggers/">
                                <img src="img/newyear.jpg" alt="Male" style="width:500px;height:400px;">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">New Year New Health</p>

                                </div>
                           </center>

                   </div>
                 </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="https://bucketlistjourney.net/run-5k-race/">
                               <img src="img/5km.jpg" alt="Female" style="width:500px;height:400px;">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Train for your 5KM</p>

                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="https://mattroberts.co.uk/articles/all-or-nothing-how-a-dichotomous-mindset-is-hindering-your-health-fitness-goals/">
                               <img src="img/mindset.jpg" alt="Male2" style="width:500px;height:400px;">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Your Mindset </p>

                                </div>
                           </center>
                       </div>
                   </div>


                   <div class="col-xs-4">
                       <div class="thumbnail">
                       <a href="https://www.igeeksblog.com/best-calorie-counter-iphone-apps/">
                               <img src="img/calorieapp.jpg" alt="Male2" style="width:500px;height:400px;">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Best Calorie Counter Apps</p>

                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="https://bethtrueman.com/staying-fit-healthy-whilst-at-uni/">
                               <img src="img/myself.jpg" alt="Male2" style="width:500px;height:400px;">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">How to stay fit at Uni</p>

                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="https://www.thetrainingroom.com/blog/fitness/august-2018/how-to-become-a-personal-trainer">
                               <img src="img/pt.jpg" alt="Male2" style="width:500px;height:400px;">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Become your own Personal Trainer</p>

                                </div>
                           </center>
                       </div>
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
