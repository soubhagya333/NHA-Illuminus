ALTER TABLE `lnkfunctionalcitoservice` CHANGE `service_id` `service_id` INT(11) DEFAULT 0, CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0
ALTER TABLE `lnkvirtualdevicetovolume` CHANGE `volume_id` `volume_id` INT(11) DEFAULT 0, CHANGE `virtualdevice_id` `virtualdevice_id` INT(11) DEFAULT 0
ALTER TABLE `change` CHANGE `requestor_id` `requestor_id` INT(11) DEFAULT 0, CHANGE `supervisor_group_id` `supervisor_group_id` INT(11) DEFAULT 0, CHANGE `supervisor_id` `supervisor_id` INT(11) DEFAULT 0, CHANGE `manager_group_id` `manager_group_id` INT(11) DEFAULT 0, CHANGE `manager_id` `manager_id` INT(11) DEFAULT 0, CHANGE `parent_id` `parent_id` INT(11) DEFAULT 0
ALTER TABLE `priv_urp_userprofile` CHANGE `userid` `userid` INT(11) DEFAULT 0, CHANGE `profileid` `profileid` INT(11) DEFAULT 0
ALTER TABLE `priv_urp_userorg` CHANGE `userid` `userid` INT(11) DEFAULT 0, CHANGE `allowed_org_id` `allowed_org_id` INT(11) DEFAULT 0
