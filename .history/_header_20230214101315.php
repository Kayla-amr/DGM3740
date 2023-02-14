<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Kayla Macias">
    <title>Combat Cruise: <?php echo $title; ?> </title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Toto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Toto&family=Poppins:wght@300;500&display=swap"
        rel="stylesheet">


    <!-- STYLE SHEETS -->
    <link href="/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
</head>

<body>
    <div class="headerWrapper">
        <header>
            <div class="companyNL">
                <div class="cName">
                    <h1>Cabot</h1>
                    <h2>Cruise</h2>
                </div>
                <figure class="logo">
                    <img  src="/images/cruiseLogo.png" alt="logo"
                srcset="/images/cruiseLogo1.png 1x, /images/cruiseLogo2.png 2x, /images/cruiseLogo3.png 3x">
                </figure>
            </div>
            <div class="companyNumber">
                <p>1-800-555-1234</p>
            </div>
        </header>
    </div>

    <div class="navWrapper">

        <nav>

            <ul id="primaryNav">
                <li><a href="/index.php">HOME</a></li>
                <li><a href="#">CRUISES</a></li>
                <li class="parent"><a href="#">AGENTS</a>
                    <ul>
                        <li><a href="/agent">Kim Taehyung</a></li>
                        <li><a href="#">Jeon Jungkook</a></li>
                    </ul>
                </li>
                <li><a href="#">BOOK</a></li>
            </ul>

            <div class="navBar">
                <button id="hamburgerBtn">&#9776;</button>
                <div class="navSearch">
                    <input type="text">
                    <a href="#"><ion-icon name="search-outline"></ion-icon></a>
                </div>
            </div>
            
            
        </nav>
        
    </div>

    <div class="mainWrapper">
        <main>