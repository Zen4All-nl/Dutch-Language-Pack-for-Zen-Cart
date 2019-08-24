<?php

/**
 * Dutch Language Pack
 * @version 1.5.6b
 * @author Zen4All
 * @copyright (c) 2014-2019, Zen4All
 * @license http://www.gnu.org/licenses/gpl.txt GNU General Public License V2.0
 */

/*
 * Added a version installer to the module, so the current version so the language pack can be tracked. *
 */

/* Create the admin-page entry for the plugin's configuration */
if (!zen_page_key_exists('configDutchLanguagePack')) {
  zen_register_admin_page('configDutchLanguagePack', 'BOX_CONFIGURATION_DUTCH_LANGUAGE_PACK', 'FILENAME_CONFIGURATION', 'gID=' . $configuration_group_id, 'configuration', 'Y', (int)$configuration_group_id);
}