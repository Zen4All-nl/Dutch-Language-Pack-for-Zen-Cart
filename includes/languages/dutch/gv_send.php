<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: dutch translation voor zen cart 1.5.2
 * @version $Id: gv_send.php 3421 2006-04-12 04:16:14Z drbyte $
 */

define('HEADING_TITLE', 'Verstuur ' . TEXT_GV_NAME);
define('HEADING_TITLE_CONFIRM_SEND', 'Versturen van ' . TEXT_GV_NAME . ' Bevestigen');
define('HEADING_TITLE_COMPLETED', TEXT_GV_NAME . ' verstuurd');
define('NAVBAR_TITLE', 'Verstuur ' . TEXT_GV_NAME);
define('EMAIL_SUBJECT', 'Bericht van ' . STORE_NAME);
define('HEADING_TEXT','<br />Vul hier de gegevens in van uw ' . TEXT_GV_NAME . ' die u wilt versturen. Indien u meer informatie wilt verwijzen wij u naar de <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a><br />');
define('ENTRY_NAME', 'Naam ontvanger:');
define('ENTRY_EMAIL', 'E-mailadres ontvanger:');
define('ENTRY_MESSAGE', 'Boodschap voor ontvanger:');
define('ENTRY_AMOUNT', 'Tegoed ' . TEXT_GV_NAME . ':');
define('ERROR_ENTRY_TO_NAME_CHECK', 'De naam van de ontvanger ontbreekt. Vul deze aub in. ');
define('ERROR_ENTRY_AMOUNT_CHECK', '&nbsp;&nbsp;<span class="errorText">Onvoldoende tegoed</span>');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', '&nbsp;&nbsp;<span class="errorText">Ongeldig e-mailadres</span>');
define('MAIN_MESSAGE', 'U heeft besloten een ' . TEXT_GV_NAME . ' ter waarde van %s te versturen aan %s. Het e-mailadres van de ontvanger is %s.<br /><br />Het begeleidend schrijven bij de e-mail luidt:<br /><br />');
define('SECONDARY_MESSAGE', 'Beste %s,<br /><br />' . 'U ontvangt hierbij een ' . TEXT_GV_NAME . ' ter waarde van %s. Aangeboden door: %s');
define('PERSONAL_MESSAGE', 'Boodschap van %s luidt');
define('TEXT_SUCCESS', 'Gefeliciteerd, uw ' . TEXT_GV_NAME . ' is succesvol verzonden.');
define('TEXT_SEND_ANOTHER', 'Wilt u nog een ' . TEXT_GV_NAME . ' versturen?');
define('TEXT_AVAILABLE_BALANCE','Beschikbaar tegoed: ');

define('EMAIL_GV_TEXT_SUBJECT', 'Een cadeau van %s');
define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER', 'Gefeliciteerd, U heeft een ' . TEXT_GV_NAME . ' ontvangen ter waarde van %s');
define('EMAIL_GV_FROM', 'This ' . TEXT_GV_NAME . ' has been sent to you by %s');
define('EMAIL_GV_MESSAGE', 'with a message saying: ');
define('EMAIL_GV_SEND_TO', 'Hi, %s');
define('EMAIL_GV_REDEEM', 'To redeem this ' . TEXT_GV_NAME . ', please click on the link below. Please also write down the ' . TEXT_GV_REDEEM . ': %s  just in case you have problems.');
define('EMAIL_GV_LINK', 'To redeem please click here');
define('EMAIL_GV_VISIT', ' or visit ');
define('EMAIL_GV_ENTER', ' and enter the ' . TEXT_GV_REDEEM . ' ');
define('EMAIL_GV_FIXED_FOOTER', 'If you have problems redeeming the ' . TEXT_GV_NAME . ' using the automated link above, ' . "\n" .
                                'you can also enter the ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' during the checkout process at our store.');
define('EMAIL_GV_SHOP_FOOTER', '');
?>