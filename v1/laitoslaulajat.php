<?php include("elements.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>LaitosLaulajat ry - laitoslaulajat</title>
		<meta charset="utf-8" />
		<meta name="description" content="Laitoslaulajat ry - laitoslaulajat" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/animation.css" />
		<script src="js/jquery-1.9.1.min.js"></script>
	</head>
	<body>
		<div id="content" >
			<div id="navigation"> <?php nav_elements_top("toiminta"); ?> </div>
			<div id="main_pic"> <?php main_pic("laitoslaulajat_pic.jpg"); ?> </div>
			<div class="bottom_part">
				<div id="logo"> 
					<div id="sub_links"> <?php nav_links_toiminta("laitoslaulajat"); ?> </div>
					<?php logo(); ?> 
				</div>
				<div id="text">
					<h3>Laitoslaulajat</h3>
					<p>
					Laitoslaulaja voi olla joko musiikin ammattilainen tai vankan harrastustaustan omaava henkilö, jolle laulaminen on tärkeä osa elämää ja vanhukset ja heidän hyvinvointinsa lähellä sydäntä. Hoiva-alan koulutus on hyvä apu laitoslaulajalle, mutta ei välttämättömyys. Laitoslaulaja voi toimia muun työn tai opiskeluiden ohessa.
					</p><p>
					Laitoslaulajat ovat vuorovaikutuksessa sekä laulamisen että keskustelun kautta. Laitoslaulajilla on hyvät sosiaaliset taidot ja empatian kykyä, ja taito kohdata erilaisia ihmisiä, heidän elämäntarinoitaan sekä heidän vaihtelevia fyysisen ja henkisen hyvinvoinnin tiloja. Laitoslaulaja piristää kohdattavan mieltä, tuo arkeen vaihtelua ja antaa laulamisen avulla syviä ja koskettavia elämyksiä valitulle henkilölle. Laulu, sekä yksinlaulu että laitoslaulajan ja vanhuksen yhteislaulu, on pääasiallinen kanava ja väline
					laitoslaulajan työssä luoda yhteys kohdattavaan ja tuottaa hänelle iloa.
					</p><p>
					Jokainen laitoslaulajaksi valittu perehdytetään vuorovaikutukseen ja kohtaavaan lauluun asiakkaan ympäristö huomioiden. 
					</p><p>
					<h3>Miten mukaan laitoslaulajaksi?</h3>
					Innostuitko? Jos koet olevasi sopiva henkilö tähän työhön, laita hakemus tulemaan. Hakemuksen perusteella kutsumme haastatteluun, jonka jälkeen teemme valinnan ja pääset perehdytykseen. Tällä prosessilla takaamme laadukkaan tason ja soveltuvuuden laitoslaulajan työhön. Laitoslaulajat saavat työstään palkan.
					</p>
					<p>
					<h3>Laitoslaulajaksi - hakemus</h3>
					<form action="laheta.php" method="post">
						<table>
							<tr>
								<td>Nimi</td>
								<td><input size="40" name="nimi" /></td>
							</tr><tr>
								<td>Syntymäaika</td>
								<td><input size="40" name="syntymaaika" /></td>
							</tr><tr>
								<td>Koulutus ja ammatti</td>
								<td><input size="40" name="koulutus_ammatti" /></td>
							</tr><tr>
								<td>Asuinpaikkakunta</td>
								<td><input size="40" name="paikkakunta" /></td>
							</tr><tr>
								<td>Yhteystietosi</td>
								<td><textarea cols="40" rows="4" name="yhteystiedot" ></textarea></td>
							</tr><tr>
								<td>Aiempi kokemus laulamisesta</td>
								<td><textarea cols="40" rows="4" name="aiempi_kokemus"></textarea></td>
							</tr><tr>
								<td>Muu hyödylliseksi katsomasi toiminta</td>
								<td><textarea cols="40" rows="4" name="muu_toiminta" ></textarea></td>
							</tr><tr>
								<td>Miksi haluat laitoslaulajaksi</td>
								<td><textarea cols="40" rows="4" name="miksi"></textarea></td>
							</tr>
						</table>
						<input type="submit" value="Lähetä hakemus" name="lala_hakemus"/>
					</form>
					</p>
				</div>
			</div> <!-- bottom_part -->
		</div> <!-- content -->
	</body>
</html>
