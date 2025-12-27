<?php

namespace Database\Seeders;

use App\Models\Prodotto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdottiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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

        Prodotto::create([
            'marca' => 'TreDimensionale',
            'modello' => 'Pixel 8K Pro',
            'descrizione' => 'Stampante a resina con risoluzione ultra-definita per miniature dettagliate, gioielleria e modelli dentali di alta precisione.',
            'modalità_installazione' => 'Richiede il livellamento del piatto di stampa e l inserimento della vaschetta in teflon. Operazione da eseguire in ambiente ventilato con protezioni. Tempo stimato di preparazione: 15 minuti.',
            'prezzo' => '420',
            'dimensioni' => '30x30x45[cm^3]',
            'peso' => '9',
            'consumo_watt' => '120',
            'volume_stampa' => '19x12x20[cm^3]',
        ]);
    }
}
