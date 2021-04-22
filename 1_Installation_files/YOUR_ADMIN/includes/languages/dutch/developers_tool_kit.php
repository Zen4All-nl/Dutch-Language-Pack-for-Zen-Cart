<?php
/**
 * @package admin
 * @ Maintained by Zen4All (https://zen4all.nl)
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Mon Oct 19 01:39:59 2015 -0400 Modified in v1.5.5 $
 */
  define('HEADING_TITLE', 'Tool Kit ontwikkelaar');
  define('TABLE_CONFIGURATION_TABLE', 'Zoek CONSTANT definities');

  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>Succesvolle</strong> opwaardering voor de Artikelen Prijs Sorteer waarden');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Foutmelding:</strong> er zijn geen overeenkomstige "Configuration Keys" gevonden voor: ');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Foutmelding:</strong> geen "Configuration Key" of zoektekst ingevuld ... zoekopdracht is afgebroken');

  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Opwaardering ALLE product prijs sorteringen</strong><br />die het mogelijk maken om te sorteren bij weergegeven prijzen: ');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Zoeken in CONSTANTS of defines in taalbestanden</strong>');
  define('TEXT_CONFIGURATION_KEY', 'Zoekterm:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>Opmerking:</strong> CONSTANTS worden in hoofdletters 	geschreven. <br />Indien niets in database tabellen gevonden worden taalbestanden, "Functions" en "Classes" doorzocht op basis van de selectie in dropdown menu.');

  define('TABLE_TITLE_KEY', '<strong>Sleutel:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Titel:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Beschrijving:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Groep:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Waarde:</strong>');

  define('TEXT_LOOKUP_NONE', 'Geen');
  define('TEXT_INFO_SEARCHING', 'Aan het zoeken in ');
  define('TEXT_INFO_FILES_FOR', ' bestanden ... naar: ');
  define('TEXT_INFO_MATCHES_FOUND', 'Aantal overeenkomstige regels gevonden: ');
  define('TEXT_INFO_FILENAME', 'BESTANDSNAAM: ');

  define('TEXT_LANGUAGE_LOOKUPS', 'Kies taal bestand(en) om in te zoeken:');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Alle taal bestanden voor ' . strtoupper($_SESSION['language']) . ' - Catalog/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Alle taal bestanden - Catalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /dutch.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Alle bestanden standaard taal - Catalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Alle taal bestanden - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /dutch.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Alle bestanden standaard taal - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Alle huidig geselecteerde taal bestanden - Catalog/Admin');

  define('TEXT_FUNCTION_CONSTANT', '<strong>Zoeken naar "Functions" of elementen in "Functions" bestanden</strong>');
  define('TEXT_FUNCTION_LOOKUPS', 'Kies "Function" bestanden:');
  define('TEXT_FUNCTION_LOOKUP_CURRENT', 'Alle "Functions" bestanden - Catalog/Admin');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_CATALOG', 'Alle "Functions" bestanden - Catalog');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_ADMIN', 'Alle "Functions" bestanden - Admin');

  define('TEXT_CLASS_CONSTANT', '<strong>Zoeken naar "Classes" of elementen in "Classes" bestanden</strong>');
  define('TEXT_CLASS_LOOKUPS', 'Kies "Classes" bestanden:');
  define('TEXT_CLASS_LOOKUP_CURRENT', 'Alle "Classes" bestanden - Catalog/Admin');
  define('TEXT_CLASS_LOOKUP_CURRENT_CATALOG', 'Alle "Classes" bestanden - Catalog');
  define('TEXT_CLASS_LOOKUP_CURRENT_ADMIN', 'Alle "Classes" bestanden - Admin');

  define('TEXT_TEMPLATE_CONSTANT', '<strong>Opzoeken template gerelateerde zaken</strong>');
  define('TEXT_TEMPLATE_LOOKUPS', 'Kies template bestanden:');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT', 'Alle template bestanden - /templates, sideboxes &amp; pagina\'s etc.');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_TEMPLATES', 'Alle template bestanden - /templates');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_SIDEBOXES', 'Alle template bestanden - /sideboxes');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_PAGES', 'Alle template bestanden - /pagina\'s ');

  define('TEXT_ALL_FILES_CONSTANT', '<strong>Zoeken in alle bestanden</strong>');
  define('TEXT_ALL_FILES_LOOKUPS', 'Kies bestanden:');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT', 'Alle bestanden - Catalog/Admin');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_CATALOG', 'Alle bestanden - Catalog');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_ADMIN', 'Alle bestanden - Admin');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_PLUGINS', 'Alle bestanden - Plugins');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','Geen wijziging beschikbaar');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' of, VERBORGEN');

  define('TEXT_SEARCH_ALL_FILES', 'Doorzoek ALLE bestanden naar: ');
  define('TEXT_SEARCH_DATABASE_TABLES', 'Doorzoek database configuratie tabellen naar: ');

  define('TEXT_ALL_FILESTYPE_LOOKUPS', 'Bestandstype');
  define('TEXT_ALL_FILES_LOOKUP_PHP', 'alleen .php');
  define('TEXT_ALL_FILES_LOOKUP_PHPCSS', '.php en .css');
  define('TEXT_ALL_FILES_LOOKUP_CSS', 'alleen .css');
  define('TEXT_ALL_FILES_LOOKUP_HTMLTXT', '.html en .txt');
  define('TEXT_ALL_FILES_LOOKUP_JS', 'alleen .js');
  define('TEXT_ALL_FILES_LOOKUP_ALL_TYPES', 'Alles');

  define('TEXT_CASE_SENSITIVE', 'Hoofdlettergevoelig?');
  define('TEXT_CONTEXT_LINES', 'Context lines: ');
  define('TEXT_SEARCH_LOOKUP_PLACEHOLDER', 'Voer zoek woord of patroon in');
  define('TEXT_SEARCH_KEY_PLACEHOLDER', 'Voer key naam in waarnaar gezocht moet worden');
  define('TEXT_SEARCH_PHRASE_PLACEHOLDER', 'Voer zoekwoorden in');
  define('TEXT_BUTTON_SEARCH', 'Zoek');
  define('TEXT_BUTTON_SEARCH_ALT', 'Start met zoeken');
  define('TEXT_BUTTON_REGEX_SEARCH', 'Grep');
  define('TEXT_BUTTON_REGEX_SEARCH_ALT', 'Zoek gebruikmakend van Regex patroon');
  define('TEXT_ERROR_REGEX_FAIL', 'ALERT: Er is een fout opgetreden tijdens het zoeken. Als u een regex/grep zoekopdracht aan het doen was, inspecteer dan het opgegeven regex patroon op fouten.');

  //Search Configuration Keys
  define('SEARCH_CFG_KEYS_HEADING_TITLE','<strong>Zoek in Configuratie instellingen/Keys</strong>');
  define('SEARCH_CFG_KEYS_SEARCH_BOX_TEXT', '<strong>De te zoeken zin:</strong> (This will search configuration setting names and descriptions, and also configuration_keys if exact match)');
  define('SEARCH_CFG_KEYS_TABLE_SECTION', 'Sectie');
  define('SEARCH_CFG_KEYS_TABLE_GROUP','Groep');
  define('SEARCH_CFG_KEYS_TABLE_TITLE', 'Titel');
  define('SEARCH_CFG_KEYS_TABLE_DESCRIPTION','Omschrijving');
  define('SEARCH_CFG_KEYS_TABLE_VALUE','Value');
  define('SEARCH_CFG_KEYS_TABLE_KEY_NAME', 'Key Name');
  define('SEARCH_CFG_KEYS_TABLE_EDIT','Wijzig');
  define('SEARCH_CFG_KEYS_NOT_FOUND_KEYS', 'Geen configuration key(s) gevonden.');
  define('SEARCH_CFG_KEYS_FOUND_KEYS', 'configuration key(s) gevonden.');
  define('SEARCH_CFG_KEYS_FORM_PLACEHOLDER', 'Geef de woorden op die gevonden moeten worden in de configuratie instellingen');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_GROUP', 'Zoek');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_KEY', 'Zoek (gesorteerd opp key)');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_VIEW_ALL', 'Bekijk alles (Alle instellingen)');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_RESET', 'Reset');
  define('TEXT_RESET_BUTTON_ALT', 'Wis alle zoekvelden, om opnieuw te beginnen.');
