<?php
/**
 * @package admin
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 May 12 Modified in v1.5.7 $
 */


require DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . 'gv_name.php';
define('HEADING_TITLE', TEXT_GV_NAMES . ' Verzonden');

define('TABLE_HEADING_SENDERS_NAME', 'Naam afzender');
define('TABLE_HEADING_VOUCHER_VALUE', TEXT_GV_NAME . ' Waarde');
define('TABLE_HEADING_VOUCHER_CODE', TEXT_GV_REDEEM);
define('TABLE_HEADING_DATE_SENT', 'Verzenddatum');
define('TEXT_HEADING_DATE_REDEEMED', 'Inwisseldatum');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_INFO_SENDERS_ID', 'Afzender ID:');
define('TEXT_INFO_AMOUNT_SENT', 'Verzonden waarde:');
define('TEXT_INFO_DATE_SENT', 'Verzenddatum:');
define('TEXT_INFO_VOUCHER_CODE', TEXT_GV_REDEEM . ':');
define('TEXT_INFO_EMAIL_ADDRESS', 'E-mailadres:');
define('TEXT_INFO_DATE_REDEEMED', 'Inwisseldatum:');
define('TEXT_INFO_IP_ADDRESS', 'IP adres:');
define('TEXT_INFO_CUSTOMERS_ID', 'Klant ID:');
define('TEXT_INFO_NOT_REDEEMED', 'Nog niet ingewisseld');
