<?php
// created: 2012-12-26 17:43:39
$dictionary["comite_drnotesnutritionexercise_contacts"] = array (
  'relationships' => 
  array (
    'comite_drnotesnutritionexercise_contacts' => 
    array (
      'lhs_module' => 'comite_DrNotesNutritionExercise',
      'lhs_table' => 'comite_drnotesnutritionexercise',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_drnotesnutritionexercise_contacts_c',
      'join_key_lhs' => 'comite_drn0c29xercise_ida',
      'join_key_rhs' => 'comite_drnotesnutritionexercise_contactscontacts_idb',
    ),
  ),
  'table' => 'comite_drnotesnutritionexercise_contacts_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'comite_drn0c29xercise_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_drnotesnutritionexercise_contactscontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_drnotesnutritionexercise_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_drnotesnutritionexercise_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_drn0c29xercise_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_drnotesnutritionexercise_contacts_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_drnotesnutritionexercise_contactscontacts_idb',
      ),
    ),
  ),
);