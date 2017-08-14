<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Spekken</title>
    <meta name="author" content="Seppe Clijsters"/>
    <meta name="description" content="Spekken, kindertheaterfestival"/>
    <meta name="keywords" content="Spekken, Gent, kindertheaterfestival, paasvakantie, kerstvakantie"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php echo $css;?>

    <script type="text/javascript">

    WebFontConfig = {
      custom: {
        families: ['jaapokki'],
        urls: ['/assets/fonts/jaapokki/jaapokki.css']
      }
    };

    (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
        '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
  </script>


  </head>
  <body>
    <nav class="nav">
      <div class="nav__logo">HALLO</div>
      <div class="nav__list">
        <a class="nav__list__link" href="index.php?page=index">Home</a>
        <a class="nav__list__link" href="index.php?page=program">Programma</a>
        <a class="nav__list__link" href="#">Over Spekken</a>
        <a class="nav__list__link" href="#">Tickets</a>
      </div>
    </nav>


    <div class="container">
      <?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
      <?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>

      <?php echo $content; ?>
    </div>

    <?php echo $js;?>

  </body>
</html>
