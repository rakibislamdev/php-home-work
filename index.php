<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
// find the large number between 4 number using by ternary
    $x = 10;
    $y = 8;
    $z = 14;
    $p = 9;

    // if($x>$y && $x>$z && $x>$p){
    //     echo $x ."is largest number";
    // } elseif ($y>$x && $y>$z && $y>$p){
    //     echo $x ."is largest number";
    // } elseif($z>$x && $z>$y && $z>$p){
    //     echo $x ."is largest number";
    // } else{
    //     echo $p . "is largest number";
    // }
     $larnum = $x>$y && $x>$z && $x>$p? "$x largest number" : ($y>$x && $y>$z && $y>$p? "$y largest number": ($z>$x && $z>$y && $z>$p ? "$z largest number" : "$p largest number"));

     echo $larnum;
     echo "<br>";
     ?>
     <?php

     for($i=1;$i<=5;$i++){
        for($j=1;$j<=$i;$j++){
          echo " * ";
        }
     echo '</br>';
       }



?>


    <div style="width: 400px; text-align:center;">

        <?php
for ($i=0; $i <= 5; $i++) { 
    for ($a=0; $a <= $i; $a++) { 
        echo "*";
    }
    echo"<br>";
}

?>

<br>
<br>

<?php
 for($i=1;$i<=5;$i++){
    for($j=5-$i;$j>=0;$j--){
        echo " * ";
    }
     echo '</br>';
    }
?>

</div>
</body>
</html>