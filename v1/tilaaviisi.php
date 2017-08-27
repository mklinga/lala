<?php include("elements.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>LaitosLaulajat ry - Tilaa</title>
		<meta charset="utf-8" />
		<meta name="description" content="Laitoslaulajat ry - Tilaa" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/animation.css" />
		<script src="js/jquery-1.9.1.min.js"></script>
	</head>
	<body>
		<div id="content" >
			<div id="navigation"> <?php nav_elements_top("tilaa"); ?> </div>
			<div id="main_pic"> <?php main_pic("laitoslaulajat_pic.jpg"); ?> </div>
			<div class="bottom_part">
				<div id="logo"> <?php logo(); ?> </div>
				<div id="text">
					<p>
					<h3>Viisi kohtaamista läheiselle</h3>
					Miksi juuri viisi? Koska yksi tai kaksi kertaa jäisi liian pintaraapaisuksi. Halusimme luoda kokonaisuuden, jolla olisi jo vaikutusta vanhuksen hyvinvointiin, hän ehtisi tulla tutummaksi laitoslaulajan kanssa ja kohtaamisesta jäisi pysyvämpi muisto.
					</p><p>
					Laulukohtaaminen, noin 45 minuuttia kerrallaan, kohdattavan jaksaminen huomioiden, viisi erillistä kertaa.
					</p><p>
					Kokonaishinta 250 €.
					</p>
					<form action="laheta.php" method="post">
						<table>
							<tr><td colspan="2"><strong>Tilaaja</strong></td></tr>
							<tr>
								<td>Tilaajan nimi</td>
								<td><input size="40" name="tilaaja_nimi" /></td>
							</tr><tr>
								<td>Puhelinnumero</td>
								<td><input size="40" name="tilaaja_puh" /></td>
							</tr><tr>
								<td>Sähköposti</td>
								<td><input size="40" name="tilaaja_email" /></td>
							</tr><tr>
								<td>Lähiosoite</td>
								<td><input size="40" name="tilaaja_osoite" /></td>
								</tr><tr><td colspan="2"><strong>Lahjan vastaanottaja</strong></td></tr>
							<tr>
								<td>Vastaanottajan nimi</td>
								<td><input size="40" name="saaja_nimi" /></td>
							</tr><tr>
								<td>Osoite asuinpaikkaan</td>
								<td><input size="40" name="saaja_osoite" /></td>
							</tr><tr>
								<td>Henkilökunnan yhteystiedot</td>
								<td><textarea cols="40" rows="4" name="saaja_yhteystiedot" ></textarea></td>
							</tr><tr>
								<td>Erityishuomiot/toiveet</td>
								<td><textarea cols="40" rows="4" name="saaja_toiveet"></textarea></td>
							</tr>
						</table>
						<input type="submit" value="Lähetä tilaus" name="tilaus"/>
					</form>
				</div>
			</div> <!-- bottom_part -->
		</div> <!-- content -->
	</body>
</html>
