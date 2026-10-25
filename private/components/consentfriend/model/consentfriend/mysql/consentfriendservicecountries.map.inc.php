<?php
/**
 * @package consentfriend
 */
$xpdo_meta_map['ConsentfriendServiceCountries']= array (
  'package' => 'consentfriend',
  'version' => '1.1',
  'table' => 'consentfriend_servicecountries',
  'extends' => 'xPDOSimpleObject',
  'tableMeta' => 
  array (
    'engine' => 'InnoDB',
  ),
  'fields' => 
  array (
    'service_id' => 0,
    'country_iso' => NULL,
    'type' => NULL,
  ),
  'fieldMeta' => 
  array (
    'service_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'country_iso' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '2',
      'phptype' => 'string',
      'null' => true,
    ),
    'type' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => true,
    ),
  ),
  'indexes' => 
  array (
    'service_id' => 
    array (
      'alias' => 'service_id',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'service_id' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'aggregates' => 
  array (
    'Service' => 
    array (
      'class' => 'ConsentfriendServices',
      'local' => 'service_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
