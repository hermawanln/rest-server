<?php

/**
 * @author   Natan Felles <natanfelles@gmail.com>
 */
defined('BASEPATH') or exit('No direct script access allowed');


if ( ! function_exists('simple_date')) {
    function simple_date($date) {
        return date('Y-m-d', $date);
    }
}

if ( ! function_exists('full_date')) {
    function full_date($date) {
        return date('Y-m-d H:i:s', $date);
    }
}

if ( ! function_exists('text_date')) {
    function text_date($date) {
        return date('H:i, d-M-Y', $date);
    }
}