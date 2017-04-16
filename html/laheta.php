<?php include("elements.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Laitoslaulajat Ry</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="all">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="assets/smooth-scroll.min.js" type="text/javascript" charset="utf-8"></script>
  </head>
  <body>
    <div class='menu-toggle'>
      <img src='assets/menu.png' alt='menu' />
    </div>
    <nav id='navigation' class='hide-on-mobile'>
      <div class='nav-links'>
        <a data-scroll href='/#'>etusivu</a>
        <a data-scroll href='/#mita'>toiminta</a>
        <a data-scroll href='/#tule-mukaan'>tule mukaan</a>
        <a data-scroll href='/#tilaa'>tilaa</a>
        <a data-scroll href='/#yhteys'>yhteys</a>
        <a data-scroll href='/#media'>LaLa mediassa</a>
        <a data-scroll href='/#kohtaamisia'>kohtaamisia</a>
      </div>
      <div class='nav-contact'>
        <div class='nav-img-wrapper'>
          <a type='email' href='mailto:puheenjohtaja@laitoslaulajat.fi'><img src='assets/at.png' alt='email' /></a>
        </div>
        <div class='nav-img-wrapper'>
          <a href='tel:0400798487'>
            <img src='assets/phone.png' alt='puhelin' />
          </a>
        </div>
        <div class='nav-img-wrapper'>
          <a href='https://fi-fi.facebook.com/Laitoslaulajat/' target='_blank'>
            <img src='assets/face.png' alt='facebook' />
          </a>
        </div>
      </div>
    </nav>
    <main class='container'>
					<?php 
					$from = "posti@laitoslaulajat.fi";
					$header = "From:$from";

					if (isset($_POST['tilaus']))
					{
            $to = "piritta.ruutikainen@laitoslaulajat.fi";
                                                
						$subject = "Laitoslaulajan tilaus";

						$runko = "TILAUS\n\n";
						$runko .= "** Tilaajan nimi: ";
						$runko .= $_POST['tilaaja_nimi']."\n\n";
						$runko .= "** Puhelinnumero: ";
						$runko .= $_POST['tilaaja_puh']."\n\n";
						$runko .= "** Sähköposti: ";
						$runko .= $_POST['tilaaja_email']."\n\n";
						$runko .= "** Lähiosoite: ";
						$runko .= $_POST['tilaaja_osoite']."\n\n";
						$runko .= "** Vastaanottajan nimi: ";
						$runko .= $_POST['saaja_nimi']."\n\n";
						$runko .= "** Osoite asuinpaikkaan: ";
						$runko .= $_POST['saaja_osoite']."\n\n";
						$runko .= "** Henkilökunnan yhteystiedot: ";
						$runko .= $_POST['saaja_yhteystiedot']."\n\n";
						$runko .= "** Erityishuomiot/toiveet: ";
						$runko .= $_POST['saaja_toiveet']."\n\n";

            echo '<section class="block">';
            echo '<h2>Tilaus lähetetty</h2>';
						echo '<p>Kiitos tilauksestasi! <br/><br/>Laitoslaulajat ottavat teihin yhteyttä mahdollisimman pian.<br/><br/><br/><br/></p>';
            echo '</section>';
					} else {
						echo "Pahoittelut, jokin meni pieleen, yritä myöhemmin uudelleen.";
						die();
					}

					// lähetetään hakemus postiin
					mail($to, $subject, $runko, $header);

					?>

  </main>
  <footer id='footer'>
    <a type='email' href='mailto:puheenjohtaja@laitoslaulajat.fi'>
      <img src='assets/at.png' alt='email' />
    </a>
    <a href='tel:0400798487'>
      <img src='assets/phone.png' alt='puhelin' />
    </a>
    <a href='https://fi-fi.facebook.com/Laitoslaulajat/' target='_blank'>
      <img src='assets/face.png' alt='facebook' />
    </a>
  </footer>
  <script src="assets/lala.js" type="text/javascript" charset="utf-8"></script>
  <script>smoothScroll.init({ offset: 10 });</script>
</body>
</html>
