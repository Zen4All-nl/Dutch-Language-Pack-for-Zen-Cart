<?php
/**
 * @ Maintained by Zen4All (https://zen4all.nl)
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 08 Modified in v1.5.7 $
 */

define('HEADING_TITLE','Artikel(en) aan meerdere categorieën koppelen...');
define('HEADING_TITLE2','Categorieën / Artikelen');//gebruikt door prev_next als HEADING_TITLE niet is gedefinieerd ... dus nooit gebruikt!

//Selecteer product
define('TEXT_HEADING_PRODUCT_SELECT', 'Selecteer product');
define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', 'WAARSCHUWING: het eerder geselecteerde product is niet langer gekoppeld aan deze categorie.');//wanneer categorie is ingesteld, maar geen productfilterset (geen product geselecteerd)

// Hoofdcategorie wijzigen
define('TEXT_PRODUCTS_ID_INVALID', 'WAARSCHUWING: Product-ID#%u is ongeldig/bestaat niet in de database.');
define('TEXT_INFO_MASTER_CATEGORY_CHANGE','Een product heeft een hoofdcategorie-ID (voor prijsdoeleinden) die kan worden beschouwd als de categorie waar het product zich daadwerkelijk <i>bevindt</i>. Bovendien kan een product <i>gekoppeld</i> (gekopieerd) worden aan een aantal andere categorieën, waar de prijs kan worden gewijzigd als gevolg van voorwaarden op die gekoppelde categorieën.<br> De hoofdcategorie ID kan worden gewijzigd met behulp van deze vervolgkeuzelijst Hoofdcategorie, die alleen de <strong>momenteel gekoppelde</strong> categorieën als mogelijke alternatieven biedt.<br> Om de hoofdcategorie-ID in te stellen op <strong>een andere</strong> categorie, koppelt u deze eerst aan een nieuwe categorie met behulp van de onderstaande tabel en Update. Gebruik vervolgens deze vervolgkeuzelijst om de hoofdcategorie opnieuw toe te wijzen aan die nieuwe categorie.');

// Product InfoBox
define('TEXT_INFOBOX_HEADING_SELECT_PRODUCT', 'Selecteer product op ID#');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', 'Toon product naar categorieën Links voor: ');
define('TEXT_PRODUCTS_ID', 'Product ID# ');
define('TEXT_PRODUCTS_NAME', 'Product: ');
define('TEXT_PRODUCTS_PRICE', 'Prijs: ');
define('BUTTON_UPDATE_CATEGORY_LINKS', 'Categorielinks bijwerken voor');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', 'Selecteer een ander product op ID #');
define('BUTTON_CATEGORY_LISTING', 'Categorie lijst');

//Koppel het product aan meerdere categorieën
define('TEXT_HEADING_LINKED_CATEGORIES', 'Gekoppelde categorieën');
define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>WAARSCHUWING:</strong> er moet een HOOFD CATEGORIE-ID worden toegewezen');
define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO', '<p>Dit product is momenteel gekoppeld aan de hieronder geselecteerde categorieën (u kunt het aantal kolommen wijzigen dat wordt weergegeven op <a target="_blank" href="configuration.php?&amp;gID=3">deze pagina</a>).<br>Als u links wilt toevoegen / verwijderen, schakelt u de selectievakjes in / uit en klikt u vervolgens op ' . BUTTON_UPDATE_CATEGORY_LINKS . 'knop.</p><p>Merk op dat aanvullende product- / categorie-acties beschikbaar zijn met behulp van de onderstaande Globale Tools.</p>');
define('TEXT_LABEL_CATEGORY_DISPLAY_ROOT', 'Geef de subcategorieën weer onder:');
define('BUTTON_SET_DEFAULT_TARGET_CATEGORY', 'Stel in als standaard');
define('BUTTON_SET_DEFAULT_TARGET_CATEGORY_TITLE', 'Stel deze geselecteerde doelcategorie in als standaard om weer te geven');
define('TEXT_LABEL_SELECT_ALL_OR_NONE', 'Selecteer Alles of Geen');
define('ERROR_CATEGORY_ID_INVALID', 'ID van gekoppelde categorie #%u is ongeldig (niet toegevoegd).');
define('SUCCESS_PRODUCT_LINKED_TO_CATEGORIES', 'Productlinks naar meerdere categorieën bijgewerkt voor: %s');
define('WARNING_PRODUCT_UNLINKED_FROM_CATEGORY', 'Het product is ontkoppeld van de eerder geselecteerde categorie "%1$s" ID#%2$u, en wordt nu weergegeven in de hoofdcategorie.');
define('WARNING_MAX_INPUT_VARS_LIMIT', 'WAARSCHUWING: Er zijn %1$u subcategorieën beschikbaar om te linken op deze pagina, die groter is dan de PHP-limiet "max_input_vars" (momenteel %2$u). Dit betekent dat er niet meer dan %2$u categorieën mogen worden gekoppeld totdat deze PHP-limiet is verhoogd in uw hosting.');

