<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP 2c</title>
    <style>
        .kotak {
            display: inline-block;
            border: 1px solid black;
            background-color: darkorange;
            line-height: 25px;
            width: 25px;
            height: 25px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php 
        for($i=10; $i>=1; $i--){
            for($x=1; $x<=$i; $x++){
                echo "<div class='kotak'>$x</div>";
            }
            echo "<br>";
        }
    ?>
</body>
</html>