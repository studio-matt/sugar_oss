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


/**
 * ContactsViewValidPortalUsername.php
 *
 * This class overrides SugarView and provides an implementation for the ValidPortalUsername
 * method used for checking whether or not an existing portal user_name has already been assigned.
 * We take advantage of the MVC framework to provide this action which is invoked from
 * a javascript AJAX request.
 *
 * @author Collin Lee
 * */

require_once('include/MVC/View/SugarView.php');
require_once(dirname(__FILE__).'/../form/HlaForm.php');
include_once(dirname(__FILE__).'/../form/HlaDemographicsForm.php');
include_once(dirname(__FILE__).'/../form/HlaFamilyHealthForm.php');
include_once(dirname(__FILE__).'/../form/HlaPersonalHealthForm.php');
include_once(dirname(__FILE__).'/../form/HlaLifestyleForm.php');
include_once(dirname(__FILE__).'/../form/HlaNutritionForm.php');
include_once(dirname(__FILE__).'/../form/HlaCompleteForm.php');

class comite_PortalViewHla extends SugarView {

  /**
   * @see SugarView::display()
   */
  public function display() {
    $steps = array(
      'hla_demographics' => 'Contact Info',
      'hla_family_health' => 'Family Health History',
      'hla_personal_health' => 'Personal Health History',
      'hla_lifestyle' => 'Lifestyle',
      'hla_nutrition' => 'Nutrition & Exercise',
      'hla_complete'  => 'Complete',
    );
    HlaForm::createAndDisplay($steps, $this);
  }
}
