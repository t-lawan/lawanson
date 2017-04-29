@extends('admin.layout')

@section('content')
  <h2 class="text-center"> Create Project</h2>



    <form method="post" action="{{route('project_save', $project)}}" class="col-md-6 col-md-offset-3">


      @include('admin.projects.partials.form.create')


    </form>


@endsection
