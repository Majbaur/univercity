<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>University Website Design </title>
    <link rel="shortcut icon" href="Education,_Studying,_University,_Alumni_-_icon.png"
        type="Education,_Studying,_University,_Alumni_-_icon.png/x-icon">
<link rel="stylesheet" href="indstyle.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<!--<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap">-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section class="header">
<nav>
    <a href="index.php"><img src="logo.png"></a>
    <div class="nav-links" id="navLinks">
    <i class="fa fa-times" onclick="hideMenu()"></i>
    <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="course.php">COURSE</a></li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="contact.php">CONTACT </a></li>
        </ul>
    </div>
    <i class="fa fa-bars" onclick="showMenu()"></i>
</nav>
<div class ="text-box">
<h1>World's Biggest University</h1>
<p>Making website is now one of the easiest thing in the world.You
just need to learn HTML,CSS,<br>Javascript and you are good to go.</p>
<a href="" class="hero-btn">Visit Us To Know More</a>
</div>       
</section>


<!--------course--------->
<section class="course">
<h1>Courses We Offer</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

<div class="row">
<div class ="course-col">
    <h3>Intermediate</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    pellentesque aliquet turpis nulla,eleifend faucibus eas
    solicitudin ut.Maecenas ut venenatis ex,et dapibus purus
    Donec sit.</p>
</div>

<div class ="course-col">
    <h3>Degree</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    pellentesque aliquet turpis nulla,eleifend faucibus eas
    solicitudin ut.Maecenas ut venenatis ex,et dapibus purus
    Donec sit.</p>
</div>

<div class ="course-col">
    <h3>Post Graduation</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    pellentesque aliquet turpis nulla,eleifend faucibus eas
    solicitudin ut.Maecenas ut venenatis ex,et dapibus purus
    Donec sit.</p>
</div>

</div>
</section>
<!-------campus-------->
<section class="campus">
<h1>Our Global Campus</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

<div class ="row">
<div class ="campus-col">
    <img src="london.png">
    <div class ="layer">
        <h3>LONDON</h3>
    </div>
</div>

<div class ="campus-col">
    <img src="newyork.png">
    <div class ="layer">
        <h3>NEW YORK</h3>
    </div>
</div>

<div class ="campus-col">
    <img src="washington.png">
    <div class ="layer">
        <h3>WASINGTON</h3>
    </div>
</div>
</div>
</section>

<!-------Facilities-------->
<section class="facilities">
<h1>Our Facilities</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

<div class ="row">
<div class ="facilities-col">
    <img src="library.png">
    <h3>World Class Library</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    pellentesque aliquet turpis nulla.</p>
</div>

<div class ="facilities-col">
    <img src="basketball.png">
    <h3>Largest Play Ground</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    pellentesque aliquet turpis nulla.</p>
</div>

<div class ="facilities-col">
    <img src="cafeteria.png">
    <h3>Tasty and Healthy Food</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    pellentesque aliquet turpis nulla.</p>
</div>
</div>

</section>


<!--------testimonials--------->
<section class="testimonials">
<h1>What Our Student Says</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
<div class ="row">
<div class ="testimonials-col">
    <img src="user1.jpg">
    <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing
        elit.pellentesque aliquet turpis nulla,eleifend
        faucibus est solicitudin ut.Maecenas ut venenatis ex,
        et dapibus purus.</p>
        <h3>Christine Berkley</h3>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
    </div>
</div>

<div class ="testimonials-col">
    <img src="user2.jpg">
    <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing
            elit.pellentesque aliquet turpis nulla,eleifend
            faucibus est solicitudin ut.Maecenas ut venenatis ex,
            et dapibus purus.</p>
            <h3>David Byer</h3>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
    </div>
</div>
</div>
</section>

<!-------Call To Action-------->

<section class="cta">
    <h1>Enroll For Our Various Online Courses<br> Anywhere From The
    World</h1>
    <a href=""class="hero-btn">CONTACT US</a>
</section>

<!-------Footer-------->

<section class="footer">
    <h4>About Us</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    pellentesque aliquet turpis nulla,eleifend faucibus est,<br>
    sollicitudin ut.Maecenas ut venenatis ex,et dapibus purus.</p>
    <div class ="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
    </div>
    <p>Made with <i class="fa fa-heart-o"></i> by Easy Tutorials</p>
</section>


<!--------JavaScript for Toggle Menu--------->
<script>
var navLinks=document.getElementById("navLinks");
function showMenu(){
navLinks.style.right="0";
}
function hideMenu(){
navLinks.style.right="-200px";
}
</script>
</body>
</html> 