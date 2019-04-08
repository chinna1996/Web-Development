<?php
session_start();
?>

<?php
 require 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
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
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #FF0000;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     }
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<style>
body {
background-image: url("img/background.jpg");
background-position: 100;
background-repeat: repeat;
background-size: cover;
}
</style>
 <table>
 <tr>
  <th>Name</th>

 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "store");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT name FROM users";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["name"]. "</td><td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<center>
  <a href="login3.php">
<img src="img/back.png" alt="Button">
<a href="emaillogin.php">
<img src="img/email.png" alt="Button">
</center>

<br><br> <br><br><br><br>
<footer class="footer">
   <div class="container">
   <center>
        <p>Copyright &copy FitChin. All Rights Reserved.</p>

   </center>
   </div>
</footer>
</body>
</html
