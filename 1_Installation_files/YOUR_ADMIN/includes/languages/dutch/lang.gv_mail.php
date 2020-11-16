<?php
/**
 * @ Maintained by Zen4All (https://zen4all.nl)
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:
 */

$define = [
  'HEADING_TITLE' => 'Verzend een ' . '%%TEXT_GV_NAME%%' . ' Aan klanten',
  'TEXT_FROM' => 'Van:',
  'TEXT_TO' => 'Email naar:',
  'TEXT_TO_CUSTOMERS' => 'Naar klantenlijsten:',
  'TEXT_TO_EMAIL' => 'of naar een e-mailadres:',
  'TEXT_TO_EMAIL_NAME' => 'Naam: (Optioneel):',
  'TEXT_TO_EMAIL_INFO' => 'Kies een lijst uit de bovenstaande vervolgkeuzelijst of gebruik de volgende velden om één e-mail te verzenden.',
  'TEXT_SUBJECT' => 'Onderwerp:',
  'TEXT_AMOUNT' => '%%TEXT_GV_NAME%%' . ' Waarde:',
  'ERROR_GV_AMOUNT' => 'Voer een getal in met een decimaalpunt voor breuken, bijvoorbeeld: 25,00.',
  'TEXT_AMOUNT_INFO' => '%%ERROR_GV_AMOUNT%%',
  'TEXT_HTML_MESSAGE' => 'HTML Bericht:',
  'TEXT_MESSAGE' => 'Alleen-tekstbericht:',
  'TEXT_MESSAGE_INFO' => '<p>Voeg optioneel een specifiek bericht toe, ingevoegd vóór de standaard ' .'%%TEXT_GV_NAME%%'. ' e-mailtekst.</p>',
  'NOTICE_EMAIL_SENT_TO' => 'Opmerking:%1s e-mail(s) verzonden naar%2s',
  'ERROR_NO_CUSTOMER_SELECTED' => 'Fout: geen klant geselecteerd.',
  'ERROR_NO_AMOUNT_ENTERED' => 'Fout: certificaatwaarde ongeldig.',
  'ERROR_NO_SUBJECT' => 'Fout: geen e-mailonderwerp ingevoerd.',
  'TEXT_GV_ANNOUNCE' => 'Wij bieden u graag een aan ' . '%%TEXT_GV_NAME%%'. ' voor %s.',
  'TEXT_GV_TO_REDEEM_TEXT' => 'Gebruik de volgende link om de ' . '%%TEXT_GV_NAME%%' . "\n\n ". '%1$s%2$s' . "\n\n" . 'of bezoek ' . STORE_NAME . " op " . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . "\n" . 'en voer de code %2$s in op de Checkout-Betaal pagina.',
  'TEXT_GV_TO_REDEEM_HTML' => '<a href="%1$s%2$s">Klik hier om de ' . '%%TEXT_GV_NAME%%' . '</a> of bezoek <a href="' . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . '">' . STORE_NAME . '</a> en voer de code <strong>%2$s</strong> in, op de Checkout-Betaal pagina.',
];

return $define;
