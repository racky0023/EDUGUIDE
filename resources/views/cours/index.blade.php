<!DOCTYPE html>
<html lang="fr">
<head >
<meta charset="UTF-8">
<title>Document</title>

<th><p><a href="{{route('ajouter_nom_cour')}}" class="button">ajouter</a>

</p></th>
<body>
<p><a href="{{route('ajouter_nom_cour')}}" class="button">ajouter</a></p>
<!--@if(session('success'))
   <div class="alert alert-success">{{session('success')}}</div>
@endif-->

<table class="table table-striped">
<tr>
<th>#</th>
<th>Nom Cour</th>
<!--<th>nom Professseur</th>
<th></th>-->
</tr>
@foreach($cours as $cour)

   <tr>
       <th>#</th>
       <th><a href="/cour_reseaux" >{{$cour->nom_cour}} </a>- <img src="{{$cour->images ? asset($cour->images) : asset('uploads/images/default.png')}}" alt="{{$cour->name}}" width="50"></th>

         <th>
           <p><a href="{{route('editer_cour',['id'=>$cour->id])}}" class="btn btn-primary">Editer</a></p>

           <form action= "/cours/destroy/{{$cour->id}}" method="post">
               @csrf
               @method('delete')
               <div><input type="submit" class="btn btn-danger" name="delete" value="Supprimer"></div>
           
           <!--<div><p><a href="{{route('cours',['id'=>$cour->id])}}" class="btn btn-danger" name="delete" value="Supprimer"></a></p></div>-->
             </form>
       </th>
   </tr>
@endforeach



</table>
</head>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>