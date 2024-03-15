{{--Se ci sono errori--}}
@if ($errors->any())
<div class="alert alert-danger container my-5" role="alert">
    <h4 class="alert-heading">Attention!</h4>
    <p>There are following errors:</p>
    <hr>
    <ul>
        @foreach ($errors->all() as $error)
        <li>-{{$error}}</li>    
        @endforeach
    </ul>
  </div>
@endif

