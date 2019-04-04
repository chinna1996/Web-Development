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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                <div class="jumbotron">
                    <h1>FitChin Store</h1>
                    <p>We have the best protein, snacks and accessories for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_proteinpowder.php">
                                <img src="img/protein.jpg" alt="Protein" style="width:500px;height:300px;">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Protein Powder</h3>

                                    <span style="color:gold" class="fa fa-star"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <br>
                                    <p>Price: £34.99</p>


                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_bcaa.php">
                                <img src="img/bcaa.jpg" alt="BCAA" style="width:500px;height:300px;">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>BCAA</h3>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <br>
                                    <p>Price: £14.99</p>

                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_preworkout.php">
                                <img src="img/preworkout.png" alt="Preworkout" style="width:500px;height:300px;">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Preworkout</h3>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <br>
                                    <p>Price: £19.99</p>

                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_proteinshake.php">
                                <img src="img/proteinshake2.jpg" alt="Protein Shake" style="width:500px;height:300px;">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Protein Shake</h3>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star"></span>
                                    <span style="color:gold" class="fa fa-star"></span>
                                    <br>
                                    <p>Price: £24.99</p>

                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_milk.php">
                                <img src="img/milk.jpg" alt="Milk" style="width:500px;height:300px;">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Milk</h3>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span  class="fa fa-star"></span>
                                    <span  class="fa fa-star"></span>
                                    <br>
                                    <p>Price: £4.99</p>

                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_gymbites.php">
                                <img src="img/gymbites.jpg" alt="Gymbites" style="width:500px;height:300px;">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Gymbites</h3>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <br>
                                    <p>Price: £7.99</p>

                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_proteinbar.php">
                                <img src="img/proteinbars.jpg" alt="Proteinbars" style="width:500px;height:300px;">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Protein Bar</h3>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star"></span>
                                    <span style="color:gold" class="fa fa-star"></span>
                                    <br>
                                    <p>Price: £2.49</p>

                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_proteinoatmeal.php">
                                <img src="img/proteinoatmeal.png" alt="Proteinoatmeal" style="width:500px;height:300px;">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Protein Oatmeal</h3>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <br>
                                    <p>Price: £2.99</p>

                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_foodtub.php">
                                <img src="img/tub.jpg" alt="Tub" style="width:500px;height:300px;">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Food Tub</h3>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star"></span>
                                    <span style="color:gold" class="fa fa-star"></span>
                                    <br>
                                    <p>Price: £0.99</p>

                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_watch.php">
                                <img src="img/watches.png" alt="Watches" style="width:500px;height:300px;">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Smart Watch</h3>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star"></span>
                                    <span style="color:gold" class="fa fa-star"></span>
                                    <br>
                                    <p>Price: £49.99</p>

                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_gymbag.php">
                                <img src="img/gymbag.jpg" alt="Gymbag" style="width:500px;height:300px;">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Gymbag</h3>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <br>
                                    <p>Price: £24.99</p>

                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_handstraps.php">
                                <img src="img/handstraps.jpg" alt="Handstraps" style="width:500px;height:300px;">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Handstraps</h3>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star checked"></span>
                                    <span style="color:gold" class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <br>
                                    <p>Price: £6.49</p>

                                </div>
                            </center>
                        </div>
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
