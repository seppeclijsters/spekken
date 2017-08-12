<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Spekken</title>
    <meta name="author" content="Seppe Clijsters"/>
    <meta name="description" content="Spekken, kindertheaterfestival"/>
    <meta name="keywords" content="Spekken, Gent, kindertheaterfestival, paasvakantie, kerstvakantie"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body>

    <a href="index.php?page=index">Home</a>
    <a href="index.php?page=program">Programma</a>
    <a href="#">Over Spekken</a>
    <a href="#">Tickets</a>

    <div class="container">
      <?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
      <?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>

      <?php echo $content; ?>
    </div>

    <!-- <?php echo $js;?> -->
    <script src="scripts.js"></script>
  </body>
</html>
