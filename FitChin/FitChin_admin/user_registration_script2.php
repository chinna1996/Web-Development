<?php
    require 'connection2.php';
    session_start();
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        echo "Incorrect email. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup2.php" />
        <?php
    }
    $password=md5(md5(mysqli_real_escape_string($con,$_POST['password'])));
    if(strlen($password)<6){
        echo "Password should have atleast 6 characters. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup2.php" />
        <?php
    }
    $contact=$_POST['contact'];
    $duplicate_user_query="select id from users_personaltrainers where email='$email'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        //duplicate registration
        //header('location: signup2.php');
        ?>
        <script>
            window.alert("Email already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=signup2.php" />
        <?php
    }else{
        $user_registration_query="insert into users_personaltrainers(name,email,password,contact) values ('$name','$email','$password','$contact')";
        //die($user_registration_query);
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
        echo "User successfully registered";
        $_SESSION['email']=$email;
        //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
        $_SESSION['id']=mysqli_insert_id($con);
        //header('location: signup2.php');  //for redirecting
        ?>
        <meta http-equiv="refresh" content="3;url=index.php" />
        <?php
    }

?>
