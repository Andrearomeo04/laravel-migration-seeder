@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">BOOL TRAINLINE</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row g-5">
        @foreach ($trains as $train)
        <div class="col-4 border border-black rounded">
            <h2 class="text-center">Compagnia:{{ $train->company }}</h2>
            <ul class="list-unstyled">
                <li>Stazione di partenza: {{ $train->departure_station }}</li>
                <li><hr>Stazione di arrivo: {{ $train->arrival_station }}</li>
                <li><hr>Orario di partenza: {{ $train->departure_time }}</li>
                <li><hr>Orario di arrivo: {{ $train->arrival_time }}</li>
                <li><hr>Codice Treno: {{ $train->train_code }}</li>
                <li><hr>Numero Carrozze: {{ $train->n_carriages }}</li>
                <li><hr>in orario: {{ $train->on_time? 'si!' : 'no' }}</li>
                <li><hr>Cancellato: {{ $train->cancelled? 'si' : 'no' }}</li>
            </ul>
            
        </div>
        @endforeach
    </div>
</div>
@endsection