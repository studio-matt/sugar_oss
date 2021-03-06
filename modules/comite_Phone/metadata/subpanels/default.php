<?php
$module_name='comite_Phone';
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
      'popup_module' => 'comite_Phone',
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
      'width' => '45%',
      'default' => true,
    ),
    'country_code' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_COUNTRY_CODE',
      'width' => '10%',
    ),
    'line_number' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_LINE_NUMBER',
      'width' => '10%',
      'default' => true,
    ),
    'extension' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_EXTENSION',
      'width' => '10%',
      'default' => true,
    ),
    'is_voicemail_allowed' => 
    array (
      'type' => 'bool',
      'default' => true,
      'vname' => 'LBL_IS_VOICEMAIL_ALLOWED',
      'width' => '10%',
    ),
    'edit_button' => 
    array (
      'widget_class' => 'SubPanelEditButton',
      'module' => 'comite_Phone',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'comite_Phone',
      'width' => '5%',
      'default' => true,
    ),
  ),
);