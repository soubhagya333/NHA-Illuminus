ALTER TABLE `priv_user` CHANGE `contactid` `contactid` INT(11) DEFAULT 0
ALTER TABLE `priv_async_task` CHANGE `event_id` `event_id` INT(11) DEFAULT 0, CHANGE `remaining_retries` `remaining_retries` INT(11) DEFAULT 0, CHANGE `last_error_code` `last_error_code` INT(11) DEFAULT 0
ALTER TABLE `priv_async_send_email` CHANGE `version` `version` INT(11) DEFAULT 1
ALTER TABLE `priv_change` CHANGE `user_id` `user_id` INT(11) DEFAULT 0
ALTER TABLE `priv_changeop` CHANGE `changeid` `changeid` INT(11) DEFAULT 0, CHANGE `objkey` `objkey` INT(11) DEFAULT 0
ALTER TABLE `priv_changeop_setatt_log` CHANGE `lastentry` `lastentry` INT(11) DEFAULT 0
ALTER TABLE `priv_changeop_links` CHANGE `item_id` `item_id` INT(11) DEFAULT 0
ALTER TABLE `priv_changeop_links_tune` CHANGE `link_id` `link_id` INT(11) DEFAULT 0
ALTER TABLE `priv_module_install` CHANGE `parent_id` `parent_id` INT(11) DEFAULT 0
ALTER TABLE `priv_app_dashboards` CHANGE `user_id` `user_id` INT(11) DEFAULT 0
ALTER TABLE `priv_shortcut` CHANGE `user_id` `user_id` INT(11) DEFAULT 0
ALTER TABLE `priv_shortcut_oql` CHANGE `auto_reload_sec` `auto_reload_sec` INT(11) DEFAULT 60
ALTER TABLE `priv_app_preferences` CHANGE `userid` `userid` INT(11) DEFAULT 0
ALTER TABLE `priv_auditrule` CHANGE `category_id` `category_id` INT(11) DEFAULT 0
ALTER TABLE `priv_event_notification` CHANGE `trigger_id` `trigger_id` INT(11) DEFAULT 0, CHANGE `action_id` `action_id` INT(11) DEFAULT 0, CHANGE `object_id` `object_id` INT(11) DEFAULT 0
ALTER TABLE `priv_event_restservice` CHANGE `code` `code` INT(11) DEFAULT 0
ALTER TABLE `priv_event_loginusage` CHANGE `user_id` `user_id` INT(11) DEFAULT 0
ALTER TABLE `priv_event_onobject` CHANGE `obj_key` `obj_key` INT(11)
