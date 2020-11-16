<?php
/**
 * @ Maintained by Zen4All (https://zen4all.nl)
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:
 */

$define = [
  'HEADING_TITLE' => 'Uitvoeren SQL Query',
  'HEADING_WARNING' => 'ZORG VOOR EEN VOLLEDIGE DATABASE BACKUP VOORDAT JE HIER VERDER GAAT!!!!',
  'HEADING_WARNING2' => 'Installatie van 3rd-party bijdragen zijn voor eigen risico.<br>Zen Cart&trade; geeft op geen enkel manier garantie, ook niet voor de veiligheid van scripts uit 3rd-partij bijdragen. Test uitgebreid voordat je deze scripts gebruikt in je live database!',
  'HEADING_WARNING_INSTALLSCRIPTS' => 'Opmerking: Zen Cart database-upgrade scripts mogen NIET vanuit deze pagina worden uitgevoerd.<br>Upload de nieuwe <strong>zc_install</strong> directory en voer daar de upgrade uit voor betere betrouwbaarheid.',
  'TEXT_QUERY_RESULTS' => 'Query resultaten:',
  'TEXT_ENTER_QUERY_STRING' => 'Vul de query in <br>die moet worden uitgevoerd:&nbsp;&nbsp;<br><br>Zorg er voor dat deze query<br>eindigt met ;',
  'TEXT_QUERY_FILENAME' => 'SQL-bestand ophalen van server of lokale computer:',
  'ERROR_NOTHING_TO_DO' => 'Foutmelding: niet uitgevoerd - geen query of query-bestand geselecteerd.',
  'TEXT_CLOSE_WINDOW' => '[ sluit venster ]',
  'SQLPATCH_HELP_TEXT' => 'Met de SQLPATCH-tool kunt u systeempatches installeren door SQL-code rechtstreeks in het tekstgebied te plakken',
  'REASON_TABLE_ALREADY_EXISTS' => 'Maken van tabel %s niet mogelijk omdat deze al bestaat.',
  'REASON_TABLE_DOESNT_EXIST' => 'DROP tabel %s" niet mogelijk omdat deze niet bestaat.',
  'REASON_TABLE_NOT_FOUND' => 'Uitvoeren opdracht niet mogelijk omdat tabel %s niet bestaat.',
  'REASON_CONFIG_KEY_ALREADY_EXISTS' => 'Toevoegen "configuration_key" "%s" niet mogelijk omdat deze al bestaat.',
  'REASON_COLUMN_ALREADY_EXISTS' => 'Toevoegen kolom %s niet mogelijk omdat deze al bestaat.',
  'REASON_COLUMN_DOESNT_EXIST_TO_DROP' => ' DROP kolom %s niet mogelijk omdat deze niet bestaat.',
  'REASON_COLUMN_DOESNT_EXIST_TO_CHANGE' => 'Aanpassen kolom %s niet mogelijk omdat deze niet bestaat.',
  'REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS' => 'Invoegen "prod-type-layout configuration_key" %s niet mogelijk omdat deze al bestaat.',
  'REASON_INDEX_DOESNT_EXIST_TO_DROP' => 'DROP index %s van tabel %s is niet mogelijk omdat deze niet bestaat.',
  'REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP' => 'Drop primary key van tabel %s is niet mogelijk omdat deze niet bestaat.',
  'REASON_INDEX_ALREADY_EXISTS' => 'Toevoegen index %s aan table %s niet mogelijk omdat deze al bestaat.',
  'REASON_PRIMARY_KEY_ALREADY_EXISTS' => 'Toevoegen "primary key" aan tabel %s niet mogelijk omdat "primary key" al bestaat.',
  'REASON_NO_PRIVILEGES' => 'Gebruiker ' . DB_SERVER_USERNAME . '@' . DB_SERVER . ' heeft geen %s bevoegdheden voor ' . DB_DATABASE . '.',
  'ERROR_RENAME_TABLE' => 'RENAME TABLE-opdracht niet ondersteund door SQLpatch-tool. Gebruik in plaats daarvan phpMyAdmin.',
  'ERROR_LINE_INCOMPLETE' => 'Query onvolledig: ontbrekende puntkomma.',
  'TEXT_EXECUTE_SUCCESS' => 'Succes:%u instructie(s) verwerkt.',
  'ERROR_EXECUTE_FAILED' => 'Query mislukt:%u instructie(s) verwerkt.',
  'ERROR_EXECUTE_IGNORED' => 'Opmerking:%u instructies worden genegeerd. Zie databasetabel "upgrade_exceptions" voor meer details.',
  'TEXT_UPLOADQUERY_SUCCESS' => 'Succes:%u instructie(s) verwerkt via bestandsupload',
  'ERROR_UPLOADQUERY_FAILED' => 'Query mislukt: %u instructie(s) verwerkt via bestandsupload',
  'ERROR_UPLOADQUERY_IGNORED' => 'Opmerking: %u instructie genegeerd verwerkt via bestandsupload. Zie databasetabel "upgrade_exceptions" voor meer details.',
];

return $define;
