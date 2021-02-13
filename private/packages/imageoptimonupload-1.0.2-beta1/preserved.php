<?php return array (
  'b50260b94f09e2b3e01271de8163cda3' => 
  array (
    'criteria' => 
    array (
      'name' => 'imageoptimonupload',
    ),
    'object' => 
    array (
      'name' => 'imageoptimonupload',
      'path' => '{core_path}components/imageoptimonupload/',
      'assets_path' => '',
    ),
  ),
  '3f2390ad72ad4a40228f9176ca028dcd' => 
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
  '8230b9717f0e5eba5e8bd37f2e6ed0a9' => 
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
  'aac6eecffbb55a965275e9906a00290b' => 
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
  'f8643e763280feeafddd3b10afa2aee8' => 
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
  '01f7496ff8a3f0fac6fae2169935418e' => 
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

if ($modx->Event->name != \'OnFileManagerUpload\') return;


// configs / settings
$username = $modx->getOption(\'imageoptimonupload.username\');
$options = $modx->getOption(\'imageoptimonupload.options\');
$fileTypeArray = explode(",", $modx->getOption(\'imageoptimonupload.filetypes\'));


// prefix fileTypeArray values with "image/" to "image/jpg etc."
array_walk($fileTypeArray, function(&$value, $key) { $value = \'image/\' . $value; } );

// get the file
$file = $modx->event->params[\'files\'][\'file\']; 

// abort on error
if ($file[\'error\']  !=  0) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'imageOptimOnUpload: $file["error"] occured.\');
    return;
}

// get upload directory from OnFileManagerUpload event
$directory = $modx->event->params[\'directory\']; 

// get filename
$fileName = $file[\'name\'];

// get id of default_media_source
$defaultMediaSource = $modx->getOption(\'default_media_source\');

// get modMediaSource object using default_media_source id
$mediaSource = $modx->getObject(\'modMediaSource\', array(\'id\' => $defaultMediaSource ));

// get modMediaSource properties
$mediaSourceProps = $mediaSource->get(\'properties\');
$mediaSourceBasePath = $mediaSourceProps[\'basePath\'][\'value\'];

// create Full-size master image URL
$sourceImageUrl = MODX_SITE_URL . $mediaSourceBasePath . $directory . $fileName;
$sourceImagePath = MODX_BASE_PATH . $mediaSourceBasePath . $directory . $fileName;

// create target image path
$targetImagePath = MODX_BASE_PATH . $mediaSourceBasePath . $directory . $fileName;


if (in_array($file[\'type\'], $fileTypeArray)) { 

    // Settings needed to switch to the POST method
    $postContext = stream_context_create([
        \'http\' => [
            \'method\' => \'POST\',
        ],
    ]);
    
    // get image data from the API
    $imageData = @file_get_contents(
        \'https://im2.io/\' . $username . \'/\' . $options . \'/\' . $sourceImageUrl,
        false, $postContext);
    
    if ($http_response_header[0] == \'HTTP/1.1 200 OK\') {
        
        // $imageData contains resized/optimized image
        // save image
        @file_put_contents($targetImagePath, $imageData);
        
    }else {
        if ($http_response_header[0] == \'HTTP/1.1 523 PRIVATEURL\' or $http_response_header[0] == \'HTTP/1.1 401 Could not download image\') {
        
            // on local or protected enviroment use upload instead of post
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, \'https://im2.io/\' . $username . \'/\'. $options);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, [
                \'file\' => curl_file_create($sourceImagePath),
            ]);
            $imageData = curl_exec($ch);
            $responseInfo = curl_getinfo($ch);
            curl_close($ch);
    
            if ($responseInfo[\'http_code\'] == 200) {
                // save image
                if (@file_put_contents($targetImagePath, $imageData) === false) {
                    $modx->log(modX::LOG_LEVEL_ERROR, \'imageOptimOnUpload could not write cache file at \'.$targetImagePath);
                }
            }else {
                $modx->log(modX::LOG_LEVEL_ERROR, \'imageOptimOnUpload (API Error): \'.var_dump($imageData));
            }
            
        }else {
            $modx->log(xPDO::LOG_LEVEL_ERROR, \'imageOptimOnUpload (API Error): \' . var_dump($http_response_header));    
        }
    }
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

if ($modx->Event->name != \'OnFileManagerUpload\') return;


// configs / settings
$username = $modx->getOption(\'imageoptimonupload.username\');
$options = $modx->getOption(\'imageoptimonupload.options\');
$fileTypeArray = explode(",", $modx->getOption(\'imageoptimonupload.filetypes\'));


// prefix fileTypeArray values with "image/" to "image/jpg etc."
array_walk($fileTypeArray, function(&$value, $key) { $value = \'image/\' . $value; } );

// get the file
$file = $modx->event->params[\'files\'][\'file\']; 

// abort on error
if ($file[\'error\']  !=  0) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'imageOptimOnUpload: $file["error"] occured.\');
    return;
}

// get upload directory from OnFileManagerUpload event
$directory = $modx->event->params[\'directory\']; 

// get filename
$fileName = $file[\'name\'];

// get id of default_media_source
$defaultMediaSource = $modx->getOption(\'default_media_source\');

// get modMediaSource object using default_media_source id
$mediaSource = $modx->getObject(\'modMediaSource\', array(\'id\' => $defaultMediaSource ));

// get modMediaSource properties
$mediaSourceProps = $mediaSource->get(\'properties\');
$mediaSourceBasePath = $mediaSourceProps[\'basePath\'][\'value\'];

// create Full-size master image URL
$sourceImageUrl = MODX_SITE_URL . $mediaSourceBasePath . $directory . $fileName;
$sourceImagePath = MODX_BASE_PATH . $mediaSourceBasePath . $directory . $fileName;

// create target image path
$targetImagePath = MODX_BASE_PATH . $mediaSourceBasePath . $directory . $fileName;


if (in_array($file[\'type\'], $fileTypeArray)) { 

    // Settings needed to switch to the POST method
    $postContext = stream_context_create([
        \'http\' => [
            \'method\' => \'POST\',
        ],
    ]);
    
    // get image data from the API
    $imageData = @file_get_contents(
        \'https://im2.io/\' . $username . \'/\' . $options . \'/\' . $sourceImageUrl,
        false, $postContext);
    
    if ($http_response_header[0] == \'HTTP/1.1 200 OK\') {
        
        // $imageData contains resized/optimized image
        // save image
        @file_put_contents($targetImagePath, $imageData);
        
    }else {
        if ($http_response_header[0] == \'HTTP/1.1 523 PRIVATEURL\' or $http_response_header[0] == \'HTTP/1.1 401 Could not download image\') {
        
            // on local or protected enviroment use upload instead of post
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, \'https://im2.io/\' . $username . \'/\'. $options);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, [
                \'file\' => curl_file_create($sourceImagePath),
            ]);
            $imageData = curl_exec($ch);
            $responseInfo = curl_getinfo($ch);
            curl_close($ch);
    
            if ($responseInfo[\'http_code\'] == 200) {
                // save image
                if (@file_put_contents($targetImagePath, $imageData) === false) {
                    $modx->log(modX::LOG_LEVEL_ERROR, \'imageOptimOnUpload could not write cache file at \'.$targetImagePath);
                }
            }else {
                $modx->log(modX::LOG_LEVEL_ERROR, \'imageOptimOnUpload (API Error): \'.var_dump($imageData));
            }
            
        }else {
            $modx->log(xPDO::LOG_LEVEL_ERROR, \'imageOptimOnUpload (API Error): \' . var_dump($http_response_header));    
        }
    }
}   

return true;',
    ),
  ),
);