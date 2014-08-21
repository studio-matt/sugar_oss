<?php
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


require_once('modules/Meetings/views/view.listbytype.php');

/**
 * Bug50697Test.php
 * This test checks the alterations made to modules/Meetings/views/view.listbytype.php to remove the hard-coded
 * UTC_TIMESTAMP function that was used which appears to be MYSQL specific.  Changed to use timedate code instead
 *
 */
class Bug50697Test extends Sugar_PHPUnit_Framework_TestCase
{

public function setUp()
{
    global $current_user;
    $current_user = SugarTestUserUtilities::createAnonymousUser();
}

public function tearDown()
{
    SugarTestUserUtilities::removeAllCreatedAnonymousUsers();
    unset($GLOBALS['current_user']);
}

/**
 * testProcessSearchForm
 *
 * Test the processSearchForm function which contained the offensive SQL
 */
public function testProcessSearchForm()
{
    global $timedate;
    $_REQUEST = array();
    $mlv = new MeetingsViewListbytype();
    $mlv->processSearchForm();
    $this->assertRegExp('/meetings\.date_start.*?\d{4}-\d{2}-\d{2} \d{1,2}:\d{2}:\d{2}/', $mlv->where, 'Failed to create datetime query for meetings.date_start');

    $_REQUEST['name_basic'] = 'Bug50697Test';
    $mlv->processSearchForm();
    $this->assertRegExp('/meetings\.date_start.*?\d{4}-\d{2}-\d{2} \d{1,2}:\d{2}:\d{2}/', $mlv->where, 'Failed to create datetime query for meetings.date_start');
    $this->assertRegExp('/meetings\.name LIKE \'Bug50697Test%\'/', $mlv->where, 'Failed to generate meetings.name search parameter');
}


}