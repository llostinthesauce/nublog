<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nuBlog</title>
    <link rel="stylesheet" href="styles/style.css"> <!-- Link to external CSS -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"> <!-- Add favicon here -->
    
</head>
<body>
    <div class="content">

        <div>
            <a href="index.php" class="link">home</a> | 
            <a href="blog.html" class="link">blog</a> | 
            <a href="about.html" class="link">about me</a> |
            <a href="guestbook.php" class="link">guestbook</a> <!-- Link to guestbook -->
        </div>

        <div>
            <?php include 'visitor_counter.php'; ?>
        </div>

        <h1>you have reached the home of badc0vers' seemingly unnessecary nuBlog</h1>
        
        <!-- Scrolling banner -->
        <marquee behavior="scroll" direction="left" scrollamount="15">
            <i>my domain is my domain, i am the oldest i have ever been and the youngest i will ever be, and the world i was born into no longer exist!</i>
        </marquee>
        
        <img src="images/silly.jpg" alt="A silly image" class="styled-image">
        
        <footer>
            <audio autoplay loop>
                <source src="audio/shb.mp3" type="audio/mp3">
            </audio>        
            &copy; 2025 nuBlog | contact <a href="mailto:cobyshanks@gmail.com">badc0vers</a>
        </footer>
    </div>
</body>
</html>