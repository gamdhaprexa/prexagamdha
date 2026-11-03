
<?php
// ArtologyPlus Branding Reels
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Branding Reels | ArtologyPlus</title>

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

        .reels-section {
            padding: 70px 8%;
            min-height: 100vh;
            background: #ffffff;
        }

        /* HEADING */

        .reels-heading {
            text-align: center;
            margin-bottom: 50px;
        }

        .reels-heading h1 {
            font-size: 38px;
            font-weight: 700;
            color: #111820;
            margin-bottom: 12px;
        }

        .reels-heading p {
            font-size: 16px;
            color: #666666;
        }

        /* REELS GRID */

        .reels-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 40px;
            justify-items: center;
        }

        /* REEL CARD */

        .reel-card {
            width: 100%;
            max-width: 400px;
            padding: 22px;

            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 15px;

            text-align: center;

            transition: 0.3s ease;
        }

        .reel-card:hover {
            transform: translateY(-5px);

            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        /* REEL NUMBER */

        .reel-day {
            font-size: 15px;
            font-weight: 700;
            letter-spacing: 3px;
            color: #243b67;

            margin-bottom: 12px;
        }

        /* REEL TITLE */

        .reel-card h2 {
            font-size: 22px;
            font-weight: 600;
            color: #111820;

            margin-bottom: 22px;
        }

        /* VIDEO */

        .reel-card video {
            width: 100%;
            aspect-ratio: 9 / 16;

            object-fit: contain;
            object-position: center;

            display: block;

            border-radius: 10px;
            background: #000000;
        }

        /* TABLET */

        @media (max-width: 768px) {

            .reels-section {
                padding: 50px 5%;
            }

            .reels-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 20px;
            }

            .reel-card {
                padding: 15px;
            }

            .reel-card h2 {
                font-size: 18px;
            }

        }

        /* MOBILE */

        @media (max-width: 550px) {

            .reels-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .reel-card {
                max-width: 350px;
            }

            .reels-heading h1 {
                font-size: 28px;
            }

        }

    </style>

</head>

<body>

    <section class="reels-section">

        <!-- SECTION HEADING -->

        <div class="reels-heading">

            <h1>Branding Reels</h1>

            <p>Creative Stories by ArtologyPlus</p>

        </div>


        <div class="reels-grid">


            <!-- REEL 1 -->

            <div class="reel-card">

                <div class="reel-day">
                    REEL 1
                </div>

                <h2>First Impression</h2>

                <video controls playsinline preload="metadata">

                    <source src="images/reel1.mp4" type="video/mp4">

                    Your browser does not support video playback.

                </video>

            </div>


            <!-- REEL 2 -->

            <div class="reel-card">

                <div class="reel-day">
                    REEL 2
                </div>

                <h2>Brand Identity</h2>

                <video controls playsinline preload="metadata">

                    <source src="images/reel2.mp4" type="video/mp4">

                    Your browser does not support video playback.

                </video>

            </div>


        </div>

    </section>

</body>

</html>
