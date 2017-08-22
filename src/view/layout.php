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
        families: ['jaapokki','oxygen:n4,n7'],
        urls: ['/assets/fonts/jaapokki/jaapokki.css', '/assets/fonts/oxygen/oxygen.css']
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
    <div class="container">
      <?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
      <?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>

      <?php echo $content; ?>
    </div>

    <?php echo $js;?>

  </body>
</html>
