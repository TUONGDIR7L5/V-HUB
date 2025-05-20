<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'VHuB'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style4Home.css">
    <link rel="icon" href="public/img/logo.ico" type="image/x-icon">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container">
        <a class="navbar-brand" href="index.php?page=home">
            <img id="logo" src="public/img/Logo50x50.png" alt="VL Logo">
        </a>
        
        <button class="navbar-toggler" type="button" title="Toggle navigation" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav me-3 align-items-center">
                <li class="nav-item">
                    <a class="nav-link " href="index.php?page=home">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        Our Courses
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?page=grammar"><span><img id="grammar" src="public/img/grammar.png" alt=""> Grammar</span></a></li>
                        <li><a class="dropdown-item" href="index.php?page=vocabulary"><span><img id="vocab" src="public/img/vocab.png" alt=""> Vocabulary</span></a></li>
                        <li><a class="dropdown-item" href="index.php?page=listening"><span><img id="listen" src="public/img/listen.png" alt=""> Listening</span></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link text-dark fw-bold" href="index.php?page=blog">Blog</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="index.php?page=test">Test</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="index.php?page=about">About</a></li>
                <li class="nav-item">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- <a href="index.php?page=dashboard" class="btn rounded-pill me-2 px-4 py-1" style="background-color: #fff8d4; border: 1px solid black;">Dashboard</a> -->
                        <a href="index.php?page=dashboard" style="color: black; text-decoration: none;" class="me-2 px-4 py-1" style="background-color: #fff8d4; border: 1px solid black; border-radius: 50rem;">
                            <?php echo htmlspecialchars($_SESSION['username']); ?>
                        </a>
                        <a href="index.php?page=logout" class="btn rounded-pill px-4 py-1" style="background-color: #fff8d4; border: 1px solid #f58e42;">Logout</a>
                    <?php else: ?>
                        <a href="index.php?page=form" class="btn rounded-pill me-2 px-4 py-1" style="background-color: #fff8d4; border: 1px solid black;">Log in</a>
                        <a href="index.php?page=form" class="btn rounded-pill px-4 py-1" style="background-color: #fff8d4; border: 1px solid #f58e42;">Sign up</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav>


<header class="banner-header " style="padding-bottom: 70px;">
    <img src="public/img/blog/b1-h1h3.png" alt="banner">
</header>

