<?php
/**
 * @ Maintained by Zen4All (https://zen4all.nl)
 * @package languageDefines Dutch
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 21 Modified in v1.5.7 $
 */

// ONDERSTAANDE IS verplaatst naar meta_tags.php
//define('TITLE', 'Zen Cart!');
//define('SITE_TAGLINE', 'De kunst van eCommerce');
//define('CUSTOM_KEYWORDS', 'ecommerce, open source, shop, zen-cart.com, online shopping');
// EINDE: verplaatst naar meta_tags.php

  define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a>. Powered by <a href="https://www.zen-cart.com" rel="noopener noreferrer" target="_blank">Zen Cart</a>');

// kijk in je $PATH_LOCALE/locatie directorie voor beschikbare locatie instellingen..
  $locales = ['nl_NL', 'nl_NL.utf8', 'nl', 'Dutch'];
  @setlocale(LC_TIME, $locales);
  define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // wordt gebruikt voor strftime()
  define('DATE_FORMAT', 'd/m/Y'); // wordt gebruikt voor date()

////
// Datum in onopgemaakt formaat
// $date moet alsvolgt zijn dd/mm/yyyy
// onopgemaakte datum is YYYYMMDD, of DDMMYYYY
  if (!function_exists('zen_date_raw')) {
    function zen_date_raw($date, $reverse = false) {
      if ($reverse) {
        return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
      } else {
        return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
      }
    }
  }

// als USE_DEFAULT_LANGUAGE_CURRENCY aanstaat gebruik dan de onderstaande valuta i.p.v. de ingestelde standaard valuta.
  define('LANGUAGE_CURRENCY', 'EUR');

// algemene gegevens voor <html> tags
  define('HTML_PARAMS','dir="ltr" lang="nl"');

// karakterset voor webpaginas en e-mails
  define('CHARSET', 'utf-8');

// Definieer hier de naam van de waardebonnen zoals E-Cadeaubon, Waardebon, Geschenkbon etc. voor gebruik in de webshop
  define('TEXT_GV_NAME','Waardebon');
  define('TEXT_GV_NAMES','Waardebonnen');

// aanduiding voor Geschenkbon inwisselcode, Waardebon code of Cadeaubon id
  define('TEXT_GV_REDEEM','Waardebon inwisselcode');

// aanduiding voor geslacht
  define('MALE', 'Man');
  define('FEMALE', 'Vrouw');

// defineer de tekst bij geboortedatum
  define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

// defineer de tekst voor de kop van sideboxes
  define('BOX_HEADING_LINKS', '&nbsp;&nbsp;[meer]');

// defineer tekst voor de categorie sidebox in sideboxes/categories.php
  define('BOX_HEADING_CATEGORIES', 'Categorieën');

// Tekst voor de leveranciers/merk sidebox in sideboxes/manufacturers.php
  define('BOX_HEADING_MANUFACTURERS', 'Merken');

// defineer wat is nieuw text in sideboxes/whats_new.php
  define('BOX_HEADING_WHATS_NEW', 'Nieuw in ons assortiment');
  define('CATEGORIES_BOX_HEADING_WHATS_NEW', 'Nieuwe artikelen...');

  define('BOX_HEADING_FEATURED_PRODUCTS', 'Aanbiedingen');
  define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS', 'Aanbiedingen...');
  define('TEXT_NO_FEATURED_PRODUCTS', 'Kom binnenkort terug om onze aanbiedingen te zien.');

  define('TEXT_NO_ALL_PRODUCTS', 'Wij zijn bezig artikelen toe te voegen.<br> Wij hopen u snel weer te mogen begroeten!');
  define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', 'Alle artikelen...');

// Tekst van het zoekvak in sideboxes/quick_find.php
  define('BOX_HEADING_SEARCH', 'Zoek');
  define('BOX_SEARCH_ADVANCED_SEARCH', 'Uitgebreid zoeken');

// Tekst van de aanbiedingen box in sideboxes/specials.php
  define('BOX_HEADING_SPECIALS', 'Aanbiedingen');
  define('CATEGORIES_BOX_HEADING_SPECIALS','Aanbiedingen...');

// Tekst van de artikel beoordelingen in sideboxes/reviews.php
  define('BOX_HEADING_REVIEWS', 'Recensies');
  define('BOX_REVIEWS_WRITE_REVIEW', 'Schrijf een recensie over dit artikel.');
  define('BOX_REVIEWS_NO_REVIEWS', 'Op dit moment zijn er nog geen recensie\'s.');
  define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s van 5 sterren!');

// Tekst van de winkelwagen in sideboxes/shopping_cart.php
  define('BOX_HEADING_SHOPPING_CART', 'Winkelwagen');
  define('BOX_SHOPPING_CART_EMPTY', 'Winkelwagen is nog leeg.');
  define('BOX_SHOPPING_CART_DIVIDER', 'x-&nbsp;');

// Tekst van de orderhistorie in sideboxes/order_history.php
  define('BOX_HEADING_CUSTOMER_ORDERS', 'Snel herbestellen');

