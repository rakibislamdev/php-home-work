<?php
// Start the session and get the data
session_start();
if (isset($_SESSION['username'])) {
    echo "Welcome " . $_SESSION['username'];
    echo "<br> Your favorite fruit is " . $_SESSION['favfruit'];
    echo "<br>";
} else {
    echo "Please login to continue";
}

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW SESSION</title>
</head>

<body>

</body>

</html>