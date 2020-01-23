
<form action="{{route('store_cours')}}" method="post" enctype="multipart/form-data">

<div>
    <input type="file" name="cour_image" class="form-control"></div>
    <div class="container">
        <div>
            <p>
                <a href="{{route('ajouter_nom_cour')}}" >Ajout</a></p></div>
                <div class="container">
                <form action="{{route('ajouter_nom_cour')}}" method="post">
        @csrf
        <div>
            <input type="text" name="nom_cour" class="form-control" placeholder="le nom du cour">
        </div>
        <div>
        <!--<input type="text" name="name_prof" class="form-control" placeholder="Le prenom du professeur">
        </div>
        <div>-->

        </div>
        <div>
        <button class="btn btn-primary">Enregistrer</button>
        </div>
        </form>
