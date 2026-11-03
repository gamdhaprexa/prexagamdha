
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Ads & Meta Ads | Prexa Gamdha</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f8f9fc;
            color: #111820;
        }

        .project-page {
            padding: 70px 8%;
        }

        .back-link {
            color: #174a91;
            text-decoration: none;
            font-weight: 600;
        }

        .project-page h1 {
            text-align: center;
            font-size: 36px;
            margin: 25px 0 12px;
        }

        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 45px;
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            max-width: 1000px;
            margin: auto;
        }

        .project-card {
            background: white;
            padding: 35px;
            border: 1px solid #e0e5ed;
            border-radius: 14px;
            transition: 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.07);
        }

        .category {
            color: #174a91;
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .project-card h2 {
            font-size: 25px;
            margin: 15px 0;
        }

        .project-card p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        .project-link {
            color: #174a91;
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
        }

        .project-link:hover {
            color: #0b2f63;
        }

        @media (max-width: 700px) {
            .project-grid {
                grid-template-columns: 1fr;
            }

            .project-page h1 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body>

<section class="project-page">

    <a href="index.php" class="back-link">
        ← Back to Portfolio
    </a>

    <h1>Digital Advertising</h1>

    <p class="subtitle">
        Explore my Google Ads and Meta Ads projects.
    </p>

    <div class="project-grid">

        <!-- Google Ads Box -->
        <div class="project-card">

            <span class="category">SEARCH ADVERTISING</span>

            <h2>Google Ads</h2>

            <p>
                Creating targeted search campaigns through keyword
                research, ad copy, and audience intent to reach
                potential customers.
            </p>

            <a href="google-ads.php" class="project-link">
                View Project →
            </a>

        </div>

        <!-- Meta Ads Box -->
        <div class="project-card">

            <span class="category">SOCIAL MEDIA ADVERTISING</span>

            <h2>Meta Ads</h2>

            <p>
                Developing creative Facebook and Instagram ad
                campaigns to build brand awareness, engagement,
                and reach.
            </p>

            <a href="meta-ads.php" class="project-link">
                View Project →
            </a>

        </div>

    </div>

</section>

</body>
</html>
