@extends('layouts.infos')
@section('contenu')
@foreach($cours as $cour)
            <tr class="table table-hover">
            
            <td>
              <a href="{{route('/resume',['id'=>$cour->id])}}" style="color:white;">{{$cour->nom_cour}} </a>
              <img src="{{$cour->images ? asset($cour->images) : asset('uploads/images/default.png')}}" alt="{{$cour->name}}" width="50">
            </td>
         
        @endforeach







@endsection

