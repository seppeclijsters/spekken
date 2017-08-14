<form action="index.php?page=program" method="post">
  <label for="date">Zoek op datum</label>
  <input type="date" name="date">
  <input type="date" name="date">
  <label for="search">Zoek op naam</label>
  <input type="text" name="search" value="" placeholder="bv. cosy cozy">
  <label for="age">Leeftijd</label>
  <!-- <select name="age" id="age">
						<optgroup>
							<option value="1">1</option>
							<option value="2">2</option>
              <option value="3" selected="selected">3</option>
							<option value="4">4</option>
              <option value="5">5</option>
							<option value="6">6</option>
              <option value="7">7</option>
							<option value="8">8</option>
              <option value="9">9</option>
							<option value="10">10</option>
              <option value="11">11</option>
							<option value="12">12</option>
						</optgroup>
	</select> -->
  <label for="period">Periode</label>
  <select name="period" id="period">
  <?php
  $periods = ["Kerstperiode", "Paasperiode"];
  $current_period = $_POST['period'];

  foreach($periods as $period) {
      if($period == $current_period) {
          echo '<option value="'.$period.'" selected="selected">'.$period.'</option>';
        } else {
          echo '<option value="'.$period.'">'.$period.'</option>';
      }
  }
  ?>
  </select>
  <label for="age">Leeftijd</label>
  <select name="age" id="age">
  <?php
  $ages = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
  $current_age = $_POST['age'];

  foreach($ages as $age) {
      if($age == $current_age) {
          echo '<option value="'.$age.'" selected="selected">'.$age.'</option>';
        } else {
          echo '<option value="'.$age.'">'.$age.'</option>';
      }
  }
  ?>
  </select>

  <input type="submit" value="ZOEK">
</form>

<section>
  <div class="programm">
    <?php foreach($events as $event): ?>
    <article class="programm__event">
      <picture>
          <source class="event__picture" type="image/webp" src="../../assets/img/<?php echo $event['id']?>.jpg" alt="">
          <img class="event__picture" src="../../assets/img/<?php echo $event['id']?>.jpg" alt="">
      </picture>
      <div class="event__title"><h2><?php echo $event['title']; ?></h2></header></div>
      <div class="event__start"> <?php echo $event['start'];?> </div>
      <div class="event__age"><?php echo $event['start_age'];?> - <?php echo $event['end_age'];?> jaar</div>
      <?php echo '<a class="program_event_extra" href=index.php?page=detail&id=' . $event['id'] . '>' ?>Meer Info -></a>
    </article>
    <? endforeach;?>
  </div>
</section>
