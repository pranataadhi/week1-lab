<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reflected XSS</title>
</head>
<body>
    <h1>Reflected XSS Lab</h1>
    <form action="reflected.php" method="get">
        <label for="query">Search:</label>
        <input type="text" id="query" name="query">
        <button type="submit">Search</button>
    </form>

    <div id="results">
        <?php
        if (isset($_GET['query'])) {
            $query = $_GET['query'];
            echo $query;
        } else {
            echo 'Search not found';
        }
        ?>
    </div>

    <nav>
        <a href="index.html">Back to Home</a>
    </nav>
</body>
</html>
