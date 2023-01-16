<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2021 Combodo SARL
 * @license    http://opensource.org/licenses/AGPL-3.0
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with iTop. If not, see <http://www.gnu.org/licenses/>
 */

Dict::Add('Hi IND', 'Hindi', 'हिन्दी', array(
	'Menu:ChangeManagement' => 'परिवर्तन प्रबंधन	',
	'Menu:Change:Overview' => 'अवलोकन	',
	'Menu:Change:Overview+' => '',
	'Menu:NewChange' => 'नया बदलाव	',
	'Menu:NewChange+' => 'एक नया परिवर्तन टिकट बनाएं	',
	'Menu:SearchChanges' => 'परिवर्तन खोजें	',
	'Menu:SearchChanges+' => 'परिवर्तन टिकट के लिए खोजें	',
	'Menu:Change:Shortcuts' => 'शॉर्टकट',
	'Menu:Change:Shortcuts+' => '',
	'Menu:WaitingAcceptance' => 'स्वीकृति की प्रतीक्षा में परिवर्तन	',
	'Menu:WaitingAcceptance+' => '',
	'Menu:WaitingApproval' => 'अनुमोदन की प्रतीक्षा में परिवर्तन	',
	'Menu:WaitingApproval+' => '',
	'Menu:Changes' => 'खुला परिवर्तन	',
	'Menu:Changes+' => 'सभी खुले परिवर्तन	',
	'Menu:MyChanges' => 'मुझे सौंपे गए परिवर्तन	',
	'Menu:MyChanges+' => 'मुझे सौंपे गए परिवर्तन (एजेंट के रूप में)	',
	'UI-ChangeManagementOverview-ChangeByCategory-last-7-days' => 'पिछले 7 दिनों के लिए श्रेणी के अनुसार परिवर्तन	',
	'UI-ChangeManagementOverview-Last-7-days' => 'पिछले 7 दिनों में हुए परिवर्तनों की संख्या	',
	'UI-ChangeManagementOverview-ChangeByDomain-last-7-days' => 'पिछले 7 दिनों के लिए डोमेन के अनुसार परिवर्तन'	,
	'UI-ChangeManagementOverview-ChangeByStatus-last-7-days' => 'पिछले 7 दिनों की स्थिति के अनुसार परिवर्तन	',
	'Tickets:Related:OpenChanges' => 'खुला परिवर्तन	',
	'Tickets:Related:RecentChanges' => 'हाल के परिवर्तन (72)',
));

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+


//
// Class: Change
//

