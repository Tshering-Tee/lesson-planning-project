<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* General Body Styling */
body {
    font-family: 'Inter', sans-serif;
    color: #fff;
}

/* Navbar Styling */
.navbar {
    background-color: #333;
            padding-left: 0 !important;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
}

.container-fluid {
    padding: 0 !important;
    margin: 0 !important;
    max-width: 100% !important;
}

.navbar-logo {
    height: 70px;
    margin: 0;
    padding: 0;
    display: block;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3), 0px 8px 20px rgba(0, 0, 0, 0.15);
}

.navbar {
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1), 0px 2px 4px rgba(0, 0, 0, 0.06);
    transition: box-shadow 0.3s ease;
}

/* Optional: Slightly enhance the shadow on scroll */
.navbar.scrolled {
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15), 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.navbar-nav .nav-link {
    color: #0b0909 !important;
    font-size: 19px;
    padding: 10px;
    text-indent: 100px;
}

.navbar-nav .nav-link:hover {
    color: #ba2848 !important;
}

.navbar-toggler {
    background-color: white;
}

.l-r-button {
    background-color: #C30A1A;
    display: inline-block;
    width: 120px;
    height: 50px;
    text-align: center;
    line-height: 45px;
    text-decoration: none;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1), 
    0px 2px 4px rgba(0, 0, 0, 0.06), 
    0px 6px 12px rgba(0, 0, 0, 0.15); /* Multi-layer shadow */
    color: white;
    margin-right: 10px;
}

/* Home Section Styling */
.home {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 50px;
    background-color: #C30A1A;
    height: 100vh;
}

.hel, .img {
    margin-bottom: 150px;
}

.hel {
    max-width: 600px;
    color: antiquewhite;
    margin-top: 150px;
}

#home-text h1 {
    font-size: 4rem;
    font-weight: bold;
    margin-bottom: 20px; 
    text-shadow: 4px 4px 12px rgba(0, 0, 0, 0.7);
}

.main-top{
    font-size: 4rem;
    font-weight: bold;
    margin-left: 60px;
}

#home-text p {
    margin-bottom: 20px;
    text-align: justify;
    font-size: 20px;
}
/* Button Styling */
.boton-elegante {
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

/* Image Styling */
.img img {
    max-width: 500px;
    max-height: 500px;
    padding: 10px;
    padding-top: 0;
}

.active-section {
    color: #ba2848 !important; /* Change text color to red */
    position: relative;
    display: inline-block; /* Makes the underline fit the text width */
}

.active-section::after {
    content: '';
    display: block;
    height: 2px;
    background-color: #ba2848; /* Red underline color */
    position: absolute;
    bottom: -2px; /* Adjust this as needed to position the underline */
    left: 0;
    width: 42%; /* Underline width adjusts to text width */
    margin-left: 100px;
}

@media (max-width: 1200px) {
    .img img {
        max-width: 290px;
        max-height: 500px;
    }

    .main-top{
        margin-left: 0;
        font-size: 3rem;
    }

    #home-text h1{
    font-size: 3rem;
    }

    .hel{
        margin-top: 200px;
    }
}
/* Media query for smaller screens */
@media (max-width: 576px) {
    .navbar-nav {
        flex-direction: column;
        text-align: center;
    }

    .navbar-nav .nav-link {
        font-size: 1.2rem;
        text-indent: 0;
    }

    .l-r-button {
        margin-right: 0;
        margin-bottom: 10px;
    }
    .hel, .img {
        margin-bottom: 0;
    }

    /* Align buttons in a column on small screens */
    .navbar-nav.d-flex {
        justify-content: center;
        flex-direction: column;
    }

 

    @media (max-width: 760px) {
           /* Adjust home section for smaller screens */
    .home {
        flex-direction: column-reverse; /* Reverse the order of image and text */
        align-items: center;
        margin-bottom: 40px;
    }

    .hel {
        text-align: center;
        margin-bottom: 20px; /* Add margin to separate text from image */
        
        margin-top: 0;
    }

    .img img {
        max-height: 300px; /* Adjust image height as needed */
    }

    #home-text h1, .main-top {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 20px;
    }
    
    #home-text p {
        margin-bottom: 17px;
        text-align: justify;
    }

.active-section::after {

    bottom: 10px; /* Adjust this as needed to position the underline */
    left: 0;
    width: 100%; 
    margin-left: 0px;
}
    }

    @media (max-width: 400px) {
      .img img{
        padding-top: 150px;
      }

      .home{
        margin-top: 80px;
        margin-bottom: 60px;
      }
    }
}


    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="images/logo.jpg" alt="Logo" class="navbar-logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="#home-section">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#why-us-section">Why Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#about-us-section">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact-us-section">Contact</a></li>
                </ul>

                <ul class="navbar-nav d-flex justify-content-center justify-content-lg-end gap-3">
                    <li class="nav-item">
                        <a class="l-r-button" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="l-r-button" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="home">
        <div class="hel" id="home-text">
            <h1><span class="main-top">Education</span><br>Lesson Planning</h1>
            <p>
                Our platform streamlines lesson planning with an intuitive timetable feature, helping teachers create, manage, and adapt their schedules effortlessly. Plan your lessons, organize resources, and stay on track—all in one easy-to-access tool designed to enhance your teaching experience.
            </p>
            <button class="boton-elegante">For more..</button>
        </div>
        <div class="img">
            <img src="images/logo.jpg" alt="Logo Image">
        </div>
    </div>

</body>
</html>