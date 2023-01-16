ALTER DATABASE CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE TABLE `coverage_windows` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '', INDEX `name` (`name` (95)), `description` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci) ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
CREATE TABLE `coverage_windows_interval` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `coverage_window_id` INT(11) DEFAULT 0, INDEX `coverage_window_id` (`coverage_window_id`), `weekday` ENUM('friday','monday','saturday','sunday','thursday','tuesday','wednesday') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'monday', INDEX `weekday` (`weekday`), `start_time` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '', INDEX `start_time` (`start_time` (95)), `end_time` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '') ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
CREATE TABLE `holidays` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '', INDEX `name` (`name` (95)), `date` DATE, `calendar_id` INT(11) DEFAULT 0, INDEX `calendar_id` (`calendar_id`)) ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
CREATE TABLE `holiday_calendar` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '', INDEX `name` (`name` (95))) ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
ALTER TABLE `priv_user` CHANGE `contactid` `contactid` INT(11) DEFAULT 0
ALTER TABLE `priv_async_task` CHANGE `event_id` `event_id` INT(11) DEFAULT 0, CHANGE `remaining_retries` `remaining_retries` INT(11) DEFAULT 0, CHANGE `last_error_code` `last_error_code` INT(11) DEFAULT 0
ALTER TABLE `priv_async_send_email` CHANGE `version` `version` INT(11) DEFAULT 1
ALTER TABLE `priv_change` CHANGE `user_id` `user_id` INT(11) DEFAULT 0
ALTER TABLE `priv_changeop` CHANGE `changeid` `changeid` INT(11) DEFAULT 0, CHANGE `objkey` `objkey` INT(11) DEFAULT 0
ALTER TABLE `priv_changeop_setatt_log` CHANGE `lastentry` `lastentry` INT(11) DEFAULT 0
ALTER TABLE `priv_changeop_links` CHANGE `item_id` `item_id` INT(11) DEFAULT 0
ALTER TABLE `priv_changeop_links_tune` CHANGE `link_id` `link_id` INT(11) DEFAULT 0
