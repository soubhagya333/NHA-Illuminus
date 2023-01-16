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
	'bkp-backup-running' => 'एक बैकअप चल रहा है। कृपया प्रतीक्षा करें...	',
	'bkp-restore-running' => 'एक बहाली चल रही है। कृपया प्रतीक्षा करें...	',

	'Menu:BackupStatus' => 'बैकअप	',
	'bkp-status-title' => 'बैकअप	',
	'bkp-status-checks' => 'सेटिंग्स और चेक	',
	'bkp-mysqldump-ok' => 'mysqldump मौजूद है: %1$s	',
	'bkp-mysqldump-notfound' => 'mysqldump नहीं मिला: %1$s - कृपया सुनिश्चित करें कि यह स्थापित है और पथ में है, या mysql_bindir को ट्यून करने के लिए कॉन्फ़िगरेशन फ़ाइल को संपादित करें।	',
	'bkp-mysqldump-issue' => 'mysqldump निष्पादित नहीं किया जा सका (retcode=%1$d): कृपया सुनिश्चित करें कि यह स्थापित है और पथ में है, या mysql_bindir को ट्यून करने के लिए कॉन्फ़िगरेशन फ़ाइल को संपादित करें	',
	'bkp-missing-dir' => 'लक्ष्य निर्देशिका <code>%1$s</code> नहीं मिली	',
	'bkp-free-disk-space' => '<b>%1$s मुफ़्त</b> <code>%2$s</code> . में	',
	'bkp-dir-not-writeable' => '%1$s लिखने योग्य नहीं है	',
	'bkp-wrong-format-spec' => 'फ़ाइल नामों को प्रारूपित करने के लिए वर्तमान विनिर्देश गलत है (%1$s)। एक डिफ़ॉल्ट विनिर्देश लागू होगा: %2$s	',
	'bkp-name-sample' => 'बैकअप फ़ाइलों का नाम डीबी पहचानकर्ताओं, दिनांक और समय के आधार पर रखा जाता है। उदाहरण: %1$s	',
	'bkp-week-days' => 'बैकअप <b>हर %1$s %2$s पर</b>होगा	',
	'bkp-retention' => 'लक्ष्य निर्देशिका में अधिक से अधिक <b>%1$d बैकअप फ़ाइलें रखी जाएंगी</b>।	',
	'bkp-next-to-delete' => 'अगला बैकअप होने पर हटा दिया जाएगा (सेटिंग "retention_count" देखें)	',
	'bkp-table-file' => 'फ़ाइल',
	'bkp-table-file+' => 'केवल .zip एक्सटेंशन वाली फ़ाइलें ही बैकअप फ़ाइलें मानी जाती हैं	',
	'bkp-table-size' => 'आकार',
	'bkp-table-size+' => '',
	'bkp-table-actions' => 'कार्रवाई	',
	'bkp-table-actions+' => '',
	'bkp-status-backups-auto' => 'अनुसूचित बैकअप	',
	'bkp-status-backups-manual' => 'मैनुअल बैकअप	',
	'bkp-status-backups-none' => 'अभी तक कोई बैकअप नहीं	',
	'bkp-next-backup' => 'अगला बैकअप <b>%1$s</b> (%2$s) को %3$s पर होगा।	',
	'bkp-next-backup-unknown' => 'अगला बैकअप अभी तक <b>शेड्यूल नहीं</b> है।	',
	'bkp-button-backup-now' => 'अब समर्थन देना!	',
	'bkp-button-restore-now' => 'पुनर्स्थापित करना!	',
	'bkp-confirm-backup' => 'कृपया पुष्टि करें कि आप अभी बैकअप के लिए अनुरोध करते हैं।	',
	'bkp-confirm-restore' => 'कृपया पुष्टि करें कि आप बैकअप %1$s को पुनर्स्थापित करना चाहते हैं।'	,
	'bkp-wait-backup' => 'कृपया बैकअप पूर्ण होने की प्रतीक्षा करें...	',
	'bkp-wait-restore' => 'कृपया पुनर्स्थापना पूर्ण होने की प्रतीक्षा करें...	',
	'bkp-success-restore' => 'पुनर्स्थापना सफलतापूर्वक पूर्ण।	',
));