// Tekst populaire artikelen box in sideboxes/best_sellers.php
  define('BOX_HEADING_BESTSELLERS', 'Bestsellers');

// Tekst van de artikel notificatie box in sideboxes/products_notifications.php
  define('BOX_HEADING_NOTIFICATIONS', 'Artikelnotificatie');
  define('BOX_NOTIFICATIONS_NOTIFY', 'Informeer mij over de status van <strong>%s</strong>');
  define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'Informeer mij niet langer over de status van  <strong>%s</strong>');

// Tekst van de fabrikanten box
  define('BOX_HEADING_MANUFACTURER_INFO', 'Merken info');
  define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s Homepage');
  define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Andere artikelen');

// Tekst van de taalselectie box in sideboxes/languages.php
  define('BOX_HEADING_LANGUAGES', 'Talen');

// Valuta box tekst in sideboxes/currencies.php
  define('BOX_HEADING_CURRENCIES', 'Valuta');

// informatiebox tekst in sideboxes/information.php
  define('BOX_HEADING_INFORMATION', 'Informatie');
  define('BOX_INFORMATION_PRIVACY', 'Privacyverklaring');
  define('BOX_INFORMATION_CONDITIONS', 'Algemene voorwaarden');
  define('BOX_INFORMATION_SHIPPING', 'Verzenden &amp; retouren');
  define('BOX_INFORMATION_CONTACT', 'Contact');
  define('BOX_INFORMATION_UNSUBSCRIBE', 'Afmelden nieuwsbrief');

  define('BOX_INFORMATION_SITE_MAP', 'Sitemap');

// informatie box tekst in sideboxes/more_information.php - waar TUTORIAL_
  define('BOX_HEADING_MORE_INFORMATION', 'Meer info');
  define('BOX_INFORMATION_PAGE_2', 'Pagina 2');
  define('BOX_INFORMATION_PAGE_3', 'Pagina 3');
  define('BOX_INFORMATION_PAGE_4', 'Pagina 4');

// Tekst nieuw factuuradres
  define('SET_AS_PRIMARY' , 'Stel in als hoofd adres');