Dict::Add('Hi IND', 'Hindi', 'हिन्दी', array(
	'Class:Change' => 'परिवर्तन',
	'Class:Change+' => '',
	'Class:Change/Attribute:status' => 'दर्जा	',
	'Class:Change/Attribute:status+' => '',
	'Class:Change/Attribute:status/Value:new' => 'नया',
	'Class:Change/Attribute:status/Value:new+' => '',
	'Class:Change/Attribute:status/Value:assigned' => 'सौंपा गया	',
	'Class:Change/Attribute:status/Value:assigned+' => '',
	'Class:Change/Attribute:status/Value:planned' => 'की योजना बनाई	',
	'Class:Change/Attribute:status/Value:planned+' => '',
	'Class:Change/Attribute:status/Value:rejected' => 'अस्वीकृतअस्वीकार	',
	'Class:Change/Attribute:status/Value:rejected+' => '',
	'Class:Change/Attribute:status/Value:approved' => 'स्वीकृत',
	'Class:Change/Attribute:status/Value:approved+' => '',
	'Class:Change/Attribute:status/Value:closed' => 'बंद किया हुआ	',
	'Class:Change/Attribute:status/Value:closed+' => '',
	'Class:Change/Attribute:category' => 'श्रेणी',
	'Class:Change/Attribute:category+' => '',
	'Class:Change/Attribute:category/Value:application' => 'आवेदन पत्र	',
	'Class:Change/Attribute:category/Value:application+' => 'आवेदन पत्र	',
	'Class:Change/Attribute:category/Value:hardware' => 'हार्डवेयर',
	'Class:Change/Attribute:category/Value:hardware+' => 'हार्डवेयर',
	'Class:Change/Attribute:category/Value:network' => 'नेटवर्क',
	'Class:Change/Attribute:category/Value:network+' => 'नेटवर्क',
	'Class:Change/Attribute:category/Value:other' => 'अन्य	',
	'Class:Change/Attribute:category/Value:other+' => 'अन्य	',
	'Class:Change/Attribute:category/Value:software' => 'सॉफ़्टवेयर',
	'Class:Change/Attribute:category/Value:software+' => 'सॉफ़्टवेयर',
	'Class:Change/Attribute:category/Value:system' => 'व्यवस्था',
	'Class:Change/Attribute:category/Value:system+' => 'व्यवस्था',
	'Class:Change/Attribute:reject_reason' => 'कारण अस्वीकार करें	',
	'Class:Change/Attribute:reject_reason+' => '',
	'Class:Change/Attribute:changemanager_id' => 'प्रबंधक बदलें	',
	'Class:Change/Attribute:changemanager_id+' => '',
	'Class:Change/Attribute:changemanager_email' => 'प्रबंधक ईमेल बदलें	',
	'Class:Change/Attribute:changemanager_email+' => '',
	'Class:Change/Attribute:parent_id' => 'प्रबंधक ईमेल बदलें	',
	'Class:Change/Attribute:parent_id+' => '',
	'Class:Change/Attribute:parent_name' => 'जनक परिवर्तन रेफरी	',
	'Class:Change/Attribute:parent_name+' => '',
	'Class:Change/Attribute:creation_date' => 'निर्माण तिथि	',
	'Class:Change/Attribute:creation_date+' => '',
	'Class:Change/Attribute:approval_date' => 'स्वीकृति तिथि	',
	'Class:Change/Attribute:approval_date+' => '',
	'Class:Change/Attribute:fallback_plan' => 'वापसी योजना	',
	'Class:Change/Attribute:fallback_plan+' => '',
	'Class:Change/Attribute:related_request_list' => 'संबंधित अनुरोध	',
	'Class:Change/Attribute:related_request_list+' => 'इस परिवर्तन से जुड़े सभी उपयोगकर्ता अनुरोध	',
	'Class:Change/Attribute:related_incident_list' => 'संबंधित घटनाएं	',
	'Class:Change/Attribute:related_incident_list+' => 'इस परिवर्तन से जुड़ी सभी घटनाएं	',
	'Class:Change/Attribute:related_problems_list' => 'संबंधित समस्याएं	',
	'Class:Change/Attribute:related_problems_list+' => 'इस परिवर्तन से जुड़ी सभी समस्याएं	',
	'Class:Change/Attribute:child_changes_list' => 'बाल परिवर्तन	',
	'Class:Change/Attribute:child_changes_list+' => 'इस परिवर्तन से जुड़े सभी उप परिवर्तन	',
	'Class:Change/Attribute:parent_id_friendlyname' => 'माता-पिता मित्रवत नाम बदलते हैं	',
	'Class:Change/Attribute:parent_id_friendlyname+' => '',
	'Class:Change/Stimulus:ev_assign' => 'सौंपना',
	'Class:Change/Stimulus:ev_assign+' => '',
	'Class:Change/Stimulus:ev_plan' => 'योजना',
	'Class:Change/Stimulus:ev_plan+' => '',
	'Class:Change/Stimulus:ev_reject' => 'अस्वीकार	',
	'Class:Change/Stimulus:ev_reject+' => '',
	'Class:Change/Stimulus:ev_reopen' => 'फिर से खोलना	',
	'Class:Change/Stimulus:ev_reopen+' => '',
	'Class:Change/Stimulus:ev_approve' => 'मंज़ूरी देना	',
	'Class:Change/Stimulus:ev_approve+' => '',
	'Class:Change/Stimulus:ev_finish' => 'बंद करना	',
	'Class:Change/Stimulus:ev_finish+' => '',
	'Class:Change/Attribute:outage' => 'आउटेज	',
	'Class:Change/Attribute:outage+' => '',
	'Class:Change/Attribute:outage/Value:no' => 'नहीं',
	'Class:Change/Attribute:outage/Value:no+' => '',
	'Class:Change/Attribute:outage/Value:yes' => 'हाँ',
	'Class:Change/Attribute:outage/Value:yes+' => '',
));
