<?php
** 
* Plugin Name:       puctest
* Description:       testing puc.
* Version:           2.0.0

require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/janviehweger/puctest/',
    __FILE__,
    'puctest'
);
