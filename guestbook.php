<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>guestbook - nuBlog</title>
    <link rel="stylesheet" href="styles/style.css"> <!-- Link to external CSS -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"> <!-- Favicon -->
</head>
<body>

    <div class="content">
        <?php include 'header.php'; ?> <!-- Include header.php -->

        <h1>welcome to the guestbook</h1>

        <!-- Guestbook form -->
        <form action="guestbook.php" method="POST">
            <label for="name">name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="message">message:</label><br>
            <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

            <input type="submit" value="Sign Guestbook">
        </form>

        <!-- Display guestbook entries -->
        <h2>guestbook entries:</h2>
        <div class="guestbook-entries">
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Collect and save the entry
                    $name = htmlspecialchars($_POST['name']);
                    $message = htmlspecialchars($_POST['message']);
                    // Get the current date and time
                    $date = date("Y-m-d H:i:s");
                    // Format the entry: (date) name: message
                    $entry = "$date $name: $message\n";

                    // Append to a file to store the guestbook entries
                    file_put_contents('guestbook.txt', $entry, FILE_APPEND);
                }

                // Read and display all entries from the file
                if (file_exists('guestbook.txt')) {
                    $entries = file_get_contents('guestbook.txt');
                    // Display each entry on a new line
                    echo nl2br($entries); // nl2br will preserve newlines
                } else {
                    echo "<p>No entries yet!</p>";
                }
            ?>
        </div>

        <?php include 'footer.php'; ?> <!-- Include footer.php -->
    </div>

</body>
</html>