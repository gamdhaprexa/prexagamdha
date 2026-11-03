
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Me | Prexa Gamdha - ArtologyPlus</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f5f5f5;
            color: #161616;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        :root {
            --red: #e31837;
            --dark: #101820;
            --grey: #737373;
            --light: #f5f5f5;
        }


        /* NAVBAR */

        header {
            background: #101820;
            color: white;
            border-bottom: 1px solid #30363d;
        }

        .navbar {
            max-width: 1400px;
            margin: auto;
            padding: 20px 7%;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-size: 27px;
            font-weight: 700;
        }

        .logo span {
            color: var(--red);
        }

        .nav-links {
            display: flex;
            gap: 35px;
            list-style: none;
        }

        .nav-links a {
            font-size: 14px;
            color: #e5e5e5;
            transition: 0.3s;
        }

        .nav-links a:hover,
        .nav-links .active {
            color: var(--red);
        }

        .nav-btn {
            background: var(--red);
            color: white;
            padding: 12px 22px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
        }

        .nav-btn:hover {
            background: #c8102e;
        }


        /* COMMON */

        .container {
            max-width: 1400px;
            margin: auto;
            padding-left: 7%;
            padding-right: 7%;
        }

        .section-label {
            color: var(--red);
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 3px;
            margin-bottom: 15px;
        }

        .section-title {
            font-size: 38px;
            font-weight: 700;
            line-height: 1.3;
        }

        .section-title span {
            color: var(--red);
        }


        /* ABOUT HERO */

        .about-hero {
            background: linear-gradient(
                110deg,
                #101820 0%,
                #171c24 65%,
                #2b1118 100%
            );

            color: white;
            padding-top: 75px;
            padding-bottom: 75px;
        }

        .about-main {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 70px;
        }

        .about-content {
            flex: 1;
        }

        .about-content h1 {
            font-size: clamp(40px, 5vw, 62px);
            line-height: 1.2;
            margin-bottom: 15px;
        }

        .about-content h1 span {
            color: var(--red);
        }

        .about-content h2 {
            font-size: 22px;
            font-weight: 500;
            color: #d1d1d1;
            margin-bottom: 25px;
        }

        .about-content p {
            max-width: 600px;
            color: #c7c7c7;
            font-size: 14px;
            line-height: 2;
            margin-bottom: 18px;
        }

        .about-content strong {
            color: white;
            font-weight: 600;
        }

        .about-photo {
            width: 350px;
            height: 420px;
            flex-shrink: 0;
            position: relative;
        }

        .about-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;

            border-radius: 10px;
            border: 3px solid #30363d;

            position: relative;
            z-index: 2;
        }

        .photo-decoration {
            position: absolute;
            width: 100%;
            height: 100%;

            border: 2px solid var(--red);
            border-radius: 10px;

            top: 15px;
            right: -15px;
        }

        .about-tag {
            position: absolute;
            bottom: 20px;
            left: -30px;

            background: var(--red);
            color: white;

            padding: 13px 20px;
            border-radius: 5px;

            font-size: 12px;
            font-weight: 600;

            z-index: 3;
        }


        /* MY JOURNEY */

        .journey-section {
            padding-top: 85px;
            padding-bottom: 85px;
        }

        .journey-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: start;
        }

        .journey-text p {
            color: var(--grey);
            font-size: 14px;
            line-height: 2;
            margin-top: 20px;
        }

        .journey-card {
            background: white;
            padding: 30px;

            border-radius: 8px;
            border: 1px solid #e5e5e5;

            box-shadow: 0 5px 20px rgba(0,0,0,0.03);
        }

        .journey-card-header {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .journey-icon {
            width: 55px;
            height: 55px;
            flex-shrink: 0;

            background: #fff0f2;
            color: var(--red);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 23px;
            border-radius: 8px;
        }

        .journey-card h3 {
            font-size: 18px;
        }

        .journey-card h4 {
            color: var(--red);
            font-size: 13px;
            font-weight: 500;
            margin-top: 5px;
        }

        .journey-card p {
            color: var(--grey);
            font-size: 13px;
            line-height: 1.9;
        }


        /* SKILLS */

        .skills-section {
            background: #101820;
            color: white;
            padding-top: 85px;
            padding-bottom: 85px;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-heading .section-title {
            color: white;
        }

        .section-heading > p:last-child {
            color: #bcbcbc;
            font-size: 14px;
            margin-top: 15px;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .skill-card {
            background: #1b252f;
            border: 1px solid #30363d;

            padding: 30px;
            border-radius: 8px;

            transition: 0.3s;
        }

        .skill-card:hover {
            border-color: var(--red);
            transform: translateY(-5px);
        }

        .skill-icon {
            width: 50px;
            height: 50px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #30212a;
            color: var(--red);

            font-size: 23px;
            border-radius: 8px;

            margin-bottom: 20px;
        }

        .skill-card h3 {
            font-size: 17px;
            margin-bottom: 12px;
        }

        .skill-card p {
            color: #bcbcbc;
            font-size: 13px;
            line-height: 1.9;
        }


        /* WORK PHILOSOPHY */

        .philosophy-section {
            padding-top: 85px;
            padding-bottom: 85px;
        }

        .philosophy-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .philosophy-text p {
            color: var(--grey);
            font-size: 14px;
            line-height: 2;
            margin-top: 20px;
        }

        .philosophy-card {
            background: white;
            padding: 35px;
            border-radius: 8px;
            border: 1px solid #e5e5e5;
        }

        .philosophy-card i {
            font-size: 35px;
            color: var(--red);
            margin-bottom: 20px;
        }

        .philosophy-card h3 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .philosophy-card p {
            color: var(--grey);
            font-size: 13px;
            line-height: 1.9;
        }


        /* PERSONAL INTEREST */

        .interest-section {
            background: #f0f0f0;
            padding-top: 80px;
            padding-bottom: 80px;
        }

        .interest-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .interest-card {
            background: white;
            padding: 25px;
            border-radius: 8px;
            border: 1px solid #e5e5e5;

            display: flex;
            align-items: flex-start;
            gap: 18px;

            transition: 0.3s;
        }

        .interest-card:hover {
            border-color: var(--red);
            transform: translateY(-4px);
        }

        .interest-card i {
            font-size: 23px;
            color: var(--red);
            margin-top: 4px;
        }

        .interest-card h3 {
            font-size: 15px;
            margin-bottom: 8px;
        }

        .interest-card p {
            color: var(--grey);
            font-size: 12px;
            line-height: 1.8;
        }


        /* FOOTER */

        footer {
            background: #101820;
            color: white;
            text-align: center;
            padding: 25px;
        }

        footer p {
            color: #bcbcbc;
            font-size: 12px;
        }


        /* RESPONSIVE */

        @media (max-width: 950px) {

            .navbar {
                flex-direction: column;
                gap: 20px;
            }

            .about-main {
                flex-direction: column-reverse;
                text-align: center;
            }

            .about-photo {
                width: 300px;
                height: 350px;
            }

            .about-content p {
                margin-left: auto;
                margin-right: auto;
            }

            .journey-grid,
            .philosophy-container {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            .skills-grid,
            .interest-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }


        @media (max-width: 600px) {

            .navbar {
                padding: 20px 5%;
            }

            .nav-links {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .nav-links a {
                font-size: 12px;
            }

            .nav-btn {
                display: none;
            }

            .container {
                padding-left: 6%;
                padding-right: 6%;
            }

            .about-hero {
                padding-top: 50px;
                padding-bottom: 50px;
            }

            .about-content h1 {
                font-size: 36px;
            }

            .about-content h2 {
                font-size: 18px;
            }

            .about-photo {
                width: 250px;
                height: 300px;
            }

            .section-title {
                font-size: 29px;
            }

            .journey-section,
            .skills-section,
            .philosophy-section,
            .interest-section {
                padding-top: 60px;
                padding-bottom: 60px;
            }

            .skills-grid,
            .interest-grid {
                grid-template-columns: 1fr;
            }

            .about-tag {
                left: -10px;
            }

        }

    </style>

</head>


<body>


    <!-- NAVBAR -->

    <header>

        <nav class="navbar">

            <a href="index.php" class="logo">
                Artology<span>Plus.</span>
            </a>

            <ul class="nav-links">

                <li>
                    <a href="index.php">Home</a>
                </li>

                <li>
                    <a href="about.php" class="active">About</a>
                </li>

                <li>
                    <a href="work.php">My Work</a>
                </li>

                <li>
                    <a href="contact.php">Contact</a>
                </li>

            </ul>

            <a href="contact.php" class="nav-btn">
                Let's Talk
                <i class="fa-regular fa-paper-plane"></i>
            </a>

        </nav>

    </header>


    <!-- ABOUT ME -->

    <section class="about-hero">

        <div class="container about-main">


            <div class="about-content">

                <p class="section-label">
                    A LITTLE ABOUT ME
                </p>

                <h1>
                    Hi, I'm <span>Prexa Gamdha.</span>
                </h1>

                <h2>
                    Digital Marketing Intern at ArtologyPlus
                </h2>

                <p>

                    I am a creative and enthusiastic digital
                    marketing learner who enjoys helping brands
                    build their identity and connect with people
                    through meaningful digital experiences.

                </p>

                <p>

                    I believe that every brand has a story.
                    My goal is to explore creative ideas and
                    turn them into content that feels genuine,
                    engaging, and memorable.

                </p>

            </div>


            <div class="about-photo">

                <div class="photo-decoration"></div>

                <img src="images/prexa.jpg"
                     alt="Prexa Gamdha">

                <div class="about-tag">

                    <i class="fa-solid fa-star"></i>

                    Digital Marketing

                </div>

            </div>


        </div>

    </section>


    <!-- MY JOURNEY -->

    <section class="journey-section">

        <div class="container journey-grid">


            <div class="journey-text">

                <p class="section-label">
                    MY JOURNEY
                </p>

                <h2 class="section-title">

                    Learning Through<br>

                    <span>Experience.</span>

                </h2>

                <p>

                    My journey in digital marketing has been
                    an exciting learning experience.
                    I started with curiosity and a desire
                    to understand how brands grow online.

                </p>

                <p>

                    My internship at ArtologyPlus has given
                    me the opportunity to explore different
                    areas of digital marketing, work on
                    creative tasks, and gain practical exposure.

                </p>

                <p>

                    So far, my experience has been really
                    positive. I enjoy learning new things,
                    taking on challenges, and improving
                    my skills with every task.

                </p>

            </div>


            <div class="journey-card">

                <div class="journey-card-header">

                    <div class="journey-icon">

                        <i class="fa-solid fa-briefcase"></i>

                    </div>

                    <div>

                        <h3>
                            Digital Marketing Intern
                        </h3>

                        <h4>
                            ArtologyPlus
                        </h4>

                    </div>

                </div>

                <p>

                    Working on digital marketing activities
                    related to branding, SEO, content creation,
                    social media, campaigns, and analytics.

                    <br><br>

                    Each experience helps me understand
                    how creativity and strategy work together
                    to build a stronger digital presence.

                </p>

            </div>


        </div>

    </section>


    <!-- MY SKILLS -->

    <section class="skills-section">

        <div class="container">


            <div class="section-heading">

                <p class="section-label">
                    WHAT I'M LEARNING
                </p>

                <h2 class="section-title">

                    My Digital Marketing<br>

                    <span>Skills.</span>

                </h2>

                <p>

                    Exploring creative and strategic skills
                    through practical experience.

                </p>

            </div>


            <div class="skills-grid">


                <!-- SEO -->

                <div class="skill-card">

                    <div class="skill-icon">

                        <i class="fa-solid fa-magnifying-glass"></i>

                    </div>

                    <h3>Search Engine Optimization</h3>

                    <p>

                        Keyword Research, On-Page SEO,
                        Off-Page SEO, Technical SEO,
                        and Local SEO.

                    </p>

                </div>


                <!-- BRANDING -->

                <div class="skill-card">

                    <div class="skill-icon">

                        <i class="fa-solid fa-palette"></i>

                    </div>

                    <h3>Branding & Content Creation</h3>

                    <p>

                        Brand Identity, Creative Content,
                        Visual Storytelling,
                        and Social Media Designs.

                    </p>

                </div>


                <!-- SOCIAL MEDIA -->

                <div class="skill-card">

                    <div class="skill-icon">

                        <i class="fa-solid fa-hashtag"></i>

                    </div>

                    <h3>Social Media Marketing</h3>

                    <p>

                        Content Planning, Post Creation,
                        Reels, Social Media Strategy,
                        and Audience Engagement.

                    </p>

                </div>


                <!-- GOOGLE ADS -->

                <div class="skill-card">

                    <div class="skill-icon">

                        <i class="fa-brands fa-google"></i>

                    </div>

                    <h3>Google Ads</h3>

                    <p>

                        Campaign Planning, Keyword Match Types,
                        Quality Score, CTR,
                        and Lead Generation.

                    </p>

                </div>


                <!-- EMAIL MARKETING -->

                <div class="skill-card">

                    <div class="skill-icon">

                        <i class="fa-solid fa-envelope"></i>

                    </div>

                    <h3>Email Marketing</h3>

                    <p>

                        Mailchimp, Email Campaigns,
                        Automation, Follow-up Emails,
                        and Customer Engagement.

                    </p>

                </div>


                <!-- ANALYTICS -->

                <div class="skill-card">

                    <div class="skill-icon">

                        <i class="fa-solid fa-chart-line"></i>

                    </div>

                    <h3>Analytics & Affiliate Marketing</h3>

                    <p>

                        Google Analytics 4, Traffic Analysis,
                        User Behaviour, Affiliate Marketing,
                        and Performance Tracking.

                    </p>

                </div>


            </div>

        </div>

    </section>


    <!-- WORK PHILOSOPHY -->

    <section class="philosophy-section">

        <div class="container philosophy-container">


            <div class="philosophy-text">

                <p class="section-label">
                    MY WORK PHILOSOPHY
                </p>

                <h2 class="section-title">

                    Creativity With<br>

                    <span>Purpose.</span>

                </h2>

                <p>

                    I believe good digital marketing is
                    not just about creating content.
                    It is about understanding people,
                    knowing the brand's purpose,
                    and communicating the right message.

                </p>

                <p>

                    I like to approach every task with
                    curiosity, creativity, and a willingness
                    to learn. I value consistency,
                    teamwork, and thoughtful execution.

                </p>

            </div>


            <div class="philosophy-card">

                <i class="fa-solid fa-lightbulb"></i>

                <h3>
                    My Approach
                </h3>

                <p>

                    Understand the brand.
                    Explore creative ideas.
                    Create meaningful content.
                    Learn from the results.

                    <br><br>

                    My aim is to make every project
                    feel thoughtful, authentic,
                    and connected to its audience.

                </p>

            </div>


        </div>

    </section>


    <!-- PERSONAL INTEREST -->

    <section class="interest-section">

        <div class="container">


            <div class="section-heading">

                <p class="section-label">
                    BEYOND DIGITAL MARKETING
                </p>

                <h2 class="section-title">

                    A Little More<br>

                    <span>About Me.</span>

                </h2>

                <p>

                    The things that inspire my creativity
                    and keep me curious.

                </p>

            </div>


            <div class="interest-grid">


                <div class="interest-card">

                    <i class="fa-solid fa-lightbulb"></i>

                    <div>

                        <h3>Exploring New Ideas</h3>

                        <p>

                            I enjoy discovering new trends,
                            creative concepts, and
                            fresh ways of thinking.

                        </p>

                    </div>

                </div>


                <div class="interest-card">

                    <i class="fa-solid fa-camera"></i>

                    <div>

                        <h3>Creative Inspiration</h3>

                        <p>

                            I love exploring visual designs,
                            branding styles, and
                            content that tells a story.

                        </p>

                    </div>

                </div>


                <div class="interest-card">

                    <i class="fa-solid fa-book-open"></i>

                    <div>

                        <h3>Continuous Learning</h3>

                        <p>

                            Learning new skills and
                            exploring digital tools
                            keeps me motivated.

                        </p>

                    </div>

                </div>


            </div>

        </div>

    </section>


    <!-- FOOTER -->

    <footer>

        <p>

            © 2026 Prexa Gamdha | ArtologyPlus Portfolio

        </p>

    </footer>


</body>

</html>
