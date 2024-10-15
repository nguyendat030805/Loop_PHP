<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $chan = 0;
        $le = 0;
        for ($i = 0; $i < 5; $i++) {
            if ($i %2==0){
                $chan+=$i;
            }
            else{
                $le+=$i;
            }
        }
        echo"Tổng chẵn là ".$chan;
        echo"Tổng lẻ là ".$le;
    ?>
</body>
</html>