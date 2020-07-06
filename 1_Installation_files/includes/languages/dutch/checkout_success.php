<?php
/**
 * @ Maintained by Zen4All (https://zen4all.nl)
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2020 May 27 Modified in v1.5.7 $
 */

define('NAVBAR_TITLE_1', 'Afrekenen');
define('NAVBAR_TITLE_2', 'Succesvol - bedankt');

define('HEADING_TITLE', 'Wij danken u voor uw bestelling en waarderen het door u gestelde vertrouwen!');

define('TEXT_SUCCESS', ''); //hier kunt u tekst kwijt over de levertermijn enz
define('TEXT_NOTIFY_PRODUCTS', 'Houd mij op de hoogte over de zonet aangeschafte artikelen');
// Still used by some older templates
define('TEXT_SEE_ORDERS', 'Uw bestelhistorie kunt u zien door naar <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '" name="linkMyAccount">Mijn account</a> te gaan en vervolgens te klikken op "alle bestellingen weergeven".');
define('TEXT_CONTACT_STORE_OWNER', 'Voor al uw vragen kunt u contact opnemen met onze <a href="' . zen_href_link(FILENAME_CONTACT_US) . '" name="linkContactUs">klantenservice</a>.');
define('TEXT_THANKS_FOR_SHOPPING', 'Hartelijk bedankt voor uw bestelling!');

define('TABLE_HEADING_COMMENTS', '');

define('FOOTER_DOWNLOAD', 'U kunt ook later uw artikel downloaden door naar \'%s\' te gaan.');

define('TEXT_YOUR_ORDER_NUMBER', '<strong>Uw bestelnummer is:</strong> ');

define('TEXT_CHECKOUT_LOGOFF_GUEST', 'NB: Om uw bestelling te ontvangen is een tijdelijk inlog account voor u gemaakt. Als u wil uitloggen klik dan op de knop Uitloggen. Uitloggen zorgt er tevens voor dat uw factuur en aankoopinfo niet zichtbaar is voor de volgende persoon die deze pc gebruikt. Uitloggen is vooral aanbevolen bij het gebruik van een publieke computers zoals in een internetcafé ed. Als u verder wil winkelen, feel free! U kunt ten alle tijde uitloggen door op de link uitloggen te klikken boven aan de site.');
define('TEXT_CHECKOUT_LOGOFF_CUSTOMER', 'Hartelijk bedankt voor uw bestelling! Klik alstublieft op uitloggen om er zeker van te zijn dat uw bestelinfo niet zichtbaar is voor de volgende persoon achter deze computer.');


define('HEADING_ORDER_NUMBER', 'Order #%s');
define('HEADING_ORDER_DATE', 'Besteldatum:');

define('HEADING_DELIVERY_ADDRESS', 'Bezorgadres');
define('HEADING_SHIPPING_METHOD', 'Verzendmethode');

define('HEADING_PRODUCTS', 'Producten');
define('HEADING_TAX', 'Btw');
define('HEADING_TOTAL', 'Totaal');
define('HEADING_QUANTITY', 'Aant.');

define('HEADING_BILLING_ADDRESS', 'Factuuradres');
define('HEADING_PAYMENT_METHOD', 'Betaalmethode');

define('HEADING_ORDER_HISTORY', 'Statushistorie &amp; Opmerkingen');
define('TABLE_HEADING_STATUS_DATE', 'Datum');
define('TABLE_HEADING_STATUS_ORDER_STATUS', 'Orderstatus');
define('TABLE_HEADING_STATUS_COMMENTS', 'Opmerkingen');
define('QUANTITY_SUFFIX', '&nbsp;x  ');
define('ORDER_HEADING_DIVIDER', '&nbsp;-&nbsp;');
