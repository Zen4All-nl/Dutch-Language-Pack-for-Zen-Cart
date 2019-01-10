<?php
/**
 * @package admin
 * @ Maintained by Zen4All (https://zen4all.nl)
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Drbyte Wed Aug 2 14:55:16 2017 -0400 Modified in v1.5.6 $
 */

define('TOP_BAR_TITLE', 'Statistieken');
define('HEADING_TITLE', 'Kortingsbonnen');
define('HEADING_TITLE_STATUS', 'Status: ');
define('TEXT_CUSTOMER', 'Klant:');
define('TEXT_COUPON', 'Naam kortingsbon');
define('TEXT_COUPON_ALL', 'Alle kortingsbonnen');
define('TEXT_COUPON_ACTIVE', 'Actieve kortingsbonnen');
define('TEXT_COUPON_INACTIVE', 'Inactieve kortingsbonnen');
define('TEXT_SUBJECT', 'Onderwerp:');
define('TEXT_UNLIMITED', 'Onbeperkt');
define('TEXT_FROM', 'Van:');
define('TEXT_FREE_SHIPPING', 'Gratis verzenden');
define('TEXT_MESSAGE', 'Boodschap:');
define('TEXT_RICH_TEXT_MESSAGE','Rich-Text boodschap:');
define('TEXT_SELECT_CUSTOMER', 'Selecteer klant(en)');
define('TEXT_ALL_CUSTOMERS', 'Alle klanten');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Alle nieuwsbriefontvangers');
define('TEXT_CONFIRM_DELETE', 'Weet je zeker dat je deze kortingsbon wilt verwijderen?');
define('TEXT_SEE_RESTRICT', 'Voor deze kortingsbon gelden beperkingen');

define('TEXT_COUPON_ANNOUNCE','Het doet ons een genoegen u een kortingsbon voor ' . STORE_NAME . ' aan te kunnen bieden.');

define('TEXT_TO_REDEEM', 'U kunt het tegoed van deze kortingsbon inwisselen tijdens het afrekenen in onze winkel. U hoeft alleen de inwisselcode in te voeren in het veld dat daarvoor beschikbaar is en vervolgens op de knop "Volgende" te drukken. Uw tegoed wordt bijgeschreven in uw Account en is direct beschikbaar om te gebruiken.');
define('TEXT_IN_CASE', ' in het geval u problemen heeft. ');
define('TEXT_VOUCHER_IS', 'De inwisselcode van de kortingsbon is ');
define('TEXT_REMEMBER', 'Wilt u er voor zorgen dat u de inwisselcode van uw kortingsbon veilig opslaat? Alleen dan kunt u profiteren van deze speciale aanbieding op ieder door u gewenst moment.');
define('TEXT_VISIT', 'Bezoek onze winkel op %s');
define('TEXT_ENTER_CODE', ' en vul de inwisselcode in ');
define('TEXT_COUPON_HELP_DATE', '<p>De kortingsbon is geldig tussen %s en %s</p>');
define('HTML_COUPON_HELP_DATE', '<p>De kortingsbon is geldig tussen %s en %s</p>');

define('TABLE_HEADING_ACTION', 'Actie');

define('CUSTOMER_ID', 'Klant ID');
define('CUSTOMER_NAME', 'Klantnaam');
define('REDEEM_DATE', 'Datum ingewisseld');
define('IP_ADDRESS', 'IP adres');

define('TEXT_REDEMPTIONS', 'Aantal keer inwisselen kortingsbonnen');
define('TEXT_REDEMPTIONS_TOTAL', 'Totaal');
define('TEXT_REDEMPTIONS_CUSTOMER', 'Door deze klant');
define('TEXT_NO_FREE_SHIPPING', 'Geen gratis verzending');

define('NOTICE_EMAIL_SENT_TO', 'Opmerking: e-mail verstuurd aan: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Foutmelding: geen klant geselecteerd.');
define('ERROR_NO_SUBJECT', 'Foutmelding: geen onderwerp ingevuld.');

