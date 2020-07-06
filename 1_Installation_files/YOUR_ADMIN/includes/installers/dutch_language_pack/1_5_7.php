<?php

/**
 * Dutch Language Pack
 * @version 1.5.7
 * @author Zen4All
 * @copyright (c) 2014-2020, Zen4All
 * @license http://www.gnu.org/licenses/gpl.txt GNU General Public License V2.0
 */
/*
 * - Updates multiple files to align with Zen Cart 1.5.7
 *
 */
$db->Execute("UPDATE " . TABLE_CONFIGURATION_GROUP . "
              SET visible = 0
              WHERE configuration_group_id = " . $configuration_group_id . ";");
