<?php
/**
 * @ Maintained by Zen4All (https://zen4all.nl)
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: lat9 2019 Aug 10 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Kortingsbonnen Artikel/Categorie beperkingen');
define('HEADING_TITLE_CATEGORY', 'Categorie beperkingen');
define('HEADING_TITLE_PRODUCT', 'Artikel beperkingen');

define('SUB_HEADING_COUPON_NAME', 'Beperkingen voor de genoemde coupon &quot;%1$s&quot; [%2$u].');  //-%1$s = coupon-name, %2$u = coupon_id

define('TABLE_HEADING_CATEGORY_ID', 'categorie ID');
define('TABLE_HEADING_CATEGORY_NAME', 'categorienaam');
define('TABLE_HEADING_PRODUCT_NAME', 'productnaam');
define('TABLE_HEADING_PRODUCT_ID', 'Product-ID');
define('TABLE_HEADING_RESTRICT', 'Beperking');
define('TABLE_HEADING_RESTRICT_REMOVE', 'Verwijderen');
define('IMAGE_REMOVE', 'Verwijder deze beperking');
define('TEXT_ALL_CATEGORIES', 'Alle Categorieën');

define('MAX_DISPLAY_RESTRICT_ENTRIES', 20);
define('TEXT_ALL_PRODUCTS_ADD', 'Voeg alle producten uit deze categorie toe');
define('TEXT_ALL_PRODUCTS_REMOVE', 'Verwijder alle producten uit deze categorie');
define('TEXT_INFO_ADD_DENY_ALL', '<strong>Voor voeg alle producten uit een categorie toe, geld alleen voor producten die nog geen restrictie hebben.<br />
                    Voor verwijder alle producten uit een catgorie, geld dat alleen producten die aangegeven zijn als Deny or Allow, verwijderd zullen worden.</strong>');

define('ERROR_DISCOUNT_COUPON_DEFINED_CATEGORY', 'Categorie niet klaar');
define('ERROR_DISCOUNT_COUPON_DEFINED_PRODUCT', 'Produkt niet klaar');

define('HEADER_MANUFACTURER_NAME', '<br> -- OF -- <br>' . 'Fabrikant: ');
define('TEXT_ALL_MANUFACTURERS_ADD', 'Voeg alle producten van fabrikant toe');
define('TEXT_ALL_MANUFACTURERS_REMOVE', 'Verwijder alle producten van fabrikant');

define('TABLE_HEADING_STATUS', 'Status');

define('ERROR_RESET_CATEGORY_MANUFACTURER', 'Categorie en Fabrikant filters reset. Gebruik filters appart.');

define('TEXT_PULLDOWN_ALLOW', 'Toestaan');
define('TEXT_PULLDOWN_DENY', 'Weigeren');
define('TEXT_SUBMIT_CATEGORY_ADD', 'Toevoegen');
define('TEXT_SUBMIT_PRODUCT_UPDATE', 'Update');
define('TEXT_STATUS_TOGGLE', 'Toggle');
define('TEXT_STATUS_TOGGLE_TITLE', 'Klik hier om de status van de beperking in of uit te schakelen');
define('TEXT_ALLOWED', 'Product of categorie is toegestaan');
define('TEXT_DENIED', 'Product of categorie is niet toegestaan');

define('TEXT_NO_CATEGORY_RESTRICTIONS', 'Geen huidige categoriebeperkingen');
define('TEXT_NO_PRODUCT_RESTRICTIONS', 'Geen huidige productbeperkingen');
