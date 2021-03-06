<?php
$module_name = 'comite_Relative';
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'relation',
            'studio' => 'visible',
            'label' => 'LBL_RELATION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'is_deceased',
            'label' => 'LBL_IS_DECEASED',
          ),
          1 => 
          array (
            'name' => 'date_deceased',
            'label' => 'LBL_DATE_DECEASED',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'date_born',
            'label' => 'LBL_DATE_BORN',
          ),
          1 =>
          array (
            'name' => 'age',
            'label' => 'LBL_AGE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'deceased_explanation',
            'studio' => 'visible',
            'label' => 'LBL_DECEASED_EXPLANATION',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'comite_relative_comite_familyhealthhistory_name',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
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
