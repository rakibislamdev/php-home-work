<?php

$age = [
    "Sohan" => 20,
    "Iqbal" => 22,
    "Zony" => 24,
    "Sakib" => 19

];

echo "foreach loop: <br>";

foreach ($age as $value) {
    echo $value . "<br>";
}


echo "foreach loop with key and value: <br>";

foreach ($age as $key => $value) {

    echo "$key = $value <br>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOREACH LOOP</title>
</head>

<body>

</body>

</html>