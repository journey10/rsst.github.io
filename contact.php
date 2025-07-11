<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | RSST</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'include/header.php'; ?>

    <section class="heading-link">
        <h3>Contact Us</h3>
        <p><a href="home.php">Home</a> / Contact </p>
    </section>

    <section class="contact">

        <h1 class="heading"> Get in Touch with us </h1>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-clock"></i>
                <h3>Opening Hours: </h3>
                <p>00:07am to 00:06p</p>
            </div>

            <div class="icons">
                <i class="fas fa-phone"></i>
                <h3>Phone Number: </h3>
                <p>+63 9123456789</p>
                <p>+63 9123456780</p>
            </div>

            <div class="icons">
                <i class="fas fa-envelope"></i>
                <h3>Email Address: </h3>
                <p>nana@gmail.com</p>
                <p>nunu@gmail.com</p>
            </div>

            <div class="icons">
                <i class="fas fa-map"></i>
                <h3>Mailing Address: </h3>
                <p>Morong, Rizal</p>
            </div>
        </div>

        <div class="row">
            <div class="image">
                <img src="images/tes2.jpg" alt="">
            </div>

            <form action="">
                <h3>Send us a message!</h3>
                <input type="text" placeholder="Enter your name." class="box">
                <input type="email" placeholder="Enter your email." class="box">
                <input type="number" placeholder="Enter your number." class="box">
                <textarea name="" class="box" placeholder="Leave your message here." id="" cols="30" rows="10"></textarea>
                <input type="submit" value="Send Message" class="btn">
            </form>
        </div>
    </section>

    <section class="faq">
        <h1>Frequently Asked Questions</h1>
        <div class="accordion-container">
            <div class="accordion active">
                <div class="accordion-heading">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, excepturi.</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo officiis illum inventore vitae! Dignissimos, dolorum! Aperiam quisquam inventore ex libero!</p>
            </div>

            <div class="accordion">
                <div class="accordion-heading">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, excepturi.</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo officiis illum inventore vitae! Dignissimos, dolorum! Aperiam quisquam inventore ex libero!</p>
            </div>

            <div class="accordion">
                <div class="accordion-heading">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, excepturi.</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo officiis illum inventore vitae! Dignissimos, dolorum! Aperiam quisquam inventore ex libero!</p>
            </div>

            <div class="accordion">
                <div class="accordion-heading">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, excepturi.</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo officiis illum inventore vitae! Dignissimos, dolorum! Aperiam quisquam inventore ex libero!</p>
            </div>

            <div class="accordion">
                <div class="accordion-heading">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, excepturi.</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo officiis illum inventore vitae! Dignissimos, dolorum! Aperiam quisquam inventore ex libero!</p>
            </div>

            <div class="accordion">
                <div class="accordion-heading">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, excepturi.</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo officiis illum inventore vitae! Dignissimos, dolorum! Aperiam quisquam inventore ex libero!</p>
            </div>

        </div>  
    </section>


<section class="logo-container">
    <div class="swiper logo-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/coor.png" alt=""></div>
            <div class="swiper-slide"><img src="images/coor.png" alt=""></div>
            <div class="swiper-slide"><img src="images/coor.png" alt=""></div>  
            <div class="swiper-slide"><img src="images/coor.png" alt=""></div>
            <div class="swiper-slide"><img src="images/coor.png" alt=""></div>
            <div class="swiper-slide"><img src="images/coor.png" alt=""></div>
        </div>
    </div>
</section>





    <?php include 'include/footer.php';?>
    
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>