<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2017 ITOMIG GmbH
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

// Menus
Dict::Add('Hi IND', 'Hindi', 'हिन्दी', array(
	'Menu:Integrations' => 'एकीकरण',
	'Dashboard:Integrations:Title' => 'बाहरी अनुप्रयोगों के साथ एकीकरण	',
	'Dashboard:Integrations:Outgoing:Title' => 'आउटगोइंग वेबहुक एकीकरण	',
	'Dashboard:Integrations:ActionWebhookList:Title' => 'वेबहुक प्रकार की क्रियाएं	',
));

// Base classes
Dict::Add('Hi IND', 'Hindi', 'हिन्दी', array(
	// RemoteApplicationType
	'Class:RemoteApplicationType' => 'दूरस्थ अनुप्रयोग प्रकार	',
	'Class:RemoteApplicationType/Attribute:remoteapplicationconnections_list' => 'सम्बन्ध	',
	'Class:RemoteApplicationType/Attribute:remoteapplicationconnections_list+' => 'उस एप्लिकेशन के लिए कनेक्शन	',

	// RemoteApplicationConnection
	'Class:RemoteApplicationConnection' => 'रिमोट एप्लिकेशन कनेक्शन	',
	'Class:RemoteApplicationConnection/Attribute:remoteapplicationtype_id' => 'आवेदन का प्रकार	',
	'Class:RemoteApplicationConnection/Attribute:remoteapplicationtype_id+' => 'आवेदन का प्रकार जिसके लिए कनेक्शन है (यदि आपकी सूची में नहीं है तो \'जेनेरिक\' का उपयोग करें)	',
	'Class:RemoteApplicationConnection/Attribute:environment' => 'पर्यावरण',
	'Class:RemoteApplicationConnection/Attribute:environment+' => 'कनेक्शन के वातावरण का प्रकार	',
	'Class:RemoteApplicationConnection/Attribute:environment/Value:1-development' => 'विकास',
	'Class:RemoteApplicationConnection/Attribute:environment/Value:2-test' => 'परीक्षण',
	'Class:RemoteApplicationConnection/Attribute:environment/Value:3-production' => 'उत्पादन',
	'Class:RemoteApplicationConnection/Attribute:url' => 'यूआरएल',
	'Class:RemoteApplicationConnection/Attribute:actions_list' => 'वेबहुक सूचनाएं	',
	'Class:RemoteApplicationConnection/Attribute:actions_list+' => 'इस कनेक्शन का उपयोग कर वेबहुक सूचनाएं	',
	// - Fieldsets
	'RemoteApplicationConnection:baseinfo' => 'सामान्य जानकारी	',
	'RemoteApplicationConnection:moreinfo' => 'अधिक जानकारी	',
	'RemoteApplicationConnection:authinfo' => 'प्रमाणीकरण',

	// EventWebhook
	'Class:EventWebhook' => 'वेबहुक उत्सर्जन घटना	',
	'Class:EventWebhook/Attribute:action_finalclass' => 'अंतिम कक्षा	',
	'Class:EventWebhook/Attribute:webhook_url' => 'वेबहुक यूआरएल	',
	'Class:EventWebhook/Attribute:headers' => 'हेडर',
	'Class:EventWebhook/Attribute:payload' => 'पेलोड',
	'Class:EventWebhook/Attribute:response' => 'जवाब',

	// ActionWebhook
	'Class:ActionWebhook' => 'वेबहुक कॉल (सामान्य)	',
	'Class:ActionWebhook+' => 'किसी भी प्रकार के आवेदन के लिए वेबहुक कॉल	',
	'Class:ActionWebhook/Attribute:language' => 'भाषा',
	'Class:ActionWebhook/Attribute:language+' => 'इस अधिसूचना की भाषा, ज्यादातर सूचनाओं की खोज करते समय उपयोग की जाती है, लेकिन इसका उपयोग विशेषता लेबल का अनुवाद करने के लिए भी किया जा सकता है	',
	'Class:ActionWebhook/Attribute:remoteapplicationconnection_id' => 'संबंध',
	'Class:ActionWebhook/Attribute:remoteapplicationconnection_id+' => 'स्थिति \'उत्पादन में\' होने पर उपयोग की जाने वाली कनेक्शन जानकारी	',
	'Class:ActionWebhook/Attribute:test_remoteapplicationconnection_id' => 'परीक्षण कनेक्शन	',
	'Class:ActionWebhook/Attribute:test_remoteapplicationconnection_id+' => 'जब स्थिति का \'परीक्षण किया जा रहा हो\' उपयोग की जाने वाली कनेक्शन जानकारी	',
	'Class:ActionWebhook/Attribute:method' => 'तरीका',
	'Class:ActionWebhook/Attribute:method+' => 'HTTP अनुरोध की विधि	',
	'Class:ActionWebhook/Attribute:method/Value:get' => 'प्राप्त',
	'Class:ActionWebhook/Attribute:method/Value:post' => 'पद',
	'Class:ActionWebhook/Attribute:method/Value:put' => 'रखना',
	'Class:ActionWebhook/Attribute:method/Value:patch' => 'पैबंद',
	'Class:ActionWebhook/Attribute:method/Value:delete' => 'मिटाना',
	'Class:ActionWebhook/Attribute:headers' => 'हेडर',
	'Class:ActionWebhook/Attribute:headers+' => 'HTTP अनुरोध के शीर्षलेख, प्रति पंक्ति एक होना चाहिए (उदा. \'Content-type: application/json\')	',
	'Class:ActionWebhook/Attribute:payload' => 'पेलोड',
	'Class:ActionWebhook/Attribute:payload+' => '
	वेबहुक कॉल के दौरान भेजा गया डेटा, अधिकांश समय यह एक JSON स्ट्रिंग होता है। यदि आपकी पेलोड संरचना स्थिर है तो इसका उपयोग करें।
	
	महत्वपूर्ण: \'पेलोड कॉलबैक तैयार करें\' सेट होने पर अनदेखा कर दिया जाएगा',
	'Class:ActionWebhook/Attribute:prepare_payload_callback' => 'पेलोड कॉलबैक तैयार करें',
	'Class:ActionWebhook/Attribute:prepare_payload_callback+' => 'वेबहुक कॉल के दौरान भेजे जाने वाले पेलोड डेटा को तैयार करने के लिए PHP विधि। इसका उपयोग करें यदि आपकी पेलोड संरचना गतिशील रूप से निर्मित होनी चाहिए।

	आप 2 प्रकार के तरीकों का उपयोग कर सकते हैं:
	- ट्रिगरिंग ऑब्जेक्ट से ही (जैसे। UserRequest), सार्वजनिक होना चाहिए। उदाहरण: $this->XXX($aContextArgs, $oLog, $oAction)
	- किसी भी PHP वर्ग से, स्थिर और सार्वजनिक होना चाहिए। नाम पूरी तरह से योग्य नाम होना चाहिए। उदाहरण: \SomeClass::XXX($oObject, $aContextArgs, $oLog, $oAction)
	
	महत्वपूर्ण: यदि सेट किया जाता है, तो \'पेलोड\' विशेषता पर ध्यान नहीं दिया जाएगा।',
	'Class:ActionWebhook/Attribute:process_response_callback' => 'प्रक्रिया प्रतिक्रिया कॉलबैक	',
	'Class:ActionWebhook/Attribute:process_response_callback+' => 'वेबहुक कॉल प्रतिक्रिया को संसाधित करने के लिए PHP विधि।

	आप 2 प्रकार के तरीकों का उपयोग कर सकते हैं:
	- ट्रिगरिंग ऑब्जेक्ट से ही (जैसे। UserRequest), सार्वजनिक होना चाहिए। उदाहरण: $this->XXX($oResponse, $oAction)
	- किसी भी PHP वर्ग से, स्थिर और सार्वजनिक होना चाहिए। नाम पूरी तरह से योग्य नाम होना चाहिए। उदाहरण: \SomeClass::XXX($oObject, $oResponse, $oAction)
	- $oResponse कुछ मामलों में शून्य हो सकता है (उदाहरण के लिए अनुरोध भेजने में विफल)',
	// - Fieldsets
	'ActionWebhook:baseinfo' => 'सामान्य जानकारी	',
	'ActionWebhook:moreinfo' => 'अधिक जानकारी	',
	'ActionWebhook:webhookconnection' => 'वेबहुक कनेक्शन	',
	// Note: This one is used by derivated classes
	'ActionWebhook:requestparameters' => 'अनुरोध पैरामीटर	',
	'ActionWebhook:advancedparameters' => 'उन्नत पैरामीटर	',
));

// iTop
Dict::Add('Hi IND', 'Hindi', 'हिन्दी', array(
	// RemoteiTopConnection
	'Class:RemoteiTopConnection' => 'रिमोट आईटॉप कनेक्शन	',
	'Class:RemoteiTopConnection/Attribute:auth_user' => 'प्रामाणिक। उपयोगकर्ता	',
	'Class:RemoteiTopConnection/Attribute:auth_user+' => 'प्रमाणीकरण के लिए उपयोग किए गए उपयोगकर्ता (रिमोट iTop पर) का लॉगिन	',
	'Class:RemoteiTopConnection/Attribute:auth_pwd' => 'प्रामाणिक। पासवर्ड	',
	'Class:RemoteiTopConnection/Attribute:auth_pwd+' => 'प्रमाणीकरण के लिए उपयोग किए जाने वाले उपयोगकर्ता का पासवर्ड (दूरस्थ iTop पर)	',
	'Class:RemoteiTopConnection/Attribute:version' => 'एपीआई संस्करण	',
	'Class:RemoteiTopConnection/Attribute:version+' => 'नामक API का संस्करण (उदा. 1.3)	',

	// ActioniTopWebhook
	'Class:ActioniTopWebhook' => 'iTop वेबहुक कॉलs	',
	'Class:ActioniTopWebhook+' => 'दूरस्थ iTop एप्लिकेशन पर वेबहुक कॉल	',
	'Class:ActioniTopWebhook/Attribute:headers+' => 'HTTP अनुरोध के शीर्षलेख, प्रति पंक्ति एक होना चाहिए (उदा. \'Content-type: application/x-www-form-urlencoded\')

	महत्वपूर्ण:
	- \'Content-type\' को iTop के लिए \'application/x-www-form-urlencoded\' पर सेट किया जाना चाहिए, भले ही हम JSON भेजते हैं
	- एक \'मूल प्राधिकरण\' शीर्षलेख भेजने के दौरान अनुरोध करने के लिए स्वचालित रूप से संलग्न किया जाएगा, जिसमें चयनित कनेक्शन से प्रमाण-पत्र होंगे',
	'Class:ActioniTopWebhook/Attribute:payload' => 'JSON डेटा	',
	'Class:ActioniTopWebhook/Attribute:payload+' => 'JSON पेलोड, एक JSON स्ट्रिंग होना चाहिए जिसमें ऑपरेशन नाम और पैरामीटर हों, विस्तृत जानकारी के लिए दस्तावेज़ देखें	',
	'Class:ActioniTopWebhook/Attribute:prepare_payload_callback+' => 'वेबहुक कॉल के दौरान भेजे जाने वाले पेलोड डेटा को तैयार करने के लिए PHP विधि। इसका उपयोग करें यदि आपकी पेलोड संरचना गतिशील रूप से निर्मित होनी चाहिए।

	आप 2 प्रकार के तरीकों का उपयोग कर सकते हैं:
	- ट्रिगरिंग ऑब्जेक्ट से ही (जैसे। UserRequest), सार्वजनिक होना चाहिए। उदाहरण: $this->XXX($aContextArgs, $oLog, $oAction)
	- किसी भी PHP वर्ग से, स्थिर और सार्वजनिक होना चाहिए। नाम पूरी तरह से योग्य नाम होना चाहिए। उदाहरण: \SomeClass::XXX($oObject, $aContextArgs, $oLog, $oAction)
	
	महत्वपूर्ण: यदि सेट किया जाता है, तो \'JSON डेटा\' विशेषता पर ध्यान नहीं दिया जाएगा।',
));

