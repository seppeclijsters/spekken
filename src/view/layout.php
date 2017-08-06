<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Spekken</title>
    <?php echo $css;?>
  </head>
  <body>

    <a href="index.php?page=index">Home</a>
    <a href="index.php?page=program">Programma</a>

    <div class="container">
      <?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
      <?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>

      <?php echo $content; ?>
    </div>

    <?php echo $js;?>
  </body>
</html>
