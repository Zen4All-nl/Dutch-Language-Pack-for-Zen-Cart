<?php
/**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.4
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2014 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_activity.php drbyte Modified in v1.5.4 $
 */

define('HEADING_TITLE', 'Admin Activity Log Manager');
define('HEADING_SUB1', 'Bekijk of exporteer Logs');
define('HEADING_SUB2', 'Loggeschiedenis opschonen');
define('TEXT_ACTIVITY_EXPORT_FORMAT', 'Exporteer bestandsformaat:');
define('TEXT_ACTIVITY_EXPORT_FILENAME', 'Exporteer filenaam:');
define('TEXT_ACTIVITY_EXPORT_SAVETOFILE','Opslaan naar bestand op de server? (anders wordt het bestand direct gedownload van dit venster)');
define('TEXT_ACTIVITY_EXPORT_DEST','Bestemming: ');
define('TEXT_PROCESSED', ' Verwerkt.');
define('SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG', 'Exporteren afgerond. ');
define('FAILURE_EXPORT_ADMIN_ACTIVITY_LOG', 'Waarschuwing: Exporteren mislukt. Het is niet gelukt om naar het bestand te schrijven ');

define('TEXT_INSTRUCTIONS','<u>Instructies</u><br />U kunt deze pagina gebruken om uw Zen Cart&reg; Admin User Access Activity te exporteren naar een CSV file voor archivering.<br />U zou deze informatie moeten bewaren in het geval van fraude onderzoek, als uw site is gehacked. Dit is verplicht voor PCI Compliance.<br />
<ol><li>Kies om op het scherm te bekijken, of om te exporteren naar een bestand.<li>Geef een bestandsnaam op.<li>Klick Opslaan om verder te gaan.<li>Kies voor opene nof opslaan van het bestand, afhankelijk van wat uw browser aanbied.</ol>');

define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>Leeg de Admin Activity Log tabel in de database<br />WAARSCHUWING: MAAK EERST EEN BACKUP VAN UW DATABASE voordat u deze update uitvoerd!</strong><br />The Admin Activity Log is een volgmethode dat de activiteit in de Admin vastlegt. <br />De log kan heel snel, heel groot worden, en moet van tijd tot tijd opgeschoond worden.<br />Waarschuwingen worden gegeven bij 50,000 records of 60 dagen, welke als eerste zich voordoet.<br /><span class="alert">OPMERKING: Voor PCI Compliance, u bent verplicht om de admin activity log geschiedenis te bewaren voor een periode van 12 maanden.<br />Het is het beste om uw logs te archiveren door te kiezen voor EXPORTEREN NAAT CSV en op save te klikken (zie hierboven), *VOORDAT* de log data geleegd wordt.</span>');
define('TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE', '<strong><span class="alert">WARNING!: You are about to DELETE *important* audit trail records from your database.</span></strong><br />You should FIRST confirm that you have a reliable BACKUP of your database before proceeding.<br />By proceeding you accept that this information will be deleted and understand your legal responsibilities regarding this data.<br /><br />I understand my responsibilities, and wish to proceed with the deletion by clicking Reset:<br />');
define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', '<strong>Completed</strong> erasure of the Admin Activity log');
define('TEXT_NO_RECORDS_FOUND', 'No Records Found using the filter you selected.');

define('TEXT_EXPORTFORMAT0', 'Export als HTML (ideaal voor on-screen viewing)');
define('TEXT_EXPORTFORMAT1', 'Export naar CSV (ideal voor het importeren in spreadsheets)');
define('TEXT_EXPORTFORMAT2', 'Export naar TXT');
define('TEXT_EXPORTFORMAT3', 'Export naar XML');

define('TEXT_ACTIVITY_EXPORT_FILTER', 'Which log data do you want to see?');
define('TEXT_EXPORTFILTER0', 'All logged data, regardless of severity level.');
define('TEXT_EXPORTFILTER1', 'INFO - General logged information');
define('TEXT_EXPORTFILTER2', 'NOTICE - Notable info, which should be reviewed periodically');
define('TEXT_EXPORTFILTER3', 'WARNING - Activity which should be reviewed daily');
define('TEXT_EXPORTFILTER4', 'Both NOTICE and WARNING (common combination for review).');

define('TEXT_INTERPRETING_LOG_DATA', '<p><strong>Interpretatie van de log data</strong><ul>
<li><strong>Severity</strong> - The standards for logging generally describe severities as follows:<ul>
<li><strong>INFO</strong> refers to general activity. This may or may not contain remarkable details.</li>
<li><strong>NOTICE</strong> refers to activity which indicates higher privilege was used, and may include things like creating new admin users or adding new payment modules. It also highlights when any data submitted on the web page includes potentially risky content such as script tags or embedded iframes, where malicious content is being added to your products/categories/pages by unhappy employees or an intruder on your site. These should be reviewed regularly for any anomalies such as unauthorized activity.</li>
<li><strong>WARNING</strong> is assigned to CRITICAL things such as removal of payment modules or deletion of admin users. These are activities which might suggest pending trouble if not caught quickly. These should be reviewed very frequently; recommended daily.</li>
</ul>
<li><strong>admin_user</strong> - This will show the admin user ID number followed by their admin username. If not logged in, it will show 0.</li>
<li><strong>page_accessed</strong> - This will indicate the name of the page visited, thus giving hints to the kind of activity taking place.</li>
<li><strong>parameters</strong> - This is the rest of the URI of the page visited, and gives further indication of the kind of activity being attempted by the visitor.</li>
<li><strong>flagged</strong> - If this is set to 1, that indicates that you should inspect the content recorded in the "postdata" field for unauthorized entry of script or iframe or other potentially dangerous content. An explanation of suspicious content will be listed in the "attention" field.</li>
<li><strong>attention</strong> - This will contain suggestions related to the kind of suspicious activity which should be reviewed in the "postdata" field if flagged. </li>
<li><strong>logmessage</strong> - This contains any messages recorded by the system about the activity taking place, such as installation of a certain module.</li>
<li><strong>postdata</strong> - This contains the raw POST data (with some sensitive information scrubbed) for easy review in case malicious activity is suspected.</li>
</ul></p>');