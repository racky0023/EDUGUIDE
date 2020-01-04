@if($errors->any())
   @foreach($errors->all() as $error)
       <div class="alert alert-danger">{{$error}}</div>
   @endforeach
@endif


<div>
   <select name="professeur_id" id="professeur_id" class="form-control">
       <option value=""></option>
       @foreach($professeurs as $key => $value)
           <option value="{{$key}}" {{ $key == $cours->professeur_id ? 'selected="selected"':''>{{$value}}</option>
       @endforeach
   </select>
</div>






