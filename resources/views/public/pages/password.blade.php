@extends('public.layout')

@section('content')

    <div class="container-fluid text-center" id="intro" >

          <h1> Thomas Lawanson</h1>
          <h2> Portfolio</h2>

          <br />
          <br />

          <button class="btn btn-primary" data-toggle="collapse" data-target="#passwordForm" > Click Here to Enter Password</button>



    </div>
    <br />
    <div class="container-fluid text-center collapse" id="passwordForm">
      <div class="col-xs-8 col-xs-offset-2">
        <form class="form-horizontal col-sm-4 col-sm-offset-4" method="post" action="{{route('confirm_verified')}}">
          {{ csrf_field() }}
          <div class="input-group">

          <input name="password"type="password" class="form-control" id="password" placeholder="enter password" required="true">
          <span class="input-group-btn">
            <button class="btn btn-outline-secondary btn-block"type="submit"> enter</button>
          </span>
          @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif



          </div>

        </form>

      </div>


    </div>



@endsection
