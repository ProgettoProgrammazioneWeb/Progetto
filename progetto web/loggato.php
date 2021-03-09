<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lo Varchetto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
   
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
              <li><a href="#menù">Menù</a></li>
              <li><a href="#mappa">Dove Siamo</a></li>
              <li><a href="#orario">Orari</a></li>
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
      <div class="descrizione">
        <div class="row">
         <div class="col-lg-8 mx-auto">
           <img src = "./img/Pesce.jpg">
         </div>
          <div class="col-lg-4 mx-auto">
            <h3>Lo Varchetto è il luogo ideale per le tue apericene e cene a base di pesce.Tutto a conduzione familiare dalla cucina alla gestione dei tavoli, il pesce è sempre freschissimo e pescato giornalmente.</h3>
          </div>
        </div>
      </div>
      <div class="informazione">
        <div class="row">
          <div class="col-lg-4 mx-auto">
              <img src="./img/menu.png">
                <h3 class="glyphicon glyphicon-star">Pesce fresco ogni giorno</h3>
                <h4>Solo le migliori materie prime e la possibilità di gustosissimi piatti , dalla pasta fresca alla panificazione e ai dolci! Inoltre, i nostri menù prevedono soluzioni anche ‘Vegan’, per soddisfare le esigenze di qualsiasi nostro cliente.</h4>
                <a href="#menù"><button class="buttonmenu">menù</button></a>
            
          </div>
          <div id ="prenotatavolo" class="col-lg-4 mx-auto">
            <img src="./img/libro.jpg">
            <h3 class="glyphicon glyphicon-star">Prenota dal sito</h3>
                <h4>Sei stufo di chiamare? Prenota attraverso il nostro sito in pochi minuti ,molto semplice e veloce.</h4>
                <div class="prenotazione">
                <form method="POST" action="php/mappa.php" >
                  <div class="form-group">
                        <div class="input-group date" id="datepicker">
                          <input class="form-control" placeholder="DD/MM/YYYY" name="data" required/>
                          <span class="input-group-append input-group-addon">
                            <span class="input-group-text">
                              <i class="fa fa-calendar"></i>
                            </span>
                          </span>
                        </div>
                        <select name="persone" class="persone" required>
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
                        <input type = "submit" value= "Prenota" class="prenota">
                  </div>
                </form>
              </div>
          </div>
        </div>
          
        </div>
     </div>
  </div>
  <!--fine chi siamo-->
  
  <!--inizio menù-->
  <div id="menù" class="menu">
    <div class="row">
      <div class="col-lg-4 mx-auto">
            <h3>Antipasti</h3>
            <p>Perchè chi ben comincia… è a metà dell’opera!</p>
            <img src="./img/antipasto.jpg">
            <span><h3>ANTIPASTI FREDDI</h3>
            <p>Antipasto Misto Freddo &nbsp;&nbsp;&nbsp;€ 14,00<br> Tonno Scottato in Crosta di Semi di Papavero &nbsp;&nbsp;&nbsp;€ 14,00 <br>
            Carpaccio di Salmone Marinato agli Agrumi e Finocchietto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; € 13,50 <br>Insalata di Mare&nbsp;&nbsp;&nbsp; € 12,00<br>
            Carpaccio di Fiorentina su Letto di Valeriana,<br> spolverata di Mandorle e Citronette&nbsp;&nbsp;&nbsp;€ 11,00 <br>
            Fantasia di Salumi &nbsp;&nbsp;&nbsp;€ 11,00
            </p></span>
            <span><h3>ANTIPASTI CALDI</h3>
              <p>Gratinato Misto &nbsp;&nbsp;&nbsp;€ 12,50<br>
                Mazzancolle al Sale&nbsp;&nbsp;&nbsp; € 14,50<br>
                Fantasia di Crostini “Lo Varchetto”&nbsp;&nbsp;&nbsp;€ 9,00<br>
                Tortino di Formaggio con Vellutata di Tartufo&nbsp;&nbsp;&nbsp;€ 9,00<br>
              </p></span>
      </div>
      <div class="col-lg-4 mx-auto">
        <h3>Primi piatti</h3>
        <p>Per tutti i gusti… anche con pasta fresca!</p>
        <img src="./img/primo.jpg">
        <span><h3>PRIMI</h3>
          <p>
          Paccheri all’Astice&nbsp;&nbsp;&nbsp;€ 17,00<br>
          Spaghetti allo Scoglio&nbsp;&nbsp;&nbsp;€ 14,50<br>
          Tortellacci al Branzino&nbsp;&nbsp;&nbsp;€ 14,00<br>
          Pappardelle 'Lo Varchetto'  <br>
          Salmone Affumicato, Gamberi e Verdurine&nbsp;&nbsp;&nbsp;€ 14,00<br>
          Strozzapreti alle Canocchie &nbsp;&nbsp;&nbsp;€ 11,50<br>
          Risotto alla Marinara&nbsp;&nbsp;&nbsp;€ 12,00<br>
          Tagliatelle al Ragù&nbsp;(per bambini)&nbsp;&nbsp;&nbsp;&nbsp;€ 8,50<br>
          </p></span>
        
      </div>
      <div class="col-lg-4 mx-auto">
        <h3>Secondi Piatti</h3>
        <p>Nulla di meglio per il momento più gustoso del tuo menù!</p>
        <img src="./img/secondo.jpg">
        <span><h3>SECONDI</h3>
          <p>
            Fritto Misto&nbsp;&nbsp;&nbsp;€ 15,50<br>
            Spiedini Misti n.6&nbsp;&nbsp;&nbsp;€ 16,00<br>
            Branzino al Cartoccio Carciofini, Olive e Patate &nbsp;&nbsp;&nbsp;€ 15,00<br>
            Filetto di Tonno / Spada&nbsp;&nbsp;&nbsp;€ 14,50<br>
          </p></span>
      </div>
    </div>
  </div>
  <!--fine menù-->
  <!--inizio mappa-->
  <div id="mappa" class="mappa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11612.99267378313!2d13.7282379!3d43.3090641!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc66b4b1e386403ce!2sLO%20Varchetto%20%22Quello%20che%20troi..%20magni*21%22!5e0!3m2!1sit!2sit!4v1614938244299!5m2!1sit!2sit" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
  <!--fine mappa-->
  <!--inizio orario-->
  <div id="orario" class="orario">
    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Vienici a trovare</span><br>
                <span class="section-heading-lower">Siamo aperti</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-center mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                  Domenica
                  <span class="ml-auto">Pranzo: 12.00 alle 2.30/Cena: 19.00 alle 23.00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Lunedi
                  <span class="ml-auto">CHIUSO</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Martedi
                  <span class="ml-auto">Pranzo: 12.00 alle 2.30/Cena: 19.00 alle 23.00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Mercoledi
                  <span class="ml-auto">Pranzo: 12.00 alle 2.30/Cena: 19.00 alle 23.00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Giovedi
                  <span class="ml-auto">Pranzo: 12.00 alle 2.30/Cena: 19.00 alle 23.00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Venerdi
                  <span class="ml-auto">Pranzo: 12.00 alle 2.30/Cena: 19.00 alle 23.00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Sabato
                  <span class="ml-auto">Cena: 19.00 alle 23.00</span>
                </li>
              </ul>
              <p class="address mb-5">
                <em>
                  <strong>Corso Dalmazia, 74</strong>
                  <br>
                  62012 Civitanova Marche (MC)
                </em>
              </p>
              <p class="mb-0">
                <small>
                  <em>Contatti</em>
                </small>
                <br>
                (+39) 320 680 8433
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--fine orario-->
  <!--footer-->
  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 2021</p>
    </div>
  </footer>
  <!-- fine footer-->
  <!--Link javascript-->
  <script src="js/index.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/eonasdan-bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js'></script>
  <script  src="js/script.js"></script>
  <!--Fine Link javascript-->
  </body>
</html>