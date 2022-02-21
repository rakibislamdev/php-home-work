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
