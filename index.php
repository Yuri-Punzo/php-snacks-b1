<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php
$partite = [
    [
        "home_team" => "squadra1",
        "guest_team" => "squadra2",
        "home_team_points" => "60",
        "guest_team_points" => "72"
    ],
    [
        "home_team" => "squadra3",
        "guest_team" => "squadra4",
        "home_team_points" => "94",
        "guest_team_points" => "97"
    ],
    [
        "home_team" => "squadra5",
        "guest_team" => "squadra6",
        "home_team_points" => "80",
        "guest_team_points" => "86"
    ],
];

var_dump($partite);

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
        <?php foreach ($partite as $partita) : ?>
            <li>
                <?php
                echo $partita["home_team"] . " - " . $partita["guest_team"] . " | " . $partita["home_team_points"] . " - " . $partita["guest_team_points"]
                ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>