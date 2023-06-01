<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
</head>
<body>
<h1>Our Books</h1
<ul>
    <?php
    foreach ($staff as $data) {
        echo '<li>' . 'Name: ' . $data->getFirstName() . ', ' . $data->getLastName() . ', Job title: ' . $data->getJobTitle() . '</li>';
    }
    ?>
</ul>
</body>
</html>