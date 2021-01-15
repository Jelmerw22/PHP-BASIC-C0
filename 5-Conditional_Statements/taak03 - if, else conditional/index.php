<!DOCTYPE html>
<html>
<body>

<?php
$test1 = 3;
$test2 = 6;
if($test1 == $test2){
    echo "Gelijk";
} else {
    echo "Ongelijk";
}

echo "<br>";

if($test1 != $test2){
    echo "Nogsteeds ongelijk!";
} else {
    echo "Gelijk?";
}

echo "<br>";

if($test1 === $test2){
    echo "Identiek!";
} else {
    echo "Niet identiek...";
}

echo "<br>";

if($test1 > $test2){
    echo "Test1 is GROTER dan test2!";
} else {
    echo "Test1 is KLEINER dan test2!";
}

echo "<br>";

if($test1 < $test2){
    echo "Test1 is nogsteeds KLEINER dan test2...";
} else {
    echo "Test1 is GROTER dan test2!";
}

echo "<br>";

if($test1 >= $test2){
    echo "Test1 is GROTER of GELIJK aan test2!";
} else {
    echo "Test1 is niet GROTER of GELIJK aan test2!";
}

echo "<br>";

if($test1 <= $test2){
    echo "Test2 is nog steeds GROTER dan test1...";
} else {
    echo "Test1 is ineens groter dan test2?";
}

echo "<br>";
?>

</body>
</html> 