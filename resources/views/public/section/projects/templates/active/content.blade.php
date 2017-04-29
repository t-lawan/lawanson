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

  <button class="btn">
      {{$project->github_link}}
  </button>

  <button class="btn">
    {{$project->site_link}}
  </button>

</div>
