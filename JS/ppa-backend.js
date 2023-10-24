jQuery( document ).ready(function() {
    console.log( "test" );

    jQuery('#ppa-w-b-2').html('PDF Canva Box');
    jQuery('#ppa-w-b-3').html('Beitrags Generierung Box');


    jQuery('#pdfUploadForm').submit(function (e) {
        e.preventDefault();
    
        var formData = new FormData(this);
    
        formData.append('action', 'handle_pdf_upload');
    
        jQuery.ajax({
            url: '/ajax/handle-pdf-upload.php',
            type: 'POST',
            data: formData,
            success: function (response) {
                console.log('Antwort:', response);
            },
            error: function (xhr, status, error) {
                console.error('Fehler beim Upload:', error);
            }
        });
    });
})
function processPDF(){
    var pdfUrl = ''; 

    jQuery.getScript('https://unpkg.com/pdfjs-dist@2.10.377/build/pdf.js', function () {
        jQuery.getScript('https://unpkg.com/pdfjs-dist@2.10.377/build/pdf.worker.js', function () {

            pdfjsLib.getDocument(pdfUrl).then(function (pdf) {
             for (var pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
                 pdf.getPage(pageNum).then(function (page) {
                      page.getTextContent().then(function (textContent) {
                         console.log('Seite ' + pageNum + ':', textContent);
                     });
                    });
                }
            }).catch(function (error) {
              console.error('Fehler beim Laden des PDFs:', error);
         });
        });
    });
}