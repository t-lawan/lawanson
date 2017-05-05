<div id="{{strtolower(($project->name))}}" class="tab-pane fade in active">
  <h2>
    {{$project->description}}
  </h2>
  <h3>
    Built using
    @foreach($project->technologies as $technology)
      @if (!$loop->last)
        {{$technology->name}},
      @else
        {{$technology->name}}.
      @endif
    @endforeach
  </h3>

  <a href="{{$project->github_link}}" target="_blank" class="btn btn-secondary">
    Github Link
  </a>

  <a href="{{$project->site_link}}" target="_blank"  class="btn btn-secondary">
    Site Link
  </a>

</div>
