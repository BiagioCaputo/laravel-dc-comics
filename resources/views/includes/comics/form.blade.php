<section id="create-section container">
    <div class="form-box">
        {{-- Form per il metodo edit(exists controlla se comic è effettivamente sul database
             e non ri riferisce al comic vuoto che abbiamo passato nel Comic controller) --}}
        @if($comic->exists) 
        <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @method('PUT')
        {{-- Form per il metodo create --}}
        @else
        <form action="{{route('comics.store')}}" method="POST">
        @endif     
        @csrf
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="mb-3">
                        <label for="title" class="form-label"><b>Title</b></label>
                        <input type="text" class="form-control @error('title')is-invalid @elseif(old('title', '')) is-valid @enderror" name="title" placeholder="" id="title" value="{{old('title', $comic->title)}}">
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @else
                            <div class="form-text">Inserire titolo dell'opera</div>
                        @enderror
                    </div>
                </div>
                <div class="col-8">
                    <div class="mb-3">
                        <label for="thumb" class="form-label"><b>Image</b></label>
                        <input type="text" class="form-control @error('thumb')is-invalid @elseif(old('thumb', '')) is-valid @enderror" name="thumb" placeholder="" id="thumb" value="{{old('thumb', $comic->thumb)}}">
                        @error('thumb')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @else
                            <div class="form-text">Inserire immagine dell'opera</div>
                        @enderror
                    </div>
                </div>
                <div class="col-8">
                    <div class="mb-3">
                        <label for="price" class="form-label"><b>Price</b></label>
                        <input type="text" class="form-control @error('price')is-invalid @elseif(old('price', '')) is-valid @enderror" name="price" placeholder="" id="price" value="{{old('price', $comic->price)}}">
                        @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @else
                            <div class="form-text">Inserire prezzo dell'opera</div>
                        @enderror
                    </div>
                </div>
                <div class="col-8">
                    <div class="mb-3">
                        <label for="series" class="form-label"><b>Series</b></label>
                        <input type="text" class="form-control @error('series')is-invalid @elseif(old('series', '')) is-valid @enderror" name="series" placeholder="" id="series" value="{{old('series', $comic->series)}}">
                        @error('series')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @else
                            <div class="form-text">Inserire serie dell'opera</div>
                        @enderror
                    </div>
                </div>
                <div class="col-8">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label"><b>Sale Date</b></label>
                        <input type="text" class="form-control @error('sale_date')is-invalid @elseif(old('sale_date', '')) is-valid @enderror" name="sale_date" placeholder="" id="sale_date" value="{{old('sale_date', $comic->sale_date)}}">
                        @error('sale_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @else
                            <div class="form-text">Inserire data(YYYY-MM-DD) dell'opera</div>
                        @enderror
                    </div>
                </div>
                <div class="col-8">
                    <div class="mb-3">
                        <label for="type" class="form-label"><b>Type</b></label>
                        <input type="text" class="form-control @error('type')is-invalid @elseif(old('type', '')) is-valid @enderror" name="type" placeholder="" id="type" value="{{old('type', $comic->type)}}">
                        @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @else
                            <div class="form-text">Inserire tipo dell'opera</div>
                        @enderror
                    </div>
                </div>
                <div class="col-8">
                    <div class="mb-3">
                        <label for="artists" class="form-label"><b>Artists</b></label>
                        <input type="text" class="form-control @error('artists')is-invalid @elseif(old('artists', '')) is-valid @enderror" name="artists" placeholder="" id="artists" value="{{old('artists', $comic->artists)}}">
                        @error('artists')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @else
                            <div class="form-text">Inserire artisti dell'opera</div>
                        @enderror
                    </div>
                </div>
                <div class="col-8">
                    <div class="mb-3">
                        <label for="writers" class="form-label"><b>Writers</b></label>
                        <input type="text" class="form-control @error('writers')is-invalid @elseif(old('writers', '')) is-valid @enderror" name="writers" placeholder="" id="writers" value="{{old('writers', $comic->writers)}}">
                        @error('writers')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @else
                            <div class="form-text">Inserire scrittori dell'opera</div>
                        @enderror
                    </div>
                </div>
                <div class="col-8">
                    <div class="mb-3">
                        <label for="description" class="form-label"><b>Descriprion</b></label>
                        <input type="text" class="form-control @error('description')is-invalid @elseif(old('description', '')) is-valid @enderror" name="description" placeholder="" id="description" value="{{old('description', $comic->description)}}">
                        @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @else
                            <div class="form-text">Inserire descrizione dell'opera</div>
                        @enderror
                    </div>
                </div>
                
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">SEND</button>
                </div>
            </div>
        </form>
    </div>
</section>