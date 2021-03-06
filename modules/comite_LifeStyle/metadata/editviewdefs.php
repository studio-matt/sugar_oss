<?php
$module_name = 'comite_LifeStyle';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'comite_lifestyle_contacts_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'marital_status',
            'studio' => 'visible',
            'label' => 'LBL_MARITAL_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'have_children',
            'studio' => 'visible',
            'label' => 'LBL_HAVE_CHILDREN',
          ),
          1 => 
          array (
            'name' => 'have_children_notes',
            'label' => 'LBL_HAVE_CHILDREN_NOTES',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'have_grandchildren',
            'studio' => 'visible',
            'label' => 'LBL_HAVE_GRANDCHILDREN',
          ),
          1 => 
          array (
            'name' => 'have_grandchildren_notes',
            'label' => 'LBL_HAVE_GRANDCHILDREN_NOTES',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'family_ties',
            'label' => 'LBL_FAMILY_TIES',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'occupation',
            'label' => 'LBL_OCCUPATION',
          ),
          1 => 
          array (
            'name' => 'hobbies',
            'label' => 'LBL_HOBBIES',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'travel_international',
            'studio' => 'visible',
            'label' => 'LBL_TRAVEL_INTERNATIONAL',
          ),
          1 => 
          array (
            'name' => 'travel_international_notes',
            'studio' => 'visible',
            'label' => 'LBL_TRAVEL_INTERNATIONAL_NOTES',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'seatbelt_user',
            'studio' => 'visible',
            'label' => 'LBL_SEATBELT_USER',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'have_smoke_detector',
            'studio' => 'visible',
            'label' => 'LBL_HAVE_SMOKE_DETECTOR',
          ),
          1 => 
          array (
            'name' => 'have_carbon_monoxide_detector',
            'studio' => 'visible',
            'label' => 'LBL_HAVE_CARBON_MONOXIDE_DETECTOR',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'alcohol_avg_weekly_consumption',
            'studio' => 'visible',
            'label' => 'LBL_ALCOHOL_AVG_WEEKLY_CONSUMPTION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tobacco_use_current',
            'studio' => 'visible',
            'label' => 'LBL_TOBACCO_USE_CURRENT',
          ),
          1 => 
          array (
            'name' => 'tobacco_use_current_length',
            'label' => 'LBL_TOBACCO_USE_CURRENT_LENGTH',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tobacco_use_attempted_quit',
            'studio' => 'visible',
            'label' => 'LBL_TOBACCO_USE_ATTEMPTED_QUIT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tobacco_use_past',
            'studio' => 'visible',
            'label' => 'LBL_TOBACCO_USE_PAST',
          ),
          1 => 
          array (
            'name' => 'tobacco_use_past_length',
            'label' => 'LBL_TOBACCO_USE_PAST_LENGTH',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'tobacco_use_past_quit',
            'label' => 'LBL_TOBACCO_USE_PAST_QUIT',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'stress_under_great_deal',
            'studio' => 'visible',
            'label' => 'LBL_STRESS_UNDER_GREAT_DEAL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'stress_under_great_deal_notes',
            'studio' => 'visible',
            'label' => 'LBL_STRESS_UNDER_GREAT_DEAL_NOTES',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'stress_relief_methods',
            'studio' => 'visible',
            'label' => 'LBL_STRESS_RELIEF_METHODS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'stress_relief_methods_other',
            'studio' => 'visible',
            'label' => 'LBL_STRESS_RELIEF_METHODS_OTHER',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'sleep_average_per_night',
            'label' => 'LBL_SLEEP_AVERAGE_PER_NIGHT',
          ),
          1 => 
          array (
            'name' => 'sleep_need_per_night',
            'label' => 'LBL_SLEEP_NEED_PER_NIGHT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sleep_wake_fully_rested',
            'label' => 'LBL_SLEEP_WAKE_FULLY_RESTED',
          ),
          1 => 
          array (
            'name' => 'sleep_morning_difficult_out',
            'studio' => 'visible',
            'label' => 'LBL_SLEEP_MORNING_DIFFICULT_OUT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'sleep_pattern_changes',
            'studio' => 'visible',
            'label' => 'LBL_SLEEP_PATTERN_CHANGES',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
