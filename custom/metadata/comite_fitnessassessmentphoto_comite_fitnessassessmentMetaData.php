<?php
// created: 2012-12-26 17:43:49
$dictionary["comite_fitnessassessmentphoto_comite_fitnessassessment"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'comite_fitnessassessmentphoto_comite_fitnessassessment' => 
    array (
      'lhs_module' => 'comite_FitnessAssessment',
      'lhs_table' => 'comite_fitnessassessment',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_FitnessAssessmentPhoto',
      'rhs_table' => 'comite_fitnessassessmentphoto',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_fitnessassessmentphoto_comite_fitnessassessment_c',
      'join_key_lhs' => 'comite_fit5fbdessment_ida',
      'join_key_rhs' => 'comite_fit9d70ntphoto_idb',
    ),
  ),
  'table' => 'comite_fitnessassessmentphoto_comite_fitnessassessment_c',
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
      'name' => 'comite_fit5fbdessment_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_fit9d70ntphoto_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_fitnessassessmentphoto_comite_fitnessassessmentspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_fitnessassessmentphoto_comite_fitnessassessment_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_fit5fbdessment_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_fitnessassessmentphoto_comite_fitnessassessment_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_fit9d70ntphoto_idb',
      ),
    ),
  ),
);