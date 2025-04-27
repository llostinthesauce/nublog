<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>topsters archive - nuBlog</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <style>
        .topsters-gallery {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
            margin-top: 40px;
        }

        .topsters-entry {
            width: 90%;
            max-width: 800px;
            text-align: center;
        }

        .topsters-entry img {
            width: 100%;
            height: auto;
            border: none;
        }

        .topsters-entry p {
            margin-top: 10px;
            color: #99CCCC;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="content">
        <?php include '../header.php'; ?>
        <h1>topsters archive</h1>
        <p>top streamed albums, based on last.fm scrobbles/playcount. not entirely reflective of what i listen to, as i use my iPod & physical music collection a lot of the time.</p>

        <div class="topsters-gallery">
            <?php
            // reverse loop from 15 to 1
            $captions = [
                15 => "april 2025",
                14 => "december 2024",
                13 => "january 2025",
                12 => "december 2023",
                11 => "november 2023",
                10 => "september 2023",
                9 => "may 2023",
                8 => "february 2024",
                7 => "december 2022",
                6 => "november 2022",
                5 => "october 2022",
                4 => "september 2022",
                3 => "august 2022",
                2 => "april 2022",
                1 => "january 2022",
            ];

            foreach (array_reverse(range(1, 15)) as $i) {
                echo "<div class='topsters-entry'>";
                echo "<img src='../images/topsters/$i.PNG' alt='topster $i'>";
                echo "<p>" . ($captions[$i] ?? "") . "</p>";
                echo "</div>";
            }
            ?>
        </div>

        <?php include '../footer.php'; ?>
    </div>
</body>
</html>