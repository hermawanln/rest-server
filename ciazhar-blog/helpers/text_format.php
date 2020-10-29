<?php

/**
 * @author   Natan Felles <natanfelles@gmail.com>
 */
defined('BASEPATH') or exit('No direct script access allowed');


if (!function_exists('split_to_array')) {
    function split_to_array($string, $delimeter = ',')
    {
        return explode($delimeter, $string);
    }
}
