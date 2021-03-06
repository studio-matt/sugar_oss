<?php
$module_name = 'comite_MedicationInstance';
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
          0 => 'name',
          1 => 'description',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'time_of_day',
            'studio' => 'visible',
            'label' => 'LBL_TIME_OF_DAY',
          ),
          1 => 
          array (
            'name' => 'frequency',
            'studio' => 'visible',
            'label' => 'LBL_FREQUENCY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'quantity',
            'label' => 'LBL_QUANTITY',
          ),
          1 => 
          array (
            'name' => 'quantity_unit',
            'studio' => 'visible',
            'label' => 'LBL_QUANTITY_UNIT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'dosage',
            'label' => 'LBL_DOSAGE',
          ),
          1 => 
          array (
            'name' => 'dosage_unit',
            'studio' => 'visible',
            'label' => 'LBL_DOSAGE_UNIT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'source',
            'studio' => 'visible',
            'label' => 'LBL_SOURCE',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'notes_patient',
            'studio' => 'visible',
            'label' => 'LBL_NOTES_PATIENT',
          ),
          1 => 
          array (
            'name' => 'notes_doctor',
            'studio' => 'visible',
            'label' => 'LBL_NOTES_DOCTOR',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'comite_medicationinstance_comite_medicationssupplements_name',
          ),
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>
