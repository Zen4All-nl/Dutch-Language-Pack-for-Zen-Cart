<?php
/**
 * Constants used by the zen_update_orders_history function.
 *
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2020 May 27 Modified in v1.5.7 $
 */
define('OSH_EMAIL_SEPARATOR', '------------------------------------------------------');
define('OSH_EMAIL_TEXT_SUBJECT', 'Order Update');
define('OSH_EMAIL_TEXT_ORDER_NUMBER', 'Ordernummer:');
define('OSH_EMAIL_TEXT_INVOICE_URL', 'Gedetaileerde factuur:');
define('OSH_EMAIL_TEXT_DATE_ORDERED', 'Besteldatum:');
define('OSH_EMAIL_TEXT_COMMENTS_UPDATE', '<em>De opmerkingen bij deze bestelling zijn: </em>');
define('OSH_EMAIL_TEXT_STATUS_UPDATED', 'De status van uw bestelling is aangepast:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_NO_CHANGE', 'De status van uw bestelling in onveranderd:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_LABEL', '<strong>Huidige status: </strong> %s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_CHANGE', '<strong>Oude status:</strong> %1$s, <strong>Nieuwe status:</strong> %2$s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Heeft u vragen? Stuur een antwoord opdeze mail.' . "\n");
