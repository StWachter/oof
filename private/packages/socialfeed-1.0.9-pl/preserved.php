<?php return array (
  'd9ac62c512415b3d590050c209bb20aa' => 
  array (
    'criteria' => 
    array (
      'name' => 'socialfeed',
    ),
    'object' => 
    array (
      'name' => 'socialfeed',
      'path' => '{core_path}components/socialfeed/',
      'assets_path' => '{assets_path}components/socialfeed/',
    ),
  ),
  'd04c029e5ad01433366968a82095c9b8' => 
  array (
    'criteria' => 
    array (
      'key' => 'socialfeed.image_path',
    ),
    'object' => 
    array (
      'key' => 'socialfeed.image_path',
      'value' => 'bilder/instagram',
      'xtype' => 'textfield',
      'namespace' => 'socialfeed',
      'area' => 'system',
      'editedon' => '2021-02-14 12:14:06',
    ),
  ),
  'be14767f53a4fd9fd37f00e09c546680' => 
  array (
    'criteria' => 
    array (
      'key' => 'socialfeed.api_key',
    ),
    'object' => 
    array (
      'key' => 'socialfeed.api_key',
      'value' => 'n6RyStPwI8VFITzT6CkOeYUu9ToSYpP9bJaEPZhXVNh1hLQhds63Mvez09ML',
      'xtype' => 'textfield',
      'namespace' => 'socialfeed',
      'area' => 'system',
      'editedon' => '2021-02-14 12:13:37',
    ),
  ),
  '361048d883ed4b650978d70647f3f8b8' => 
  array (
    'criteria' => 
    array (
      'key' => 'socialfeed.feed_key',
    ),
    'object' => 
    array (
      'key' => 'socialfeed.feed_key',
      'value' => 'uHoIZpBYwgpZIboc8UMPgWZlSdfNgSUfb2AOJQ7fHPoavpnr98jNhHoN1aAr',
      'xtype' => 'textfield',
      'namespace' => 'socialfeed',
      'area' => 'system',
      'editedon' => '2021-02-14 12:13:46',
    ),
  ),
  'ee60059c1ea6d4f1f61af88a583d8908' => 
  array (
    'criteria' => 
    array (
      'key' => 'socialfeed.feed_id',
    ),
    'object' => 
    array (
      'key' => 'socialfeed.feed_id',
      'value' => '135',
      'xtype' => 'textfield',
      'namespace' => 'socialfeed',
      'area' => 'system',
      'editedon' => '2021-02-14 12:13:56',
    ),
  ),
  '026d7d990b856aac45fdd21cf78aa1b5' => 
  array (
    'criteria' => 
    array (
      'key' => 'socialfeed.published',
    ),
    'object' => 
    array (
      'key' => 'socialfeed.published',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'socialfeed',
      'area' => 'system',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'cd36f85c1bb3a2a805b0b658f1f0b6b0' => 
  array (
    'criteria' => 
    array (
      'category' => 'socialFeed',
    ),
    'object' => 
    array (
      'id' => 29,
      'parent' => 0,
      'category' => 'socialFeed',
      'rank' => 0,
    ),
  ),
  '94127169b0c94ad6201a38f9dcdb55d5' => 
  array (
    'criteria' => 
    array (
      'name' => 'socialFeedTpl',
    ),
    'object' => 
    array (
      'id' => 17,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'socialFeedTpl',
      'description' => '',
      'editor_type' => 0,
      'category' => 29,
      'cache_type' => 0,
      'snippet' => '<div>
    <a href="[[+permalink]]" target="_blank"><img src="[[+image]]" alt="[[+username:htmlent]]"></a>
</div>
',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<div>
    <a href="[[+permalink]]" target="_blank"><img src="[[+image]]" alt="[[+username:htmlent]]"></a>
</div>
',
    ),
  ),
  'e2955160382fb6a7dbf5924566cd309a' => 
  array (
    'criteria' => 
    array (
      'name' => 'socialFeed',
    ),
    'object' => 
    array (
      'id' => 61,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'socialFeed',
      'description' => '',
      'editor_type' => 0,
      'category' => 29,
      'cache_type' => 0,
      'snippet' => '/*
 * socialFeed
 *
 * Snippet to show posts
 *
 * Usage examples:
 * [[socialFeed? &tpl=`yourTpl`]]
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 */

$corePath = $modx->getOption(\'socialfeed.core_path\', null, $modx->getOption(\'core_path\') . \'components/socialfeed/\');
$socialfeed = $modx->getService(\'socialfeed\', \'SocialFeed\', $corePath . \'model/socialfeed/\', array(
    \'core_path\' => $corePath
));

// properties
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'socialFeedTpl\', true);
$limit = $modx->getOption(\'limit\', $scriptProperties, 12, true);
$offset = $modx->getOption(\'offset\', $scriptProperties, 0, true);
$sortby = $modx->getOption(\'sortby\', $scriptProperties, \'date\', true);
$sortdir = $modx->getOption(\'sortdir\', $scriptProperties, \'desc\', true);
$filterUser = $modx->getOption(\'filterUser\', $scriptProperties);
$filterContent = $modx->getOption(\'filterContent\', $scriptProperties);
$cache = $modx->getOption(\'cache\', $scriptProperties, true, true);
$cacheTime = $modx->getOption(\'cacheTime\', 3600, true);
$cacheKey = $modx->getOption(\'cacheKey\', $scriptProperties, \'socialFeed\', true);


// get items
$items = $socialfeed->getItems($limit, $offset, $sortby, $sortdir, $filterUser, $filterContent, array(
    \'cache\' => $cache,
    \'time\' => $cacheTime,
    \'key\' => $cacheKey,
));

$output = \'\';

if (is_array($items)) {
    foreach ($items as $item) {
        $output .= $modx->getChunk($tpl, $item);
    }
}


return $output;',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/*
 * socialFeed
 *
 * Snippet to show posts
 *
 * Usage examples:
 * [[socialFeed? &tpl=`yourTpl`]]
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 */

$corePath = $modx->getOption(\'socialfeed.core_path\', null, $modx->getOption(\'core_path\') . \'components/socialfeed/\');
$socialfeed = $modx->getService(\'socialfeed\', \'SocialFeed\', $corePath . \'model/socialfeed/\', array(
    \'core_path\' => $corePath
));

// properties
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'socialFeedTpl\', true);
$limit = $modx->getOption(\'limit\', $scriptProperties, 12, true);
$offset = $modx->getOption(\'offset\', $scriptProperties, 0, true);
$sortby = $modx->getOption(\'sortby\', $scriptProperties, \'date\', true);
$sortdir = $modx->getOption(\'sortdir\', $scriptProperties, \'desc\', true);
$filterUser = $modx->getOption(\'filterUser\', $scriptProperties);
$filterContent = $modx->getOption(\'filterContent\', $scriptProperties);
$cache = $modx->getOption(\'cache\', $scriptProperties, true, true);
$cacheTime = $modx->getOption(\'cacheTime\', 3600, true);
$cacheKey = $modx->getOption(\'cacheKey\', $scriptProperties, \'socialFeed\', true);


// get items
$items = $socialfeed->getItems($limit, $offset, $sortby, $sortdir, $filterUser, $filterContent, array(
    \'cache\' => $cache,
    \'time\' => $cacheTime,
    \'key\' => $cacheKey,
));

$output = \'\';

if (is_array($items)) {
    foreach ($items as $item) {
        $output .= $modx->getChunk($tpl, $item);
    }
}


return $output;',
    ),
  ),
);