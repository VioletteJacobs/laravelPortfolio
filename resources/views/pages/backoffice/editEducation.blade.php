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
  
  <form method="POST" action="/update-education/{{$edit->id}}">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Titre : </label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="title" value="{{old("title") ? old("title") : $edit->title}}">
      </div>
      <div class="form-group">
          <label for="exampleInputEmail1">years : </label>
          <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="years" value="{{old("years") ? old("years") : $edit->years}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">school : </label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="school" value="{{old("school") ? old("school") : $edit->school}}">
          </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Paragraphe : </label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="p" value="{{old("p") ? old("p") : $edit->p}}">
          </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection