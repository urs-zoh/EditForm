<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $name = $_GET['name'];
    echo "<p>We appriciate your values, $name, and we'll be glad to get in touch with you<p>";
    ?>
    <input type="button" value="Edit your name" onclick="history.back()">
</body>

</html>