// Globale Tools
define('HEADER_CATEGORIES_GLOBAL_TOOLS', 'Globale tools voor producten/categorieën');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', '<p>Opmerking: een product hoeft niet te worden geselecteerd om deze tools te gebruiken. Als u echter hierboven een product selecteert, worden de beschikbare categorieën (en hun ID-nummers bij zweven) weergegeven.</p>');

// Kopieer gekoppelde categorieën van het ene product naar het andere product
define('TEXT_HEADING_COPY_LINKED_CATEGORIES', 'Kopieer gekoppelde categorieën naar een ander product');
define('TEXT_INFO_COPY_LINKED_CATEGORIES', 'Kopieer de gekoppelde categorieën van het momenteel geselecteerde product%s naar een ander product.<br> U kunt de gelinkte categorieën van dit product <strong>toevoegen</strong> aan het doelproduct, of u kunt <strong>Vervangen</strong> (verwijder + voeg toe) de gekoppelde categorieën van het doelproduct.<br>Opmerking: Deze actie kopieert de hoofdcategorie van het bronproduct niet als een gekoppelde categorie voor de doelcategorie, maar kopieert alleen de gekoppelde categorieën.');
define('TEXT_LABEL_ENABLE_COPY_LINKS', 'Dropdown-menu voor productselectie inschakelen (geeft <b>alle</b> producten weer)');
define('TEXT_OPTION_LINKED_CATEGORIES', 'Selecteer het doelproduct');
define('BUTTON_COPY_LINKED_CATEGORIES_ADD', 'Gekoppelde categorieën kopiëren en toevoegen');
define('BUTTON_COPY_LINKED_CATEGORIES_REPLACE', 'Gekopieerde categorieën kopiëren en vervangen');
define('SUCCESS_LINKED_CATEGORIES_COPIED_TO_TARGET_PRODUCT_ADD', 'Gekoppelde categorieën (%1$u) zijn toegevoegd:<br> VAN Referentieproduct:%2$s<br> TOT Doelproduct: %3$s');
define('SUCCESS_LINKED_CATEGORIES_COPIED_TO_TARGET_PRODUCT_REPLACE', 'Gelinkte categorieën (%1$u) voor doelproduct:%3$s<br> zijn <em>vervangen</em> door de gelinkte categorieën van product: %2$s');
define('WARNING_COPY_LINKED_CATEGORIES_NO_TARGET', 'Er is geen doelproduct geselecteerd!');
define('WARNING_COPY_LINKED_CATEGORIES_NO_ADDITIONAL', 'Niets te doen! <br> Bronproduct:%1$s<br> heeft geen <em>aanvullende</em> gekoppelde categorieën om naar<br> doelproduct te kopiëren: %2$s');
define('ERROR_MASTER_CATEGORY_MISSING', 'FOUT: hoofdcategorie-ID ontbreekt in tabel "' . TABLE_PRODUCTS_TO_CATEGORIES . '"<br>voor product: %s');

// Kopieer als gekoppeld alle producten van categoriebron naar categoriedoel
define('TEXT_HEADING_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', 'Koppel (kopieer) producten van de ene categorie naar de andere categorie');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', 'Voorbeeld: een kopie van broncategorie-ID #8 naar doelcategorie-ID #22 zal gekoppelde kopieën maken van ALLE producten die in categorie 8 vallen, in categorie 22.');
define('TEXT_LABEL_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Selecteer ALLE producten uit de broncategorie-ID#: ');
define('TEXT_LABEL_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Link (kopiëren) naar het doelcategorie-ID#: ');
define('BUTTON_COPY_CATEGORY_LINKED', 'Kopieer producten als gekoppeld');
define('WARNING_CATEGORY_SOURCE_NOT_EXIST','<strong>Bron</strong> categorie-ID#%u is ongeldig (bestaat niet)');
define('WARNING_CATEGORY_TARGET_NOT_EXIST','<strong>Doel</strong> categorie ID#%u is ongeldig (bestaat niet)');
define('WARNING_CATEGORY_IDS_DUPLICATED', 'Waarschuwing: dezelfde categorie-ID\'s (#%u)');
define('WARNING_CATEGORY_NO_PRODUCTS', '<strong>Bron</strong> categorie-ID#%u ongeldig (bevat geen producten)');
define('WARNING_CATEGORY_SUBCATEGORIES', '<strong>Doel</strong> categorie-ID#%u is ongeldig (bevat subcategorieën)');
define('SUCCESS_PRODUCT_COPIED', 'product: %1$s is gekoppeld aan categorie-ID#%2$u<br>');
define('SUCCESS_COPY_LINKED', '%1$u product(en) gekoppeld van broncategorie-ID#%2$u aan doelcategorie-ID#%3$u');
define('WARNING_COPY_FROM_IN_TO_LINKED', 'WAARSCHUWING: Geen producten gekopieerd (alle producten in categorie-ID #%1$u zijn al gekoppeld aan categorie-ID#%2$u)');

