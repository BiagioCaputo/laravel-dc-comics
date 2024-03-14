@extends('layouts.main')

@section('title', 'New Comic')

@section('main-content')

<main>
    <section id="create-section container">
        <div class="form-box">
            <form action="" method="POST">
            @csrf 
            <div class="form-create-comic">
                <label for="title">Titolo comic</label>
                <input type="text" name="title" id="title" placeholder="">
            </div>
            <div class="form-create-comic">
                <label for="description">Descrizione comic</label>
                <input type="text" name="description" id="description" placeholder="">
            </div>
            <div class="form-create-comic">
                <label for="thumb">Immagine comic</label>
                <input type="text" name="thumb" id="thumb" placeholder="">
            </div>
            <div class="form-create-comic">
                <label for="price">Prezzo comic</label>
                <input type="text" name="price" id="price" placeholder="">
            </div>
            <div class="form-create-comic">
                <label for="series">Serie comic</label>
                <input type="text" name="series" id="series" placeholder="">
            </div>
            <div class="form-create-comic">
                <label for="sale_date">Data di vendita comic</label>
                <input type="text" name="sale_date" id="sale_date" placeholder="">
            </div>
            <div class="form-create-comic">
                <label for="type">Tipo comic</label>
                <input type="text" name="type" id="type" placeholder="">
            </div>
            <div class="form-create-comic">
                <label for="artists">Artisti comic</label>
                <input type="text" name="artists" id="artists" placeholder="">
            </div>
            <div class="form-create-comic">
                <label for="writers">Scrittori comic</label>
                <input type="text" name="writers" id="writers" placeholder="">
            </div>
            </form>
        </div>
    </section>
</main>

@endsection