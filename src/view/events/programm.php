<form action="index.php?page=program" method="post">
  <label for="date">Zoek op datum</label>
  <input type="date" name="date">
  <label for="search">Zoek op naam</label>
  <input type="text" name="search" value="" placeholder="bv. cosy cozy">
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