// Slack
Dict::Add('Hi IND', 'Hindi', 'हिन्दी', array(
	// ActionSlackNotification
	'Class:ActionSlackNotification' => 'सुस्त अधिसूचना	',
	'Class:ActionSlackNotification+' => 'चैनल में या उपयोगकर्ता को स्लैक संदेश के रूप में सूचना भेजें	',
	'Class:ActionSlackNotification/Attribute:message' => 'Message',
	'Class:ActionSlackNotification/Attribute:include_list_attributes' => 'से गुण	',
	'Class:ActionSlackNotification/Attribute:include_list_attributes+' => 'संदेश के नीचे अतिरिक्त विशेषताएँ प्रदर्शित करें। वे या तो सामान्य \'सूची\' दृश्य या अधिसूचना को ट्रिगर करने वाली वस्तु के कस्टम \'slack\' दृश्य से हो सकते हैं। ध्यान दें कि \'slack\' दृश्य को पहले डेटामॉडल में परिभाषित किया जाना चाहिए (zlist)	',
	'Class:ActionSlackNotification/Attribute:include_list_attributes/Value:list' => 'सामान्य सूची दृश्य	',
	'Class:ActionSlackNotification/Attribute:include_list_attributes/Value:slack' => 'कस्टम "सुस्त" दृश्य	',
	'Class:ActionSlackNotification/Attribute:include_user_info' => 'उपयोगकर्ता जानकारी।	',
	'Class:ActionSlackNotification/Attribute:include_user_info+' => 'संदेश के नीचे उपयोगकर्ता जानकारी (पूरा नाम) प्रदर्शित करें	',
	'Class:ActionSlackNotification/Attribute:include_user_info/Value:no' => 'नहीं',
	'Class:ActionSlackNotification/Attribute:include_user_info/Value:yes' => 'हाँ',
	'Class:ActionSlackNotification/Attribute:include_modify_button' => 'संशोधित करें बटन	',
	'Class:ActionSlackNotification/Attribute:include_modify_button+' => 'वस्तु को संपादित करने के लिए संदेश के नीचे एक बटन शामिल करें	'.ITOP_APPLICATION_SHORT,
	'Class:ActionSlackNotification/Attribute:include_modify_button/Value:no' => 'नहीं	',
	'Class:ActionSlackNotification/Attribute:include_modify_button/Value:yes' => 'हाँ',
	'Class:ActionSlackNotification/Attribute:include_delete_button' => 'बटन हटाएं	',
	'Class:ActionSlackNotification/Attribute:include_delete_button+' => 'में वस्तु को हटाने के लिए संदेश के नीचे एक बटन शामिल करें	'.ITOP_APPLICATION_SHORT,
	'Class:ActionSlackNotification/Attribute:include_delete_button/Value:no' => 'नहीं',
	'Class:ActionSlackNotification/Attribute:include_delete_button/Value:yes' => 'हाँ',
	'Class:ActionSlackNotification/Attribute:include_other_actions_button' => 'अन्य क्रिया बटन	',
	'Class:ActionSlackNotification/Attribute:include_other_actions_button+' => 'संदेश के नीचे अन्य क्रियाएं (जैसे वर्तमान स्थिति में उपलब्ध संक्रमण) शामिल करें	',
	'Class:ActionSlackNotification/Attribute:include_other_actions_button/Value:no' => 'नहीं',
	'Class:ActionSlackNotification/Attribute:include_other_actions_button/Value:specify' => 'उल्लिखित करना	',
	'Class:ActionSlackNotification/Attribute:include_other_actions_button/Value:yes' => 'हाँ',
	'Class:ActionSlackNotification/Attribute:specified_other_actions' => 'अन्य क्रिया कोड	',
	'Class:ActionSlackNotification/Attribute:specified_other_actions+' => 'निर्दिष्ट करें कि संदेश के नीचे किन क्रियाओं को बटन के रूप में शामिल करना है। क्रिया कोड की अल्पविराम से अलग की गई सूची होनी चाहिए (उदा. \'ev_reopen, ev_close\')	',
	'Class:ActionSlackNotification/Attribute:prepare_payload_callback+' => 'वेबहुक कॉल के दौरान भेजे जाने वाले पेलोड डेटा को तैयार करने के लिए PHP विधि। इसका उपयोग करें यदि मानक विकल्प पर्याप्त रूप से लचीले नहीं हैं या यदि आपकी पेलोड संरचना गतिशील रूप से निर्मित होनी चाहिए।

	आप 2 प्रकार के तरीकों का उपयोग कर सकते हैं:
	- ट्रिगरिंग ऑब्जेक्ट से ही (जैसे। UserRequest), सार्वजनिक होना चाहिए। उदाहरण: $this->XXX($aContextArgs, $oLog, $oAction)
	- किसी भी PHP वर्ग से, स्थिर और सार्वजनिक होना चाहिए। नाम पूरी तरह से योग्य नाम होना चाहिए। उदाहरण: \SomeClass::XXX($oObject, $aContextArgs, $oLog, $oAction)
	
	महत्वपूर्ण: यदि सेट किया जाता है, तो \'message\' और सभी \'अतिरिक्त तत्वों\' को अनदेखा कर दिया जाएगा।',
	// - Fieldsets
	'ActionSlackNotification:message' => 'आधार संदेश	',
	'ActionSlackNotification:additionalelements' => 'शामिल करने के लिए अतिरिक्त तत्व	',

	// Payload
	'ActionSlackNotification:Payload:BlockKit:UserInfo' => '<%2$s|%1$s> से सूचना (%3$s)s	',
));

