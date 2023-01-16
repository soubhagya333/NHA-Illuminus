<?php
//
// File generated by ... on the 2022-11-22T08:44:23+0100
// Please do not edit manually
//

/**
 * Classes and menus for combodo-dispatch-userrequest (version 1.1.11)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// Menus
//
class MenuCreation_combodo_dispatch_userrequest extends ModuleHandlerAPI
{
	public static function OnMenuCreation()
	{
		global $__comp_menus__; // ensure that the global variable is indeed global !
		$__comp_menus__['UserRequest:Shortcuts'] = new TemplateMenuNode('UserRequest:Shortcuts', '', $__comp_menus__['RequestManagement']->GetIndex(), 3 , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['UserRequest:RequestsDispatchedToMyTeams'] = new OQLMenuNode('UserRequest:RequestsDispatchedToMyTeams', "SELECT UserRequest JOIN Team ON UserRequest.team_id = Team.id JOIN lnkPersonToTeam AS L ON L.team_id = Team.id WHERE L.person_id = :current_contact_id AND UserRequest.status NOT IN (\"resolved\", \"closed\")", $__comp_menus__['UserRequest:Shortcuts']->GetIndex(), 0.5, false , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null, true);
		$__comp_menus__['UserRequest:RequestsDispatchedToMyTeams']->SetParameters(array('auto_reload' => "fast"));
	}
} // class MenuCreation_combodo_dispatch_userrequest
