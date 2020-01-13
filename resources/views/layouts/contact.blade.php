@extends("layouts.infos")
 
@section('contenu')

 

    <form action="{{ url('professseur') }}" method="POST">
        {{ csrf_field() }}
        <label for="nom">nom et prenom : </label>
        <input type="text" name="name_prof" id="name_prof"><br></br>
        <label for="nom">les matieres : </label>
        <input type="text" name="matiere" id="matiere"><br></br>
        <label for="nom">grade du professeur : </label>
        <input type="text" name="grade" id="grade"><br></br>
        <input type="submit" value="Envoyer !">
    </form>


<body>


</body>
</html>
    
@endsection


 

