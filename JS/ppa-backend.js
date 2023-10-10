jQuery( document ).ready(function() {
    console.log( "test" );

    jQuery('#ppa-w-b-1').html(uploadConsturctor());
    jQuery('#ppa-w-b-2').html('PDF Canva Box');
    jQuery('#ppa-w-b-3').html('Beitrags Generierung Box');
});

function uploadConsturctor(){
    html = '';
    html += '<form action="#" method="post" enctype="multipart/form-data">';
        html += '<input type="file" name="pdf_file" accept=".pdf">';
        html += '<input type="submit" value="PDF hochladen">';
    html += '</form>';
}
