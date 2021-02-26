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
  
  <form method="POST" action="/update-portfolio/{{$edit->id}}">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">filter : </label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="filter" value="{{old("filter") ? old("filter") : $edit->filter}}">
      </div>
      <div class="form-group">
          <label for="exampleInputEmail1">titre : </label>
          <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="title" value="{{old("title") ? old("title") : $edit->title}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Paragraphe : </label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="p" value="{{old("p") ? old("p") : $edit->p}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">href1 : </label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="href1" value="{{old("href1") ? old("href1") : $edit->href1}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">href2 : </label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="href2" name="href2" value="{{old("href2") ? old("href2") : $edit->href2}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">img : </label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="img" value="{{old("img") ? old("img") : $edit->img}}">
          </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection