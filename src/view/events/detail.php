<nav class="nav">
  <div class="nav__logo">
    <a href="index.php?page=index"><img class="" src="assets/img/logo.png" alt="Logo Spekken"></a>
  </div>
  <ul class="nav__list">
    <a class="nav__list__link" href="index.php?page=index">Home</a>
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

<div class="detail detail--container">
  <div class="detail__title"><?php echo $event['title'];?></div>
  <picture>
      <source class="detail__picture" type="image/webp" srcset="assets/img/<?php echo $event['id']?>.webp" alt="event picture">
      <img class="detail__picture" src="assets/img/<?php echo $event['id']?>.jpg" width="100%" height="auto" alt="event picture">
  </picture>
  <div class="detail__information">
    <div class="detail__information__date">
      <p class="detail__information__date__icon">Datum en uur</p>
      <div class="detail__information__date__hour">
        <?php setlocale(LC_ALL, 'nl_NL'); echo strftime("%a %e %b %Y", strtotime($event['start']))?> om
        <?php setlocale(LC_ALL, 'nl_NL'); echo strftime("%H", strtotime($event['start']));?> uur
      </div>
    </div>
    <div class="detail__information__location">
      <p class="detail__information__location__icon">Plaats</p>
      <div class="detail__information__location__loc"><?php echo $location['name'];?></div>
    </div>
    <div class="detail__information__age">
      <p class="detail__information__age__icon">Leeftijd</p>
      <div class="detail__information__age__number"><?php echo $event['start_age'];?> tot <?php echo $event['end_age']?> jaar</div>
    </div>
    <div class="detail__information__tickets">Koop tickets</div>
  </div>
  <div class="detail__descriptions">
    <div class="detail__description"><?php echo $event['description'];?></div>
    <div class="detail__social">Ik ben aanwezig</div>
  </div>
</div>

<?php echo '<a class="button button--back" href=index.php?page=detail&id=' . ($event['id'] -1). '>' ?><</a>

<?php echo '<a class="button button--next" href=index.php?page=detail&id=' . ($event['id'] +1). '>' ?>></a>

<div class="smaakmakers">
  <div class="smaakmakers__title"><p>nog meer</p><p class="smaakmakers__title__highlight">smaakmakers</p></div>
  <div class="smaakmakers__flex">
    <?php echo '<a class="smaakmakers__eventbefore" href=index.php?page=detail&id=' . ($event['id'] -1). '>' ?>
      <picture>
          <source class="smaakmakers__eventbefore__picture" type="image/webp" srcset="assets/img/<?php echo $eventbefore['id']?>.webp" alt="eventbefore">
          <img class="smaakmakers__eventbefore__picture" src="assets/img/<?php echo $eventbefore['id']?>.jpg" alt="eventbefore">
      </picture>
    </a>
    <a href="index.php?page=program" class="smaakmakers__programm">Programma</a>
    <?php echo '<a class="smaakmakers__eventafter" href=index.php?page=detail&id=' . ($event['id'] +1). '>' ?>
      <picture>
          <source class="smaakmakers__eventafter__picture" type="image/webp" srcset="assets/img/<?php echo $eventafter['id']?>.webp" alt="eventafter">
          <img class="smaakmakers__eventafter__picture" src="assets/img/<?php echo $eventafter['id']?>.jpg" alt="eventafter">
      </picture>
    </a>
  </div>
</div>
