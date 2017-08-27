<?php include("elements.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>LaitosLaulajat ry - Jäsenhakemus</title>
		<meta charset="utf-8" />
		<meta name="description" content="Laitoslaulajat ry - Jäsenhakemus" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/animation.css" />
		<script src="js/jquery-1.9.1.min.js"></script>
	</head>
	<body>
		<div id="content" >
			<div id="navigation"> <?php nav_elements_top("tulemukaan"); ?> </div>
			<div id="main_pic"> <?php main_pic("tulemukaan_pic.jpg"); ?> </div>
			<div class="bottom_part">
				<div id="logo">
					<div id="sub_links"> <?php nav_links_tulemukaan("jasenhakemus"); ?> </div>
					<?php logo(); ?>
				</div>
				<div id="text">
					<h2>Jäsenhakemus</h2>
					<p>
					Täytä hakemus huolellisesti ja lähetä se painamalla "lähetä"-nappia sivun alalaidassa.
					</p>
					<form action="laheta.php" method="post">
						<table>
							<tr>
								<td>Haluan liittyä</td>
								<td>
									<select name="jasentyyppi">
										<option value="Kannatusjäsen">Kannatusjäseneksi (50€/vuosi)</option>
										<option value="Varsinainen jäsen">Varsinaiseksi jäseneksi (15€/vuosi)</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Etunimet</td>
								<td><input name="etunimet" /></td>
							</tr><tr>
								<td>Sukunimi</td>
								<td><input name="sukunimi" /></td>
							</tr><tr>
								<td>Lähiosoite</td>
								<td><input name="lahiosoite" /></td>
							</tr><tr>
								<td>Postinumero ja -toimipaikka</td>
								<td><input name="postinumero" /></td>
							</tr><tr>
								<td>Sähköposti</td>
								<td><input name="sahkoposti" /></td>
							</tr><tr>
								<td>Puhelinnumero</td>
								<td><input name="puhelinnumero" /></td>
							</tr><tr>
								<td>Syntymäaika</td>
								<td><input name="syntymaaika" /></td>
							</tr>
						</table>
						<input type="submit" value="Lähetä jäsenhakemus" name="jasenhakemus"/>
					</form>
				</div>
			</div> <!-- bottom_part -->
		</div> <!-- content -->
	</body>
</html>
