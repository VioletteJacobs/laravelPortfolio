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
  
  <form method="POST" action="/update-sumary/{{$edit->id}}">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">name : </label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="name" value="{{old("name") ? old("name") : $edit->name}}">
      </div>
      <div class="form-group">
          <label for="exampleInputEmail1">adresse : </label>
          <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="adresse" value="{{old("adresse") ? old("adresse") : $edit->adresse}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">mail : </label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="mail" value="{{old("mail") ? old("mail") : $edit->mail}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">phone : </label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="phone" value="{{old("phone") ? old("phone") : $edit->phone}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Paragrape : </label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="p" value="{{old("p") ? old("p") : $edit->p}}">
          </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection