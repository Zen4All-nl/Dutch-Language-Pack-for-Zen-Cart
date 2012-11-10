<?php
//
// @version $Id: dutch translation voor zen cart 1.6.x
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: gv_redeem.php 4155 2006-08-16 17:14:52Z ajeh $
//   * @version $Id: Integrated COWOA v2.2 - 2007 - 2012
//

define('NAVBAR_TITLE', ' . TEXT_GV_NAME . ' inwisselen);
define('HEADING_TITLE', ' . TEXT_GV_NAME . ' inwisselen);
define('TEXT_INFORMATION', 'Meer informatie over de ' . TEXT_GV_NAME . ' kun u vinden op <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a>');
define('TEXT_INVALID_GV', 'De ' . TEXT_GV_NAME . ' inwisselcode %s lijkt geen geldige code, is niet langer geldig of is reeds ingewisseld. Bij vragen kunt u contact opnemen de <a href="' . zen_href_link(FILENAME_CONTACT_US) . '">klantenservice</a>.');
define('TEXT_VALID_GV', 'Gefeliciteerd, u heeft een ' . TEXT_GV_NAME . ' ingewisseld ter waarde van %s.');

define('ERROR_GV_CREATE_ACCOUNT', 'To redeem a Gift Voucher you must create an account.');
define('ERROR_GV_COWOA', 'To redeem a Gift Voucher you must create an account.  You may not enter a Gift Voucher once you have begun checking out without an account. If you would like to use a Gift Voucher, you may <a href="' . zen_href_link(FILENAME_LOGOFF, '', 'SSL', false) . '">click here</a> to end your session, empty your cart, and begin again.');
// eof