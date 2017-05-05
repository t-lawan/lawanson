<div>
  <h2> {{$institution->degree}}</h2>
  <h3> {{$institution->name}}</h3>
  <h3> {{date("Y",strtotime($institution->start_date))}} - {{date("Y",strtotime($institution->end_date))}}</h3>

  <h4> {{$institution->city}}</h4>

  <a href="#{{preg_replace('/\s+/', '', $institution->name)}}" data-toggle="collapse">
    <u>See Grades</u>
  </a>



<div id="{{ preg_replace('/\s+/', '', $institution->name)}}" class="collapse">
@foreach ($institution->subjects as $subject)
  <h4>

    {{$subject->name}} : {{$subject->grade}}
  </h4>
@endforeach
</div>
</div>
