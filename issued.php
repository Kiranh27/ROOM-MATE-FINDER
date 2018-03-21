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
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
#imagelist{
border: thin solid silver;
float:left;
padding:5px;
width:auto;
margin: 0 5px 0 0;
}
p{
margin:0;
padding:0;
text-align: center;
font-style: italic;
font-size: smaller;
text-indent: 0;
}
#caption{
margin-top: 5px;
}
img{
height: 225px;
}


</style>
</head>
<body>
<form action="addexec.php" method="post" enctype="multipart/form-data" name="addroom">
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
<br />
<h2>Issued Documents<h2>
<br />
<br />
<?php
session_start();
include('config.php');
$result = mysql_query("SELECT * FROM photos");
while($row = mysql_fetch_array($result))
{
echo '<div id="imagelist">';
echo '<p><img src="'.$row['location'].'"></p>';
echo '<p id="caption">'.$row['caption'].' </p>';
echo '</div>';
}

?>



</article>
</body>

</html>