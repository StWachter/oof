<?php return array (
  'dba994a5155daee18f5933baf3674662' => 
  array (
    'criteria' => 
    array (
      'name' => 'backupmodx',
    ),
    'object' => 
    array (
      'name' => 'backupmodx',
      'path' => '{core_path}components/backupmodx/',
      'assets_path' => '{assets_path}components/backupmodx/',
    ),
  ),
  '387affe2da61c97ceeb4fb5e47785e5b' => 
  array (
    'criteria' => 
    array (
      'name' => 'backupmodx.widget',
    ),
    'object' => 
    array (
      'id' => 14,
      'name' => 'backupmodx.widget',
      'description' => 'backupmodx.widget_desc',
      'type' => 'file',
      'content' => '[[++core_path]]components/backupmodx/elements/widgets/backupmodx.widget.php',
      'namespace' => 'backupmodx',
      'lexicon' => 'backupmodx:default',
      'size' => 'half',
      'name_trans' => 'BackupMODX',
      'description_trans' => 'Backup Dashboard Widget',
    ),
  ),
  'a5a492eecbed9de429aea458852c3f3d' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.debug',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.debug',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'backupmodx',
      'area' => 'system',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '39182da3006f0d9d00da6b52a0750fae' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.excludeFolders',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.excludeFolders',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'backupmodx',
      'area' => 'system',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'ee88bb11af285c976d70966c93b73552' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.excludeFiles',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.excludeFiles',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'backupmodx',
      'area' => 'system',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'ac67029fcd1ad0215af2be8a1530b262' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.targetPath',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.targetPath',
      'value' => '{core_path}components/backupmodx/backups/',
      'xtype' => 'textfield',
      'namespace' => 'backupmodx',
      'area' => 'Admin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '5b4a96dba0ffb152774712bf9b232f3c' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.cronKey',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.cronKey',
      'value' => 'c7a0c53c3096',
      'xtype' => 'textfield',
      'namespace' => 'backupmodx',
      'area' => 'Cron',
      'editedon' => '2019-01-25 11:12:37',
    ),
  ),
  'd4f174675a94df634a68be4b5e2f381a' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.cronFiles',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.cronFiles',
      'value' => 'true',
      'xtype' => 'combo-boolean',
      'namespace' => 'backupmodx',
      'area' => 'Cron',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '0edd3faaa93d80608dfa49f38359ab11' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.cronDatabase',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.cronDatabase',
      'value' => 'true',
      'xtype' => 'combo-boolean',
      'namespace' => 'backupmodx',
      'area' => 'Cron',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'fbc38f3337a43b39f4d8e6e4b9e89f6d' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.cronNote',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.cronNote',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'backupmodx',
      'area' => 'Cron',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '6eeecef0ffefae79aec29c77a6a2f0e8' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.cronEnable',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.cronEnable',
      'value' => 'false',
      'xtype' => 'combo-boolean',
      'namespace' => 'backupmodx',
      'area' => 'Cron',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '2db8d30bd6198c0d45fb1b8540ba694a' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.cronMaxDatabase',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.cronMaxDatabase',
      'value' => '10',
      'xtype' => 'textfield',
      'namespace' => 'backupmodx',
      'area' => 'Cron',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '0c5efc2b9569757f9072d8dea099b5f2' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.cronMaxFiles',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.cronMaxFiles',
      'value' => '5',
      'xtype' => 'textfield',
      'namespace' => 'backupmodx',
      'area' => 'Cron',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '110d5b36aa11eb8b41eee0040fa66117' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.groups',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.groups',
      'value' => 'Administrator',
      'xtype' => 'textfield',
      'namespace' => 'backupmodx',
      'area' => 'Admin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '4f94427eee79ff6348f4e7ab3b3ab742' => 
  array (
    'criteria' => 
    array (
      'category' => 'BackupMODX',
    ),
    'object' => 
    array (
      'id' => 1,
      'parent' => 0,
      'category' => 'BackupMODX',
      'rank' => 0,
    ),
  ),
);