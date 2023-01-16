<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2018 Combodo SARL
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
// Class: UserLocal
//

Dict::Add('Hi IND', 'Hindi', 'हिन्दी', array(
	'Class:UserLocal' => ITOP_APPLICATION_SHORT.' उपयोगकर्ता	',
	'Class:UserLocal+' => 'उपयोगकर्ता द्वारा प्रमाणित	'.ITOP_APPLICATION_SHORT,
	'Class:UserLocal/Attribute:password' => 'पासवर्ड',
	'Class:UserLocal/Attribute:password+' => 'उपयोगकर्ता प्रमाणीकरण स्ट्रिंग	',

	'Class:UserLocal/Attribute:expiration' => 'पासवर्ड समाप्ति	',
	'Class:UserLocal/Attribute:expiration+' => 'पासवर्ड समाप्ति स्थिति (प्रभावी होने के लिए एक एक्सटेंशन की आवश्यकता होती है)',
	'Class:UserLocal/Attribute:expiration/Value:can_expire' => 'समाप्त हो सकता है	',
	'Class:UserLocal/Attribute:expiration/Value:can_expire+' => '',
	'Class:UserLocal/Attribute:expiration/Value:never_expire' => 'कभी समाप्ति न करें	',
	'Class:UserLocal/Attribute:expiration/Value:never_expire+' => '',
	'Class:UserLocal/Attribute:expiration/Value:force_expire' => 'खत्म हो चुका	',
	'Class:UserLocal/Attribute:expiration/Value:force_expire+' => '',
	'Class:UserLocal/Attribute:expiration/Value:otp_expire' => 'एक बारी पासवर्ड'	,
	'Class:UserLocal/Attribute:expiration/Value:otp_expire+' => 'पासवर्ड उपयोगकर्ता द्वारा बदला नहीं जा सकता	.',
	'Class:UserLocal/Attribute:password_renewed_date' => 'पासवर्ड नवीनीकृत हुआ	',
	'Class:UserLocal/Attribute:password_renewed_date+' => 'जब पासवर्ड आखिरी बार बदला गया था	',

	'Error:UserLocalPasswordValidator:UserPasswordPolicyRegex:ValidationFailed' => '
	पासवर्ड कम से कम 8 वर्णों का होना चाहिए और इसमें अपरकेस, लोअरकेस, संख्यात्मक और विशेष वर्ण शामिल होने चाहिए।',

	'UserLocal:password:expiration' => 'नीचे के क्षेत्रों को एक विस्तार की आवश्यकता है	',
	'Class:UserLocal/Error:OneTimePasswordChangeIsNotAllowed' => 'आपके अपने उपयोगकर्ता के लिए पासवर्ड की समाप्ति को "वन-टाइम पासवर्ड" पर सेट करने की अनुमति नहीं है
	',
));
