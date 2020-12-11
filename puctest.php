<?php
** 
* Plugin Name:       puctest
* Plugin URI:        https://example.com/plugins/the-basics/
* Description:       Handle the basics with this plugin.
* Version:           1.0.0

require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/janviehweger/puctest/',
    __FILE__,
    'puctest'
);