<?php
$module_name = 'comite_MedicationSupplementInstance';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'COMITE_MEDSUPPINST_COMITE_PERSONALHEALTHHISTORY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_COMITE_MEDSUPPINST_COMITE_PERSONALHEALTHHISTORY_FROM_COMITE_PERSONALHEALTHHISTORY_TITLE',
    'id' => 'COMITE_MED5D7EHISTORY_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
?>
