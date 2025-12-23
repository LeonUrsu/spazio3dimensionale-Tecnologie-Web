<?php

namespace Database\Seeders;

use App\Models\Centro;
use App\Models\Malsol;
use App\Models\Prodotto;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Creazione Admin
        User::create([
            'role' => 'isAdmin',
            'username' => 'adminadmin',
            'password' => 'hJ9ShJ9S',
        ]);

        // Creazione Centro Assistenza
        Centro::create([
            'nome' => '3D Tech Solutions Italy',
            'stato' => 'Italia',
            'città' => 'Ancona',
            'cap' => '60121',
            'via' => 'Corso Buenos Aires',
            'civico' => '45/A',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Creazione Tecnico Azienda
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'staffstaff',
            'password' => 'hJ9ShJ9S',
        ]);
        
        // Creazione Tecnico Centro Assistenza
        User::create([
            'role' => 'isTecnicoCentro',
            'username' => 'tecntecn',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '1'
        ]);

        Prodotto::create([
            'marca' => 'TreDimensionale',
            'modello' => 'Ember 3',
            'descrizione' => '',
            'modalità_installazione' => 'Il montaggio della Ember 3 è progettato per essere completato in soli 20 minuti. La stampante arriva in tre moduli principali pre-assemblati. Basta fissare il telaio alla base con le viti incluse, collegare i cavi pre-etichettati e inserire il sensore di filamento. Non sono richieste saldature o conoscenze elettroniche.',
            'prezzo' => '200',
            'dimensioni' => '40x70x100[cm^3]',
            'peso' => '10',
            'consumo_watt' => '200',
            'volume_stampa' => '24x24x24[cm^3]',
        ]);

        Prodotto::create([
            'marca' => 'TreDimensionale',
            'modello' => 'Photon Mono MS5s',
            'descrizione' => 'Stampante a resina con risoluzione 12K per dettagli microscopici, ideale per gioielleria e miniature.',
            'modalità_installazione' => 'Pronta all\'uso in 5 minuti. È sufficiente installare il piatto di stampa e riempire la vaschetta (Vat). Il livellamento è completamente automatico grazie ai sensori meccanici integrati. Richiede un ambiente ventilato e l\'uso di DPI inclusi.',
            'prezzo' => '450',
            'dimensioni' => '100x55x50[cm^3]',
            'peso' => '9',
            'consumo_watt' => '100',
            'volume_stampa' => '21.8x12.3x20[cm^3]',
        ]);

        Prodotto::create([
            'marca' => 'TreDimensionale',
            'modello' => 'GP1S',
            'descrizione' => 'Sistema CoreXY ultra-veloce con camera chiusa, perfetta per stampare materiali tecnici come ABS e Nylon.',
            'modalità_installazione' => 'Esperienza Plug-and-Play definitiva. Una volta rimossi i blocchi di sicurezza, la stampante esegue un auto-test di 15 minuti. L\'intera configurazione avviene tramite l\'App ufficiale via Wi-Fi.',
            'prezzo' => '750',
            'dimensioni' => '50x50x100[cm^3]',
            'peso' => '13',
            'consumo_watt' => '350',
            'volume_stampa' => '25.6x25.6x25.6[cm^3]',
        ]);

        Prodotto::create([
            'marca' => 'TreDimensionale',
            'modello' => 'Mamba 4 Max',
            'descrizione' => 'Stampante gigante per chi ha bisogno di stampare caschi, cosplay o prototipi industriali in un unico pezzo.',
            'modalità_installazione' => 'Richiede circa 45 minuti per il montaggio a causa delle dimensioni. Il telaio rinforzato va fissato alla base con 8 bulloni ad alta resistenza. Necessita di un piano di appoggio stabile di almeno 1 metro quadrato.',
            'prezzo' => '500',
            'dimensioni' => '40x60x100[cm^3]',
            'peso' => '21',
            'consumo_watt' => '500',
            'volume_stampa' => '42x42x50[cm^3]',
        ]);

        Malsol::create([
            'mal' => 'Distacco del pezzo dal piano durante la stampa (Warping).',
            'sol' => 'Il problema è solitamente causato da uno sbalzo termico o da un piano non calibrato. Tecnicamente è necessario: 1) Pulire il piano con alcool isopropilico per rimuovere residui di grasso. 2) Verificare che il primo layer sia ben schiacciato (Z-Offset). 3) Aumentare la temperatura del piano di 5-10°C o utilizzare una barriera (brim) nello slicer per aumentare la superficie di contatto.',
            'prodotto_id' => '1',
        ]);

        Malsol::create([
            'mal' => 'L\'estrusore scatta e il filamento non esce correttamente (Sotto-estrusione).',
            'sol' => 'Il blocco è spesso dovuto a detriti nell\'ugello o a una temperatura troppo bassa. La soluzione tecnica prevede: 1) Eseguire un "Atomic Pull" (o Cold Pull) per rimuovere i residui interni. 2) Controllare che la ventola del dissipatore funzioni correttamente per evitare il "heat creep". 3) Se il problema persiste, smontare l\'ugello e sostituirlo, assicurandosi che il tubo in PTFE sia perfettamente a contatto con la parte superiore dell\'ugello per evitare sacche di materiale fuso.',
            'prodotto_id' => '2',
        ]);

        Malsol::create([
            'mal' => 'Presenza di sottili filamenti di plastica tra le parti separate del modello.',
            'sol' => 'Questo difetto dipende da una gestione errata della pressione interna all\'ugello durante gli spostamenti. Per risolvere: 1) Ottimizzare i parametri di retrazione nello slicer, aumentando la distanza di retrazione (es. 5-6mm per Bowden, 0.8-1.5mm per Direct Drive). 2) Attivare la funzione "Combing" per evitare spostamenti sopra aree vuote. 3) Verificare che il filamento non sia umido; se necessario, essiccare il materiale in un fornetto dedicato a 45-50°C per alcune ore.',
            'prodotto_id' => '3',
        ]);
    }
}
