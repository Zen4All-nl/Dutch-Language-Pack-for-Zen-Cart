<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2020 Apr 30 Modified in v1.5.7 $
 */
define('HEADING_TITLE', 'Optienaam Manager');
define('TEXT_ATTRIBUTES_CONTROLLER', 'Kenmerken Controller');

define('TEXT_WARNING_TEXT_OPTION_NAME_RESTORED', 'Waarschuwing: de optiewaarde TEXT ID#0 bleek te ontbreken in de databasetabel "' . TABLE_PRODUCTS_OPTIONS_VALUES . '". Dit kan te wijten zijn aan een onjuist gecodeerde plug-in.<br>De waarde is correct hersteld.');
define('TABLE_HEADING_PRODUCT', 'productnaam');
define('TABLE_HEADING_OPTION_NAME', 'Optienaam');
define('TABLE_HEADING_OPTION_VALUE', 'Optie waarde');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_PRODUCT_OPTIONS_INFO','<strong>Opmerking: bewerk de optienaam voor aanvullende instellingen</strong>');

define('TEXT_WARNING_OF_DELETE', 'Deze optienaam wordt gebruikt door de onderstaande product(en): het kan niet worden verwijderd totdat alle optiewaarden (kenmerken) die aan deze optienaam zijn gekoppeld, uit deze producten zijn verwijderd (dit kan worden gedaan met de onderstaande Global Tools)');
define('TEXT_OK_TO_DELETE', 'Deze optienaam wordt door geen enkel product gebruikt - het is veilig om het te verwijderen.<br><strong>Waarschuwing:</strong> hiermee worden zowel de optienaam als alle optiewaarden die aan die optienaam zijn gekoppeld, verwijderd.');

define('TEXT_OPTION_ID', 'Optie ID');
define('TEXT_OPTION_NAME', 'Optienaam');

define('TEXT_WARNING_DUPLICATE_OPTION_NAME','Optie-ID#%1$u: duplicaat optienaam toegevoegd: "%2$s" (%3$s)');

define('TEXT_ORDER_BY','Sorteer op');
define('TEXT_SORT_ORDER','sorteervolgorde');

define('TABLE_HEADING_OPTION_TYPE', 'Optietype');
define('TABLE_HEADING_OPTION_NAME_SIZE','Grootte');
define('TABLE_HEADING_OPTION_NAME_MAX','Max');

define('TEXT_OPTION_NAME_COMMENTS','Commentaar (weergegeven naast Optienaam)');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', 'Atribuut afbeeldingen per rij');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', 'Kenmerk Afbeeldingslay-outstijl (alleen voor Checkbox/Radio selectie)');
define('TEXT_OPTION_ATTRIBUTE_LAYOUTS_EXAMPLE', 'Bekijk voorbeelden');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0 - Selectie + tekst, afbeeldingen onder opties');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1 - Selectie + afbeelding + optie inline');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2 - Selectie + optie + afbeelding wrapped');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3 - Selectie + afbeelding + optie wrapped');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4 - Afbeelding + optie + selectie als kolom');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5 - Selectie + afbeelding + optie als kolom');
//text attributes only
define('TEXT_OPTION_NAME_ROWS', 'Rijen');
define('TEXT_OPTION_NAME_SIZE','Getoonde grootte');
define('TEXT_OPTION_NAME_MAX','Maximale lengte');
define('TEXT_OPTION_TYPE_TEXT_ATTRIBUTE_INFO', 'Notitie: ' . TEXT_OPTION_NAME_ROWS . ', ' . TEXT_OPTION_NAME_SIZE . ' en ' . TEXT_OPTION_NAME_MAX . ' zijn alleen voor Optinaam type "Tekst".');
define('TEXT_INSERT_NEW_OPTION_NAME', 'Voeg een nieuwe optienaam toe');

// Global Tools
define('TEXT_GLOBAL_TOOLS', 'Global Tools');
define('TEXT_CLICK_TO_SHOW_HIDE', 'klik om te tonen/verbergen');
define('TEXT_WARNING_BACKUP', 'Belangrijk: maak altijd een geverifieerde back-up van uw database voordat u globale wijzigingen aanbrengt of Global Tools gebruikt');
define('TEXT_SELECT_OPTION_TYPES_ALLOWED', 'Merk op dat Global Tools niet kan worden gebruikt met optienaamtypen "Tekst" of "Bestand".');
define('TEXT_SELECT_PRODUCT', 'Selecteer een product');
define('TEXT_SELECT_CATEGORY', 'Kies een categorie');
define('TEXT_SELECT_OPTION', 'Selecteer een optienaam');
define('TEXT_NAME', 'Naam');

// Add
define('TEXT_INFO_OPTION_VALUES_ADD', '<strong>Opmerking:</strong> voor producten die worden bijgewerkt (ontvang extra optiewaarden) met behulp van de <b>Add</b> -tools, wordt de sorteervolgorde voor de optiewaarden (attributen) teruggezet op de <strong>standaard</strong> sorteervolgorde voor die optienaam.');

