id: 77
name: BabelLinks
description: 'Displays links to translated resources.'
category: Babel
properties: 'a:11:{s:10:"resourceId";a:7:{s:4:"name";s:10:"resourceId";s:4:"desc";s:27:"babel.babellinks.resourceId";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:20:"babel.babellinks.tpl";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:12:"tplBabellink";s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:10:"wrapperTpl";a:7:{s:4:"name";s:10:"wrapperTpl";s:4:"desc";s:27:"babel.babellinks.wrapperTpl";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:9:"activeCls";a:7:{s:4:"name";s:9:"activeCls";s:4:"desc";s:26:"babel.babellinks.activeCls";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:6:"active";s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:32:"babel.babellinks.showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:11:"showCurrent";a:7:{s:4:"name";s:11:"showCurrent";s:4:"desc";s:28:"babel.babellinks.showCurrent";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:15:"includeUnlinked";a:7:{s:4:"name";s:15:"includeUnlinked";s:4:"desc";s:32:"babel.babellinks.includeUnlinked";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:16:"ignoreSiteStatus";a:7:{s:4:"name";s:16:"ignoreSiteStatus";s:4:"desc";s:33:"babel.babellinks.ignoreSiteStatus";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:15:"restrictToGroup";a:7:{s:4:"name";s:15:"restrictToGroup";s:4:"desc";s:32:"babel.babellinks.restrictToGroup";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:7:"toArray";a:7:{s:4:"name";s:7:"toArray";s:4:"desc";s:24:"babel.babellinks.toArray";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:30:"babel.babellinks.toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}}'

-----

/**
 * BabelLinks
 *
 * @package babel
 * @subpackage snippet
 *
 * @var modX $modx
 * @var array $scriptProperties
 */

use mikrobi\Babel\Snippets\BabelLinks;

$corePath = $modx->getOption('babel.core_path', null, $modx->getOption('core_path') . 'components/babel/');
/** @var Babel $babel */
$babel = $modx->getService('babel', Babel::class, $corePath . 'model/babel/', [
    'core_path' => $corePath
]);

$snippet = new BabelLinks($modx, $scriptProperties);
if ($snippet instanceof mikrobi\Babel\Snippets\BabelLinks) {
    return $snippet->execute();
}
return 'mikrobi\Babel\Snippets\BabelLinks class not found';