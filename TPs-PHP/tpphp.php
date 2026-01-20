<?php
$nom="Imad";
$age=20;
echo "Nom: ". $nom . ",Age: ". $age;

$nom1="Hamza";
$nom2="Mouad";
$age1=20;
$age2=-3;
if ($age1<$age2){
    echo $nom1 ."est plus petit que " . $nom2;
}
else if ($age1>$age2){
    echo $nom1 ."est plus grand que " . $nom2;
}
else{
    echo "ils ont le meme age";
}
?>