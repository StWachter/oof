<?php
/*
 * easycartFormatPrice
 *
 * formats int to a price: seperatet by comma - dot for thousand seperator
 *
 * Usage examples:
 * [[+tv:easycartFormatPrice]]
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 */

 $locale = (empty($options)) ? 'en_EN' : $options;

 setlocale(LC_MONETARY, $locale);

 return money_format('%!n', ($input / 100));