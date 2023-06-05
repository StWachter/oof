id: 80
name: easycartPriceToCent
category: easyCart
properties: 'a:0:{}'

-----

/*
 * easycartPriceToCent
 *
 * Calculates a price like 15,20 to 1520
 *
 * Usage examples:
 * [[*tvName:easycartPriceToCent]]
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 */

$number = floatval(str_replace(',', '.', str_replace('.', '', $input)));

$cent = ($number * 100);

return $cent;