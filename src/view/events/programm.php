
<section class="flex">
<section class="filter">
  <form class="filter__form" action="index.php?page=program" method="get" id='form'>
    <div class="filter__form__date">
      <!-- <input placeholder="Date" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date"> -->
      <input type="date" name="date" placeholder="Datum">
    </div>
    <div class="filter__form__age">
      <select name="age" id="age">
    						<optgroup>
                  <option value="Leeftijd" disabled selected>Leeftijd</option>
    							<option value="1">1</option>
    							<option value="2">2</option>
                  <option value="3">3</option>
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
    	</select>
    </div>
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
    <!-- <select name="age" id="age">
    <?php
    $ages = ['leeftijd',1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
    $current_age = $_POST['age'];

    foreach($ages as $age) {
        if($age == $current_age) {
            echo '<option value="'.$age.'" selected="selected">'.$age.'</option>';
          } else {
            echo '<option value="'.$age.'">'.$age.'</option>';
        }
    }
    ?>
    </select> -->

    <input type="submit" value="ZOEK">
  </form>

  <!-- <a class="" href=index.php?page=program&age=1<?php
  foreach($chosenAges as $age) {
    echo '&amp;age=' . $age;
  }
   ?>>1</a> -->

  <?php
  $ages = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

  if (!empty($_GET['age'])) {
    $current_age = $_GET['age'];
  }

  foreach($ages as $age) {
      if($age == $current_age) {
          echo '<a class="selected" href="index.php?page=program&amp;age='.$age.'">'.$age.'</a>';
        } else {
          echo '<a href="index.php?page=program&amp;age='.$age.'">'.$age.'</a>';
      }
  }
  ?>

  <?php
  $periods = ["Kerstperiode", "Paasperiode"];
  if (!empty($_GET['period'])) {
    $current_period = $_GET['period'];
  }

  foreach($periods as $period) {
      if($period == $current_period) {
          echo '<a id="link" class="selected click" href="index.php?page=program&amp;period='.$period.'">'.$period.'</a>';
        } else {
          echo '<a id="link" class="click" href="index.php?page=program&amp;period='.$period.'">'.$period.'</a>';
      }
  }
  ?>


</section>

<section class="programm">
    <?php foreach($events as $event): ?>
    <article class="programm__event">
      <picture>
          <source class="programm__event__picture" type="image/webp" srcset="../../assets/img/<?php echo $event['id']?>.jpg" alt="">
          <img class="programm__event__picture" src="../../assets/img/<?php echo $event['id']?>.jpg" alt="">
      </picture>
      <div class="programm__event__title"><h2><?php echo $event['title']; ?></h2></header></div>
      <div class="programm__event__start"> <?php echo $event['start'];?> </div>
      <div class="programm__event__age"><?php echo $event['start_age'];?> - <?php echo $event['end_age'];?> jaar</div>
      <?php echo '<a class="" href=index.php?page=detail&id=' . $event['id'] . '>' ?>Meer Info -></a>
    </article>
    <? endforeach;?>
</section>
