<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n = rand(1,10);
        $p = ($n%2==0) ? "Il numero $n è pari" : "Il numero $n è dispari";
        echo "<p>$p</p>"
    ?>
</body>
</html>