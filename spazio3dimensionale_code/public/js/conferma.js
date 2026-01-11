document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('customConfirm');
    const confirmBtn = document.getElementById('confirmBtn');
    const cancelBtn = document.getElementById('cancelBtn');
    let formInAttesa = null;

    //Ascolta l'invio di tutti i form con classe form-conferma
    document.querySelectorAll('.form-conferma').forEach(form => {
        form.addEventListener('submit', function (e) {
            if (!form.dataset.confermato) {
                e.preventDefault();
                formInAttesa = this;
                modal.style.display = 'flex';
            }
        });
    });

    //Se l'utente clicca Si nel modal
    confirmBtn.addEventListener('click', function () {
        if (formInAttesa) {
            formInAttesa.dataset.confermato = "true";
            formInAttesa.submit();
        }
    });

    //Se clicca Annulla
    cancelBtn.addEventListener('click', function () {
        modal.style.display = 'none';
        formInAttesa = null;
    });
});