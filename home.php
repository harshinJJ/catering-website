<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    .hero {
        background: url('uploads/bg3.jpg') center/cover fixed;
        background-size: cover;
        height: 80vh;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        position: relative;
        overflow: hidden;
        padding: 0 20px;
        box-shadow: inset 0 0 100px rgba(0, 0, 0, 0.5);
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.3); /* Semi-transparent black overlay */
        z-index: 0;
    }

    .hero .container {
        z-index: 1;
    }

    .hero h1 {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 3px;
        line-height: 1.3;
        font-family: 'Montserrat', sans-serif;
    }

    .hero .highlight {
        color: #ff6600; /* Orange color */
    }

    .hero p {
        font-size: 1.2rem;
        font-style: italic;
        letter-spacing: 1.4px;
        margin-top: 10px;
        font-weight: 500;
    }
h2{
    font-family: 'Montserrat', sans-serif;
}
.hero .btn-gradient {
    background: linear-gradient(135deg, #ff6600, #ff9966);
    color: white;
    border: none;
    padding: 14px 35px;
    font-size: 1rem;
    border-radius: 30px;
    transition: background 0.3s ease, transform 0.3s ease;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    letter-spacing: 1px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
}

.hero .btn-gradient:hover {
    background: linear-gradient(135deg, #e65500, #e68a47);
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

    /* Modern Card Styling */
    .modern-card {
        height: 270px;
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        justify-content: center;
    align-items: center;
    text-align: center; /* Center the text horizontally */
    }
    .modern-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }
    .modern-card .card-img-top {
        height: 200px;
        object-fit: cover;
    }
    .modern-card .card-body {
        padding: 20px;
    }
    .modern-card .card-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.25rem;
        color: #333;
        text-align: center;
    }
    .modern-card .card-text {
        color: #777;
    }

    /* Carousel Control Styling */
    .carousel-indicators {
    position: relative;
    top: -10px; /* Adjust position of the dots relative to the cards */
    text-align: center;
}

.carousel-indicators li {
    background-color: #888; /* Inactive dots color */
}

.carousel-indicators .active {
    background-color: #333; /* Active dot color */
}


    /* Stylish Button */
    .btn-stylish {
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 50px;
        padding: 10px 20px;
        font-size: 1.1rem;
        transition: background-color 0.3s ease;
    }
    .btn-stylish:hover {
        background-color: #0056b3;
        color: #fff;
    }
    .highlight {
    color: #ff530A; /* Replace with your desired color */
}

/* Underline styling */
.underline {
    width: 250px; /* Smaller, more compact underline */
    height: 4px;
    background-color: #ff530A; /* Matches highlight color */
    margin: 10px auto 30px;
    border-radius: 2px;
}

/* Grey Background with Padding */
.grey-bg {
    background-color: #f7f7f7; /* Light grey background */
    padding: 60px 30px;
    border-radius: 15px; /* Slightly rounded corners */
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1); /* Soft, deep shadow for more depth */
    transition: transform 0.3s ease-in-out;
}

.grey-bg:hover {
    transform: translateY(-5px); /* Subtle hover effect */
}

/* Logo Styling */
.logo-img {
    width: 150px; /* Increased logo size */
    height: auto;
    margin-bottom: 30px;
    border-radius: 50%; /* Circular logo */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Soft shadow around the logo */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.logo-img:hover {
    transform: scale(1.1); /* Subtle zoom-in effect on hover */
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2); /* Enhance shadow on hover */
}

/* Title Styling */
.about-us h2 {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 2.5rem; /* Increased font size */
    color: #333;
    margin: 0;
    line-height: 1.3;
    text-transform: uppercase; /* Uppercase for emphasis */
    letter-spacing: 2px; /* Slight letter spacing */
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2); /* Light text shadow for emphasis */
}

/* Highlight Color */
.highlight {
    color: #ff6600; /* Orange highlight color */
    font-weight: bold; /* Bold styling for the highlighted text */
}

/* Description Text Styling */
.description {
    font-size: 1.2rem; /* Slightly larger text for better readability */
    color: #666;
    max-width: 800px;
    margin: 0 auto 30px;
    line-height: 1.8;
    font-family: 'Lora', serif; /* Elegant serif font for body text */
    font-style: italic; /* Italic for more elegance */
    letter-spacing: 0.5px; /* Slight letter spacing for readability */
}

