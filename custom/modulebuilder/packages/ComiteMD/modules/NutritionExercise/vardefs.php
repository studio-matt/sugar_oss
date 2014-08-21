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

$vardefs = array (
  'fields' => 
  array (
    'nutrition_tea_cups_per_day' => 
    array (
      'required' => true,
      'name' => 'nutrition_tea_cups_per_day',
      'vname' => 'LBL_NUTRITION_TEA_CUPS_PER_DAY',
      'type' => 'varchar',
      'massupdate' => 0,
      'default' => '0',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'len' => '255',
      'size' => '20',
    ),
    'nutrition_coffee_cups_per_day' => 
    array (
      'required' => true,
      'name' => 'nutrition_coffee_cups_per_day',
      'vname' => 'LBL_NUTRITION_COFFEE_CUPS_PER_DAY',
      'type' => 'varchar',
      'massupdate' => 0,
      'default' => '0',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'len' => '255',
      'size' => '20',
    ),
    'nutrition_diet_soda_cups_per_day' => 
    array (
      'required' => true,
      'name' => 'nutrition_diet_soda_cups_per_day',
      'vname' => 'LBL_NUTRITION_DIET_SODA_CUPS_PER_DAY',
      'type' => 'varchar',
      'massupdate' => 0,
      'default' => '0',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'len' => '255',
      'size' => '20',
    ),
    'nutrition_water_cups_per_day' => 
    array (
      'required' => true,
      'name' => 'nutrition_water_cups_per_day',
      'vname' => 'LBL_NUTRITION_WATER_CUPS_PER_DAY',
      'type' => 'varchar',
      'massupdate' => 0,
      'default' => '0',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'len' => '255',
      'size' => '20',
    ),
    'nutrition_high_sugar_per_day' => 
    array (
      'required' => true,
      'name' => 'nutrition_high_sugar_per_day',
      'vname' => 'LBL_NUTRITION_HIGH_SUGAR_PER_DAY',
      'type' => 'varchar',
      'massupdate' => 0,
      'default' => '0',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'len' => '255',
      'size' => '20',
    ),
    'nutrition_alcoholic_servings_per_day' => 
    array (
      'required' => true,
      'name' => 'nutrition_alcoholic_servings_per_day',
      'vname' => 'LBL_NUTRITION_ALCOHOLIC_SERVINGS_PER_DAY',
      'type' => 'varchar',
      'massupdate' => 0,
      'default' => '0',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'len' => '255',
      'size' => '20',
    ),
    'nutrition_general_diet' => 
    array (
      'required' => true,
      'name' => 'nutrition_general_diet',
      'vname' => 'LBL_NUTRITION_GENERAL_DIET',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'Healthy',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'nutrition_general_diet_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'nutrition_days_per_week_healthiest' => 
    array (
      'required' => true,
      'name' => 'nutrition_days_per_week_healthiest',
      'vname' => 'LBL_NUTRITION_DAYS_PER_WEEK_HEALTHIEST',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => '0',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'days_per_week_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'nutrition_days_per_week_unhealthiest' => 
    array (
      'required' => true,
      'name' => 'nutrition_days_per_week_unhealthiest',
      'vname' => 'LBL_NUTRITION_DAYS_PER_WEEK_UNHEALTHIEST',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => '0',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'days_per_week_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'nutrition_foods_overeaten' => 
    array (
      'required' => true,
      'name' => 'nutrition_foods_overeaten',
      'vname' => 'LBL_NUTRITION_FOODS_OVEREATEN',
      'type' => 'varchar',
      'massupdate' => 0,
      'default' => '0',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'len' => '255',
      'size' => '20',
    ),
    'nutrition_situational_overeating' => 
    array (
      'required' => true,
      'name' => 'nutrition_situational_overeating',
      'vname' => 'LBL_NUTRITION_SITUATIONAL_OVEREATING',
      'type' => 'varchar',
      'massupdate' => 0,
      'default' => '0',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'len' => '255',
      'size' => '20',
    ),
    'exercise_injury_year' => 
    array (
      'required' => false,
      'name' => 'exercise_injury_year',
      'vname' => 'LBL_EXERCISE_INJURY_YEAR',
      'type' => 'radioenum',
      'massupdate' => 0,
      'default' => 'no',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'yes_no_list',
      'studio' => 'visible',
      'dbType' => 'enum',
      'separator' => '<br>',
    ),
    'exercise_injury_year_describe' => 
    array (
      'required' => false,
      'name' => 'exercise_injury_year_describe',
      'vname' => 'LBL_EXERCISE_INJURY_YEAR_DESCRIBE',
      'type' => 'text',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'size' => '20',
      'studio' => 'visible',
      'rows' => '4',
      'cols' => '20',
    ),
    'exercise_injury_result' => 
    array (
      'required' => false,
      'name' => 'exercise_injury_result',
      'vname' => 'LBL_EXERCISE_INJURY_RESULT',
      'type' => 'radioenum',
      'massupdate' => 0,
      'default' => 'no',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'yes_no_list',
      'studio' => 'visible',
      'dbType' => 'enum',
      'separator' => '<br>',
    ),
    'exercise_injury_stop_regimen' => 
    array (
      'required' => false,
      'name' => 'exercise_injury_stop_regimen',
      'vname' => 'LBL_EXERCISE_INJURY_STOP_REGIMEN',
      'type' => 'radioenum',
      'massupdate' => 0,
      'default' => 'no',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'yes_no_list',
      'studio' => 'visible',
      'dbType' => 'enum',
      'separator' => '<br>',
    ),
    'exercise_injury_stop_period' => 
    array (
      'required' => false,
      'name' => 'exercise_injury_stop_period',
      'vname' => 'LBL_EXERCISE_INJURY_STOP_PERIOD',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'len' => '255',
      'size' => '20',
    ),
    'exercise_not_weekly_reasons' => 
    array (
      'required' => false,
      'name' => 'exercise_not_weekly_reasons',
      'vname' => 'LBL_EXERCISE_NOT_WEEKLY_REASONS',
      'type' => 'text',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'size' => '20',
      'studio' => 'visible',
      'rows' => '4',
      'cols' => '20',
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => '6',
      'cols' => '80',
      'required' => false,
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'size' => '20',
      'studio' => 'visible',
    ),
  ),
  'relationships' => 
  array (
  ),
);