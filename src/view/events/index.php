
<header class="theater">
  <img class="squiggly2" src="assets/img/light.png" alt="">
  <picture>
          <source class="theater__picture" type="image/webp" srcset="assets/img/header2.jpg" alt="Spekken"/>
          <img class="theater__picture" src="assets/img/header2.jpg" alt="Spekken"/>
  </picture>

  <div class="theater__leftcurtain"></div>
  <div class="theater__rightcurtain"></div>
</div>

<div class="spekken">
  <div class="spekken__topPattern"></div>
  <div class="spekken__bottomPattern"></div>
  <div class="spekken__info containers">
    <div class="spekken__info__title">Kindertheaterfestival </br> Spekken</div>
    <div class="spekken__info__info">
      Twee keer per jaar vullen de zalen van het Tinnenpottheater en het Gravensteen
      te <span class="spekken__info__info__highlight">Gent</span> zich met friemelende en giechelende kinderen, want dan opent namelijk
      het Spekkenfestival zijn deuren. Spekken is een kindertheaterfestival georganiseerd
      door het Tinnenpottheater die kinderen en hun (groot)ouders onderdompelen in de
      wondere wereld van theater. Ze brengt tijdens de <span class="spekken__info__info__highlight">Paas- en Kerstvakantie</span> een rijk
      programma met kleine parels.
    </div>
  </div>
</div>

<section class="explore">
  <div class="explore__title"><p>ONTDEK ONZE</p> VOORSTELLINGEN</p></div>
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


<section class="newscontainer">
  <article class="tricks">


  </article>
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
      <input type="submit" value="ZOEK">
    </form>
  </article>
</section>

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
