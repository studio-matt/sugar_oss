<?php
$module_name = 'comite_DoctorsNote';
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
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'finalized',
            'label' => 'LBL_FINALIZED',
          ),
          1 => 
          array (
            'name' => 'appointment_type',
            'studio' => 'visible',
            'label' => 'LBL_APPOINTMENT_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'introduction',
            'studio' => 'visible',
            'label' => 'LBL_INTRODUCTION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'additional_notes',
            'studio' => 'visible',
            'label' => 'LBL_ADDITIONAL_NOTES',
          ),
        ),
      ),
    ),
  ),
);
?>