define('TEXT_OPTION_VALUE_ADD_ALL', 'Werk alle resterende optiewaarden bij (voeg ze toe) aan ALLE producten die deze optienaam gebruiken');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', 'Voor ALLE producten die de geselecteerde optienaam gebruiken (en dus ten minste één optiewaarde hebben toegewezen), voegt u ALLE andere optiewaarden toe die aan de optienaam zijn gekoppeld.');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', 'Update (voeg) alle resterende Optiewaarden toe aan ÉÉN product dat deze Optienaam gebruikt');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', 'Voor een product dat de geselecteerde optienaam gebruikt (en dus ten minste één optiewaarde heeft toegewezen), voegt u ALLE andere optiewaarden toe die aan de optienaam zijn gekoppeld.');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', 'Werk alle resterende optiewaarden bij (voeg ze toe) aan ALLE producten in een categorie die deze optienaam gebruiken');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', 'Voor producten in ÉÉN categorie die de geselecteerde optienaam gebruiken, voegt u ALLE andere optiewaarden toe die aan de optienaam zijn gekoppeld.');
define('TEXT_SHOW_CATEGORY_PATH', 'Categoriepad weergeven');
define('TEXT_SHOW_CATEGORY_NAME', 'Toon alleen de categorienaam');

// messageStack
define('SUCCESS_PRODUCT_OPTION_VALUE', 'Optienaam "%1$s": Optiewaarde "%2$s" toegevoegd aan product "%3$s".');
define('SUCCESS_PRODUCT_OPTIONS_VALUES_SORT_ORDER', 'Optienaam "%1$s": product "%2$s" Optiewaarden bijgewerkt naar de standaardsorteervolgorde voor Optienaam "%1$s".');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', 'Optienaam "%1$s": %2$u product(en) bijgewerkt met extra optiewaarden.');

define('ERROR_PRODUCTS_OPTIONS_PRODUCTS', 'Waarschuwing: geen overeenkomende product(en) gevonden met optienaam "%s" (niets is bijgewerkt).');
define('ERROR_PRODUCTS_OPTIONS_VALUES', 'Waarschuwing: alle overeenkomende product(en) hebben al alle optiewaarden voor optienaam "%s" (niets is bijgewerkt).');

// Delete
define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>OPMERKING:</strong> alle optiewaarden worden verwijderd uit de overeenkomende/de geselecteerde product(en). Hiermee worden de optiewaarden die voor die optienaam zijn gedefinieerd, niet verwijderd.');
define('TEXT_OPTION_VALUE_DELETE_ALL', 'Verwijder alle optiewaarden van ALLE producten met deze optienaam');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Verwijder voor ALLE producten die de geselecteerde optienaam gebruiken alle optiewaarden / de optienaam.');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', 'Verwijder alle optiewaarden van ÉÉN product met deze optienaam');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', 'Voor een product dat de geselecteerde optienaam gebruikt, verwijdert u ALLE optiewaarden / de optienaam.');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', 'Verwijder alle optiewaarden uit ÉÉN categorie producten voor deze optienaam');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', 'Verwijder voor alle producten in ÉÉN categorie die de geselecteerde optienaam gebruiken alle optiewaarden / de optienaam.');

// messageStack
define('SUCCESS_PRODUCT_OPTION_VALUES_DELETED', 'Optienaam "%1$s": alle optiewaarden verwijderd uit product "%2$s".');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES_DELETED', 'Optienaam "%1$s": alle optiewaarden verwijderd uit%2$u product(en).');

// Copy
define('TEXT_OPTION_VALUE_COPY_ALL', 'Kopieer alle optiewaarden naar een andere optienaam');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Alle optiewaarden van de geselecteerde optienaam worden gekopieerd (toegevoegd) naar een andere optienaam.');
define('TEXT_SELECT_OPTION_FROM', 'Kopiëren van optienaam: ');
define('TEXT_SELECT_OPTION_TO', 'Kopiëren naar optienaam: ');

define('SUCCESS_OPTION_VALUE_COPIED', 'Optiewaarde "%6$s" ID#%5$u gekopieerd van optienaam "%2$s" ID#%1$u naar optienaam "%4$s" ID#%3$u.');
define('SUCCESS_OPTION_VALUES_COPIED', '%5$u Optiewaarde (n) gekopieerd van Optienaam "%2$s" ID#%1$u naar Optienaam "%4$s" ID#%3$u.');
define('ERROR_OPTION_VALUES_COPIED', 'Fout: kan optiewaarden niet kopiëren naar dezelfde optienaam ("%2$s" ID#%1$u tot "%4$s" ID#%3$u)!');
define('ERROR_OPTION_VALUES_NONE', 'Fout: Optienaam "%2$s" ID#%1$u heeft geen optiewaarden gedefinieerd (niets te kopiëren)!');
