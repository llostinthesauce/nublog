<?php
$counter_file = "counter.txt"; // Ensure this is the correct file path

if (!file_exists($counter_file)) {
    file_put_contents($counter_file, "1");
    $count = 1;
} else {
    $count = (int)file_get_contents($counter_file);
    $count++;
    file_put_contents($counter_file, $count);
}
?>

<div class="visitor-counter">
    <span>you are visitor number:</span> 
    <span class="blinking"><strong><?php echo number_format($count); ?></strong></span>
</div>