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
            
            <h1 class="text-center mb-5">ADD COMIC</h1>
            <form action="{{ route('comics.store')}}" method="POST">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="title" class="form-label"><b>Title</b></label>
                            <input type="text" class="form-control" name="title" placeholder="" id="title" value="{{old('title', '')}}">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="thumb" class="form-label"><b>Image</b></label>
                            <input type="text" class="form-control" name="thumb"  placeholder="" id="thumb" value="{{old('thumb', '')}}">
                    </div>
                    </div>
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="price" class="form-label"><b>Price</b></label>
                            <input type="text" class="form-control" name="price"  placeholder="" id="price" value="{{old('price', '')}}" >
                    </div>
                    </div>
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="series" class="form-label"><b>Series</b></label>
                            <input type="text" class="form-control" name="series"  placeholder="" id="series" value="{{old('series', '')}}">
                    </div>
                    </div>
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="sale_date" class="form-label"><b>Sale date</b></label>
                            <input type="text" class="form-control" name="sale_date"  placeholder="" id="sale_date" value="{{old('sale_date', '')}}">
                    </div>
                    </div>
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="type" class="form-label"><b>Type</b></label>
                            <input type="text" class="form-control" name="type"  placeholder="" id="type" value="{{old('type', '')}}">
                    </div>
                    </div>
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="artists" class="form-label"><b>Artists</b></label>
                            <input type="text" class="form-control" name="artists"  placeholder="" id="artists" value="{{old('artists', '')}}">
                    </div>
                    </div>
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="writers" class="form-label"><b>Price</b></label>
                            <input type="text" class="form-control" name="writers"  placeholder="" id="writers" value="{{old('writers', '')}}">
                    </div>
                    </div>
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="description" class="form-label"><b>Description</b></label>
                            <textarea class="form-control" id="description" rows="3" name="description" > {{old('description', '')}}</textarea>
                        </div>
                    </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>

@endsection