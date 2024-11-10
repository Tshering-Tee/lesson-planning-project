<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
        font-family: 'Inter', sans-serif;
        color: #fff;
        background-color: #c30a1a;
    }
    </style>
    
</head>

<body>

    
    <section id="home-section"> 
    @include('landing.home') 
    </section>

    

    <section id="why-us-section"> 
    @include('landing.why_us', ['id' => 'why-us-section'])
    </section> 

    <section id="about-us-section"> 
    @include('landing.about_us', ['id' => 'about-us-section'])
    </section>
    
    <section id="contact-us-section"> 
    @include('landing.contact_us', ['id' => 'contact-us-section'])
    </section>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>