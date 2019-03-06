DELETE FROM configuration WHERE configuration_key LIKE 'DUTCH_LANGUAGE_PACK_%';
DELETE FROM configuration_group WHERE configuration_group_title = 'Dutch Language Pack Settings' LIMIT 1;
DELETE FROM admin_pages WHERE page_key IN ('configDutchLanguagePack');