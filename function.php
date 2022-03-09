<?php

function marksadd($markarr)
{
    $sum = 0;
    foreach ($markarr as $value) {
        $sum += $value;
    }
    return $sum;
}

$rakib = [87, 78, 82, 90, 79];
$rakibtotal = marksadd($rakib);

$sohan = [91, 24, 78, 89, 92];
$sohantotal = marksadd($sohan);

echo "total mark is $rakibtotal <br>";
echo "total mark is $sohantotal";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function In PHP</title>
</head>

<body>

</body>

</html>