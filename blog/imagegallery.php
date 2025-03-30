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
    /* Gallery table styling */
    .gallery-table img.styled-image {
        max-width: 100%; /* Make sure image fits inside the table cell */
        width: auto; /* Allow natural width up to the max-width */
        height: auto; /* Maintain aspect ratio */
        border-radius: 0px; /* No rounded corners for old-school look */
        box-shadow: none; /* Remove modern shadow effect */
        border: none; /* Remove any default border */
    }
    
    /* Gallery table styling */
    .gallery-table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed; /* Fixed table layout prevents overflow */
    }
    
    .gallery-table td {
        width: 50%;
        padding: 10px;
        text-align: center;
        vertical-align: top;
    }
    
    .gallery-table p {
        margin-top: 5px;
        color: #99CCCC; /* Light teal to match footer color */
        font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;
        font-size: 0.9em;
    }
    
    /* Add a specific wrapper for images */
    .image-wrapper {
        width: 100%;
        text-align: center;
        overflow: hidden; /* Prevents image overflow */
    }
    </style>
</head>
<body>
    <div class="content">
        <?php include '../header.php'; ?>
        <h1>image gallery</h1>
        <p>welcome to my image gallery! here you'll find some of my favorite images i have taken.</p>
        
        <!-- Image Gallery Section using old-school table layout -->
        <table class="gallery-table">
            <tr>
                <td>
                    <div class="image-wrapper">
                        <img src="../images/chi.jpg" alt="Image 1" class="styled-image">
                    </div>
                    <p>chicago 2024</p>
                </td>
                <td>
                    <div class="image-wrapper">
                        <img src="../images/sd.jpg" alt="Image 2" class="styled-image">
                    </div>
                    <p>san diego 2024</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="image-wrapper">
                        <img src="../images/utah.jpg" alt="Image 3" class="styled-image">
                    </div>
                    <p>utah 2024</p>
                </td>
                <td>
                    <div class="image-wrapper">
                        <img src="../images/utah2.jpg" alt="Image 4" class="styled-image">
                    </div>
                    <p>utah 2024</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="image-wrapper">
                        <img src="../images/cap.jpg" alt="Image 5" class="styled-image">
                    </div>
                    <p>jefferson city capital 2024</p>
                </td>
                <td>
                    <div class="image-wrapper">
                        <img src="../images/hi.jpg" alt="Image 6" class="styled-image">
                    </div>
                    <p>hawaii 2023</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="image-wrapper">
                        <img src="../images/la.jpg" alt="Image 7" class="styled-image">
                    </div>
                    <p>los angeles 2023</p>
                </td>
                <td>
                    <div class="image-wrapper">
                        <img src="../images/mt1.jpg" alt="Image 8" class="styled-image">
                    </div>
                    <p>montana 2022</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="image-wrapper">
                        <img src="../images/unity2022.jpg" alt="Image 9" class="styled-image">
                    </div>
                    <p>unity villiage 2022</p>
                </td>
                <td>
                    <div class="image-wrapper">
                        <img src="../images/mt2.jpg" alt="Image 10" class="styled-image">
                    </div>
                    <p>montana 2021</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="image-wrapper">
                        <img src="../images/tn.jpg" alt="Image 11" class="styled-image">
                    </div>
                    <p>tennessee 2021</p>
                </td>
                <td>
                    <div class="image-wrapper">
                        <img src="../images/co.jpg" alt="Image 12" class="styled-image">
                    </div>
                    <p>colorado 2016</p>
                </td>
            </tr>
        </table>
        
        <?php include '../footer.php'; ?>
    </div>
</body>
</html>