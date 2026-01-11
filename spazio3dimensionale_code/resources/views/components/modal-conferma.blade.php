{{-- resources/views/components/modal-conferma.blade.php --}}
<div id="customConfirm" class="modal-overlay" style="display:none;">
    <div class="modal-content">
        <h3 id="modalTitle">Conferma</h3>
        <p id="modalMessage">Sei sicuro di voler procedere?</p>
        <div class="modal-buttons">
            <button id="cancelBtn" class="btn btn-secondary">Annulla</button>
            <button id="confirmBtn" class="btn btn-danger">Sì, procedi</button>
        </div>
    </div>
</div>

<style>
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        display: none;
        /* Sarà flex tramite JS */
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .modal-content {
        background: white;
        padding: 30px;
        border-radius: 12px;
        text-align: center;
        max-width: 400px;
        width: 90%;
    }

    .modal-buttons {
        margin-top: 20px;
        display: flex;
        gap: 15px;
        justify-content: center;
    }
</style>