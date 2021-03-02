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
  
  <form method="POST" action="/update-color/{{$edit->id}}">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">nom : </label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="nom" value="{{old("nom") ? old("nom") : $edit->nom}}">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">rgba : </label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="rgba" value="{{old("rgba") ? old("rgba") : $edit->rgba}}">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection