@extends('template.second')
@section('content')
<section class="container">
    <h1>Voici votre page Backoffice</h1>
    <span>Vous pourrez y modifier les éléments, en créer de nouveaux, modifier ou supprimer les anciens.</span>
</section>
<section>
    <h2>La barre de navigation</h2>
    <div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Texte</th>
                <th scope="col">Lien</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($DBNav as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->li}}</td>
                    <td>{{$item->href}}</td>
                    <td> 
                        <form action="/delete-nav/{{$item->id}}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="/edit-nav/{{$item->id}}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>

</section>
    
@endsection