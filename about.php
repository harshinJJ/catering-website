<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Sooraj Catering Services</title>
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

        /* About Us Section - Banner Styling */
        .about-us-banner {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.7)),
                        url('uploads/bg7.jpeg') no-repeat center center fixed;
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
        .highlight1{
            color: white;
        }

        .about-us-banner h1 {
            font-size: 4.5rem;
            font-weight: 900;
            letter-spacing: 4px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .about-us-banner p {
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

        .about-content {
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

        .section-subtitle {
            font-size: 2.2rem;
            color: #333;
            margin-top: 30px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .intro-text {
            font-size: 1.3rem;
            line-height: 1.8;
            color: #555;
            text-align: justify;
            margin-bottom: 40px;
            font-weight: 300;
        }

        .final-note {
            font-size: 1.4rem;
            font-weight: 600;
            color: #444;
            margin-top: 40px;
            font-style: italic;
        }

        .specialties-list {
            list-style-type: none;
            padding-left: 0;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .specialties-list li {
            font-size: 1.2rem;
            padding: 15px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .specialties-list li:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        }

        .specialties-list li h4 {
            color: #333;
            font-size: 1.4rem;
            font-weight: 600;
            margin-top: 10px;
            letter-spacing: 1px;
            text-align: center;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .about-us-banner h1 {
                font-size: 3.5rem;
            }

            .about-us-banner p {
                font-size: 1.6rem;
            }

            .about-content {
                padding: 20px;
            }

            .section-title {
                font-size: 2.4rem;
            }

            .intro-text {
                font-size: 1.1rem;
            }
        }

    </style>
</head>
<body>

    <!-- About Us Banner Section -->
    <div class="about-us-banner">
        <h1><span class="highlight">Sooraj</span><span class="highlight1"> Caterers</span></h1>
        <p class="highlight1">Since 1990</p>
    </div>

    <!-- About Us Content Section -->
    <div class="container about-content">
        <h2 class="section-title">About Us</h2>
        <p class="intro-text">Since 1990, the name <strong>SOORAJ Catering Services</strong> has inspired absolute confidence. Our exquisite and innovative food, spectacular presentation, and unfailing service have made us a trusted name in Kerala.</p>
        <p class="intro-text">Whether it's wedding parties, Annaprasans, corporate meetings, steamer parties, birthday parties, or cocktails with continental catering services, the discerning host or hostess can trust us to bring their impeccable personal taste to life at any event.</p>

        <h3 class="section-subtitle">Our Specialties</h3>
        <ul class="specialties-list">
            <li>Wedding Parties</li>
            <li>Cocktails</li>
            <li>Birthdays</li>
            <li>Kitty Parties</li>
            <li>Picnics</li>
            <li>Steamer Parties</li>
        </ul>

        <p class="final-note">We specialize in Interactive stalls & Fusion food. Our catering services include Bengali, North Indian, Chinese, Mughlai, Italian & Continental cuisine.</p>
    </div>

</body>
</html>
