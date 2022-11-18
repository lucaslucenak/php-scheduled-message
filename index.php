<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include("bootstrap/bootstrapCss.php")?>
</head>
<body>

<?php
    $dayOfWeek = date("w");

    switch ($dayOfWeek) {
        case 1:
            echo "<h1>It is Monday!</h1>";
            break;
        case 2:
            echo "<h1>It is Tuesday!</h1>";
            break;
        case 3:
            echo "<h1>It is Wednesday!</h1>";
            break;
        case 4:
            echo "<h1>It is Thursday!</h1>";
            break;
        case 5:
            echo "<h1>It is Friday!</h1>";
            break;
        case 6:
            echo "<h1>It is Saturday!</h1>";
            break;
        case 7:
            echo "<h1>It is Sunday!</h1>";
            break;

    }

?>
<?php include("bootstrap/bootstrapScripts.php")?>
</body>
</html>