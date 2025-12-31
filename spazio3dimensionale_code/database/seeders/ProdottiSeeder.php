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
            'descrizione' => 'Stampante a resina con risoluzione 12K per dettagli microscopici, ideale per gioielleria e miniature.',
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

        Prodotto::create([
            'marca' => 'TreDimensionale',
            'modello' => 'Fusion 300 XT',
            'descrizione' => 'Stampante FDM industriale con camera riscaldata per filamenti tecnici come carbonio e nylon ad alta resistenza termica.',
            'modalità_installazione' => 'Necessita di calibrazione automatica degli assi e montaggio del supporto bobina esterno. Collegare a presa terra dedicata. Tempo stimato di preparazione: 20 minuti.',
            'prezzo' => '850',
            'dimensioni' => '55x55x65[cm^3]',
            'peso' => '22',
            'consumo_watt' => '350',
            'volume_stampa' => '30x30x40[cm^3]',
        ]);

        Prodotto::create([
            'marca' => 'TreDimensionale',
            'modello' => 'BeamCutter G3',
            'descrizione' => 'Incisore laser a diodo per taglio legno e incisione metalli con sistema di protezione oculare e assistenza ad aria compressa.',
            'modalità_installazione' => 'Richiede il montaggio del telaio in alluminio e l allineamento dei motori passo-passo. Verificare l aspirazione fumi. Tempo stimato di preparazione: 45 minuti.',
            'prezzo' => '590',
            'dimensioni' => '60x50x25[cm^3]',
            'peso' => '12',
            'consumo_watt' => '80',
            'volume_stampa' => '40x40x0[cm^3]',
        ]);

        Prodotto::create([
            'marca' => 'TreDimensionale',
            'modello' => 'AquaJet 4000',
            'descrizione' => 'Sistema di pulizia a ultrasuoni per la rimozione dei residui di resina e finitura superficiale di pezzi meccanici complessi.',
            'modalità_installazione' => 'Riempire la vasca con liquido detergente specifico e connettere il tubo di scarico posteriore. Avvio rapido tramite pannello. Tempo stimato di preparazione: 10 minuti.',
            'prezzo' => '210',
            'dimensioni' => '35x25x30[cm^3]',
            'peso' => '5',
            'consumo_watt' => '200',
            'volume_stampa' => '25x15x15[cm^3]',
        ]);

        Prodotto::create([
            'marca' => 'TreDimensionale',
            'modello' => 'Spark-Core V2',
            'descrizione' => 'Saldatrice inverter portatile per piccoli lavori di carpenteria leggera e riparazioni elettroniche con controllo digitale dell arco.',
            'modalità_installazione' => 'Inserimento dei cavi di potenza negli appositi morsetti e regolazione della maschera protettiva. Controllo tensione rete. Tempo stimato di preparazione: 5 minuti.',
            'prezzo' => '175',
            'dimensioni' => '40x15x25[cm^3]',
            'peso' => '7',
            'consumo_watt' => '1500',
            'volume_stampa' => '0x0x0[cm^3]',
        ]);

        Prodotto::create([
            'marca' => 'TreDimensionale',
            'modello' => 'Metal-Mini S1',
            'descrizione' => 'Micro-stampante per polveri metalliche con tecnologia laser SLS per la creazione di componenti aerospaziali miniaturizzati.',
            'modalità_installazione' => 'Setup in camera bianca con saturazione di gas argon. Caricamento polveri tramite guanti isolanti integrati. Tempo stimato di preparazione: 60 minuti.',
            'prezzo' => '4500',
            'dimensioni' => '80x70x120[cm^3]',
            'peso' => '95',
            'consumo_watt' => '1200',
            'volume_stampa' => '10x10x10[cm^3]',
        ]);

        Prodotto::create([
            'marca' => 'TreDimensionale',
            'modello' => 'Recycle-Bot 5',
            'descrizione' => 'Estrusore domestico per la trasformazione di scarti plastici in nuovo filamento pronto all uso per stampanti 3D consumer.',
            'modalità_installazione' => 'Fissaggio della trafila al banco da lavoro e riscaldamento dell ugello di estrusione. Monitoraggio del diametro filo. Tempo stimato di preparazione: 30 minuti.',
            'prezzo' => '320',
            'dimensioni' => '45x20x25[cm^3]',
            'peso' => '11',
            'consumo_watt' => '450',
            'volume_stampa' => '0x0x0[cm^3]',
        ]);

        Prodotto::create([
            'marca' => 'TreDimensionale',
            'modello' => 'Optic-Point X',
            'descrizione' => 'Scanner a luce strutturata per la digitalizzazione di oggetti fisici con precisione al micron e generazione automatica di mesh.',
            'modalità_installazione' => 'Posizionamento del treppiede e calibrazione delle lenti tramite pannello a scacchiera fornito. Connessione USB 3.0. Tempo stimato di preparazione: 15 minuti.',
            'prezzo' => '1200',
            'dimensioni' => '20x20x40[cm^3]',
            'peso' => '3',
            'consumo_watt' => '45',
            'volume_stampa' => '50x50x50[cm^3]',
        ]);

        Prodotto::create([
            'marca' => 'TreDimensionale',
            'modello' => 'Vacu-Press M1',
            'descrizione' => 'Termoformatrice a vuoto per la creazione di stampi in plastica e packaging personalizzato tramite fogli termo-sensibili.',
            'modalità_installazione' => 'Accensione delle resistenze ceramiche e controllo della pompa del vuoto interna. Inserimento del foglio nel telaio. Tempo stimato di preparazione: 12 minuti.',
            'prezzo' => '280',
            'dimensioni' => '40x40x35[cm^3]',
            'peso' => '15',
            'consumo_watt' => '1100',
            'volume_stampa' => '30x30x15[cm^3]',
        ]);

        Prodotto::create([
            'marca' => 'TreDimensionale',
            'modello' => 'Plot-Trace 50',
            'descrizione' => 'Plotter di precisione per la prototipazione rapida di circuiti stampati flessibili tramite deposizione di inchiostro conduttivo.',
            'modalità_installazione' => 'Installazione della testina piezoelettrica e caricamento del software di conversione file Gerber. Pulizia rulli. Tempo stimato di preparazione: 25 minuti.',
            'prezzo' => '990',
            'dimensioni' => '50x40x20[cm^3]',
            'peso' => '8',
            'consumo_watt' => '100',
            'volume_stampa' => '21x29x1[cm^3]',
        ]);

        Prodotto::create([
            'marca' => 'TreDimensionale',
            'modello' => 'Casting-Station',
            'descrizione' => 'Forno fusorio compatto per leghe leggere con sistema di colata centrifuga per gioielleria e piccoli componenti meccanici.',
            'modalità_installazione' => 'Posizionamento su superficie ignifuga e collegamento al sistema di ventilazione forzata. Indossare guanti termici. Tempo stimato di preparazione: 40 minuti.',
            'prezzo' => '1450',
            'dimensioni' => '45x45x60[cm^3]',
            'peso' => '35',
            'consumo_watt' => '2200',
            'volume_stampa' => '15x15x15[cm^3]',
        ]);
    }
}
