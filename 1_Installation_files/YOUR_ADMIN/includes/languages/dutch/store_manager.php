<?php
/**
 * @ Maintained by Zen4All (https://zen4all.nl)
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 08 Modified in v1.5.7 $
 */

  define('HEADING_TITLE', 'Winkelmanager');
  define('TABLE_CONFIGURATION_TABLE', 'Zoek CONSTANT definities');

  define('SUCCESS_PRODUCT_UPDATE_SORT_ALL', 'De volgorde van rangschikken voor opties is <strong>met succes</strong> gewijzigd.');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', 'De sorteervolgorde van de artikelprijzen is <strong>met succes</strong> gewijzigd');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED', 'Bekeken artikelen <strong>met succes</strong> gewijzigd naar 0');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED', 'Bestelde artikelen <strong>met succes</strong> gewijzigd naar 0');
  define('SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID', 'Alle hoofdcategorieën van gekoppelde artikelen zijn <strong>met succes</strong> ingesteld.');
  define('SUCCESS_UPDATE_COUNTER', 'De teller is <strong>met succes</strong> gewijzigd naar: ');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Foutmelding:</strong> er zijn geen overeenkomstige "configuration keys" gevonden voor ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Foutmelding:</strong> er is geen "configuration key" of tekst ingevuld om naar te zoeken... het zoeken is afgebroken.');

  define('TEXT_INFO_COUNTER_UPDATE', '<strong>Wijzig teller</strong><br />naar een nieuwe waarde: ');
  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Wijzig de sorteervolgorde van de prijzen voor	alle artikelen</strong><br />mogelijkheid tot sorteren op getoonde prijzen: ');
  define('TEXT_INFO_PRODUCTS_VIEWED_UPDATE', '<strong>Stel de waarde in voor alle bekeken artikelen</strong><br />waarde wordt weer 0 ');
  define('TEXT_INFO_PRODUCTS_ORDERED_UPDATE', '<strong>Stel de waarde in voor alle bestelde artikelen</strong><br />waarde wordt weer 0 ');
  define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE', '<strong>Stel voor alle artikelen de hoofdcategorie ID in</strong><br />te gebruiken voor gekoppelde artikelen en prijzen ');

  define('TEXT_NEW_ORDERS_ID', 'Nieuwe bestelling ID');
  define('TEXT_INFO_SET_NEXT_ORDER_NUMBER', '<strong>Pas het volgende ordernummer aan</strong><br />Opmerking: Je kant het ordernummer niet een lagere waarde geven dan een bestaande order in de database.');
  define('TEXT_MSG_NEXT_ORDER', 'Het volgende ordernummer is op %s gezet');
  define('TEXT_MSG_NEXT_ORDER_MAX', 'Vanwege al bestaande orderdata, is op dit moment het volgende ordernummer: %s');
  define('TEXT_MSG_NEXT_ORDER_TOO_LARGE', 'Vanwege database beperkingen, kun je het volgende ordernummer niet hoger zetten dan 2000000000. Kies alstublieft een lagere waarde.');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Zoek <u>CONSTANTS</u> of taal gerelateerde <u>defines</u></strong>');
  define('TEXT_CONFIGURATION_KEY', 'Key of Naam:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>Opmerking:</strong> ONSTANTS worden in hoofdletters geschreven.<br />Zoeken in taalbestanden kan een alternatief zijn wanneer er niks wordt gevonden in de database tabellen.');

  define('TABLE_TITLE_KEY', '<strong>Sleutelwaarde:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Titel:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Beschrijving:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Groep:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Waarde:</strong>');

  define('TEXT_LANGUAGE_LOOKUPS', 'Kies taal bestand(en) om in te zoeken:');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Alle taalbestanden voor ' . strtoupper($_SESSION['language']) . ' - Catalog/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Alle taalbestanden - Catalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /dutch.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Alle bestanden standaard taal - Catalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Alle taalbestanden - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /dutch.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Alle bestanden standaard taal - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Alle huidig geselecteerde taal bestanden - Catalog/Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','Geen wijziging beschikbaar');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' of, VERBORGEN');

  define('TEXT_INFO_DATABASE_OPTIMIZE', '<strong>Optimaliseer de Database</strong> om ongebruikte ruimte van verwijderde records vrij te maken.<br />Optioneel draai maandelijks of weekelijks deze optimalisatie op een drukke database.<br />(Het beste om dit uit te voeren als het minder druk is.)');
  define('TEXT_INFO_OPTIMIZING_DATABASE_TABLES', 'Database tabel optimimalisatie wordt uitgevoerd. Dit kan enkele minuten duren. Even geduld. Het voorgaande menu zal weer verschijnen als de bewerking klaar is ... ');
  define('SUCCESS_DB_OPTIMIZE', 'Database Optimalisatie - Tabellen verwerkt: ');

  define('TEXT_INFO_PURGE_DEBUG_LOG_FILES', '<strong>Debug Log Files opschonen</strong><br /><strong>Let op: </strong>Zen Cart slaat PHP foutmeldingen op voor debugging doeleinden en veel betaalmethodes kunnen ingesteld worden om debug data op te slaan, om diagnoses te kunnen doen in geval van communicatie problemen. <br />Door op bijwerken te klikken zullen alle debug logs, betreffende PHP fouten en betaal modules, permanent verwijdert worden uit de /logs/ folder.');
  define('SUCCESS_CLEAN_DEBUG_FILES', 'Debug Log Files opgeschoond');
