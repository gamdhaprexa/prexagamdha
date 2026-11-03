
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO Projects | Prexa Gamdha</title>

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

        .project-page h1 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 12px;
        }

        .project-page .subtitle {
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
            box-shadow: 0 5px 20px rgba(0,0,0,0.04);
            transition: 0.3s;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }

        .project-card .category {
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

        .project-card a {
            color: #174a91;
            text-decoration: none;
            font-weight: bold;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 30px;
            color: #174a91;
            text-decoration: none;
            font-weight: bold;
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

    <a href="index.php" class="back-link">← Back to Portfolio</a>

    <h1>SEO Projects</h1>
    <p class="subtitle">
        Explore my SEO audit and blog content work.
    </p>

    <div class="project-grid">

        <!-- SEO Audit Card -->
        <div class="project-card">
            <span class="category">SEO</span>

            <h2>SEO Audit</h2>

            <p>
                Website analysis focused on technical SEO,
                on-page optimization, keyword research,
                and opportunities to improve organic visibility.
            </p>

            <a href="seo-audit.php">
                View Details →
            </a>
        </div>

        <!-- Blog Card -->
        <div class="project-card">
            <span class="category">CONTENT</span>

            <h2>Blog Writing</h2>

            <p>
                SEO-friendly blog content created with keyword
                research, engaging headings, and a focus on
                useful information for readers.
            </p>

            <a href="blog.php">
                View Details →
            </a>
        </div>

    </div>

</section>

</body>
</html>
