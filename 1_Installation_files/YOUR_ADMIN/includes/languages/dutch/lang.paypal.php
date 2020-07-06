<?php
/**
 * @ Maintained by Zen4All (https://zen4all.nl)
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2020 Apr 27 Modified in v1.5.7 $
 */

// sorteervolgorde orders
define('TEXT_PAYPAL_IPN_SORT_ORDER_INFO', 'Toon Order: ');
define('TEXT_SORT_PAYPAL_ID_DESC', 'PayPal Order ontvangen (nieuw - oud)');
define('TEXT_SORT_PAYPAL_ID', 'PayPal Order ontvangen (oud - nieuw)');
define('TEXT_SORT_ZEN_ORDER_ID_DESC', 'Ordernummer (hoog - laag), PayPal Order ontvangen');
define('TEXT_SORT_ZEN_ORDER_ID', 'Ordernummer (laag - hoog), PayPal Order ontvangen');
define('TEXT_PAYMENT_AMOUNT_DESC', 'Orderbedrag (hoog - laag)');
define('TEXT_PAYMENT_AMOUNT', 'Orderbedrag (laag - hoog)');

//begin ADMIN text
define('HEADING_ADMIN_TITLE', 'PayPal Instant Payment Notifications');
define('HEADING_PAYMENT_STATUS', 'Status betaling:');
define('TEXT_ALL_IPNS', 'Alle');

define('TABLE_HEADING_ORDER_NUMBER', 'Bestelnummer');
define('TABLE_HEADING_PAYPAL_ID', 'PayPal nummer');
define('TABLE_HEADING_TXN_TYPE', 'Transactie Type');
define('TABLE_HEADING_PAYMENT_STATUS', 'Status betaling');
define('TABLE_HEADING_PAYMENT_AMOUNT', 'Bedrag');
define('TABLE_HEADING_ACTION', 'Actie');
define('TABLE_HEADING_DATE_ADDED', 'Datum toegevoegd');
define('TABLE_HEADING_NUM_HISTORY_ENTRIES', 'Aantal vermeldingen in Statusgeschiedenis');
define('TABLE_HEADING_ENTRY_NUM', 'Invoer nummer');
define('TABLE_HEADING_TRANS_ID', 'Transactie ID');
define('TABLE_HEADING_PENDING_REASON', 'In afwachting van reden');

define('TEXT_INFO_PAYPAL_IPN_HEADING', 'PayPal IPN');
define('TEXT_DISPLAY_PAYPAL_IPN_NUMBER_OF_TX', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> Transactie(s))');

// Other constants are in includes/languages/english/modules/payment/paypal.php
//end ADMIN text
