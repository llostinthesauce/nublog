<?php
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the name and message from the POST request
    $name = htmlspecialchars(trim($_POST['name']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Simple validation
    if (!empty($name) && !empty($message)) {
        // Format the entry (e.g., "Name: Message")
        $entry = "Name: $name\nMessage: $message\n\n";
        
        // Append the new entry to the guestbook.txt file
        file_put_contents('guestbook.txt', $entry, FILE_APPEND);
        
        // Redirect back to the guestbook page after submission
        header('Location: guestbook.html');
        exit();
    } else {
        echo "Please fill in both fields.";
    }
}
?>