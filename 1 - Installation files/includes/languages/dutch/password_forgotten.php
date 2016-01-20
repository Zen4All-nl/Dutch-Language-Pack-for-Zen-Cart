<?php
/**
 * @package languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2014 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: password_forgotten.php 3086 2006-03-01 00:40:57Z drbyte $
 */

define('NAVBAR_TITLE_1', 'Inloggen');
define('NAVBAR_TITLE_2', 'Wachtwoord vergeten');

define('HEADING_TITLE', 'Wachtwoord vergeten');

define('TEXT_MAIN', 'Type hieronder uw e-mailadres dan sturen wij u een mailtje met het nieuwe wachtwoord.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - nieuw wachtwoord');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Er is een nieuw wachtwoord aangevraagd vanaf ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'Uw nieuwe wachtwoord voor \'' . STORE_NAME . '\' is:' . "\n\n" . '   %s' . "\n\nNadat u bent ingelogd met dit nieuwe wachtwoord, kan u dit wijzigen vanuit de 'Mijn account' pagina.");

define('SUCCESS_PASSWORD_SENT', 'Bedankt. Als het e-mailadres in ons systeem voorkomt, dan sturen we naar dat e-mailadres instructies voor het herstellen van uw wachtwoord.');
