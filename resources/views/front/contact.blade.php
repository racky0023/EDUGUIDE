@if ($errors->has('name'))
  @component('front.components.error')
    {{ $errors->first('name') }}
  @endcomponent
@endif