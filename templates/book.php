<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book</title>
</head>
<body>
<h1>A Good Book</h1
<ul>
    <?php
        echo '<li>' . $book->getTitle() . ' - ' . $book->getAuthor() . '</li>';
    ?>
</ul>
</body>
</html>