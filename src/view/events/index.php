<nav class="nav">
  <div class="nav__logo">
    <a href="index.php?page=index"><img class="" src="assets/img/logo.png" alt="Logo Spekken"></a>
  </div>
  <ul class="nav__list">
    <a class="nav__list__link nav__list__link--active" href="index.php?page=index">Home</a>
    <a class="nav__list__link" href="index.php?page=program">Programma</a>
    <a class="nav__list__link" href="#">Over Spekken</a>
    <a class="nav__list__link" href="#">Tickets</a>
  </ul>
</nav>

<header class="theater">
  <img class="squiggly2" src="assets/img/light.png" alt="">
  <picture>
          <source class="theater__picture" type="image/webp" srcset="assets/img/header2.jpg" alt="Spekken"/>
          <img class="theater__picture" src="assets/img/header2.jpg" alt="Spekken"/>
  </picture>
  <div class="theater__leftcurtain"></div>
  <div class="theater__rightcurtain"></div>
</div>

<section class="spekken">
  <div class="spekken__topPattern"></div>
  <article class="spekken__info">
    <div class="spekken__info__title">Kindertheaterfestival </br> Spekken</div>
    <div class="spekken__info__about">
      Twee keer per jaar vullen de zalen van het Tinnenpottheater en het Gravensteen
      te <span class="spekken__info__about__highlight">Gent</span> zich met friemelende en giechelende kinderen, want dan opent namelijk
      het Spekkenfestival zijn deuren. Spekken is een kindertheaterfestival georganiseerd
      door het Tinnenpottheater die kinderen en hun (groot)ouders onderdompelen in de
      wondere wereld van theater. Ze brengt tijdens de <span class="spekken__info__about__highlight">Paas- en Kerstvakantie</span> een rijk
      programma met kleine parels.
    </div>
  </article>
  <div class="spekken__bottomPattern"></div>
</section>

<section class="explore">
  <div class="explore__title"><p><span class="explore__title__highlight">ONTDEK</span> ONZE</p> VOORSTELLINGEN</p></div>
  <div class="explore__events">
    <?php foreach($events as $event): ?>
      <article class="event">
        <picture>
            <source class="event__picture" type="image/webp" srcset="../../assets/img/<?php echo $event['id']?>.jpg" alt="">
            <img class="event__picture" src="../../assets/img/<?php echo $event['id']?>.jpg" alt="">
        </picture>
        <div class="event__info">
          <div class="event__info__title"><h2><?php echo $event['title']; ?></h2></header></div>
          <div class="event__info__start"> <?php echo $event['start'];?> </div>
          <div class="event__info__age"><?php echo $event['start_age'];?> - <?php echo $event['end_age'];?> jaar</div>
          <?php echo '<a class="program_event_extra" href=index.php?page=detail&id=' . $event['id'] . '>' ?>Meer Info -></a>
      </div>
    </article>
    <? endforeach;?>
  </div>
</section>

<section class="creative">
  <picture>
      <source class="creative__picture" type="image/webp" srcset="../../assets/img/creative.png" alt="">
      <img class="creative__picture" src="../../assets/img/creative.png" alt="">
  </picture>
  <div class="creative__info">
    <p class="creative__info__title">Creatief</p>
    <p class="creative__info__text">Het binnenplein van de Tinnenpot wordt omgetoverd in
      een knutsel- en spelparadijs. En dat allemaal gratis elke dag tussen 11u00 en 17u00.</p>
  </div>
</section>


<section class="newscontainer">
  <article class="tricks">
    <div class="tricks__title">Tips &amp; Tricks</div>
    <div class="tricks__text">
      <p class="tricks__text__square">Ga eerst naar het toilet met de kindjes</p>
      <p class="tricks__text__square">Let op de minimum leeftijd!</p>
      <p class="tricks__text__square">Neem jongere kindjes op de schoot en zit bij voorkeur dicht bij de uitgang</p>
    </div>
  </article>
  <article class="newsletter">
    <div class="newsletter__title">Benieuwd naar de laatste<br> nieuwtjes van Spekken?</div>
    <form class="newsletter__form" action="index.php" method="post">
      <div>
        <input class="newsletter__form__name newsletter__form__name--animation" type="text" name="name" placeholder="Naam" required>
        <div class="error"></div>
      </div>
      <div>
        <input class="newsletter__form__email newsletter__form__name--animation" type="email" name="email" placeholder="E-mailadres" required>
        <div class="error"></div>
      </div>
      <input type="submit" value="Hou mij op de hoogte!">
    </form>
  </article>
</section>


<section class="partners">
  <div class="partners__title">Onze Partners</div>
  <ul class="partners__list">
    <li><img class="partners__list__logo" src="assets/img/logo1.png" alt="logo gentse winterfeesten"></li>
    <li><img class="partners__list__logo" src="assets/img/logo2.png" alt="logo free time"></li>
  </ul>
</section>

<footer class="footer">
  <div class="spekken__topPattern">

  </div>
  <section class="footer__info">
    <div class="footer__info__location">
      <p class="location__highlight">Festivallocatie</p>
      <p>Tinnenpotstraat 21 - Gent</p>
    </div>
    <div class="footer__info__social">
      <p>Volg ons ook op</p>
      <div class="footer__info__social__fb"></div>
    </div>
  </section
</footer>

<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>


    <filter id="squiggly-0">
      <feTurbulence baseFrequency="0.02" numOctaves="3" result="noise" seed="0"/>
      <feDisplacementMap id="displacement" in="SourceGraphic" in2="noise" scale="6" />
    </filter>
    <filter id="squiggly-1">
      <feTurbulence baseFrequency="0.02" numOctaves="3" result="noise" seed="1"/>
<feDisplacementMap in="SourceGraphic" in2="noise" scale="8" />
    </filter>

    <filter id="squiggly-2">
      <feTurbulence baseFrequency="0.02" numOctaves="3" result="noise" seed="2"/>
<feDisplacementMap in="SourceGraphic" in2="noise" scale="6" />
    </filter>
    <filter id="squiggly-3">
      <feTurbulence baseFrequency="0.02" numOctaves="3" result="noise" seed="3"/>
<feDisplacementMap in="SourceGraphic" in2="noise" scale="8" />
    </filter>

    <filter id="squiggly-4">
      <feTurbulence  baseFrequency="0.02" numOctaves="3" result="noise" seed="4"/>
<feDisplacementMap in="SourceGraphic" in2="noise" scale="6" />
    </filter>
  </defs>
</svg>

<!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In  -->

 
