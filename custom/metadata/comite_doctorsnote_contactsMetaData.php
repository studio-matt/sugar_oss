<?php
// created: 2012-12-26 17:43:38
$dictionary["comite_doctorsnote_contacts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'comite_doctorsnote_contacts' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_DoctorsNote',
      'rhs_table' => 'comite_doctorsnote',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_doctorsnote_contacts_c',
      'join_key_lhs' => 'comite_doctorsnote_contactscontacts_ida',
      'join_key_rhs' => 'comite_doctorsnote_contactscomite_doctorsnote_idb',
    ),
  ),
  'table' => 'comite_doctorsnote_contacts_c',
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
      'name' => 'comite_doctorsnote_contactscontacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_doctorsnote_contactscomite_doctorsnote_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_doctorsnote_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_doctorsnote_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_doctorsnote_contactscontacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_doctorsnote_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_doctorsnote_contactscomite_doctorsnote_idb',
      ),
    ),
  ),
);