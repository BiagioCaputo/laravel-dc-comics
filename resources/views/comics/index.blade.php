

@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')

<main>
    <div class="main-box">
        <div class="container">
            <div id="current-series" class="blue-spacing">CURRENT SERIES</div>
            <div class="cards-container">
                <div class="row">
                    @foreach($comics as $comic)
                    <div class="col-2">
                        <div class="comic-card">
                            <a href="{{ route('comics.show', $comic->id)}}">
                                <figure>
                                    <img src="{{ $comic->thumb}}" alt="{{ $comic->title}}">
                                </figure>
                                <h4>{{ $comic->title}}</h4>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="box-button">
                    <a href="{{ route('comics.create')}}"><button class="blue-spacing">Add comic</button></a>
                </div>
    
    
            </div>
        </div>
    </div>
</main>

@endsection