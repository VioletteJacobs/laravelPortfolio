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
  
  <form method="POST" action="add-nav">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Texte : </label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="li" value="{{old("li")}}">
      </div>
      <div class="form-group">
          <label for="exampleInputEmail1">Lien : </label>
          <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="href" value="{{old("href")}}">
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection