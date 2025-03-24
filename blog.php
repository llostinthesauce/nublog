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
            <li><a href="blog/post5.php" class="link">24 march 2025: nature being paradoxical</a></li>
            <li><a href="blog/post1.php" class="link">31 december 2024: m.c.t.</a></li>
            <li><a href="blog/post2.php" class="link">29 may 2024: the illision of better times</a></li>
            <li><a href="blog/post3.php" class="link">24 august 2023: the fear of looking beyond</a></li>
            <li><a href="blog/post4.php" class="link">4 august 2023: airplane fiction</a></li>
            <!-- Additional posts can be added here -->
        </ul>

        <?php include 'footer.php'; ?>
    </div>

</body>
</html>