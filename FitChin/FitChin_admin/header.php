
  <a href="index.php"</a>
<img src="img/logo.jpg" alt="Male" style="width:150px;height:100px;">

<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>




                   </div>

                   <div class="collapse navbar-collapse" id="myNavbar">
                  <a href="newtosupplements.php" class="navbar-brand"> New to Supplements </a>
                  <a href="blog.php" class="navbar-brand"> Blog </a>
                  <a href="personaltraining.php" class="navbar-brand"> Personal Training </a>
                  <a href="aboutus.php" class="navbar-brand"> About Us </a>

                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           <?php
                           }else{
                            ?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           <li><a href="login3.php"><span class="glyphicon glyphicon-user"></span> PT Portal</a></li>
                           <li><a href="FitChin_admin/login.php"><span class="glyphicon glyphicon-lock"></span> Admin</a></li>
                           <?php
                           }
                           ?>

                       </ul>
                   </div>
               </div>
</nav>
