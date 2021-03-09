<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
<style type="text/css">
body{
    background: #2abbeb;
}
.ristorante button{
    width: 100px;
    height: 100px;
    margin: 5%;
  }
  .cta {
    padding-top: 5rem;
    padding-bottom: 5rem;
    background-color: #2abbeb;
  }
  
  .cta .cta-inner {
    position: relative;
    padding: 3rem;
    margin: 0.5rem;
    background-color: rgba(255, 255, 255, 0.85);
  }
  
  .cta .cta-inner:before {
    border-radius: 0.5rem;
    content: '';
    position: absolute;
    top: -0.5rem;
    bottom: -0.5rem;
    left: -0.5rem;
    right: -0.5rem;
    border: 0.25rem solid rgba(255, 255, 255, 0.85);
    z-index: -1;
  }
  .field-wrap {
  position: relative;
  margin-bottom: 40px;
}
.form {
  padding: 40px;
  margin: 40px auto;
  border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}
  </style>
</head>
<body>
<?php
$date = filter_input(INPUT_POST, 'data');
if($date==NULL){
    $myfile = fopen("data.txt", "r") or die("Unable to open file!");
$date=fgets($myfile);
fclose($myfile);
}
$host = "localhost";
$usarneme="nicoasciutti19";
$password="";
$nomedb="my_nicoasciutti19";
// Create connection
$conn = new mysqli($host, $username, $password, $nomedb);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
$persone = filter_input(INPUT_POST, 'persone');
if($persone=='Seleziona le persone'){
    echo "<script> alert('Non Hai selezionato in numero di persone')</script>";
    header("Refresh:0; url=../loggato.php");
}else{
echo"<div class=\"ristorante\">";
    echo"<div>";
        echo" <div class=\"col-lg-6 mx-auto\">";
            echo"<h1>Stanza 2</h1>";
            $sql = "SELECT Tavolo,Tavolo1,Tavolo2,Tavolo2 FROM Prenotazioni WHERE data='$date'AND tavolo='Tavolo 12' OR tavolo1='Tavolo 12' OR tavolo2='Tavolo 12' OR tavolo3='Tavolo 12' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { 
                echo"<button style=\"background-color: red\">Tavolo 12</button>";
            }
            }else{
                //entra se è occupato
                echo"<button style=\"background-color: green\">Tavolo 12</button>";
            }
            $sql = "SELECT Tavolo,Tavolo1,Tavolo2,Tavolo2 FROM Prenotazioni WHERE data='$date'AND tavolo='Tavolo 11' OR tavolo1='Tavolo 11' OR tavolo2='Tavolo 11' OR tavolo3='Tavolo 11' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { 
                echo"<button style=\"background-color: red\">Tavolo 11</button>";
            }
            }else{
                //entra se è occupato
                echo"<button style=\"background-color: green\">Tavolo 11</button>";
            }
            $sql = "SELECT Tavolo,Tavolo1,Tavolo2,Tavolo2 FROM Prenotazioni WHERE data='$date'AND tavolo='Tavolo 10' OR tavolo1='Tavolo 10' OR tavolo2='Tavolo 10' OR tavolo3='Tavolo 10' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { 
                echo"<button style=\"background-color: red\">Tavolo 10</button>";
            }
            }else{
                //entra se è occupato
                echo"<button style=\"background-color: green\">Tavolo 10</button>";
            }
            $sql = "SELECT Tavolo,Tavolo1,Tavolo2,Tavolo2 FROM Prenotazioni WHERE data='$date'AND tavolo='Tavolo 9' OR tavolo1='Tavolo 9' OR tavolo2='Tavolo 9' OR tavolo3='Tavolo 9' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { 
                echo"<button style=\"background-color: red\">Tavolo 9</button>";
            }
            }else{
                //entra se è occupato
                echo"<button style=\"background-color: green\">Tavolo 9</button>";
            }
            $sql = "SELECT Tavolo,Tavolo1,Tavolo2,Tavolo2 FROM Prenotazioni WHERE data='$date'AND tavolo='Tavolo 8' OR tavolo1='Tavolo 8' OR tavolo2='Tavolo 8' OR tavolo3='Tavolo 8' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { 
                echo"<button style=\"background-color: red\">Tavolo 8</button>";
            }
            }else{
                //entra se è occupato
                echo"<button style=\"background-color: green\">Tavolo 8</button>";
            }
            
            
        echo"</div>";
        echo"<div class=\"col-lg-6 mx-auto\">";
            echo"<h1>Stanza 1</h1>";
            $sql = "SELECT Tavolo,Tavolo1,Tavolo2,Tavolo2 FROM Prenotazioni WHERE data='$date'AND tavolo='Tavolo 7' OR tavolo1='Tavolo 7' OR tavolo2='Tavolo 7' OR tavolo3='Tavolo 7' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { 
                echo"<button style=\"background-color: red\">Tavolo 7</button>";
            }
            }else{
                //entra se è occupato
                echo"<button style=\"background-color: green\">Tavolo 7</button>";
            }
            $sql = "SELECT Tavolo,Tavolo1,Tavolo2,Tavolo2 FROM Prenotazioni WHERE data='$date'AND tavolo='Tavolo 6' OR tavolo1='Tavolo 6' OR tavolo2='Tavolo 6' OR tavolo3='Tavolo 6' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { 
                echo"<button style=\"background-color: red\">Tavolo 6</button>";
            }
            }else{
                //entra se è occupato
                echo"<button style=\"background-color: green\">Tavolo 6</button>";
            }
            $sql = "SELECT Tavolo,Tavolo1,Tavolo2,Tavolo2 FROM Prenotazioni WHERE data='$date'AND tavolo='Tavolo 5' OR tavolo1='Tavolo 5' OR tavolo2='Tavolo 5' OR tavolo3='Tavolo 5' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { 
                echo"<button style=\"background-color: red\">Tavolo 5</button>";
            }
            }else{
                //entra se è occupato
                echo"<button style=\"background-color: green\">Tavolo 5</button>";
            }
            $sql = "SELECT Tavolo,Tavolo1,Tavolo2,Tavolo2 FROM Prenotazioni WHERE data='$date'AND tavolo='Tavolo 4' OR tavolo1='Tavolo 4' OR tavolo2='Tavolo 4' OR tavolo3='Tavolo 4' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { 
                echo"<button style=\"background-color: red\">Tavolo 4</button>";
            }
            }else{
                //entra se è occupato
                echo"<button style=\"background-color: green\">Tavolo 4</button>";
            }
            $sql = "SELECT Tavolo,Tavolo1,Tavolo2,Tavolo2 FROM Prenotazioni WHERE data='$date'AND tavolo='Tavolo 3' OR tavolo1='Tavolo 3' OR tavolo2='Tavolo 3' OR tavolo3='Tavolo 3' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { 
                echo"<button style=\"background-color: red\">Tavolo 3</button>";
            }
            }else{
                //entra se è occupato
                echo"<button style=\"background-color: green\">Tavolo 3</button>";
            }
            $sql = "SELECT Tavolo,Tavolo1,Tavolo2,Tavolo2 FROM Prenotazioni WHERE data='$date'AND tavolo='Tavolo 2' OR tavolo1='Tavolo 2' OR tavolo2='Tavolo 2' OR tavolo3='Tavolo 2' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { 
                echo"<button style=\"background-color: red\">Tavolo 2</button>";
            }
            }else{
                //entra se è occupato
                echo"<button style=\"background-color: green\">Tavolo 2</button>";
            }
            $sql = "SELECT Tavolo,Tavolo1,Tavolo2,Tavolo2 FROM Prenotazioni WHERE data='$date'AND tavolo='Tavolo 1' OR tavolo1='Tavolo 1' OR tavolo2='Tavolo 1' OR tavolo3='Tavolo 1' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { 
                echo"<button style=\"background-color: red\">Tavolo 1</button>";
            }
            }else{
                //entra se è occupato
                echo"<button style=\"background-color: green\">Tavolo 1</button>";
            }
        echo"</div>";
    echo"</div>";
