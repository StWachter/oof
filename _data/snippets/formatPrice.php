id: 19
source: 2
name: formatPrice
category: 'Snippets and Output-Filters'
properties: 'a:0:{}'

-----

/*
 * formatPrice
 *
 * formats a float/int to a price: separated by comma - dot for thousand separator
 *
 * Usage examples:
 * [[+tv:formatPrice]]
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 */

if (!is_numeric(str_replace(',', '.', $input))) {
    // Handle the error as needed, e.g., return a default value or throw an exception
    return '0,00';
}

// Replace comma with a dot if it's used as the decimal separator
$input = str_replace(',', '.', $input);

// Cast input to float to ensure it works with number_format
$input = (float) $input;

return number_format($input, 2, ',', '.');