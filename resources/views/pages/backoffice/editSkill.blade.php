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
  
  <form method="POST" action="/update-skill/{{$edit->id}}">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">language : </label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="language" value="{{old("language") ? old("language") : $edit->language}}">
      </div>
      <div class="form-group">
          <label for="exampleInputEmail1">valeur (en pourcent) : </label>
          <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="val" value="{{old("val") ? old("val") : $edit->val}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Valeur dans le graphique : </label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="valuenow" value="{{old("valuenow") ? old("valuenow") : $edit->valuenow}}">
          </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection