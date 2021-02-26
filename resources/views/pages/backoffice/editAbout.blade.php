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
  
  <form method="POST" action="/update-about/{{$edit->id}}">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">icon : </label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="icon" value="{{old("icon") ? old("icon") : $edit->icon}}">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">strong : </label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="strong" value="{{old("strong") ? old("strong") : $edit->strong}}">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">span : </label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="span" value="{{old("span") ? old("span") : $edit->span}}">
      </div>
      <div class="form-group">
          <label for="exampleInputEmail1">color : </label>
          <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="color" value="{{old("color") ? old("color") : $edit->color}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Paragraphe : </label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="p" value="{{old("p") ? old("p") : $edit->p}}">
          </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection