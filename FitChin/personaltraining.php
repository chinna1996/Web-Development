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
                  <h1 style="font-family:Verdana Pro Black;"><font color="red">MEET OUR PT'S</font></h1>
                  <h3 style="font-family:Verdana Pro Black;"><font color="red">PERSONAL TRAINERS FITCHIN</font></h3>

                  <p style="font-family:Verdana Pro Black;"><font color="red">There are many different reasons to join the gym, whether it is to lose weight, gain muscle mass or just to keep fit. To ensure you make the most of
                  out of your FitChin experience, our personal trainers can provide you with the right advice and support to achieve your fitness goals.</font></p>

                  <h3 style="font-family:Verdana Pro Black;"><font color="red">BOOK YOUR PERSONAL TRAINER NOW!</font></h3>
                  <p style="font-family:Verdana Pro Black;"><font color="red">The personal trainers here at FitChin, have plenty of experience when delivering training programmes that adhere to your personal goals. All FitChin personal trainers
                    are accredited</font></p>



                   <div class="col-xs-4">
                       <div class="thumbnail">


                           <a href="malefactfile.php">
                                <img src="img/male5.jpg" alt="Male" style="width:500px;height:400px;">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Hayden Austin</p>

                                </div>
                           </center>

                   </div>
                 </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="femalefactfile.php">
                               <img src="img/female.jpg" alt="Female" style="width:500px;height:400px;">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Annabel Key</p>

                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="malefactfile2.php">
                               <img src="img/male2.jpg" alt="Male2" style="width:500px;height:400px;">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Jake Sweet</p>

                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                              <a href="femalefactfile2.php">
                               <img src="img/female2.jpg" alt="Female2" style="width:500px;height:400px;">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Savannah Sandoval</p>

                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                              <a href="malefactfile3.php">
                               <img src="img/male6.jpg" alt="Male6" style="width:500px;height:400px;">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Gareth Humphrey</p>

                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                              <a href="femalefactfile3.php">
                               <img src="img/female4.jpg" alt="female4" style="width:500px;height:400px;">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Jane Taylor</p>

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
