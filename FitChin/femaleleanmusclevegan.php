<?php
    session_start();
    require 'check_if_added.php';
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
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>FitChin Store</h1>
                    <p>We have the best protein, snacks and accessories for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">

                                <img src="img/vegan10.jpg" alt="Protein">

                            <center>
                                <div class="caption">
                                    <h3>Whey Protein</h3>
                                    <p>COMING SOON</p>


                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">

                                <img src="img/vegan11.jpg" alt="BCAA">

                            <center>
                                <div class="caption">
                                    <h3>BCAA</h3>
                                    <p>COMING SOON</p>

                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">

                                <img src="img/vegan12.jpg" alt="Preworkout">

                            <center>
                                <div class="caption">
                                    <h3>Preworkout</h3>
                                    <p>COMING SOON</p>

                                </div>
                            </center>
                        </div>
                    </div>

            </div>
            <br><br><br><br><br><br><br><br>
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
