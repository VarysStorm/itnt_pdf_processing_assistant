<?php
/*
Plugin Name: ITNT PDF Processing Assistent
Plugin URI: ''
Description: Automatischer Assistent zur Beitragsgenerierung aus PDFs. Dieses Plugin ermöglicht es Benutzern, ...
Version: 0.1
Author: Patrick Maniura
Author URI: ''
License: GPL-2.0+
Text Domain: ITNT PDF Processing Assistent
Domain Path: ''
Stable Tag: 0.1
*/

require __DIR__ . '/ppa-backend.php';
require __DIR__ . '/ppa-config.php';

function itnt_ppa_activate() {
}
register_activation_hook(__FILE__, 'itnt_ppa_activate');
?>
