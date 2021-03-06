<?php
$module_name = 'comite_EheRecommendations';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_detailview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ehe_exercise_regimen',
            'studio' => 'visible',
            'label' => 'LBL_EHE_EXERCISE_REGIMEN',
          ),
        ),
      ),
      'lbl_detailview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ehe_aerobic_action',
            'studio' => 'visible',
            'label' => 'LBL_EHE_AEROBIC_ACTION',
          ),
          1 => 
          array (
            'name' => 'ehe_aerobic_frequency',
            'studio' => 'visible',
            'label' => 'LBL_EHE_AEROBIC_FREQUENCY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ehe_aerobic_time',
            'studio' => 'visible',
            'label' => 'LBL_EHE_AEROBIC_TIME',
          ),
          1 => 
          array (
            'name' => 'ehe_aerobic_activity',
            'studio' => 'visible',
            'label' => 'LBL_EHE_AEROBIC_ACTIVITY',
          ),
        ),
      ),
      'lbl_detailview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ehe_weight_type',
            'studio' => 'visible',
            'label' => 'LBL_EHE_WEIGHT_TYPE',
          ),
          1 => 
          array (
            'name' => 'ehe_weight_frequency',
            'studio' => 'visible',
            'label' => 'LBL_EHE_WEIGHT_FREQUENCY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ehe_weight_format',
            'studio' => 'visible',
            'label' => 'LBL_EHE_WEIGHT_FORMAT',
          ),
          1 => '',
        ),
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