define('COUPON_NAME', 'Naam kortingsbon:');
//define('COUPON_VALUE', 'Coupon Waarde');
define('COUPON_AMOUNT', 'Waarde kortingsbon:');

define('TEXT_COUPON_PRODUCT_COUNT_PER_ORDER', 'Per Order');
define('TEXT_COUPON_PRODUCT_COUNT_PER_PRODUCT', 'Per in aanmerking komend Item');
define('COUPON_CODE', 'Inwisselcode kortingsbon:');
define('COUPON_STARTDATE', 'Startdatum:');
define('COUPON_FINISHDATE', 'Vervaldatum:');
define('COUPON_RESTRICTIONS', 'Restricties');
define('COUPON_FREE_SHIP', 'Gratis verzenden:');
define('COUPON_DESC', 'Beschrijving kortingsbon:<br />(Is zichtbaar voor klant)');
define('COUPON_MIN_ORDER', 'Minimale bestelwaarde kortingsbon:');

define('COUPON_TOTAL', 'Coupon Minimum berekend vanaf: ');
define('TEXT_COUPON_TOTAL_PRODUCTS', 'Toegestane produkten');
define('TEXT_COUPON_TOTAL_PRODUCTS_BASED', '<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Gebasseerd op Totaal van teogestane produkten volgens Coupon Restrictie Regels)');
define('TEXT_COUPON_TOTAL_ORDER', 'Alle Produkten');
define('TEXT_COUPON_TOTAL_ORDER_BASED', '<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Gebasseerd op het Voledige Order Totaal van Alle Produkten Ongeacht of ze in aanmerking komen voor de Coupon Restricties)');

define('COUPON_USES_COUPON', 'Maximum aantal keer gebruik kortingsbon:');
define('COUPON_USES_USER', 'Maximum aantal keer gebruik kortingsbon per klant:');
define('COUPON_PRODUCTS', 'Geldige artikellijst');
define('COUPON_CATEGORIES', 'Geldige categorielijst');
define('VOUCHER_NUMBER_USED', 'Gebruikt nummer');
define('DATE_CREATED', 'Datum toegevoegd');
define('DATE_MODIFIED', 'Datum laatste wijziging');
define('TEXT_HEADING_NEW_COUPON', 'Maak nieuwe kortingsbon');
define('TEXT_NEW_INTRO', 'Voer de nieuwe kortingsbon in met alle relevante gegevens<br />');
define('COUPON_ZONE_RESTRICTION', 'Coupon Zone Restrictie: ');
define('TEXT_COUPON_ZONE_RESTRICTION', 'Coupon Zone Restrictie is een optie.');
define('COUPON_ORDER_LIMIT', 'De vorige bestellingen van deze klant zijn minder dan: ');
define('COUPON_ORDER_LIMIT_HELP', 'De vorige bestellingen van de klant moeten minder zijn dan, laat leeg voor ongelimiteerd');

define('COUPON_IS_VALID_FOR_SALES', 'Coupon geldig voor uitverkoop:');
define('TEXT_COUPON_IS_VALID_FOR_SALES', 'Coupon IS toegestaan voor produkten in de aanbieding');
define('TEXT_COUPON_IS_VALID_FOR_SALES_EMAIL', 'Coupon is geldig voor produkten in de aanbieding');
define('TEXT_NO_COUPON_IS_VALID_FOR_SALES', 'Coupon NIET toegestaan voor produkten in de aanbieding');
define('TEXT_NO_COUPON_IS_VALID_FOR_SALES_EMAIL', 'Coupon is niet geldig voor produkten in de aanbieding');


define('ERROR_NO_COUPON_AMOUNT', 'Geen waarde van de kortingsbon ingevuld.');
define('ERROR_NO_COUPON_NAME', 'Geen naam van de kortingsbon ingevuld.');
define('ERROR_COUPON_EXISTS', 'Een kortingsbon met die code bestaat al.');


