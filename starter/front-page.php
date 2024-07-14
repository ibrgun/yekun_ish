<?php


get_header();
?>
<main class="home-page">
    <!--First section-->
    <section class="home-section-1">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/travel.jpg' ?>" alt="BG">
        <div class="hero-content">
            <h1 class="hero-title">Your Imagination Is Your Only Limit</h1>
            <p class="hero-text">We always try to make our customer Happy. We provide all kind of facilities. Your Satisfaction is our main priority</p>
            <button class="hero-button">Discover More</button>
        </div>
    </section>
    <!--Second section-->
    <section class="services">
       <h2 class= 'title'> Our Service</h2>
        <div class= "service-container">
            <div class="service">
                <div class="icon ticket"></div>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/Vector.png' ?>">
                <h3>Ticket Booking</h3>
                <p>We book all kind of national or international ticket for your destinaion.</p>
                
            </div>
            <div class="service">
                <div class="icon hotel"></div>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/carbon_hotel.png' ?>">
                <h3>Hotel Booking</h3>
                <p>You can easily book your according to your budget hotel by our website.</p>
            </div>
            <div class="service">
                <div class="icon tour"></div>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/cil_paper-plane.png'?>">
                <h3>Tour Plan</h3>
                <p>We provide you the best plan within a short time explore more.</p>
                
            </div>
        </div>
    </section>
</main>
<?php

get_footer();
?>