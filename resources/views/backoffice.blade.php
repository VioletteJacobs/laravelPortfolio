@extends('template.second')
@section('content')
<section class="container">
    <h1>Voici votre page Backoffice</h1>
    <span>Vous pourrez y modifier les éléments, en créer de nouveaux, modifier ou supprimer les anciens.</span>
</section>
{{-- nav --}}
<section>
    <h2 class="text-center">La barre de navigation : </h2>
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
{{-- titre --}}
<section>
    <h2 class="text-center">Les titres des sections : </h2>
    <div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Titre</th>
                <th scope="col">span</th>
                <th scope="col">paragraphe</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($DBTitre as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->titre}}</td>
                    <td>{{$item->span}}</td>
                    <td>{{$item->p}}</td>
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
<section>
    <h2 class="text-center">Les informations personnelles </h2>
    <div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Titre</th>
                <th scope="col">Données</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($DBAboutInfo as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->titre}}</td>
                    <td>{{$item->info}}</td>
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
<section>
    <h2 class="text-center">Des anecdotes à propos :</h2>
    <div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Icon</th>
                <th scope="col">Couleur</th>
                <th scope="col">Chiffre</th>
                <th scope="col">Gras</th>
                <th scope="col">paragaphe</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($DBAboutP2 as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->icon}}</td>
                    <td>{{$item->color}}</td>
                    <td>{{$item->span}}</td>
                    <td>{{$item->strong}}</td>
                    <td>{{$item->p}}</td>
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
<section>
    <h2 class="text-center">Les compétences:</h2>
    <div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Language</th>
                <th scope="col">Valeur</th>
                <th scope="col">Valeur graphique</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($DBSkills as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->language}}</td>
                    <td>{{$item->val}}</td>
                    <td>{{$item->valuenow}}</td>
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
<section>
    <h2 class="text-center">Le CV compact:</h2>
    <div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nom</th>
                <th scope="col">description</th>
                <th scope="col">Adresse</th>
                <th scope="col">Mail</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($DBSumary as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->p}}</td>
                    <td>{{$item->adresse}}</td>
                    <td>{{$item->mail}}</td>
                    <td>{{$item->phone}}</td>

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
<section>
    <h2 class="text-center">Les études:</h2>
    <div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Titre</th>
                <th scope="col">Année</th>
                <th scope="col">Ecole</th>
                <th scope="col">Description</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($DBEducation as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->title}}</td>
                    <td>{{$item->years}}</td>
                    <td>{{$item->school}}</td>
                    <td>{{$item->p}}</td>
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
<section>
    <h2 class="text-center">Les expériences:</h2>
    <div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Titre</th>
                <th scope="col">Années</th>
                <th scope="col">Tâche 1</th>
                <th scope="col">Tâche 2</th>
                <th scope="col">Tâche 3</th>
                <th scope="col">Nom</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($DBExperiences as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->title}}</td>
                    <td>{{$item->years}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->task1}}</td>
                    <td>{{$item->task2}}</td>
                    <td>{{$item->task3}}</td>
                    <td>{{$item->task4}}</td>
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
<section>
    <h2 class="text-center">Les Services:</h2>
    <div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Icon</th>
                <th scope="col">Titre</th>
                <th scope="col">p</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($DBServices as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->icon}}</td>
                    <td>{{$item->titre}}</td>
                    <td>{{$item->p}}</td>
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
<section>
    <h2 class="text-center">Le Portfolio:</h2>
    <div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">filter</th>
                <th scope="col">Image</th>
                <th scope="col">Titre</th>
                <th scope="col">Paragraphe</th>
                <th scope="col">Lien 1</th>
                <th scope="col">Lien 2</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($DBPortfolio as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->filter}}</td>
                    <td>{{$item->img}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->p}}</td>
                    <td>{{$item->href1}}</td>
                    <td>{{$item->href2}}</td>
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
<section>
    <h2 class="text-center">Les Mails:</h2>
    <div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Mail</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($DBMail as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->mail}}</td>
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
<section>
    <h2 class="text-center">Les téléphones:</h2>
    <div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($DBPhone as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->phone}}</td>
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