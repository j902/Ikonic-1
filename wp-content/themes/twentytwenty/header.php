<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ikonic Test</title>
</head>
<body>
    
<!-- Header Start -->

<header class="header">
    <div class="container">
        <div class="logo">
            <img src="images/Images/logo.png" alt="Cornerstone Healthcare Group">
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services <i class="fa-solid fa-angle-down"></i></a>
                    <div class="dropdown">
                    <ul>
                        <li><a href="#">Service 1</a></li>
                        <li><a href="#">Service 2</a></li>
                    </ul>
                </div>
                </li>
                <li><a href="#">Who We Serve</a></li>
                <li><a href="#">Locations</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>

        </nav>
        <div class="hamburger" onclick="toggleMenu()">
            <i class="fa-solid fa-bars"></i> 
        </div>

    </div>



   </header>
<!-- header ends -->