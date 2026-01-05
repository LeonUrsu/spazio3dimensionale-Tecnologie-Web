 @props(['rottaVediTecnico', 'rottaFormCreaTecnico' ,'tecnici'])
 <div>
     {{ Breadcrumbs::render() }}
     <form action="{{route($rottaFormCreaTecnico)}}" method="GET"> <button type="submit">Crea Tecnico</button></form>
     @foreach ($tecnici as $tecnico)
     <h2>
         <h4>id : {{$tecnico->id}}</h4>
         <h4>nome : {{$tecnico->nome}}</h4>
         <h4>cognome : {{$tecnico->cognome}}</h4>
         <form action="{{route($rottaVediTecnico, $tecnico->id)}}" method="GET">
             <button type="submit">Vedi</button>
         </form>

     </h2>
     <br>
     @endforeach
     <div>
         {{ $tecnici->links() }}
     </div>
 </div>