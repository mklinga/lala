<?php include('head.php'); ?>

<section id='tilaa' class='block'>
  <h2>Tilaa</h2>
  <div class='context-item'>
    Ilahduta läheistäsi tai sponsoroi laulajan vierailu laitokseen!
    <ul id='tilaa-lista'>
      <li>
      Laitoslaulaja kohtaa valitun henkilön viisi kertaa. Yksi kohtaaminen kestää 45 minuuttia.  
      </li>
      <li>
      Viiden kerran laululahjapaketti maksaa 250 euroa. Summa menee lyhentämättömänä laulajan palkkaan ja sivukuluihin.
      </li>
      <li>
      Anna elämänlaatua nostava lahja läheisellesi tai tee Laitoslaulajien toimintaa tukeva lahjoitus kotipaikkakuntasi palvelutaloon. 
      </li>
    </ul>
  </div>

  <section class='context-item' id='lomake'>
    <form action="laheta.php" method="post">
      <div>
        <label>Tilaaja</label>
        <input type="text" size="40" name="tilaaja_nimi" />
      </div>
      <div>
        <label>Puhelinnumero</label>
        <input type="text" size="40" name="tilaaja_puh" />
      </div>
      <div>
        <label>Sähköposti</label>
        <input type="text" size="40" name="tilaaja_email" />
      </div>
      <div>
        <label>Lähiosoite</label>
        <input type="text" size="39" name="tilaaja_osoite" />
      </div>
      <div>
        <label>Vastaanottajan nimi</label>
        <input type="text" size="39" name="saaja_nimi" />
      </div>
      <div>
        <label>Osoite asuinpaikkaan</label>
        <input type="text" size="40" name="saaja_osoite" />
      </div>
      <div>
        <label>Henkilökunnan yhteystiedot</label>
        <textarea cols="40" rows="4" name="saaja_yhteystiedot" ></textarea>
      </div>
      <div>
        <label>Erityishuomiot/toiveet</label>
        <textarea cols="40" rows="4" name="saaja_toiveet"></textarea>
      </div>
      <div>
        <input type="submit" value="Lähetä tilaus" name="tilaus"/>
      </div>
    </form>

    <aside class='box'>
      <div>
      <h3>5 kohtaamista</h3>
      <p>
      Miksi juuri viisi? Koska yksi tai kaksi laulutapaamista jäisi pintaraapaisuksi. Haluamme tarjota kokonaisuuden, jolla on tuntuva vaikutus vanhuksen hyvinvointiin. Kun tullaan tutummiksi, kohtaamisesta jää pysyvämpi muisto. 
      </p>
    </div>
    </aside>
  </section>
</section>

<?php include('footer.php'); ?>
