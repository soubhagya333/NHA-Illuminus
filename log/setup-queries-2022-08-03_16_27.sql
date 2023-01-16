ALTER TABLE `priv_user` CHANGE `contactid` `contactid` INT(11) DEFAULT 0
ALTER TABLE `priv_async_task` CHANGE `event_id` `event_id` INT(11) DEFAULT 0, CHANGE `remaining_retries` `remaining_retries` INT(11) DEFAULT 0, CHANGE `last_error_code` `last_error_code` INT(11) DEFAULT 0
ALTER TABLE `priv_async_send_email` CHANGE `version` `version` INT(11) DEFAULT 1
