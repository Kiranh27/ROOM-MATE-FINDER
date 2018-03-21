<html>
<head>
<style>
#Sign-Up{ background-image:url('sign-up.png'); background-size:500px 500px; background-repeat:no-repeat; background-attachment:fixed; background-position:center; margin-top:150px; margin-bottom:150px; margin-right:150px; margin-left:450px; padding:9px 35px; } #button{ border-radius:10px; width:100px; height:40px; background:#FF00FF; font-weight:bold; font-size:20px; }


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
/* Full-width input fields */
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
    background-color: #334FFF;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #FF3349;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {float:left;width:50%}

/* Add padding to container elements */
.container {
    padding: 16px;
}

</style>
</head>
<body>
<img id="home" src="india.png">
<img id="next" src="digi.png">
<img id="next" src="mob.jpg" align="right">
 <!DOCTYPE HTML> 
<body id="body-color"> 
<div id="Sign-Up"> 
<fieldset style="width:30%">
<legend>Registration Form</legend> 
<table border="0"> 
<tr> 
<form method="POST" action="signup.php"> 
<td>
Name
</td>
<td> 
<input type="text" name="name">
</td> 
</tr> 
<tr> 
<td>
Class
</td>
<td> 
<input type="text" name="class">
</td> 
</tr> 
<tr> 
<td>
Email
</td>
<td> 
<input type="text" name="email">
</td> 
</tr> 
<tr> 
<td>
UserName
</td>
<td> 
<input type="text" name="user">
</td> 
</tr> 
<tr> 
<td>
Password
</td>
<td> 
<input type="password" name="password">
</td> 
</tr> 
<tr> 
<td>
Confirm Password 
</td>
<td>
<input type="password" name="cpass">
</td> 
</tr> 
<tr> 
<td>
<input id="button" type="submit" name="submit" value="Sign-Up">
</td> 
</tr> 
<a href = "home.php">GO TO LOGIN FORM</a>
</form> 
</table> 
</fieldset> 
</div> 
<a href = "home.php">GO TO LOGIN FORM</a>
</body>
<?php
include('config.php');
 function NewUser()
 { 
$name = $_POST['name'];
 $class = $_POST['class'];
 $email = $_POST['email'];
 $user = $_POST['user'];
 $password = $_POST['password'];
 $query = "INSERT INTO websiteusers (fullname,class,username,email,password) VALUES ('$name','$class','$user','$email','$password')";
 $data = mysql_query ($query)or die(mysql_error());
 if($data) 
{ echo "YOUR REGISTRATION IS COMPLETED..."; 
}
 }
 function SignUp()
 { if(!empty($_POST['user'])) 
 { $query = mysql_query("SELECT * FROM websiteusers WHERE username = '$_POST[user]' AND password = '$_POST[password]'") or die(mysql_error()); if(!$row = mysql_fetch_array($query) or die(mysql_error())) { newuser(); } else { echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; } } } if(isset($_POST['submit'])) { SignUp(); } ?>

?>
</html>