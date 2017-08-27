<?php include("elements.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>LaitosLaulajat ry - lähetetty</title>
		<meta charset="utf-8" />
		<meta name="description" content="Laitoslaulajat ry - lähetetty" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/animation.css" />
		<script src="js/jquery-1.9.1.min.js"></script>
	</head>
	<body>
		<div id="content" >
			<div id="navigation"> <?php nav_elements_top(""); ?> </div>
			<div id="main_pic"> <?php main_pic("laitoslaulajat_pic.jpg"); ?> </div>
			<div class="bottom_part">
				<div id="logo"> <?php logo(); ?> </div>
				<div id="text">
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

						echo '<h2>Tilaus lähetetty</h2>';
						echo '<p>Kiitos tilauksestasi! <br/><br/>Laitoslaulajat ottavat teihin yhteyttä mahdollisimman pian.<br/><br/><br/><br/></p>';
					}
					else if (isset($_POST['jasenhakemus']))
					{
                                                $to = "piritta.ruutikainen@laitoslaulajat.fi";

                                                $subject = 'Liittyminen Jäseneksi!';

						$runko = "TILAUS\n\n";
						$runko .= "Jasentyyppi: ";
						$runko .= $_POST['jasentyyppi']."\n\n";
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

						echo '<h2>Hakemus lähetetty</h2>';
						echo '<p>Kiitos jäsenyyden hakemisesta! <br/><br/>Laitoslaulajat ottavat teihin yhteyttä mahdollisimman pian.<br/><br/><br/><br/></p>';
					}
					else if (isset($_POST['lala_hakemus']))
					{
                                                $to = "hakemukset@laitoslaulajat.fi";

                                                $subject = 'Liittyminen laitoslaulajaksi!';

						$runko = "LAITOSLAULAJA - HAKEMUS\n\n";
						$runko .= "Nimi: ";
						$runko .= $_POST['nimi']."\n\n";
						$runko .= "Syntymäaika: ";
						$runko .= $_POST['syntymaaika']."\n\n";
						$runko .= "Koulutus ja ammatti: ";
						$runko .= $_POST['koulutus_ammatti']."\n\n";
						$runko .= "Asuinpaikkakunta: ";
						$runko .= $_POST['paikkakunta']."\n\n";
						$runko .= "Yhteystietosi: ";
						$runko .= $_POST['yhteystiedot']."\n\n";
						$runko .= "Aiempi kokemus laulamisesta: ";
						$runko .= $_POST['aiempi_kokemus']."\n\n";
						$runko .= "Muu hyödylliseksi katsomasi toiminta: ";
						$runko .= $_POST['muu_toiminta']."\n\n";
						$runko .= "Miksi haluat laitoslaulajaksi: ";
						$runko .= $_POST['miksi']."\n\n";

						echo '<h2>Hakemus lähetetty</h2>';
						echo '<p>Kiitos hakemisesta! <br/><br/>Laitoslaulajat ottavat teihin yhteyttä mahdollisimman pian.<br/><br/><br/><br/></p>';
					}
					else
					{
						echo "VIRHE! Ei lähetystyyppiä!";
						die();
					}

					// lähetetään hakemus postiin
					mail($to, $subject, $runko, $header);

					?>
				</div>
			</div> <!-- bottom_part -->
		</div> <!-- content -->
	</body>
</html>