echo"</div>"; 
$conn->close();
}
?>
<div class="leggenda">
		<ul><button style="background-color: red" width:50px; >Occupato</button></ul>
		<ul><button style="background-color: green" width:50px; >Libero</button></ul>
</div>
<div class="form" >
    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
            <form action="prenotazioni.php" method="post">
                <div class="field-wrap">
                <label>
                    Nome <span class="req">*</span>
                </label>
                <input type="nome" name= "nome" required autocomplete="off"/>
                </div>
                <div class="field-wrap">
                <label>
                    Cognome<span class="req">*</span>
                </label>
                <input type="cognome" name= "cognome" required autocomplete="off"/>
                </div>
                <div class="field-wrap">
                <label>
                    Ora <span class="req">*</span>
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
                <div class="field-wrap">
                <label>
                    Telefono<span class="req">*</span>
                </label>
                <input type="telefono" name= "telefono" required autocomplete="off"/>
                </div>
                <div class="field-wrap">
                <span>I TAVOLI SONO DA 4 PERSONE</span><br>
                <?php
                $persone = filter_input(INPUT_POST, 'persone');
                if($persone<=4){
                    echo"<select name=\"tavolo\" >";
                    echo"<option>seleziona il tavolo</option>";
                    echo"<option>Tavolo 1</option>";
                    echo"<option>Tavolo 2</option>";
                    echo"<option>Tavolo 3</option>";
                    echo"<option>Tavolo 4</option>";
                    echo"<option>Tavolo 5</option>";
                    echo"<option>Tavolo 6</option>";
                    echo"<option>Tavolo 7</option>";
                    echo"<option>Tavolo 8</option>";
                    echo"<option>Tavolo 9</option>";
                    echo"<option>Tavolo 10</option>";
                    echo"<option>Tavolo 11</option>";
                    echo"<option>Tavolo 12</option>";
                echo"</select>";
                }elseif($persone>4 && $persone<=8){
                    echo"<select name=\"tavolo\" >";
                    echo"<option>seleziona il tavolo</option>";
                    echo"<option>Tavolo 1</option>";
                    echo"<option>Tavolo 2</option>";
                    echo"<option>Tavolo 3</option>";
                    echo"<option>Tavolo 4</option>";
                    echo"<option>Tavolo 5</option>";
                    echo"<option>Tavolo 6</option>";
                    echo"<option>Tavolo 7</option>";
                    echo"<option>Tavolo 8</option>";
                    echo"<option>Tavolo 9</option>";
                    echo"<option>Tavolo 10</option>";
                    echo"<option>Tavolo 11</option>";
                    echo"<option>Tavolo 12</option>";
                echo"</select>";
                echo"</br>";
                echo"<select name=\"tavolo1\" >";
                    echo"<option>seleziona il tavolo</option>";
                    echo"<option>Tavolo 1</option>";
                    echo"<option>Tavolo 2</option>";
                    echo"<option>Tavolo 3</option>";
                    echo"<option>Tavolo 4</option>";
                    echo"<option>Tavolo 5</option>";
                    echo"<option>Tavolo 6</option>";
                    echo"<option>Tavolo 7</option>";
                    echo"<option>Tavolo 8</option>";
                    echo"<option>Tavolo 9</option>";
                    echo"<option>Tavolo 10</option>";
                    echo"<option>Tavolo 11</option>";
                    echo"<option>Tavolo 12</option>";
                echo"</select>";
                }elseif($persone>8 && $persone<=12){
                    echo"<select name=\"tavolo\" >";
                    echo"<option>seleziona il tavolo</option>";
                    echo"<option>Tavolo 1</option>";
                    echo"<option>Tavolo 2</option>";
                    echo"<option>Tavolo 3</option>";
                    echo"<option>Tavolo 4</option>";
                    echo"<option>Tavolo 5</option>";
                    echo"<option>Tavolo 6</option>";
                    echo"<option>Tavolo 7</option>";
                    echo"<option>Tavolo 8</option>";
                    echo"<option>Tavolo 9</option>";
                    echo"<option>Tavolo 10</option>";
                    echo"<option>Tavolo 11</option>";
                    echo"<option>Tavolo 12</option>";
                echo"</select>";
                echo"</br>";
                echo"<select name=\"tavolo1\" >";
                    echo"<option>seleziona il tavolo</option>";
                    echo"<option>Tavolo 1</option>";
                    echo"<option>Tavolo 2</option>";
                    echo"<option>Tavolo 3</option>";
                    echo"<option>Tavolo 4</option>";
                    echo"<option>Tavolo 5</option>";
                    echo"<option>Tavolo 6</option>";
                    echo"<option>Tavolo 7</option>";
                    echo"<option>Tavolo 8</option>";
                    echo"<option>Tavolo 9</option>";
                    echo"<option>Tavolo 10</option>";
                    echo"<option>Tavolo 11</option>";
                    echo"<option>Tavolo 12</option>";
                echo"</select>";
                echo"</br>";
                echo"<select name=\"tavolo2\" >";
                    echo"<option>seleziona il tavolo</option>";
                    echo"<option>Tavolo 1</option>";
                    echo"<option>Tavolo 2</option>";
                    echo"<option>Tavolo 3</option>";
                    echo"<option>Tavolo 4</option>";
                    echo"<option>Tavolo 5</option>";
                    echo"<option>Tavolo 6</option>";
                    echo"<option>Tavolo 7</option>";
                    echo"<option>Tavolo 8</option>";
                    echo"<option>Tavolo 9</option>";
                    echo"<option>Tavolo 10</option>";
                    echo"<option>Tavolo 11</option>";
                    echo"<option>Tavolo 12</option>";
                echo"</select>";
                }elseif($persone>12 && $persone<=16){
                    echo"<select name=\"tavolo\" >";
                    echo"<option>seleziona il tavolo</option>";
                    echo"<option>Tavolo 1</option>";
                    echo"<option>Tavolo 2</option>";
                    echo"<option>Tavolo 3</option>";
                    echo"<option>Tavolo 4</option>";
                    echo"<option>Tavolo 5</option>";
                    echo"<option>Tavolo 6</option>";
                    echo"<option>Tavolo 7</option>";
                    echo"<option>Tavolo 8</option>";
                    echo"<option>Tavolo 9</option>";
                    echo"<option>Tavolo 10</option>";
                    echo"<option>Tavolo 11</option>";
                    echo"<option>Tavolo 12</option>";
                echo"</select>";
                echo"</br>";
                echo"<select name=\"tavolo1\" >";
                    echo"<option>seleziona il tavolo</option>";
                    echo"<option>Tavolo 1</option>";
                    echo"<option>Tavolo 2</option>";
                    echo"<option>Tavolo 3</option>";
                    echo"<option>Tavolo 4</option>";
                    echo"<option>Tavolo 5</option>";
                    echo"<option>Tavolo 6</option>";
                    echo"<option>Tavolo 7</option>";
                    echo"<option>Tavolo 8</option>";
                    echo"<option>Tavolo 9</option>";
                    echo"<option>Tavolo 10</option>";
                    echo"<option>Tavolo 11</option>";
                    echo"<option>Tavolo 12</option>";
                echo"</select>";
                echo"</br>";
                echo"<select name=\"tavolo2\" >";
                    echo"<option>seleziona il tavolo</option>";
                    echo"<option>Tavolo 1</option>";
                    echo"<option>Tavolo 2</option>";
                    echo"<option>Tavolo 3</option>";
                    echo"<option>Tavolo 4</option>";
                    echo"<option>Tavolo 5</option>";
                    echo"<option>Tavolo 6</option>";
                    echo"<option>Tavolo 7</option>";
                    echo"<option>Tavolo 8</option>";
                    echo"<option>Tavolo 9</option>";
                    echo"<option>Tavolo 10</option>";
                    echo"<option>Tavolo 11</option>";
                    echo"<option>Tavolo 12</option>";
                echo"</select>";
                echo"</br>";
                echo"<select name=\"tavolo3\" >";
                    echo"<option>seleziona il tavolo</option>";
                    echo"<option>Tavolo 1</option>";
                    echo"<option>Tavolo 2</option>";
                    echo"<option>Tavolo 3</option>";
                    echo"<option>Tavolo 4</option>";
                    echo"<option>Tavolo 5</option>";
                    echo"<option>Tavolo 6</option>";
                    echo"<option>Tavolo 7</option>";
                    echo"<option>Tavolo 8</option>";
                    echo"<option>Tavolo 9</option>";
                    echo"<option>Tavolo 10</option>";
                    echo"<option>Tavolo 11</option>";
                    echo"<option>Tavolo 12</option>";
                echo"</select>";
                }
                ?>
                </div>
                <?php
                if($persone==1){
                   echo"<input type=\"hidden\"  name=\"persone\" value=\"1\">";
                }elseif($persone==2){
                    echo"<input type=\"hidden\"  name=\"persone\" value=\"2\">";
                }elseif($persone==3){
                    echo"<input type=\"hidden\"  name=\"persone\" value=\"3\">";
                }elseif($persone==4){
                    echo"<input type=\"hidden\"  name=\"persone\" value=\"4\">";
                }elseif($persone==5){
                    echo"<input type=\"hidden\"  name=\"persone\" value=\"5\">";
                }elseif($persone==6){
                    echo"<input type=\"hidden\"  name=\"persone\" value=\"6\">";
                }elseif($persone==7){
                    echo"<input type=\"hidden\"  name=\"persone\" value=\"7\">";
                }elseif($persone==8){
                    echo"<input type=\"hidden\"  name=\"persone\" value=\"8\">";
                }elseif($persone==9){
                    echo"<input type=\"hidden\"  name=\"persone\" value=\"9\">";
                }elseif($persone==10){
                    echo"<input type=\"hidden\"  name=\"persone\" value=\"10\">";
                }elseif($persone==11){
                    echo"<input type=\"hidden\"  name=\"persone\" value=\"11\">";
                }elseif($persone==12){
                    echo"<input type=\"hidden\"  name=\"persone\" value=\"12\">";
                }elseif($persone==13){
                    echo"<input type=\"hidden\"  name=\"persone\" value=\"13\">";
                }elseif($persone==14){
                    echo"<input type=\"hidden\"  name=\"persone\" value=\"14\">";
                }elseif($persone==15){
                    echo"<input type=\"hidden\"  name=\"persone\" value=\"15\">";
                }elseif($persone==16){
                    echo"<input type=\"hidden\"  name=\"persone\" value=\"16\">";
                }
                ?>
                <input type = "submit" value= "Prenota" class="button button-block">
            </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php
  $myfile = fopen("data.txt", "w") or die("Unable to open file!");
  $txt = $date;
  fwrite($myfile, $txt);
  fclose($myfile);
  ?>
</body>
</html>


