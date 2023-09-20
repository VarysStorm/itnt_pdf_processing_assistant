<?php
/*
Plugin Name: ITNT PDF Processing Assistent
Description: Automatischer Assistent zur Beitragsgenerierung aus PDFs.
Version: 0.1
Author: Patrick Maniura
Text Domain: ITNT PDF Processing Assistent

*/

require __DIR__ . 'ppa-backend.php';


function itnt_ppa_activate() {
    wp_register_style('itnt_pdf_processing_assistent', plugins_url('css/style.css');
    wp_enqueue_style('wp_register_style');
}
register_activation_hook(__FILE__, 'itnt_ppa_activate');

?>