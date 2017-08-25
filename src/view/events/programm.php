<nav class="nav">
  <div class="nav__logo">
    <a href="index.php?page=index"><img class="" src="assets/img/logo.png" alt="Logo Spekken"></a>
  </div>
  <ul class="nav__list">
    <a class="nav__list__link" href="index.php?page=index">Home</a>
    <a class="nav__list__link nav__list__link--active" href="index.php?page=program">Programma</a>
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

<section class="flex">
  <section class="filter">
    <div class="filter__age">
      <div class="filter__age__title">Leeftijd:</div>
      <?php
      $ages = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

      if (!empty($_GET['age'])) {
        $current_age = $_GET['age'];
      } else {
        $current_age = 5;
      }

      foreach($ages as $age) {
          if($age == $current_age) {
              echo '<a class="age age--selected" href="index.php?page=program&amp;age='.$age.'"> '.$age.' </a> /';
            } else {
              echo '<a class="age" href="index.php?page=program&amp;age='.$age.'"> '.$age.' </a> /';
          }
      }
      ?>
    </div>
    <div class="filter__period">
      <div class="filter__period__title">Periode:</div>
      <?php
      $periods = ["Kerstperiode", "Paasperiode"];
      if (!empty($_GET['period'])) {
        $current_period = $_GET['period'];
      } else {
        $current_period = "Kerstperiode";
      }

      foreach($periods as $period) {
          if($period == $current_period) {
              echo '<a class="period period--selected" href="index.php?page=program&amp;period='.$period.'">'.$period.'</a> /';
            } else {
              echo '<a class="period" href="index.php?page=program&amp;period='.$period.'">'.$period.'</a> /';
          }
      }
      ?>
    </div>
  </section>
  <section class="programm">
      <?php foreach($events as $event): ?>
      <article class="programm__event">
        <picture>
            <source class="programm__event__picture" type="image/webp" srcset="assets/img/<?php echo $event['id']?>.webp" alt="event picture">
            <img class="programm__event__picture" src="assets/img/<?php echo $event['id']?>.jpg" alt="event picture">
        </picture>
        <div class="programm__event__title"><h2><?php echo $event['title']; ?></h2></header></div>
        <div class="programm__event__flex">
        <div class="programm__event__start"> <?php setlocale(LC_ALL, 'nl_NL'); echo strftime("%a %e %b %Y", strtotime($event['start']))?> </div>
        <div class="programm__event__age"><?php echo $event['start_age'];?>-<?php echo $event['end_age'];?> jaar</div>
        </div>
        <?php echo '<a class="programm__event__more" href=index.php?page=detail&id=' . $event['id'] . '>' ?>Lees Meer</a>
      </article>
      <?php endforeach; ?>
  </section>
  </section>
