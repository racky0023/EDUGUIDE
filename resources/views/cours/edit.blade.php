
@if(session('success'))
   <div class="alert alert-success">{{session('success')}}</div>
@endif
<form action="{{route('update_cour',['id'=>$cours->id])}}" method="post" enctype="multipart/form-data">

<form action="{{route('update_cour',['id'=>$cours->id])}}" method="post">


   @csrf
   @method('patch')
   <div><input type="text" name="nom_cour" class="form-control" placeholder="le nom du cour" value="{{$cours->nom_cour}}"></div>
  <!-- <div><input type="text" name="name_prof" class="form-control" placeholder="Le nom du professeur" value="{{$cours->name_prof}}"> </div>-->
  <div class="row">
   <div class="col-6 text-right"><img src="{{asset($cours->images)}}" alt="{{$cours->name}}" width="100"></div><div class="col-6"><h3>Chargez une autre image pour remplacer celle-ci</h3></div>
</div>
<div>
   <input type="file" name="cour_image" class="form-control">
</div>
   <div> <button class="btn btn-primary">Editter</button> </div>
</form>
