<div class="detail detail--container">
  <div class="detail__title"><?php echo $event['title'];?></div>
  <picture>
      <source class="detail__picture" type="image/webp" src="../../assets/img/<?php echo $event['id']?>.jpg" alt="">
      <img class="detail__picture" src="../../assets/img/<?php echo $event['id']?>.jpg" width="100%" height="auto" alt="">
  </picture>
  <div class="detail__description"><?php echo $event['description'];?></div>
  <div class="detail__information">
    <div class="detail__information__age">
      <p class="detail__information__age__icon">icon</p>
      <div class="detail__information__age__number"><?php echo $event['start_age'];?> tot <?php echo $event['end_age']?> jaar</div>
    </div>
    <div class="detail__information__location">
      <p class="detail__information__location__icon">icon</p>
      <div class="detail__information__location__loc">11</div>
    </div>
    <div class="detail__information__date">
      <p class="detail__information__date__icon">icon</p>
      <div class="detail__information__date">
        <?php setlocale(LC_ALL, 'nl_NL'); echo strftime("%A %e %B %Y", strtotime($event['start']))?>om
        <?php setlocale(LC_ALL, 'nl_NL'); echo strftime("%H", strtotime($event['start']));?> uur
      </div>
    </div>
  </div>
</div>

<?php echo '<a class="button button--back" href=index.php?page=detail&id=' . ($event['id'] -1). '>' ?><</a>
<p><?php echo $eventbefore['title'];?></p>

<?php echo '<a class="button button--next" href=index.php?page=detail&id=' . ($event['id'] +1). '>' ?>></a>
<p><?php echo $eventafter['title'];?></p>

<div class="smaakmakers">
  <div class="smaakmakers__title"><p>nog meer</p><p class="smaakmakers__title__highlight">smaakmakers</p></div>
  <div class="smaakmakers__flex">
    <?php echo '<a class="smaakmakers__eventbefore" href=index.php?page=detail&id=' . ($event['id'] -1). '>' ?>
      <picture>
          <source class="smaakmakers__eventbefore__picture" type="image/webp" srcset="../../assets/img/<?php echo $eventbefore['id']?>.jpg" alt="">
          <img class="smaakmakers__eventbefore__picture" src="../../assets/img/<?php echo $eventbefore['id']?>.jpg" alt="">
      </picture>
    </a>
    <div class="smaakmakers__programm">Programma</div>
    <?php echo '<a class="smaakmakers__eventafter" href=index.php?page=detail&id=' . ($event['id'] +1). '>' ?>
      <picture>
          <source class="smaakmakers__eventafter__picture" type="image/webp" srcset="../../assets/img/<?php echo $eventafter['id']?>.jpg" alt="">
          <img class="smaakmakers__eventafter__picture" src="../../assets/img/<?php echo $eventafter['id']?>.jpg" alt="">
      </picture>
    </a>
  </div>
</div>
