<?php
$module_name = 'comite_Impression';
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
          0 => 
          array (
            'name' => 'comite_impression_comite_impressiontype_name',
          ),
          1 => 'description',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'comite_impression_contacts_name',
          ),
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>
