<?php

/**
 * @ Maintained by Zen4All (https://zen4all.nl)
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:
 */
$define = [
  'HEADING_TITLE' => 'Admin Activiteiten Log Manager',
  'HEADING_SUB1' => 'Bekijk of exporteer Logs',
  'HEADING_SUB2' => 'Loggeschiedenis opschonen',
  'TEXT_ACTIVITY_EXPORT_FORMAT' => 'Exporteer bestandsformaat:',
  'TEXT_ACTIVITY_EXPORT_FILENAME' => 'Exporteer filenaam:',
  'TEXT_ACTIVITY_EXPORT_SAVETOFILE' => 'Opslaan naar bestand op de server? (anders wordt het bestand direct gedownload van dit venster)',
  'TEXT_ACTIVITY_EXPORT_DEST' => 'Bestemming: ',
  'TEXT_PROCESSED' => ' Verwerkt.',
  'SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG' => 'Exporteren afgerond. ',
  'FAILURE_EXPORT_ADMIN_ACTIVITY_LOG' => 'Waarschuwing: Export is mislukt. Kan niet schrijven naar bestand ',
  'TEXT_INSTRUCTIONS' => '<u>Instructies</u><br />
U kunt deze pagina gebruken om uw Zen Cart&reg; Admin User Access Activity te exporteren naar een CSV file voor archivering.<br />
U zou deze informatie moeten bewaren in het geval van fraude onderzoek, als uw site is gehacked. Dit is verplicht voor PCI Compliance.<br />
<ol>
<li>Kies om op het scherm te bekijken, of om te exporteren naar een bestand.</li>
<li>Geef een bestandsnaam op.(moet eindigen op en van deze: .csv .txt .htm .html .xml)</li>
<li>Klick Opslaan om verder te gaan.</li>
<li>Kies voor opene nof opslaan van het bestand, afhankelijk van wat uw browser aanbied.</li></ol>
',
  'TEXT_INFO_ADMIN_ACTIVITY_LOG' => '<strong>Leeg de Admin Activity Log tabel in de database<br />WAARSCHUWING: MAAK EERST EEN BACKUP VAN UW DATABASE voordat u deze update uitvoerd!</strong><br />The Admin Activity Log is een volgmethode dat de activiteit in de Admin vastlegt. <br />De log kan heel snel, heel groot worden, en moet van tijd tot tijd opgeschoond worden.<br />Waarschuwingen worden gegeven bij 50,000 records of 60 dagen, welke als eerste zich voordoet.<br /><span class="alert">OPMERKING: Voor PCI Compliance, u bent verplicht om de admin activity log geschiedenis te bewaren voor een periode van 12 maanden.<br />Het is het beste om uw logs te archiveren door te kiezen voor EXPORTEREN NAAT CSV en op save te klikken (zie hierboven), *VOORDAT* de log data geleegd wordt.</span>',
  'TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE' => '<strong><span class="alert">Waarschuwing!: U staat op het punt om *belangrijke* audit trail records uit uw database te VERWIJDEREN.</span></strong><br />You should FIRST confirm that you have a reliable BACKUP of your database before proceeding.<br />By proceeding you accept that this information will be deleted and understand your legal responsibilities regarding this data.<br /><br />I understand my responsibilities, and wish to proceed with the deletion by clicking Reset:<br />',
  'SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG' => 'Legen van de Admin Activiteiten Log is <strong>afgerond</strong>',
  'TEXT_NO_RECORDS_FOUND' => 'Geen records gevonden met het door u geselecteerde filter.',
  'TEXT_EXPORTFORMAT0' => 'Export als HTML (ideaal voor on-screen viewing)',
  'TEXT_EXPORTFORMAT1' => 'Export naar CSV (ideal voor het importeren in spreadsheets)',
  'TEXT_EXPORTFORMAT2' => 'Export naar TXT',
  'TEXT_EXPORTFORMAT3' => 'Export naar XML',
  'TEXT_ACTIVITY_EXPORT_FILTER' => 'Welke log data wilt u zien?',
  'TEXT_EXPORTFILTER0' => 'Alle gelogde data, ongeacht het ernstigheidslevel.',
  'TEXT_EXPORTFILTER1' => 'INFO - Algemeen gelogde informatie',
  'TEXT_EXPORTFILTER2' => 'OPMERKING - Belangrijke info, welke regelmatig bekeken zou moeten worden',
  'TEXT_EXPORTFILTER3' => 'WAARSCHUWING - Activitieten wleke dagelijks bekeken zouden moeten worden',
  'TEXT_EXPORTFILTER4' => 'Zowel een  OPMERKING als WAARSCHUWING (veel voorkomende combinatie om te inspecteren).',
  'TEXT_INTERPRETING_LOG_DATA' => '<p><strong>Interpretatie van de log data</strong></p><ul>
<li><strong>Ernst</strong> - De standaarden voor loggen beschrijven over het algemeen de ernst als volgt:
  <ul>
  <li><strong>INFO</strong> verwijst naar algemene activiteit. Dit kan al dan niet opmerkelijke details bevatten.</li>
  <li><strong>OPMERKING</strong> verwijst naar activiteit die aangeeft dat er een hoger privilege is gebruikt, en kan zaken omvatten zoals het aanmaken van nieuwe beheerders of het toevoegen van nieuwe betalingsmodules. Het geeft ook aan wanneer gegevens die op de webpagina worden ingediend potentieel risicovolle inhoud bevatten, zoals scripttags of ingesloten iframes, waar schadelijke inhoud aan uw producten / categorieën / pagina\'s wordt toegevoegd door ongelukkige werknemers of een indringer op uw site. Deze moeten regelmatig worden gecontroleerd op afwijkingen, zoals ongeoorloofde activiteiten.</li>
  <li><strong>WAARSCHUWING</strong> is toegewezen aan KRITIEKE zaken zoals het verwijderen van betalingsmodules of het verwijderen van beheerders. Dit zijn activiteiten die kunnen duiden op hangende problemen als ze niet snel worden opgemerkt. Deze moeten heel vaak worden herzien; dagelijks aanbevolen.</li>
  </ul>
</li>
<li><strong>admin_user</strong> - Dit toont het gebruikers-ID van de admin gevolgd door hun admin-gebruikersnaam. Indien niet ingelogd, zal het 0 tonen.</li>
<li><strong>page_accessed</strong> - Dit geeft de naam van de bezochte pagina aan en geeft zo hints over het soort activiteit dat plaatsvindt.</li>
<li><strong>parameters</strong> - Dit is de rest van de URI van de bezochte pagina en geeft een verdere indicatie van het soort activiteit dat de bezoeker probeert.</li>
<li><strong>flagged</strong> - Als dit is ingesteld op 1, betekent dit dat u de inhoud die is opgenomen in het veld "postdata" moet inspecteren op ongeoorloofde invoer van script of iframe of andere potentieel gevaarlijke inhoud. Een uitleg van verdachte inhoud wordt vermeld in het veld "aandacht".</li>
<li><strong>attention</strong> - Dit zal suggesties bevatten met betrekking tot het soort verdachte activiteit dat moet worden beoordeeld in het veld "postdata" indien gemarkeerd. </li>
<li><strong>logmessage</strong> - Deze bevat alle door het systeem geregistreerde berichten over de activiteit die plaatsvindt, zoals de installatie van een bepaalde module.</li>
<li><strong>postdata</strong> - Dit bevat de onbewerkte POST-gegevens (met wat gevoelige informatie weggespoeld) voor eenvoudige beoordeling in geval van vermoedelijke kwaadaardige activiteiten.</li>
</ul>',
];

return $define;
