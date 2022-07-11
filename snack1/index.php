<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
$nbaMatches = [
    [
        "casa" => "Cleveland",
        "ospite" => "GoldenState",
        "punticasa" => 100,
        "puntiospite" => 98,
    ],
    [
        "casa" => "Portland",
        "ospite" => "Lakers",
        "punticasa" => 100,
        "puntiospite" => 98,
    ],
    [
        "casa" => "Miami",
        "ospite" => "Boston",
        "punticasa" => 100,
        "puntiospite" => 98,
    ],
    [
        "casa" => "Chicago",
        "ospite" => "Knicks",
        "punticasa" => 100,
        "puntiospite" => 98,
    ]


]

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<ul>
        <?php for($i = 0; $i < count($nbaMatches); $i++) { 
             $nbaMatch = $nbaMatches[$i]; ?>
           
            <li>
                <?php echo $nbaMatch['casa'] ?> - 
                <?php echo $nbaMatch['ospite'] ?> | 
                <?php echo $nbaMatch['punticasa'] ?> - 
                <?php echo $nbaMatch['puntiospite'] ?>
            </li>
        <?php } ?>     
    </ul>

</body>

</html>