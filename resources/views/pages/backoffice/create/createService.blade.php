@extends('template.second')
@section('content')
<div class="container text-center mt-5 mb-5">
  {{-- message d'erreur --}}
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif
  
  <form method="POST" action="/add-service">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Titre : </label>
        <input class="form-control" aria-describedby="texte" name="titre" value="{{old("titre")}}">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Icon : </label>
        <input class="form-control"  aria-describedby="texte" name="icon" value="{{old("icon")}}">
      </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Paragraphe : </label>
            <input class="form-control" aria-describedby="texte" name="p" value="{{old("p")}}">
          </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection