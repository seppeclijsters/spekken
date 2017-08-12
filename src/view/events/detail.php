<p><?php echo $event['title'];?></p>
<p><?php echo $event['description'];?></p>
<p><?php echo $event['end_age'];?></p>




<?php echo '<a class="program_event_extra" href=index.php?page=detail&id=' . ($event['id'] -1). '>' ?><- Vorige</a>

<?php echo '<a class="program_event_extra" href=index.php?page=detail&id=' . ($event['id'] +1). '>' ?>Volgende -></a>
