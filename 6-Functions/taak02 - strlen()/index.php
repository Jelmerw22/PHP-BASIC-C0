<!DOCTYPE html>
<html>
<body>
<?php

function mijnNaamIsGroot(){
    $voornaam = 'Jelmer';
    $achternaam = 'Wiersma';
    $gehelenaam = strtoupper('Mijn naam is' . " " .  $voornaam . " " .  $achternaam);
    echo $gehelenaam;
}

mijnNaamIsGroot();

?>

</body>
</html> 