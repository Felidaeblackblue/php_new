<?php


$users = [
    ['Paul', 'bleu', 27],
    ['Camille', 'rouge', 38],
    ['Virgil', 'jaune', 42]
];

//var_dump($users);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        <tr>
             <td>
             <?php
        foreach ($users as $key=> $user) {  
  echo "<p>$user[0]</p>"; 
}
?> 
             </td>

             <td>
<?php
        foreach ($users as $key=> $user) {  
  echo "<p>$user[1]</p>";
  
}
?>
             </td>
             <td>
             <?php
        foreach ($users as $key=> $user) {  
  echo "<p>$user[2]</p>";
  
}
?></td>
        </tr>

    </table>
</body>
</html>