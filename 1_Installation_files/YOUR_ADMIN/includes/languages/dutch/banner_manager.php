<?php
/**
 * @ Maintained by Zen4All (https://zen4all.nl)
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 08 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Bannermanager');

define('TABLE_HEADING_BANNERS', 'Banners');
define('TABLE_HEADING_GROUPS', 'Groepen');
define('TABLE_HEADING_STATISTICS', 'Getoond / Geklikt');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_BANNER_OPEN_NEW_WINDOWS','Nieuw venster');
define('TABLE_HEADING_BANNER_ON_SSL', 'Toon in SSL');
define('TABLE_HEADING_ACTION', 'Actie');
define('TABLE_HEADING_BANNER_SORT_ORDER', 'Rang<br />schikking');

define('TEXT_BANNERS_TITLE', 'Naam banner:');
define('TEXT_BANNERS_URL', 'URL banner:');
define('TEXT_BANNERS_GROUP', 'Bannergroep:');
define('TEXT_BANNERS_NEW_GROUP', ', of voeg een nieuwe bannergroep toe');
define('TEXT_BANNERS_IMAGE', 'Afbeelding:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', of voeg een lokaal opgeslagen bestand toe');
define('TEXT_BANNERS_IMAGE_TARGET', 'Afbeelding (opslaan in):');
define('TEXT_BANNER_IMAGE_TARGET_INFO', '<strong>Suggestie locatie:</strong> ' . DIR_FS_CATALOG_IMAGES . 'banners/');
define('TEXT_BANNERS_HTML_TEXT_INFO', '<strong>Let op: HTML banners registreren niet het aanklikken van de banner</strong>');
define('TEXT_BANNERS_HTML_TEXT', 'HTML Text:');
define('TEXT_BANNERS_ALL_SORT_ORDER', 'Rangschikking - banner_box_all');
define('TEXT_BANNERS_ALL_SORT_ORDER_INFO', '<strong>Let op: De banners_box_all sidebox toont de banners in de vastgelegde sorteervolgorde</strong>');
define('TEXT_BANNERS_EXPIRES_ON', 'Vervaldatum:');
define('TEXT_BANNERS_OR_AT', ', of op');
define('TEXT_BANNERS_IMPRESSIONS', 'aantal keer bekeken.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Startdatum:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Banner aandachtspunten:</b><ul><li>Gebruik een een afbeelding of HTML voor de banner - niet beide.</li><li>HTML krijgt prioriteit ten opzichte van een afbeelding</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Afbeelding aandachtspunten:</b><ul><li>Uploading directories moeten geconfigureerd zijn met de juiste gebruikers (schrijf) rechten!</li><li>Vul niet het \'Afbeelding (opslaan in)\' veld in als een afbeelding niet wordt overgebracht naar een webserver (bijv. bij gebruik van een lokale (serverside) afbeelding).</li><li>Het \'Afbeelding (opslaan in)\' veld moet een bestaande directory zijn die eindigt op een slash (bijv: banners/).</li></ul>');
define('TEXT_BANNERS_EXPIRY_NOTE', '<b>Verloopdatum aandachtspunten:</b><ul><li>Slechts één van de 2 velden moet worden ingevuld</li><li>Indien de banner geen automatische verloopdatum moet hebben dan hoeven deze gegevens niet worden ingevuld.</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Agenderen banners aandachtspunten:</b><ul><li>Indien een banner een toekomstige startdatum heeft dan wordt deze actief op deze datum.</li><li>Alle ge-agendeerde banners blijven inactief tot de datum dat ze als actief worden ingesteld.</li></ul>');
define('TEXT_BANNERS_STATUS', 'Bannerstatus:');
define('TEXT_BANNERS_ACTIVE', 'Actief');
define('TEXT_BANNERS_NOT_ACTIVE', 'Niet actief');
define('TEXT_INFO_BANNER_STATUS', '<strong>Opmerking:</strong> Banner status wordt gewijzigd op basis van ingevoerde startdatum en bezoeken');
define('TEXT_BANNERS_OPEN_NEW_WINDOWS', 'Banner in nieuw venster');
define('TEXT_INFO_BANNER_OPEN_NEW_WINDOWS', '<strong>Opmerking:</strong> banner opent in een nieuw venster');
define('TEXT_BANNERS_ON_SSL', 'Banner zichtbaar op SSL');
define('TEXT_INFO_BANNER_ON_SSL', '<strong>Opmerking:</strong> banner zichtbaar op SSL pagina zonder foutmelding.');

define('TEXT_BANNERS_DATE_ADDED', 'Datum toegevoegd:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Startdatum: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Vervaldatum: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Vervaldatum: <b>%s</b> impressions');
define('TEXT_BANNERS_STATUS_CHANGE', 'Laatste wijziging status: %s');

define('TEXT_BANNERS_LAST_3_DAYS', 'Afgelopen 3 dagen');
define('TEXT_BANNERS_BANNER_VIEWS', 'Banner bekeken');
define('TEXT_BANNERS_BANNER_CLICKS', 'Banner kliks');

define('TEXT_INFO_DELETE_INTRO', 'Weet je zeker dat je deze banner wilt verwijderen?');
define('TEXT_INFO_DELETE_IMAGE', 'Verwijder banner afbeelding');

define('SUCCESS_BANNER_INSERTED', 'De banner is met succes toegevoegd.');
define('SUCCESS_BANNER_UPDATED', 'De banner is met succes gewijzigd.');
define('SUCCESS_BANNER_REMOVED', 'De banner is met succes verwijderd.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'De status van de banner is met succes gewijzigd.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Foutmelding: naam van de banner is nodig.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Foutmelding: banner moet aan groep worden toegewezen.');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Foutmelding: afbeelding komt niet voor.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Foutmelding: afbeelding kan niet worden verwijderd.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Foutmelding: onbekende optie instelling.');
define('ERROR_BANNER_IMAGE_REQUIRED', 'Foutmelding: afbeelding bij banner is nodig.');

define('TEXT_LEGEND_BANNER_ON_SSL', 'Toon in SSL');
define('TEXT_LEGEND_BANNER_OPEN_NEW_WINDOWS', 'Nieuw venster');

// Tooltip Text for images in Banner Manager
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_ON','Open nieuw venster - AAN');
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_OFF','Open nieuw venster - UIT');
define('IMAGE_ICON_BANNER_ON_SSL_ON','Toon op beveiligde paginas (SSL) - AAN');
define('IMAGE_ICON_BANNER_ON_SSL_OFF',' Toon op beveiligde paginas (SSL) - UIT');

define('SUCCESS_BANNER_OPEN_NEW_WINDOW_UPDATED', 'Succes: De status van de banner voor het openen in een nieuw venster is met succes gewijzigd.');
define('SUCCESS_BANNER_ON_SSL_UPDATED', 'Succes: De status van de banner om zichtbaar te zijn op een SSL pagina is met succes gewijzigd.');

