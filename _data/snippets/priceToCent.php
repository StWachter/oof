id: 67
source: 2
name: priceToCent
category: 'Snippets and Output-Filters'
properties: 'a:0:{}'

-----

/*
 * priceToCent
 *
 * calculates a price like 15,20 to 1520
 *
 * Usage examples:
 * [[*tvName:priceToCent]]
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 */
 
$number = floatval(str_replace(',', '.', $input));

$cent = ($number * 100);

return $cent;