/* Stylish Button */
.btn-stylish {
    background-color: #ff6600;
    color: #fff;
    border: none;
    padding: 14px 35px; /* Larger button size */
    font-size: 1.2rem; /* Larger text for button */
    border-radius: 25px;
    transition: background-color 0.3s ease, transform 0.3s ease;
    font-family: 'Poppins', sans-serif; /* Consistent modern font */
    text-transform: uppercase; /* Make button text uppercase */
    letter-spacing: 1px; /* Space out letters for better readability */
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); /* Light shadow for button */
}

.btn-stylish:hover {
    background-color: #e65500; /* Darker orange for hover */
    transform: translateY(-3px); /* Button lifts on hover */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* Stronger shadow on hover */
}
.testimonials .carousel-item {
    text-align: center;
    font-style: italic;
}

.service-card {
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 20px;
}

.cta {
    background-color: #333;
    color: white;
    padding: 30px 20px;
}

.cta h2 {
    font-size: 2rem;
    margin-bottom: 20px;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .about-us h2 {
        font-size: 2rem;
    }

    .description {
        font-size: 1rem;
    }

    .btn-stylish {
        font-size: 1rem;
        padding: 10px 25px;
    }
}

/* Background Image Section */
/* Dish Section Background with Fixed Scrolling Effect */
.dish-section {
    background-image: url("uploads/bg1.jpg");
    background-size: cover;
    background-position: center;
    background-attachment: fixed; /* Keeps the background fixed while scrolling */
    padding: 60px 0;
    color: white;
    position: relative;
}

/* Overlay for Background Image */
.dish-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.6); /* Dark overlay */
    z-index: 1;
}

.dish-section .container {
    position: relative;
    z-index: 2;
}

/* Section Title */
.section-title {
    font-size: 2rem;
    color: #ff6600;
    margin-bottom: 40px;
    font-weight: bold;
}

/* Dish Card Styling */
.dish-card {
    display: flex;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s;
    height: 180px;
}

.dish-card:hover {
    transform: scale(1.02);
}

/* Dish Image Styling */
.dish-img {
    width: 150px;
    height: auto;
    object-fit: cover;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
}

/* Dish Info Styling */
.dish-info {
    padding: 20px;
    flex: 1;
}

.dish-info h5 {
    font-size: 1.25rem;
    font-weight: bold;
    color: #333;
}

.dish-info p {
    color: #555;
}

/* Menupart Padding */
.menupart {
    padding-bottom: 30px;
}

.order-cta {
    background-image: url("uploads/bg7.jpeg"); /* Use your desired background image */
    background-size: cover;
    background-position: center;
    background-attachment: fixed; /* Fixed background */
    padding: 60px 20px;
    color: white;
    position: relative;

}

.order-title {
    font-size: 2rem;
    color: #ff6600; /* Adjust to preferred color */
    margin-bottom: 20px;
    font-weight: bold;
}

.order-message {
    font-size: 1.2rem;
    margin-bottom: 30px;
    font-family: 'Poppins', sans-serif;
    font-style: italic;


}

.btn-order {
    background-color: #ff6600;
    color: white;
    padding: 15px 30px;
    border-radius: 5px;
    transition: transform 0.3s ease;
}

.btn-order:hover {
    background-color: #e05500;
    transform: scale(1.05);
}

</style>

<body>
<div class="hero">
    <div class="hero-content text-center">
        <h1><span class="highlight">Sooraj</span> Caterers <br>& <span class="highlight">Events</span></h1>
        <p>We create unforgettable experiences for all your special occasions.</p>
        <a href="./?p=view_categories&c=" class="btn btn-stylish btn-lg">Explore</a>
    </div>
</div>

<!-- Featured Services Heading -->
<div class="container mt-5 text-center ">
    <h2>Our Featured <span class="highlight">Services</span></h2>
</div>

