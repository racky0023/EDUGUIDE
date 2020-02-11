@extends('front.layout')

@section('css')
    @if (Auth::check())
        <link rel="stylesheet" href="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.css">
    @endif
@endsection

@section('main')

   ...

@endsection

@section('scripts')

   ...

@endsection