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
                  <h2 style="font-family:Verdana Pro Black;"><font color="red">Savannah Sandoval</h2>

                  <p style="font-family:Verdana Pro Black;"><font color="red">Hello I am Savannah Sandoval.</p>

                  <div class="col-xs-3">
                      <div class="thumbnail">



                               <img src="img/female2.jpg" alt="female" style="width:500px;height:300px;">



                  </div>
                </div>

                  <p style="font-family:Verdana Pro Black;"><font color="red">I am a personal trainer from Lincoln, with over 7 years of experience. With all this experience,
                  I understand the mindset it takes to achieve your goals.</p>

                  <p style="font-family:Verdana Pro Black;"><font color="red">If you want to know more feel free to contact me</p>

                  <p style="font-family:Verdana Pro Black;"><font color="red">Fun Fact: I have competed in the UK National Championships for BodyBuilding!</p>


                    <div class="col-xs-4">
                        <div class="thumbnail">
                          <h2><font color="red">SPECIALIST AREAS</font></h2>
                          <p>Detailed plan for your natural shape and lifestyle</p>
                          <br>
                          <p>Body confidence</p>
                          <br>
                          <p>Body fat reduction</p>
                          <br>
                          <p>Muscle tone and development</p>
                          <br>
                          <p>Nutritional guidance</p>
                          <br>
                          <p>Persistant motivation</p>
                          <br>
                          <p>Weight loss</p>




                    </div>
                  </div>
                  <div class="col-xs-4">
                      <div class="thumbnail">
                        <h2><font color="red">QUALIFICATIONS</font></h2>
                        <p>Level 3 Personal Trainer</p>
                        <br>
                        <p>Level 2 Fitness Instructor</p>





                  </div>
                </div>

                <div class="col-xs-4">
                    <div class="thumbnail">
                      <h2><font color="red">CONTACT</font></h2>
                      <p>Click the button beloew to view contact details</p>

                      <?php if(!isset($_SESSION['email'])){  ?>
                          <a href="login2.php">
                            <img src="img/click.png" alt="Button">
                          <?php
                          }

                            else{
                                  ?>
                                  <a href="contact.php">
                                    <img src="img/click.png" alt="Button">
                                  <?php
                              }

                          ?>

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
