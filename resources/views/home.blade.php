{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h1>Home</h1>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione Di Partenza</th>
                <th scope="col">Stazione Di Arrivo</th>
                <th scope="col">Data Di Partenza</th>
                <th scope="col">Orario Di Partenza</th>
                <th scope="col">Orario Di Arrivo</th>
                <th scope="col">Codice Treno</th>
                <th scope="col">Numero Carrozze</th>
                <th scope="col">In Orario</th>
                <th scope="col">Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->agency }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_date }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->train_code }}</td>
                    <td>{{ $train->number_of_carriages }}</td>
                    <td>{!! $train->getOnTime() !!}</td>
                    <td>{!! $train->getCancelled() !!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


@section('titlePage')
    home
@endsection
