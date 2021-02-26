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
  
  <form method="POST" action="/update-experience/{{$edit->id}}">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Titre : </label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="titre" value="{{old("titre") ? old("titre") : $edit->titre}}">
      </div>
      <div class="form-group">
          <label for="exampleInputEmail1">years : </label>
          <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="years" value="{{old("years") ? old("years") : $edit->years}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Name : </label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="name" value="{{old("name") ? old("name") : $edit->name}}">
          </div>
        <div class="form-group">
            <label for="exampleInputEmail1">task1 : </label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="task1" value="{{old("task1") ? old("task1") : $edit->task1}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">task2 : </label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="task2" value="{{old("task2") ? old("task2") : $edit->task2}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">task3 : </label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="task3" value="{{old("task3") ? old("task3") : $edit->task3}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">task4 : </label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="task4" value="{{old("task4") ? old("task4") : $edit->task4}}">
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection