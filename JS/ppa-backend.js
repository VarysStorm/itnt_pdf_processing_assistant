jQuery( document ).ready(function() {
    console.log( "test" );

    jQuery('#ppa-w-b-2').html('PDF Canva Box');
    jQuery('#ppa-w-b-3').html('Beitrags Generierung Box');
});

function processPDF(){
    var pdfUrl = ''; // Setze die PDF-URL hier

// Verwende eine externe JS-Bibliothek (z.B. jQuery) oder lade pdf.js direkt in HTML
// Hier wird ein Beispiel mit jQuery gezeigt:
    jQuery.getScript('https://unpkg.com/pdfjs-dist@2.10.377/build/pdf.js', function () {
        jQuery.getScript('https://unpkg.com/pdfjs-dist@2.10.377/build/pdf.worker.js', function () {
        // Lese die Daten aus dem PDF aus
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