<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

require_once("include/EditView/EditView2.php");
require_once("include/upload_file.php");

class ViewConvertLead extends SugarView
{
    protected $fileName = "modules/Leads/metadata/convertdefs.php";
    protected $new_contact = false;

    public function __construct(
        $bean = null,
        $view_object_map = array()
        )
    {
        parent::SugarView($bean, $view_object_map);
    	$this->medataDataFile = $this->fileName;
        if (file_exists("custom/$this->fileName"))
        {
            $this->medataDataFile = "custom/$this->fileName";
        }
    }

    public function preDisplay()
    {
        if (!$this->bean->ACLAccess('edit')) {
            ACLController::displayNoAccess();
            sugar_die('');
        }
    }

    /**
	 * @see SugarView::display()
	 */
	public function display()
    {
        if (!empty($_REQUEST['handle']) && $_REQUEST['handle'] == 'save')
        {
        	return $this->handleSave();
        }

    	global $beanList;

    	// get the EditView defs to check if opportunity_name exists, for a check below for populating data
    	$opportunityNameInLayout = false;
    	$editviewFile = 'modules/Leads/metadata/editviewdefs.php';
        $this->medataDataFile = $editviewFile;
        if (file_exists("custom/{$editviewFile}"))
        {
            $this->medataDataFile = "custom/{$editviewFile}";
        }
    	include($this->medataDataFile);
    	foreach($viewdefs['Leads']['EditView']['panels'] as $panel_index => $section){
    	    foreach($section as $row_array){
    	        foreach($row_array as $cell){
        	        if(isset($cell['name']) && $cell['name'] == 'opportunity_name'){
        	            $opportunityNameInLayout = true;
        	        }
    	        }
    	    }
    	}

        $this->medataDataFile = $this->fileName;
        if (file_exists("custom/$this->fileName"))
        {
            $this->medataDataFile = "custom/$this->fileName";
        }
    	$this->loadDefs();
        $this->getRecord();
        $this->checkForDuplicates($this->focus);
        $smarty = new Sugar_Smarty();
        $ev = new EditView();
        $ev->ss = $smarty;
        $ev->view = "ConvertLead";
        echo $this->getModuleTitle();

        require_once("include/QuickSearchDefaults.php");
        $qsd = QuickSearchDefaults::getQuickSearchDefaults();
        $qsd->setFormName("ConvertLead");

        $this->contact = new Contact();
        $smarty->assign("contact_def", $this->contact->field_defs);
        $smarty->assign("form_name", "ConvertLead");
        $smarty->assign("form_id", "ConvertLead");
        $smarty->assign("module", "Leads");
        $smarty->assign("view", "convertlead");
        $smarty->assign("bean", $this->focus);
		$smarty->assign("record_id", $this->focus->id);
        global $mod_strings;
        $smarty->assign('MOD', $mod_strings);
        $smarty->display("modules/Leads/tpls/ConvertLeadHeader.tpl");

        echo "<div class='edit view' style='width:auto;'>";

        global $sugar_config, $app_list_strings, $app_strings;
        $smarty->assign('lead_conv_activity_opt', $sugar_config['lead_conv_activity_opt']);
        
        //Switch up list depending on copy or move
        if($sugar_config['lead_conv_activity_opt'] == 'move')
        {
        	$smarty->assign('convertModuleListOptions', get_select_options_with_id(array('None'=>$app_strings['LBL_NONE'], 'Contacts' => $app_list_strings["moduleListSingular"]['Contacts']), ''));	
        }
        else if($sugar_config['lead_conv_activity_opt'] == 'copy')
        {
        	$smarty->assign('convertModuleListOptions', get_select_options_with_id(array('Contacts' => $app_list_strings["moduleListSingular"]['Contacts']), ''));
        }
        
        

        foreach($this->defs as $module => $vdef)
        {
            if(!isset($beanList[$module]))
            {
                continue;
            }


            $bean = $beanList[$module];
            $focus = new $bean();

            // skip if we aren't allowed to save this bean
            if (!$focus->ACLAccess('save'))
            {
                continue;
            }

            $focus->fill_in_additional_detail_fields();
            foreach($focus->field_defs as $field => $def)
            {
            	if(isset($vdef[$ev->view]['copyData']) && $vdef[$ev->view]['copyData'])
                {
	                if ($module == "Accounts" && $field == 'name')
	                {
	                    $focus->name = $this->focus->account_name;
	                }
	                else if ($module == "Opportunities" && $field == 'amount')
	                {
	                    $focus->amount = unformat_number($this->focus->opportunity_amount);
	                } 
                 	else if ($module == "Opportunities" && $field == 'name') {
                 		if ($opportunityNameInLayout && !empty($this->focus->opportunity_name)){
                           $focus->name = $this->focus->opportunity_name;
                 		}
                   	}
	                else if ($field == "id")
                    {
						//If it is not a contact, don't copy the ID from the lead
                    	if ($module == "Contacts") {
                    	   $focus->$field = $this->focus->$field;
                        }
                    } else if (is_a($focus, "Company") && $field == 'phone_office')
	                {
	                	//Special case where company and person have the same field with a different name
	                	$focus->phone_office = $this->focus->phone_work;
	                }
					else if (strpos($field, "billing_address") !== false && $focus->field_defs[$field]["type"] == "varchar") /* Bug 42219 fix */         
					{
						$tmp_field = str_replace("billing_", "primary_", $field);
						$focus->field_defs[$field]["type"] = "text";
                        if (isset($this->focus->$tmp_field)) {
						    $focus->$field = $this->focus->$tmp_field;
                        }
					 }

					else if (strpos($field, "shipping_address") !== false && $focus->field_defs[$field]["type"] == "varchar") /* Bug 42219 fix */
					{
						$tmp_field = str_replace("shipping_", "primary_", $field);
						if (isset($this->focus->$tmp_field)) {
                            $focus->$field = $this->focus->$tmp_field;
                        }
						$focus->field_defs[$field]["type"] = "text";
					}    					
                    else if (isset($this->focus->$field))
                    {
                        $focus->$field = $this->focus->$field;
                    }
                }
            }

            //Copy over email data
            $ev->setup($module, $focus, $this->medataDataFile, "modules/Leads/tpls/ConvertLead.tpl", false);
            $ev->process();
            echo($ev->display(false));
            echo($this->getValidationJS($module, $focus, $vdef[$ev->view]));
        }
        echo "</div>";
        echo ($qsd->getQSScriptsJSONAlreadyDefined());
        // need to re-assign bean as it gets overridden by $ev->display
        $smarty->assign("bean", $this->focus);
        $smarty->display("modules/Leads/tpls/ConvertLeadFooter.tpl");
    }

    protected function getRecord()
    {
    	$this->focus = new Lead();
    	if (isset($_REQUEST['record']))
    	{
    		$this->focus->retrieve($_REQUEST['record']);
    	}
    }

    protected function loadDefs()
    {
    	$viewdefs = array();
    	include($this->medataDataFile);
    	$this->defs = $viewdefs;
    }

    /**
     * Returns the javascript to enable/disable validation of each module's sub-form
     * //TODO: This should probably be on the smarty template
     * @param $module String the target module name.
     * @param $focus SugarBean instance of the target module.
     * @param $focus EditView def for the module.
     * @return String, javascript to echo to page.
     */
    protected function getValidationJS(
        $module,
        $focus,
        $viewdef
        )
    {
        $validateSelect = isset($viewdef['required']) && $viewdef['required'] && !empty($viewdef['select']);
        $jsOut  = "
        <script type='text/javascript'>
            if (!SUGAR.convert)  SUGAR.convert = {requiredFields: {}};
            SUGAR.convert.toggle$module = function(){
                clear_all_errors();
                inputsWithErrors = [];
                if(!SUGAR.convert.{$module}Enabled)
                {
                    for(var i in SUGAR.convert.requiredFields.$module)
                    {
                        addToValidate('ConvertLead', '$module' + i, 'varchar', true, SUGAR.convert.requiredFields.{$module}[i]);
                    }
                    ";
        if ($validateSelect) {
        	$jsOut  .= "
                    removeFromValidate('ConvertLead', '{$viewdef['select']}');";
        }

        $jsOut .= "
                    SUGAR.convert.{$module}Enabled = true;
                } else {
                    for(var i in SUGAR.convert.requiredFields.$module)
                    {
                        removeFromValidate('ConvertLead', '$module' + i);
                    }";
        if ($validateSelect) {
            $jsOut  .= "
                addToValidate('ConvertLead', '{$viewdef['select']}', 'varchar', true, '"
            . translate($this->contact->field_defs[$viewdef['select']]['vname']) . "');";
        }
        $jsOut .= "
                    SUGAR.convert.{$module}Enabled = false;
                }
                YAHOO.util.Dom.get('convert_create_{$module}').value = SUGAR.convert.{$module}Enabled;
            };\n";

        if (isset($viewdef['required']) && $viewdef['required'])
        {
            if (!empty($viewdef['select']) && (empty($viewdef['default_action']) || $viewdef['default_action'] != 'create'))
            {
                $jsOut .= "
            SUGAR.convert.{$module}Enabled = true;";
            }
            $jsOut .= "
            YAHOO.util.Event.onDOMReady(SUGAR.convert.toggle$module);";
        } else if (isset($viewdef['default_action'])  && $viewdef['default_action'] == "create")
        {
             $jsOut .= "\n            SUGAR.convert.{$module}Enabled = true;";
        }
        $jsOut .= "
            YAHOO.util.Event.addListener('new$module', 'click', SUGAR.convert.toggle$module);
            SUGAR.convert.requiredFields.$module = {};";
        foreach($focus->field_defs as $field => $def)
        {
            if (isset($def['required']) && $def['required'])
            {
                $jsOut .= "
            SUGAR.convert.requiredFields.$module.$field = '". translate($def['vname'], $module) . "';\n";
            }
        }

        $jsOut .= "
        </script>";

        return $jsOut;
    }

    /**
     * Saves a new Contact as well as any related items passed in.
     *
     * @return null
     */
    protected function handleSave()
    {
        require_once('modules/Campaigns/utils.php');
        require_once("include/formbase.php");
        $lead = false;
        if (!empty($_REQUEST['record']))
        {
            $lead = new Lead();
            $lead->retrieve($_REQUEST['record']);
        }

        global $beanList;
        $this->loadDefs();
        $beans = array();
        $selectedBeans = array();
        $selects = array();
        //Make sure the contact object is availible for relationships.
        $beans['Contacts'] = new Contact();
        $beans['Contacts']->id = create_guid();
        $beans['Contacts']->new_with_id = true;

        // Bug 39287 - Check for Duplicates on selected modules before save
        if (!empty($_REQUEST['selectedContact']))
        {
            $beans['Contacts']->retrieve($_REQUEST['selectedContact']);
            if (!empty($beans['Contacts']->id))
            {
                $beans['Contacts']->new_with_id = false;
                unset($_REQUEST["convert_create_Contacts"]);
                unset($_POST["convert_create_Contacts"]);
            }
        }
        elseif (!empty($_REQUEST["convert_create_Contacts"]) && $_REQUEST["convert_create_Contacts"] != "false" && !isset($_POST['ContinueContact'])) 
        {
            require_once('modules/Contacts/ContactFormBase.php');
            $contactForm = new ContactFormBase();
            $duplicateContacts = $contactForm->checkForDuplicates('Contacts');

            if (isset($duplicateContacts))
            {
                echo $contactForm->buildTableForm($duplicateContacts,  'Contacts');
                return;
            }
            $this->new_contact = true;
        }
        if (!empty($_REQUEST['selectedAccount']))
        {
            $_REQUEST['account_id'] = $_REQUEST['selectedAccount'];
            unset($_REQUEST["convert_create_Accounts"]);
            unset($_POST["convert_create_Accounts"]);
        }
        elseif (!empty($_REQUEST["convert_create_Accounts"]) && $_REQUEST["convert_create_Accounts"] != "false" && empty($_POST['ContinueAccount']))
        {
            require_once('modules/Accounts/AccountFormBase.php');
            $accountForm = new AccountFormBase();
            $duplicateAccounts = $accountForm->checkForDuplicates('Accounts');
            if (isset($duplicateAccounts))
            {
                echo $accountForm->buildTableForm($duplicateAccounts);
                return;
            }
        }

        foreach ($this->defs as $module => $vdef)
        {
            //Create a new record if "create" was selected
        	if (!empty($_REQUEST["convert_create_$module"]) && $_REQUEST["convert_create_$module"] != "false")
            {
                //Save the new record
                $bean = $beanList[$module];
	            if (empty($beans[$module]))
	            	$beans[$module] = new $bean();

            	$this->populateNewBean($module, $beans[$module], $beans['Contacts'], $lead);

            }
            //If an existing bean was selected, relate it to the contact
            else if (!empty($vdef['ConvertLead']['select'])) 
            {
                //Save the new record
                $select = $vdef['ConvertLead']['select'];
                $fieldDef = $beans['Contacts']->field_defs[$select];
                if (!empty($fieldDef['id_name']) && !empty($_REQUEST[$fieldDef['id_name']]))
                {
                    $beans['Contacts']->$fieldDef['id_name'] = $_REQUEST[$fieldDef['id_name']];
                    $selects[$module] = $_REQUEST[$fieldDef['id_name']];
                    if (!empty($_REQUEST[$select]))
                    {
                        $beans['Contacts']->$select = $_REQUEST[$select];
                    }
                    // Bug 39268 - Add the existing beans to a list of beans we'll potentially add the lead's activities to
                    $bean = loadBean($module);
                    $bean->retrieve($_REQUEST[$fieldDef['id_name']]);
                    $selectedBeans[$module] = $bean;
                }
            }
        }

        $this->handleActivities($lead, $beans);
        // Bug 39268 - Add the lead's activities to the selected beans
        $this->handleActivities($lead, $selectedBeans);

        //link selected account to lead if it exists
        if (!empty($selectedBeans['Accounts']))
        {
            $lead->account_id = $selectedBeans['Accounts']->id;
        }

        //Handle non-contacts relationships
        foreach ($beans as $bean)
        {
            if (!empty($lead))
            {
                if (empty($bean->assigned_user_id))
                {
                    $bean->assigned_user_id = $lead->assigned_user_id;
                }
                $leadsRel = $this->findRelationship($bean, $lead);
                if (!empty($leadsRel))
                {
                    $bean->load_relationship($leadsRel);
                    $relObject = $bean->$leadsRel->getRelationshipObject();
                    if ($relObject->relationship_type == "one-to-many" && $bean->$leadsRel->_get_bean_position())
                    {
                        $id_field = $relObject->rhs_key;
                        $lead->$id_field = $bean->id;
                    }
                    else 
                    {
                        $bean->$leadsRel->add($lead->id);
                    }
                }
            }
            //Special case code for opportunities->Accounts
            if ($bean->object_name == "Opportunity" && empty($bean->account_id))
            {
                if (isset($beans['Accounts']))
                {
                    $bean->account_id = $beans['Accounts']->id;
                    $bean->account_name = $beans['Accounts']->name;
                }
                else if (!empty($selects['Accounts']))
                {
                    $bean->account_id = $selects['Accounts'];
                }
            }

            //create meetings-users relationship
            if ($bean->object_name == "Meeting")
            {
                $bean = $this->setMeetingsUsersRelationship($bean);
            }
            $this->copyAddressFields($bean, $beans['Contacts']);

            $bean->save();
            //if campaign id exists then there should be an entry in campaign_log table for the newly created contact: bug 44522	
            if (isset($lead->campaign_id) && $lead->campaign_id != null && $bean->object_name == "Contact")
            {
                campaign_log_lead_or_contact_entry($lead->campaign_id, $lead, $beans['Contacts'], 'contact');
            }
        }
        if (!empty($lead))
        {	//Mark the original Lead converted
            $lead->status = "Converted";
            $lead->converted = '1';
            $lead->in_workflow = true;
            $lead->save();
        }

        $this->displaySaveResults($beans);
    }

    public function setMeetingsUsersRelationship($bean)
    {
        global $current_user;
        $meetingsRel = $this->findRelationshipByName($bean, $this->defs['Meetings']['ConvertLead']['relationship']);
        if (!empty($meetingsRel))
        {
            $bean->load_relationship($meetingsRel);
            $bean->$meetingsRel->add($current_user->id);
            return $bean;
        }
        else
        {
            return false;
        }
    }
    protected function displaySaveResults(
        $beans
        )
    {
    	global $beanList;
    	echo "<div><ul>";
        foreach($beans as $bean)
        {
            $beanName = $bean->object_name;
            if ( $beanName == 'Contact' && !$this->new_contact ) {
                echo "<li>" . translate("LBL_EXISTING_CONTACT") . " -
                    <a href='index.php?module={$bean->module_dir}&action=DetailView&record={$bean->id}'>
                       {$bean->get_summary_text()}
                    </a></li>";
            }
            else {
                global $app_list_strings;
                if(!empty($app_list_strings['moduleListSingular'][$bean->module_dir])) {
                    $module_name = $app_list_strings['moduleListSingular'][$bean->module_dir];
                } else {
                    $module_name = translate('LBL_MODULE_NAME', $bean->module_dir);
                }
                if(empty($module_name)) {
                    $module_name = translate($beanName);
                }
                echo "<li>" . translate("LBL_CREATED_NEW") . ' ' . $module_name . " -
                    <a href='index.php?module={$bean->module_dir}&action=DetailView&record={$bean->id}'>
                       {$bean->get_summary_text()}
                    </a></li>";
            }
        }

    	echo "</ul></div>";
    }

    protected function handleActivities(
        $lead,
        $beans
        )
    {
    	global $app_list_strings;
        global $sugar_config;
        global $app_strings;
    	$parent_types = $app_list_strings['record_type_display'];

    	$activities = $this->getActivitiesFromLead($lead);

    	foreach($beans as $module => $bean)
    	{
	    	if (isset($parent_types[$module]))
	    	{
                if (empty($bean->id))
                {
                    $bean->id = create_guid();
		            $bean->new_with_id = true;
                }
                if( isset($_POST['lead_conv_ac_op_sel']) && $_POST['lead_conv_ac_op_sel'] != $app_strings['LBL_NONE'])
                {
	                foreach($activities as $activity)
			    	{
	                            if (!isset($sugar_config['lead_conv_activity_opt']) || $sugar_config['lead_conv_activity_opt'] == 'copy') {
	                                if (isset($_POST['lead_conv_ac_op_sel'])) {
	                                    //if the copy to module(s) are defined, copy only to those module(s)
	                                    if (is_array($_POST['lead_conv_ac_op_sel'])) {
	                                        foreach ($_POST['lead_conv_ac_op_sel'] as $mod) {
	                                            if ($mod == $module) {
	                                                $this->copyActivityAndRelateToBean($activity, $bean);
	                                                break;
	                                            }
	                                        }
	                                    }
	                                }
	                            }
	                            else if ($sugar_config['lead_conv_activity_opt'] == 'move') {
	                                // if to move activities, should be only one module selected
	                                if ($_POST['lead_conv_ac_op_sel'] == $module) {
	                                    $this->moveActivity($activity, $bean);
	                                }
	                            }
			    	}
                }
	    	}
    	}
    }

    /**
     * Change the parent id and parent type of an activity
     * @param $activity Activity to be modified
     * @param $bean New parent bean of the activity
     */
    protected function moveActivity($activity, $bean) {
        global $beanList;

        $lead = null;
        if (!empty($_REQUEST['record']))
        {
            $lead = new Lead();
            $lead->retrieve($_REQUEST['record']);
        }

        // delete the old relationship to the old parent (lead)
        if ($rel = $this->findRelationship($activity, $lead)) {
            $activity->load_relationship ($rel) ;

            if ($activity->parent_id && $activity->id) {
                $activity->$rel->delete($activity->id, $activity->parent_id);
            }
        }

        // add the new relationship to the new parent (contact, account, etc)
        if ($rel = $this->findRelationship($activity, $bean)) {
            $activity->load_relationship ($rel) ;

            $relObj = $activity->$rel->getRelationshipObject();
            if ( $relObj->relationship_type=='one-to-one' || $relObj->relationship_type == 'one-to-many' )
            {
                $key = $relObj->rhs_key;
                $activity->$key = $bean->id;
            }
            $activity->$rel->add($bean);
        }

        // set the new parent id and type
        $activity->parent_id = $bean->id;
        $activity->parent_type = $bean->module_dir;

        $activity->save();
    }

    /**
     * Gets the list of activities related to the lead
     * @param Lead $lead Lead to get activities from
     * @return Array of Activity SugarBeans .
     */
	protected function getActivitiesFromLead(
	    $lead
	    )
	{
		if (!$lead) return;

		global $beanList, $db;

		$activitesList = array("Calls", "Tasks", "Meetings", "Emails", "Notes");
		$activities = array();

		foreach($activitesList as $module)
		{
			$beanName = $beanList[$module];
			$activity = new $beanName();
			$query = "SELECT id FROM {$activity->table_name} WHERE parent_id = '{$lead->id}' AND parent_type = 'Leads'";
			$result = $db->query($query,true);
            while($row = $db->fetchByAssoc($result))
            {
            	$activity = new $beanName();
				$activity->retrieve($row['id']);
				$activity->fixUpFormatting();
				$activities[] = $activity;
            }
		}

		return $activities;
	}

	protected function copyActivityAndRelateToBean(
	    $activity,
	    $bean
	    )
	{
		global $beanList;

		$newActivity = clone $activity;
		$newActivity->id = create_guid();
		$newActivity->new_with_id = true;

		//Special case to prevent duplicated tasks from appearing under Contacts multiple times
    	if ($newActivity->module_dir == "Tasks" && $bean->module_dir != "Contacts")
    	{
    		$newActivity->contact_id = $activity->contact_name = "";
    	}

		if ($rel = $this->findRelationship($newActivity, $bean))
        {
            $newActivity->load_relationship ($rel) ;
            $relObj = $newActivity->$rel->getRelationshipObject();
            if ( $relObj->relationship_type=='one-to-one' || $relObj->relationship_type == 'one-to-many' )
            {
                $key = $relObj->rhs_key;
                $newActivity->$key = $bean->id;
            }
            $newActivity->parent_id = $bean->id;
	        $newActivity->parent_type = $bean->module_dir;
	        $newActivity->update_date_modified = false; //bug 41747 
	        $newActivity->save();
            $newActivity->$rel->add($bean);
            if ($newActivity->module_dir == "Notes" && $newActivity->filename) {
	        	UploadFile::duplicate_file($activity->id, $newActivity->id,  $newActivity->filename);
	        }
         }
	}

    /**
     * Populates the passed in Bean fron the contact and the $_REQUEST
     * @param String $module Module of new bean
     * @param SugarBean $bean SugarBean to be populated.
     * @param Contact $contact Contact to relate the bean to.
     */
	protected function populateNewBean(
	    $module,
	    $bean,
	    $contact,
	    $lead
	    )
	{
		populateFromPost($module, $bean, true);

		//Copy data from the contact to new bean
		foreach($bean->field_defs as $field => $def)
		{
			if(!isset($_REQUEST[$module . $field]) && isset($lead->$field) && $field != 'id')
			{
				$bean->$field = $lead->$field;
				if($field == 'date_entered') $bean->$field = gmdate($GLOBALS['timedate']->get_db_date_time_format()); //bug 41030
			}
		}
		//Try to link to the new contact
		$contactRel = "";
		if (!empty($vdef['ConvertLead']['select']))
		{
			$select = $vdef['ConvertLead']['select'];
			$fieldDef = $contact->field_defs[$select];
			if (!empty($fieldDef['id_name']))
			{
				$bean->id = create_guid();
				$bean->new_with_id = true;
				$contact->$fieldDef['id_name'] = $bean->id ;
				if ($fieldDef['id_name'] != $select) {
					$rname = isset($fieldDef['rname']) ? $fieldDef['rname'] : "";
					if (!empty($rname) && isset($bean->$rname))
						$contact->$select = $bean->$rname;
					else
						$contact->$select = $bean->name;
				}
			}
		} else if ($module != "Contacts"){
			$contactRel = $this->findRelationship($contact, $bean);
			if (!empty($contactRel))
			{
				$bean->id = create_guid();
				$bean->new_with_id = true;
				$contact->load_relationship ($contactRel) ;
				$relObject = $contact->$contactRel->getRelationshipObject();
				if ($relObject->relationship_type == "one-to-many" && $contact->$contactRel->_get_bean_position())
				{
					$id_field = $relObject->rhs_key;
					$bean->$id_field = $contact->id;
				} else {
					$contact->$contactRel->add($bean);
				}
				//Set the parent of activites to the new Contact
				if (isset($bean->field_defs['parent_id']) && isset($bean->field_defs['parent_type']))
				{
					$bean->parent_id = $contact->id;
					$bean->parent_type = "Contacts";
				}
			}
		}
	}

	protected function copyAddressFields($bean, $contact)
	{
	//Copy over address info from the contact to any beans with address not set
	        foreach($bean->field_defs as $field => $def)
			{
				if(!isset($_REQUEST[$bean->module_dir . $field]) && strpos($field, "_address_") !== false)
				{
					$set = "primary";
					if (strpos($field, "alt_") !== false || strpos($field, "shipping_") !== false)
						$set = "alt";
					$type = "";

					if(strpos($field, "_address_street_2") !== false)
						$type = "_address_street_2";
					else if(strpos($field, "_address_street_3") !== false)
						$type = "_address_street_3";
					else if(strpos($field, "_address_street_4") !== false)
						$type = "";
					else if(strpos($field, "_address_street") !== false)
						$type = "_address_street";
					else if(strpos($field, "_address_city") !== false)
						$type = "_address_city";
					else if(strpos($field, "_address_state") !== false)
						$type = "_address_state";
					else if(strpos($field, "_address_postalcode") !== false)
						$type = "_address_postalcode";
					else if(strpos($field, "_address_country") !== false)
						$type = "_address_country";

						$var = $set.$type;
					if (isset($contact->$var))
						$bean->$field = $contact->$var;
				}
			}
	}


    protected function findRelationship(
        $from,
        $to
        )
    {
    	global $dictionary;
    	require_once("modules/TableDictionary.php");
    	foreach ($from->field_defs as $field=>$def)
        {
            if (isset($def['type']) && $def['type'] == "link" && isset($def['relationship'])) 
			{
                $rel_name = $def['relationship'];
                $rel_def = "";
                if (isset($dictionary[$from->object_name]['relationships']) && isset($dictionary[$from->object_name]['relationships'][$rel_name]))
                {
                    $rel_def = $dictionary[$from->object_name]['relationships'][$rel_name];
                }
                else if (isset($dictionary[$to->object_name]['relationships']) && isset($dictionary[$to->object_name]['relationships'][$rel_name]))
                {
                    $rel_def = $dictionary[$to->object_name]['relationships'][$rel_name];
                }
                else if (isset($dictionary[$rel_name]) && isset($dictionary[$rel_name]['relationships'])
                        && isset($dictionary[$rel_name]['relationships'][$rel_name]))
                {
                	$rel_def = $dictionary[$rel_name]['relationships'][$rel_name];
                }
                if (!empty($rel_def)) {
                    if ($rel_def['lhs_module'] == $from->module_dir && $rel_def['rhs_module'] == $to->module_dir )
                    {
                    	return $field;
                    }
                    else if ($rel_def['rhs_module'] == $from->module_dir && $rel_def['lhs_module'] == $to->module_dir )
                    {
                    	return $field;
                    }
                }
            }
        }
        return false;
    }

    protected function findRelationshipByName($from, $rel_name)
    {
        global $dictionary;
        require_once("modules/TableDictionary.php");
        foreach ($from->field_defs as $field => $def)
        {
            if (isset($def['relationship']) && $def['relationship'] == $rel_name) 
            {
                return $field;
            }
        }
        return false;
    }
	/**
	 * @see SugarView::_getModuleTitleParams()
	 */
	protected function _getModuleTitleParams($browserTitle = false)
	{
	    global $mod_strings;
	    $params = parent::_getModuleTitleParams($browserTitle);
	    $params[] = "<a href='index.php?module=Leads&action=DetailView&record={$this->bean->id}'>{$this->bean->name}</a>";
	    $params[] = $mod_strings['LBL_CONVERTLEAD'];
    	return $params;
    }


    protected function checkForDuplicates(
        $lead
        )
    {
    	if ($lead->status == "Converted")
    	{
    		echo ("<span class='error'>" . translate('LBL_CONVERTLEAD_WARNING'));
    		$dupes = array();
    		$q = "SELECT id, first_name, last_name FROM contacts WHERE first_name LIKE '{$lead->first_name}' AND last_name LIKE '{$lead->last_name}'";
    		$result = $lead->db->query($q);
    		while($row = $lead->db->fetchByAssoc($result)) {
    			$contact = new Contact();
    			$contact->retrieve($row['id']);
    			$dupes[$row['id']] = $contact->name;
    		}
    		if (!empty($dupes))
    		{
    			foreach($dupes as $id => $name)
    			{
    				echo (translate('LBL_CONVERTLEAD_WARNING_INTO_RECORD') . "<a href='index.php?module=Contacts&action=DetailView&record=$id'>$name</a>");
    				break;
    			}
    		}
    		echo "</span>";
    	}
    	return false;
    }
}