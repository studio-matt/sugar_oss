<?php
$module_name = 'comite_TMFollowUpCall';
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
          0 => '',
        ),
        2 => 
        array (
          0 => 'description',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tm_followup_notes',
            'studio' => 'visible',
            'label' => 'LBL_TM_FOLLOWUP_NOTES',
          ),
          1 => 
          array (
            'name' => 'comite_tmfollowupcall_comite_drnotesnutritionexercise_name',
          ),
        ),
      ),
    ),
  ),
);
?>
