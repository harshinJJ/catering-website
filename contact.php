<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Sooraj Catering Services</title>
    <style>
        /* General Styling */
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #333;
        }

        h1, h3 {
            color: #2C3E50;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        p {
            font-size: 1.3rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 20px;
        }

        /* Contact Us Section - Banner Styling */
        .contact-us-banner {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.7)),
                        url('uploads/bg8.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            padding: 200px 0;
            text-align: center;
            position: relative;
            z-index: 1;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            text-shadow: 2px 2px 15px rgba(0, 0, 0, 0.6);
            font-family: 'Montserrat', sans-serif;
        }

        .highlight {
            color: #ff6600; /* Orange color */
        }
        .highlight1 {
            color: white; /* Orange color */
        }


        .contact-us-banner h1 {
            font-size: 4.5rem;
            font-weight: 900;
            letter-spacing: 4px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .contact-us-banner p {
            font-size: 1.8rem;
            font-style: italic;
            letter-spacing: 2px;
            margin-top: 10px;
            font-weight: 500;
        }

        /* Content Section */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .contact-content {
            padding-top: 50px;
            background-color: #f7f7f7;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            margin-bottom: 50px;
            z-index: 1;
            padding-bottom: 50px;
        }

        .section-title {
            font-size: 2.8rem;
            font-weight: 700;
            color: #333;
            text-transform: uppercase;
            margin-bottom: 20px;
            letter-spacing: 2px;
            text-align: center;
            border-bottom: 4px solid #f5a623;
            display: inline-block;
            padding-bottom: 10px;
        }

        .contact-info {
            display: grid;
            grid-template-columns: 1fr;
            gap: 40px;
            margin-top: 50px;
        }

        .contact-info div {
            font-size: 1.4rem;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .contact-info div:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        }

        .contact-info div h4 {
            font-weight: 600;
            color: #333;
            font-size: 1.6rem;
            margin-bottom: 10px;
        }

        .contact-info div p {
            font-size: 1.3rem;
            color: #555;
            line-height: 1.6;
        }

        /* Image Section */
        .image-section {
            text-align: center;
            margin-top: 50px;
        }

        .image-section img {
            width: 250px;
            height: 150px;
            margin: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .image-section img:hover {
            transform: scale(1.1);
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .contact-us-banner h1 {
                font-size: 3.5rem;
            }

            .contact-us-banner p {
                font-size: 1.6rem;
            }

            .contact-content {
                padding: 20px;
            }

            .section-title {
                font-size: 2.4rem;
            }

            .contact-info div {
                padding: 15px;
            }

            .image-section img {
                width: 120px;
                height: 120px;
            }
        }

    </style>
</head>
<body>

    <!-- Contact Us Banner Section -->
    <div class="contact-us-banner">
        <h1><span class="highlight">Contact</span><span class="highlight1"> Us</span></h1>
        <br>
    </div>

    <!-- Contact Us Content Section -->
    <div class="container contact-content">
        <h2 class="section-title">Contact Information</h2>
        
        <div class="contact-info">
            <div>
                <h4>Sooraj Caterers & Events</h4>
                <p>West Hill, Calicut 673005</p>
            </div>
            <div>
                <h4>Telephone:</h4>
                <p>Mobile: +91 9746654776</p>
                <p>Mobile: +91 9946338982</p>
                <p>WhatsApp: +91 9746654776</p>
            </div>
            <div>
                <h4>Email:</h4>
                <p>soorajcateringservice@gmail.com</p>
            </div>
            <div>
                <h4>Branch:</h4>
                <p>Darusalam Jn, Near Health Centre, Thaikkattukara, Aluva</p>
            </div>
            <div>
                <h4>Our Sister Concerns:</h4>
                <p>Ginger Garlic Restaurant And Catering</p>
                <p>Food Choice Catering And Events</p>
            </div>
            <div>
                <h4>Certification:</h4>
                <p>ISO Certified</p>
            </div>
        </div>
        <div class="image-section">
        <img src="uploads/foodCoiceLogo.jpg" alt="Image 1">
        <img src="uploads/gingerLogo.jpg" alt="Image 2">
        <img src="uploads/iso.jpg" alt="Image 3">
    </div>
    </div>



</body>
</html>
