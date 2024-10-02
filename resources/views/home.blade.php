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
            <h2 class="text-center">{{ $train->company }}</h2>
            <ul class="list-unstyled">
                <li>{{ $train->departure_station }}</li>
                <li><hr>{{ $train->arrival_station }}</li>
                <li><hr>{{ $train->departure_time }}</li>
                <li><hr>{{ $train->arrival_time }}</li>
                <li><hr>{{ $train->train_code }}</li>
                <li><hr>{{ $train->n_carriages }}</li>
                <li><hr>{{ $train->on_time }}</li>
                <li><hr>{{ $train->cancelled }}</li>
            </ul>
            
        </div>
        @endforeach
    </div>
</div>
@endsection