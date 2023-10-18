<?php

function create_blog_post($titel, $inhalt) {
    // Post-Daten vorbereiten
    $post_data = array(
        'post_title'    => $titel,
        'post_content'  => $inhalt,
        'post_status'   => 'publish', // 'publish', 'draft' oder 'pending'
        'post_type'     => 'post',    // Der Beitragstyp (kann auch 'page' sein)
    );

    // Einfügen des Beitrags in die Datenbank
    $new_post_id = wp_insert_post($post_data);

    // Überprüfe, ob das Einfügen erfolgreich war
    if ($new_post_id) {
        echo "Beitrag erfolgreich erstellt! ID: $new_post_id";
    } else {
        echo "Fehler beim Erstellen des Beitrags.";
    }
}

if(isset ($_POST)){

    $newTitle = $_POST['title'];
    $newText = $_POST['text'];
    create_blog_post('Neuer Beitragstitel', 'Inhalt des neuen Beitrags.');
} 
else{
    $error = "Es wurde kein Beitrag erstellt. Es wurden keine Daten übergeben."

    
}
?>