<div>

  <h2> {{strtoupper($project->name) }}</h2>
  <h3> {{$project->description}}</h3>


  <a href="{{$project->github_link}}" target="_blank" class="btn btn-secondary">
    Github Link
  </a>

  <a href="{{$project->site_link}}" target="_blank"  class="btn btn-secondary">
    Site Link
  </a>

  <h4> CREDENTIALS</h4>
  <p> u: {{$project->user_email}}</p>
  <p> p: {{$project->user_password}}</p>
</div>
