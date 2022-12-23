<?php

?><html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <title>Home</title>
</head>
<body>
  <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<?php

include 'html/menu.html';

?>
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img/slide1.jpg" style="width:100%;height:80%">
    <div class="text">Welcome to our site<a href="index.php"> home</a></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img/slide2.jpg" style="width:100%;height:80%">
    <div class="text">Learn all languages and its practicals</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img/slide3.jpg" style="width:100%;height:80%">
    <div class="text">Download all type of materials here</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onClick="plusSlides(-1)">&#10094;</a>
  <a class="next" onClick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onClick="currentSlide(1)"></span>
  <span class="dot" onClick="currentSlide(2)"></span>
  <span class="dot" onClick="currentSlide(3)"></span>
</div>
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>
<?php include 'html/footer.html';
?>
</body>
</html>
