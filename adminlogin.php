
<html>
<head>
<style>
#home {
    width: 100px;
    height: 80px;
    background: url(img_navsprites.gif) 0 0;
}

#next {
    width: 150px;
    height: 80px;
    background: url(img_navsprites.gif) -91px 0;
}
#last{
    width: 150px;
    height: 80px;
    background: url(img_navsprites.gif) -91px 0;
    float: right;
    }
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #336BFF;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    text-align: center;
}
span.psw {
    float: right;
    padding-top: 16px;
}
#login{
	position: absolute;
	top: calc(50% - 150px);
	left: calc(50% - 150px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}
#em{
   width:150px;
   height:120px;
   position: absolute;
}
.signup{
   width: 18%;
   text-align: right;
   margin: 50px 0;
}
#button{
background-color: #336BFF;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    text-align: center;
}
</style>
</head>
<body>
<img id="home" src="india.png">
<img id="next" src="digi.png">
<img id="next" src="mob.jpg" align="right">
 <div id="main">
<div id="login">
<h2>Admin Login</h2>
<form action="admin.php" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="email" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login " id="button">
<span><?php echo $error; ?></span>
</form>
</div>
</div>


<?php
include('config.php');
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("digital", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from admin where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
header("location: admin.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>
 


?>