<!-- Image Slider Section with Modern Styling -->
    <!-- Dot Indicators -->

    <!-- Carousel Inner (Slides) -->
    <div id="imageSlider" class="container carousel slide mt-4" data-ride="carousel">
        <!-- Carousel Inner (Slides) -->
        <div class="carousel-inner">
            <!-- First Slide -->
            <div class="carousel-item active">
                <div class="row text-center">
                    <div class="col-md-3">
                        <a href="{{ route('services') }}" class="card-link">
                            <div class="card modern-card">
                                <img src="uploads/slider1.jpeg" class="card-img-top" alt="Service 1">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Food Canopies</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="{{ route('services') }}" class="card-link">
                            <div class="card modern-card">
                                <img src="uploads/slider2.jpeg" class="card-img-top" alt="Service 2">
                                <div class="card-body">
                                    <h5 class="card-title">Wedding Catering</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="{{ route('services') }}" class="card-link">
                            <div class="card modern-card">
                                <img src="uploads/slider3.jpeg" class="card-img-top" alt="Service 3">
                                <div class="card-body">
                                    <h5 class="card-title">Engagement Catering</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="{{ route('services') }}" class="card-link">
                            <div class="card modern-card">
                                <img src="uploads/slider4.jpeg" class="card-img-top" alt="Service 4">
                                <div class="card-body">
                                    <h5 class="card-title">Birthday Parties</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Second Slide -->
            <div class="carousel-item">
                <div class="row text-center">
                    <div class="col-md-3">
                        <a href="{{ route('services') }}" class="card-link">
                            <div class="card modern-card">
                                <img src="uploads/slider5.jpeg" class="card-img-top" alt="Service 5">
                                <div class="card-body">
                                    <h5 class="card-title">Outdoor Catering</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="{{ route('services') }}" class="card-link">
                            <div class="card modern-card">
                                <img src="uploads/slider6.jpeg" class="card-img-top" alt="Service 6">
                                <div class="card-body">
                                    <h5 class="card-title">Wedding Arches</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="{{ route('services') }}" class="card-link">
                            <div class="card modern-card">
                                <img src="uploads/slider7.jpeg" class="card-img-top" alt="Service 7">
                                <div class="card-body">
                                    <h5 class="card-title">Party Orders</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="{{ route('services') }}" class="card-link">
                            <div class="card modern-card">
                                <img src="uploads/slider8.jpeg" class="card-img-top" alt="Service 8">
                                <div class="card-body">
                                    <h5 class="card-title">Anniversary</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Controls (Previous and Next) -->


        <!-- Dot Indicators Below the Carousel -->
        <ol class="carousel-indicators mt-3">
            <li data-target="#imageSlider" data-slide-to="0" class="active"></li>
            <li data-target="#imageSlider" data-slide-to="1"></li>
        </ol>
    </div>



    <!-- About Us Section -->

    <section class="about-us text-center mt-5 grey-bg">
        <!-- Logo Image -->
        <div class="logo">
            <img src="uploads/bg5.png" alt="Sooraj Caterers & Events Logo" class="logo-img">
        </div>

        <!-- Title with Colored Text -->
        <h2>Welcome to <span class="highlight">Sooraj</span></h2>
        <h2>Caterers <span class="highlight">&</span> Events</h2>

        <!-- Underline -->
        <div class="underline"></div>

        <!-- Description Text -->
        <p class="description">
            Since 1990, the name <strong>SOORAJ Catering Services</strong> has inspired absolute confidence. Its exquisite & innovative food, spectacular presentation, and unfailing service have enabled SOORAJ CATERING SERVICES to create a seamless match in Kerala.
        </p>

        <!-- More Info Button -->
        <a href="./?p=about&c=" class="btn btn-stylish">More Info</a>
    </section>

    <!-- Our Services Section -->
       <!-- Section with Background Image -->
