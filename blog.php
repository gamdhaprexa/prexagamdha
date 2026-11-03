
<?php

$blogs = [

    [
        "image" => "images/logo1.png",
        "date" => "october 31, 2026",
        "title" => "Your Brand Is More Than a Logo",
        "description" => "A brand is more than a logo. It's your identity, your story, and the impression you leave on every customer.",
        "link" => "https://artologyplusbranding.blogspot.com/2026/10/your-brand-is-more-than-logo.html"
    ],

    [
        "image" => "images/powerful.png",
        "date" => "November 01, 2026",
        "title" => "The Psychology Behind Powerful Design",
        "description" => "Discover how colors, shapes, and visual elements influence emotions, shape perceptions, and make designs more memorable.",
        "link" => "https://artologyplusbranding.blogspot.com/2026/10/the-psychology-behind-powerful-design.html"
    ],

    [
        "image" => "images/workspace.png",
        "date" => "November 02, 2026",
        "title" => "How Branding Helps Your Business Stand Out",
        "description" => "Discover how strong branding helps your business stand out, build customer trust, and create a memorable identity in a competitive market.",
        "link" => "https://artologyplusbranding.blogspot.com/2026/11/how-branding-helps-your-business-stand.html"
    ],

    [
        "image" => "images/dusk.png",
        "date" => "November 02, 2026",
        "title" => "The Power of a Unique Brand Identity",
        "description" => "Explore how a unique brand identity helps your business stand out, create a lasting impression, and connect with the right audience through powerful and consistent branding.",
        "link" => "https://artologyplusbranding.blogspot.com/2026/11/the-power-of-unique-brand-identity.html"
    ]

];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blogs | ArtologyPlus</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #ffffff;
            color: #19212a;
        }

        /* BLOG SECTION */

        .blog-section {
            padding: 80px 5%;
            background: #ffffff;
        }

        .blog-container {
            max-width: 1200px;
            margin: auto;
        }

        /* BLOG HEADING */

        .blog-heading {
            text-align: center;
            margin-bottom: 50px;
        }

        .blog-heading h1 {
            font-size: 38px;
            font-weight: 700;
            color: #19212a;
            margin-bottom: 12px;
        }

        .blog-heading p {
            font-size: 15px;
            color: #667085;
            line-height: 1.7;
        }

        /* BLOG GRID */

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        /* BLOG CARD */

        .blog-card {
            background: #ffffff;
            border: 1px solid #e1e1e1;
            overflow: hidden;
            transition: 0.3s ease;
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        /* BLOG IMAGE */

        .blog-image {
            width: 100%;
            height: 210px;
            overflow: hidden;
        }

        .blog-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.4s ease;
        }

        .blog-card:hover .blog-image img {
            transform: scale(1.05);
        }

        /* BLOG CONTENT */

        .blog-content {
            padding: 20px 22px 25px;
        }

        /* BLOG DATE */

        .blog-date {
            font-size: 12px;
            color: #667085;
            margin-bottom: 10px;
        }

        .blog-date i {
            color: #5b63e8;
            margin-right: 5px;
        }

        /* BLOG TITLE */

        .blog-title {
            font-size: 17px;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: 20px;
            min-height: 76px;
        }

        .blog-title a {
            text-decoration: none;
            color: #19212a;
        }

        .blog-title a:hover {
            color: #3446a8;
        }

        /* BLOG DESCRIPTION */

        .blog-description {
            font-size: 13px;
            color: #667085;
            line-height: 1.7;
            margin-bottom: 18px;
        }

        /* READ MORE */

        .read-more {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: #19212a;
            font-size: 12px;
            font-weight: 600;
            transition: 0.3s ease;
        }

        .read-more:hover {
            color: #3446a8;
            gap: 15px;
        }

        /* TABLET */

        @media (max-width: 992px) {

            .blog-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        /* MOBILE */

        @media (max-width: 600px) {

            .blog-section {
                padding: 50px 5%;
            }

            .blog-heading h1 {
                font-size: 30px;
            }

            .blog-heading p {
                font-size: 13px;
            }

            .blog-grid {
                grid-template-columns: 1fr;
            }

            .blog-image {
                height: 220px;
            }

            .blog-title {
                min-height: auto;
            }

        }

    </style>

</head>

<body>

    <!-- BLOG SECTION START -->

    <section class="blog-section">

        <div class="blog-container">

            <!-- BLOG HEADING -->

            <div class="blog-heading">

                <h1>Blogs</h1>

                <p>
                    Explore our latest insights, ideas, and digital marketing trends.
                </p>

            </div>

            <!-- BLOG CARDS -->

            <div class="blog-grid">

                <?php foreach ($blogs as $blog): ?>

                    <div class="blog-card">

                        <!-- IMAGE -->

                        <div class="blog-image">

                            <img
                                src="<?php echo htmlspecialchars($blog['image']); ?>"
                                alt="<?php echo htmlspecialchars($blog['title']); ?>"
                            >

                        </div>

                        <!-- CONTENT -->

                        <div class="blog-content">

                            <!-- DATE -->

                            <div class="blog-date">

                                <i class="fa-regular fa-calendar"></i>

                                <?php echo htmlspecialchars($blog['date']); ?>

                            </div>

                            <!-- TITLE -->

                            <h3 class="blog-title">

                                <a href="<?php echo htmlspecialchars($blog['link']); ?>">

                                    <?php echo htmlspecialchars($blog['title']); ?>

                                </a>

                            </h3>

                            <!-- DESCRIPTION -->

                            <p class="blog-description">

                                <?php echo htmlspecialchars($blog['description']); ?>

                            </p>

                            <!-- READ MORE -->

                            <a
                                class="read-more"
                                href="<?php echo htmlspecialchars($blog['link']); ?>"
                            >

                                Read More

                                <i class="fa-solid fa-arrow-right"></i>

                            </a>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </section>

    <!-- BLOG SECTION END -->

</body>

</html>
