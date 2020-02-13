@if (session('user-updated'))
    @component('back.components.alert')
        @slot('type')
            success
        @endslot
        {!! session('user-updated') !!}
    @endcomponent
@endif