</main>

<?php
$excluded_pages = [
    '/index.php',
    '/about.php',
    '/guestbook.php',
    '/blog.php',
    '/blog/imagegallery.php'
];

$current_path = $_SERVER['SCRIPT_NAME'];

if (!in_array($current_path, $excluded_pages)) {
    echo '<p><a href="javascript:history.back()" class="link">← back to previous page</a></p>';
}
?>

<footer>      
    &copy; 2025 nuBlog | <a href="mailto:badcovers317@gmail.com">contact</a>
</footer>

</body>
</html>