@extends('layouts.app')

<h1 class="p-5 text-danger">Trains:</h1>

<section class="tickets">
    <div class="container">
        <div class="row g-4">
            @forelse ($trains as $train)
                <div class="col-3">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <h4 class="card-title"><span class="text-danger">train code: </span>{{$train->train_code}}</h4>
                            <p class="card-text"><span class="text-danger">partenza: </span>{{$train->departure_station}}</p>
                            <p class="card-text"><span class="text-danger">arrivo: </span>{{$train->arrival_station}}</p>
                            <a href="{{$loop->index}}" class="btn btn-danger">info</a>
                        </div>
                    </div>
                </div>
            @empty
                <p>non ci sono treni da mostrare</p>
            @endforelse
        </div>
    </div>
</section>


