@extends('layouts.app');

@section('content')
    <h1>Lista treni</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Codice Treno</th>
                <th scope="col">Destinazione</th>
                <th scope="col">Arrivo</th>
                <th scope="col">Agenzia</th>
                <th scope="col">Orario Partenza</th>
                <th scope="col">Orario Arrivo</th>
                <th scope="col">Posti disponibili</th>
                <th scope="col">In orario</th>
                <th scope="col">Cancellato</th>



            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
                <th scope="row">{{$train->train_code}}</th>
                <td>{{$train->arrival_station}}</td>
                <td>{{$train->departure_station}}</td>
                <td>{{$train->agency}}</td>
                <td>{{$train->departure_time}}</td>
                <td>{{$train->arrival_time}}</td>
                <td>{{$train->seats_available}}</td>
                <td>{{$train->on_time ? 'in orario' : 'in ritardo'}}</td>
                <td>{{$train->cancelled ? 'cancellato' : ''}}</td>


            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