define('COUPON_NAME_HELP', 'Een korte naam voor de kortingsbon (bijv. NK1eB= NieuweKlant1eBezoek).');
define('COUPON_AMOUNT_HELP', 'De korting die deze bon geeft. Dit kan een vast bedrag zijn (bijv. &euro;5) of percentage (bijv. 3%) op het eindbedrag.');
define('COUPON_CODE_HELP', 'Indien niets ingevuld wordt er automatisch een code voor de kortingsbon aangemaakt en anders kun je zelf een code samenstellen.');
define('COUPON_STARTDATE_HELP', 'Deze coupon is geldig vanaf');
define('COUPON_FINISHDATE_HELP', 'Deze coupon verloopt op');
define('COUPON_FREE_SHIP_HELP', 'De kortingsbon geeft recht op <strong>gratis</strong> verzenden. <strong>Opmerking:</strong> dit gaat voor de waarde ingevuld bij COUPON_AMOUNT maar houd wel rekening met de minimale waarde van een bestelling.');
define('COUPON_DESC_HELP', 'Een beschrijving van de kortingsbon als uitleg voor de klant.');
define('COUPON_MIN_ORDER_HELP', 'Minimum waarde van de bestelling voordat de kortingsbon geldig is en gebruikt kan worden (bijv. vanaf €50 bestelling excl. verzenden en BTW.)');
define('COUPON_TOTAL_HELP', 'Als je een minimum order grootte voor deze Kortingsbon specificeert,wil je dan dat de minimale hoeveelheid is gebasseerd op teogestane produkten volgens de Coupon Restrictie Regels of voor volledig order totaal,bij het bepalen of de Coupon minimale order is gehaald?<br />OPMERKING: Volledig Order Totaal betekend dat op zijn minst 1 van de in aanmerking komende produketen met restrictie in de winkelwagen aanwezigen moet zijn, om de kortingsbon te laten werken.');
define('COUPON_USES_COUPON_HELP', 'Het aantal keer dat de kortingsbon gebruikt kan worden door iedereen. Indien niet ingevuld is dit onbeperkt.');
define('COUPON_USES_USER_HELP', 'Het aantal keer dat de kortingsbon door <strong>één klant</strong> kan worden gebruikt. Indien niet ingevuld is dit onbeperkt.');
define('COUPON_PRODUCTS_HELP', 'Een comma separated (.csv) lijst met artikelen waar deze kortingsbon geldig voor is. Indien niet ingevuld is dit onbeperkt.');
define('COUPON_CATEGORIES_HELP', 'Een comma separated (.csv) lijst met categorieën waar deze kortingsbon geldig voor is. Indien niet ingevuld is dit onbeperkt.');
define('COUPON_BUTTON_PREVIEW', 'Voorvertoning');
define('COUPON_BUTTON_CONFIRM', 'Bevestig');
define('COUPON_BUTTON_BACK', 'Terug');

define('COUPON_ACTIVE', 'Status');
define('COUPON_START_DATE', 'Startdatum');
define('COUPON_EXPIRE_DATE', 'Vervaldatum');

