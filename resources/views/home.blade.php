@extends('layouts/main-layout') 


@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">azienda</th>
        <th scope="col">Stazione di partenza</th>
        <th scope="col">Stazione di arrivo</th>
        <th scope="col">Orario di partenza</th>
        <th scope="col">Orario di arrivo</th>
        <th scope="col">Codice treno</th>
        <th scope="col">Numero carrozze</th>
        <th scope="col">In orario</th>
        <th scope="col">Cancellato</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($trains as $train)
            <th scope="row">{{ $train->id }}</th>
            <td>{{ $train->azienda }}</td>
            <td>{{ $train->stazione_di_partenza }}</td>
            <td>{{ $train->stazione_di_arrivo }}</td>
            <td>{{ $train->orario_di_arrivo }}</td>
            <td>{{ $train->orario_di_arrivo }}</td>
            <td>{{ $train->codice_treno }}</td>
            <td>{{ $train->numero_carrozze }}</td> 
            <td>{{ $train->in_orario ? 'no' : 'si' }}</td> 
            <td>{{ $train->cancellato ? 'no' : 'si' }}</td> 
        </tr>
        @endforeach

    </tbody>
  </table>
@endsection