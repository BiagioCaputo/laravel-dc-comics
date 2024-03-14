@extends('layouts.main')

@section('title', 'New Comic')

@section('main-content')

<main>
    <section id="create-section container">
        <div class="form-box">
            {{-- Controllo se ci sono errori e se ci fossero li elenco in un ul--}}
            @if ($errors->any())
            <div class="alert">
            <h4>Attenzione! Riempire correttamente i campi:</h4>
            <ul>
                @foreach ($errors->all() as $error)
                <li>-{{$error}}</li>    
                @endforeach
            </ul>
            </div>
            @endif
            {{--Invio i dati del form a comics.store--}}
            <form action="{{ route('comics.store')}}" method="POST">
            @csrf 
            <div class="form-create-comic">
                <label for="title">Titolo comic: </label>
                <input type="text" name="title" id="title" placeholder="" value="{{old('title', '')}}">
            </div>
            <div class="form-create-comic">
                <label for="description">Descrizione comic: </label>
                <input type="textarea" name="description" id="description" placeholder="" value="{{old('description', '')}}">
            </div>
            <div class="form-create-comic">
                <label for="thumb">Immagine comic: </label>
                <input type="text" name="thumb" id="thumb" placeholder="" value="{{old('thumb', '')}}">
            </div>
            <div class="form-create-comic">
                <label for="price">Prezzo comic: </label>
                <input type="text" name="price" id="price" placeholder="" value="{{old('price', '')}}">
            </div>
            <div class="form-create-comic">
                <label for="series">Serie comic: </label>
                <input type="text" name="series" id="series" placeholder="" value="{{old('series', '')}}">
            </div>
            <div class="form-create-comic">
                <label for="sale_date">Data di vendita comic: </label>
                <input type="text" name="sale_date" id="sale_date" placeholder="" value="{{old('sale_date', '')}}">
            </div>
            <div class="form-create-comic">
                <label for="type">Tipo comic: </label>
                <input type="text" name="type" id="type" placeholder="" value="{{old('type', '')}}">
            </div>
            <div class="form-create-comic">
                <label for="artists">Artisti comic: </label>
                <input type="text" name="artists" id="artists" placeholder="" value="{{old('artists', '')}}">
            </div>
            <div class="form-create-comic">
                <label for="writers">Scrittori comic: </label>
                <input type="text" name="writers" id="writers" placeholder="" value="{{old('writers', '')}}">
            </div>
            <div class="form-create-comic">
                <input type="submit" style="width:100px"/>
            </div>
            
            </form>
        </div>
    </section>
</main>

@endsection