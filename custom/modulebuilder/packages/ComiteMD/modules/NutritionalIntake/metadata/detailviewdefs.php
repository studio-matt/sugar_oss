<?php
$module_name = 'comite_NutritionalIntake';
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
            'name' => 'comite_nutritionalintake_comite_nutritionexercise_name',
          ),
          1 => 
          array (
            'name' => 'day_type',
            'studio' => 'visible',
            'label' => 'LBL_DAY_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'time',
            'label' => 'LBL_TIME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'food',
            'label' => 'LBL_FOOD',
          ),
          1 => 
          array (
            'name' => 'portion_size',
            'label' => 'LBL_PORTION_SIZE',
          ),
        ),
      ),
    ),
  ),
);
?>
