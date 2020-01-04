@extends("layouts.infos")
 
@section('contenu')

 

    <form action="{{ url('professseur') }}" method="POST">
        {{ csrf_field() }}
        <label for="nom">Entrez votre nom : </label>
        <input type="text" name="name_prof" id="name_prof">
        <input type="submit" value="Envoyer !">
    </form>


<body>


</body>
</html>
    
@endsection


 

