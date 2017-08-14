<p><?php echo $event['title'];?></p>
<p><?php echo $event['description'];?></p>
<p><?php echo $event['end_age'];?></p>





<?php echo '<a class="program_event_extra" href=index.php?page=detail&id=' . ($event['id'] -1). '>' ?><- Vorige</a>
<p><?php echo $eventbefore['title'];?></p>

<?php echo '<a class="program_event_extra" href=index.php?page=detail&id=' . ($event['id'] +1). '>' ?>Volgende -></a>
<p><?php echo $eventafter['title'];?></p>


<div class="eventbefore">
  hello
</div>
<img src="../../assets/img/<?php echo $eventbefore['id']?>.jpg" alt="">

<img src="../../assets/img/<?php echo $eventafter['id']?>.jpg" alt="">
