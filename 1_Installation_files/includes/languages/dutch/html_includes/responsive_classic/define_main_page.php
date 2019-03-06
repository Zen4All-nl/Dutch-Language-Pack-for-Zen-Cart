<?php if ( $detect->isMobile() && !$detect->isTablet() || $_SESSION['layoutType'] == 'mobile' ) { ?>

<a href="http://www.zen-cart.com/book"><img src="includes/templates/responsive_classic/images/zencart-book-mobile.png" alt="koop vandaag nog deze engelstalige handleiding" title="Heb jij hem al? Reeds 1000en Zen Cart gebruikers hebben deze gebruikershandleiding gekocht! Koop ook de enige uitgebreide Zen Cart gebruikershandleiding!" class="home-image" /></a>
  
<?php  } else if ( $detect->isTablet() || $_SESSION['layoutType'] == 'tablet' ){ ?>

<a href="http://www.zen-cart.com/book"><img src="includes/templates/responsive_classic/images/zencart-book.png" alt="koop vandaag nog deze engelstalige handleiding" title="Heb jij hem al? Reeds 1000en Zen Cart gebruikers hebben deze gebruikershandleiding gekocht! Koop ook de enige uitgebreide Zen Cart gebruikershandleiding!" class="home-image" /></a>

<?php  } else if ( $_SESSION['layoutType'] == 'full' ) { ?>

<a href="http://www.zen-cart.com/book"><img src="includes/templates/responsive_classic/images/zencart-book.png" alt="koop vandaag nog deze engelstalige handleiding" title="Heb jij hem al? Reeds 1000en Zen Cart gebruikers hebben deze gebruikershandleiding gekocht! Koop ook de enige uitgebreide Zen Cart gebruikershandleiding!" class="home-image" /></a>

<?php  } else { ?>

<a href="http://www.zen-cart.com/book"><img src="includes/templates/responsive_classic/images/zencart-book.png" alt="koop vandaag nog deze engelstalige handleiding" title="Heb jij hem al? Reeds 1000en Zen Cart gebruikers hebben deze gebruikershandleiding gekocht! Koop ook de enige uitgebreide Zen Cart gebruikershandleiding!" class="home-image" /></a>

<?php  } ?>
<p class="biggerText">Dit template maakt gebruik van PHP Mobile Detect om een geoptimaliseerde inhoud te tonen gebasseerd op het apparaat dat wordt gebruikt.  
    Als je vanaf een Desktop kijkt en de Tablet layout wilt bekijken, <a class="red" href="index.php?main_page=index&amp;layoutType=tablet">use this link.</a>  
    Als je de layout voor een mobiele telefoon wilt zien, <a class="red" href="index.php?main_page=index&amp;layoutType=mobile">gebruik deze link.</a>  
    Om terug te gaan naar Desktop, <a class="red" href="index.php?main_page=index&amp;layoutType=default">gebruik deze link.</a></p>
    
<p>Dit bestand staat in: <code> /languages/dutch/html_includes/YOUR_TEMPLATE/define_main_page.php</code></p>
<p>Je kunt de inhoud snel aanpassen via Admin->Tools->Define Pages Editor, en kies define_main_page in het pulldown menu.</p>
<p><strong>NB: Maak altijd een reservekopie van<code> /languages/dutch/html_includes/your_template</code></strong></p>
