id: 18
source: 2
name: exactDigits
category: 'Snippets and Output-Filters'
properties: 'a:0:{}'

-----

/*
 * exactDigits
 *
 * adds leading zeros to numbers till it matches exact amount of chars
 *
 * Usage examples:
 * [[+tv:exactDigits=`5`]]
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 */

// Properties 
$chars = $modx->getOption('options', $scriptProperties, 2, true);

// add zeros
return sprintf('%0'. $chars .'d', $input);