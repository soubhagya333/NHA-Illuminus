<?php
// Copyright (C) 2010 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

/**
 * iTop User Portal main page
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

require_once('../../approot.inc.php');
require_once(APPROOT.'/application/application.inc.php');
require_once APPROOT.'setup/itopdesignformat.class.inc.php';

/////////////////////////////
//
// Main
//


try
{
	require_once(APPROOT.'/application/startup.inc.php');
//if (version_compare(ITOP_DESIGN_LATEST_VERSION , '3.0') < 0) {
//		require_once(APPROOT.'/application/nicewebpage.class.inc.php');
		require_once(MODULESROOT.'/customer-survey/quizzwebpage.class.inc.php');
//	}
		require_once(MODULESROOT.'/customer-survey/quizzwizard.class.inc.php');
	$oAppContext = new ApplicationContext();
	$sOperation = utils::ReadParam('operation', '');
	$sToken = utils::ReadParam('token', '', false, 'raw_data');
	$iQuizz = utils::ReadParam('quizz_id', '');
	
	switch($sOperation)
	{
		case 'async_action':
		ini_set('max_execution_time', max(240, ini_get('max_execution_time')));
				
		$sClass = utils::ReadParam('step_class', '');
		$sState = utils::ReadParam('step_state', '');
		$sActionCode = utils::ReadParam('code', '');
		$aParams = utils::ReadParam('params', array(), false, 'raw_data');
		if (version_compare(ITOP_DESIGN_LATEST_VERSION , '3.0') >= 0) {
			$oPage = new AjaxPage('');
		} else {
			require_once(APPROOT.'/application/ajaxwebpage.class.inc.php');
			$oPage = new ajax_page('');
		}
		if (is_subclass_of($sClass, 'WizardStep'))
		{
			$oDummyController = new QuizzController($sClass, 0, $iQuizz, $sToken);
			$oStep = new $sClass($oDummyController, $sState);

			$oStep->AsyncAction($oPage, $sActionCode, $aParams);
		}
		$oPage->output();
		break;

		default:		
		$oWizard = new QuizzController('QuizzWizStepQuestions', 'start', $iQuizz, $sToken);
		$oWizard->Run();
	}
}
catch(CoreException $e)
{
	require_once(APPROOT.'/setup/setuppage.class.inc.php');
	$oP = new SetupPage(Dict::S('UI:PageTitle:FatalError'));
	$oP->add("<h1>".Dict::S('UI:FatalErrorMessage')."</h1>\n");	
	$oP->error(Dict::Format('UI:Error_Details', $e->getHtmlDesc()));	
	$oP->output();

	if (MetaModel::IsLogEnabledIssue())
	{
		if (MetaModel::IsValidClass('EventIssue'))
		{
			try
			{
				$oLog = new EventIssue();
	
				$oLog->Set('message', $e->getMessage());
				$oLog->Set('userinfo', '');
				$oLog->Set('issue', $e->GetIssue());
				$oLog->Set('impact', 'Page could not be displayed');
				$oLog->Set('callstack', $e->getTrace());
				$oLog->Set('data', $e->getContextData());
				$oLog->DBInsertNoReload();
			}
			catch(Exception $e)
			{
				IssueLog::Error("Failed to log issue into the DB");
			}
		}

		IssueLog::Error($e->getMessage());
	}

	// For debugging only
	//throw $e;
}
catch(Exception $e)
{
	require_once(APPROOT.'/setup/setuppage.class.inc.php');
	$oP = new SetupPage(Dict::S('UI:PageTitle:FatalError'));
	$oP->add("<h1>".Dict::S('UI:FatalErrorMessage')."</h1>\n");	
	$oP->error(Dict::Format('UI:Error_Details', $e->getMessage()));	
	$oP->output();

	if (MetaModel::IsLogEnabledIssue())
	{
		if (MetaModel::IsValidClass('EventIssue'))
		{
			try
			{
				$oLog = new EventIssue();
	
				$oLog->Set('message', $e->getMessage());
				$oLog->Set('userinfo', '');
				$oLog->Set('issue', 'PHP Exception');
				$oLog->Set('impact', 'Page could not be displayed');
				$oLog->Set('callstack', $e->getTrace());
				$oLog->Set('data', array());
				$oLog->DBInsertNoReload();
			}
			catch(Exception $e)
			{
				IssueLog::Error("Failed to log issue into the DB");
			}
		}

		IssueLog::Error($e->getMessage());
	}
}
