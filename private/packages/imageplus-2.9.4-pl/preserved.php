<?php return array (
  'a4b3cdb997a96f4576544273dbf45c87' => 
  array (
    'criteria' => 
    array (
      'name' => 'imageplus',
    ),
    'object' => 
    array (
      'name' => 'imageplus',
      'path' => '{core_path}components/imageplus/',
      'assets_path' => '{assets_path}components/imageplus/',
    ),
  ),
  'c142173eedb8ed15968076768f34190e' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.debug',
    ),
    'object' => 
    array (
      'key' => 'imageplus.debug',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'imageplus',
      'area' => 'system',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '660d737d2f2191077cce88a8ea9ffab0' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.target_width',
    ),
    'object' => 
    array (
      'key' => 'imageplus.target_width',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '4d776100e4d53be6f5d910bab8b4f586' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.target_height',
    ),
    'object' => 
    array (
      'key' => 'imageplus.target_height',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '65b5a299763c8955f1df9bb7a6a3671e' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.target_ratio',
    ),
    'object' => 
    array (
      'key' => 'imageplus.target_ratio',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'be21ed380377a2b77c0fd47af46d963c' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.thumbnail_width',
    ),
    'object' => 
    array (
      'key' => 'imageplus.thumbnail_width',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'e608af9501656dbd001935aecc48bd2a' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.allow_alt_tag',
    ),
    'object' => 
    array (
      'key' => 'imageplus.allow_alt_tag',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '797f1b300d655bded49bfc5a1307ae8e' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.allow_caption',
    ),
    'object' => 
    array (
      'key' => 'imageplus.allow_caption',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '23c688bd2330e465b1f3db3e91f78aa2' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.allow_credits',
    ),
    'object' => 
    array (
      'key' => 'imageplus.allow_credits',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '49428df3097a1624eda6e4c4f1fcf00a' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.select_config',
    ),
    'object' => 
    array (
      'key' => 'imageplus.select_config',
      'value' => '[]',
      'xtype' => 'sizes-ratio-grid',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'de0150cdfc3138a24ac6b14076f8f028' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.force_config',
    ),
    'object' => 
    array (
      'key' => 'imageplus.force_config',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'f71fece2e8805d8ec5ed348c2afa0719' => 
  array (
    'criteria' => 
    array (
      'category' => 'ImagePlus',
    ),
    'object' => 
    array (
      'id' => 23,
      'parent' => 0,
      'category' => 'ImagePlus',
      'rank' => 0,
    ),
  ),
  'bb608ac3612863f1897af3d58591434f' => 
  array (
    'criteria' => 
    array (
      'name' => 'ImagePlus.demo',
    ),
    'object' => 
    array (
      'id' => 10,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ImagePlus.demo',
      'description' => 'Demo chunk for Image+ template variable output.',
      'editor_type' => 0,
      'category' => 23,
      'cache_type' => 0,
      'snippet' => '<div>
    <h3>Image+ Demo Chunk</h3>
    <table>
        <thead>
        <tr>
            <th>Description</th>
            <th>Current Value</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>[[%imageplus.placeholder.url? &namespace=`imageplus`]]</td>
            <td>[[+url]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.alt? &namespace=`imageplus`]]</td>
            <td>[[+alt]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.width? &namespace=`imageplus`]]</td>
            <td>[[+width]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.height? &namespace=`imageplus`]]</td>
            <td>[[+height]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.source.src? &namespace=`imageplus`]]</td>
            <td>[[+source.src]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.source.width? &namespace=`imageplus`]]</td>
            <td>[[+source.width]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.source.height? &namespace=`imageplus`]]</td>
            <td>[[+source.height]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.width? &namespace=`imageplus`]]</td>
            <td>[[+crop.width]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.height? &namespace=`imageplus`]]</td>
            <td>[[+crop.height]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.x? &namespace=`imageplus`]]</td>
            <td>[[+crop.x]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.y? &namespace=`imageplus`]]</td>
            <td>[[+crop.y]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.options? &namespace=`imageplus`]]</td>
            <td>[[+options]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.options? &namespace=`imageplus`]]</td>
            <td>[[+crop.options]]</td>
        </tr>
        </tbody>
    </table>

    <h4>Default image output</h4>

    <div>
        <img src="[[+url]]" alt="[[+alt]]"/>
        [[+caption:notempty=`<p class="caption">[[+caption]]</p>`]]
        [[+credits:notempty=`<p class="credits">[[+credits]]</p>`]]
    </div>

    <h4>Responsive image output (different crops for different viewports)</h4>

    <p>
        <picture>
            <source media="(min-width: 36em)"
                    srcset="[[+source.src:pthumb=`w=1024`]] 1024w,
                        [[+source.src:pthumb=`w=640`]] 640w,
                        [[+source.src:pthumb=`w=320`]] 320w"
                    sizes="33.3vw"/>
            <source srcset="[[+source.src:pthumb=`[[+crop.options]]&w=640`]] 2x,
                        [[+source.src:pthumb=`[[+crop.options]]&w=320`]] 1x"/>
            <img src="[[+url]]" alt="[[+alt]]"/>
        </picture>
    </p>
    [[+caption:notempty=`<p class="caption">[[+caption]]</p>`]]
    [[+credits:notempty=`<p class="credits">[[+credits]]</p>`]]
</div>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<div>
    <h3>Image+ Demo Chunk</h3>
    <table>
        <thead>
        <tr>
            <th>Description</th>
            <th>Current Value</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>[[%imageplus.placeholder.url? &namespace=`imageplus`]]</td>
            <td>[[+url]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.alt? &namespace=`imageplus`]]</td>
            <td>[[+alt]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.width? &namespace=`imageplus`]]</td>
            <td>[[+width]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.height? &namespace=`imageplus`]]</td>
            <td>[[+height]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.source.src? &namespace=`imageplus`]]</td>
            <td>[[+source.src]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.source.width? &namespace=`imageplus`]]</td>
            <td>[[+source.width]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.source.height? &namespace=`imageplus`]]</td>
            <td>[[+source.height]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.width? &namespace=`imageplus`]]</td>
            <td>[[+crop.width]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.height? &namespace=`imageplus`]]</td>
            <td>[[+crop.height]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.x? &namespace=`imageplus`]]</td>
            <td>[[+crop.x]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.y? &namespace=`imageplus`]]</td>
            <td>[[+crop.y]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.options? &namespace=`imageplus`]]</td>
            <td>[[+options]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.options? &namespace=`imageplus`]]</td>
            <td>[[+crop.options]]</td>
        </tr>
        </tbody>
    </table>

    <h4>Default image output</h4>

    <div>
        <img src="[[+url]]" alt="[[+alt]]"/>
        [[+caption:notempty=`<p class="caption">[[+caption]]</p>`]]
        [[+credits:notempty=`<p class="credits">[[+credits]]</p>`]]
    </div>

    <h4>Responsive image output (different crops for different viewports)</h4>

    <p>
        <picture>
            <source media="(min-width: 36em)"
                    srcset="[[+source.src:pthumb=`w=1024`]] 1024w,
                        [[+source.src:pthumb=`w=640`]] 640w,
                        [[+source.src:pthumb=`w=320`]] 320w"
                    sizes="33.3vw"/>
            <source srcset="[[+source.src:pthumb=`[[+crop.options]]&w=640`]] 2x,
                        [[+source.src:pthumb=`[[+crop.options]]&w=320`]] 1x"/>
            <img src="[[+url]]" alt="[[+alt]]"/>
        </picture>
    </p>
    [[+caption:notempty=`<p class="caption">[[+caption]]</p>`]]
    [[+credits:notempty=`<p class="credits">[[+credits]]</p>`]]
