<?php

session_start();

$_SESSION['username'] = "Rakib";
$_SESSION['favfruit'] = "Apple";

echo "We have saved your session";
