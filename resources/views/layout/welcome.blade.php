@extends("layout.app")
@section("container")
<div class="container">
<p> </p>
<table>
@foreach($cours as $cour)
   <tr>
       <th></th>
       <th><a href="{{$cour->cour_image ? asset($cour->cour_image): asset('/uploads/images/default.pdf')}}" class="button">{{$cour->nom_cour}} </th>
       
       </th>
   </tr>
@endforeach


</table>
<video src="SCRUM.mp4" controls poster="SCRUM.jpg" width="600"></video>

 

 
</div>
@endsection
