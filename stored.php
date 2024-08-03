<?php
$file = 'comments.txt';

// Menangani pengiriman komentar
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment = $_POST['comment'];
    file_put_contents($file, $comment . PHP_EOL, FILE_APPEND);
}

// Membaca komentar dari file
$comments = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Stored XSS Lab</title>
</head>

<body>
    <h1>Submit a Comment</h1>
    <form method="POST">
        <textarea name="comment" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Submit">
    </form>

    <h2>Comments</h2>
    <ul>
        <?php foreach ($comments as $comment) : ?>
            <li><?php echo $comment; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
<nav>
    <a href="index.html">Back to Home</a>
</nav>

</html>