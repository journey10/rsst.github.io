<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | RSST</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'include/header.php';?>

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <section class="swiper-slide slide" style="background: url(images/using/bbg1.jpg) no-repeat;"></section>
            <section class="swiper-slide slide" style="background: url(images/using/bbg2.jpg) no-repeat;"></section>
            <section class="swiper-slide slide" style="background: url(images/using/bbg3.jpg) no-repeat;"></section>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="content">
        <h3>Discover the Best Courses Here.</h3>
        <p>Unlock your potential with our expertly curated courses designed to inspire, challenge, and elevate your skills in every field</p>
        <a href="#" class="btn">Get Started!</a>
        
    </div>
</section>



<section class="about-school">

    <div class="content">
        <h3 class="about-title">Empowering Minds, Shaping Futures with Science, Technology, and Innovation.</h3>
        <p>Renaissance School of Science & Technology, RSST (formerly The PRISMS) is the product of years of work, study, planning and experience by many individuals. The idea to create a quality preparatory, elementary, secondary and Technical Vocational Two (2) years Ladderized Courses in Morong, Rizal began as a response to the community's increasing demand for quality education with emphasis on modern Science, Mathematics, Development in Education Values, Information Technology, business-related training and global changes</p>

        <a href="#" class="btn">About Us</a>
    </div>
        <div class="image">
        <img src="images/logu.jpg" alt="">
    </div>
</section>

<section class="subjects">
        <h1 class="heading">Academics</h1>
        <p>Discover excellence in education at <strong>Renaissance School of Science and Technology</strong> — where personalized learning, inspiring teachers, and a nurturing community empower your child to shine! Enroll today for a brighter tomorrow.</p>
<br><br><br>
        <div class="box-container">

            <div class="box">
                <img src="images/logu.jpg" alt="">
                <h3>Basic Education Department</h3>
                <p>K-12 Curriculum</p>
                <a href="#" class="btn">Learn more</a>
            </div>
        
            <div class="box">
                <img src="images/logu.jpg" alt="">
                <h3>College Department</h3>
                <h3></h3><h3></h3>
                <p>4 Years Courses</p>
                <a href="#" class="btn">Learn more</a>
            </div>
        
            <div class="box">
                <img src="images/using/logo2.png" alt="">
                <h3>Diploma Department</h3>
                <h3></h3><h3></h3>
                <p>3 Years Courses</p>
                <a href="#" class="btn">Learn more</a>
            </div>

            <div class="box">
                <img src="images/using/logo2.png" alt="">
                <h3>TESDA Courses</h3>
                <h3></h3><h3></h3>
                <p>Short-Term Courses</p>
                <a href="#" class="btn">Learn more</a>
            </div>
        </div>
</section>

<?php include 'collegeDep.php'; ?>



<?php include 'include/footer.php';?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>