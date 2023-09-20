<?php
/*
Plugin Name: ITNT PDF Processing Assistent
Description: Automatischer Assistent zur Beitragsgenerierung aus PDFs.
Version: 0.1
Author: Patrick Maniura
Text Domain: ITNT PDF Processing Assistent

*/

include 'ppa-backend.php';


function mein_plugin_setup() {
    global $wpdb;

    $table_name = $wpdb->prefix . 'ppa-enqueries';

    $sql = "CREATE TABLE $table_name (
        id int(10) NOT NULL AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        PRIMARY KEY  (id)
    )";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'pdf-processing-assistent');

?>