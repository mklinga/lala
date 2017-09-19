<?php include('head.php'); ?>

<div id='tule-mukaan'>
  <section class='block'>
    <h2>Liity jäseneksi</h2>
    <p>
      Jäseneksi voi liittyä kuka vain, mutta laulajaksi pääsee vasta käytyään Laitoslaulajat ry:n valmennuksen. Laulajilta edellytetään laulutaustaa. Jäsenmaksu on 15 euroa.
    </p>
  </section>
  <section class='block no-padding'>
    <h2>Tule Taustalaulajaksi</h2>
    <p>
      Haluatko olla mukana tukemassa toimintaa, vaikka et itse eturivin soololaulaja olisikaan? Liity kannatusjäseneksi eli Taustalaulajaksi, jos sinulle on tärkeää, että mahdollisimman moni vanhus pääsee nauttimaan lauluvierailuista. Taustalaulajat ovat meille kullanarvoisia: ilman teitä homma ei toimi. Vuosittaisella 50 euron maksulla Taustalaulaja saa kerran vuodessa uutiskirjeen, jossa kerromme kuulumisistamme.
    </p>
  </section>
  <section class='image-block block no-bottom-margin'>
    <div class='images'>
      <div><img src="assets/hakemus.jpg" alt=""/></div>
      <div class='purple-haze'>&nbsp;</div>
    </div>
    <div class='image-block-header'>
      <h2>Jäsenhakemus</h2>
    </div>
  </section>
  <section class='block no-padding'>
    <form class="purple tulemukaan field-wrapper" action="laheta.php" method="post">
      <div class='fields'>
        <div class="jasen-valinta">
          <span class='taller'>Haluan liittyä taustalaulajaksi (50€/vuosi)</span>
          <label class='fancy-cb'>
            <input name="taustalaulajaksi" type="checkbox" value="Kyllä" />
            <span class="box">&nbsp;<span class="check">✔</span></span>
          </label>
        </div>
        <div class="jasen-valinta">
          <span class='taller margin-after'>Varsinaiseksi jäseneksi (15€/vuosi)</span>
          <label class='fancy-cb margin-after'>
            <input name="varsinaiseksi_jaseneksi" type="checkbox" value="Kyllä" />
            <span class="box">&nbsp;<span class="check">✔</span></span>
          </label>
        </div><div>
          <span>Etunimet</span>
          <input name="etunimet" />
        </div><div>
          <span>Sukunimi</span>
          <input name="sukunimi" />
        </div><div>
          <span>Lähiosoite</span>
          <input name="lahiosoite" />
        </div><div>
          <span>Postinumero ja -toimipaikka</span>
          <input name="postinumero" />
        </div><div>
          <span>Sähköposti</span>
          <input name="sahkoposti" />
        </div><div>
          <span>Puhelinnumero</span>
          <input name="puhelinnumero" />
        </div><div>
          <span>Syntymäaika</span>
          <input name="syntymaaika" />
        </div>
      </div>
      <div class='send'>
        <div>
          <input type="submit" value="Lähetä jäsenhakemus" name="jasenhakemus"/>
        </div>
      </div>
    </form>
  </section>
  <section class='image-block block'>
    <div class='images'>
      <div><img src="assets/tulemukaan02.jpg" alt=""/></div>
      <div><img src="assets/tulemukaan01.jpg" alt=""/></div>
      <div class='purple-haze'>&nbsp;</div>
    </div>
    <div class='image-block-header'>
      <h2>Tilaa laulupaketti</h2>
    </div>
    <div class='image-block-text'>
      <p>Hanki laitoslaulajan viiden kerran paketti tutulle vanhukselle. Tilauskaavakkeen löydät <a href='/tilaa.php'>täältä</a>.</p>
    </div>
  </section>
  <section class='block invert-padding'>
    <h2>Ryhdy sponsoriksi!</h2>
    <p>
      Voit kohdistaa sponsoroinnin itsellesi ja yrityksellesi tärkeään laitokseen tai tietylle henkilölle. Kohdattavan saat valita itse, mutta voit myös antaa kotihoidon tai laitoksen henkilökunnan valita henkilön, jolle laululahjasta olisi erityisesti iloa.
    </p>
  </section>
</div>

<?php include('footer.php'); ?>
