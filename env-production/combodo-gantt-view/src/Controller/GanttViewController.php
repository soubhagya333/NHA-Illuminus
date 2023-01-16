<?php
/**
 *  @copyright   Copyright (C) 2010-2020 Combodo SARL
 *  @license     http://opensource.org/licenses/AGPL-3.0
 */



class GanttViewController extends AbstractGanttViewController
{
	public function OperationGanttViewer()
	{
		$aParams = array();

		$this->AddLinkedScript(utils::GetAbsoluteUrlAppRoot().'/js/utils.js');
		$this->AddLinkedScript(utils::GetAbsoluteUrlAppRoot().'/js/jquery.tablesorter.js');
		$this->AddLinkedScript(utils::GetAbsoluteUrlAppRoot().'/js/ace/ace.js');
		$this->AddLinkedScript(utils::GetAbsoluteUrlAppRoot().'/js/ace/ext-searchbox.js');
		$this->AddLinkedScript(utils::GetAbsoluteUrlAppRoot().'/js/ace/theme-eclipse.js');
		$this->AddLinkedScript(utils::GetAbsoluteUrlAppRoot().'/js/ace/theme-eclipse.js');

		$this->AddLinkedStylesheet(utils::GetAbsoluteUrlModulesRoot().'itop-log-mgmt/asset/css/LogMgmt.css');

		$this->DisplayPage($aParams);
	}

	/**
	 * @param string $sLogFileBrowserImpl AbstractLogFilesBrowser impl name
	 *
	 * @throws \Exception
	 */
	private function PrepareLogViewerData($sLogFileBrowserImpl)
	{
		$oLogFileBrowser = new $sLogFileBrowserImpl;
		if (!($oLogFileBrowser instanceof AbstractLogFileBrowser))
		{
			throw new CoreUnexpectedValue('Invalid parameter : logFileBrowserImpl');
		}

		/** @var \Combodo\iTop\Integrity\LogManagement\Service\AbstractLogFileBrowser $sLogFileBrowserImpl */
		$aLogFilesObjects = $sLogFileBrowserImpl::GetLogFilesList();
		$aLogFilesArray = $this->TransformFilesList($aLogFilesObjects);

		$aParams = array(
			'logFileBrowserImpl' => $sLogFileBrowserImpl,
			'filesList' => $aLogFilesArray,
			'aceMode' => $sLogFileBrowserImpl::GetAceMode(),
		);

		$bTemplateName = 'GanttViewerTab';
		$this->RenderLogViewerTab($aParams, $bTemplateName);
	}

	/**
	 * @param \SplFileInfo[] $aFilesObjects
	 *
	 * @return array filename as key and metadata array as value
	 */
	private function TransformFilesList($aFilesObjects)
	{
		uasort($aFilesObjects,
			static function($oA, $oB) {
				/** @var SplFileInfo $oA */
				/** @var SplFileInfo $oB */
				return $oA->getMTime() <= $oB->getMTime(); // MTime = modification date
			});

		$aFilesArray = array();
		/**
		 * @var string $sFileName
		 * @var \SplFileInfo $oFileInfo
		 */
		foreach ($aFilesObjects as $sFileName => $oFileInfo)
		{
			$sFileCreationDate = $this->ConvertTimestampToString($oFileInfo->getCTime());
			$sFileModificationDate = $this->ConvertTimestampToString($oFileInfo->getMTime());
			$sFileSize = SetupUtils::HumanReadableSize($oFileInfo->getSize());
			$aFileMetadataArray = array(
				'name' => $oFileInfo->getFilename(),
				'ctime' => $sFileCreationDate,
				'mtime' => $sFileModificationDate,
				'size' => $sFileSize,
			);

			$aFilesArray[$sFileName] = $aFileMetadataArray;
		}

		return $aFilesArray;
	}

	private function ConvertTimestampToString($iTimestamp)
	{
		$sDateTimeFormat = AttributeDateTime::GetFormat();
		return date($sDateTimeFormat, $iTimestamp);
	}

	/**
	 * @param $aParams
	 * @param $sTemplateName
	 *
	 * @throws \Exception
	 */
	protected function RenderLogViewerTab($aParams, $sTemplateName)
	{
		$sAjaxOperationsBaseUrl = utils::GetAbsoluteUrlModulePage('itop-log-mgmt', 'ajax-operations.php');
		$sDownloadOperationUrl = $sAjaxOperationsBaseUrl.'&operation=DownloadLogs';
		$sViewLogOperationBaseUrl = $sAjaxOperationsBaseUrl.'&operation=ViewLog&newTab=true&logFileBrowserImpl='.$aParams['logFileBrowserImpl'];
		$bIsWinOs = (strpos(PHP_OS, 'WIN') === 0);

		$aParams['downloadOperationUrl'] = $sDownloadOperationUrl ;
		$aParams['viewLogOperationBaseUrl'] = $sViewLogOperationBaseUrl;
		$aParams['ajaxOperationBaseUrl'] = $sAjaxOperationsBaseUrl;
		$aParams['isWinOs'] = $bIsWinOs;

		$this->DisplayAjaxPage($aParams, $sTemplateName);
	}
}