// Rocket.Chat
Dict::Add('Hi IND', 'Hindi', 'हिन्दी', array(
	// ActionRocketChatNotification
	'Class:ActionRocketChatNotification' => 'रॉकेट.चैट अधिसूचना	',
	'Class:ActionRocketChatNotification+' => 'रॉकेट के रूप में सूचना भेजें। चैनल में या उपयोगकर्ता को चैट संदेश भेजें99	',
	'Class:ActionRocketChatNotification/Attribute:message' => 'संदेश',
	'Class:ActionRocketChatNotification/Attribute:message+' => 'संदेश जो चैट में प्रदर्शित होगा	',
	'Class:ActionRocketChatNotification/Attribute:bot_alias' => 'उपनाम',
	'Class:ActionRocketChatNotification/Attribute:bot_alias+' => 'डिफ़ॉल्ट बॉट उपनाम को ओवरराइड करता है, संदेश के उपयोगकर्ता नाम से पहले दिखाई देगा	',
	'Class:ActionRocketChatNotification/Attribute:bot_url_avatar' => 'छवि अवतार	',
	'Class:ActionRocketChatNotification/Attribute:bot_url_avatar+' => 'डिफ़ॉल्ट बॉट अवतार को ओवरराइड करता है, छवि का उपयोग करने के लिए एक संपूर्ण URL होना चाहिए	',
	'Class:ActionRocketChatNotification/Attribute:bot_emoji_avatar' => 'इमोजी अवतार	',
	'Class:ActionRocketChatNotification/Attribute:bot_emoji_avatar+' => 'डिफ़ॉल्ट बॉट अवतार को ओवरराइड करता है, कोई भी Rocket.Chat इमोजी हो सकता है (उदा. :ghost:, :white_check_mark:, ...)। ध्यान दें कि यदि URL अवतार सेट है, तो इमोजी प्रदर्शित नहीं होंगे।	',
	'Class:ActionRocketChatNotification/Attribute:prepare_payload_callback+' => 'वेबहुक कॉल के दौरान भेजे जाने वाले पेलोड डेटा को तैयार करने के लिए PHP विधि। इसका उपयोग करें यदि मानक विकल्प पर्याप्त रूप से लचीले नहीं हैं या यदि आपकी पेलोड संरचना गतिशील रूप से निर्मित होनी चाहिए।

	आप 2 प्रकार के तरीकों का उपयोग कर सकते हैं:
	- ट्रिगरिंग ऑब्जेक्ट से ही (जैसे। UserRequest), सार्वजनिक होना चाहिए। उदाहरण: $this->XXX($aContextArgs, $oLog, $oAction)
	- किसी भी PHP वर्ग से, स्थिर और सार्वजनिक होना चाहिए। नाम पूरी तरह से योग्य नाम होना चाहिए। उदाहरण: \SomeClass::XXX($oObject, $aContextArgs, $oLog, $oAction)
	
	महत्वपूर्ण: यदि सेट किया जाता है, तो \'message\' और सभी \'bot जानकारी\' पर ध्यान नहीं दिया जाएगा।',
	// - Fieldsets
	'ActionRocketChatNotification:message' => 'आधार संदेश	',
	'ActionRocketChatNotification:additionalelements' => 'बॉट जानकारी	'
));

