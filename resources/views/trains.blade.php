@extends('layouts.app')

@section('content')
    <h1>Lista dei Treni</h1>
    <!DOCTYPE html>
<html>
<head>
    <title>TRENI</title>
</head>
<body>
    <h1>Treni in partenza oggi</h1>
    <table>
        <tr>
            <th>Azienda</th>
            <th>Stazione di Partenza</th>
            <th>Stazione di Arrivo</th>
            <th>Orario di Partenza</th>
            <th>Orario di Arrivo</th>
            <th>Codice Treno</th>
            <th>Numero Carrozze</th>
            <th>In Orario</th>
            <th>Cancellato</th>
        </tr>
        @foreach ($trains as $train)
        <tr>
            <td>{{ $train->azienda }}</td>
            <td>{{ $train->stazione_partenza }}</td>
            <td>{{ $train->stazione_arrivo }}</td>
            <td>{{ $train->orario_partenza }}</td>
            <td>{{ $train->orario_arrivo }}</td>
            <td>{{ $train->codice_treno }}</td>
            <td>{{ $train->numero_carrozze }}</td>
            <td>{{ $train->in_orario ? 'Sì' : 'No' }}</td>
            <td>{{ $train->cancellato ? 'Sì' : 'No' }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>

@endsection