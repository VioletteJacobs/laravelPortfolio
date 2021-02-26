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
  
  <form method="POST" action="/update-phone/{{$edit->id}}">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Phone : </label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="texte" name="phone" value="{{old("phone") ? old("phone") : $edit->phone}}">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection