<?php

/**
 * @ Maintained by Zen4All (https://zen4all.nl)
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 08 Modified in v1.5.7 $
 */
define('HEADING_TITLE', 'Categoriën / Producten');
define('HEADING_TITLE_GOTO', 'Ga naar:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Categoriën / Producten');

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
define('TEXT_MOVE_PRODUCT', 'Product verplaatsen<br><strong>ID#%1$u %2$s</strong><br>uit huidige categorie<br><strong>ID#%3$u %4$s</strong><br>naar:');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Product verwijder');
define('TEXT_DELETE_PRODUCT_INTRO', 'Weet u zeker datu het productpermanent wilt verwijderen?<br /><br /><strong>Waarschuwing:</strong> Bij gelinkete producten<br />1 Zorg ervoor dat de Master Categorie is aangepast als u het product uit de Master Categorie verwijdert<br />2 Vink de checkbox aan van de categorie waaruit u hetproduct wilt verwijderen.');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Product verplaatsen');
define('TEXT_MOVE_PRODUCTS_INTRO', 'Kies de catgorie waarheen u <b>%s</b> verplaatsen wilt.');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Huidige categoriëen: ');
define('TEXT_INFO_HEADING_COPY_TO', 'Kopiëeren naar');
define('TEXT_INFO_CURRENT_PRODUCT', 'Huidig product: ');
define('TEXT_HOW_TO_COPY', 'Kopieermethode:');
define('TEXT_COPY_AS_LINK', 'Link dit product in een andere categorie zoals hierboven geselecteerd');
define('TEXT_COPY_AS_DUPLICATE', 'Maak een duplicaatproduct in de hierboven geselecteerde categorie');
define('TEXT_COPY_METATAGS','Kopieer Metatags naar duplicaat?');
define('TEXT_COPY_LINKED_CATEGORIES','Kopieer gelinkte categoriëen naar duplicaat?');
define('TEXT_COPY_EDIT_DUPLICATE', 'Open product duplicaat om te bewerken');

//used in copy_product_confirm
define('TEXT_COPY_AS_DUPLICATE_ATTRIBUTES', 'Attributen gekopieerd van product-ID#%u om product-ID#%u te dupliceren');
define('TEXT_COPY_AS_DUPLICATE_METATAGS', 'Metatags voor Language ID#%u gekopieerd van Product ID#%u naar duplicaat Product ID#%u');
define('TEXT_COPY_AS_DUPLICATE_CATEGORIES', 'Gelinkte Categorie ID#%u gekopieerd van Product ID#%u naar duplicaat Product ID#%u');
define('TEXT_COPY_AS_DUPLICATE_DISCOUNTS', 'Kortingen gekopieerd van Product ID#%u naar duplicaat Product ID#%u');
define('TEXT_DUPLICATE_IDENTIFIER', '[DUPLICAAT]');

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

// Products and Attribute Copy Options
define('TEXT_COPY_ATTRIBUTES', 'Product Atributen naar duplicaat kopiëeren?');

// Products and Discount Copy Options
define('TEXT_COPY_DISCOUNTS_ONLY', 'Alleen gebruikt voor duplicaat producten met hoeveelheidskortingen ...');
define('TEXT_COPY_DISCOUNTS', 'Kopieer hoeveelheidskortingen naar duplicaat?');

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
define('TEXT_SUBCATEGORIES_STATUS_INFO', 'Verander de status van ALLE sub-categorieën naar:');
define('TEXT_SUBCATEGORIES_STATUS_OFF', 'Uit');
define('TEXT_SUBCATEGORIES_STATUS_ON', 'Aan');
define('TEXT_SUBCATEGORIES_STATUS_NOCHANGE', 'Onveranderd');

define('WARNING_PRODUCTS_IN_TOP_INFO', 'Waarschuwing: Er staan artikelen in de hoogste categorie. Hierdoor worden de artikelen niet goed geprijsd. Gevonden artikelen: ');

define('TEXT_COPY_MEDIA_MANAGER', 'Media kopieeren?');
define('SUCCESS_ATTRIBUTES_DELETED','Attributen zijn verwijderd');
