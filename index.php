
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Prexa Gamdha | ArtologyPlus Portfolio</title>

    <!-- Google Fonts -->
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
            scroll-padding-top: 85px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #ffffff;
            color: #111111;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        :root {
            --red: #244a91;
            --dark: #ffffff;
            --grey: #737373;
            --light: #f5f5f5;
        }


        /* NAVBAR */

        header {
            background: #ffffff;
            color: #111111;
            border-bottom: 1px solid #dce3ef;

            position: sticky;
            top: 0;
            z-index: 1000;
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
            color: #e1e6ef;
            transition: 0.3s;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--red);
        }

        .nav-btn {
            background: var(--red);
            color: white;

            padding: 12px 22px;
            border-radius: 30px;

            font-size: 13px;
            font-weight: 600;

            transition: 0.3s;
        }

        .nav-btn:hover {
            background: #1b376d;
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

        .section-heading {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-heading p:last-child {
            color: var(--grey);
            font-size: 14px;
            margin-top: 15px;
        }


        /* HOME */

        .hero {
            background: #ffffff;
            color: #111111;

            min-height: 560px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 65px 7%;

            overflow: hidden;
        }

        .hero-content {
            width: 55%;
            z-index: 2;
        }

        .hero-label {
            color: #555d6b;

            font-size: 12px;
            letter-spacing: 4px;

            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: clamp(38px, 4.5vw, 62px);
            line-height: 1.2;

            font-weight: 700;

            margin-bottom: 15px;
        }

        .hero h1 span {
            color: var(--red);
        }

        .hero h2 {
            font-size: 23px;
            font-weight: 500;

            margin-bottom: 20px;
        }

        .hero h2 span {
            color: #555d6b;
        }

        .hero-description {
            color: #555d6b;

            font-size: 14px;
            line-height: 1.9;

            max-width: 480px;

            margin-bottom: 30px;
        }

        .primary-btn {
            display: inline-flex;
            align-items: center;
            gap: 12px;

            background: var(--red);
            color: white;

            padding: 15px 25px;
            border-radius: 30px;

            font-size: 14px;
            font-weight: 600;

            transition: 0.3s;
        }

        .primary-btn:hover {
            background: #1b376d;
            transform: translateY(-3px);
        }

        .hero-image {
            width: 34%;
            max-width: 360px;
            height: 360px;

            display: flex;
            justify-content: center;
            align-items: center;

            position: relative;
            padding: 6px;
            background: #244a91;
            border: 1px solid #ffffff;
            border-radius: 12px;
            overflow: hidden;
        }

        .hero-image img {
            width: 100%;
            height: 100%;

            object-fit: cover;
            object-position: center top;

            border-radius: 8px;
            border: 1px solid #ffffff;

            position: relative;
            z-index: 2;
        }

        .image-decoration {
            position: absolute;

            width: 300px;
            height: 300px;

            background: var(--red);

            border-radius: 50%;

            right: -20px;
            top: 60px;

            opacity: 0.2;
        }


        /* ABOUT */

        .about-section {
            padding-top: 85px;
            padding-bottom: 85px;

            background: #ffffff;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;

            gap: 60px;

            align-items: center;
        }

        .about-content p {
            color: var(--grey);

            font-size: 14px;
            line-height: 2;

            margin-top: 20px;
        }

        .about-content strong {
            color: #161616;
        }

        .about-info {
            background: white;

            padding: 30px;

            border-radius: 8px;

            border: 1px solid #e1e6ef;
        }

        .about-info h3 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .info-item {
            display: flex;
            align-items: flex-start;

            gap: 15px;

            margin-bottom: 20px;
        }

        .info-item:last-child {
            margin-bottom: 0;
        }

        .info-item i {
            color: var(--red);
            font-size: 20px;
            margin-top: 4px;
        }

        .info-item h4 {
            font-size: 14px;
            margin-bottom: 5px;
        }

        .info-item p {
            color: var(--grey);
            font-size: 12px;
            line-height: 1.8;
        }


        /* SKILLS */

        .skills-section {
            background: #ffffff;
            color: #111111;

            padding-top: 85px;
            padding-bottom: 85px;
        }

        .skills-section .section-title {
            color: #111111;
        }

        .skills-section .section-heading p:last-child {
            color: #555d6b;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);

            gap: 22px;
        }

        .skill-card {
            background: #f8faff;

            border: 1px solid #dce3ef;

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

            background: #eaf0fb;
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
            color: #555d6b;

            font-size: 13px;
            line-height: 1.9;
        }


        /* MY WORK */

        .work-section {
            padding-top: 85px;
            padding-bottom: 85px;

            background: #ffffff;
        }

        .work-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);

            gap: 25px;
        }

        .work-card {
            background: white;

            border-radius: 8px;
            overflow: hidden;

            border: 1px solid #e1e6ef;

            transition: 0.3s;
        }

        .work-card:hover {
            transform: translateY(-5px);

            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .work-card img {
            width: 100%;
            height: 230px;

            object-fit: cover;
        }

        .work-content {
            padding: 25px;
        }

        .work-category {
            color: var(--red);

            font-size: 10px;
            font-weight: 700;

            letter-spacing: 2px;
        }

        .work-content h3 {
            font-size: 18px;
            margin: 10px 0;
        }

        .work-content p {
            color: var(--grey);

            font-size: 13px;
            line-height: 1.8;
        }

        .work-link {
            display: inline-block;

            color: var(--red);

            font-size: 12px;
            font-weight: 600;

            margin-top: 15px;
        }

        .work-link i {
            margin-left: 5px;
        }


        /* WORK PHILOSOPHY */

        .philosophy-section {
            padding-top: 85px;
            padding-bottom: 85px;
        }

        .philosophy-grid {
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

            border: 1px solid #e1e6ef;
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
            background: #f5f7fb;

            padding-top: 75px;
            padding-bottom: 75px;
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
            border: 1px solid #e1e6ef;

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


        /* CONTACT */

        .contact-section {
            background: #ffffff;
            color: #111111;

            padding-top: 85px;
            padding-bottom: 85px;
        }

        .contact-section .section-title {
            color: #111111;
        }

        .contact-section .section-heading p:last-child {
            color: #555d6b;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);

            gap: 25px;
        }

        .contact-card {
            background: #f8faff;

            border: 1px solid #dce3ef;

            padding: 30px;

            border-radius: 8px;

            text-align: center;

            transition: 0.3s;
        }

        .contact-card:hover {
            border-color: var(--red);
            transform: translateY(-5px);
        }

        .contact-card i {
            color: var(--red);

            font-size: 30px;

            margin-bottom: 20px;
        }

        .contact-card h3 {
            font-size: 17px;
            margin-bottom: 12px;
        }

        .contact-card p {
            color: #555d6b;

            font-size: 13px;
            line-height: 1.8;

            word-break: break-word;
        }

        .contact-card a {
            color: #555d6b;
        }

        .contact-card a:hover {
            color: #111111;
        }

        .contact-bottom {
            text-align: center;
            margin-top: 40px;
        }


        /* FOOTER */

        footer {
            background: #ffffff;
            color: #111111;

            text-align: center;

            padding: 25px;
        }

        footer p {
            color: #555d6b;
            font-size: 12px;
        }


        /* RESPONSIVE */

        @media (max-width: 950px) {

            .navbar {
                flex-direction: column;
                gap: 20px;
            }

            .hero {
                flex-direction: column;
                text-align: center;
            }

            .hero-content {
                width: 100%;
            }

            .hero-description {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-image {
                width: 70%;
                margin-top: 40px;
            }

            .about-grid,
            .philosophy-grid {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            .skills-grid,
            .work-grid,
            .interest-grid,
            .contact-grid {
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

            .hero {
                padding: 50px 6%;
            }

            .hero h1 {
                font-size: 36px;
            }

            .hero h2 {
                font-size: 19px;
            }

            .hero-image {
                width: 85%;
                max-width: 320px;
                height: 320px;
            }

            .container {
                padding-left: 6%;
                padding-right: 6%;
            }

            .section-title {
                font-size: 29px;
            }

            .about-section,
            .skills-section,
            .work-section,
            .philosophy-section,
            .interest-section,
            .contact-section {
                padding-top: 60px;
                padding-bottom: 60px;
            }

            .skills-grid,
            .work-grid,
            .interest-grid,
            .contact-grid {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>


    <!-- NAVBAR -->

    <header>

        <nav class="navbar">

            <a href="#home" class="logo">
                <span>Prexa</span>
            </a>

            <ul class="nav-links">

                <li>
                    <a href="#home" class="active">Home</a>
                </li>

                <li>
                    <a href="#about">About</a>
                </li>

                <li>
                    <a href="#work">My Work</a>
                </li>

                <li>
                    <a href="#contact">Contact</a>
                </li>

            </ul>

            

        </nav>

    </header>


    <!-- HOME SECTION -->

    <section class="hero" id="home">


        <div class="hero-content">

            <p class="hero-label">
                DIGITAL MARKETING 
            </p>

            <h1>
                Hi, I'm <span>Prexa Gamdha</span>
            </h1>

            <h2>
                Digital Marketing Intern
                <span>at ArtologyPlus</span>
            </h2>

            <p class="hero-description">

               I'm a Digital Marketing Intern at ArtologyPlus, learning how brands grow through creative ideas, meaningful content, and digital strategies.

            </p>

            <a href="#work" class="primary-btn">

                Explore My Work

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>


        <div class="hero-image">

            <div class="image-decoration"></div>

            <img src="images/prexa.jpeg"
                 alt="Prexa Gamdha">

        </div>


    </section>


    <!-- ABOUT SECTION -->

    <section class="about-section" id="about">

        <div class="container about-grid">


            <div class="about-content">

                <p class="section-label">
                    ABOUT ME
                </p>

                <h2 class="section-title">

                    A Little About<br>

                    <span>My Journey.</span>

                </h2>

                <p>

                 I'm Prexa Gamdha, currently working as a Digital Marketing Intern at ArtologyPlus.
    I enjoy exploring creative ideas, learning about branding, and finding new ways
    to help brands grow online.

                </p>

                <p>

                   My internship at ArtologyPlus has given me the chance to learn and try new things.
    I enjoy working on creative ideas and discovering how brands build connections
    with people online.

                </p>

                <p>

                    I believe every project is an opportunity
                    to learn something new and improve
                    my skills.

                </p>

            </div>


            <div class="about-info">

                <h3>
                    My Journey So Far
                </h3>


                <div class="info-item">

                    <i class="fa-solid fa-briefcase"></i>

                    <div>

                        <h4>Digital Marketing Internship</h4>

                        <p>
                            ArtologyPlus
                        </p>

                    </div>

                </div>


                <div class="info-item">

                    <i class="fa-solid fa-lightbulb"></i>

                    <div>

                        <h4>Creative Learning</h4>

                        <p>
                            Exploring branding, content,
                            digital strategies, and new ideas.
                        </p>

                    </div>

                </div>


                <div class="info-item">

                    <i class="fa-solid fa-chart-line"></i>

                    <div>

                        <h4>Practical Experience</h4>

                        <p>
                            Learning through real tasks,
                            creative projects, and teamwork.
                        </p>

                    </div>

                </div>


            </div>


        </div>

    </section>


    <!-- SKILLS SECTION -->

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
                    Creative and strategic skills
                    developed through practical learning.
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


                <!-- EMAIL -->

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


    <!-- MY WORK SECTION -->

    <section class="work-section" id="work">

        <div class="container">


            <div class="section-heading">

                <p class="section-label">
                    MY PORTFOLIO
                </p>

                <h2 class="section-title">

                    Creative Work &<br>

                    <span>Digital Projects.</span>

                </h2>

                <p>

                    A collection of creative ideas,
                    branding concepts, and digital
                    marketing projects.

                </p>

            </div>


            <div class="work-grid">


                <!-- SEO -->

                <div class="work-card">

                    

                    <div class="work-content">

                        <span class="work-category">
                            SEO 
                        </span>

                        <h3>SEO Audit/Blog</h3>

                        <p>

                           Improving website visibility through SEO audits, keyword research, and engaging blog content to grow organic traffic.
                        </p>

  <a href="seo-blog.php" class="work-link">
    View Project -> 
   <i class=fa-solid fa-arrow-right></i>
</a>

                    </div>

                </div>


                <!-- SOCIAL MEDIA -->

                <div class="work-card">

                   

                    <div class="work-content">

                        <span class="work-category">
                            CONTENT CREATION
                        </span>

                        <h3>Social Media Posts</h3>

                        <p>

                            Creating engaging visual content
                            that communicates brand messages
                            in a creative way.

                        </p>

                        <a href="social-media.php" class="work-link">

                            View Project

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                    </div>

                </div>


                <!-- REELS -->

                <div class="work-card">

                   

                    <div class="work-content">

                        <span class="work-category">
                            VIDEO CONTENT
                        </span>

                        <h3>AI Reels & Organic</h3>

                        <p>

                            Exploring creative video ideas,
                            reels, and digital campaigns
                            for audience engagement.

                        </p>

                        <a href="ai-organic.php" class="work-link">

                            View Project

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                    </div>

                </div>


                <!-- AFFILIATE MARKETING -->

                <div class="work-card">

                

                    <div class="work-content">

                        <span class="work-category">
                            AFFILIATE MARKETING
                        </span>

                        <h3>Affiliate Marketing</h3>

                        <p>

                            Exploring product promotion,
                            content strategy,
                            and affiliate marketing concepts.

                        </p>

                        <a href="affiliate-marketing.php" class="work-link">

                            View Project

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                    </div>

                </div>


                <!-- EMAIL MARKETING-->

                <div class="work-card">

                   

                    <div class="work-content">

                        <span class="work-category">
                            EMAIL MARKETING
                        </span>

                        <h3>Email Marketing</h3>

                        <p>

                             Creating engaging email campaigns that connect with audiences and encourage meaningful action.
                        </p>

                        <a href="email-marketing.php" class="work-link">

                            View Project

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                    </div>

                </div>


                <!-- GOOGLE ADS -->

                <div class="work-card">

                   

                    <div class="work-content">

                        <span class="work-category">
                            DIGITAL CAMPAIGNS
                        </span>

                        <h3>Google Ads/Meta Ads</h3>

                        <p>

                            Creating targeted Google and Meta ad campaigns to reach the right audience, increase engagement, and drive meaningful results.

                        </p>

                        <a href="ads-projects.php" class="work-link">

                            View Project

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                    </div>

                </div>


            </div>

        </div>

    </section>


    <!-- WORK PHILOSOPHY -->

    <section class="philosophy-section">

        <div class="container philosophy-grid">


            <div class="philosophy-text">

                <p class="section-label">
                    MY WORK PHILOSOPHY
                </p>

                <h2 class="section-title">

                    Creativity With<br>

                    <span>Purpose.</span>

                </h2>

                <p>

                 For me, digital marketing is more than just creating content.
    It's about understanding people, knowing what a brand stands for,
    and sharing its message in a way that feels meaningful.

                </p>

                <p>

                    I like taking on new tasks, exploring creative ideas, and learning along the way.
    I enjoy working with others, staying consistent, and putting my best effort
    into everything I do.

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
                            creative concepts,
                            and fresh ways of thinking.

                        </p>

                    </div>

                </div>


                <div class="interest-card">

                    <i class="fa-solid fa-camera"></i>

                    <div>

                        <h3>Creative Inspiration</h3>

                        <p>

                            I love exploring visual designs,
                            branding styles,
                            and content that tells a story.

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


    <!-- CONTACT SECTION -->


<style>
/* CONTACT SECTION */

.contact-section {
    padding: 80px 8%;
    background: #ffffff;
    color: #111820;
}

.contact-container {
    max-width: 1000px;
    margin: auto;
}

/* Heading */

.contact-heading {
    text-align: center;
    margin-bottom: 45px;
}

.contact-heading h2 {
    font-size: 38px;
    font-weight: 600;
    margin-bottom: 15px;
    color: #111820;
}

.contact-heading h2 span {
    color: #244a91;
}

.contact-heading p {
    color: #555e6b;
    font-size: 16px;
    line-height: 1.8;
}

/* Contact Details */

.contact-details {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 22px;
}

/* Contact Card */

.contact-item {
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 25px;
    background: #ffffff;
    border: 1px solid #dce3ed;
    border-radius: 12px;
    transition: 0.3s ease;
}

.contact-item:hover {
    border-color: #244a91;
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(36, 74, 145, 0.10);
}

/* Icon */

.contact-icon {
    width: 55px;
    height: 55px;
    min-width: 55px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #edf2fa;
    border-radius: 10px;
}

.contact-icon i {
    color: #244a91;
    font-size: 22px;
}

/* Text */

.contact-info h3 {
    font-size: 16px;
    font-weight: 600;
    margin: 0 0 8px;
    color: #111820;
}

.contact-info p,
.contact-info a {
    font-size: 14px;
    color: #555e6b;
    text-decoration: none;
    margin: 0;
    line-height: 1.6;
    overflow-wrap: anywhere;
}

.contact-info a:hover {
    color: #244a91;
}

/* Responsive */

@media (max-width: 768px) {
    .contact-section {
        padding: 60px 5%;
    }

    .contact-heading h2 {
        font-size: 30px;
    }

    .contact-details {
        grid-template-columns: 1fr;
    }
}
</style>


<!-- CONTACT SECTION HTML -->

<section id="contact" class="contact-section">

    <div class="contact-container">

        <div class="contact-heading">

            <h2>Get In <span>Touch</span></h2>

            <p>
                Feel free to connect with me and let's share ideas!
            </p>

        </div>


        <div class="contact-details">

            <!-- Name -->
            <div class="contact-item">

                <div class="contact-icon">
                    <i class="fas fa-user"></i>
                </div>

                <div class="contact-info">
                    <h3>Name</h3>
                    <p>Prexa Gamdha</p>
                </div>

            </div>


            <!-- Email -->
            <div class="contact-item">

                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>

                <div class="contact-info">
                    <h3>Email</h3>

                    <a href="mailto:your-email@gmail.com">
                        gamdhaprexa2@gmail.com
                    </a>
                </div>

            </div>


            <!-- Mobile -->
            <div class="contact-item">

                <div class="contact-icon">
                    <i class="fas fa-phone"></i>
                </div>

                <div class="contact-info">
                    <h3>Mobile</h3>

                    <a href="tel:+91XXXXXXXXXX">
                        +91 6354634297
                    </a>
                </div>

            </div>


            <!-- LinkedIn -->
            <div class="contact-item">

                <div class="contact-icon">
                    <i class="fab fa-linkedin-in"></i>
                </div>

                <div class="contact-info">
                    <h3>LinkedIn</h3>

                    <a href=https://www.linkedin.com/feed/
                       target="_blank">
                        View My Profile
                    </a>
                </div>

            </div>


            <!-- Location -->
            <div class="contact-item">

                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>

                <div class="contact-info">
                    <h3>Location</h3>
                    <p>Rajkot, Gujarat, India</p>
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


    <!-- NAVBAR ACTIVE LINK SCRIPT -->

    <script>

        const sections = document.querySelectorAll("section[id]");

        const navLinks = document.querySelectorAll(".nav-links a");

        window.addEventListener("scroll", function () {

            let current = "";

            sections.forEach(section => {

                const sectionTop = section.offsetTop - 150;

                const sectionHeight = section.offsetHeight;

                if (
                    window.scrollY >= sectionTop &&
                    window.scrollY < sectionTop + sectionHeight
                ) {

                    current = section.getAttribute("id");

                }

            });


            navLinks.forEach(link => {

                link.classList.remove("active");

                if (link.getAttribute("href") === "#" + current) {

                    link.classList.add("active");

                }

            });

        });

    </script>


</body>

</html>
