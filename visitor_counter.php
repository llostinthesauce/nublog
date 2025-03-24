<?php
// Path to the counter file
$counter_file = "counter.txt";

// Check if the counter file exists, if not, create it and set the initial value to 0
if (!file_exists($counter_file)) {
    file_put_contents($counter_file, "0");
}

// Read the current count
$count = (int)file_get_contents($counter_file);

// Increment the count
$count++;

// Write the updated count back to the file
file_put_contents($counter_file, $count);

// Display the visitor count
echo "visitor count: " . $count;
?>
