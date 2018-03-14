<html>
  <head>
     <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <div class="start">
    <img src="https://image3.mouthshut.com/images/imagesp/925888329s.jpg" width="80" height="80" >
    <h1>VISHNU SOCIETY</h1>
    <ul class="list">
      <span><a href="index.php">Home</a></span>
      <span><a href="reg.php">Register</a></span>
       <span><a href="login.php">Login</a></span>
        <span><a href="adminreg.php">Admin</a></span>
    </ul>
    </div>
    <h2>VISHNU INSTITUTE OF TECHNOLOGY </h2>
<div class="container">

<div class="mySlides">
  <img src="http://vishnu.edu.in/uploadnews/inau1213_8.JPG" style="width:100%">
</div>

<div class="mySlides">
  <img src="http://www.vishnu.edu.in/uploadnews/r5.jpg" style="width:100%">
</div>

<div class="mySlides">
  <img src="https://content1.jdmagicbox.com/comp/bhimavaram/24/9999pmulhydstd87324/catalogue/vishnu-institute-of-technology-bhimavaram-ho-bhimavaram-colleges-aeq4ccz.jpg" style="width:100%">
</div>

<div class="mySlides">
  <img src="http://static.learnof.com/learnof/ImageUploads/institute-gallery/original/3987_VishnuInstituteOfTechnologyVITBBhimavaram_1422678552_original.jpg" style="width:100%">
</div>


<button class="left" onclick="plusDivs(-1)">&#10094;</button>
<button class="right" onclick="plusDivs(1)">&#10095;</button>
    <h2>LOST AND FOUND ITEMS</h2>
    <P>Here, you can found the lost items in vishnu society. We are here to help you out with the lost items. We will be placing the list of items in this page.</p>
    <img src="https://s3.amazonaws.com/images.shulcloud.com/392/uploads/Lost%20and%20Found%20Box.jpg">
    
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
  </body>
</html>
	


