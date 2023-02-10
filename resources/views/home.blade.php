@extends('layouts.app')

<h2>trains</h2>

{{-- @forelse ($trains as $train)
    <div class="col-3">
        <div class="card bg-dark">
            <div class="card-body">
                <h4 class="card-title">{{$train->train_code}}</h4>
                <p class="card-text">{{$train->departure_station}}</p>
                <p class="card-text">{{$train->arrival_station}}</p>
                <a href="{{$loop->index}}" class="btn">info</a>
            </div>
        </div>
    </div>
@empty
    <p>non ci sono treni da mostrare</p>
@endforelse --}}