<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2018 Combodo SARL
 * @license	http://opensource.org/licenses/AGPL-3.0
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

// Database inconsistencies
Dict::Add('Hi IND', 'Hindi', 'हिन्दी', array(
	// Dictionary entries go here
	'Menu:DBToolsMenu' => 'डेटाबेस अखंडता	',
	'DBTools:Class' => 'कक्षा',
	'DBTools:Title' => 'डेटाबेस अखंडता जांच	',
	'DBTools:ErrorsFound' => 'त्रुटियाँ पाई गई	',
	'DBTools:Indication' => 'महत्वपूर्ण: डेटाबेस में त्रुटियों को ठीक करने के बाद आपको विश्लेषण फिर से चलाना होगा क्योंकि नई विसंगतियां उत्पन्न होंगी	',
	'DBTools:Disclaimer' => 'अस्वीकरण: सुधारों को चलाने से पहले अपने डेटाबेस का बैकअप लें	',
	'DBTools:Error' => 'गलती	',
	'DBTools:Count' => 'गिनती करना	',
	'DBTools:SQLquery' => 'एसक्यूएल क्वेरी	',
	'DBTools:FixitSQLquery' => 'SQL क्वेरी इसे ठीक करने के लिए (संकेत)	',
	'DBTools:SQLresult' => 'एसक्यूएल परिणाम	',
	'DBTools:NoError' => 'डेटाबेस ठीक है	',
	'DBTools:HideIds' => 'त्रुटि सूची	',
	'DBTools:ShowIds' => 'विस्तृत विवरण	',
	'DBTools:ShowReport' => 'प्रतिवेदन',
	'DBTools:IntegrityCheck' => 'अखंडता की जांच	',
	'DBTools:FetchCheck' => 'फ़ेच चेक (लंबा)	',
	'DBTools:SelectAnalysisType' => 'विश्लेषण प्रकार चुनें	',

	'DBTools:Analyze' => 'विश्लेषण',
	'DBTools:Details' => 'प्रदर्शन का विवरण	',
	'DBTools:ShowAll' => 'सभी त्रुटियां दिखाएं	',

	'DBTools:Inconsistencies' => 'डेटाबेस विसंगतियाँ	',
	'DBTools:DetailedErrorTitle' => '%1$s कक्षा में %2$s त्रुटि(त्रुटियां: %3$s	',

	'DBAnalyzer-Integrity-OrphanRecord' => '`%1$s` में अनाथ रिकॉर्ड, इसका समकक्ष तालिका `%2$s` . में होना चाहिए	',
	'DBAnalyzer-Integrity-InvalidExtKey' => 'अमान्य बाहरी कुंजी %1$s (स्तंभ: `%2$s.%3$s`)	',
	'DBAnalyzer-Integrity-MissingExtKey' => '%1$s बाहरी कुंजी गुम है (स्तंभ: `%2$s.%3$s`)	',
	'DBAnalyzer-Integrity-InvalidValue' => '%1$s के लिए अमान्य मान (स्तंभ: `%2$s.%3$s`)	',
	'DBAnalyzer-Integrity-UsersWithoutProfile' => 'कुछ उपयोगकर्ता खातों की कोई प्रोफ़ाइल नहीं होती है	',
	'DBAnalyzer-Integrity-HKInvalid' => 'टूटी पदानुक्रमित कुंजी `%1$s`	',
	'DBAnalyzer-Fetch-Count-Error' => '`%1$s` में फ़ेच गणना त्रुटि, %2$d प्रविष्टियाँ प्राप्त हुई / %3$d की गणना की गई	',
	'DBAnalyzer-Integrity-FinalClass' => 'फ़ील्ड `%2$s`।`%1$s` का मान `%3$s` के समान होना चाहिए।`%1$s`	',
	'DBAnalyzer-Integrity-RootFinalClass' => 'फ़ील्ड `%2$s`.`%1$s` में एक मान्य वर्ग होना चाहिए	',
));

// Database Info
Dict::Add('Hi IND', 'Hindi', 'हिन्दी', array(
	'DBTools:DatabaseInfo' => 'Database Information',
	'DBTools:Base' => 'Base',
	'DBTools:Size' => 'Size',
));

// Lost attachments
Dict::Add('Hi IND', 'Hindi', 'हिन्दी', array(
	'DBTools:LostAttachments' => 'गुम हुए अटैचमेंट	',
	'DBTools:LostAttachments:Disclaimer' => 'यहां आप अपने डेटाबेस को खोए या गलत अटैचमेंट के लिए खोज सकते हैं। यह डेटा रिकवरी टूल नहीं है, हटाए गए डेटा को पुनर्प्राप्त नहीं करता है।	',

	'DBTools:LostAttachments:Button:Analyze' => 'विश्लेषण	',
	'DBTools:LostAttachments:Button:Restore' => 'पुनर्स्थापित करना	',
	'DBTools:LostAttachments:Button:Restore:Confirm' => 'यह क्रिया पूर्ववत नहीं की जा सकती, कृपया पुष्टि करें कि आप चयनित फ़ाइलों को पुनर्स्थापित करना चाहते हैं।	',
	'DBTools:LostAttachments:Button:Busy' => 'कृपया प्रतीक्षा करें...	',

	'DBTools:LostAttachments:Step:Analyze' => 'सबसे पहले, डेटाबेस का विश्लेषण करके खोए/गलत अटैचमेंट की खोज करें।'	,

	'DBTools:LostAttachments:Step:AnalyzeResults' => 'परिणामों का विश्लेषण करें:	',
	'DBTools:LostAttachments:Step:AnalyzeResults:None' => 'महान! ऐसा लगता है कि सब कुछ सही जगह पर है।	',
	'DBTools:LostAttachments:Step:AnalyzeResults:Some' => 'कुछ अटैचमेंट (%1$d) गलत जगह पर लग रहे हैं। निम्नलिखित सूची पर एक नज़र डालें और उन्हें जांचें जिन्हें आप स्थानांतरित करना चाहते हैं।	',
	'DBTools:LostAttachments:Step:AnalyzeResults:Item:Filename' => 'फ़ाइल का नाम	',
	'DBTools:LostAttachments:Step:AnalyzeResults:Item:CurrentLocation' => 'वर्तमान स्थान	',
	'DBTools:LostAttachments:Step:AnalyzeResults:Item:TargetLocation' => 'करने के लिए कदम...	',

	'DBTools:LostAttachments:Step:RestoreResults' => 'परिणाम पुनर्स्थापित करें:	',
	'DBTools:LostAttachments:Step:RestoreResults:Results' => '%1$d/%2$d अटैचमेंट पुनर्स्थापित किए गए।	',

	'DBTools:LostAttachments:StoredAsInlineImage' => 'इनलाइन छवि के रूप में संग्रहीत	',
	'DBTools:LostAttachments:History' => 'अनुलग्नक "%1$s" DB टूल के साथ पुनर्स्थापित किया गया	'
));
