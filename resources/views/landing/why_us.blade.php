<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* Main Container */
        .why_us {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #C30A1A;
            color: #333;
            min-height: 100vh;
            padding: 20px;
        }

        /* Heading Section */
        .heading {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
            text-decoration: underline;
            text-underline-offset: 15px;
        }

        .heading h1 {
            font-weight: bold;
            font-size: 60px;
            color: #fff;
            text-shadow: 4px 4px 12px rgba(0, 0, 0, 0.7);
        }

        /* Responsive Media Queries */
        @media (max-width: 768px) {
            .heading h1 {
                font-size: 50px !important;
            }
        }

        @media (max-width: 576px) {
            .heading h1 {
                font-size: 40px !important;
            }
        }

        @media (max-width: 400px) {
            .heading h1 {
                font-size: 30px !important;
            }
        }

        /* Card Container */
        .why-container {
            width: 100%;
            max-width: 1400px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        /* Individual Card Styling */
        .why-container .card {
            background: #f9f9f9;
            padding:20px 0; /* Increased padding for more space around content */
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between; /* Distribute space evenly */
        }

        .why-container .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .why-container .card .logo {
            width: 100%;
            max-width: 150px; /* Adjust logo size if necessary */
            margin-bottom: 15px;
        }

        .why-container .card .logo img {
            width: 100%;
            height: auto;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease;
        }

        .why-container .card .logo:hover img {
            transform: scale(1.1);
        }

        .why-container .card h2 {
            margin: 15px 0;
            font-size: 24px;
            color: #333;
            text-align: center; /* Ensure text is centered */
            flex-grow: 1; /* Allows the heading to take more space */
        }

        .why-container .card p {
            font-size: 17px;
            line-height: 1.5;
            color: #555;
            text-align: center; /* Ensure text is centered */
            flex-grow: 2; /* Makes the paragraph take up more space in the card */
            margin-bottom: 20px; /* Adds more space at the bottom */
        }
    </style>
</head>
<body>
    
    <div class="why_us">
        <div class="heading">
            <h1>Why Choose Us?</h1>
        </div>
        <div class="why-container">
            <div class="card">
                <div class="logo">
                    <a href="">
                        <img src="images/timetable.jpg" alt="">
                    </a>
                    <h2>Effortless Timetable Creation</h2>
                    <p>Our platform helps you build a structured timetable for your lessons, so you can plan your teaching schedule effectively and stay organized.</p>
                </div>
            </div>
            <div class="card">
                <div class="logo">
                    <a href="">
                        <img src="images/customizable.png" alt="">
                    </a>
                    <h2>Customizable Schedules</h2>
                    <p>Tailor your timetable to fit different class schedules, subjects, and durations, making it adaptable to any teaching style or curriculum needs.</p>
                </div>
            </div>
            <div class="card">
                <div class="logo">
                    <a href="">
                        <img src="images/time.jpg" alt="">
                    </a>
                    <h2>Time-Saving and Efficient</h2>
                    <p>With our easy-to-use tools, you can create and update your timetable in minutes, allowing you to focus more on teaching and less on planning.</p>
                </div>
            </div>
            <div class="card">
                <div class="logo">
                    <a href="">
                        <img src="images/anytime.webp" alt="">
                    </a>
                    <h2>Access Anytime, Anywhere</h2>
                    <p>Access your timetable from any device, whether you're at school, at home, or on the go, so you're always prepared for your next lesson.</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
