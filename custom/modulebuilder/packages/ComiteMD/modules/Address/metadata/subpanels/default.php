<?php
$module_name='comite_Address';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'comite_Address',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'rank' => 
    array (
      'type' => 'int',
      'default' => true,
      'vname' => 'LBL_RANK',
      'width' => '10%',
    ),
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '10%',
      'default' => true,
    ),
    'address_1' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_ADDRESS_1',
      'width' => '10%',
      'default' => true,
    ),
    'address_2' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_ADDRESS_2',
      'width' => '10%',
      'default' => true,
    ),
    'address_3' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_ADDRESS_3',
      'width' => '10%',
      'default' => true,
    ),
    'city' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_CITY',
      'width' => '10%',
      'default' => true,
    ),
    'state' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_STATE',
      'width' => '10%',
      'default' => true,
    ),
    'state_international' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_STATE_INTERNATIONAL',
      'width' => '10%',
      'default' => true,
    ),
    'postal_code' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_POSTAL_CODE',
      'width' => '10%',
      'default' => true,
    ),
    'country' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_COUNTRY',
      'width' => '10%',
    ),
    'edit_button' => 
    array (
      'widget_class' => 'SubPanelEditButton',
      'module' => 'comite_Address',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'comite_Address',
      'width' => '5%',
      'default' => true,
    ),
  ),
);