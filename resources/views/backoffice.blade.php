@extends('template.second')
@section('content')
<section class="container" class="container">
    <h1>Voici votre page Backoffice</h1>
    <span>Vous pourrez y modifier les éléments, en créer de nouveaux, modifier ou supprimer les anciens.</span>
</section>
{{-- nav --}}
<section id="nav" class="container">
    <h2 class="text-center">La barre de navigation : </h2>
    {{-- <div>
        @include('partials.navbar')
    </div> --}}
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
    <a href="{{route("createNav")}}" class="btn btn-success text-center">Créer</a>
</section>
<section id="nav" class="container">
    <h2 class="text-center">La bannière Hero : </h2>
    <div>
        @include('partials.hero')
    </div>
    <div class="mt-5">
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Titre</th>
                <th scope="col">fonction</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($DBHero as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->titre}}</td>
                    <td>{{$item->h2}}</td>

                </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
    <div>
        <h2 class='text-center'>Modifier l'image: </h2>
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
    <div>
        <form action="/update/{{$DBBG[0]->id}}" method="POST" enctype="multipart/form-data">
            @csrf
                <input type="file" name="img" value="{{old("img") ? old("img") :  $DBBG[0]->img}}">
                <button type="submit" class="btn btn-success">Ajouter</button>
    
                {{-- @foreach ($DBGalerie as $item)
                <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                      <input type="radio" aria-label="Radio button for following text input" value="{{$item->src}}" name="src">
                      </div>
                    </div>
                    <img src="{{asset('storage/img/'.$item->src)}}" alt="" height="100px">
                </div>
                @endforeach --}}

            {{-- <input type="file" name="src" value="{{old("src")? old("src"): $DBBG[0]->src}}"> --}}
        </form>
    </div>
    </div>
</section>
{{-- titre --}}
<section id="titre" class="container">
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
                        <form action="/delete-titre/{{$item->id}}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="/edit-titre/{{$item->id}}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
    <a href="{{route("createTitre")}}" class="btn btn-success text-center">Créer</a>
</section>
<section id="info" class="container">
    <h2 class="text-center">Les informations personnelles </h2>
    <div>
        @include('partials.about')
    </div>
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
                        <form action="/delete-info/{{$item->id}}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="/edit-info/{{$item->id}}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
    <a href="{{route("createInfo")}}" class="btn btn-success text-center">Créer</a>
</section>
<section id="perso" class="container">
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
                        <form action="/delete-aboutp2/{{$item->id}}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="/edit-about/{{$item->id}}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
    <a href="{{route("createAbout")}}" class="btn btn-success text-center">Créer</a>
</section>
<section class="competences" class="container">
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
                        <form action="/delete-skill/{{$item->id}}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="/edit-skill/{{$item->id}}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
    <a href="{{route("createSkill")}}" class="btn btn-success text-center">Créer</a>
</section>
<section id="cv" class="container">
    <div>
        @include('partials.resume')
    </div>
    <div>
        <h2 class="text-center">Le CV compact:</h2>
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
                        <form action="/delete-sumary/{{$item->id}}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="/edit-sumary/{{$item->id}}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
    <a href="{{route("createSumary")}}" class="btn btn-success text-center">Créer</a>
</section>
<section id="etude" class="container">
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
                        <form action="/delete-education/{{$item->id}}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="/edit-education/{{$item->id}}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
    <a href="{{route("createEducation")}}" class="btn btn-success text-center">Créer</a>
</section>
<section id="experience" class="container">
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
                    <td> 
                        <form action="/delete-experience/{{$item->id}}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="/edit-experience/{{$item->id}}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
    <a href="{{route("createExperience")}}" class="btn btn-success text-center">Créer</a>
</section>
<section id="service" class="container">
    <h2 class="text-center">Les Services:</h2>
    <div>
        @include('partials.services')
    </div>
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
                        <form action="/delete-service/{{$item->id}}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="/edit-service/{{$item->id}}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
    <a href="{{route("createService")}}" class="btn btn-success text-center">Créer</a>
</section>
<section id="portfolio" class="container">
    <h2 class="text-center">Le Portfolio:</h2>
    <div>
        @include('partials.portfolio')
    </div>
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
                        <form action="/delete-portfolio/{{$item->id}}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="/edit-portfolio/{{$item->id}}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
    <a href="{{route("createPortfolio")}}" class="btn btn-success text-center">Créer</a>
</section>
<section>

    <h2 class="text-center">Les contacts</h2>
    <div>
        @include('partials.contact')
    </div>
</section>
<section id="contact" class="container">
    <h2 class="text-center">Les Mails:</h2>
    <div >
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
                        <form action="/delete-mail/{{$item->id}}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="/edit-mail/{{$item->id}}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
    <a href="{{route("createMail")}}" class="btn btn-success text-center">Créer</a>
</section>
<section class="container">
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
                        <form action="/delete-phone/{{$item->id}}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="/edit-phone/{{$item->id}}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
    <a href="{{route("createPhone")}}" class="btn btn-success text-center">Créer</a>
</section>
<section id="couleur" class="container">
    <h2 class="text-center">Les couleurs:</h2>
    <div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nom</th>
                <th scope="col">Code RGBA</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($DBColor as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->nom}}</td>
                    <td>{{$item->rgba}}</td>
                    <td> 
                        <form action="/delete-color/{{$item->id}}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="/edit-color/{{$item->id}}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
    <a href="{{route("createColor")}}" class="btn btn-success text-center">Créer</a>
</section>
    
<section class="container" id="galerie">
    <h2 class="text-center">Galerie d'images</h2>
    <p>Vous pouvez ajouter ici vos fichiers photos afin de pouvoir modifier les différentes images (dans le portfolio, l'image de bannière, celle de la section about et du footer.</p>
    <div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Image</th>
                <th scope="col">SRC</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($DBGalerie as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>
                        <img src="{{asset('storage/img/'.$item->src)}}" height="200px" alt="">
                    </td>
                    <td>{{$item->src}}</td>
                </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
    <div>
        <form action="/files" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="src">
            <button type="submit" class="btn btn-primary">
                Ajouter
            </button>
        </form>
        
    </div>
</section>
@endsection
