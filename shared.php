<html>
<head>
<style>
.button1{
margin: 10px 1600px;
}
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
div.container
{
  width: 100%;
border: 1px solid gray;
background-image:url("C:\Users\Hema Lulla\Desktop\wp 4 sem\amazon.jpeg");
 }
nav 
{
    float: left;
    font-size:20;
    max-width: 160px;
    margin: -2;
    padding: 0em;
}
article
{
    margin-left: 200px;
    border-left: 1px solid gray;
     height:70%; 
     padding:8em;
}
.button {
background-color:  blue;
    border: none;
    color: white;
    padding:10px 55px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 3px 3px;
    cursor: pointer;
    left:50%;
}
.button {border-radius: 20px;}


</style>
</head>
<body>
<img id="home" src="india.png">
<img id="next" src="digi.png">
<img id="next" src="mob.jpg" align="right">
<a href= "logout.php" class="button1">logout</a><br>
<div class="container">
<nav>
<a href= "dashboard.php" class="button">Dashboard</a><br>
<a href= "issued.php" class="button">Issued Documents</a><br>
<a href= "shared.php" class="button">Shared Documents</a><br>
<a href= "upload.php" class="button">Uploaded Documents</a><br>



</nav>
<article>
<a href="https://accounts.google.com/ServiceLogin?hl=en&passive=true&continue=https://www.google.co.in/%3Fgfe_rd%3Dcr%26ei%3DfJX6WMObA5Ly8AeVpoRQ">CLICK HERE TO SHARE THE DOCUMENTS USING YOUR GMAIL</a>
</article>
<?php
session_start();
?>

</body>

</html>