@extends('layouts.infos')

@section('contenu')
<div class="container">
  <div>
  <a data-toggle="modal" href="#" data-target="#exampleModal" class="btn btn-success mb-2">Nouveau cour</a>
    <table class="table table-dark">
      <thead>
        <tr>
          <th>Nom du cour</th>
		 
          <th>Cour_image</th>
		  <th>Editer</th>
		  <th>Delete</th>
        </tr>
      </thead>
      <tbody>
			@foreach($cours as $cour)
				<tr>
				<td>{{$cour->nom_cour}}</td>
				<td>{{$cour->cour_image}}</td>
				<td>
						
						<img src="{{$cour->images ? asset($cour->images) : asset('uploads/images/default.png')}}" alt="{{$cour->name}}" width="50">
				</td>

				<td>
						<p><a href="{{route('resume',['id'=>$cour->id])}}" class="btn btn-primary">Editer</a></p>
					</td>
				
				<td>
				
				<form action= "/resume/destroy/{{$cour->id}}" method="post">
						@method('delete')
					<a href="" class="btn btn-danger">Delete</a>
				</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	</div>
	</div>
	<!-- debut modal   --->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouveau Cour</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('save_cour')}}" method="post">
			@csrf
			<div class="mb-2">
				<label for="">Nom cour</label>
				<input type="text" class="form-control" name="nom_cour">
			</div>
			<div>
				<label for="">Cour</label>
				<input type="file" class="form-control" name="cour_image">
			</div>
			<button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
        	<input type="submit" class="btn btn-success" value="Enregistrer">
		</form>
      </div>
      <div class="modal-footer">
        
		<!--<button class="btn btn-success">Enregistrer</button>-->
      </div>
    </div>
  </div>
</div>
	<!-- fin modal  ---->
@endsection