// javascript berichten
  define('JS_ERROR', 'Er is een fout opgetreden tijden het verwerken van het formulier. \n\nVul s.v.p. alsnog de volgende velden in:\n\n');

  define('JS_REVIEW_TEXT', '* Uw recensie moet minimaal ' . REVIEW_TEXT_MIN_LENGTH . ' karakters bevatten.');
  define('JS_REVIEW_RATING', '* Selecteert u alstublieft een waardering (5 sterren is hoogst) voor dit artikel.');

  define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Selecteer een betalingsmethode.');

  define('JS_ERROR_SUBMITTED', 'U probeert het formulier meer dan 1 maal te verwerken. Druk op OK en wacht totdat uw aanvraag is verwerkt.');

  define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Selecteer betalingsmethode.');
  define('ERROR_CONDITIONS_NOT_ACCEPTED', 'Om uw bestelling uit te kunnen voeren verzoeken wij u onze algemene (leverings)voorwaarden door te lezen en te accepteren door het onderstaande hokje aan te vinken.');
  define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', 'Om uw klantgegevens vast te kunnen leggen verzoeken wij u onze privacy verklaring door te lezen en te accepteren door het onderstaande hokje aan te vinken.');

  define('CATEGORY_COMPANY', 'Bedrijfsnaam');
  define('CATEGORY_PERSONAL', 'Persoonlijke gegevens');
  define('PULL_DOWN_DEFAULT', 'Selecteer uw land');
  define('PLEASE_SELECT', 'Selecteer ...');
  define('TYPE_BELOW', 'Maak een keuze ...');

  define('ENTRY_COMPANY', 'Bedrijfsnaam:');
  define('ENTRY_COMPANY_ERROR', 'Voer een bedrijfsnaam in.');
  define('ENTRY_COMPANY_TEXT', '');
  define('ENTRY_GENDER', 'Aanhef:');
  define('ENTRY_GENDER_ERROR', 'Kies uw aanhef.');
  define('ENTRY_GENDER_TEXT', '*');
  define('ENTRY_FIRST_NAME', 'Voornaam:');
  define('ENTRY_FIRST_NAME_ERROR', 'Uw voornaam moet voor ons systeem minimaal ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' letters hebben.');
  define('ENTRY_FIRST_NAME_TEXT', '*');
  define('ENTRY_LAST_NAME', 'Achternaam:');
  define('ENTRY_LAST_NAME_ERROR', 'Uw achternaam moet voor ons systeem minimaal ' . ENTRY_LAST_NAME_MIN_LENGTH . ' letters hebben.');
  define('ENTRY_LAST_NAME_TEXT', '*');
  define('ENTRY_DATE_OF_BIRTH', 'Geboortedatum:');
  define('ENTRY_DATE_OF_BIRTH_ERROR', 'Klopt uw geboortedatum? Ons systeem verwacht een datum in dit formaat: DD/MM/YYYY (bijv. 21/05/1970) of dit formaat: DD-MM-YYYY (bijv. 21-05-1970)');
  define('ENTRY_DATE_OF_BIRTH_TEXT', '* (bijv. 21/05/1995 of 05-21-1970)');
  define('ENTRY_EMAIL_ADDRESS', 'E-mailadres:');
  define('ENTRY_EMAIL_ADDRESS_ERROR', 'Uw e-mailadres moet voor ons systeem minimaal ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' tekens en een @ bevatten.');
  define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Heeft u het e-mailadres correct ingevoerd? Controleer dit en probeer het nogmaals.');
  define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Uw e-mailadres is reeds bij ons geregistreerd! Probeer aan te melden met uw bestaande account. Weet u uw wachtwoord niet meer, gebruik dan de Wachtwoord vergeten optie. Heeft u een nieuw e-mailadres geef dit door via Mijn account.');
  define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
  define('ENTRY_NICK', 'Gebruikersnaam forum:');
  define('ENTRY_NICK_TEXT', '*'); // nb dit word weergegeven naast het forum gebruikersnaam invulveld
  define('ENTRY_NICK_DUPLICATE_ERROR', 'Deze gebruikersnaam is reeds in gebruik. Vul een andere gebruikersnaam in.');
  define('ENTRY_STREET_ADDRESS', 'Straatnaam en huisnummer:');
  define('ENTRY_STREET_ADDRESS_ERROR', 'Uw straatnaam moet voor ons systeem minimaal ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' tekens bevatten.');
  define('ENTRY_STREET_ADDRESS_TEXT', '*');
  define('ENTRY_SUBURB', 'Extra adresregel:');
  define('ENTRY_SUBURB_TEXT', '');
  define('ENTRY_POST_CODE', 'Postcode:');
  define('ENTRY_POST_CODE_ERROR', 'Voor postcode moet u minimaal ' . ENTRY_POSTCODE_MIN_LENGTH . ' tekens invoeren.');
  define('ENTRY_POST_CODE_TEXT', '*');
  define('ENTRY_CITY', 'Woonplaats:');
  define('ENTRY_CUSTOMERS_REFERRAL', 'Referentienummer:');

  define('ENTRY_CITY_ERROR', 'Voor woonplaats moet u minimaal ' . ENTRY_CITY_MIN_LENGTH . ' tekens invoeren.');
  define('ENTRY_CITY_TEXT', '*');
  define('ENTRY_STATE', 'Provincie:');
  define('ENTRY_STATE_ERROR', 'Voor provincie moet u minimaal ' . ENTRY_STATE_MIN_LENGTH . ' tekens invoeren.');
  define('ENTRY_STATE_ERROR_SELECT', 'Kies uw provincie uit het rolmenu.');
  define('ENTRY_STATE_TEXT', '*');
  define('ENTRY_COUNTRY', 'Land:');
  define('ENTRY_COUNTRY_ERROR', 'U moet uw land kiezen uit het pull down menu.');
  define('ENTRY_COUNTRY_TEXT', '*');
  define('ENTRY_TELEPHONE_NUMBER', 'Telefoon:');
  define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Voor telefoonnummer moet u minimaal ' . ENTRY_TELEPHONE_MIN_LENGTH . ' nummers invullen.');
  define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
  define('ENTRY_FAX_NUMBER', 'Fax:');
  define('ENTRY_FAX_NUMBER_TEXT', '');
  define('ENTRY_NEWSLETTER', 'Ja, ik ontvang graag de nieuwsbrief');
  define('ENTRY_NEWSLETTER_TEXT', '');
  define('ENTRY_PASSWORD', 'Wachtwoord:');
  define('ENTRY_PASSWORD_ERROR', 'Voor wachtwoord moet u minimaal ' . ENTRY_PASSWORD_MIN_LENGTH . ' tekens invoeren.');
  define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Wachtwoorden komen niet overeen, probeer het nogmaals.');
  define('ENTRY_PASSWORD_TEXT', '* (minimaal ' . ENTRY_PASSWORD_MIN_LENGTH . ' tekens)');
  define('ENTRY_PASSWORD_CONFIRMATION', 'Herhaal wachtwoord:');
  define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT', 'Huidige wachtwoord:');
  define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
  define('ENTRY_PASSWORD_NEW', 'Nieuw wachtwoord:');
  define('ENTRY_PASSWORD_NEW_TEXT', '*');
  define('ENTRY_PASSWORD_NEW_ERROR', 'Uw nieuwe wachtwoord moet minstens ' . ENTRY_PASSWORD_MIN_LENGTH . ' tekens bevatten.');
  define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Wachtwoorden komen niet overeen, probeer het nogmaals.');

  define('FORM_REQUIRED_INFORMATION', '* verplicht veld');
  define('ENTRY_REQUIRED_SYMBOL', '*');
  define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="alert">*</span>');

  // in gebruik door de zen_prev_next_display navigatie
  define('TEXT_RESULT_PAGE', '');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Toon <strong>%d</strong> tot <strong>%d</strong> (van <strong>%d</strong> artikelen)');
  define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Toon <strong>%d</strong> tot <strong>%d</strong> (van <strong>%d</strong> bestellingen)');
  define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Toon <strong>%d</strong> tot <strong>%d</strong> (van <strong>%d</strong> recensies)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Toon <strong>%d</strong> tot <strong>%d</strong> (van <strong>%d</strong> artikelen)');
  define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Toon <strong>%d</strong> tot <strong>%d</strong> (van <strong>%d</strong> aanbiedingen)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS', 'Toon <strong>%d</strong> tot <strong>%d</strong> (van <strong>%d</strong> artikelen)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL', 'Toon <strong>%d</strong> tot <strong>%d</strong> (van <strong>%d</strong> artikelen)');

  define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Vorige pagina');
  define('PREVNEXT_TITLE_NEXT_PAGE', 'Volgende pagina');
  define('PREVNEXT_TITLE_PAGE_NO', 'Pagina %d');
  define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Vorige %d pagina\'s');
  define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Volgende %d pagina\'s');
  define('PREVNEXT_BUTTON_PREV', '[&laquo;&nbsp;Vorige]');
  define('PREVNEXT_BUTTON_NEXT', '[Volgende&nbsp;&raquo;]');

define('ARIA_PAGINATION_ROLE_LABEL_GENERAL','Paginering');
define('ARIA_PAGINATION_ROLE_LABEL_FOR','%s Paginering'); // eg: "Search results Pagination"
define('ARIA_PAGINATION_PREVIOUS_PAGE','Ga naar de vorige pagina');
define('ARIA_PAGINATION_NEXT_PAGE','Ga naar de volgende pagina');
define('ARIA_PAGINATION_CURRENT_PAGE','Huidige pagina');
define('ARIA_PAGINATION_CURRENTLY_ON',', nu op pagina %s');
define('ARIA_PAGINATION_GOTO','Ga naar ');
define('ARIA_PAGINATION_PAGE_NUM','Pagina %s');
define('ARIA_PAGINATION_ELLIPSIS_PREVIOUS','Haal de vorige groep pagina\'s op');
define('ARIA_PAGINATION_ELLIPSIS_NEXT','Haal de volgende groep pagina\'s op');
define('ARIA_PAGINATION_','');

  define('TEXT_BASE_PRICE','Vanaf: ');

  define('TEXT_CLICK_TO_ENLARGE', 'Afbeelding vergroten');

  define('TEXT_SORT_PRODUCTS', 'Artikelen sorteren ');
  define('TEXT_DESCENDINGLY', 'aflopend');
  define('TEXT_ASCENDINGLY', 'oplopend');
  define('TEXT_BY', ' door ');

  define('TEXT_REVIEW_BY', 'door %s');
  define('TEXT_REVIEW_DATE_ADDED', 'Datum toegevoegd: %s');
  define('TEXT_NO_REVIEWS', 'Momenteel nog geen recensies.');

  define('TEXT_NO_NEW_PRODUCTS', 'Binnenkort meer nieuwe artikelen. Kom snel weer kijken.');

  define('TEXT_UNKNOWN_TAX_RATE', 'Btw');

  define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'Waarschuwing: Kon het taalbestand niet vinden: ');

  define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Vervaldatum van uw creditcard is ongeldig. Controleer de datum en probeer het nogmaals.');
  define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Dit creditcardnummer is ongeldig. Controleer het nummer en probeer het nogmaals.');
  define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Het creditcardnummer beginnende met %s is niet juist ingevuld of wij accepteren uw type card niet. Controleer het nummer of gebruik een andere card/betalingsmethode.');

  define('BOX_INFORMATION_DISCOUNT_COUPONS', 'Kortingsbonnen');
  define('BOX_INFORMATION_GV', TEXT_GV_NAME . ' FAQ');
  define('VOUCHER_BALANCE', TEXT_GV_NAME . ' Tegoed ');
  define('BOX_HEADING_GIFT_VOUCHER', TEXT_GV_NAME . ' Gebruikersnaam');
  define('GV_FAQ', TEXT_GV_NAME . ' FAQ');
  define('ERROR_REDEEMED_AMOUNT', 'Gefeliciteerd, u heeft ingewisseld ');
  define('ERROR_NO_REDEEM_CODE', 'U heb geen ' . TEXT_GV_REDEEM . ' ingevuld.');
  define('ERROR_NO_INVALID_REDEEM_GV', 'Ongeldige ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM);
  define('TABLE_HEADING_CREDIT', 'Beschikbaar tegoed');

  define('TEXT_SEND_OR_SPEND','U heeft een tegoed beschikbaar in uw ' . TEXT_GV_NAME . ' account. U kunt het uitgeven of het aan iemand toesturen. Om te verzenden kunt u op de knop hieronder klikken.');
  define('TEXT_BALANCE_IS', 'Uw ' . TEXT_GV_NAME . ' tegoed is: ');
  define('TEXT_AVAILABLE_BALANCE', 'Uw ' . TEXT_GV_NAME . ' account');

// betalingsmethode is waardebon/korting
  define('PAYMENT_METHOD_GV', 'Cadeau- of waardebon');
  define('PAYMENT_MODULE_GV', 'Waardebon/Korting');

  define('TABLE_HEADING_CREDIT_PAYMENT', 'Beschikbaar tegoed');

//coupon verzilver foutmeldingen (betaling bij afrekenen)
  define('TEXT_COUPON_LINK_TITLE', 'zie de couponvoorwaarden');
  define('TEXT_INVALID_REDEEM_COUPON', 'Couponcode "%s" is geen geldige code.');
  define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', 'Je moet ten minste %2$s uitgeven om coupon "%1$s" in te wisselen.');
  define('TEXT_INVALID_COUPON_PRODUCT', 'De coupon "%1$s" is niet geldig voor enig product in uw winkelwagen.');
  define('TEXT_INVALID_COUPON_ORDER_LIMIT', 'U heeft het totaal aantal toegestane bestellingen (%2$u) overschreden om de coupon "%1$s" te gebruiken.');
  define('TEXT_INVALID_STARTDATE_COUPON', 'De coupon "%1$s" is niet geldig tot %2$s.');
  define('TEXT_INVALID_FINISHDATE_COUPON', 'De coupon "%1$s" is nu niet geldig (verlopen %2$s).');
  define('TEXT_INVALID_USES_COUPON', 'Coupon "%1$s" is al gebruikt op de maximaal toegestane tijden (%2$u).');
  define('TEXT_INVALID_USES_USER_COUPON', 'U heeft coupon "%1$s" het maximale aantal keren per klant (%2$u) toegestaan.');
  define('TEXT_REMOVE_REDEEM_COUPON_ZONE', 'De coupon "%s" is niet geldig voor het adres dat je hebt geselecteerd.');
  define('TEXT_ERROR', 'Er heeft zich een fout voorgedaan');

  define('TEXT_VALID_COUPON', 'Gefeliciteerd, u heeft de kortingsbon ingewisseld');


// meer info inplaats van koop nu
  define('MORE_INFO_TEXT','... meer info');

// ipadres
  define('TEXT_YOUR_IP_ADDRESS','Uw ip adres is: ');

// algemene adreskop
  define('HEADING_ADDRESS_INFORMATION','Adres informatie');

// inhoud winkelwagen
  define('PRODUCTS_ORDER_QTY_TEXT_IN_CART','Aantal in winkelwagen: ');
  define('PRODUCTS_ORDER_QTY_TEXT','In winkelwagen: ');
  define('ARIA_QTY_ADD_TO_CART','Enter quantity to add to cart');
  define('ARIA_EDIT_QTY_IN_CART','Edit quantity in cart');
  define('ARIA_DELETE_ITEM_FROM_CART', 'Delete this item from the cart');

// bericht na succesvol toevoegen aan winkelwagen als het winkelwagen ingesteld staat op niet weergeven
// niks invullen voor geen berichten
// geld voor alle paginas behalve daar waar meerdere artikelen in winkelwagen plaatsen aanstaat :
  define('SUCCESS_ADDED_TO_CART_PRODUCT', 'Gekozen artikel is in uw winkelwagen geplaatst...');
// alleen voor meerdere artikelen in winkelwagen plaatsen:
  define('SUCCESS_ADDED_TO_CART_PRODUCTS', 'Gekozen artikel(en) in winkelwagen geplaatst...');

  define('TEXT_PRODUCT_WEIGHT_UNIT','kg');

// Verzending
  define('TEXT_SHIPPING_WEIGHT','kg');
  define('TEXT_SHIPPING_BOXES', 'Dozen');

// Actiebesparing
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Korting:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% korting');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;korting');

