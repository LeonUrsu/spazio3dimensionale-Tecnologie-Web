//Metodo per gestire le funzionalità ajax, usato per l'iniezione delle componenti della lista dei prodotti del catalogo
$(document).ready(function () {
    // Gestione della ricerca
    $('#form-ricerca').on('submit', function (e) {
        e.preventDefault();
        let url = $(this).attr('action');
        let dati = $(this).serialize();
        $.ajax({
            url: url,
            data: dati,
            success: function (response) {
                $('#risultati-lista').html(response);
            }
        });
    });

    // Gestione della paginazione (fondamentale .on per elementi dinamici)
    $(document).on('click', '#pagination-container a', function (e) {
        e.preventDefault();
        let url = $(this).attr('href');
        $.ajax({
            url: url,
            success: function (response) {
                $('#risultati-lista').html(response);
            }
        });
    });
});





