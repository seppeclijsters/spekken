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
        urls: ['assets/fonts/jaapokki/jaapokki.css', 'assets/fonts/oxygen/oxygen.css']
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

      <section class="partners">
        <div class="partners__title">Onze Partners</div>
        <ul class="partners__list">
          <li><a href="http://www.gentsewinterfeesten.be/"><img class="partners__list__logo" src="assets/img/logo1.png" alt="logo gentse winterfeesten"></a></li>
          <li><a href="https://freetime.be/"><img class="partners__list__logo" src="assets/img/logo2.png" alt="logo free time"></a></li>
        </ul>
      </section>

      <footer class="footer">
        <div class="spekken__topPattern"></div>
        <section class="footer__info">
          <div class="footer__info__location">
            <p class="location__highlight">Festivallocatie</p>
            <p>Tinnenpotstraat 21 - Gent</p>
          </div>
          <div class="footer__info__social">
            <p>Volg ons ook op</p>
            <a href="https://www.facebook.com/Spekken/"><div class="footer__info__social__fb"></div></a>
          </div>
        </section>
      </footer>
    </div>

    <?php echo $js;?>

  </body>
</html>
