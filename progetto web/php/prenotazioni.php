<?php

$ora = filter_input(INPUT_POST, 'ora');
$tavolo = filter_input(INPUT_POST, 'tavolo');
$tavolo1 = filter_input(INPUT_POST, 'tavolo1');
$tavolo2 = filter_input(INPUT_POST, 'tavolo2');
$tavolo3 = filter_input(INPUT_POST, 'tavolo3');
$persone = filter_input(INPUT_POST, 'persone');
$nome = filter_input(INPUT_POST, 'nome');
$cognome = filter_input(INPUT_POST, 'cognome');
$telefono = filter_input(INPUT_POST, 'telefono');
$myfile = fopen("data.txt", "r") or die("Unable to open file!");
$data=fgets($myfile);
fclose($myfile);
//echo "<script> alert('$data')</script>";
if($ora=='seleziona un orario'){
    echo "<script> alert('Non hai selezionato un orario')</script>";
    header("Refresh:0; url=./mappa.php");
}elseif($tavolo=='seleziona il tavolo'){
    echo "<script> alert('Non hai selezionato il tavolo')</script>";
    header("Refresh:0; url=./mappa.php");
}elseif($tavolo1=='seleziona il tavolo'){
    echo "<script> alert('Non hai selezionato il 2° tavolo')</script>";
    header("Refresh:0; url=./mappa.php");
}elseif($tavolo2=='seleziona il tavolo'){
    echo "<script> alert('Non hai selezionato il 3° tavolo')</script>";
    header("Refresh:0; url=./mappa.php");
}elseif($tavolo3=='seleziona il tavolo'){
    echo "<script> alert('Non hai selezionato il 4° tavolo')</script>";
    header("Refresh:0; url=./mappa.php");
}else {
    $host = "localhost";
    $usarneme="nicoasciutti19";
    $password="";
    $nomedb="my_nicoasciutti19";
    $miodb= new mysqli($host,$usarneme,$password,$nomedb);

    if ($miodb->connect_errno>0) {
            die('Errore di connessione (' . $miodb->connect_errno . ')' . $miodb->connect_error);
    }
    
    $sql = "SELECT Tavolo,Tavolo1,Tavolo2,Tavolo2 FROM Prenotazioni WHERE data='$data' AND tavolo='$tavolo' OR tavolo1='$tavolo1' OR tavolo2='$tavolo2' OR tavolo3='$tavolo3' ";
    $result = $miodb->query($sql);
    if ($result->num_rows > 0) {
        echo "<script> alert('hai selezionato un tavolo prenotato')</script>";
        header("Refresh:0; url=/php/mappa.php");
    }else{
    if($persone<=4){
      $sql = "Insert INTO Prenotazioni (Nome,Cognome,Tavolo,Persone,Telefono,Data,Ora) values ('$nome','$cognome','$tavolo','$persone','$telefono','$data','$ora')";
    $miodb->query($sql);  
    }elseif($persone>4 && $persone<=8){
        $sql = "Insert INTO Prenotazioni (Nome,Cognome,Tavolo,Tavolo1,Persone,Telefono,Data,Ora) values ('$nome','$cognome','$tavolo','$tavolo1','$persone','$telefono','$data','$ora')";
        $miodb->query($sql);
    }elseif($persone>8 && $persone<=12){
        $sql = "Insert INTO Prenotazioni (Nome,Cognome,Tavolo,Tavolo1,Tavolo2,Persone,Telefono,Data,Ora) values ('$nome','$cognome','$tavolo','$tavolo1','$tavolo2','$persone','$telefono','$data','$ora')";
        $miodb->query($sql);
    }elseif($persone>12 && $persone<=16){
        $sql = "Insert INTO Prenotazioni (Nome,Cognome,Tavolo,Tavolo1,Tavolo2,Tavolo3,Persone,Telefono,Data,Ora) values ('$nome','$cognome','$tavolo','$tavolo1','$tavolo2','$tavolo3','$persone','$telefono','$data','$ora')";
        $miodb->query($sql);
    }
    
    $miodb->close();
    echo "<script> alert('Prenotazione effettuata')</script>";
    header("Refresh:0; url=http:/index.html");  
    }
    
}
 

?>