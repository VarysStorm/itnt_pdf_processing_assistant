<?php

function create_blog_post($newTitle, $newText) {

    $post_data = array(
        'post_title'    => $newTitle,
        'post_content'  => $newText,
        'post_status'   => 'publish', 
        'post_type'     => 'post',    
    );

    $msg = array(
        'message' => '',
        'status' => true

    );


    $new_post_id = wp_insert_post($post_data);


    if ($new_post_id) {
        $msg['message'] = "Beitrag erfolgreich erstellt! ID: $new_post_id";
    } else {
        $msg['message'] = "Fehler beim Erstellen des Beitrags.";
        $msg['status'] = false;
    }
}

if(isset ($_POST)){

    $newTitle = $_POST['title'];
    $newText = $_POST['text'];
    create_blog_post($newTitle, $newText);
    echo json_encode($msg);

} 
else{
    $msg['message'] = "Es wurde kein Beitrag erstellt. Es wurden keine Daten übergeben."
    $msg['status'] = false;
    echo json_encode($msg);
    }
?>