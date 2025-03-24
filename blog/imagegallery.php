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
        <p>welcome to my image gallery! here you'll find some of my favorite images i have taken.</p>

        <!-- Image Gallery Section -->
        <div class="gallery">
            <div class="gallery-item">
                <img src="../images/chi.jpg" alt="Image 1" class="styled-image">
                <p>chicago 2024</p>
            </div>
            <div class="gallery-item">
                <img src="../images/sd.jpg" alt="Image 2" class="styled-image">
                <p>san diego 2024</p>
            </div>
            <div class="gallery-item">
                <img src="../images/utah.jpg" alt="Image 3" class="styled-image">
                <p>utah 2024</p>
            </div>
            <div class="gallery-item">
                <img src="../images/utah2.jpg" alt="Image 3" class="styled-image">
                <p>utah 2024</p>
            </div>
            <div class="gallery-item">
                <img src="../images/cap.jpg" alt="Image 3" class="styled-image">
                <p>jefferson city capital 2024</p>
            </div>
            <div class="gallery-item">
                <img src="../images/hi.jpg" alt="Image 3" class="styled-image">
                <p>hawaii 2023</p>
            </div>
            <div class="gallery-item">
                <img src="../images/la.jpg" alt="Image 3" class="styled-image">
                <p>los angeles 2023</p>
            </div>
            <div class="gallery-item">
                <img src="../images/mt.jpg" alt="Image 3" class="styled-image">
                <p>montana 2022</p>
            </div>
            <div class="gallery-item">
                <img src="../images/unity2022.jpg" alt="Image 3" class="styled-image">
                <p>unity villiage 2022</p>
            </div>
            <div class="gallery-item">
                <img src="../images/mt2.jpg" alt="Image 3" class="styled-image">
                <p>montana 2021</p>
            </div>
            <div class="gallery-item">
                <img src="../images/tn.jpg" alt="Image 3" class="styled-image">
                <p>tennessee 2021</p>
            </div>
            <div class="gallery-item">
                <img src="../images/co.jpg" alt="Image 3" class="styled-image">
                <p>colorado 2016</p>
            </div>
            <!-- Add more gallery items as needed -->
        </div>

        <?php include '../footer.php'; ?>
    </div>

</body>
</html>