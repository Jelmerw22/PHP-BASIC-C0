<?php  
    $leeftijd = 17;
?>
<html>
<head>
</head>
<body>

    <div id="leeftijdChecker">
        <?php
            if($leeftijd < 18 ){
                echo "<h2>Hey, je moet 18+ zijn om deze pagina te bezoeken!</h2>";
            }
        ?>
    </div>

</body>
</html>