// Google Chat
Dict::Add('Hi IND', 'Hindi', 'हिन्दी', array(
	// ActionGoogleChatNotification
	'Class:ActionGoogleChatNotification' => 'गूगल चैट सूचना	',
	'Class:ActionGoogleChatNotification+' => 'किसी स्पेस में Google चैट संदेश के रूप में सूचना भेजें	',
	'Class:ActionGoogleChatNotification/Attribute:message' => 'संदेश',
	'Class:ActionGoogleChatNotification/Attribute:message+' => 'संदेश जो चैट में प्रदर्शित होगा, अभी के लिए केवल सादा पाठ समर्थित है।	',
	'Class:ActionGoogleChatNotification/Attribute:prepare_payload_callback+' => 'वेबहुक कॉल के दौरान भेजे जाने वाले पेलोड डेटा को तैयार करने के लिए PHP विधि। इसका उपयोग करें यदि मानक विकल्प पर्याप्त रूप से लचीले नहीं हैं या यदि आपकी पेलोड संरचना गतिशील रूप से निर्मित होनी चाहिए।

	आप 2 प्रकार के तरीकों का उपयोग कर सकते हैं:
	- ट्रिगरिंग ऑब्जेक्ट से ही (जैसे। UserRequest), सार्वजनिक होना चाहिए। उदाहरण: $this->XXX($aContextArgs, $oLog, $oAction)
	- किसी भी PHP वर्ग से, स्थिर और सार्वजनिक होना चाहिए। नाम पूरी तरह से योग्य नाम होना चाहिए। उदाहरण: \SomeClass::XXX($oObject, $aContextArgs, $oLog, $oAction)
	
	महत्वपूर्ण: यदि सेट किया जाता है, तो \'message\' पर ध्यान नहीं दिया जाएगा।',
	// - Fieldsets
	'ActionGoogleChatNotification:message' => 'संदेश',
));

