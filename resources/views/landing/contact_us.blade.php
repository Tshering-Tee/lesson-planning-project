<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        button {
            padding: 15px 30px;
            border: 2px solid #fffdfd;
            background-color: #f9f2f2;
            color: #0f0e0e;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 30px;
            transition: all 0.4s ease;
            font-weight: bold;
            position: relative;
            overflow: hidden;
        }

        button:hover {
            background-color: #23c483;
            box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
            color: #fff;
            transform: translateY(-7px);
        }

        button:active {
            transform: translateY(-1px);
        }

        .contact-heading {
            font-weight: bold;
            position: relative;
            font-size: 80px;
            margin-top: 70px;
            margin-right: 120px;
            padding-bottom: 20px;
            color: #fff;
            text-shadow: 4px 4px 12px rgba(0, 0, 0, 0.7);
        }

        .contact-heading u {
            text-decoration: none;
        }

        .contact-heading u span {
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 100%;
            height: 3px;
            background-color: white;
        }

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .responsive-logo {
            width: 100%;
            height: auto;
            max-width: 600px;
            margin: 0 auto;
        }

        @media (max-width: 390px) {
            .contact-heading {
                font-size: 36px;
                margin-right: 60px;
            }
            .contact-heading u span {
                width: 90%;
            }
        }

        @media (max-width: 375px) {
            .contact-heading {
                font-size: 30px;
            }
            .contact-heading u span {
                width: 85%;
            }
        }

        @media (max-width: 360px) {
            .contact-heading {
                font-size: 28px;
            }
            .contact-heading u span {
                width: 80%;
            }
        }

        @media (max-width: 320px) {
            .contact-heading {
                font-size: 24px;
                margin-right: 40px;
            }
            .contact-heading u span {
                width: 70%;
            }
        }

        @media (max-width: 768px) {
            .container .row {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .image-container img {
                width: 90%;
                max-width: 300px;
                margin: 0 auto;
            }

            .contact-heading {
                font-size: 40px;
                margin: 20px 0;
                margin-bottom: 10px;
            }


            .container .row .col button {
                font-size: 1rem;
                padding: 10px 20px;
                width: 100%;
            }
        }

        @media (min-width: 992px) {
            .contact-heading {
                font-size: 60px;
                margin-right: 80px;
            }
        }

        @media (min-width: 1200px) {
            .contact-heading {
                font-size: 70px;
                margin-right: 100px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- Image Column -->
            <div class="col text-center image-container">
                <img src="images/logo.jpg" alt="Logo" class="responsive-logo">
            </div>

            <!-- Contact Information Column -->
            <div class="col text-center">
                <h1 class="contact-heading">
                    <u style="text-decoration: underline">Contact Us</u>
                </h1>
               
                <div class="contact-text-end" style="font-size: 20px; font-family: 'Inter', sans-serif;  color: white">
                    <p>"Have a question, feedback, or need help? Our team is here to<br>
                        support you! Reach out via email at athang@gmail.com or call <br>
                        us at +975 17519061. We'll respond as soon as possible to <br>
                        <span style="display: inline-block; text-align: center; width: 90%;">make your experience even better"</span>
                    </p>
                </div>
                <br>
                <button>Get Started</button>
            </div>
        </div>
    </div>
</body>
</html>
