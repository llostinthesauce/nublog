<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog - nuBlog</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <style>
        .blog-columns {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            margin-top: 10px;
        }

        .column {
            flex: 1;
            min-width: 300px;
        }

        .column h3 {
            margin-bottom: 10px;
            font-size: 1.4em;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
        }

        .column ul {
            list-style: none;
            padding-left: 0;
        }

        .column ul li {
            margin-bottom: 6px;
        }

        .column ul li a {
            text-decoration: underline;
            color: #33CCAA;
        }

        .column ul li a:hover {
            color: #66FFCC;
        }

        @media (max-width: 768px) {
            .blog-columns {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

    <div class="content">
        <?php include 'header.php'; ?>

        <h1>blog</h1>
        <p>welcome to my nuBlog! below you will find an all-encompassing feed of my latest posts:</p>
        <p><i>(some of these posts are old, some are new, some are essays, and some are just thoughts or collections of pictures. i also have a daily section, where i make short form posts. if I say anything interesting, let's talk about it! shoot me an e-mail, it is located in the footer!)</i></p>
        <a href="blog/imagegallery.php" class="link">to find my IMAGE ONLY posts, click here</a>
        
        <div class="blog-columns">
            <!-- Daily Column -->
            <div class="column daily-posts">
                <h3>all daily posts:</h3>
                <ul>
                    <li><a href="daily/april26.php">04-26-2025</a></li>
                    <li><a href="daily/april25.php">04-25-2025</a></li>
                    <li><a href="daily/april24.php">04-24-2025</a></li>
                    <li><a href="daily/april23.php">04-23-2025</a></li>
                    <li><a href="daily/april22.php">04-22-2025</a></li>
                </ul>
            </div>

            <!-- Longform Column -->
            <div class="column longform-posts">
                <h3>all longform posts:</h3>
                <ul>
                    <li><a href="blog/post16.php">04-25-2025: on individualism</a></li>
                    <li><a href="blog/post13.php">04-10-2025: literary duos essay (kav and clay)</a></li>
                    <li><a href="blog/post12.php">04-04-2025: literary duos essay (fight club)</a></li>
                    <li><a href="blog/post5.php">03-24-2025: nature being paradoxical</a></li>
                    <li><a href="blog/post1.php">12-31-2024: m.c.t.</a></li>
                    <li><a href="blog/post2.php">05-29-2024: the illusion of better times</a></li>
                    <li><a href="blog/post14.php">03-15-2024: KCOU: "Scaring The Hoes"</a></li>
                    <li><a href="blog/post15.php">08-28-2023: "techs"</a></li>
                    <li><a href="blog/post3.php">08-24-2023: the fear of looking beyond</a></li>
                    <li><a href="blog/post4.php">08-04-2023: airplane fiction</a></li>
                    <li><a href="blog/post10.php">11-03-2021: morals: where from? valid?</a></li>
                    <li><a href="blog/post9.php">10-19-2021: why would god allow suffering?</a></li>
                    <li><a href="blog/post8.php">10-12-2021: is experience universal?</a></li>
                    <li><a href="blog/post7.php">09-26-2021: proof for gods existence</a></li>
                    <li><a href="blog/post6.php">09-02-2021: what makes you, you?</a></li>
                    <li><a href="blog/post11.php">04-28-2021: how to fix america</a></li>
                </ul>
            </div>


        </div>

        <?php include 'footer.php'; ?>
    </div>

</body>
</html>