<?php
$email = filter_input(INPUT_POST, 'email');
$psw = filter_input(INPUT_POST, 'password');
$psw = md5($psw);
	$host = "localhost";
    $usarneme="nicoasciutti19";
    $password="";
    $nomedb="my_nicoasciutti19";
    $con= mysqli_connect($host,$usarneme,$password,$nomedb);
    $ee=mysqli_query($con,"SELECT * FROM `Login` WHERE email='$email'");
    if(mysqli_num_rows($ee)>0){
        $p=mysqli_query($con,"SELECT * FROM `Login` WHERE email='$email' AND password='$psw'");
        if(mysqli_num_rows($p)>0){
            $nome="SELECT `Nome` FROM `Login` WHERE email='$email' AND password='$psw'";
            $result = $con->query($nome);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
               $noma=$row["Nome"];
               header("Refresh:0; url=/loggato.php?nome=$noma");//entra se esiste
            }
            } else {
            echo "0 results";
            }
            
        }else{
            echo "<script> alert('Password errata')</script>";
            header("Refresh:0; url=/formlogin/form.html");
        }
    }else{
        //entra se non esiste
        echo"<script> alert('email non trovata o errata')</script>";
        header("Refresh:0; url=/formlogin/form.html");
    }
?>