<?php

$nome = filter_input(INPUT_POST, 'nome');
$cognome = filter_input(INPUT_POST, 'cognome');
$email = filter_input(INPUT_POST, 'email');
$psw = filter_input(INPUT_POST, 'password');
$psw = md5($psw);
	$host = "localhost";
    $usarneme="nicoasciutti19";
    $password="";
    $nomedb="my_nicoasciutti19";
    $miodb= new mysqli($host,$usarneme,$password,$nomedb);

    if ($miodb->connect_errno>0) {
            die('Errore di connessione (' . $miodb->connect_errno . ')' . $miodb->connect_error);
        }
    $sql = "Insert INTO Login (Nome,Cognome,Email,Password) values ('$nome','$cognome','$email','$psw')";
    $miodb->query($sql); 
    $miodb->close();
    header("Refresh:0; url=http:/index.html");
	
?>
