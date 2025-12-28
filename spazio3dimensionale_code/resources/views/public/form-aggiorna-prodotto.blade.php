<x-base>

    <form action="{{route('prodotto.aggiorna, $prodotto->id')}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="marca" placeholder="marca">
        <input type="text" name="modello" placeholder="modello">
        <input type="text" name="descrizione" placeholder="descrizione">
        <input type="text" name="modalità_installazione" placeholder="modalità_installazione">
        <input type="text" name="prezzo" placeholder="prezzo">
        <input type="text" name="dimensioni" placeholder="dimensioni">
        <input type="text" name="peso" placeholder="peso">
        <input type="text" name="consumo_watt" placeholder="consumo_watt">
        <input type="text" name="volume_stampa" placeholder="volume_stampa">
        <button method="submit">Salva</button>
    </form>
</x-base>