<?php
$module_name = 'comite_Address';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
          1 => 
          array (
            'name' => 'rank',
            'label' => 'LBL_RANK',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'address_1',
            'label' => 'LBL_ADDRESS_1',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'address_2',
            'label' => 'LBL_ADDRESS_2',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'address_3',
            'label' => 'LBL_ADDRESS_3',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'city',
            'label' => 'LBL_CITY',
          ),
          1 => 
          array (
            'name' => 'postal_code',
            'label' => 'LBL_POSTAL_CODE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'state',
            'studio' => 'visible',
            'label' => 'LBL_STATE',
          ),
          1 => 
          array (
            'name' => 'state_international',
            'label' => 'LBL_STATE_INTERNATIONAL',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'country',
            'studio' => 'visible',
            'label' => 'LBL_COUNTRY',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
?>