<section class="dish-section ">
    <div class="container">
        <div class="container text-center menupart">
       <h2> <span class="section-title text-center">The </span><span class="highlight">Menu </span><span>From </span><span class="highlight">Sooraj</span></h2>
        </div>
       <!-- Cards Container -->
        <div class="row">
            <!-- Dish Card 1 -->
            <div class="col-md-6 mb-4">
                <div class="dish-card">
                    <img src="uploads/menu-img-1.jpg" alt="Dish 1" class="dish-img">
                    <div class="dish-info">
                        <h5>MALABAR TASTE SNACKS</h5>
                        <p>
                            UNNAKKAYA | IRACHIPPATHIRI | CHATTIPPATHIRI | ULLI VADA | SAMOOSA | PAKKAVADA</p>
                    </div>
                </div>
            </div>

            <!-- Dish Card 2 -->
            <div class="col-md-6 mb-4">
                <div class="dish-card">
                    <img src="uploads/menu-img-2.jpg" alt="Dish 2" class="dish-img">
                    <div class="dish-info">
                        <h5>SALADS</h5>
                        <p>
                            COMPOUND SALAD | SIMPLE SALAD | COESLAW SALAD | RUSSIAN SALAD |CONDIMENTS</p>
                    </div>
                </div>
            </div>

            <!-- Repeat similar blocks for Dish 3 to Dish 6 -->
            <!-- Dish Card 3 -->
            <div class="col-md-6 mb-4">
                <div class="dish-card">
                    <img src="uploads/menu-img-3.jpg" alt="Dish 3" class="dish-img">
                    <div class="dish-info">
                        <h5>DESERTS SPECIALS</h5>
                        <p>
                            MUTTA MALA | MUTTA SURKA | MALABAR EGG VERITY | THARIPPOLA |DIFFERENT ICE CREAM</p>
                    </div>
                </div>
            </div>

            <!-- Dish Card 4 -->
            <div class="col-md-6 mb-4">
                <div class="dish-card">
                    <img src="uploads/menu-img-4.jpg" alt="Dish 4" class="dish-img">
                    <div class="dish-info">
                        <h5>WELCOME DRINKS
                        </h5>
                        <p>
                            MINT FLAVOURED ICE TEA | LIME MINT | PINEAPPLE MINT | MIXED FRUIT | STRAWBERRY CRUSH</p>
                    </div>
                </div>
            </div>

            <!-- Dish Card 5 -->
            <div class="col-md-6 mb-4">
                <div class="dish-card">
                    <img src="uploads/menu-img-5.jpg" alt="Dish 5" class="dish-img">
                    <div class="dish-info">
                        <h5>SOUPS</h5>
                        <p>
                            VEG MUSHROOM CREAM | TOMATO CREAM | TOMATO CLEAR SOUP | HOT & SOUR VEG. |SWEET CORN VEG</p>
                    </div>
                </div>
            </div>

            <!-- Dish Card 6 -->
            <div class="col-md-6 mb-4">
                <div class="dish-card">
                    <img src="uploads/menu-img-6.jpg" alt="Dish 6" class="dish-img">
                    <div class="dish-info">
                        <h5>PUDDING</h5>
                        <p>
                            THUNDER COCONUT PUDDING | MIXED PUDDING | PINE APPLE PUDDING | FRUITS PUDDING | MANGO PUDDING</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="d-flex justify-content-center">
            <a href="./?p=view_categories&c=" class="btn btn-stylish">More Info</a>
        </div>
    </div>
    </section>
    <div class="container mt-5">
    <!-- Testimonials Section -->
    <section class="testimonials mt-5">
        <h2 class="text-center testimonials">What Our Clients Say</h2>
        <div id="testimonialsCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <p class="testimonial-text text-center">"Sooraj Caterers & Events made our wedding reception unforgettable. The food was amazing, and the event was flawlessly organized!"</p>
                    <h5 testimonial1-text class="text-center">- John & Sarah</h5>
                </div>
                <div class="carousel-item text-center">
                    <p class="testimonial-text">"The team at Sooraj Caterers made our corporate event a huge success. Highly recommend them for any event!"</p>
                    <h5 class="text-center">- Isha and Abdul</h5>
                </div>
                <div class="carousel-item text-center">
                    <p class="testimonial-text">"From the food to the decorations, everything was perfect. We couldn't be happier with our choice of caterers!"</p>
                    <h5 class="text-center">- Rina & Amit</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->


</div>
<section class="order-cta text-center mt-5">
    <h2 class="order-title">Quick ORDER</h2>
    <p class="order-message">Please click the button below to place your order.</p>
    <div class="d-flex justify-content-center">
        <a href="./?p=view_categories&c=" class="btn btn-stylish">place order</a>
    </div>    </section>
</body>

</html>