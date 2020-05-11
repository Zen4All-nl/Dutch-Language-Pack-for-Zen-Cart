<?php
/**
 * @package admin
 * @ Maintained by Zen4All (https://zen4all.nl)
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:  Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Wie is online');
define('TABLE_HEADING_ONLINE', 'Online');
define('TABLE_HEADING_CUSTOMER_ID', 'Klant ID');
define('TABLE_HEADING_FULL_NAME', 'Volledige naam');
define('TABLE_HEADING_IP_ADDRESS', 'IP adres');
define('TABLE_HEADING_SESSION_ID', 'Sessie');
define('TABLE_HEADING_ENTRY_TIME', 'Tijd aanmelden');
define('TABLE_HEADING_LAST_CLICK', 'Laatste klik');
define('TIME_PASSED_LAST_CLICKED', '<strong>Tijd sinds laatste klik:</strong> ');
define('TABLE_HEADING_LAST_PAGE_URL', 'Laatste URL bezoek');
define('TABLE_HEADING_ACTION', 'Actie');
define('TABLE_HEADING_SHOPPING_CART', 'Inhoud winkelwagen klant');
define('TEXT_SHOPPING_CART_SUBTOTAL', 'Subtotaal');
define('TEXT_NUMBER_OF_CUSTOMERS', 'Op dit moment zijn er %s klanten online');

define('WHOS_ONLINE_REFRESH_LIST_TEXT', 'Ververs overzicht');
define('WHOS_ONLINE_LEGEND_TEXT','Legenda:');
define('WHOS_ONLINE_ACTIVE_TEXT','Actieve winkelwagen');
define('WHOS_ONLINE_INACTIVE_TEXT','Inactieve winkelwagen');
define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT','Actief, geen winkelwagen');
define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT','Inactief, geen winkelwagen');
define('WHOS_ONLINE_INACTIVE_LAST_CLICK_TEXT','Inactief indien laatste klik >=');
define('WHOS_ONLINE_INACTIVE_ARRIVAL_TEXT','Inactief gast sinds aanmelden >');
define('WHOS_ONLINE_REMOVED_TEXT','wordt verwijderd');

define('TEXT_SESSION_ID', '<strong>Sessie ID:</strong> ');
define('TEXT_HOST', '<strong>Host:</strong> ');
define('TEXT_USER_AGENT', '<strong>User Agent:</strong> ');
define('TEXT_EMPTY_CART', '<strong>Lege winkelwagen</strong>');
define('TEXT_WHOS_ONLINE_FILTER_SPIDERS', 'Spiders niet weergeven?');
define('TEXT_WHOS_ONLINE_FILTER_ADMINS', 'Admin IP Adressen niet weergeven?');

// show Last Clicked time and host name - 1 both(default), 0=time-only
if (!defined('WHOIS_SHOW_HOST')) define('WHOIS_SHOW_HOST', '1');

define('TEXT_DUPLICATE_IPS', 'Dulpicaat IP Adressen: ');
define('TEXT_TOTAL_UNIQUE_USERS', 'Totaal Unieke Gebruikers: ');

define('TEXT_WHOS_ONLINE_TIMER_UPDATING', 'Verversen ');
define('TEXT_WHOS_ONLINE_TIMER_EVERY', 'elke %s seconden.&nbsp;&nbsp;');
define('TEXT_WHOS_ONLINE_TIMER_DISABLED', 'Handmatig');
define('TEXT_WHOS_ONLINE_TIMER_FREQ0', 'Uit');
define('TEXT_WHOS_ONLINE_TIMER_FREQ1', '5 sec');
define('TEXT_WHOS_ONLINE_TIMER_FREQ2', '15 sec');
define('TEXT_WHOS_ONLINE_TIMER_FREQ3', '30 sec');
define('TEXT_WHOS_ONLINE_TIMER_FREQ4', '1 min');
define('TEXT_WHOS_ONLINE_TIMER_FREQ5', '5 min');
define('TEXT_WHOS_ONLINE_TIMER_FREQ6', '10 min');
define('TEXT_WHOS_ONLINE_TIMER_FREQ7', '14 min');
