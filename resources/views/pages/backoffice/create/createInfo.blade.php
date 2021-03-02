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
  
  <form method="POST" action="/add-info">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">icon : </label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="icon" value="{{old("icon") ? old("icon") : "	
        icofont-rounded-right"}}">
      </div>
      <div class="form-group">
          <label for="exampleInputEmail1">titre : </label>
          <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="titre" value="{{old("titre")}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Info : </label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="info" value="{{old("info")}}">
          </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection