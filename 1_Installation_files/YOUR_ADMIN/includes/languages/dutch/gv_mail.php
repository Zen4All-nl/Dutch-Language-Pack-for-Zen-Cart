<?php
/**
 * @ Maintained by Zen4All (https://zen4all.nl)
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 May 12 Modified in v1.5.7 $
 */


require DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . 'gv_name.php';
define('HEADING_TITLE', 'Verzend een ' . TEXT_GV_NAME . ' Aan klanten');

define('TEXT_FROM', 'Van:');
define('TEXT_TO', 'Email naar:');
define('TEXT_TO_CUSTOMERS', 'Naar klantenlijsten:');
define('TEXT_TO_EMAIL', 'of naar een e-mailadres:');
define('TEXT_TO_EMAIL_NAME', 'Naam: (Optioneel):');
define('TEXT_TO_EMAIL_INFO', '<span class="smallText">Kies een lijst uit de bovenstaande vervolgkeuzelijst of gebruik de volgende velden om één e-mail te verzenden.</span>');
define('TEXT_SUBJECT', 'Onderwerp:');
define('TEXT_AMOUNT', TEXT_GV_NAME . ' Waarde:');
define('ERROR_GV_AMOUNT', '<span class="smallText">Voer een getal in met een decimaalpunt voor breuken, bijvoorbeeld: 25,00.</span>');
define('TEXT_AMOUNT_INFO', '<span class="smallText">' . ERROR_GV_AMOUNT . '</span>');
define('TEXT_HTML_MESSAGE', 'HTML<br>Bericht:');
define('TEXT_MESSAGE', 'Alleen-tekstbericht:');
define('TEXT_MESSAGE_INFO', '<p>Voeg optioneel een specifiek bericht toe, ingevoegd vóór de standaard ' TEXT_GV_NAME. ' e-mailtekst.</p>');

define('NOTICE_EMAIL_SENT_TO', 'Opmerking:%1s e-mail(s) verzonden naar%2s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Fout: geen klant geselecteerd.');
define('ERROR_NO_AMOUNT_ENTERED', 'Fout: certificaatwaarde ongeldig.');
define('ERROR_NO_SUBJECT', 'Fout: geen e-mailonderwerp ingevoerd.');

define('TEXT_GV_ANNOUNCE', 'Wij bieden u graag een aan ' . TEXT_GV_NAME. ' voor %s.');
define('TEXT_GV_TO_REDEEM_TEXT', 'Gebruik de volgende link om de ' . TEXT_GV_NAME . "\n\n ". '%1$s%2$s' . "\n\n" . 'of bezoek ' . STORE_NAME . " op " . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . "\n" . 'en voer de code %2$s in op de Checkout-Betaal pagina.');
define('TEXT_GV_TO_REDEEM_HTML', '<a href="%1$s%2$s">Klik hier om de ' . TEXT_GV_NAME . '</a> of bezoek <a href="' . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . '">' . STORE_NAME . '</a> en voer de code <strong>%2$s</strong> in, op de Checkout-Betaal pagina.');

