@extends('layouts.main')

@section('title', $comic->title)


@section('main-content')
<main>
    <div class="blu-separator">
        <div class="container">
            <figure class="comic-figure">
                <img src=" {{ $comic->thumb }}" alt="adv">
                <div class="comic-type">{{ $comic->type }}</div>
                <div class="vg">View gallery</div>
            </figure>
        </div>
    </div>
    <section id="comic-details" >
        <div class="upper-comic-details container" >
            <div class="upper-comic-generics">
                <h1>{{ $comic->title}}</h1>
                <div class="availability">
                    <div class="availability-left">
                        <h4>U.S. Price:  <span>{{ $comic->price}}</span></h4>
                        <h4>AVAILABLE</h4>
                    </div>
                    <div class="availability-right">
                        <h4>Check availability<h4>
                    </div>
                </div>
                <p>{{ $comic->description }}</p>
            </div>
            <figure class="advertisement">
                <img src=" {{ asset('images/adv.jpg')}}" alt="adv">
            </figure>
        </div>
        <div class="bottom-comic-details">
            <div class="container">
                <div class="bottom-comic-generics">
                    <div class="talents">
                        <h2>Talents</h2>
                        <div class="talents-box">
                            <h5>Art by:</h5>
                            <div class="artists-list">
                                <p>{{$comic->artists}}</p>
                            </div>
                        </div>
                        <div class="talents-box">
                            <h5>Written by:</h5>
                            <div class="writers-list">
                                <p>{{$comic->writers}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="specs">
                        <h2>Specs</h2>
                        <div class="specs-box">
                            <h5>Series:</h5>
                            <span>{{$comic->series}}</span>
                        </div>
                        <div class="specs-box">
                            <h5>U.S. Price:</h5>
                            <span>{{$comic->price}}</span>
                        </div>
                        <div class="specs-box">
                            <h5>On Sale Date:</h5>
                            <span>{{$comic->sale_date}}</span>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="{{route('comics.edit', $comic->id)}}"><button type="submit" class="btn btn-primary">Edit</button></a>
                </div>
            </div>
            
        </div>
    </section>
</main>



@endsection