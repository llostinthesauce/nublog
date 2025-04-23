<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nuBlog</title>
    <link rel="stylesheet" href="styles/style.css"> <!-- External CSS -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"> <!-- Favicon -->
</head>
<body>

    <div class="content">
        <?php include 'header.php'; ?>
        <br>
        <div class="visitor-count">
            <?php include 'visitor_counter.php'; ?>
        </div>

        <h1>you have reached the home of [REDACTED]s' seemingly <i>unnecessary</i> nuBlog</h1>

        <!-- Scrolling banner -->
        <marquee behavior="scroll" direction="left" scrollamount="10">
            <i>my domain is my domain, i am the oldest i have ever been and the youngest i will ever be, and the world i was born into no longer exists!</i>
        </marquee>

        <img src="images/silly.jpg" alt="A silly image" class="styled-image">

        <?php
        $daily_dir = __DIR__ . "/daily/";
        $daily_files = glob($daily_dir . "*.php");

        // Sort by newest file name (you could also use filemtime for modified time)
        usort($daily_files, function($a, $b) {
            return strcmp($b, $a); // descending order
        });

        $latest_file = $daily_files[0] ?? null;

        if ($latest_file) {
            $latest_filename = basename($latest_file);
            echo "<div class='homepage-daily-preview'>";
            echo "<h2>read my latest daily entry:</h2>";
            echo "<a href='daily/$latest_filename' class='link'>$latest_filename</a>";
            echo "</div>";
        }
        ?>

        <audio autoplay loop>
            <source src="/audio/shb.mp3" type="audio/mp3">
        </audio>  

        <?php include 'footer.php'; ?>
    </div>

</body>
</html>