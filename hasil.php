<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>
<body>

<?php

$file = "data.txt";

    $fp = fopen($file,"r");

    while (!feof($fp))

    {

        $baca = fgets($fp,100);

        print("$baca");

    }

    fclose($fp);

?>
    
</body>
</html>