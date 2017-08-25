<?php
  date_default_timezone_set('Europe/Brussels');
  $dateNow = date("Y-m-d H:i:s");
  $dateEndChristmas = '2018-01-07 00:00:00';
  $dateBeginEaster = '2018-04-2 00:00:00';
  $christmas = false;
  $easter = false;


  if ($dateNow <= $dateEndChristmas){
    $christmas = true;
  } else {
    $easter = true;
  }

?>

<nav class="nav">
  <div class="nav__logo">
    <a href="index.php?page=index"><img class="" src="assets/img/logo.png" alt="Logo Spekken"></a>
  </div>
  <ul class="nav__list">
    <a class="nav__list__link nav__list__link--active" href="index.php?page=index">Home</a>
    <a class="nav__list__link" href="index.php?page=program">Programma</a>
    <a class="nav__list__link" href="#">Over Spekken</a>
    <a class="nav__list__link" href="#">Tickets</a>
    <li class="hamburger"></li>
  </ul>
</nav>
<div class="mobileWrapper none">
  <ul class="menu">
    <li class="menu__item"><a class="menu__item__link" href="index.php?page=index">Home</a></li>
    <li class="menu__item"><a class="menu__item__link" href="index.php?page=program">Programma</a></li>
    <li class="menu__item"><a class="menu__item__link" href="#">Over Spekken</a></li>
    <li class="menu__item"><a class="menu__item__link" href="#">Tickets</a></li>
  </ul>
</div>

<header class="theater">
  <div class="theater__tag">
    <div class="theater__tag__triangle"></div>
    <div class="theater__tag__triangle2"></div>
    <div class="theater__tag__tagline">Een feest voor iedereen vanaf 1 jaar!</div>
    <div class="theater__tag__title"><span class="theater__tag__title__highlight">K</span>indertheaterfestival</div>
  </div>
  <picture>
          <source class="theater__picture" type="image/webp" srcset="assets/img/header.webp" alt="Spekken"/>
          <img class="theater__picture" src="assets/img/header.jpg" alt="Spekken"/>
  </picture>
  <div class="theater__leftcurtain"></div>
  <div class="theater__rightcurtain"></div>
</header>

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
    <div class="spekken__light"></div>
    <picture>
            <source class="theater__spot" type="image/webp" srcset="assets/img/theaterSpot2.png" alt="theaterspot"/>
            <img class="spekken__spot" src="assets/img/theaterSpot2.png" alt="theaterspot"/>
    </picture>
  </article>
  <div class="spekken__bottomPattern"></div>
</section>

<section class="testt">
  <div class="explore__triangles"></div>
<section class="explore">
  <div class="explore__title"><p><span class="explore__title__highlight">ONTDEK</span> ONZE</p> VOORSTELLINGEN</p></div>
  <a href="index.php?page=index&amp;period=Kerstperiode" class="explore__button--active">Kerstvakantie</a>
  <a href="#" class="explore__button">Paasvakantie</a>
  <div class="explore__events">
    <?php foreach($commingsoon as $event): ?>
      <article class="event">
        <picture>
            <source class="event__picture" type="image/webp" srcset="assets/img/<?php echo $event['id']?>.webp" alt="">
            <img class="event__picture" src="assets/img/<?php echo $event['id']?>.jpg" alt="">
        </picture>
        <div class="event__info">
          <div class="event__info__title"><h2><?php echo $event['title']; ?></h2></header></div>
          <div class="event__info__start"> <?php setlocale(LC_ALL, 'nl_NL'); echo strftime("%a %e %b %Y", strtotime($event['start']))?> </div>
          <div class="event__info__age"><?php echo $event['start_age'];?> - <?php echo $event['end_age']?> jaar</div>
          <?php echo '<a class="event__info__more" href=index.php?page=detail&id=' . $event['id'] . '>' ?>Lees meer &#160; &#160; &#160; &#160; &#160; &#160;</a>
        </div>
    </article>
    <?php endforeach; ?>
  </div>
  <a class="explore__more" href="index.php?page=program">En nog<br> <span class="explore__more__highlight">veel meer</span></a>
</section>
</section>

<section class="creative">
  <picture>
      <source class="creative__picture" type="image/webp" srcset="assets/img/creative.webp" alt="knutselen">
      <img class="creative__picture" src="assets/img/creative.png" alt="knutselen">
  </picture>
  <div class="creative__info">
    <p class="creative__info__title">Creatief</p>
    <p class="creative__info__text">Het binnenplein van de Tinnenpot wordt omgetoverd in
      een <span class="creative__info__text__highlight">knutsel- en spelparadijs</span>.
      En dat allemaal gratis elke dag tussen <span class="creative__info__text__highlight">
      11u00 en 17u00</span>.</p>
  </div>
</section>


<section class="newscontainer">
  <div class="newswrapper">
    <article class="tricks">
      <div class="tricks__title">Tips &amp; Tricks</div>
      <div class="tricks__text">
        <p class="tricks__text__triangle">Ga eerst naar het toilet met de kindjes</p>
        <p class="tricks__text__triangle">Let op de minimum leeftijd!</p>
        <p class="tricks__text__triangle">Neem jongere kindjes op de schoot en zit bij voorkeur dicht bij de uitgang</p>
      </div>
      <div class="tricks__button">Meer tips</div>
    </article>
    <article class="blogs">
      <div class="blogs__title">Blogs</div>
      <div class="blogs__text">Wil jij meer te weten komen over onze voorstellingen? Lees dan zeker onze blogs!</div>
      <div class="blogs__button">Lees Meer</div>
    </article>
  </div>
  <article class="newsletter">
    <div class="newsletter__title">Benieuwd naar de laatste nieuwtjes van Spekken?</div>
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


<svg class="filters">
  <defs>
    <filter id="shake-0">
      <feTurbulence baseFrequency="0.02" numOctaves="3" result="noise" seed="0"/>
      <feDisplacementMap id="displacement" in="SourceGraphic" in2="noise" scale="6" />
    </filter>
    <filter id="shake-1">
      <feTurbulence baseFrequency="0.02" numOctaves="3" result="noise" seed="1"/>
<feDisplacementMap in="SourceGraphic" in2="noise" scale="8" />
    </filter>

    <filter id="shake-2">
      <feTurbulence baseFrequency="0.02" numOctaves="3" result="noise" seed="2"/>
<feDisplacementMap in="SourceGraphic" in2="noise" scale="6" />
    </filter>
    <filter id="shake-3">
      <feTurbulence baseFrequency="0.02" numOctaves="3" result="noise" seed="3"/>
<feDisplacementMap in="SourceGraphic" in2="noise" scale="8" />
    </filter>

    <filter id="shake-4">
      <feTurbulence  baseFrequency="0.02" numOctaves="3" result="noise" seed="4"/>
<feDisplacementMap in="SourceGraphic" in2="noise" scale="6" />
    </filter>
  </defs>
</svg>