// Aanbiedingsprijsen
  define('PRODUCT_PRICE_SALE','Aanbieding:&nbsp;');

//algemene symbolen
  define('TEXT_NUMBER_SYMBOL', '# ');

// banner_box
  define('BOX_HEADING_BANNER_BOX','Advertentie');
  define('TEXT_BANNER_BOX','Bezoek onze adverteerder...');

// banner box 2
  define('BOX_HEADING_BANNER_BOX2','Wist u dit al...');
  define('TEXT_BANNER_BOX2','Bekijk vandaag nog onze aanbieding!');

// banner_box - all
  define('BOX_HEADING_BANNER_BOX_ALL','Advertentie');
  define('TEXT_BANNER_BOX_ALL','Bezoek onze adverteerder...');

// definitie van boksen
  define('PULL_DOWN_ALL','Maak een keuze');
  define('PULL_DOWN_MANUFACTURERS','- Herstellen -');
// verzendkosten berekenen
  define('PULL_DOWN_SHIPPING_ESTIMATOR_SELECT', 'Maak een keuze');

// algemeen sorteren op
  define('TEXT_INFO_SORT_BY','Sorteren op: ');

// sluiten van popup afbeelding
  define('TEXT_CLOSE_WINDOW',' - Klik op de afbeelding om het venster te sluiten');
