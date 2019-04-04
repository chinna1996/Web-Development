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
            <h2 style="font-family:Verdana Pro Black;"><font color="red">Get to know FitChin!</font></h2>
            <p style="font-family:Verdana Pro Black;"><font color="red">An upcoming sports brand, delivering a range of quality products such as protein powder, high-protein foods, accessories as well as, proving personal training.</font></p>
            <br>
            <p style="font-family:Verdana Pro Black;"><font color="red">Started up in 2018, FitChin is based around Leicester and hoping to expand to various other locations nationwide. The aim is to inspire newcomers to the fitness world, to be able to achieve their fitness potential, and hopefully inspire others.</font></p>


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
