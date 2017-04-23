<?php

include('head.php');

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

<?php include('footer.php');
