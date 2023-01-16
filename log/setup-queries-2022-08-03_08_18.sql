ALTER TABLE `fiberchannelinterface` CHANGE `datacenterdevice_id` `datacenterdevice_id` INT(11) DEFAULT 0
ALTER TABLE `tape` CHANGE `tapelibrary_id` `tapelibrary_id` INT(11) DEFAULT 0
ALTER TABLE `nasfilesystem` CHANGE `nas_id` `nas_id` INT(11) DEFAULT 0
ALTER TABLE `logicalvolume` CHANGE `storagesystem_id` `storagesystem_id` INT(11) DEFAULT 0
ALTER TABLE `lnkservertovolume` CHANGE `volume_id` `volume_id` INT(11) DEFAULT 0, CHANGE `server_id` `server_id` INT(11) DEFAULT 0
ALTER TABLE `lnkdatacenterdevicetosan` CHANGE `san_id` `san_id` INT(11) DEFAULT 0, CHANGE `datacenterdevice_id` `datacenterdevice_id` INT(11) DEFAULT 0
ALTER TABLE `hypervisor` CHANGE `farm_id` `farm_id` INT(11) DEFAULT 0, CHANGE `server_id` `server_id` INT(11) DEFAULT 0
ALTER TABLE `virtualmachine` CHANGE `virtualhost_id` `virtualhost_id` INT(11) DEFAULT 0, CHANGE `osfamily_id` `osfamily_id` INT(11) DEFAULT 0, CHANGE `osversion_id` `osversion_id` INT(11) DEFAULT 0, CHANGE `oslicence_id` `oslicence_id` INT(11) DEFAULT 0
ALTER TABLE `logicalinterface` CHANGE `virtualmachine_id` `virtualmachine_id` INT(11) DEFAULT 0
ALTER TABLE `coverage_windows_interval` CHANGE `coverage_window_id` `coverage_window_id` INT(11) DEFAULT 0
ALTER TABLE `holidays` CHANGE `calendar_id` `calendar_id` INT(11) DEFAULT 0
ALTER TABLE `remoteapplicationconnection` CHANGE `remoteapplicationtype_id` `remoteapplicationtype_id` INT(11) DEFAULT 0
ALTER TABLE `priv_action_webhook` CHANGE `remoteapplicationconnection_id` `remoteapplicationconnection_id` INT(11) DEFAULT 0, CHANGE `test_remoteapplicationconnection_id` `test_remoteapplicationconnection_id` INT(11) DEFAULT 0
ALTER TABLE `qz_event_notification` CHANGE `survey_id` `survey_id` INT(11) DEFAULT 0, CHANGE `contact_id` `contact_id` INT(11) DEFAULT 0
ALTER TABLE `qz_element` CHANGE `quizz_id` `quizz_id` INT(11) DEFAULT 0, CHANGE `order` `order` INT(11) DEFAULT 0
ALTER TABLE `qz_survey` CHANGE `quizz_id` `quizz_id` INT(11) DEFAULT 0, CHANGE `on_behalf_of` `on_behalf_of` INT(11) DEFAULT 0, CHANGE `target_phrase_id` `target_phrase_id` INT(11) DEFAULT 0
ALTER TABLE `qz_survey_target` CHANGE `survey_id` `survey_id` INT(11) DEFAULT 0, CHANGE `contact_id` `contact_id` INT(11) DEFAULT 0
ALTER TABLE `qz_survey_targetanswer` CHANGE `survey_id` `survey_id` INT(11) DEFAULT 0, CHANGE `contact_id` `contact_id` INT(11) DEFAULT 0, CHANGE `nb_notifications_sent` `nb_notifications_sent` INT(11) DEFAULT 0, CHANGE `last_question_id` `last_question_id` INT(11) DEFAULT 0
ALTER TABLE `qz_survey_answer` CHANGE `survey_target_id` `survey_target_id` INT(11) DEFAULT 0, CHANGE `question_id` `question_id` INT(11) DEFAULT 0
ALTER TABLE `lnkfunctionalcitoticket` CHANGE `ticket_id` `ticket_id` INT(11) DEFAULT 0, CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0
ALTER TABLE `lnkfunctionalcitoprovidercontract` CHANGE `providercontract_id` `providercontract_id` INT(11) DEFAULT 0, CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0
ALTER TABLE `lnkfunctionalcitoservice` CHANGE `service_id` `service_id` INT(11) DEFAULT 0, CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0
ALTER TABLE `lnkvirtualdevicetovolume` CHANGE `volume_id` `volume_id` INT(11) DEFAULT 0, CHANGE `virtualdevice_id` `virtualdevice_id` INT(11) DEFAULT 0
ALTER TABLE `change` CHANGE `requestor_id` `requestor_id` INT(11) DEFAULT 0, CHANGE `supervisor_group_id` `supervisor_group_id` INT(11) DEFAULT 0, CHANGE `supervisor_id` `supervisor_id` INT(11) DEFAULT 0, CHANGE `manager_group_id` `manager_group_id` INT(11) DEFAULT 0, CHANGE `manager_id` `manager_id` INT(11) DEFAULT 0, CHANGE `parent_id` `parent_id` INT(11) DEFAULT 0
ALTER TABLE `priv_urp_userprofile` CHANGE `userid` `userid` INT(11) DEFAULT 0, CHANGE `profileid` `profileid` INT(11) DEFAULT 0
ALTER TABLE `priv_urp_userorg` CHANGE `userid` `userid` INT(11) DEFAULT 0, CHANGE `allowed_org_id` `allowed_org_id` INT(11) DEFAULT 0
