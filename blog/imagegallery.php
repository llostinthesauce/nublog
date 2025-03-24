<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image gallery - nuBlog</title>
    <link rel="stylesheet" href="../styles/style.css"> <!-- External CSS -->
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon"> <!-- Favicon -->

    <!-- Inline Styling for Image Gallery -->
    <style>
        /* Gallery Container */
        .gallery {
            display: flex;
            flex-wrap: wrap; /* Allow items to wrap to the next line */
            gap: 20px; /* Space between items */
            justify-content: space-between; /* Distribute items with space between */
        }

        /* Gallery Item */
        .gallery-item {
            flex: 1 1 calc(50% - 20px); /* Each item takes 50% width minus gap space */
            text-align: center; /* Center text under the images */
        }

        .styled-image {
            width: 100%; /* Make the image fill the container */
            height: auto; /* Maintain aspect ratio */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .gallery-item p {
            margin-top: 10px;
            font-style: italic;
        }
    </style>
</head>
<body>

    <div class="content">
        <?php include '../header.php'; ?>
        <h1>image gallery</h1>
        <p>welcome to my image gallery! here you'll find some of my favorite images.</p>

        <!-- Image Gallery Section -->
        <div class="gallery">
            <div class="gallery-item">
                <img src="../images/silly.jpg" alt="Image 1" class="styled-image">
                <p>Image description 1</p>
            </div>
            <div class="gallery-item">
                <img src="../images/silly.jpg" alt="Image 2" class="styled-image">
                <p>Image description 2</p>
            </div>
            <div class="gallery-item">
                <img src="../images/silly.jpg" alt="Image 3" class="styled-image">
                <p>Image description 3</p>
            </div>
            <div class="gallery-item">
                <img src="../images/silly.jpg" alt="Image 3" class="styled-image">
                <p>Image description 3</p>
            </div>
            <!-- Add more gallery items as needed -->
        </div>

        <?php include '../footer.php'; ?>
    </div>

</body>
</html>