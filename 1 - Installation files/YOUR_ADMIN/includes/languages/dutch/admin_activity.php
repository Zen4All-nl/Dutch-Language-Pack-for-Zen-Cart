<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: dutch translation voor zen cart 1.6.x
 * @version $Id: admin_activity.php 19537 2011-09-20 17:14:44Z drbyte $
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

define('TEXT_INSTRUCTIONS','<u>Instructies</u><br />You can use this page to export your Zen Cart&reg; Admin User Access Activity to a CSV file for archiving.<br />You should save this data for use in fraud investigations in case your site is compromised. This is a requirement for PCI Compliance.<br />
<ol><li>Choose whether to display or export to a file.<li>Enter a filename.<li>Click Save to proceed.<li>Choose whether to save or open the file, depending on what your browser offers.</ol>');

define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>Empty Admin Activity Log table from the database<br />WARNING: BE SURE TO BACKUP YOUR DATABASE before running this update!</strong><br />The Admin Activity Log is a tracking method that records activity in the Admin. <br />Due to its nature it can become very large, very quickly and does need to be cleaned out from time to time.<br />Warnings are given at 50,000 records or 60 days, which ever happens first.<br /><span class="alert">NOTE: For PCI Compliance, you are required to retain admin activity log history for 12 months.<br />It is best to archive your logs by choosing EXPORT TO CSV and clicking Save, above, *BEFORE* purging log data.</span>');
define('TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE', '<strong><span class="alert">WARNING!: You are about to DELETE *important* audit trail records from your database.</span></strong><br />You should FIRST confirm that you have a reliable BACKUP of your database before proceeding.<br />By proceeding you accept that this information will be deleted and understand your legal responsibilities regarding this data.<br /><br />I understand my responsibilities, and wish to proceed with the deletion by clicking Reset:<br />');
define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', '<strong>Completed</strong> erasure of the Admin Activity log');

