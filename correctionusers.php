<?php


$name = 'Jon'; // string
$age = 54; // integer
$bool = true; //bool
$users = ['Maurice', 'Georgette', 'Marc', 'Odile']; // array
$null = null;
//$obj = {};


// while / for / foreach
// $a = 0;
// while ($a <= 10) {
//     echo $a;
//     echo '<br>';
//     $a++;
// }


// for ($i=0; $i < count($users); $i++) { 
//     echo "<p>$users[$i]</p>";
// }


$users = [
    ['Paulette', 'rouge', 85],
    ['Martin', 'bleu', 12],
    ['Octarine', 'orange', 30]
];

foreach ($users as $user) {
    var_dump($user);
}

?>


// users.php

<?php

// Un nom, une couleur préférée, un âge
$users = [
    [
        'age' => 85,
        'color' => 'rouge', 
        'name' => 'Paulette', 
    ],
    [
        'color' => 'bleu', 
        'name' => 'Martin', 
        'age' => 12,
    ],
    
];



?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>
</head>
<body>
    <table>
        <tr>
            <th>Nom</th>
            <th>Couleur</th>
            <th>Age</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['name'] ?></td>
                <td><?= $user['color'] ?></td>
                <td><?= $user['age'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>    
</body>
</html>