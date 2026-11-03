
<?php
// Social Media Branding Posts
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Social Media Branding | ArtologyPlus</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #ffffff;
            color: #111820;
        }

        /* MAIN SECTION */

        .social-section {
            padding: 70px 5%;
            min-height: 100vh;
            background: #ffffff;
        }

        /* HEADING */

        .social-heading {
            text-align: center;
            margin-bottom: 50px;
        }

        .social-heading h1 {
            font-size: 38px;
            font-weight: 700;
            color: #111820;
            margin-bottom: 12px;
        }

        .social-heading p {
            font-size: 16px;
            color: #666666;
        }

        /* POSTS GRID */

        .social-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 30px;
            align-items: stretch;
        }

        /* POST CARD */

        .social-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 15px;
            padding: 22px;
            text-align: center;

            display: flex;
            flex-direction: column;
            align-items: center;

            transition: 0.3s ease;
        }

        .social-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        /* DAY */

        .social-card .day {
            font-size: 15px;
            font-weight: 700;
            letter-spacing: 3px;
            color: #243b67;
            margin-bottom: 12px;
        }

        /* TITLE */

        .social-card h2 {
            font-size: 22px;
            font-weight: 600;
            color: #111820;

            margin-bottom: 22px;

            min-height: 55px;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* IMAGE */

        .social-card img {
            width: 100%;
            height: auto;

            aspect-ratio: 4 / 5;

            object-fit: contain;
            object-position: center;

            display: block;

            border-radius: 8px;

            background: #ffffff;
        }

        /* TABLET */

        @media (max-width: 992px) {

            .social-section {
                padding: 60px 5%;
            }

            .social-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 25px;
            }

        }

        /* MOBILE */

        @media (max-width: 600px) {

            .social-section {
                padding: 45px 5%;
            }

            .social-heading {
                margin-bottom: 35px;
            }

            .social-heading h1 {
                font-size: 28px;
            }

            .social-grid {
                grid-template-columns: 1fr;
                gap: 25px;
            }

            .social-card {
                padding: 20px;
            }

            .social-card h2 {
                font-size: 21px;
            }

        }

    </style>

</head>

<body>

    <section class="social-section">

        <div class="social-heading">

            <h1>Social Media Branding</h1>

            <p>7 Days of Branding</p>

        </div>

        <div class="social-grid">

            <!-- DAY 1 -->

            <div class="social-card">

                <div class="day">DAY 1</div>

                <h2>Logo Design</h2>

                <img src="images/logo.png"
                     alt="More Than a Logo">

            </div>


            <!-- DAY 2 -->

            <div class="social-card">

                <div class="day">DAY 2</div>

                <h2>Brand Colors</h2>

                <img src="images/color.png"
                     alt="The Power of Brand Colors">

            </div>


            <!-- DAY 3 -->

            <div class="social-card">

                <div class="day">DAY 3</div>

                <h2>Brand Personality</h2>

                <img src="images/brand.png"
                     alt="The Brand Personality">

            </div>


            <!-- DAY 4 -->

            <div class="social-card">

                <div class="day">DAY 4</div>

                <h2>Brand Voice</h2>

                <img src="images/voice.png"
                     alt="The Voice of a Brand">

            </div>


            <!-- DAY 5 -->

            <div class="social-card">

                <div class="day">DAY 5</div>

                <h2>Brand Makeover</h2>

                <img src="images/makeover.png"
                     alt="The Brand Makeover">

            </div>


            <!-- DAY 6 -->

            <div class="social-card">

                <div class="day">DAY 6</div>

                <h2>Brand Stories</h2>

                <img src="images/story.png"
                     alt="One Brand, Many Stories">

            </div>


            <!-- DAY 7 -->

            <div class="social-card">

                <div class="day">DAY 7</div>

                <h2>ArtologyPlus</h2>

                <img src="images/artologyplus.png"
                     alt="The ArtologyPlus Experience">

            </div>

        </div>

    </section>

</body>

</html>
