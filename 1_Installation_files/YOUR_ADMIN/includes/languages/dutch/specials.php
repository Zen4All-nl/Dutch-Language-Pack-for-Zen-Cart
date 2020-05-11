<?php
/**
 * @ Maintained by Zen4All (https://zen4all.nl)
 * @package admin
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: torvista 2020 Jan 26 Modified in v1.5.7 $
 */


define('HEADING_TITLE', 'Aanbiedingen');

define('TABLE_HEADING_PRODUCTS', 'Artikelen');
define('TABLE_HEADING_PRODUCTS_MODEL','Model');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Prijs/Aanbieding/Uitverkoop');
define('TABLE_HEADING_AVAILABLE_DATE', 'Startdatum');
define('TABLE_HEADING_EXPIRES_DATE','Vervaldatum');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Actie(s)');
define('TEXT_ADD_SPECIAL_SELECT', 'Aanbieding op selectie toevoegen');
define('TEXT_ADD_SPECIAL_PID', 'Aanbieding toevoegen op product-ID');
define('TEXT_SEARCH_SPECIALS', 'Zoek huidige aanbiedingen');
define('TEXT_SPECIAL_ACTIVE', 'Aanbiedingsprijs actief');
define('TEXT_SPECIAL_INACTIVE', 'Aanbiedingsprijs inactief');
define('TEXT_SPECIAL_STATUS_BY_DATE', 'Status ingesteld op datums');

define('TEXT_SPECIALS_PRODUCT', 'Product:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Aanbiedingsprijs:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Startdatum:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Vervaldatum:');

define('TEXT_INFO_DATE_ADDED', 'Datum toegevoegd:');
define('TEXT_INFO_LAST_MODIFIED', 'Laatste wijziging:');
define('TEXT_INFO_NEW_PRICE', 'Aanbiedingsprijs:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Originele prijs:');
define('TEXT_INFO_DISPLAY_PRICE', 'Momenteel weergegeven prijs:');
define('TEXT_INFO_STATUS_CHANGE', 'Status gewijzigd:');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Verwijder aanbieding');
define('TEXT_INFO_DELETE_INTRO', 'Weet je zeker dat je deze aanbieding wilt verwijderen?');

define('WARNING_SPECIALS_PRE_ADD_PID_EMPTY', 'Waarschuwing: Er is geen product-ID opgegeven.');
define('WARNING_SPECIALS_PRE_ADD_PID_DUPLICATE', 'Waarschuwing: Product ID#%u staat al op aanbieding.');
define('WARNING_SPECIALS_PRE_ADD_PID_NO_EXIST', 'Waarschuwing: Product-ID#%u bestaat niet.');
if (!defined('TEXT_GV_NAME')) {
    require DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . 'gv_name.php';
}
define('WARNING_SPECIALS_PRE_ADD_PID_GIFT', 'Waarschuwing: Product ID#%u is een ' . TEXT_GV_NAME . '.');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'Aanbiedingsprijs toevoegen op product-ID');
define('TEXT_INFO_PRE_ADD_INTRO', 'U kunt een aanbiedingsprijs per product-ID toevoegen. Deze methode kan geschikt zijn voor winkels met veel producten als de selectiepagina te lang duurt om weer te geven of als het selecteren van een product uit de vervolgkeuzelijst onpraktisch wordt.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Enter the Product ID: ');

define('TEXT_SPECIALS_PRICE_NOTES', '<b>Notes:</b><ul><li>Special Price may be a price (ex-tax). The decimal separator must be a "." (decimal-point), eg: <b>49.99</b>. The calculated percentage discount is shown next to the product\'s new price in the catalog.</li><li>Special Price may be a percentage discount, eg: <b>20%</b>.</li><li>Start/End dates are not obligatory. You may leave the expiry date empty for no expiration.</li><li>When dates are set, the status of the Special Price is automatically enabled/disabled accordingly.</li><li>' . TEXT_INFO_PRE_ADD_INTRO . '</li></ul>');
