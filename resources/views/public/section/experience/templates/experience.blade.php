<div>
  <h2 > {{$experience->role}}</h2>
  <h2> {{$experience->company_name}}</h2>

  <h3> {{date("Y",strtotime($experience->start_date))}} - {{date("Y",strtotime($experience->end_date))}}</h3>
  <h3> {{$experience->city}}</h3>
</div>
