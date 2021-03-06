<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lo Varchetto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="style.css">
</head>
<body id="page-top">
  <!--navbar-->

  <div class="navbar navbar-default navbar-fixed-top" >
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top"><img class="LogoSito" src="img/LogoSito.png" ></a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#chisiamo">Chi siamo</a></li>
              <li><a href="#prenotatavolo">Prenota Tavolo</a></li>
              <li class="dropdown">
               <a data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link dropdown-toggle">
                      <?php
                      echo "Ciao, ";
                      echo $_GET['nome'];
                      ?>
                  </a>
            <div role="menu" class="dropdown-menu">
                    <a role="presentation" href="/index.html" class="dropdown-item">Log out</a>
                 </div>
        </li>
            </ul>
          </div>
        </div>
  </div>
  <!--fine navbar-->
  <!--paginainiziale-->
  <div class="image">
     <h1 class="heading">Lo Varchetto</h1>
     <a href="#chisiamo"><p><button class="btn btn-large">scopri di più</button></p></a>
  </div>
  <!--fine paginainiziale-->
  <!--chi siamo-->
  <div id="chisiamo" class="chisiamo">
     <h2>Chi Siamo</h2>
     <p>Roll on the floor purring your whiskers off intrigued by the shower burrow under covers, and play time, rub face on everything, intently sniff hand, or pelt around the house and up and down stairs chasing phantoms. Attack feet. Damn that dog shake treat bag under the bed drink water out of the faucet for lick butt love to play with owner's hair tie. Swat at dog give attitude.</p>
  </div>
  <!--fine chi siamo-->
  <!--prenota tavolo-->
  <div id="prenotatavolo" class="prenotatavolo">
    <div class="disponibilita">
      <form method="POST" action="disponibilita.php" name="messaggio">
        <div class="form-group">
            <label>Date</label>
              <div class="input-group date" id="datepicker">
                <input class="form-control" placeholder="DD/MM/YYYY"/>
                <span class="input-group-append input-group-addon">
                  <span class="input-group-text">
                    <i class="fa fa-calendar"></i>
                  </span>
                </span>
              </div>
        </div>
      </form>
    </div>
    <div class="ristorante">
      <div class="col-lg-6 mx-auto">
        <h1>Stanza 2</h1>
        <button background-color: chartreuse;>Tavolo 12</button>
        <button>Tavolo 11</button>
        <button>Tavolo 10</button>
        <button>Tavolo 9</button>
        <button>Tavolo 8</button>
      </div>
      <div class="col-lg-6 mx-auto">
        <h1>Stanza 1</h1>
        <button>Tavolo 7</button>
        <button>Tavolo 6</button>
        <button>Tavolo 5</button>
        <button>Tavolo 4</button>
        <button>Tavolo 3</button>
        <button>Tavolo 2</button>
        <button>Tavolo 1</button>
      </div>      
    </div>

<form>
  
</form>

  </div>
  <!--fine prenota tavolo-->
  <script  src="index.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/eonasdan-bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js'></script>
  <script  src="script.js"></script><!--calendario-->
  </body>
</html>