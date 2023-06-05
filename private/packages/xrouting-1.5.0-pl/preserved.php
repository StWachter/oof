<?php return array (
  '877a223daf32c0bee1eccce6bbc28394' => 
  array (
    'criteria' => 
    array (
      'name' => 'xrouting',
    ),
    'object' => 
    array (
      'name' => 'xrouting',
      'path' => '{core_path}components/xrouting/',
      'assets_path' => '',
    ),
  ),
  'e1a5b55d7c53ab8b6613c22618f4c230' => 
  array (
    'criteria' => 
    array (
      'key' => 'xrouting.include_www',
    ),
    'object' => 
    array (
      'key' => 'xrouting.include_www',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'xrouting',
      'area' => 'common',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '522f68cce97960ba8f268d4b65b6b026' => 
  array (
    'criteria' => 
    array (
      'key' => 'xrouting.default_context',
    ),
    'object' => 
    array (
      'key' => 'xrouting.default_context',
      'value' => 'web',
      'xtype' => 'textfield',
      'namespace' => 'xrouting',
      'area' => 'common',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '01a9bb47d086e59b0c26b08165673f56' => 
  array (
    'criteria' => 
    array (
      'key' => 'xrouting.show_no_match_error',
    ),
    'object' => 
    array (
      'key' => 'xrouting.show_no_match_error',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'xrouting',
      'area' => 'common',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'e65fa72e73933fe88746a52015369752' => 
  array (
    'criteria' => 
    array (
      'key' => 'xrouting.allow_debug_info',
    ),
    'object' => 
    array (
      'key' => 'xrouting.allow_debug_info',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'xrouting',
      'area' => 'common',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'e001def4eb478aad45abdbe74b844281' => 
  array (
    'criteria' => 
    array (
      'category' => 'XRouting',
    ),
    'object' => 
    array (
      'id' => 37,
      'parent' => 0,
      'category' => 'XRouting',
      'rank' => 0,
    ),
  ),
  '913a5bb979f1ee983eb961a722a40f0c' => 
  array (
    'criteria' => 
    array (
      'name' => 'XRouting',
    ),
    'object' => 
    array (
      'id' => 33,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'XRouting',
      'description' => 'XRouting is a simple plugin that handles requests for different contexts. It automatically switches the context based on a (sub)domain AND/OR subfolder.',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'plugincode' => 'switch ($modx->event->name) {

    // "refresh cache" part
    case \'OnContextSave\':
    case \'OnContextRemove\':
    case \'OnSiteRefresh\':
        
        $contexts = array();
        $cacheKey = \'xrouting_contextmap\';
        $cacheOptions = array();
        
        // build context array
        $query = $modx->newQuery(\'modContext\');
        $query->where(array(\'modContext.key:NOT IN\' => array(\'mgr\')));
        $query->sortby($modx->escape(\'modContext\') . \'.\' . $modx->escape(\'key\'), \'DESC\');
        $contextsGraph = $modx->getCollectionGraph(\'modContext\', \'{"ContextSettings":{}}\', $query);
        
        foreach ($contextsGraph as $context) {
            $contextSettings = array();
            foreach ($context->ContextSettings as $cSetting) {
                $contextSettings[$cSetting->get(\'key\')] = $cSetting->get(\'value\');
            }
            
            if (!empty($contextSettings[\'http_host\']) && !empty($contextSettings[\'base_url\'])) {
                
                // add http_host to hosts list
                $contexts[\'_hosts\'][$contextSettings[\'http_host\']][] = $context->get(\'key\');
                
                // add alias hosts to host list
                if (!empty($contextSettings[\'http_host_aliases\'])) {
                    foreach (explode(\',\',$contextSettings[\'http_host_aliases\']) as $alias) {
                        $contexts[\'_hosts\'][$alias][] = $context->get(\'key\');
                    }
                }
                
                // add context settings
                $contexts[$context->get(\'key\')] = $contextSettings;
            }
        }
         
        unset($contextsGraph);
        $modx->cacheManager->set($cacheKey, $contexts, 0, $cacheOptions);
    break;
    
    
    // "routing" part
    default:
    case \'OnHandleRequest\':
        if ($modx->context->get(\'key\') == \'mgr\') return;
            
        $contexts = array();
        
        $cacheKey = \'xrouting_contextmap\';
        $cacheOptions = array();
        $contexts = $modx->cacheManager->get($cacheKey, $cacheOptions);
        
        if (empty($contexts)) {
        // build context array
            $query = $modx->newQuery(\'modContext\');
            $query->where(array(\'modContext.key:NOT IN\' => array(\'mgr\')));
            $query->sortby($modx->escape(\'modContext\') . \'.\' . $modx->escape(\'key\'), \'DESC\');
            $contextsGraph = $modx->getCollectionGraph(\'modContext\', \'{"ContextSettings":{}}\', $query);
            
            foreach ($contextsGraph as $context) {
                $contextSettings = array();
                foreach ($context->ContextSettings as $cSetting) {
                    $contextSettings[$cSetting->get(\'key\')] = $cSetting->get(\'value\');
                }
                
                if (!empty($contextSettings[\'http_host\']) && !empty($contextSettings[\'base_url\'])) {
                    
                    // add http_host to hosts list
                    $contexts[\'_hosts\'][$contextSettings[\'http_host\']][] = $context->get(\'key\');
                    
                    // add alias hosts to host list
                    if (!empty($contextSettings[\'http_host_aliases\'])) {
                        foreach (explode(\',\',$contextSettings[\'http_host_aliases\']) as $alias) {
                            $contexts[\'_hosts\'][$alias][] = $context->get(\'key\');
                        }
                    }
                    
                    // add context settings
                    $contexts[$context->get(\'key\')] = $contextSettings;
                }
            }
                         
            unset($contextsGraph);
            $modx->cacheManager->set($cacheKey, $contexts, 0, $cacheOptions);
        }


        if (!empty($contexts)) {
            $http_host = $_SERVER[\'HTTP_HOST\'];
            if ($modx->getOption(\'xrouting.include_www\', null, true)) {
                $http_host = str_replace(\'www.\',\'\',$http_host);
            }
            
            $modx_base_url = $modx->getOption(\'base_url\', null, MODX_BASE_URL);
            $requestUrl = str_replace(\'//\',\'/\',$modx_base_url.$_REQUEST[$modx->getOption(\'request_param_alias\', null, \'q\')]);
            $matches = array();
            
            
        // find matching hosts
            $matched_contexts = $contexts[\'_hosts\'][$http_host];
            
            
            foreach ((array) $matched_contexts as $index => $ckey) {
                
                $context = $contexts[$ckey];
                $strpos = strpos($requestUrl, $contexts[$ckey][\'base_url\']);
                if ($strpos === 0) {
                    $matches[strlen($contexts[$ckey][\'base_url\'])] = $ckey;
                }
            }

        // modify request for the matched context
            if (!empty($matches)) {
                
                $cSettings = $contexts[$matches[max(array_keys($matches))]];
                $cKey = $matches[max(array_keys($matches))];
                
                // do we need to switch the context?
                if ($modx->context->get(\'key\') != $cKey) {
                    $modx->switchContext($cKey);
                }
                
                // remove base_url from request query
                if ($cSettings[\'base_url\'] != $modx_base_url) {
                    $newRequestUrl = str_replace($cSettings[\'base_url\'],\'\',$requestUrl);
                    $_REQUEST[$modx->getOption(\'request_param_alias\', null, \'q\')] = $newRequestUrl;
                }
                
                
            } else if ($_REQUEST[\'xrouting-debug\'] != \'1\' || !$modx->getOption(\'xrouting.allow_debug_info\', null, false)) {
                // if no match found
                if ($modx->getOption(\'xrouting.show_no_match_error\', null, true)) {
                    $modx->sendErrorPage();
                } else {
                    $modx->switchContext($modx->getOption(\'xrouting.default_context\', null, \'web\'));
                }
                
            }
        
        // output debug info
            if ($_REQUEST[\'xrouting-debug\'] == \'1\' && $modx->getOption(\'xrouting.allow_debug_info\', null, false)) {
                $debuginfo = \'<pre>\';
                $debuginfo .= "## MODX context map:\\n\\n" . print_r($contexts,true) . "\\n\\n\\n";
                $debuginfo .= "## Requested URL: " . $_REQUEST[$modx->getOption(\'request_param_alias\', null, \'q\')] . "\\n\\n\\n";
                $debuginfo .= "## Requested URL with base_url: ". $requestUrl ."\\n\\n\\n";
                $debuginfo .= "## Matched context(s) (Array key defines match quality):\\n\\n" . print_r($matches,true) . "\\n\\n\\n";
                $debuginfo .= "## Request will go to context: " . $matches[max(array_keys($matches))] . "\\n\\n\\n";
                $debuginfo .= "## Modified request URL: " . $newRequestUrl . "\\n\\n\\n";
                die($debuginfo);
            }
        }
    break;
}',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => 'switch ($modx->event->name) {

    // "refresh cache" part
    case \'OnContextSave\':
    case \'OnContextRemove\':
    case \'OnSiteRefresh\':
        
        $contexts = array();
        $cacheKey = \'xrouting_contextmap\';
        $cacheOptions = array();
        
        // build context array
        $query = $modx->newQuery(\'modContext\');
        $query->where(array(\'modContext.key:NOT IN\' => array(\'mgr\')));
        $query->sortby($modx->escape(\'modContext\') . \'.\' . $modx->escape(\'key\'), \'DESC\');
        $contextsGraph = $modx->getCollectionGraph(\'modContext\', \'{"ContextSettings":{}}\', $query);
        
        foreach ($contextsGraph as $context) {
            $contextSettings = array();
            foreach ($context->ContextSettings as $cSetting) {
                $contextSettings[$cSetting->get(\'key\')] = $cSetting->get(\'value\');
            }
            
            if (!empty($contextSettings[\'http_host\']) && !empty($contextSettings[\'base_url\'])) {
                
                // add http_host to hosts list
                $contexts[\'_hosts\'][$contextSettings[\'http_host\']][] = $context->get(\'key\');
                
                // add alias hosts to host list
                if (!empty($contextSettings[\'http_host_aliases\'])) {
                    foreach (explode(\',\',$contextSettings[\'http_host_aliases\']) as $alias) {
                        $contexts[\'_hosts\'][$alias][] = $context->get(\'key\');
                    }
                }
                
                // add context settings
                $contexts[$context->get(\'key\')] = $contextSettings;
            }
        }
         
        unset($contextsGraph);
        $modx->cacheManager->set($cacheKey, $contexts, 0, $cacheOptions);
    break;
    
    
    // "routing" part
    default:
    case \'OnHandleRequest\':
        if ($modx->context->get(\'key\') == \'mgr\') return;
            
        $contexts = array();
        
        $cacheKey = \'xrouting_contextmap\';
        $cacheOptions = array();
        $contexts = $modx->cacheManager->get($cacheKey, $cacheOptions);
        
        if (empty($contexts)) {
        // build context array
            $query = $modx->newQuery(\'modContext\');
            $query->where(array(\'modContext.key:NOT IN\' => array(\'mgr\')));
            $query->sortby($modx->escape(\'modContext\') . \'.\' . $modx->escape(\'key\'), \'DESC\');
            $contextsGraph = $modx->getCollectionGraph(\'modContext\', \'{"ContextSettings":{}}\', $query);
            
            foreach ($contextsGraph as $context) {
                $contextSettings = array();
                foreach ($context->ContextSettings as $cSetting) {
                    $contextSettings[$cSetting->get(\'key\')] = $cSetting->get(\'value\');
                }
                
                if (!empty($contextSettings[\'http_host\']) && !empty($contextSettings[\'base_url\'])) {
                    
                    // add http_host to hosts list
                    $contexts[\'_hosts\'][$contextSettings[\'http_host\']][] = $context->get(\'key\');
                    
                    // add alias hosts to host list
                    if (!empty($contextSettings[\'http_host_aliases\'])) {
                        foreach (explode(\',\',$contextSettings[\'http_host_aliases\']) as $alias) {
                            $contexts[\'_hosts\'][$alias][] = $context->get(\'key\');
                        }
                    }
                    
                    // add context settings
                    $contexts[$context->get(\'key\')] = $contextSettings;
                }
            }
                         
            unset($contextsGraph);
            $modx->cacheManager->set($cacheKey, $contexts, 0, $cacheOptions);
        }


        if (!empty($contexts)) {
            $http_host = $_SERVER[\'HTTP_HOST\'];
            if ($modx->getOption(\'xrouting.include_www\', null, true)) {
                $http_host = str_replace(\'www.\',\'\',$http_host);
            }
            
            $modx_base_url = $modx->getOption(\'base_url\', null, MODX_BASE_URL);
            $requestUrl = str_replace(\'//\',\'/\',$modx_base_url.$_REQUEST[$modx->getOption(\'request_param_alias\', null, \'q\')]);
            $matches = array();
            
            
        // find matching hosts
            $matched_contexts = $contexts[\'_hosts\'][$http_host];
            
            
            foreach ((array) $matched_contexts as $index => $ckey) {
                
                $context = $contexts[$ckey];
                $strpos = strpos($requestUrl, $contexts[$ckey][\'base_url\']);
                if ($strpos === 0) {
                    $matches[strlen($contexts[$ckey][\'base_url\'])] = $ckey;
                }
            }

        // modify request for the matched context
            if (!empty($matches)) {
                
                $cSettings = $contexts[$matches[max(array_keys($matches))]];
                $cKey = $matches[max(array_keys($matches))];
                
                // do we need to switch the context?
                if ($modx->context->get(\'key\') != $cKey) {
                    $modx->switchContext($cKey);
                }
                
                // remove base_url from request query
                if ($cSettings[\'base_url\'] != $modx_base_url) {
                    $newRequestUrl = str_replace($cSettings[\'base_url\'],\'\',$requestUrl);
                    $_REQUEST[$modx->getOption(\'request_param_alias\', null, \'q\')] = $newRequestUrl;
                }
                
                
            } else if ($_REQUEST[\'xrouting-debug\'] != \'1\' || !$modx->getOption(\'xrouting.allow_debug_info\', null, false)) {
                // if no match found
                if ($modx->getOption(\'xrouting.show_no_match_error\', null, true)) {
                    $modx->sendErrorPage();
                } else {
                    $modx->switchContext($modx->getOption(\'xrouting.default_context\', null, \'web\'));
                }
                
            }
        
        // output debug info
            if ($_REQUEST[\'xrouting-debug\'] == \'1\' && $modx->getOption(\'xrouting.allow_debug_info\', null, false)) {
                $debuginfo = \'<pre>\';
                $debuginfo .= "## MODX context map:\\n\\n" . print_r($contexts,true) . "\\n\\n\\n";
                $debuginfo .= "## Requested URL: " . $_REQUEST[$modx->getOption(\'request_param_alias\', null, \'q\')] . "\\n\\n\\n";
                $debuginfo .= "## Requested URL with base_url: ". $requestUrl ."\\n\\n\\n";
                $debuginfo .= "## Matched context(s) (Array key defines match quality):\\n\\n" . print_r($matches,true) . "\\n\\n\\n";
                $debuginfo .= "## Request will go to context: " . $matches[max(array_keys($matches))] . "\\n\\n\\n";
                $debuginfo .= "## Modified request URL: " . $newRequestUrl . "\\n\\n\\n";
                die($debuginfo);
            }
        }
    break;
}',
    ),
  ),
  'e257f339e95dc831a348fb1ca2322858' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 33,
      'event' => 'OnHandleRequest',
    ),
    'object' => 
    array (
      'pluginid' => 33,
      'event' => 'OnHandleRequest',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '3fc2900384787e18b2e8638418c500a2' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 33,
      'event' => 'OnContextSave',
    ),
    'object' => 
    array (
      'pluginid' => 33,
      'event' => 'OnContextSave',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'f86290dd6095a63570175f7e1a196a64' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 33,
      'event' => 'OnContextRemove',
    ),
    'object' => 
    array (
      'pluginid' => 33,
      'event' => 'OnContextRemove',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'fec1899cee48a30553f334b8d9a5d1ec' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 33,
      'event' => 'OnSiteRefresh',
    ),
    'object' => 
    array (
      'pluginid' => 33,
      'event' => 'OnSiteRefresh',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);