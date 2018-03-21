<!DOCTYPE html>
<html lang="en">
<head>
<style>
.first{
  font-style:italic;
  font-size:20px;
  color:blue;
 }
.drama{
  height:440px;
  width:950px;
}
.sing{
  height:440px;
   width:950px;
}
.classical{
  height:440px;
   width:950px;
}
.button {
    background-color: black;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius:50%;
}
</style>
<title>Events</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link href="http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen">
</head>
<body>
<form action="register.php" method="post">
<header>
  <div class="line-top"></div>
  <div class="main">
    <div class="row-top">
      <h1 class="first"><a href="index.html">Event <br>Management System</a></h1>
     <nav>
        <ul class="sf-menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="addevents.php">Add Events</a> </li>
          <li><a href="viewevents.php">View Events</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </div>
  </div>
  </header>
<div class="box-slogan">
   class:<input type="text" name="class"><br><br>
   email:<input type="text" name="email"><br><br>
   password:<input type=="text" name="password"><br><br>
   password:<input type=="text" name="r_password"><br><br>
   <input type="submit" name="submit" value="submit">
  </div>
<footer>
  <div class="main">
    <ul class="soc-list">
      <li><a href="#"><img alt="" src="images/icon-1.png"></a></li>
      <li><a href="#"><img alt="" src="images/icon-2.png"></a></li>
      <li><a href="#"><img alt="" src="images/icon-3.png"></a></li>
      <li><a href="#"><img alt="" src="images/icon-4.png"></a></li>
    </ul>
    <div class="policy">Design by: <a href="http://www.templatemonster.com">Dreamers Group</a> </div>
    <div class="clear"></div>
  </div>
</footer>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "digital";
$class = $_POST['class'];
$email= $_POST['email'];
$password = $_POST['password'];
$r_password = $_POST['r_password'];
$dbname = "digital";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO signup(class,email,password,r_password)
VALUES ('$class', '$email', '$password' , '$r_password')";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
</body>
</html>