// Microsoft Teams
Dict::Add('Hi IND', 'Hindi', 'हिन्दी', array(
	// ActionMicrosoftTeamsNotification
	'Class:ActionMicrosoftTeamsNotification' => 'माइक्रोसॉफ्ट टीम अधिसूचना	',
	'Class:ActionMicrosoftTeamsNotification+' => 'किसी चैनल में Microsoft Teams संदेश के रूप में सूचना भेजें	',
	'Class:ActionMicrosoftTeamsNotification/Attribute:title' => 'शीर्षक',
	'Class:ActionMicrosoftTeamsNotification/Attribute:message' => 'संदेश	',
	'Class:ActionMicrosoftTeamsNotification/Attribute:include_list_attributes' => 'से गुण	',
	'Class:ActionMicrosoftTeamsNotification/Attribute:include_list_attributes+' => 'संदेश के नीचे अतिरिक्त विशेषताएँ प्रदर्शित करें। वे या तो सामान्य \'सूची\' दृश्य या अधिसूचना को ट्रिगर करने वाली वस्तु के कस्टम \'mteams\' दृश्य से हो सकते हैं। ध्यान दें कि \'mteams\' दृश्य को पहले डेटामॉडल में परिभाषित किया जाना चाहिए (zlist)	',
	'Class:ActionMicrosoftTeamsNotification/Attribute:include_list_attributes/Value:list' => 'सामान्य सूची दृश्य	',
	'Class:ActionMicrosoftTeamsNotification/Attribute:include_list_attributes/Value:msteams' => 'कस्टम "mteams" दृश्य'	,
	'Class:ActionMicrosoftTeamsNotification/Attribute:include_modify_button' => 'संशोधित करें बटन	',
	'Class:ActionMicrosoftTeamsNotification/Attribute:include_modify_button+' => 'वस्तु को संपादित करने के लिए संदेश के नीचे एक बटन शामिल करें	'.ITOP_APPLICATION_SHORT,
	'Class:ActionMicrosoftTeamsNotification/Attribute:include_modify_button/Value:no' => 'नहीं',
	'Class:ActionMicrosoftTeamsNotification/Attribute:include_modify_button/Value:yes' => 'हाँ',
	'Class:ActionMicrosoftTeamsNotification/Attribute:include_delete_button' => 'बटन हटाएं	',
	'Class:ActionMicrosoftTeamsNotification/Attribute:include_delete_button+' => 'में वस्तु को हटाने के लिए संदेश के नीचे एक बटन शामिल करें	'.ITOP_APPLICATION_SHORT,
	'Class:ActionMicrosoftTeamsNotification/Attribute:include_delete_button/Value:no' => 'नहीं',
	'Class:ActionMicrosoftTeamsNotification/Attribute:include_delete_button/Value:yes' => 'हाँ',
	'Class:ActionMicrosoftTeamsNotification/Attribute:include_other_actions_button' => 'अन्य क्रिया बटन	',
	'Class:ActionMicrosoftTeamsNotification/Attribute:include_other_actions_button+' => 'संदेश के नीचे अन्य क्रियाएं (जैसे वर्तमान स्थिति में उपलब्ध संक्रमण) शामिल करें	',
	'Class:ActionMicrosoftTeamsNotification/Attribute:include_other_actions_button/Value:no' => 'नहीं',
	'Class:ActionMicrosoftTeamsNotification/Attribute:include_other_actions_button/Value:specify' => 'उल्लिखित करना	',
	'Class:ActionMicrosoftTeamsNotification/Attribute:include_other_actions_button/Value:yes' => 'हाँ',
	'Class:ActionMicrosoftTeamsNotification/Attribute:specified_other_actions' => 'अन्य क्रिया कोड	',
	'Class:ActionMicrosoftTeamsNotification/Attribute:specified_other_actions+' => 'निर्दिष्ट करें कि संदेश के नीचे किन क्रियाओं को बटन के रूप में शामिल करना है। क्रिया कोड की अल्पविराम से अलग की गई सूची होनी चाहिए (उदा. \'ev_reopen, ev_close\')	',
	'Class:ActionMicrosoftTeamsNotification/Attribute:theme_color' => 'हाइलाइट रंग	',
	'Class:ActionMicrosoftTeamsNotification/Attribute:theme_color+' => 'Microsoft Teams में संदेश कार्ड का हाइलाइट रंग, एक मान्य हेक्साडेसिमल रंग होना चाहिए (उदा. FF0000)	',
	'Class:ActionMicrosoftTeamsNotification/Attribute:image_url' => 'पदक चित्र	',
	'Class:ActionMicrosoftTeamsNotification/Attribute:image_url+' => 'संदेश कार्ड में पदक के रूप में प्रदर्शित करने के लिए छवि का URL, इसे इंटरनेट पर सार्वजनिक रूप से एक्सेस किया जाना चाहिए ताकि Microsoft टीम इसे प्रदर्शित कर सके	',
	'Class:ActionMicrosoftTeamsNotification/Attribute:prepare_payload_callback+' => 'वेबहुक कॉल के दौरान भेजे जाने वाले पेलोड डेटा को तैयार करने के लिए PHP विधि। इसका उपयोग करें यदि मानक विकल्प पर्याप्त रूप से लचीले नहीं हैं या यदि आपकी पेलोड संरचना गतिशील रूप से निर्मित होनी चाहिए।

	आप 2 प्रकार के तरीकों का उपयोग कर सकते हैं:
	- ट्रिगरिंग ऑब्जेक्ट से ही (जैसे। UserRequest), सार्वजनिक होना चाहिए। उदाहरण: $this->XXX($aContextArgs, $oLog, $oAction)
	- किसी भी PHP वर्ग से, स्थिर और सार्वजनिक होना चाहिए। नाम पूरी तरह से योग्य नाम होना चाहिए। उदाहरण: \SomeClass::XXX($oObject, $aContextArgs, $oLog, $oAction)
	
	महत्वपूर्ण: यदि सेट किया जाता है, तो \'शीर्षक\', \'संदेश\' और सभी \'अतिरिक्त तत्व\' को नजरअंदाज कर दिया जाएगा।',
	// - Fieldsets
	'ActionMicrosoftTeamsNotification:message' => 'आधार संदेश	',
	'ActionMicrosoftTeamsNotification:additionalelements' => 'शामिल करने के लिए अतिरिक्त तत्व	',
	'ActionMicrosoftTeamsNotification:theme' => 'थीम',
));