// popup sluiten
  define('TEXT_CURRENT_CLOSE_WINDOW','[ Sluit venster ]');

// iii 031104 toegevoegd:  Foutmelding voor uploaden bestanden
  define('ERROR_FILETYPE_NOT_ALLOWED', 'Fout:  Bestandstype niet toegestaan.');
  define('WARNING_NO_FILE_UPLOADED', 'Let op:  geen bestand geupload.');
  define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Oké:  bestand is ontvangen.');
  define('ERROR_FILE_NOT_SAVED', 'Fout:  bestand niet opgeslagen');
  define('ERROR_DESTINATION_NOT_WRITEABLE', 'Fout:  geen schrijfrechten binnen doelmap.');
  define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Fout: opgegeven bestandsmap bestaat niet.');
  define('ERROR_FILE_TOO_BIG', 'Letop: bestand tegroot om te versturen!<br>Opdracht kan worden geplaatst maar neem contact met ons op voor hulp met verzenden van uw bestand');
// Einde iii toegevoegd

  define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'LET OP: In verband met gepland onderhoud zal deze site niet bereikbaar zijn op: ');
  define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'LET OP: Onze site is ivm gepland onderhoud niet beschikbaar, wij zien u graag spoedig terug!');

  define('PRODUCTS_PRICE_IS_FREE_TEXT','Gratis!');
  define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT','Prijs op aanvraag');
  define('TEXT_CALL_FOR_PRICE','Prijs op aanvraag');

  define('TEXT_INVALID_SELECTION',' U heeft een ongeldige selectie gemaakt: ');
  define('TEXT_ERROR_OPTION_FOR',' bij de optie: ');
  define('TEXT_INVALID_USER_INPUT', 'Interactie gebruiker nodig<br>');

