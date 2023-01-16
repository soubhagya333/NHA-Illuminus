ALTER TABLE `ticket_request` CHANGE `origin` `origin` ENUM('chat boat','mail','phone','portal') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'phone', CHANGE `approver_id` `approver_id` INT(11) DEFAULT 0, CHANGE `service_id` `service_id` INT(11) DEFAULT 0, CHANGE `servicesubcategory_id` `servicesubcategory_id` INT(11) DEFAULT 0, CHANGE `cumulatedpending_timespent` `cumulatedpending_timespent` INT(11) UNSIGNED, CHANGE `tto_timespent` `tto_timespent` INT(11) UNSIGNED, CHANGE `tto_75_passed` `tto_75_passed` TINYINT(1) UNSIGNED, CHANGE `tto_75_overrun` `tto_75_overrun` INT(11) UNSIGNED, CHANGE `tto_100_passed` `tto_100_passed` TINYINT(1) UNSIGNED, CHANGE `tto_100_overrun` `tto_100_overrun` INT(11) UNSIGNED, CHANGE `ttr_timespent` `ttr_timespent` INT(11) UNSIGNED, CHANGE `ttr_75_passed` `ttr_75_passed` TINYINT(1) UNSIGNED, CHANGE `ttr_75_overrun` `ttr_75_overrun` INT(11) UNSIGNED, CHANGE `ttr_100_passed` `ttr_100_passed` TINYINT(1) UNSIGNED, CHANGE `ttr_100_overrun` `ttr_100_overrun` INT(11) UNSIGNED, CHANGE `time_spent` `time_spent` INT(11) UNSIGNED, CHANGE `parent_request_id` `parent_request_id` INT(11) DEFAULT 0, CHANGE `parent_incident_id` `parent_incident_id` INT(11) DEFAULT 0, CHANGE `parent_problem_id` `parent_problem_id` INT(11) DEFAULT 0, CHANGE `parent_change_id` `parent_change_id` INT(11) DEFAULT 0
ALTER TABLE `contract` CHANGE `org_id` `org_id` INT(11) DEFAULT 0, CHANGE `contracttype_id` `contracttype_id` INT(11) DEFAULT 0, CHANGE `provider_id` `provider_id` INT(11) DEFAULT 0
ALTER TABLE `lnkcontacttocontract` CHANGE `contract_id` `contract_id` INT(11) DEFAULT 0, CHANGE `contact_id` `contact_id` INT(11) DEFAULT 0
ALTER TABLE `lnkcontracttodocument` CHANGE `contract_id` `contract_id` INT(11) DEFAULT 0, CHANGE `document_id` `document_id` INT(11) DEFAULT 0
ALTER TABLE `service` CHANGE `org_id` `org_id` INT(11) DEFAULT 0, CHANGE `servicefamily_id` `servicefamily_id` INT(11) DEFAULT 0
ALTER TABLE `lnkdocumenttoservice` CHANGE `service_id` `service_id` INT(11) DEFAULT 0, CHANGE `document_id` `document_id` INT(11) DEFAULT 0
ALTER TABLE `lnkcontacttoservice` CHANGE `service_id` `service_id` INT(11) DEFAULT 0, CHANGE `contact_id` `contact_id` INT(11) DEFAULT 0
ALTER TABLE `servicesubcategory` CHANGE `service_id` `service_id` INT(11) DEFAULT 0
ALTER TABLE `sla` CHANGE `org_id` `org_id` INT(11) DEFAULT 0
ALTER TABLE `slt` CHANGE `value` `value` INT(11)
ALTER TABLE `lnkslatoslt` CHANGE `sla_id` `sla_id` INT(11) DEFAULT 0, CHANGE `slt_id` `slt_id` INT(11) DEFAULT 0
ALTER TABLE `lnkcustomercontracttoservice` CHANGE `customercontract_id` `customercontract_id` INT(11) DEFAULT 0, CHANGE `service_id` `service_id` INT(11) DEFAULT 0, CHANGE `sla_id` `sla_id` INT(11) DEFAULT 0, ADD `coveragewindow_id` INT(11) DEFAULT 0
ALTER TABLE `lnkcustomercontracttoservice` ADD INDEX `coveragewindow_id` (`coveragewindow_id`)
ALTER TABLE `lnkcustomercontracttoprovidercontract` CHANGE `customercontract_id` `customercontract_id` INT(11) DEFAULT 0, CHANGE `providercontract_id` `providercontract_id` INT(11) DEFAULT 0
ALTER TABLE `lnkcustomercontracttofunctionalci` CHANGE `customercontract_id` `customercontract_id` INT(11) DEFAULT 0, CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0
ALTER TABLE `deliverymodel` CHANGE `org_id` `org_id` INT(11) DEFAULT 0
ALTER TABLE `lnkdeliverymodeltocontact` CHANGE `deliverymodel_id` `deliverymodel_id` INT(11) DEFAULT 0, CHANGE `contact_id` `contact_id` INT(11) DEFAULT 0, CHANGE `role_id` `role_id` INT(11) DEFAULT 0
ALTER TABLE `fiberchannelinterface` CHANGE `datacenterdevice_id` `datacenterdevice_id` INT(11) DEFAULT 0
ALTER TABLE `tape` CHANGE `tapelibrary_id` `tapelibrary_id` INT(11) DEFAULT 0
ALTER TABLE `nasfilesystem` CHANGE `nas_id` `nas_id` INT(11) DEFAULT 0
ALTER TABLE `logicalvolume` CHANGE `storagesystem_id` `storagesystem_id` INT(11) DEFAULT 0
ALTER TABLE `lnkservertovolume` CHANGE `volume_id` `volume_id` INT(11) DEFAULT 0, CHANGE `server_id` `server_id` INT(11) DEFAULT 0
ALTER TABLE `lnkdatacenterdevicetosan` CHANGE `san_id` `san_id` INT(11) DEFAULT 0, CHANGE `datacenterdevice_id` `datacenterdevice_id` INT(11) DEFAULT 0
ALTER TABLE `hypervisor` CHANGE `farm_id` `farm_id` INT(11) DEFAULT 0, CHANGE `server_id` `server_id` INT(11) DEFAULT 0
ALTER TABLE `virtualmachine` CHANGE `virtualhost_id` `virtualhost_id` INT(11) DEFAULT 0, CHANGE `osfamily_id` `osfamily_id` INT(11) DEFAULT 0, CHANGE `osversion_id` `osversion_id` INT(11) DEFAULT 0, CHANGE `oslicence_id` `oslicence_id` INT(11) DEFAULT 0
ALTER TABLE `logicalinterface` CHANGE `virtualmachine_id` `virtualmachine_id` INT(11) DEFAULT 0
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
