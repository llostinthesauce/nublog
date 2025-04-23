<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vivitar pz3090 film camera gallery, 2025</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <style>
        .gallery-table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }
        .gallery-table td {
            width: 50%;
            padding: 10px;
            text-align: center;
            vertical-align: top;
        }
        .gallery-table img.styled-image {
            max-width: 100%;
            height: auto;
            border: none;
        }
        .gallery-table p {
            margin-top: 5px;
            color: #99CCCC;
            font-size: 0.9em;
        }
        .hidden-row {
            display: none;
        }
        #loadMoreBtn {
            margin: 20px auto;
            display: block;
            padding: 10px 20px;
            font-size: 1em;
            background: none;
            border: 1px solid #33CCAA;
            color: #33CCAA;
            cursor: pointer;
        }
        #loadMoreBtn:hover {
            background-color: #111;
            color: #66FFCC;
            border-color: #66FFCC;
        }
    </style>
</head>
<body>
    <div class="content">
        <?php include '../header.php'; ?>
        <h1>vivitar pz3090 film camera, 2024</h1>
        <p>from two rolls of film shot in Utah and San Diego ~ 38 flicks</p>

        <table class="gallery-table" id="galleryTable">
            <?php
            for ($i = 1; $i <= 38; $i += 2) {
                $rowClass = ($i > 10) ? 'hidden-row' : ''; // Show first 5 rows (10 images)
                echo "<tr class=\"$rowClass\">";
                echo "<td><img src=\"../images/vivitar/vivitar{$i}.JPG\" alt=\"vivitar{$i}\" class=\"styled-image\"><p></p></td>";
                if ($i + 1 <= 38) {
                    echo "<td><img src=\"../images/vivitar/vivitar" . ($i + 1) . ".JPG\" alt=\"vivitar" . ($i + 1) . "\" class=\"styled-image\"><p></p></td>";
                } else {
                    echo "<td></td>";
                }
                echo "</tr>";
            }
            ?>
        </table>

        <button id="loadMoreBtn">load more</button>

        <?php include '../footer.php'; ?>
    </div>

    <script>
        const loadBtn = document.getElementById('loadMoreBtn');
        const hiddenRows = document.querySelectorAll('.hidden-row');
        let index = 0;
        const CHUNK = 3; // Reveal 3 more rows (6 images) at a time

        loadBtn.addEventListener('click', () => {
            let shown = 0;
            for (let i = index; i < hiddenRows.length && shown < CHUNK; i++) {
                hiddenRows[i].style.display = 'table-row';
                shown++;
                index++;
            }
            if (index >= hiddenRows.length) {
                loadBtn.style.display = 'none'; // Hide button when done
            }
        });
    </script>
</body>
</html>