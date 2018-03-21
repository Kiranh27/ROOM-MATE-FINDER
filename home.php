<?php
include('login.php');
 if(isset($_SESSION['login_user'])){
header("location: dashboard.php");
}
?>
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
<div>
<img id="cocuk" src="lock.gif">
</div>
 <div id="main">
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="email" placeholder="email" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login " id="button">
<span><?php echo $error; ?></span>
</form>
</div>
</div>

<h1> Don't you have an account???</h1>
<img id="em" src="emoticon.jpg">
<a href="signup.php">
<button class="signup">Sign Up</button>
</a>
<br><br>
<a href="adminlogin.php">admin login</a>
</body>
</html>