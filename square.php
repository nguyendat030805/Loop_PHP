<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .square{
        background-color: aqua;
        width: 100px;
        height: 100px;
        margin: 20px;
        display: inline-block;
        border: 2px solid black;
    }
</style>
<body>
    <div class="square"></div>
    <?php
        for ($i = 0; $i < 10; $i++) {
            for ($j = 0; $j < 5; $j++) {
                echo "<div class='square'></div>";
            }
        }
    ?>
</body>
</html>