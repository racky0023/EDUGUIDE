@extends("layout.app")
@section("container")
<div class="container">
<h2 class="title">LES DIFFERENTS COURS</h2>
<table>
@foreach($cours as $cour)
   <tr>
       <th></th>
       <th><a href="{{$cour->cour_image ? asset($cour->cour_image): asset('/uploads/images/default.pdf')}}" class="button">{{$cour->nom_cour}} </th>
       
       </th>
   </tr>
@endforeach


</table>
<video src="preview-38379.mp4" controls poster="preview-38379.jpg" width="600"></video><br></br>
<video src="CourssurlesRseauxInformatiques.mp4" controls poster="CourssurlesRseauxInformatiques.jpg" width="600"></video>

 

 
</div>
@endsection