</div>',
    ),
  ),
  'f461c3487a815ab7cb2387e6bf19838c' => 
  array (
    'criteria' => 
    array (
      'name' => 'ImagePlus.image',
    ),
    'object' => 
    array (
      'id' => 11,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ImagePlus.image',
      'description' => 'Demo chunk for Image+ snippet output.',
      'editor_type' => 0,
      'category' => 23,
      'cache_type' => 0,
      'snippet' => '<img src="[[+url]]" alt="[[+alt]]"/>
[[+caption:notempty=`<p class="caption">[[+caption]]</p>`]]
[[+credits:notempty=`<p class="credits">[[+credits]]</p>`]]
',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<img src="[[+url]]" alt="[[+alt]]"/>
[[+caption:notempty=`<p class="caption">[[+caption]]</p>`]]
[[+credits:notempty=`<p class="credits">[[+credits]]</p>`]]
',
    ),
  ),
  '86a2ded6582999e09f1f05eb58ddf144' => 
  array (
    'criteria' => 
    array (
      'name' => 'ImagePlus',
    ),
    'object' => 
    array (
      'id' => 29,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ImagePlus',
      'description' => 'Snippet as alternative to Image+ TV Output Type',
      'editor_type' => 0,
      'category' => 23,
      'cache_type' => 0,
      'snippet' => '/**
 * ImagePlus Snippet as alternative to Image+ TV Output Type
 *
 * Copyright 2013-2015 by Alan Pich <alan.pich@gmail.com>
 * Copyright 2015-2021 by Thomas Jakobi <thomas.jakobi@partout.info>
 *
 * @package imageplus
 * @subpackage snippet
 *
 * @author Alan Pich <alan.pich@gmail.com>
 * @author Thomas Jakobi <thomas.jakobi@partout.info>
 * @copyright Alan Pich 2013-2015
 * @copyright Thomas Jakobi 2015-2021
 *
 * @var modX $modx
 * @var array $scriptProperties
 */

$corePath = $modx->getOption(\'imageplus.core_path\', null, $modx->getOption(\'core_path\') . \'components/imageplus/\');
/** @var ImagePlus $imageplus */
$imageplus = $modx->getService(\'imageplus\', \'ImagePlus\', $corePath . \'model/imageplus/\', array(
    \'core_path\' => $corePath
));

$tvname = $modx->getOption(\'tvname\', $scriptProperties, \'\', true);
$docid = $modx->getOption(\'docid\', $scriptProperties, (isset($modx->resource)) ? $modx->resource->get(\'id\') : 0, true);
$type = $modx->getOption(\'type\', $scriptProperties, \'\', true);
$options = $modx->getOption(\'options\', $scriptProperties, \'\', true);
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'ImagePlus.image\', true);
$value = $modx->getOption(\'value\', $scriptProperties, \'\', true);
$debug = $modx->getOption(\'debug\', $scriptProperties, $imageplus->getOption(\'debug\'), false);

if ($value) {
    // Value is set by snippet property
    $data = json_decode($value);
    if (!$data) {
        if ($debug) {
            $modx->log(xPDO::LOG_LEVEL_ERROR, \'Unable to decode JSON in snippet property\', \'\', \'Image+\');
            return \'Unable to decode JSON in snippet property\';
        }
    }
    // No TV is used
    $tv = null;
    $tvOutputProperties = array();
} else {
    // Value is retreived from template variable
    /** @var modTemplateVar $tv */
    $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $tvname));
    if ($tv) {
        // Get the raw content of the TV
        $value = $tv->getValue($docid);
        $value = $tv->processBindings($value, $docid);
        $tvOutputProperties = $tv->get(\'output_properties\');
        foreach ($tvOutputProperties as &$tvOutputProperty) {
            switch ($tvOutputProperty) {
                case \'true\' :
                    $tvOutputProperty = true;
                    break;
                case \'false\' :
                    $tvOutputProperty = false;
                    break;
            }
        }
    } else {
        if ($debug) {
            $modx->log(xPDO::LOG_LEVEL_ERROR, "Template Variable \'{$tvname}\' not found.", \'\', \'Image+\');
            return "Template Variable \'{$tvname}\' not found.";
        }
        $tvOutputProperties = array();
    }
}

$output = \'\';
// Render output
switch ($type) {
    case \'check\':
        $data = json_decode($value);
        $output = ($data && $data->sourceImg->src) ? \'image\' : \'noimage\';
        break;
    case \'tpl\':
        $data = json_decode($value);
        $output = ($value) ? $imageplus->getImageURL($value, array_merge($tvOutputProperties, $scriptProperties, array(
            \'docid\' => $docid,
            \'phpThumbParams\' => $options,
            \'outputChunk\' => $tpl,
            \'caption\' => ($data && $data->caption) ? $data->caption : \'\',
            \'credits\' => ($data && $data->credits) ? $data->credits : \'\'
        )), $tv) : \'\';
        break;
    case \'thumb\':
        $output = ($value) ? $imageplus->getImageURL($value, array_merge($tvOutputProperties, $scriptProperties, array(
            \'docid\' => $docid,
            \'phpThumbParams\' => $options,
            \'outputChunk\' => \'\',
        )), $tv) : \'\';
        break;
    default:
        $output = ($value) ? $imageplus->getImageURL($value, array_merge($tvOutputProperties, $scriptProperties, array(
            \'docid\' => $docid,
            \'phpThumbParams\' => $options,
        )), $tv) : \'\';
        break;
}
return $output;',
      'locked' => 0,
      'properties' => 'a:5:{s:6:"tvname";a:7:{s:4:"name";s:6:"tvname";s:4:"desc";s:26:"imageplus.imageplus.tvname";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:20:"imageplus:properties";s:4:"area";s:0:"";}s:5:"docid";a:7:{s:4:"name";s:5:"docid";s:4:"desc";s:25:"imageplus.imageplus.docid";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:20:"imageplus:properties";s:4:"area";s:0:"";}s:4:"type";a:7:{s:4:"name";s:4:"type";s:4:"desc";s:24:"imageplus.imageplus.type";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:20:"imageplus:properties";s:4:"area";s:0:"";}s:7:"options";a:7:{s:4:"name";s:7:"options";s:4:"desc";s:27:"imageplus.imageplus.options";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:20:"imageplus:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:23:"imageplus.imageplus.tpl";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:15:"ImagePlus.image";s:7:"lexicon";s:20:"imageplus:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * ImagePlus Snippet as alternative to Image+ TV Output Type
 *
 * Copyright 2013-2015 by Alan Pich <alan.pich@gmail.com>
 * Copyright 2015-2021 by Thomas Jakobi <thomas.jakobi@partout.info>
 *
 * @package imageplus
 * @subpackage snippet
 *
 * @author Alan Pich <alan.pich@gmail.com>
 * @author Thomas Jakobi <thomas.jakobi@partout.info>
 * @copyright Alan Pich 2013-2015
 * @copyright Thomas Jakobi 2015-2021
 *
 * @var modX $modx
 * @var array $scriptProperties
 */

$corePath = $modx->getOption(\'imageplus.core_path\', null, $modx->getOption(\'core_path\') . \'components/imageplus/\');
/** @var ImagePlus $imageplus */
$imageplus = $modx->getService(\'imageplus\', \'ImagePlus\', $corePath . \'model/imageplus/\', array(
    \'core_path\' => $corePath
));

$tvname = $modx->getOption(\'tvname\', $scriptProperties, \'\', true);
$docid = $modx->getOption(\'docid\', $scriptProperties, (isset($modx->resource)) ? $modx->resource->get(\'id\') : 0, true);
$type = $modx->getOption(\'type\', $scriptProperties, \'\', true);
$options = $modx->getOption(\'options\', $scriptProperties, \'\', true);
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'ImagePlus.image\', true);
$value = $modx->getOption(\'value\', $scriptProperties, \'\', true);
$debug = $modx->getOption(\'debug\', $scriptProperties, $imageplus->getOption(\'debug\'), false);

if ($value) {
    // Value is set by snippet property
    $data = json_decode($value);
    if (!$data) {
        if ($debug) {
            $modx->log(xPDO::LOG_LEVEL_ERROR, \'Unable to decode JSON in snippet property\', \'\', \'Image+\');
            return \'Unable to decode JSON in snippet property\';
        }
    }
    // No TV is used
    $tv = null;
    $tvOutputProperties = array();
} else {
    // Value is retreived from template variable
    /** @var modTemplateVar $tv */
    $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $tvname));
    if ($tv) {
        // Get the raw content of the TV
        $value = $tv->getValue($docid);
        $value = $tv->processBindings($value, $docid);
        $tvOutputProperties = $tv->get(\'output_properties\');
        foreach ($tvOutputProperties as &$tvOutputProperty) {
            switch ($tvOutputProperty) {
                case \'true\' :
                    $tvOutputProperty = true;
                    break;
                case \'false\' :
                    $tvOutputProperty = false;
                    break;
            }
        }
    } else {
        if ($debug) {
            $modx->log(xPDO::LOG_LEVEL_ERROR, "Template Variable \'{$tvname}\' not found.", \'\', \'Image+\');
            return "Template Variable \'{$tvname}\' not found.";
        }
        $tvOutputProperties = array();
    }
}

$output = \'\';
// Render output
switch ($type) {
    case \'check\':
        $data = json_decode($value);
        $output = ($data && $data->sourceImg->src) ? \'image\' : \'noimage\';
        break;
    case \'tpl\':
        $data = json_decode($value);
        $output = ($value) ? $imageplus->getImageURL($value, array_merge($tvOutputProperties, $scriptProperties, array(
            \'docid\' => $docid,
            \'phpThumbParams\' => $options,
            \'outputChunk\' => $tpl,
            \'caption\' => ($data && $data->caption) ? $data->caption : \'\',
            \'credits\' => ($data && $data->credits) ? $data->credits : \'\'
        )), $tv) : \'\';
        break;
    case \'thumb\':
        $output = ($value) ? $imageplus->getImageURL($value, array_merge($tvOutputProperties, $scriptProperties, array(
            \'docid\' => $docid,
            \'phpThumbParams\' => $options,
            \'outputChunk\' => \'\',
        )), $tv) : \'\';
        break;
    default:
        $output = ($value) ? $imageplus->getImageURL($value, array_merge($tvOutputProperties, $scriptProperties, array(
            \'docid\' => $docid,
            \'phpThumbParams\' => $options,
        )), $tv) : \'\';
        break;
}
return $output;',
    ),
  ),
  '822d26d78d748a594b30f0c48a91d2d4' => 
  array (
    'criteria' => 
    array (
      'name' => 'ImagePlus',
    ),
    'object' => 
    array (
      'id' => 22,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ImagePlus',
      'description' => 'Image+ runtime hooks - registers custom TV input & output types and includes javascripts on document edit pages.',
      'editor_type' => 0,
      'category' => 23,
      'cache_type' => 0,
      'plugincode' => '/**
 * Image+ Runtime Hooks
 *
 * Registers custom TV input & output types and includes javascripts on document
 * edit pages so that the TV can be used from within other extras (i.e. MIGX,
 * Collections)
 *
 * Copyright 2013-2015 by Alan Pich <alan.pich@gmail.com>
 * Copyright 2015-2021 by Thomas Jakobi <thomas.jakobi@partout.info>
 *
 * @package imageplus
 * @subpackage plugin
 *
 * @author Alan Pich <alan.pich@gmail.com>
 * @author Thomas Jakobi <thomas.jakobi@partout.info>
 * @copyright Alan Pich 2013-2015
 * @copyright Thomas Jakobi 2015-2021
 *
 * @event OnManagerPageBeforeRender
 * @event OnTVInputRenderList
 * @event OnTVOutputRenderList
 * @event OnTVInputPropertiesList
 * @event OnTVOutputRenderPropertiesList
 * @event OnDocFormRender
 *
 * @var modX $modx
 */

$eventName = $modx->event->name;

$corePath = $modx->getOption(\'imageplus.core_path\', null, $modx->getOption(\'core_path\') . \'components/imageplus/\');
/** @var ImagePlus $imageplus */
$imageplus = $modx->getService(\'imageplus\', \'ImagePlus\', $corePath . \'model/imageplus/\', array(
    \'core_path\' => $corePath
));

switch ($eventName) {
    case \'OnManagerPageBeforeRender\':
        $modx->controller->addLexiconTopic(\'imageplus:default\');
        $imageplus->includeScriptAssets();
        break;
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath . \'elements/tv/input/\');
        break;
    case \'OnTVOutputRenderList\':
        $modx->event->output($corePath . \'elements/tv/output/\');
        break;
    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath . \'elements/tv/input/options/\');
        break;
    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath . \'elements/tv/output/options/\');
        break;
    case \'OnDocFormRender\':
        $imageplus->includeScriptAssets();
        break;
};',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Image+ Runtime Hooks
 *
 * Registers custom TV input & output types and includes javascripts on document
 * edit pages so that the TV can be used from within other extras (i.e. MIGX,
 * Collections)
 *
 * Copyright 2013-2015 by Alan Pich <alan.pich@gmail.com>
 * Copyright 2015-2021 by Thomas Jakobi <thomas.jakobi@partout.info>
 *
 * @package imageplus
 * @subpackage plugin
 *
 * @author Alan Pich <alan.pich@gmail.com>
 * @author Thomas Jakobi <thomas.jakobi@partout.info>
 * @copyright Alan Pich 2013-2015
 * @copyright Thomas Jakobi 2015-2021
 *
 * @event OnManagerPageBeforeRender
 * @event OnTVInputRenderList
 * @event OnTVOutputRenderList
 * @event OnTVInputPropertiesList
 * @event OnTVOutputRenderPropertiesList
 * @event OnDocFormRender
 *
 * @var modX $modx
 */

$eventName = $modx->event->name;

$corePath = $modx->getOption(\'imageplus.core_path\', null, $modx->getOption(\'core_path\') . \'components/imageplus/\');
/** @var ImagePlus $imageplus */
$imageplus = $modx->getService(\'imageplus\', \'ImagePlus\', $corePath . \'model/imageplus/\', array(
    \'core_path\' => $corePath
));

switch ($eventName) {
    case \'OnManagerPageBeforeRender\':
        $modx->controller->addLexiconTopic(\'imageplus:default\');
        $imageplus->includeScriptAssets();
        break;
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath . \'elements/tv/input/\');
        break;
    case \'OnTVOutputRenderList\':
        $modx->event->output($corePath . \'elements/tv/output/\');
        break;
    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath . \'elements/tv/input/options/\');
        break;
    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath . \'elements/tv/output/options/\');
        break;
    case \'OnDocFormRender\':
        $imageplus->includeScriptAssets();
        break;
};',
    ),
  ),
  'a63f9186d5004550658bec5feac93328' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 22,
      'event' => 'OnManagerPageBeforeRender',
    ),
    'object' => 
    array (
      'pluginid' => 22,
      'event' => 'OnManagerPageBeforeRender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '7fbe6320ebbe155a6f69fbd6896ce5b4' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 22,
      'event' => 'OnTVInputPropertiesList',
    ),
    'object' => 
    array (
      'pluginid' => 22,
      'event' => 'OnTVInputPropertiesList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'd1157ed6546c144d90d99ca1ee5380db' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 22,
      'event' => 'OnTVInputRenderList',
    ),
    'object' => 
    array (
      'pluginid' => 22,
      'event' => 'OnTVInputRenderList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '969cc9c8770df1313d85e851253f7c7e' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 22,
      'event' => 'OnTVOutputRenderList',
    ),
    'object' => 
    array (
      'pluginid' => 22,
      'event' => 'OnTVOutputRenderList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '6e658a79b326766a1fbb27491a6e2581' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 22,
      'event' => 'OnTVOutputRenderPropertiesList',
    ),
    'object' => 
    array (
      'pluginid' => 22,
      'event' => 'OnTVOutputRenderPropertiesList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);