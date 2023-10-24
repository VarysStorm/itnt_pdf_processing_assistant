<?php
    function handle_pdf_upload() {
        if (isset($_FILES['pdf_file'])) {
            $uploaded_file = $_FILES['pdf_file'];
    
            $upload_overrides = array('test_form' => false);
            $movefile = wp_handle_upload($uploaded_file, $upload_overrides);
    
            if ($movefile && !isset($movefile['error'])) {
                $pdf_url = $movefile['url'];
    
                echo json_encode(array('pdf_url' => $pdf_url));
            } else {
                echo json_encode(array('error' => "Fehler beim Hochladen der PDF: {$movefile['error']}"));
            }
        }
    
        die();
    }
    
    add_action('wp_ajax_handle_pdf_upload', 'handle_pdf_upload');
    add_action('wp_ajax_nopriv_handle_pdf_upload', 'handle_pdf_upload');
?>