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
                          <a href="cart.php">
                              <img src="img/milk.jpg" alt="Milk" style="width:500px;height:300px;">
                          </a>

                      </div>
                  </div>


                  <div class="col-xs-4">
                      <div class="thumbnail">
                        <center>
                        <h2><font color="red">Milk</font></h2>
                      </center>

                        <center>
                            <div class="caption">

                                <p>Price: £4.99</p>
                                <br>
                                <p>Quantity:</p>
                                <input type="number" name="quantity" min="1" max="50" value="<?php echo $item["quantity"]; ?>">
                                <br><br><br>
                                <?php if(!isset($_SESSION['email'])){  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    }
                                    else{
                                        if(check_if_added_to_cart(5)){
                                            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                        }else{
                                            ?>
                                            <a href="cart_add_milk.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                            <?php
                                        }
                                    }
                                    ?>
                            </div>
                        </center>


                  </div>
                </div>

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