// Verwijder gekoppelde producten in referentiecategorie uit doelcategorie
define('TEXT_HEADING_REMOVE_ALL_PRODUCTS_FROM_CATEGORY_LINKED', 'Verwijder gelinkte producten uit een categorie');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', 'Voorbeeld: het gebruik van referentiecategorie #8 en doelcategorie #22 verwijdert alle gekoppelde producten uit de doelcategorie #22 die bestaan in de referentiecategorie #8. Geen enkel product in doelcategorie #22 kan een hoofdcategorie-ID van #22 hebben (in dat geval moet het opnieuw worden toegewezen aan een andere categorie).<br><strong>Huidige categorie-ID#%u.</strong>');
define('TEXT_LABEL_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Selecteer ALLE producten in de referentiecategorie: ');
define('TEXT_LABEL_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Verwijder alle gekoppelde producten uit de doelcategorie: ');
define('BUTTON_REMOVE_CATEGORY_LINKED', 'Verwijder gelinkte producten');
define('SUCCESS_REMOVED_PRODUCT', 'product: %1$s is verwijderd uit categorie-ID#%2$u<br>');
define('SUCCESS_REMOVE_LINKED_PRODUCTS', '%u gekoppelde product (en) verwijderd');
define('WARNING_REMOVE_FROM_IN_TO_LINKED', 'WAARSCHUWING: niets te doen! Er zijn geen producten in doelcategorie-ID#%1$u gekoppeld vanuit referentiecategorie-ID#%2$u');
define('WARNING_PRODUCT_MASTER_CATEGORY_IN_TARGET','Product: ID#%1$u "%2$s" (%3$s)<br>heeft dezelfde hoofdcategorie-ID als de doelcategorie-ID#%4$u<br>');
define('WARNING_REMOVE_LINKED_PRODUCTS_MASTER_CATEGORIES_ID_CONFLICT', '<strong>WAARSCHUWING: ID HOOFDCATEGORIEËN CONFLICT!</strong><br>Referentiecategorie-ID#%1$u voor het verwijderen van gekoppelde producten in doelcategorie-ID#%2$u.<br>U heeft verzocht om verwijdering van enkele gekoppelde producten van een doelcategorie. Een of meer van die producten hebben dezelfde hoofdcategorie-ID als de doelcategorie. Dit betekent dat het product niet "gekoppeld" is aan de doelcategorie maar "zich bevindt" in die categorie en dus niet kan worden verwijderd als onderdeel van dit verzoek om <i>gekoppelde</i> producten te verwijderen.<br>Als u wilt <i>bewaar</i> dit product, u moet de hoofdcategorie-ID wijzigen in een andere categorie (dwz "verplaatsen") voordat u dit proces opnieuw uitvoert. Dit kan gedaan worden op deze pagina of via de "Verplaats" actie op een Categorie-Product lijst pagina. Het eerste product met een conflicterende hoofdcategorie-ID is al geselecteerd om te bewerken.<br/>Als u dit product <i>wilt verwijderen</i>, moet u de actie "Verwijderen" gebruiken op de pagina Categorie-productlijst. .');

// Reset hoofdcategorie-ID voor alle producten in een categorie
define('TEXT_HEADING_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', 'Stel de hoofdcategorie-ID opnieuw in voor ALLE producten in een categorie');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', 'Voorbeeld: het resetten van categorie 22 zal een hoofdcategorie-ID van 22 toewijzen aan ALLE producten in categorie 22.');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Reset de hoofdcategorie-ID voor alle producten in de categorie: ');
define('BUTTON_RESET_CATEGORY_MASTER', 'Hoofdcategorie-ID resetten');
define('SUCCESS_RESET_PRODUCTS_MASTER_CATEGORY', 'Alle producten in categorie-ID #% 1 $ d zijn opnieuw ingesteld op hoofdcategorie-ID#%1$d');
define('TEXT_CATEGORIES_NAME', 'Categorieënnaam');
