<?php
/**
 * @ Maintained by Zen4All (https://zen4all.nl)
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:
 */

$define = [
    'HEADING_TITLE' => 'Winkelmanager',
    'TABLE_CONFIGURATION_TABLE' => 'Zoek CONSTANT definities',
    'SUCCESS_PRODUCT_UPDATE_SORT_ALL' => 'De volgorde van rangschikken voor opties is <strong>met succes</strong> gewijzigd.',
    'SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER' => 'De sorteervolgorde van de artikelprijzen is <strong>met succes</strong> gewijzigd',
    'SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED' => 'Bekeken artikelen <strong>met succes</strong> gewijzigd naar 0',
    'SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED' => 'Bestelde artikelen <strong>met succes</strong> gewijzigd naar 0',
    'SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID' => 'Alle hoofdcategorieën van gekoppelde artikelen zijn <strong>met succes</strong> ingesteld.',
    'SUCCESS_UPDATE_COUNTER' => 'De teller is <strong>met succes</strong> gewijzigd naar: ',
    'ERROR_CONFIGURATION_KEY_NOT_FOUND' => '<strong>Foutmelding:</strong> er zijn geen overeenkomstige "configuration keys" gevonden voor ...',
    'ERROR_CONFIGURATION_KEY_NOT_ENTERED' => '<strong>Foutmelding:</strong> er is geen "configuration key" of tekst ingevuld om naar te zoeken... het zoeken is afgebroken.',
    'TEXT_INFO_COUNTER_UPDATE' => '<strong>Wijzig teller</strong><br />naar een nieuwe waarde: ',
    'TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE' => '<strong>Wijzig de sorteervolgorde van de prijzen voor	alle artikelen</strong><br />mogelijkheid tot sorteren op getoonde prijzen: ',
    'TEXT_INFO_PRODUCTS_VIEWED_UPDATE' => '<strong>Stel de waarde in voor alle bekeken artikelen</strong><br />waarde wordt weer 0 ',
    'TEXT_INFO_PRODUCTS_ORDERED_UPDATE' => '<strong>Stel de waarde in voor alle bestelde artikelen</strong><br />waarde wordt weer 0 ',
    'TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE' => '<strong>Stel voor alle artikelen de hoofdcategorie ID in</strong><br />te gebruiken voor gekoppelde artikelen en prijzen ',
    'TEXT_NEW_ORDERS_ID' => 'Nieuwe bestelling ID',
    'TEXT_INFO_SET_NEXT_ORDER_NUMBER' => '<strong>Pas het volgende ordernummer aan</strong><br />Opmerking: Je kant het ordernummer niet een lagere waarde geven dan een bestaande order in de database.',
    'TEXT_MSG_NEXT_ORDER' => 'Het volgende ordernummer is op %s gezet',
    'TEXT_MSG_NEXT_ORDER_MAX' => 'Vanwege al bestaande orderdata, is op dit moment het volgende ordernummer: %s',
    'TEXT_MSG_NEXT_ORDER_TOO_LARGE' => 'Vanwege database beperkingen, kun je het volgende ordernummer niet hoger zetten dan 2000000000. Kies alstublieft een lagere waarde.',
    'TEXT_CONFIGURATION_CONSTANT' => '<strong>Zoek <u>CONSTANTS</u> of taal gerelateerde <u>defines</u></strong>',
    'TEXT_CONFIGURATION_KEY' => 'Key of Naam:',
    'TEXT_INFO_CONFIGURATION_UPDATE' => '<strong>Opmerking:</strong> ONSTANTS worden in hoofdletters geschreven.<br />Zoeken in taalbestanden kan een alternatief zijn wanneer er niks wordt gevonden in de database tabellen.',
    'TABLE_TITLE_KEY' => '<strong>Sleutelwaarde:</strong>',
    'TABLE_TITLE_TITLE' => '<strong>Titel:</strong>',
    'TABLE_TITLE_DESCRIPTION' => '<strong>Beschrijving:</strong>',
    'TABLE_TITLE_GROUP' => '<strong>Groep:</strong>',
    'TABLE_TITLE_VALUE' => '<strong>Waarde:</strong>',
    'TEXT_LANGUAGE_LOOKUPS' => 'Kies taal bestand(en) om in te zoeken:',
    'TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE' => 'Alle taalbestanden voor ' . strtoupper($_SESSION['language']) . ' - Catalog/Admin',
    'TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG' => 'Alle taalbestanden - Catalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /dutch.php etc.)',
    'TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE' => 'Alle bestanden standaard taal - Catalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)',
    'TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN' => 'Alle taalbestanden - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /dutch.php etc.)',
    'TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE' => 'Alle bestanden standaard taal - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)',
    'TEXT_LANGUAGE_LOOKUP_CURRENT_ALL' => 'Alle huidig geselecteerde taal bestanden - Catalog/Admin',
    'TEXT_INFO_NO_EDIT_AVAILABLE' => 'Geen wijziging beschikbaar',
    'TEXT_INFO_CONFIGURATION_HIDDEN' => ' of, VERBORGEN',
    'TEXT_INFO_DATABASE_OPTIMIZE' => '<strong>Optimaliseer de Database</strong> om ongebruikte ruimte van verwijderde records vrij te maken.<br />Optioneel draai maandelijks of weekelijks deze optimalisatie op een drukke database.<br />(Het beste om dit uit te voeren als het minder druk is.)',
    'TEXT_INFO_OPTIMIZING_DATABASE_TABLES' => 'Database tabel optimimalisatie wordt uitgevoerd. Dit kan enkele minuten duren. Even geduld. Het voorgaande menu zal weer verschijnen als de bewerking klaar is ... ',
    'SUCCESS_DB_OPTIMIZE' => 'Database Optimalisatie - Tabellen verwerkt: ',
    'TEXT_INFO_PURGE_DEBUG_LOG_FILES' => '<strong>Debug Log Files opschonen</strong><br /><strong>Let op: </strong>Zen Cart slaat PHP foutmeldingen op voor debugging doeleinden en veel betaalmethodes kunnen ingesteld worden om debug data op te slaan, om diagnoses te kunnen doen in geval van communicatie problemen. <br />Door op bijwerken te klikken zullen alle debug logs, betreffende PHP fouten en betaal modules, permanent verwijdert worden uit de /logs/ folder.',
    'SUCCESS_CLEAN_DEBUG_FILES' => 'Debug Log Files opgeschoond',
];

return $define;