define('TEXT_INFO_DUPLICATE_MANAGEMENT', '<strong>Meerdere Kortingsbonnen Management</strong><br /><br />Klik op de Kortingsbon waarop de wijzigingen gebasseerd worden<br />of gebruik de geselecteerde Basis bon code: <strong>%s</strong>');
define('ERROR_DISCOUNT_COUPON_WELCOME', 'De kortingsbon kan NIET ingetrokken worden. Deze kortingsbon is de Welkomst-kortingsbon<br /><br />Verander eerst de Welkomst-kortingsbon, probeer het dan opnieuw.');
define('SUCCESS_COUPON_DISABLED', 'Uitgevoerd! Kortingsbon is inactief ...');
define('TEXT_COUPON_NEW', 'Gebruik de NIEUWE kortingsbon-code:');
define('ERROR_DISCOUNT_COUPON_DUPLICATE', 'WAARSCHUWING! Duplicaat kortingsbon bestaat ... Kopieren niet uitgevoerd voor kortingsbon-code: ');
define('TEXT_CONFIRM_COPY', 'Weet u zeker dat u deze kortingsbonwenst te kopieren naar een andere kortingsbon?');
define('SUCCESS_COUPON_DUPLICATE', 'Uitgevoerd! Kortingsbon is gekopieerd...<br /><br />Controleer de kortingsbon-NAAM en geldigheidsdata ...');
define('WARNING_COUPON_DUPLICATE', 'Waarschuwing! Er zijn geen kortingsbonnen aangemaakt! Er is niet aangegeven hoeveel kortingsbonnen er gemaakt moesten worden ... ');

define('TEXT_COUPON_COPY_INFO', 'Copy for multiple duplicates');
define('TEXT_COUPON_COPY_DUPLICATE', 'Create Multiple Coupons with Base Coupon Code of: ');
define('TEXT_COUPON_COPY_DUPLICATE_CNT', 'How many duplicate Discount Coupons do you want to create? ');

define('TEXT_CONFIRM_DELETE_DUPLICATE', 'Delete all matching Discount Coupons based on the Base coupon code<br />Example: <strong>%s</strong> would delete all Discount Coupons codes starting with: <strong>%s</strong>');
define('TEXT_COUPON_DELETE_DUPLICATE', 'Delete all Discount Coupons matching base code: ');

define('TEXT_DISCOUNT_COUPON_EMAIL', 'Kortingsbonnen mailen');
define('TEXT_DISCOUNT_COUPON_CONFIRM_DELETE', 'Bevestig verwijderen kortingsbon');
define('TEXT_DISCOUNT_COUPON_CONFIRM_RESTORE', 'Bevestig herstellen kortingsbon');

define('TEXT_DISCOUNT_COUPON_EDIT', 'Kortingsbon aanpassen');
define('TEXT_DISCOUNT_COUPON_DELETE', 'Kortingsbon verwijderen');
define('TEXT_DISCOUNT_COUPON_RESTORE', 'Kortingsbon herstellen');
define('TEXT_DISCOUNT_COUPON_RESTRICT', 'Beperk kortingsbon');
define('TEXT_DISCOUNT_COUPON_REPORT', 'Kortingsbon rapport');
define('TEXT_DISCOUNT_COUPON_COPY', 'Kortingsbon kopieëren');
define('TEXT_DISCOUNT_COUPON_COPY_MULTIPLE', 'Kopieer meerdere kortingsbonnen');
define('TEXT_DISCOUNT_COUPON_DELETE_MULTIPLE', 'Verwijdere meerdere kortingsbonnen');
define('TEXT_DISCOUNT_COUPON_REPORT_MULTIPLE', 'Multiple Discount Coupons Report');
define('TEXT_DISCOUNT_COUPON_DOWNLOAD', 'Download meerdere bon codes');
define('REDEEM_ORDER_ID', 'Order #');
define('SUCCESS_COUPON_REACTIVATE', 'Succesvol geheractiveerd');
define('TEXT_CONFIRM_REACTIVATE', 'Weet he zeker dat je deze bon wilt herstellen?<br />OPMERKING: HErstellen heeft geen effect op begin/eind datums.<br />Herstellen heeft geen effect op beperkingen op het per bon/gebruikper klant als deze al geind is.');

define('SUCCESS_COUPON_FOUND', 'Kortingsbon gevonden!');
define('ERROR_COUPON_NOT_FOUND', 'Kortingsbon niet gevonden!');
define('ERROR_NO_COUPON_CODE', 'Kortingsbon boncode niet ingevoerd!');
