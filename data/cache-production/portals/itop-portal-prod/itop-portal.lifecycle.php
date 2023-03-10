<?php

// File generated by LifeCycleValidatorHelper
//
// Please do not edit manually
// List of denied stimuli by profiles in the lifecycles
// - used by the portal LifecycleValidatorHelper
//
class PortalLifecycleValues
{
	protected static $aPROFILES = array (
);

	/**
	* Returns the denied stimuli for a profile / class
	*
	* @param integer $iProfileId
	* @param string $sClass
	*/
	public static function GetProfileStimuli($iProfileId, $sClass)
	{
		$aStimuli = array();

		$sLifecycleKey = $iProfileId.'_'.$sClass;
		if (isset(self::$aPROFILES[$sLifecycleKey]))
		{
			$aStimuli = self::$aPROFILES[$sLifecycleKey];
		}

		return $aStimuli;
	}
}
