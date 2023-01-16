ALTER TABLE `lnkpersontoteam` CHANGE `team_id` `team_id` INT(11) DEFAULT 0, CHANGE `person_id` `person_id` INT(11) DEFAULT 0, CHANGE `role_id` `role_id` INT(11) DEFAULT 0
ALTER TABLE `document` CHANGE `org_id` `org_id` INT(11) DEFAULT 0, CHANGE `documenttype_id` `documenttype_id` INT(11) DEFAULT 0
ALTER TABLE `ticket` CHANGE `org_id` `org_id` INT(11) DEFAULT 0, CHANGE `caller_id` `caller_id` INT(11) DEFAULT 0, CHANGE `team_id` `team_id` INT(11) DEFAULT 0, CHANGE `agent_id` `agent_id` INT(11) DEFAULT 0
ALTER TABLE `lnkcontacttoticket` CHANGE `ticket_id` `ticket_id` INT(11) DEFAULT 0, CHANGE `contact_id` `contact_id` INT(11) DEFAULT 0
ALTER TABLE `workorder` CHANGE `ticket_id` `ticket_id` INT(11) DEFAULT 0, CHANGE `team_id` `team_id` INT(11) DEFAULT 0, CHANGE `owner_id` `owner_id` INT(11) DEFAULT 0
ALTER TABLE `osversion` CHANGE `osfamily_id` `osfamily_id` INT(11) DEFAULT 0
ALTER TABLE `model` CHANGE `brand_id` `brand_id` INT(11) DEFAULT 0
ALTER TABLE `iosversion` CHANGE `brand_id` `brand_id` INT(11) DEFAULT 0
ALTER TABLE `functionalci` CHANGE `org_id` `org_id` INT(11) DEFAULT 0
ALTER TABLE `physicaldevice` CHANGE `location_id` `location_id` INT(11) DEFAULT 0, CHANGE `brand_id` `brand_id` INT(11) DEFAULT 0, CHANGE `model_id` `model_id` INT(11) DEFAULT 0
ALTER TABLE `datacenterdevice` CHANGE `rack_id` `rack_id` INT(11) DEFAULT 0, CHANGE `enclosure_id` `enclosure_id` INT(11) DEFAULT 0, CHANGE `nb_u` `nb_u` INT(11), CHANGE `powera_id` `powera_id` INT(11) DEFAULT 0, CHANGE `powerB_id` `powerB_id` INT(11) DEFAULT 0
ALTER TABLE `networkdevice` CHANGE `networkdevicetype_id` `networkdevicetype_id` INT(11) DEFAULT 0, CHANGE `iosversion_id` `iosversion_id` INT(11) DEFAULT 0
ALTER TABLE `server` CHANGE `osfamily_id` `osfamily_id` INT(11) DEFAULT 0, CHANGE `osversion_id` `osversion_id` INT(11) DEFAULT 0, CHANGE `oslicence_id` `oslicence_id` INT(11) DEFAULT 0
ALTER TABLE `softwareinstance` CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0, CHANGE `software_id` `software_id` INT(11) DEFAULT 0, CHANGE `softwarelicence_id` `softwarelicence_id` INT(11) DEFAULT 0
ALTER TABLE `middlewareinstance` CHANGE `middleware_id` `middleware_id` INT(11) DEFAULT 0
ALTER TABLE `databaseschema` CHANGE `dbserver_id` `dbserver_id` INT(11) DEFAULT 0
ALTER TABLE `webapplication` CHANGE `webserver_id` `webserver_id` INT(11) DEFAULT 0
ALTER TABLE `ospatch` CHANGE `osversion_id` `osversion_id` INT(11) DEFAULT 0
ALTER TABLE `softwarepatch` CHANGE `software_id` `software_id` INT(11) DEFAULT 0
ALTER TABLE `licence` CHANGE `org_id` `org_id` INT(11) DEFAULT 0
ALTER TABLE `oslicence` CHANGE `osversion_id` `osversion_id` INT(11) DEFAULT 0
ALTER TABLE `softwarelicence` CHANGE `software_id` `software_id` INT(11) DEFAULT 0
ALTER TABLE `lnkdocumenttolicence` CHANGE `licence_id` `licence_id` INT(11) DEFAULT 0, CHANGE `document_id` `document_id` INT(11) DEFAULT 0
ALTER TABLE `lnkcontacttofunctionalci` CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0, CHANGE `contact_id` `contact_id` INT(11) DEFAULT 0
ALTER TABLE `lnkdocumenttopatch` CHANGE `patch_id` `patch_id` INT(11) DEFAULT 0, CHANGE `document_id` `document_id` INT(11) DEFAULT 0
ALTER TABLE `lnksoftwareinstancetosoftwarepatch` CHANGE `softwarepatch_id` `softwarepatch_id` INT(11) DEFAULT 0, CHANGE `softwareinstance_id` `softwareinstance_id` INT(11) DEFAULT 0
ALTER TABLE `lnkfunctionalcitoospatch` CHANGE `ospatch_id` `ospatch_id` INT(11) DEFAULT 0, CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0
ALTER TABLE `lnkdocumenttosoftware` CHANGE `software_id` `software_id` INT(11) DEFAULT 0, CHANGE `document_id` `document_id` INT(11) DEFAULT 0
ALTER TABLE `lnkdocumenttofunctionalci` CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0, CHANGE `document_id` `document_id` INT(11) DEFAULT 0
ALTER TABLE `subnet` CHANGE `org_id` `org_id` INT(11) DEFAULT 0
ALTER TABLE `vlan` CHANGE `org_id` `org_id` INT(11) DEFAULT 0
ALTER TABLE `lnksubnettovlan` CHANGE `subnet_id` `subnet_id` INT(11) DEFAULT 0, CHANGE `vlan_id` `vlan_id` INT(11) DEFAULT 0
ALTER TABLE `physicalinterface` CHANGE `connectableci_id` `connectableci_id` INT(11) DEFAULT 0
ALTER TABLE `lnkphysicalinterfacetovlan` CHANGE `physicalinterface_id` `physicalinterface_id` INT(11) DEFAULT 0, CHANGE `vlan_id` `vlan_id` INT(11) DEFAULT 0
ALTER TABLE `lnkconnectablecitonetworkdevice` CHANGE `networkdevice_id` `networkdevice_id` INT(11) DEFAULT 0, CHANGE `connectableci_id` `connectableci_id` INT(11) DEFAULT 0
ALTER TABLE `lnkapplicationsolutiontofunctionalci` CHANGE `applicationsolution_id` `applicationsolution_id` INT(11) DEFAULT 0, CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0
ALTER TABLE `lnkapplicationsolutiontobusinessprocess` CHANGE `businessprocess_id` `businessprocess_id` INT(11) DEFAULT 0, CHANGE `applicationsolution_id` `applicationsolution_id` INT(11) DEFAULT 0
ALTER TABLE `group` CHANGE `org_id` `org_id` INT(11) DEFAULT 0, CHANGE `parent_id` `parent_id` INT(11) DEFAULT 0, CHANGE `parent_id_left` `parent_id_left` INT(11) DEFAULT 0, CHANGE `parent_id_right` `parent_id_right` INT(11) DEFAULT 0
ALTER TABLE `lnkgrouptoci` CHANGE `group_id` `group_id` INT(11) DEFAULT 0, CHANGE `ci_id` `ci_id` INT(11) DEFAULT 0
ALTER TABLE `rack` CHANGE `nb_u` `nb_u` INT(11)
ALTER TABLE `enclosure` CHANGE `rack_id` `rack_id` INT(11) DEFAULT 0, CHANGE `nb_u` `nb_u` INT(11)
ALTER TABLE `pdu` CHANGE `rack_id` `rack_id` INT(11) DEFAULT 0, CHANGE `powerstart_id` `powerstart_id` INT(11) DEFAULT 0
ALTER TABLE `pc` CHANGE `osfamily_id` `osfamily_id` INT(11) DEFAULT 0, CHANGE `osversion_id` `osversion_id` INT(11) DEFAULT 0
ALTER TABLE `faq` CHANGE `category_id` `category_id` INT(11) DEFAULT 0
ALTER TABLE `ticket_incident` CHANGE `service_id` `service_id` INT(11) DEFAULT 0, CHANGE `servicesubcategory_id` `servicesubcategory_id` INT(11) DEFAULT 0, CHANGE `cumulatedpending_timespent` `cumulatedpending_timespent` INT(11) UNSIGNED, CHANGE `tto_timespent` `tto_timespent` INT(11) UNSIGNED, CHANGE `tto_75_passed` `tto_75_passed` TINYINT(1) UNSIGNED, CHANGE `tto_75_overrun` `tto_75_overrun` INT(11) UNSIGNED, CHANGE `tto_100_passed` `tto_100_passed` TINYINT(1) UNSIGNED, CHANGE `tto_100_overrun` `tto_100_overrun` INT(11) UNSIGNED, CHANGE `ttr_timespent` `ttr_timespent` INT(11) UNSIGNED, CHANGE `ttr_75_passed` `ttr_75_passed` TINYINT(1) UNSIGNED, CHANGE `ttr_75_overrun` `ttr_75_overrun` INT(11) UNSIGNED, CHANGE `ttr_100_passed` `ttr_100_passed` TINYINT(1) UNSIGNED, CHANGE `ttr_100_overrun` `ttr_100_overrun` INT(11) UNSIGNED, CHANGE `time_spent` `time_spent` INT(11) UNSIGNED, CHANGE `parent_incident_id` `parent_incident_id` INT(11) DEFAULT 0, CHANGE `parent_problem_id` `parent_problem_id` INT(11) DEFAULT 0, CHANGE `parent_change_id` `parent_change_id` INT(11) DEFAULT 0
ALTER TABLE `knownerror` CHANGE `cust_id` `cust_id` INT(11) DEFAULT 0, CHANGE `problem_id` `problem_id` INT(11) DEFAULT 0
ALTER TABLE `lnkerrortofunctionalci` CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0, CHANGE `error_id` `error_id` INT(11) DEFAULT 0
ALTER TABLE `lnkdocumenttoerror` CHANGE `document_id` `document_id` INT(11) DEFAULT 0, CHANGE `error_id` `error_id` INT(11) DEFAULT 0
ALTER TABLE `ticket_problem` CHANGE `service_id` `service_id` INT(11) DEFAULT 0, CHANGE `servicesubcategory_id` `servicesubcategory_id` INT(11) DEFAULT 0, CHANGE `related_change_id` `related_change_id` INT(11) DEFAULT 0
ALTER TABLE `ticket_request` CHANGE `approver_id` `approver_id` INT(11) DEFAULT 0, CHANGE `service_id` `service_id` INT(11) DEFAULT 0, CHANGE `servicesubcategory_id` `servicesubcategory_id` INT(11) DEFAULT 0, CHANGE `cumulatedpending_timespent` `cumulatedpending_timespent` INT(11) UNSIGNED, CHANGE `tto_timespent` `tto_timespent` INT(11) UNSIGNED, CHANGE `tto_75_passed` `tto_75_passed` TINYINT(1) UNSIGNED, CHANGE `tto_75_overrun` `tto_75_overrun` INT(11) UNSIGNED, CHANGE `tto_100_passed` `tto_100_passed` TINYINT(1) UNSIGNED, CHANGE `tto_100_overrun` `tto_100_overrun` INT(11) UNSIGNED, CHANGE `ttr_timespent` `ttr_timespent` INT(11) UNSIGNED, CHANGE `ttr_75_passed` `ttr_75_passed` TINYINT(1) UNSIGNED, CHANGE `ttr_75_overrun` `ttr_75_overrun` INT(11) UNSIGNED, CHANGE `ttr_100_passed` `ttr_100_passed` TINYINT(1) UNSIGNED, CHANGE `ttr_100_overrun` `ttr_100_overrun` INT(11) UNSIGNED, CHANGE `time_spent` `time_spent` INT(11) UNSIGNED, CHANGE `parent_request_id` `parent_request_id` INT(11) DEFAULT 0, CHANGE `parent_incident_id` `parent_incident_id` INT(11) DEFAULT 0, CHANGE `parent_problem_id` `parent_problem_id` INT(11) DEFAULT 0, CHANGE `parent_change_id` `parent_change_id` INT(11) DEFAULT 0
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
ALTER TABLE `lnkcustomercontracttoservice` CHANGE `customercontract_id` `customercontract_id` INT(11) DEFAULT 0, CHANGE `service_id` `service_id` INT(11) DEFAULT 0, CHANGE `sla_id` `sla_id` INT(11) DEFAULT 0, CHANGE `coveragewindow_id` `coveragewindow_id` INT(11) DEFAULT 0
ALTER TABLE `lnkcustomercontracttoprovidercontract` CHANGE `customercontract_id` `customercontract_id` INT(11) DEFAULT 0, CHANGE `providercontract_id` `providercontract_id` INT(11) DEFAULT 0
ALTER TABLE `lnkcustomercontracttofunctionalci` CHANGE `customercontract_id` `customercontract_id` INT(11) DEFAULT 0, CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0
ALTER TABLE `deliverymodel` CHANGE `org_id` `org_id` INT(11) DEFAULT 0
ALTER TABLE `lnkdeliverymodeltocontact` CHANGE `deliverymodel_id` `deliverymodel_id` INT(11) DEFAULT 0, CHANGE `contact_id` `contact_id` INT(11) DEFAULT 0, CHANGE `role_id` `role_id` INT(11) DEFAULT 0
ALTER TABLE `fiberchannelinterface` CHANGE `datacenterdevice_id` `datacenterdevice_id` INT(11) DEFAULT 0
ALTER TABLE `tape` CHANGE `tapelibrary_id` `tapelibrary_id` INT(11) DEFAULT 0
ALTER TABLE `nasfilesystem` CHANGE `nas_id` `nas_id` INT(11) DEFAULT 0
