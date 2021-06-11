
<?php
 
$name = "John"; // Commentaire
$email = "jon@yahoo.com";
$age = 12;
$users = ['lulu','Marco', 'beber','Juju'];


/*echo $name;
echo "<br>";
echo "mon nom est"." ".$name;

$a = 0;
while ($a <= 10){
  echo $a;
  echo '<br>'
  $a++;
}

for ($i=0; $i < count($users) ; $i++) { 
 echo "<p>$users[$i]</p>"
}
*/
foreach ($users as $key => $user) {  //pour chaque élément users qu'on va appeler user je vais recupérer la clé(l'index)
  echo "<p>$user</p>"; //on va faire ça
}