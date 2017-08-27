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
} else if (isset($_POST['jasenhakemus'])) {
    $to = "piritta.ruutikainen@laitoslaulajat.fi";
    $subject = 'Liittyminen Jäseneksi!';

    $runko = "TILAUS\n\n";
    $runko .= "Hakemus taustalaulajaksi: ";
    if (isset($_POST['taustalaulajaksi'])) {
      $runko .= $_POST['taustalaulajaksi']."\n\n";
    } else {
      $runko .= "Ei\n\n";
    }

    $runko .= "Varsinaiseksi jäseneksi: ";
    if (isset($_POST['varsinaiseksi_jaseneksi'])) {
      $runko .= $_POST['varsinaiseksi_jaseneksi']."\n\n";
    } else {
      $runko .= "Ei\n\n";
    }
    $runko .= "Etunimet: ";
    $runko .= $_POST['etunimet']."\n\n";
    $runko .= "Sukunimi: ";
    $runko .= $_POST['sukunimi']."\n\n";
    $runko .= "Lähiosoite: ";
    $runko .= $_POST['lahiosoite']."\n\n";
    $runko .= "Postinumero ja -toimipaikka: ";
    $runko .= $_POST['postinumero']."\n\n";
    $runko .= "Sähköposti: ";
    $runko .= $_POST['sahkoposti']."\n\n";
    $runko .= "Puhelinnumero: ";
    $runko .= $_POST['puhelinnumero']."\n\n";
    $runko .= "Syntymäaika: ";
    $runko .= $_POST['syntymaaika']."\n\n";

    echo '<section class="block">';
    echo '<h2>Hakemus lähetetty</h2>';
    echo '<p>Kiitos yhteydenotosta! <br/><br/>Laitoslaulajat ottavat teihin yhteyttä mahdollisimman pian.<br/><br/><br/><br/></p>';
    echo '</section>';
} else if (isset($_POST['lala_hakemus'])) {
    $to = "hakemukset@laitoslaulajat.fi";
    $subject = 'Liittyminen laitoslaulajaksi!';

    $runko = "LAITOSLAULAJA - HAKEMUS\n\n";
    $runko .= "Etunimet: ";
    $runko .= $_POST['etunimet']."\n\n";
    $runko .= "Sukunimi: ";
    $runko .= $_POST['sukunimi']."\n\n";
    $runko .= "Lähiosoite: ";
    $runko .= $_POST['lahiosoite']."\n\n";
    $runko .= "Postinumero ja -toimipaikka: ";
    $runko .= $_POST['postinumero']."\n\n";
    $runko .= "Sähköposti: ";
    $runko .= $_POST['sahkoposti']."\n\n";
    $runko .= "Puhelinnumero: ";
    $runko .= $_POST['puhelinnumero']."\n\n";
    $runko .= "Syntymäaika: ";
    $runko .= $_POST['syntymaaika']."\n\n";
    $runko .= "Aiempi kokemus laulamisesta: ";
    $runko .= $_POST['aiempi_kokemus']."\n\n";
    $runko .= "Muu hyödylliseksi katsomasi toiminta: ";
    $runko .= $_POST['muu_toiminta']."\n\n";
    $runko .= "Miksi haluat laitoslaulajaksi: ";
    $runko .= $_POST['miksi']."\n\n";

    echo '<section class="block">';
    echo '<h2>Hakemus lähetetty</h2>';
    echo '<p>Kiitos hakemuksesta! <br/><br/>Laitoslaulajat ottavat teihin yhteyttä mahdollisimman pian.<br/><br/><br/><br/></p>';
    echo '</section>';
} else {
  echo "Pahoittelut, jokin meni pieleen, yritä myöhemmin uudelleen.";
  die();
}

mail($to, $subject, $runko, $header);
// echo $runko;

?>

<?php include('footer.php');
