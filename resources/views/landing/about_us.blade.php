<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <style>
        /* Container and Heading Styling */
        .container {
            display: flex;
            justify-content: center;
        }

        .about-heading {
            font-weight: bold;
            font-size: 80px;
            color: #fff;
            text-shadow: 4px 4px 12px rgba(0, 0, 0, 0.7);
            margin-bottom: 20px;
            text-decoration: underline;
            text-underline-offset: 10px;
            text-decoration-color: white;
        }

        /* Responsive Heading */
        @media (max-width: 768px) {
            .about-heading {
                font-size: 50px !important;
            }
        }

        @media (max-width: 576px) {
            .about-heading {
                font-size: 40px !important;
            }
        }

        @media (max-width: 400px) {
            .about-heading {
                font-size: 30px !important;
            }
        }

        /* Vision/Mission Heading Styling */
        .center-text {
            text-align: center;
            color: white;
            font-family: sans-serif;
        }

        .vision {
            font-size: 40px;
            margin-top: 30px;
            color: white;
            position: relative;
            display: inline-block;
        }

        .vision::after {
            content: "";
            display: block;
            width: 80%;
            height: 3px;
            background-color: white;
            position: absolute;
            left: 10%;
            bottom: -8px;
        }

        @media (max-width: 768px) {
            .vision {
                font-size: 32px;
            }
        }

        @media (max-width: 576px) {
            .vision {
                font-size: 28px;
            }
        }

        /* Text Styling */
        .center-text p {
            font-size: 20px;
            line-height: 1.6;
            margin-bottom: 30px;
        }
    </style>
</head>
<body style="background-color: rgb(195, 10, 26);">

    <div class="container">
        <div class="center-text">
            <h1 class="about-heading">About Us</h1>
            
            <h2 class="vision">Vision</h2>
            <p>To become a leading institution for innovative solutions,<br> offering educational and professional skill development services<br> rooted in the philosophy of Gross National Happiness.</p>

            <h2 class="vision">Mission</h2>
            <p>Our mission is to become a leader in innovation, offering services for educational and professional skill development<br> that support the Gross National Happiness philosophy.</p>
        </div>
    </div>

</body>
</html>
