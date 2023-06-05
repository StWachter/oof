<?php return array (
  '8b6c96bac435957d06ca20e1b25b2a4a' => 
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
  '2625478ef5c2a39879923150c8a39afa' => 
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
  '0c18ed6dea63afaeb245438b51c81b98' => 
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
  'eb7eb07399dea40609db334ff935aea9' => 
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
  '0d7cd879fb18fb19b807f82c4e1d442a' => 
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
  'f91cff936bbfeab487c5090845666eef' => 
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
  '023d62b094134451859bc0e904715bfa' => 
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
  'b939a7794da8e83a7ab6311011077b5e' => 
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
  '67180f051072286b272ba3d2a6776b48' => 
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