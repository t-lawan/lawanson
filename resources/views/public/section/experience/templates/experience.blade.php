<div>

  <h2> {{strtoupper($experience->company_name) }}</h2>
  <h3> {{$experience->role}}</h3>

  <h3> {{date("Y",strtotime($experience->start_date))}} - {{date("Y",strtotime($experience->end_date))}}</h3>
  <h3> {{$experience->city}}</h3>


      <a href="#{{preg_replace('/\s+/', '', $experience->role)}}" data-toggle="collapse">
        <u>See Duties</u>
      </a>



  <div id="{{ preg_replace('/\s+/', '', $experience->role)}}" class="collapse">
    @foreach ($experience->duties as $duty)
      <h4>

        {{$duty->description}}
      </h4>
    @endforeach
  </div>
</div>
