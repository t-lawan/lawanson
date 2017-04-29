<div class="panel panel-default col-md-8 col-md-offset-2">
  <div class="panel-heading">
      <span class="lead"> {{strtoupper($project->name)}}</span>


      <span class="pull-right">

        @include('admin.projects.partials.form.delete')
      </span>

      <span class="pull-right">
        <a href="/admin/project/{{$project->id}}">
          <button type="button" class="btn btn-secondary">Add Technology</button>
        </a>
      </span>
  </div>
  <div class="panel-body">
    <h4>Description: {{$project->description}}</h4>
    <h4>GitHub Repo: {{$project->github_link}}</h4>
    <h4>Site URL: {{$project->site_link}}</h4>
    <h4> Technologies Used:
      @foreach($project->technologies as $technology)
        @if (!$loop->last)
          {{$technology->name}},
        @else
          {{$technology->name}}.
        @endif
      @endforeach
    </h4>


  </div>


</div>
