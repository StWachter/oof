id: 78
name: BabelTranslation
description: 'Returns the id of a translated resource in a given context.'
category: Babel
properties: 'a:5:{s:10:"resourceId";a:7:{s:4:"name";s:10:"resourceId";s:4:"desc";s:33:"babel.babeltranslation.resourceId";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:10:"contextKey";a:7:{s:4:"name";s:10:"contextKey";s:4:"desc";s:33:"babel.babeltranslation.contextKey";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:10:"cultureKey";a:7:{s:4:"name";s:10:"cultureKey";s:4:"desc";s:33:"babel.babeltranslation.cultureKey";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:38:"babel.babeltranslation.showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:36:"babel.babeltranslation.toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}}'

-----

/**
 * BabelTranslation
 *
 * @package babel
 * @subpackage snippet
 *
 * @var modX $modx
 * @var array $scriptProperties
 */

use mikrobi\Babel\Snippets\BabelTranslation;

$corePath = $modx->getOption('babel.core_path', null, $modx->getOption('core_path') . 'components/babel/');
/** @var Babel $babel */
$babel = $modx->getService('babel', Babel::class, $corePath . 'model/babel/', [
    'core_path' => $corePath
]);

$snippet = new BabelTranslation($modx, $scriptProperties);
if ($snippet instanceof mikrobi\Babel\Snippets\BabelTranslation) {
    return $snippet->execute();
}
return 'mikrobi\Babel\Snippets\BabelTranslation class not found';