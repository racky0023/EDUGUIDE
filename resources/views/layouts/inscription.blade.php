@extends('layouts.infos')

@section('contenu')
<div class="card-deck">
  @foreach($profs as $prof)
    <div class="card">
      <img src="images/images8.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
          <span>Professeur de {{$prof->matiere}}</span>
            <h3><a href="http://localhost:8000/uploads/images/_1577738502.pdf">{{$prof->grade}} {{$prof->name_prof}}</a></h3>
          <h5 class="card-title">les Types de reseaux</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  @endforeach
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
