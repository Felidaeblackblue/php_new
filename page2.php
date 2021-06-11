<?php


$users = [
    [
        'age' => 100,
        'color' => 'rouge', 
        'name' => 'Fanny', 
    ],
    [
        'color' => 'bleu', 
        'name' => 'Virgil', 
        'age' => 15,
    ],
    [
        'color' => 'vert', 
        'name' => 'Séverine', 
        'age' => 42,
    ], 
];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Utilisateurs</title>
</head>
<body>
<header>
        <nav>
            <div>
                <ul class="liste">
                    <li></li><a href="index.html">Accueil</a></li>
                    <li><a href="">Boutique</a></li>
                    <li><a href="page2.php">Liste clients</a></li>
                    <li><a href="">A propos</a></li>
                </ul>
            </div>

        </nav>
</header>
<section>
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
</section>

<ul>
    <li>blabla</li>
    <li>fri</li>
    <li>blabla</li>
</ul>
</body>
</html>