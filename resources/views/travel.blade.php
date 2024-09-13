{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Destinazione</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Data di partenza</th>
                    <th scope="col">Data di ritorno</th>
                    <th scope="col">Posti disponibili</th>
                    <th scope="col">Volo Incluso</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($travel as $travel)
                    <tr>
                        <td>{{ $travel->name }}</td>
                        <td>{{ $travel->destination }}</td>
                        <td>{{ $travel->description }}</td>
                        <td>{{ $travel->price }}</td>
                        <td>{{ $travel->departure_date }}</td>
                        <td>{{ $travel->return_date }}</td>
                        <td>{{ $travel->available_seats }}</td>
                        <td>{!! $travel->getIsIncludedFlight() !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection


    @section('titlePage')
        chi siamo
    @endsection
