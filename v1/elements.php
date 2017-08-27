<?php

function nav_elements_top($current)
{
	$pages = array( "etusivu" => "nav_link", "toiminta" => "nav_link", 
		"tulemukaan" => "nav_link", "tilaa" => "nav_link", "yhteystiedot" => "nav_link");
	$pages[$current] = "nav_link_current";

	echo '<table id="nav_table">';
	echo '<tr>';
	echo '<td class="nav_table_column"><a class="'.$pages["etusivu"].'" href="index.php">ETUSIVU</a></td>';
	echo '<td class="nav_table_column"><a class="'.$pages["toiminta"].'" href="toiminta.php">TOIMINTA</a></td>';
	echo '<td class="nav_table_column"><a class="'.$pages["tulemukaan"].'" href="tulemukaan.php">TULE MUKAAN</a></td>';
	echo '<td class="nav_table_column"><a class="'.$pages["tilaa"].'" href="tilaaviisi.php">TILAA</a></td>';
	echo '<td class="nav_table_column"><a class="'.$pages["yhteystiedot"].'" href="yhteystiedot.php">YHTEYSTIEDOT</a></td>';
	echo '</tr>';
	echo '</table>';
}

function nav_links_tulemukaan($current)
{
	$pages = array( "tulemukaan" => "sub_link", "jasenhakemus" => "sub_link");
	$pages[$current] = "sub_link_current";

	echo '<a class="'.$pages["tulemukaan"].'" href="tulemukaan.php">TULE MUKAAN</a><br />';
	echo '<a class="'.$pages["jasenhakemus"].'" href="jasenhakemus.php">JÄSENHAKEMUS</a><br />';
}

function nav_links_toiminta($current)
{
	$pages = array( "toiminta" => "sub_link", "laitoslaulajat" => "sub_link",
		"kohtaamisia" => "sub_link", "taustaa" => "sub_link");

	$pages[$current] = "sub_link_current";

	echo '<a class="'.$pages["toiminta"].'" href="toiminta.php">TOIMINTA</a><br />';
	echo '<a class="'.$pages["laitoslaulajat"].'" href="laitoslaulajat.php">LAITOSLAULAJAT</a><br />';
	echo '<a class="'.$pages["taustaa"].'" href="taustaa.php">TAUSTAA</a><br />';
	echo '<a class="'.$pages["kohtaamisia"].'" href="kohtaamisia.php">KOHTAAMISIA</a><br />';
}

function main_pic($image)
{
	echo '<img id="kapellimestari_pic" src="img/' . $image . '" alt="Oman elämänsä kapellimestari" />';
	echo '<img id="kapellimestari_text" src="img/etusivu_tacline.png" alt="Oman elämänsä kapellimestari" />';
	echo '<script src="js/animation.js"></script>';
}

function logo()
{
	echo '<a href="index.php"><img id="logo_img" src="img/lala_logo.png" alt="LaLa" /></a>';
}
?>
