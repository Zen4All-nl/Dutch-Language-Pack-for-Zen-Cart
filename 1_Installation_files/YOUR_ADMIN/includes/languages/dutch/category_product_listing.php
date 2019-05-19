<?php

/**
 * @package admin
 * @ Maintained by Zen4All (https://zen4all.nl)
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2019 Jan 04 Modified in v1.5.6a $
 */
define('HEADING_TITLE', 'Categoriën / Producten');
define('HEADING_TITLE_GOTO', 'Ga naar:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Categoriën / Producten');
define('TABLE_HEADING_MODEL', 'Model');

define('TABLE_HEADING_PRICE', 'Prijs/Aanbieding/Uitverkoop');
define('TABLE_HEADING_QUANTITY', 'aantal');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Volgorde');
define('TABLE_HEADING_ACTION', 'Actie');
define('TEXT_PRODUCTS_STATUS_ON_OF', ' van ');
define('TEXT_PRODUCTS_STATUS_ACTIVE', ' aktief ');
define('TEXT_CATEGORIES', 'Categoriëen:');
define('TEXT_PRODUCTS', 'Producten:');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Verwijder catogorie');
define('TEXT_DELETE_CATEGORY_INTRO', 'Weet u zeker dat u deze categorie wilt verwijderen?');
define('TEXT_DELETE_CATEGORY_INTRO_LINKED_PRODUCTS', '<strong>Waarschuwing:</strong> Gelinkte producten waarvan de Master Categories ID wordt verwijdert, zullen incorrect geprijsd worden. Zorg ervoor dat wanneer u een categorie verwijdert met gelinkte producten, dat u eerst de Master Categories ID van de producten naar een andere categorie ID verandert, alvorens te verwijderen.');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Categorie verplaatsen');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Kies een categorie waarheen <b>%s</b> verplaatst moet worden.');
define('TEXT_MOVE', 'Verplaats <b>%s</b> naar:');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Product verwijder');
define('TEXT_DELETE_PRODUCT_INTRO', 'Weet u zeker datu het productpermanent wilt verwijderen?<br /><br /><strong>Waarschuwing:</strong> Bij gelinkete producten<br />1 Zorg ervoor dat de Master Categorie is aangepast als u het product uit de Master Categorie verwijdert<br />2 Vink de checkbox aan van de categorie waaruit u hetproduct wilt verwijderen.');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Product verplaatsen');
define('TEXT_MOVE_PRODUCTS_INTRO', 'Kies de catgorie waarheen u <b>%s</b> verplaatsen wilt.');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Huidige categoriëen: ');
define('TEXT_INFO_HEADING_COPY_TO', 'Kopiëeren naar');
define('TEXT_INFO_COPY_TO_INTRO', 'Kies een nieuwe categorie waar u dit product naar toe wilt kopiëeren');
define('TEXT_INFO_CURRENT_PRODUCT', 'Huidig product: ');
define('TEXT_HOW_TO_COPY', 'Kopieermethode:');
define('TEXT_COPY_AS_LINK', 'Product linken');
define('TEXT_COPY_AS_DUPLICATE', 'Product dupliceren');
define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES', 'Atribuut veranderingen voor product ID# ');
define('TEXT_PRODUCTS_ATTRIBUTES_INFO', 'Atribuut kenmerken voor:');
define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS', 'Downloads: ');
define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE', 'Verwijder <strong>ALLE</strong> product atributen voor:<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT', 'Kopieer atributen naar een ander <strong>product</strong> van:<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY', 'Kopieer atributen naar een andere <strong>categorie</strong> van:<br />');
define('TEXT_COPY_ATTRIBUTES_CONDITIONS', '<strong>Hoe moeten de bestaande product-atributen verwerkt worden?</strong>');
define('TEXT_COPY_ATTRIBUTES_DELETE', '<strong>Verwijder</strong> eerst, vervolgen nieuwe atributen kopiëeren');
define('TEXT_COPY_ATTRIBUTES_UPDATE', '<strong>Aanpassen</strong> met nieuwe instellingen/prijzen, vervolgens nieuwe toevoegen');
define('TEXT_COPY_ATTRIBUTES_IGNORE', '<strong>Negeren</strong> en allen nieuwe atributen toevoegen');
define('TEXT_ATTRIBUTE_COPY_INSERTING', '<strong>Nieuw attribuut invoegen vanaf </strong>');
define('ICON_ATTRIBUTES', 'Atribuut kenmerken');

// Products and Attribute Copy Options
define('TEXT_COPY_ATTRIBUTES_ONLY', 'Alleen gebruiken voor gedupliceerde artikelen...');
define('TEXT_COPY_ATTRIBUTES', 'Product Atributen naar duplicaat kopiëeren?');
define('TEXT_COPY_ATTRIBUTES_YES', 'Ja');
define('TEXT_COPY_ATTRIBUTES_NO', 'Nee');

// Products and Discount Copy Options
define('TEXT_COPY_DISCOUNTS_ONLY', 'Alleen gebruikt voor dpliceren producten met hoeveelheidkortingen ...');
define('TEXT_COPY_DISCOUNTS', 'Kopieer product oeveelheidskorting naar duplicaat?');
define('TEXT_COPY_DISCOUNTS_YES', 'Ja');
define('TEXT_COPY_DISCOUNTS_NO', 'Nee');

// From categories.php in 1.5.5
// categories status
define('TEXT_INFO_HEADING_STATUS_CATEGORY', 'Categorie status aanpassen voor:');
define('TEXT_CATEGORIES_STATUS_INTRO', 'Categorie status aanpassen naar: ');
define('TEXT_CATEGORIES_STATUS_OFF', 'Uit');
define('TEXT_CATEGORIES_STATUS_ON', 'Aan');
define('TEXT_PRODUCTS_STATUS_INFO', 'Alle product statussen aan passen naar: ');
define('TEXT_PRODUCTS_STATUS_OFF', 'Uit');
define('TEXT_PRODUCTS_STATUS_ON', 'Aan');
define('TEXT_PRODUCTS_STATUS_NOCHANGE', 'Ongewijzigd');
define('TEXT_CATEGORIES_STATUS_WARNING', '<strong>Waarschuwing ...</strong><br />Opmerking: het uitzetten van een categorie zorgt er voor dat alle artikelen in deze categorie ook niet langer beschikbaar zijn. Gekoppelde artikelen in deze categorie, die gedeeld worden met andere categorieën, zijn eveneens niet langer beschikbaar.');
define('TEXT_SUBCATEGORIES_STATUS_INFO', 'Verander óók de status van ALLE sub-categorieën:');
define('TEXT_SUBCATEGORIES_STATUS_OFF', 'Uit');
define('TEXT_SUBCATEGORIES_STATUS_ON', 'Aan');
define('TEXT_SUBCATEGORIES_STATUS_NOCHANGE', 'Onveranderd');

define('WARNING_PRODUCTS_IN_TOP_INFO', 'Waarschuwing: Er staan artikelen in de hoogste categorie. Hierdoor worden de artikelen niet goed geprijsd. Gevonden artikelen: ');

define('TEXT_COPY_MEDIA_MANAGER', 'Media kopieëren?');
