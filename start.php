<!Doctype html>
<html>
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
</style>
<body>

<img id="home" src="india.png">
<img id="next" src="digi.png">
<img id="next" src="mob.jpg" align="right">
<a href="home.php">
<img id="next" src="st.jpg" align="right">
</a>
<div class="w3-content w3-section" style="max-width:2000px">
  <img class="mySlides" src="cbse_banner.jpg" style="width:100%">
  <img class="mySlides" src="morth_banner.jpg" style="width:100%">
  <img class="mySlides" src="lpg_banner.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>


</body>
</html>