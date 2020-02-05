@extends('layouts.infos')

@section('contenu')
<div class="container">
  <div>
    <table class="table table-dark">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Prenom</th>
          <th>Grade</th>
          <th>Matiere</th>
          <th>Sexe</th>
          <th>Naissance</th>
          <th>Telephone</th>
          <th>Email</th>
          <th>Editer</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      @foreach($profs as $prof)
        <tr>
          <td>{{$prof->nom}}</td>
          <td>{{$prof->prenom}}</td>
          <td>{{$prof->grade}}</td>
          <td>{{$prof->matiere}}</td>
          <td>{{$prof->genre}}</td>
          <td>{{$prof->naissance}}</td>
          <td>{{$prof->telephone}}</td>
          <td>{{$prof->email}}</td>
          

          <td>
            <a href="/resume" class="btn btn-primary">Cour</a>
            
          </td>
          <td>
          @method('delete')
           <form action= "/professeurs/destroy/{{$prof->id}}" method="post">
            <a href="" class="btn btn-danger">Delete</a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
  
      <!--div class="card">
          <img src="images/images10.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <span>prof html</span>
                  <h3><a href="http://localhost:8000/uploads/images/_1577738367.pdf">Mme Goudiaby</a></h3>
            <h5 class="card-title">Les structures et la creations des pages html</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="images/images11.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
          <span>prof java</span>
                  <h3><a href="http://localhost:8000/uploads/images/_1577824136.pdf">Mme Sylla</a></h3>
            <h5 class="card-title">l'utilisation et les fonctions du Javascript </h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            
          </div>
          
        </div-->
</div>

@endsection