// weergave artikelen
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Min: ');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Aantal: ');

  define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING','Max:');
  define('TEXT_PRODUCT_MODEL', 'Model: ');
  define('TABLE_HEADING_MODEL', 'Model');

  define('TEXT_PRODUCTS_MIX_OFF','*Mixed artikel UIT');
  define('TEXT_PRODUCTS_MIX_ON','*Mixed artikel AAN');

  define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART','<br>*U kunt de opties van dit item niet samenvoegen om te voldoen aan de minimum aantal eis<br>');
  define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART','*Optie diversen samenvoegen staat AAN<br>');

  define('ERROR_MAXIMUM_QTY','Maximum toegevoegd - Maximum aantal aan winkelwagen toegevoegd ');
  define('ERROR_CORRECTIONS_HEADING','Corrigeer alstublieft: <br>');
  define('ERROR_QUANTITY_ADJUSTED', 'Fout bij veranderen aantal<br>');
  define('ERROR_QUANTITY_CHANGED_FROM', ', is aangepast van: ');
  define('ERROR_QUANTITY_CHANGED_TO', ' naar ');

// Downloadmanager
  define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG','LET OP: Downloads zijn pas beschikbaar nadat de betaling is ontvangen en gecontroleerd');
  define('TEXT_FILESIZE_BYTES', ' bytes');
  define('TEXT_FILESIZE_KBS', ' KB');
  define('TEXT_FILESIZE_MEGS', ' MB');
  define('TEXT_FILESIZE_UNKNOWN', 'Onbekend');

// fouten winkelwagentje
  define('ERROR_PRODUCT','<br>Het item: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br>Helaas is dit artikel momenteel niet leverbaar.<br>Het artikel is uit uw winkelwagen verwijderd.');
  define('ERROR_PRODUCT_ATTRIBUTES','<br>Het item: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART_ATTRIBUTES','<br>Het spijt ons, maar de geselecteerde opties zijn veranderd voor dit product en zijn verwijderd uit onze voorraad op dit moment.<br> Dit item is verwijderd uit uw winkelwagen.');
  define('ERROR_PRODUCT_QUANTITY_MIN',',  ... Minimum aantal - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS',' ... hoeveelheden fout - ');
  define('ERROR_PRODUCT_OPTION_SELECTION','<br> ... waarde van een optie niet mogelijk ');
  define('ERROR_PRODUCT_QUANTITY_ORDERED','<br> Totaal aantal artikelen besteld: ');
  define('ERROR_PRODUCT_QUANTITY_MAX',' ...maximum aantal fout - ');
  define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART',', ... minimum aantal fout - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART',' ... hoeveelheden fout - ');
  define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART',' ... maximum aantal fout - ');

  define('WARNING_SHOPPING_CART_COMBINED', 'NB: Voor uw gemak hebben wij de inhoud van het winkelwagen van uw laatste bezoek alvast toegevoegd aan uw huidige winkelwagen. Controleer de inhoud van uw winkelwagen alvorens af te rekenen.');
  define('WARNING_PRODUCT_QUANTITY_ADJUSTED', 'Het aantal is aangepast aan het aantal op voorraad. ');
  define('OUT_OF_STOCK_CANT_CHECKOUT', 'Producten gemarkeerd met ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' zijn niet op voorraad, of er zijn niet voldioende op voorraad voor uw bestelling.<br>Pas aub de hoeveelheid van de  producten gemarkeerd met (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '). Bednkt');
  define('OUT_OF_STOCK_CAN_CHECKOUT', 'Producten gemarkeerd met ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' zijn niet op voorraad.<br>Items die niet op voorraad zijn worden in backorder geplaatst.');

// fout tijdens betalingverwerking $_SESSION['customers_id' komt niet voor in de tabel customers
  define('ERROR_CUSTOMERS_ID_INVALID', 'Klant gegevens kunnen niet worden gevonden!<br>Alstublieft inloggen of een nieuw account aanmaken...');

  define('TABLE_HEADING_FEATURED_PRODUCTS','Aanbiedingen');

  define('TABLE_HEADING_NEW_PRODUCTS', 'Nieuwe artikelen voor %s');
  define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Binnenkort verwacht');
  define('TABLE_HEADING_DATE_EXPECTED', 'Verwachte datum');
  define('TABLE_HEADING_SPECIALS_INDEX', 'Maandelijkse aanbieding voor %s');

  define('CAPTION_UPCOMING_PRODUCTS','Dit artikel is binnenkort weer voorradig.');

// meta tags speciale definities
  define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT','GRATIS!');

  define('ASK_A_QUESTION', 'Stel een vraag over dit item');

// klant login
  define('TEXT_SHOWCASE_ONLY','Neem contact op');
// instellingen t.b.v. prijsweergave na inloggen
  define('TEXT_LOGIN_FOR_PRICE_PRICE','Prijs niet zichtbaar');
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE','Aanmelden om prijs weer te geven');
// instellingen die gebruikt worden als de webwinkel staat ingesteld als catalogus
  define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', ''); // geen waarde voor prijs of type hier je eigen tekst
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM','Uitsluitend catalogus');

// wacht op autorisatie
  define('TEXT_AUTHORIZATION_PENDING_PRICE', 'Prijs niet weergegeven');
  define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', 'WACHT OP AUTORISATIE');
  define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE','Inloggen in webshop');
  define('TEXT_AUTHORIZATION_PENDING_CHECKOUT', 'Checkout onbeschikbaar - Wacht op goedkeuring');

// tekstprijzen
  define('TEXT_CHARGES_WORD','Berekende toeslag:');
  define('TEXT_PER_WORD','<br>Prijs per woord: ');
  define('TEXT_WORDS_FREE',' Woord(en) gratis ');
  define('TEXT_CHARGES_LETTERS','Berekende toeslag:');
  define('TEXT_PER_LETTER','<br>Prijs per letter: ');
  define('TEXT_LETTERS_FREE',' Letter(s) gratis ');
  define('TEXT_ONETIME_CHARGES','*eenmalige toeslag = ');
  define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*eenmalige toeslag = ');
  define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Optionele staffelkorting');
  define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','AANTAL');
  define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRIJS');
  define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Eenmalige toeslag t.b.v. optionele staffelkorting');

// invoegvelden voor tekstveld
  define('TEXT_MAXIMUM_CHARACTERS_ALLOWED',' maximum aantal toegestane karakters');

// Verzendkosten calculator
  define('CART_SHIPPING_OPTIONS', 'bereken verzendkosten');
  define('CART_SHIPPING_METHOD_TEXT', 'Beschikbare leveringsmethoden');
  define('CART_SHIPPING_METHOD_RATES', 'Tarieven');
  define('CART_SHIPPING_METHOD_TO','Afleveradres: ');
  define('CART_SHIPPING_METHOD_FREE_TEXT','Gratis versturen');
  define('CART_SHIPPING_METHOD_ALL_DOWNLOADS','- Downloads');
  define('CART_SHIPPING_METHOD_ZIP_REQUIRED','true');// NIET VERTALEN!!!
  define('CART_SHIPPING_METHOD_ADDRESS','Adres:');
  define('CART_ITEMS','Artikelen in winkelwagen: ');
  define('ERROR_CART_UPDATE', 'Alstublieft order aanpassen...<br>');
  define('EMPTY_CART_TEXT_NO_QUOTE', 'Whoops! Uw sessie is verlopen... Om uw verzendkosten te berekenen moet u eerst uw winkelwagen verversen...');
  define('CART_SHIPPING_QUOTE_CRITERIA', 'Verzendkosten zijn gebaseerd op het door u geselecteerde adres:');

// meerdere artikelen toevoegen aan winkelwagen
  define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', 'Toevoegen: ');
  define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', 'Toevoegen: ');
  define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', 'Toevoegen: ');
  define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', 'Toevoegen: ');
  //verplaatst SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART naar button_names.php als BUTTON_ADD_PRODUCTS_TO_CART_ALT

// staffelkorting tabel
  define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', 'Staffelprijs');
  define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', 'Nieuwe staffelprijs');
  define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', 'Staffelprijs');
  define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* Korting kan varieren op basis van bovenstaande opties');
  define('TEXT_HEADER_DISCOUNTS_OFF', 'Staffelkorting niet beschikbaar...');

// aflopend en oplopend sorteren van artikelen
  define('PULL_DOWN_ALL_RESET','- Herstellen - ');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', 'Artikel');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', 'Artikel - a -> z');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', 'Prijs - laag -> hoog');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', 'Prijs - hoog -> laag');
  define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', 'Model');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', 'Datum toegevoegd - nieuw -> oud');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', 'Dattum toegevoegd - oud -> nieuw');

