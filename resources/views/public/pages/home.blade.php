@extends('public.layout')

@section('content')

  @include('public.partials.nav.site')

  @include('public.section.jumbotron')

  @include('public.section.newproject')

  @include('public.section.education')

    @include('public.section.work')

@endsection
