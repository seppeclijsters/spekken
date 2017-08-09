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
  <h1>Events</h1>
  <?php foreach($events as $event): ?>
    <article>
      <header><h2><?php echo $event['title']; ?></h2></header>
      <dl>
        <dt>start</dt><dd><?php echo $event['start'];?></dd>
        <dt>leeftijd</dt><dd><?php echo $event['start_age'];?> - <?php echo $event['end_age'];?> jaar</dd>
        <dt>performer</dt><dd><?php echo $event['performer'];?></dd>
        <dt>title</dt><dd><?php echo $event['title'];?></dd>
        <dt>location</dt><dd><?php echo $event['location'];?></dd>
        <dt>tags</dt><dd><ul><?php foreach($event['tags'] as $tag): ?><li><?php echo $tag['tag'];?></li><?php endforeach;?></ul></dd>
        <dt>description</dt><dd><pre><?php echo $event['description'];?></pre></dd>
        <?php echo '<a class="program_event_extra" href=index.php?page=detail&id=' . $event['id'] . '>' ?>Meer Info -></a>
      </dl>
    </article>
  <? endforeach;?>
</section>
