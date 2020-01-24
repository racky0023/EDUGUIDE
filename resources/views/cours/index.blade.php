<!DOCTYPE html>
<html lang="fr">
<head >
  <meta charset="UTF-8">
  <title>Document</title>
  <link href="css/heroic-features.css" rel="stylesheet">
  <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <link href="{{asset('css/all.css')}}" rel="stylesheet" />
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<div class="container">
  <th><p><a href="{{route('ajouter_nom_cour')}}" class="button">ajouter</a>
    <table class="table table-dark">
      <thead>
        <tr>
          <th>Nom Cour</th>
          <th>Editer</th>
          <th>Supprimer</th>
        </tr>
      </thead>
      <tbody>
        @foreach($cours as $cour)
            <tr class="table table-hover">
            
            <td>
              <a href="/cour_reseaux" style="color:white;">{{$cour->nom_cour}} </a>
              <img src="{{$cour->images ? asset($cour->images) : asset('uploads/images/default.png')}}" alt="{{$cour->name}}" width="50">
            </td>
            <td>
                <p><a href="{{route('editer_cour',['id'=>$cour->id])}}" class="btn btn-primary">Editer</a></p>
            </td>
            <td>
                <form action= "/cours/destroy/{{$cour->id}}" method="post">
                    @csrf
                    @method('delete')
                    <div><input type="submit" class="btn btn-danger" name="delete" value="Supprimer"></div>
                
                <!--<div><p><a href="{{route('cours',['id'=>$cour->id])}}" class="btn btn-danger" name="delete" value="Supprimer"></a></p></div>-->
                  </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
   tinymce.init({
       selector:'textarea.description',
       width: 900,
       height: 300
   });
</script>
  <!-- Jquery JS-->
  <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
</html>