<!DOCTYPE html>
<html>
    <head>
    <meta charset = "utf-8">
    <title>Tabella prenotazioni</title>
    </head>
    <body>
        <?php
  		$host = "localhost";
        $usarneme="nicoasciutti19";
        $password="";
        $nomedb="my_nicoasciutti19";


        $con = new mysqli($host, $userneme, $password, $nomedb);

        if ($con->connect_error) {
            die("Connessione fallita: " . $con->connect_error);
        }

        $sql = "SELECT ID,Nome, Cognome, Tavolo, Tavolo1, Tavolo2, Tavolo3, Persone, Telefono, Data, Ora FROM Prenotazioni";
        $result = $con->query($sql);

        
        if ($result->num_rows > 0) {
        echo"<table width='50%' border ='2'>";
                echo"<tr>";
                echo "<td>ID</td>";
                echo "<td>Nome</td>";
                echo "<td>Cognome</td>";
                echo "<td>Tavolo</td>";
                echo "<td>Tavolo1</td>";
                echo "<td>Tavolo2</td>";
                echo "<td>Tavolo3</td>";
                echo "<td>Persone</td>";
                echo "<td>Telefono</td>";
                echo "<td>Data</td>";
                echo "<td>Ora</td>";
                echo"</tr>";
            while($row = $result->fetch_assoc()) {

                       echo "<tr>";
                             echo"<th>".$row["ID"]."</th>";
                             echo"<th>".$row["Nome"]."</th>"; 
                             echo"<th>".$row["Cognome"]."</th>"; 
                             echo"<th>".$row["Tavolo"]."</th>";
                             echo"<th>".$row["Tavolo1"]."</th>";
                             echo"<th>".$row["Tavolo2"]."</th>";
                             echo"<th>".$row["Tavolo3"]."</th>";
                             echo"<th>".$row["Persone"]."</th>";
                             echo"<th>".$row["Telefono"]."</th>";
                             echo"<th>".$row["Data"]."</th>";
                             echo"<th>".$row["Ora"]."</th>";  
                       	echo"</tr>";

            }
            echo' <th> <form action="agg_can.php" method="POST">
                    <div class="field-wrap">
                    <label>
                        ID:
                    </label>
                    <input type="text" name= "id" required autocomplete="off"/>
                    </div>
                    <div class="field-wrap">
                    <div class="field-wrap">
                    <label>
                        Nome:
                    </label>
                    <input type="nome" name= "nome"  autocomplete="off"/>
                    </div>
                    <div class="field-wrap">
                    <label>
                        Cognome:
                    </label>
                    <input type="cognome" name= "cognome" autocomplete="off"/>
                    </div>
                    <div class="field-wrap">
                    <label>
                        Tavolo:
                    </label>
                    <select name="tavolo">
                    <option>seleziona il tavolo</option>
                    <option>Tavolo 1</option>
                    <option>Tavolo 2</option>
                    <option>Tavolo 3</option>
                    <option>Tavolo 4</option>
                    <option>Tavolo 5</option>
                    <option>Tavolo 6</option>
                    <option>Tavolo 7</option>
                    <option>Tavolo 8</option>
                    <option>Tavolo 9</option>
                    <option>Tavolo 10</option>
                    <option>Tavolo 11</option>
                    <option>Tavolo 12</option>
                    </select>
                    </div>
                    <div class="field-wrap">
                    <label>
                        Tavolo1:
                    </label>
                    <select name="tavolo1">
                    <option>seleziona il tavolo</option>
                    <option>Tavolo 1</option>
                    <option>Tavolo 2</option>
                    <option>Tavolo 3</option>
                    <option>Tavolo 4</option>
                    <option>Tavolo 5</option>
                    <option>Tavolo 6</option>
                    <option>Tavolo 7</option>
                    <option>Tavolo 8</option>
                    <option>Tavolo 9</option>
                    <option>Tavolo 10</option>
                    <option>Tavolo 11</option>
                    <option>Tavolo 12</option>
                    </select>
                    </div>
                    <div class="field-wrap">
                    <label>
                        Tavolo2:
                    </label>
                    <select name="tavolo2">
                    <option>seleziona il tavolo</option>
                    <option>Tavolo 1</option>
                    <option>Tavolo 2</option>
                    <option>Tavolo 3</option>
                    <option>Tavolo 4</option>
                    <option>Tavolo 5</option>
                    <option>Tavolo 6</option>
                    <option>Tavolo 7</option>
                    <option>Tavolo 8</option>
                    <option>Tavolo 9</option>
                    <option>Tavolo 10</option>
                    <option>Tavolo 11</option>
                    <option>Tavolo 12</option>
                    </select>
                    </div>
                    <div class="field-wrap">
                    <label>
                        Tavolo3:
                    </label>
                    <select name="tavolo3">
                    <option>seleziona il tavolo</option>
                    <option>Tavolo 1</option>
                    <option>Tavolo 2</option>
                    <option>Tavolo 3</option>
                    <option>Tavolo 4</option>
                    <option>Tavolo 5</option>
                    <option>Tavolo 6</option>
                    <option>Tavolo 7</option>
                    <option>Tavolo 8</option>
                    <option>Tavolo 9</option>
                    <option>Tavolo 10</option>
                    <option>Tavolo 11</option>
                    <option>Tavolo 12</option>
                    </select>
                    </div>
                    <div class="field-wrap">
                    <label>
                        Persone:
                    </label>
                    <select name="persone" class="persone">
                          <option>Seleziona le persone</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                          <option>13</option>
                          <option>14</option>
                          <option>15</option>
                          <option>16</option>
                    </select>
                    </div>
                    <div class="field-wrap">
                    <label>
                        Telefono:
                    </label>
                    <input type="telefono" name= "telefono"  autocomplete="off"/>
                    </div>
                    <div class="field-wrap">
                    <label>
                        Data:
                    </label>
                    <div class="form-group">
                        <div class="input-group date" id="datepicker">
                          <input class="form-control" placeholder="YYYY-MM-DD" name="data"/>
                          <span class="input-group-append input-group-addon">
                            <span class="input-group-text">
                              <i class="fa fa-calendar"></i>
                            </span>
                          </span>
                        </div>
                    </div>
                    <div class="field-wrap">
                    <label>
                    Ora:
                    </label>
                    <select name="ora" >
                    <option>seleziona un orario</option>
                    <option>12.00</option>
                    <option>12.30</option>
                    <option>13.00</option>
                    <option>13.30</option>
                    <option>14.00</option>
                    <option>19.00</option>
                    <option>19.30</option>
                    <option>20.00</option>
                    <option>20.30</option>
                    <option>21.00</option>
                    <option>21.30</option>
                    <option>22.00</option>
                    <option>22.30</option>
                    <option>23.00</option>
                </select>
                </div>
                    <button type="submit" name="aggiungi">aggiungi</button>
                    <button type="submit" name="aggiorna">aggiorna</button>
                    <button type="submit" name="elimina">elimina</button>
                    </form></th>';
        }else {
            echo" Non hai nessuna prenotazione";
        }

        $con->close();
        ?>
    
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
     <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/eonasdan-bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js'></script>
      <script  src="js/script.js"></script>
    </body>
</html>