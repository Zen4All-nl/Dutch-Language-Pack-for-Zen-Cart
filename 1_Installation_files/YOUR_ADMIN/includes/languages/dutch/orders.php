<?php
/**
 * @package admin
 * @ Maintained by Zen4All (https://zen4all.nl)
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 28 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Bestellingen');
define('HEADING_TITLE_DETAILS', 'Orderdetails (#%u)');     //-%u is ingevuld met het daadwerkelijke ordernummer
define('HEADING_TITLE_SEARCH', 'Zoek bestelling ID:');
define('HEADING_TITLE_STATUS', 'Status:');
define('HEADING_TITLE_SEARCH_DETAIL_ORDERS_PRODUCTS', 'Artikelnaam of ID:XX of Model');
define('HEADING_TITLE_SEARCH_ALL','Zoek: ');
define('HEADING_TITLE_SEARCH_PRODUCTS','Zoek product: ');
define('TEXT_RESET_FILTER', 'Verwijder zoekfilter');
define('TABLE_HEADING_PAYMENT_METHOD', 'Betaal-<br />Verzend Methode');
define('TABLE_HEADING_ORDERS_ID','ID');

define('TEXT_BILLING_SHIPPING_MISMATCH','Factuur- en afleveradres komen niet overeen ');

define('TABLE_HEADING_COMMENTS', 'Commentaar:');
define('TABLE_HEADING_CUSTOMERS', 'Klanten');
define('TABLE_HEADING_ORDER_TOTAL', 'Bestelling (totaal)');
define('TABLE_HEADING_DATE_PURCHASED', 'Besteldatum');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_TYPE', 'Type bestelling');
define('TABLE_HEADING_ACTION', 'Actie');
define('TABLE_HEADING_QUANTITY', 'Aantal');
define('TABLE_HEADING_PRODUCTS', 'Producten');
define('TABLE_HEADING_TAX', 'Belasting');
define('TABLE_HEADING_TOTAL', 'Totaal');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Prijs (excl. btw)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Prijs (incl. btw)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Totaal (excl. btw)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Totaal (incl. btw)');
define('TABLE_HEADING_PRICE', 'Prijs');
define('TABLE_HEADING_UPDATED_BY', 'Bijgewerkt door');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Klant geïnformeerd');
define('TABLE_HEADING_DATE_ADDED', 'Datum toegevoegd');

define('ENTRY_CUSTOMER', 'Klant:');
define('ENTRY_CUSTOMER_ADDRESS', 'Klant adres:<br><i class="fa fa-2x fa-user"></i>');
define('ENTRY_SOLD_TO', 'Factuuradres:');
define('ENTRY_SHIP_TO', 'Afleveradres:');
define('ENTRY_SHIPPING_ADDRESS', 'Afleveradres:<br><i class="fa fa-2x fa-truck"></i>');
define('ENTRY_BILLING_ADDRESS', 'Factuuradres:<br><i class="fa fa-2x fa-credit-card"></i>');
define('ENTRY_PAYMENT_METHOD', 'Betaalmethode:');
define('ENTRY_CREDIT_CARD_TYPE', 'Type credit card:');
define('ENTRY_CREDIT_CARD_OWNER', 'Eigenaar credit card:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Credit card nummer:');
define('ENTRY_CREDIT_CARD_CVV', 'Credit card CVV nummer:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Credit card verloopdatum:');
define('ENTRY_SHIPPING', 'Verzendkosten:');
define('ENTRY_DATE_PURCHASED', 'Besteldatum:');
define('ENTRY_STATUS', 'Status:');
define('ENTRY_NOTIFY_CUSTOMER', 'Informeer klant:');
define('ENTRY_NOTIFY_COMMENTS', 'Voeg commentaar toe:');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Verwijder bestelling');
define('TEXT_INFO_DELETE_INTRO', 'Weet je zeker dat je deze bestelling wilt verwijderen?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Artikel terug in voorraad');
define('TEXT_DATE_ORDER_CREATED', 'Datum toegevoegd:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Datum laatste wijziging:');
define('TEXT_INFO_PAYMENT_METHOD', 'Betaalmethode:');

define('TEXT_ALL_ORDERS', 'Alle bestellingen');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Wijziging bestelling');
define('EMAIL_TEXT_ORDER_NUMBER', 'Bestelnummer:');
define('EMAIL_TEXT_INVOICE_URL', 'Gedetailleerde factuur:');
define('EMAIL_TEXT_DATE_ORDERED', 'Besteldatum:');
define('EMAIL_TEXT_COMMENTS_UPDATE', '<em>Commentaar bij de bestelling: </em>');
define('EMAIL_TEXT_STATUS_UPDATED', 'De status van uw bestelling is als volgt gewijzigd:' . "\n");
define('EMAIL_TEXT_STATUS_LABEL', '<strong>Nieuwe status:</strong> %s' . "\n\n");
define('EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Indien u vragen heeft kunt u reageren door op de e-mail een reply te sturen.' . "\n");

define('ERROR_ORDER_DOES_NOT_EXIST', '<strong>Foutmelding</strong>: bestelling is niet bekend.');
define('SUCCESS_ORDER_UPDATED', 'Succesmelding: wijziging bestelling is geslaagd.');
define('WARNING_ORDER_NOT_UPDATED', '<strong>Waarschuwing</strong>: er is niets om te wijzigen. De bestelling blijft hetzelfde.');

define('ENTRY_ORDER_ID','Factuurnummer. ');
define('TEXT_INFO_ATTRIBUTE_FREE', '&nbsp;-&nbsp;<span class="alert">GRATIS</span>');

define('TEXT_DOWNLOAD','Download'); 
define('TEXT_DOWNLOAD_TITLE', 'Bestelling Download status');
define('TEXT_DOWNLOAD_STATUS', 'Status');
define('TEXT_DOWNLOAD_FILENAME', 'Bestandsnaam');
define('TEXT_DOWNLOAD_MAX_DAYS', 'Dagen');
define('TEXT_DOWNLOAD_MAX_COUNT', 'Nog resterend');

define('TEXT_DOWNLOAD_AVAILABLE', 'Beschikbaar');
define('TEXT_DOWNLOAD_EXPIRED', 'Verlopen');
define('TEXT_DOWNLOAD_MISSING', 'Niet aanwezig op de server');

define('TEXT_EXTENSION_NOT_UNDERSTOOD', 'Bestandsextensie %s wordt niet ondersteund');
define('TEXT_FILE_NOT_FOUND', 'Bestand niet gevonden');
define('IMAGE_ICON_STATUS_CURRENT', 'Status - beschikbaar');
define('IMAGE_ICON_STATUS_EXPIRED', 'Status - verlopen');
define('IMAGE_ICON_STATUS_MISSING', 'Status - niet aanwezig');

define('SUCCESS_ORDER_UPDATED_DOWNLOAD_ON', 'Download was succesvol geactiveerd');
define('SUCCESS_ORDER_UPDATED_DOWNLOAD_OFF', 'Download was succesvol gedeactiveerd');
define('TEXT_MORE', '... meer');

define('TEXT_INFO_IP_ADDRESS', 'IP adres: ');
define('TEXT_DELETE_CVV_FROM_DATABASE','Verwijder CVV uit de database');
define('TEXT_DELETE_CVV_REPLACEMENT','Verwijderd');
define('TEXT_MASK_CC_NUMBER','Maskeer dit nummer');

define('TEXT_INFO_EXPIRED_DATE', 'Verstreken Datum:<br />');
define('TEXT_INFO_EXPIRED_COUNT', 'Verlopen Telling:<br />');

define('TABLE_HEADING_CUSTOMER_COMMENTS', 'Klant<br />Commentaar');
define('TEXT_COMMENTS_YES', 'Klant commentaar - JA');
define('TEXT_COMMENTS_NO', 'Klant commentaar - NEE');

define('TEXT_CUSTOMER_LOOKUP', '<i class="fa fa-search"></i> Klant opzoeken');

define('TEXT_INVALID_ORDER_STATUS', '<span class="alert">(Ongeldige Orderstatus)</span>');

define('BUTTON_TO_LIST', 'Orderlijst');
define('SELECT_ORDER_LIST', 'Ga naar order:');

define('TEXT_MAP_CUSTOMER_ADDRESS', 'Toon Klantaddres op kaart');
define('TEXT_MAP_SHIPPING_ADDRESS', 'Toon Verzendadres op kaart');
define('TEXT_MAP_BILLING_ADDRESS', 'Toon Factuuradres op kaart');

define('TEXT_EMAIL_LANGUAGE', 'Taal van bestelling %s');
define('SUCCESS_EMAIL_SENT', 'E-mail %s verstuurd naar klant');
