<?php

namespace Database\Seeders;

use App\Models\Malsol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MalSolProdottiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Malsol::create([
            'mal' => 'Distacco del pezzo dal piano durante la stampa (Warping).',
            'sol' => 'Il problema è solitamente causato da uno sbalzo termico o da un piano non calibrato. Tecnicamente è necessario: 1) Pulire il piano con alcool isopropilico per rimuovere residui di grasso. 2) Verificare che il primo layer sia ben schiacciato (Z-Offset). 3) Aumentare la temperatura del piano di 5-10°C o utilizzare una barriera (brim) nello slicer per aumentare la superficie di contatto.',
            'prodotto_id' => 3,
        ]);

        Malsol::create([
            'mal' => 'L\'estrusore scatta e il filamento non esce correttamente (Sotto-estrusione).',
            'sol' => 'Il blocco è spesso dovuto a detriti nell\'ugello o a una temperatura troppo bassa. La soluzione tecnica prevede: 1) Eseguire un "Atomic Pull" (o Cold Pull) per rimuovere i residui interni. 2) Controllare che la ventola del dissipatore funzioni correttamente per evitare il "heat creep". 3) Se il problema persiste, smontare l\'ugello e sostituirlo, assicurandosi che il tubo in PTFE sia perfettamente a contatto con la parte superiore dell\'ugello per evitare sacche di materiale fuso.',
            'prodotto_id' => 1,
        ]);

        Malsol::create([
            'mal' => 'Presenza di sottili filamenti di plastica tra le parti separate del modello.',
            'sol' => 'Questo difetto dipende da una gestione errata della pressione interna all\'ugello durante gli spostamenti. Per risolvere: 1) Ottimizzare i parametri di retrazione nello slicer, aumentando la distanza di retrazione (es. 5-6mm per Bowden, 0.8-1.5mm per Direct Drive). 2) Attivare la funzione "Combing" per evitare spostamenti sopra aree vuote. 3) Verificare che il filamento non sia umido; se necessario, essiccare il materiale in un fornetto dedicato a 45-50°C per alcune ore.',
            'prodotto_id' => 2,
        ]);

        // 1 - Sottoestrusione
        Malsol::create([
            'mal' => 'Il pezzo presenta fori o pareti fragili (Sottoestrusione).',
            'sol' => 'Spesso causato da un ugello parzialmente ostruito o temperatura troppo bassa. Soluzioni: 1) Aumentare la temperatura di estrusione di 5 gradi. 2) Controllare che la molla dell estrusore non scivoli sul filo. 3) Effettuare una pulizia "Atomic Pull" per rimuovere residui interni.',
            'prodotto_id' => 1,
        ]);

        // 2 - Stringing (Fili di plastica)
        Malsol::create([
            'mal' => 'Presenza di fili sottili tra le parti del modello (Stringing).',
            'sol' => 'Causato dalla fuoriuscita di materiale durante gli spostamenti a vuoto. Tecnicamente: 1) Aumentare la distanza di retrazione nello slicer. 2) Incrementare la velocità di spostamento (Travel Speed). 3) Ridurre leggermente la temperatura per rendere il materiale meno fluido.',
            'prodotto_id' => 1,
        ]);

        // 3 - Layer Shifting (Disallineamento)
        Malsol::create([
            'mal' => 'Gli strati della stampa risultano scalati o disallineati (Layer Shifting).',
            'sol' => 'Problema meccanico dovuto a movimenti bruschi. Interventi: 1) Tensionare le cinghie degli assi X e Y. 2) Verificare che le pulegge dei motori siano ben strette. 3) Ridurre le accelerazioni eccessive nel firmware o nello slicer.',
            'prodotto_id' => 3,
        ]);

        // 4 - Z-Wobble (Onde sulle pareti)
        Malsol::create([
            'mal' => 'Pareti esterne con pattern ondulatorio regolare (Z-Wobble).',
            'sol' => 'Dovuto a un asse Z non perfettamente dritto o accoppiatori allentati. Azioni: 1) Pulire e lubrificare la barra filettata. 2) Controllare che il motore dell asse Z sia perpendicolare al telaio. 3) Verificare l integrità dei cuscinetti lineari.',
            'prodotto_id' => 4,
        ]);

        // 5 - Elephant Foot (Base allargata)
        Malsol::create([
            'mal' => 'I primi strati del modello sono più larghi del dovuto (Elephant Foot).',
            'sol' => 'Eccessiva pressione o calore alla base. Soluzioni: 1) Calibrare meglio il livellamento del piano per non schiacciare troppo il primo layer. 2) Diminuire la temperatura del piano dopo i primi 3 strati. 3) Usare il parametro "Initial Layer Expansion" negativo nello slicer.',
            'prodotto_id' => 5,
        ]);

        // 6 - Ghosting/Ringing (Echi sui dettagli)
        Malsol::create([
            'mal' => 'Effetto eco o vibrazioni vicino agli angoli dei fori (Ghosting).',
            'sol' => 'Causato dalle vibrazioni del telaio ad alte velocità. Tecnicamente: 1) Fissare la stampante su una superficie solida. 2) Ridurre il valore di "Jerk" nelle impostazioni. 3) Diminuire la velocità di stampa delle pareti esterne.',
            'prodotto_id' => 5,
        ]);

        // 7 - Ugello Otturato
        Malsol::create([
            'mal' => 'Nessun materiale fuoriesce dall ugello durante la stampa.',
            'sol' => 'Ostruzione totale. Soluzioni: 1) Riscaldare l ugello oltre la temperatura di esercizio e spingere il filo manualmente. 2) Sostituire l ugello se il problema persiste. 3) Verificare che la ventola di raffreddamento dell hotend funzioni correttamente.',
            'prodotto_id' => 3,
        ]);

        // 8 - Overheating (Pezzi deformati)
        Malsol::create([
            'mal' => 'I dettagli piccoli appaiono sciolti o deformati (Overheating).',
            'sol' => 'Raffreddamento insufficiente. Azioni: 1) Impostare la ventola di raffreddamento al 100% dopo il primo layer. 2) Diminuire la velocità per i layer con tempo di stampa inferiore a 10 secondi. 3) Stampare due oggetti contemporaneamente per dare tempo al materiale di freddarsi.',
            'prodotto_id' => 4,
        ]);

        // 9 - Bolle sulla superficie (Zits/Blobs)
        Malsol::create([
            'mal' => 'Presenza di piccoli grumi o bolle sulla superficie esterna.',
            'sol' => 'Spesso accade al cambio di layer (Cucitura Z). Tecnicamente: 1) Impostare l allineamento della cucitura Z su "Nascosta" o "Angolo più acuto". 2) Verificare l impostazione di "Coasting" per scaricare la pressione prima della fine del loop.',
            'prodotto_id' => 4,
        ]);

        // 10 - Pillowing (Buchi nel top layer)
        Malsol::create([
            'mal' => 'La parte superiore presenta fori tra le linee di riempimento (Pillowing).',
            'sol' => 'Scarso supporto interno o raffreddamento. Soluzioni: 1) Aumentare la percentuale di Infill (almeno 15%). 2) Incrementare il numero di layer superiori (Top Solid Layers) a minimo 4 o 5. 3) Migliorare il flusso della ventola di raffreddamento.',
            'prodotto_id' => 5,
        ]);
    }
}
