<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie-3</title>
</head>
<body>
    <?php
    $num='54321';
    $sum=0;
    for($i=0;$i<strlen($num);$i++){
        $sum+=$num[$i];
    }
    var_dump($sum);

    echo "Результат: ", $sum;
    ?>
</body>
</html>