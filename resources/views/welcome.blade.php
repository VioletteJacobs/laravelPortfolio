@extends('template.main')
@section('content')
@include('partials.hero')
<main>
    @include('partials.about')
    @include('partials.resume')
    @include('partials.services')
    @include('partials.portfolio')
    @include('partials.contact')
</main>
<a href="#" class="back-to-top" ><i class="icofont-simple-up" style="background-color: #{{$DBColor[0]->rgba}}"></i></a>
@endsection