<div class="container4">
    <div class="content" style="font-size: 20px;">
        Vietnam is a country rich in traditions and its festivals are some of the
        most lively in Southeast Asia. Whether it’s a national holiday like Tet or a
        local event like the Hue Festival, each celebration provides a unique
        glimpse into Vietnamese culture. These festivals are deeply rooted in
        history, spirituality and community, making them a fascinating experience
        for travelers.
    </div>
    <div class="TetHoliday" style="padding-top: 30px;"><strong><h3>1. Tet Holiday</h3></strong></div>
        <img class="image-9" src="public/img/blog/b1-h4.png" />
        <div class="contentTet" style="font-size: 20px;">
        Tet, or the Lunar New Year, is the biggest and most widely celebrated of all
        Vietnam festivals. It marks the start of a new year and is a time for family
        reunions, honoring ancestors and welcoming good fortune. The atmosphere is
        filled with joy as people clean their homes, decorate with red banners and
        prepare festive meals.
        <br />
        <br />
        During Tet, major cities like Hanoi and Ho Chi Minh City light up with
        fireworks, flower markets and dragon dances. In rural areas, traditional
        customs such as lion dancing, temple visits and lucky money create a warm
        and festive mood. Visitors can also enjoy Vietnam traditional festival
        cuisine, including banh chung (square sticky rice cake) and pickled
        vegetables.
    </div>
    <div class="HueFestival" style="padding-top: 30px;"><strong><h3>2. Hue Festival</h3></strong></div>
    <img class="image-9" src="public/img/blog/b1-h5.png" />
    <div class="contentHue" style="font-size: 20px;">
        The former capital of Vietnam and home of the last Vietnamese dynasty, Hue
        is rich in cultural heritage. The Hue Festival or Hue Festival takes place
        alternately every year in April. During the Hue Festival, history comes to
        life in spectacular performances at the Citadel and around the city. This
        multi-day event includes traditional music performances, calligraphy
        exhibitions and street parades.
        <br />
        <br />
        Hue annual festivals are held over a week from late April to early May.
    </div>
    <div class="HoiAnLanternFestival" style="padding-top: 30px;"><strong><h3>3. Hoi An Lantern Festival</h3></strong></div>
    <img class="image5" src="public/img/blog/b1-h6.png" />
    <div class="hoi-an-lantern-festival-is-a-magical-event-that-transforms-the-historic-town-of-hoi-an-into-a-colorful-wonderland-during-the-festival-the-streets-of-hoi-an-s-historic-center-are-decorated-with-countless-lanterns-it-creates-a-warm-and-charming-atmosphere-this-is-because-the-lights-are-being-replaced-by-the-soft-glow-of-traditional-lanterns-the-highlight-of-the-festival-is-the-placing-of-paper-lanterns-in-the-thu-bon-river-there-people-will-wish-for-good-luck-and-happiness-in-addition-there-are-many-delicious-street-foods-and-the-residents-dress-in-traditional-ao-dai-clothing-which-contributes-to-the-celebration-of-vietnamese-culture-the-hoi-an-lantern-festival-is-a-celebration-of-light-hope-and-community-giving-visitors-an-opportunity-to-experience-the-city-s-rich-heritage-and-spiritual-traditions" style="font-size: 20px;">
        Hoi An Lantern Festival is a magical event that transforms the historic town
        of Hoi An into a colorful wonderland. During the festival, the streets of
        Hoi An’s historic center are decorated with countless lanterns. It creates a
        warm and charming atmosphere. This is because the lights are being replaced
        by the soft glow of traditional lanterns.
        <br />
        <br />
        The highlight of the festival is the placing of paper lanterns in the Thu
        Bon River. There, people will wish for good luck and happiness. In addition,
        there are many delicious street foods and the residents dress in traditional
        Ao Dai clothing, which contributes to the celebration of Vietnamese culture.
        The Hoi An Lantern Festival is a celebration of light, hope and community,
        giving visitors an opportunity to experience the city’s rich heritage and
        spiritual traditions.
    </div>
    <div class="uploaded-2-days-ago" style="text-align: end; color:rgba(0, 0, 0, 0.25);">Uploaded 2 days ago</div>
    </div>
</div>


<style>
    /* Reset default styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Body styles */
    body {
        font-family: 'Roboto', sans-serif;
        line-height: 1.6;
        color: #333;
        background-color:rgb(255, 255, 255);
        margin: 0;
        padding: 0;
    }

    /* Container for content */
    .container4 {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Header section */
    header {
        text-align: center;
        padding: 40px 20px;
        background: linear-gradient(135deg, #d32f2f, #fbc02d);
        color: white;
        border-radius: 8px;
        margin-bottom: 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    header h1 {
        font-size: 2.5em;
        margin-bottom: 10px;
        font-family: 'Playfair Display', serif;
    }

    header p {
        font-size: 1.1em;
        opacity: 0.9;
    }




    /* Paragraphs */
    p {
        font-size: 1em;
        color: #4a4a4a;
        margin-bottom: 15px;
        line-height: 1.8;
    }

    /* Highlighted text */
    p::first-letter {
        font-size: 1.5em;
        color: #d32f2f;
        font-weight: bold;
    }

    /* Links */
    a {
        color: #388e3c;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    a:hover {
        color: #d32f2f;
        text-decoration: underline;
    }

    /* Responsive images (if added later) */
    img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 15px 0;
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .container {
            padding: 15px;
        }

        header h1 {
            font-size: 2em;
        }


        section {
            padding: 15px;
        }
    }

    /* Animation for section fade-in */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    section {
        animation: fadeIn 0.5s ease-out forwards;
    }

</style>
<?php
    require_once('layout/footer.php')
?>