// defenities voor de download module
  define('TABLE_HEADING_DOWNLOAD_DATE', 'Link vervalt');
  define('TABLE_HEADING_DOWNLOAD_COUNT', 'Nog te gaan');
  define('HEADING_DOWNLOAD', 'Om uw bestanden te downloaden dient u op de download knop te klikken en vervolgens "Opslaan" te kiezen.');
  define('TABLE_HEADING_DOWNLOAD_FILENAME','Bestandsnaam');
  define('TABLE_HEADING_PRODUCT_NAME','Artikel');
  define('TABLE_HEADING_BYTE_SIZE','Bestandsgrootte');
  define('TEXT_DOWNLOADS_UNLIMITED', 'Onbeperkt');
  define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc
  define('PAYMENT_JAVASCRIPT_DISABLED', 'We could not continue with checkout as Javascript is disabled. You must enable it to continue');

// Tabel kopteksten van winkelwagentje en binnenkort verwachte artikelen
  define('TABLE_HEADING_QUANTITY', 'Aantal');
  define('TABLE_HEADING_PRODUCTS', 'Artikelnaam');
  define('TABLE_HEADING_TOTAL', 'Totaal');

// aanmaken account - login
  define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Privacyverklaring');
  define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Vóór het verzenden van de bestelling moet u akkoord gaan met onze privacyverklaring door het desbetreffende selectievakje in te schakelen. Onze privacyverklaring kunt u <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">hier [klik]</span></a> lezen.');
  define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'Ik heb de privacyverklaring aandachtig doorgelezen en ga uitdrukkelijk akkoord met de inhoud.');
  define('TABLE_HEADING_ADDRESS_DETAILS', 'Adresgegevens');
  define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Overige contactgegevens');
  define('TABLE_HEADING_DATE_OF_BIRTH', 'Geboortedatum');
  define('TABLE_HEADING_LOGIN_DETAILS', 'Logingegevens');
  define('TABLE_HEADING_REFERRAL_DETAILS', 'Bent u op ons geattendeerd?');  // beter vertalen

  define('ERROR_TEXT_COUNTRY_DISABLED_PLEASE_CHANGE', 'Excuus, maar we accepteren geen factuur- en verzendadressen meer in "%s".  Graag dit adres aampassen om verder te kunnen gaan.');

  define('ENTRY_EMAIL_PREFERENCE','Nieuwsbrief en e-mail voorkeuren');
  define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
  define('ENTRY_EMAIL_TEXT_DISPLAY','Alleen tekst');
  define('EMAIL_SEND_FAILED','FOUT: E-mail versturen naar: "%s" <%s> met onderwerp: "%s" is mislukt!');

  define('DB_ERROR_NOT_CONNECTED', 'Fout - kan geen verbinding maken met de database');
  define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="http://www.zen-cart.com/content.php?334-ERROR-0071-There-appears-to-be-a-problem-with-the-database-Maintenance-is-required" target="_blank">ERROR 0071: Er lijkt en probleem met de database te zijn. er is onderhoud nodig.</a>');

// EZ-PAGINAS waarschuwingen
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'LETOP: EZ-PAGINAS KOP - alleen weergegeven voor het admin ip adres');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'LETOP: EZ-PAGINAS VOET - alleen weergegeven voor het admin ip adres');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'LETOP: EZ-PAGINAS SIDEBOX - alleen weergegeven voor het admin ip adres');

// Sorteermogelijkheden van extra artikelenlijst
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER', '');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', 'Items beginnen met...');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET', '-- Herstellen --');
  
// The following message, with the associated severity, is displayed in the storefront header when an admin has logged into
// a customer's account.

// -----
// init_customer_auth.php substitutes the customer's name (%$1s) and customer's email address (%$2s)
// into this message.
//
define('EMP_SHOPPING_FOR_MESSAGE', 'Momenteel aan het winkelen voor %1$s (%2$s).');

// -----
// Identify the messageStack "severity" to be applied to the above message, one of 'success',
// 'warning', 'caution', 'error' (defaults to 'success').
//
define('EMP_SHOPPING_FOR_MESSAGE_SEVERITY', 'success');

// Constants shared between multiple pages
define('TEXT_OPTION_DIVIDER', '&nbsp;-&nbsp;');

///////////////////////////////////////////////////////////

  $file_list = [FILENAME_EMAIL_EXTRAS, FILENAME_HEADER, FILENAME_BUTTON_NAMES, FILENAME_ICON_NAMES, FILENAME_OTHER_IMAGES_NAMES, FILENAME_CREDIT_CARDS, FILENAME_WHOS_ONLINE, FILENAME_META_TAGS];
  foreach ($file_list as $file) { 
    $file = str_replace(".php","",$file); 
    require_once(zen_get_file_directory(DIR_FS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . "/", $file . '.php', 'false'));
  }

// END OF EXTERNAL LANGUAGE LINKS
