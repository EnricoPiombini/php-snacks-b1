<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che: 
name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e 
che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$name = key_exists('name', $_GET) ? trim($_GET['name']) : false;
$mail = key_exists('mail', $_GET) ? trim($_GET['mail']) : false;
$age = key_exists('age', $_GET) ? trim($_GET['age']) : false;

// Controllo che name superi i 3 caratteri
if(!$name){
    echo "name not found";
} else {
    $nameIsvalid = true;
    if(strlen($name) < 3){
        $nameIsvalid = false;
    }
  var_dump($nameIsvalid);
}