<?php return array (
  'bca1f8f09e859d54fa7658d347ed7f94' => 
  array (
    'criteria' => 
    array (
      'name' => 'imageoptimonupload',
    ),
    'object' => 
    array (
      'name' => 'imageoptimonupload',
      'path' => '{core_path}components/imageoptimonupload/',
      'assets_path' => '{assets_path}components/imageoptimonupload/',
    ),
  ),
  'c8c8d531f4c7ff42c14be369fbc16bed' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageoptimonupload.filetypes',
    ),
    'object' => 
    array (
      'key' => 'imageoptimonupload.filetypes',
      'value' => 'jpeg,png,gif,bmp',
      'xtype' => 'textfield',
      'namespace' => 'imageoptimonupload',
      'area' => '',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '421d43e279d93821b743e2433220de87' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageoptimonupload.options',
    ),
    'object' => 
    array (
      'key' => 'imageoptimonupload.options',
      'value' => '3000',
      'xtype' => 'textfield',
      'namespace' => 'imageoptimonupload',
      'area' => '',
      'editedon' => '2018-03-26 18:31:57',
    ),
  ),
  '5c1753e404f65174d219adee86a40506' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageoptimonupload.username',
    ),
    'object' => 
    array (
      'key' => 'imageoptimonupload.username',
      'value' => 'pdqsgczpvw',
      'xtype' => 'textfield',
      'namespace' => 'imageoptimonupload',
      'area' => '',
      'editedon' => '2018-03-23 15:19:01',
    ),
  ),
  '6ab9a99c84b943c061b3a0be6db3bf33' => 
  array (
    'criteria' => 
    array (
      'category' => 'ImageOptimOnUpload',
    ),
    'object' => 
    array (
      'id' => 18,
      'parent' => 0,
      'category' => 'ImageOptimOnUpload',
      'rank' => 0,
    ),
  ),
  '08ae39c7cb164368a32688c04d206c6d' => 
  array (
    'criteria' => 
    array (
      'name' => 'imageOptimOnUpload',
    ),
    'object' => 
    array (
      'id' => 17,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'imageOptimOnUpload',
      'description' => '',
      'editor_type' => 0,
      'category' => 18,
      'cache_type' => 0,
      'plugincode' => '/*
 * imageoptimonupload
 *
 *
 * @author Jan Dähne, Quadro <jan.daehne@quadro-system.de>
 */

if ($modx->event->name != \'OnFileManagerUpload\') return;

// load Class
$path = $modx->getOption(\'imageoptimonupload.core_path\', null, $modx->getOption(\'core_path\') . \'components/imageoptimonupload/\');
$path .= \'model/imageoptimonupload/\';
$clientConfig = $modx->getService(\'imageoptimonupload\',\'ImageOptimOnUpload\', $path);

// configs / settings
$fileTypeArray = explode(",", $modx->getOption(\'imageoptimonupload.filetypes\'));

// prefix fileTypeArray values with "image/" to "image/jpg etc."
array_walk($fileTypeArray, function(&$value, $key) { $value = \'image/\' . $value; } );

// get the file
$file = reset($files);

// abort on error
if ($file[\'error\']  !=  0) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'imageOptimOnUpload: $file["error"] occured.\');
    return;
}

// get upload directory from OnFileManagerUpload event
$directory = ltrim($modx->event->params[\'directory\'], \'/\');

// get filename
$fileName = $file[\'name\'];

// get modMediaSource baseUrl
$mediaSourceBaseUrl = ltrim($source->getBaseUrl(), \'/\');
$mediaSourceBasePath = $source->getBasePath();

// create Full-size master image URL
$sourceImageUrl = MODX_SITE_URL . $mediaSourceBaseUrl . $directory . $fileName;
$sourceImagePath = $mediaSourceBasePath . $directory . $fileName;

// create target image path
$targetImagePath = $mediaSourceBasePath . $directory . $fileName;

// upload image if filetype is in list
if (in_array($file[\'type\'], $fileTypeArray)) {

    // optimize image
    $image = new ImageOptimOnUpload($modx);
    $image->optim($sourceImageUrl, $sourceImagePath, $targetImagePath);
}

return true;',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/*
 * imageoptimonupload
 *
 *
 * @author Jan Dähne, Quadro <jan.daehne@quadro-system.de>
 */

if ($modx->event->name != \'OnFileManagerUpload\') return;

// load Class
$path = $modx->getOption(\'imageoptimonupload.core_path\', null, $modx->getOption(\'core_path\') . \'components/imageoptimonupload/\');
$path .= \'model/imageoptimonupload/\';
$clientConfig = $modx->getService(\'imageoptimonupload\',\'ImageOptimOnUpload\', $path);

// configs / settings
$fileTypeArray = explode(",", $modx->getOption(\'imageoptimonupload.filetypes\'));

// prefix fileTypeArray values with "image/" to "image/jpg etc."
array_walk($fileTypeArray, function(&$value, $key) { $value = \'image/\' . $value; } );

// get the file
$file = reset($files);

// abort on error
if ($file[\'error\']  !=  0) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'imageOptimOnUpload: $file["error"] occured.\');
    return;
}

// get upload directory from OnFileManagerUpload event
$directory = ltrim($modx->event->params[\'directory\'], \'/\');

// get filename
$fileName = $file[\'name\'];

// get modMediaSource baseUrl
$mediaSourceBaseUrl = ltrim($source->getBaseUrl(), \'/\');
$mediaSourceBasePath = $source->getBasePath();

// create Full-size master image URL
$sourceImageUrl = MODX_SITE_URL . $mediaSourceBaseUrl . $directory . $fileName;
$sourceImagePath = $mediaSourceBasePath . $directory . $fileName;

// create target image path
$targetImagePath = $mediaSourceBasePath . $directory . $fileName;

// upload image if filetype is in list
if (in_array($file[\'type\'], $fileTypeArray)) {

    // optimize image
    $image = new ImageOptimOnUpload($modx);
    $image->optim($sourceImageUrl, $sourceImagePath, $targetImagePath);
}

return true;',
    ),
  ),
  'dfd5a68470d12cf962e982fde8a0a5bc' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 17,
      'event' => 'OnFileManagerUpload',
    ),
    'object' => 
    array (
      'pluginid' => 17,
      'event' => 'OnFileManagerUpload',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);