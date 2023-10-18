<?
function erstelle_neuen_beitrag($titel, $inhalt) {
    // Post-Daten vorbereiten
    $post_data = array(
        'post_title'    => $titel,
        'post_content'  => $inhalt,
        'post_status'   => 'publish', // 'publish', 'draft' oder 'pending'
        'post_type'     => 'post',    // Der Beitragstyp (kann auch 'page' sein)
    );

    // Einfügen des Beitrags in die Datenbank
    $neuer_beitrag_id = wp_insert_post($post_data);

    // Überprüfe, ob das Einfügen erfolgreich war
    if ($neuer_beitrag_id) {
        echo "Beitrag erfolgreich erstellt! ID: $neuer_beitrag_id";
    } else {
        echo "Fehler beim Erstellen des Beitrags.";
    }
}

// Beispielaufruf
erstelle_neuen_beitrag('Neuer Beitragstitel', 'Inhalt des neuen Beitrags.');
?>