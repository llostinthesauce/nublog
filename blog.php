<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog - nuBlog</title>
    <link rel="stylesheet" href="styles/style.css"> <!-- External CSS -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"> <!-- Favicon -->
</head>
<body>

    <div class="content">
        <?php include 'header.php'; ?>

        <h1>blog</h1>

        <!-- About Link and Image Gallery Link -->
        <p>
            <a href="about.php" class="link">more about me</a> | 
            <a href="blog/imagegallery.php" class="link">image gallery</a>
        </p>

        <p>welcome to my nuBlog! below you will find an all-encompassing feed of any of my latest posts:</p>
        <p><i>(I am a big fan of having an open dialogue about any of the topics discussed here, no matter how mundane. I simply would like to encourage some conversation, so if I say anything that sparks your interest, please feel free to shoot me an e-mail, it is located in the footer!)</i></p>

        <!-- List of All Blog Posts -->
        <h3>all posts of any type, chronologically:</h3>
        <ul>
            <li><a href="blog/post12.php" class="link">03-28-2025: demo</a></li>
            <li><a href="blog/post5.php" class="link">03-24-2025: nature being paradoxical</a></li>
            <li><a href="blog/post1.php" class="link">12-31-2024: m.c.t.</a></li>
            <li><a href="blog/post2.php" class="link">05-29-2024: the illision of better times</a></li>
            <li><a href="blog/post3.php" class="link">08-24-2023: the fear of looking beyond</a></li>
            <li><a href="blog/post4.php" class="link">08-04-2023: airplane fiction</a></li>
            <li><a href="blog/post10.php" class="link">11-03-2021: morals: where from? & are they valid?</a></li>
            <li><a href="blog/post9.php" class="link">10-19-2021: why would god allow suffering?</a></li>
            <li><a href="blog/post8.php" class="link">10-12-2021: is experience universal?</a></li>
            <li><a href="blog/post7.php" class="link">09-26-2021: the best proof for the existence of god</a></li>
            <li><a href="blog/post6.php" class="link">09-02-2021: what makes you, you?</a></li>
            <li><a href="blog/post11.php" class="link">04-28-2021: how to fix america</a></li>

            <!-- Additional posts can be added here -->
        </ul>

        <?php include 'footer.php'; ?>
    </div>

</body>
</html>