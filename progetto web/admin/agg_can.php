<?php
      if(isset($_POST['aggiorna'])){
        $id = filter_input(INPUT_POST, 'id');
        $nome = filter_input(INPUT_POST, 'nome');
        $cognome = filter_input(INPUT_POST, 'cognome');
        $tavolo = filter_input(INPUT_POST, 'tavolo');
        $tavolo1 = filter_input(INPUT_POST, 'tavolo1');
        $tavolo2 = filter_input(INPUT_POST, 'tavolo2');
        $tavolo3 = filter_input(INPUT_POST, 'tavolo3');
        $persone = filter_input(INPUT_POST, 'persone');
        $telefono = filter_input(INPUT_POST, 'telefono');
        $data = filter_input(INPUT_POST, 'data');
        $ora = filter_input(INPUT_POST, 'ora');

        $host = "localhost";
        $usarneme="nicoasciutti19";
        $password="";
        $nomedb="my_nicoasciutti19";
        $miodb= new mysqli($host,$usarneme,$password,$nomedb);

        if ($miodb->connect_errno>0) {
                die('Errore di connessione (' . $miodb->connect_errno . ')' . $miodb->connect_error);
        }


        if($nome!=NULL){
            $sql = "UPDATE Prenotazioni SET nome='$nome' WHERE id = '$id'";
        $miodb->query($sql);
        }
        if($cognome!=NULL){
            $sql = "UPDATE Prenotazioni SET cognome='$cognome' WHERE id = '$id'";
        $miodb->query($sql);
        }
        if($tavolo!='seleziona il tavolo'){
            $sql = "UPDATE Prenotazioni SET tavolo='$tavolo' WHERE id = '$id'";
        $miodb->query($sql);
        }
        if($tavolo1!='seleziona il tavolo'){
            $sql = "UPDATE Prenotazioni SET tavolo1='$tavolo1' WHERE id = '$id'";
        $miodb->query($sql);
        }
        if($tavolo2!='seleziona il tavolo'){
            $sql = "UPDATE Prenotazioni SET tavolo2='$tavolo2' WHERE id = '$id'";
        $miodb->query($sql);
        }
        if($tavolo3!='seleziona il tavolo'){
            $sql = "UPDATE Prenotazioni SET tavolo3='$tavolo3' WHERE id = '$id'";
        $miodb->query($sql);
        }
        if($persone!=NULL){
            $sql = "UPDATE Prenotazioni SET persone='$persone' WHERE id = '$id'";
        $miodb->query($sql);
        }
        if($telefono!=NULL){
            $sql = "UPDATE Prenotazioni SET telefono='$telefono' WHERE id = '$id'";
        $miodb->query($sql);
        }
        if($data!=NULL){
            $sql = "UPDATE Prenotazioni SET data='$data' WHERE id = '$id'";
        $miodb->query($sql);
        }
        if($ora!=NULL){
            $sql = "UPDATE Prenotazioni SET ora='$ora' WHERE id = '$id'";
        $miodb->query($sql);
        }
        $miodb->close();

         
        
        header("Refresh:0; url=http:/admin.php");
      }elseif(isset($_POST['elimina'])){
        $id = filter_input(INPUT_POST, 'id');
        $host = "localhost";
        $usarneme="nicoasciutti19";
        $password="";
        $nomedb="my_nicoasciutti19";
        $miodb= new mysqli($host,$usarneme,$password,$nomedb);
        if ($miodb->connect_errno>0) {
                die('Errore di connessione (' . $miodb->connect_errno . ')' . $miodb->connect_error);
        }
        $sql = "DELETE FROM Prenotazioni WHERE id='$id'";
        $miodb->query($sql);
        $miodb->close();
        header("Refresh:0; url=http:/admin.php");
      }elseif(isset($_POST['aggiungi'])){
        $id = filter_input(INPUT_POST, 'id');
        $nome = filter_input(INPUT_POST, 'nome');
        $cognome = filter_input(INPUT_POST, 'cognome');
        $tavolo = filter_input(INPUT_POST, 'tavolo');
        $tavolo1 = filter_input(INPUT_POST, 'tavolo1');
        $tavolo2 = filter_input(INPUT_POST, 'tavolo2');
        $tavolo3 = filter_input(INPUT_POST, 'tavolo3');
        $persone = filter_input(INPUT_POST, 'persone');
        $telefono = filter_input(INPUT_POST, 'telefono');
        $data = filter_input(INPUT_POST, 'data');
        $ora = filter_input(INPUT_POST, 'ora');
        $host = "localhost";
        $usarneme="nicoasciutti19";
        $password="";
        $nomedb="my_nicoasciutti19";
        $miodb= new mysqli($host,$usarneme,$password,$nomedb);

        if ($miodb->connect_errno>0) {
                die('Errore di connessione (' . $miodb->connect_errno . ')' . $miodb->connect_error);
            }
        if($tavolo3!='seleziona il tavolo'){
           $sql = "Insert INTO Prenotazioni (Id,Nome,Cognome,Tavolo,Tavolo1,Tavolo2,Tavolo3,Persone,Telefono,Data,Ora) values ('$id','$nome','$cognome','$tavolo','$tavolo1','$tavolo2','$tavolo3','$persone','$telefono','$data','$ora')";
        $miodb->query($sql);  
        }elseif($tavolo2!='seleziona il tavolo'){
            $sql = "Insert INTO Prenotazioni (Id,Nome,Cognome,Tavolo,Tavolo1,Tavolo2,Persone,Telefono,Data,Ora) values ('$id','$nome','$cognome','$tavolo','$tavolo1','$tavolo2','$persone','$telefono','$data','$ora')";
         $miodb->query($sql);  
         }elseif($tavolo1!='seleziona il tavolo'){
            $sql = "Insert INTO Prenotazioni (Id,Nome,Cognome,Tavolo,Tavolo1,Persone,Telefono,Data,Ora) values ('$id','$nome','$cognome','$tavolo','$tavolo1','$persone','$telefono','$data','$ora')";
         $miodb->query($sql);  
         }elseif($tavolo!='seleziona il tavolo'){
            $sql = "Insert INTO Prenotazioni (Id,Nome,Cognome,Tavolo,Persone,Telefono,Data,Ora) values ('$id','$nome','$cognome','$tavolo','$persone','$telefono','$data','$ora')";
         $miodb->query($sql);  
         }
        
        $miodb->close();
        header("Refresh:0; url=http:/admin.php");
      }
      
      ?>