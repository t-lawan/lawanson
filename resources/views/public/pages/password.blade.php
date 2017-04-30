@extends('public.layout')

@section('content')

    <div class="container-fluid text-center" id="intro" >

          <h1> Thomas Lawanson</h1>

          <br />
          <br />



    </div>
    <br />
    <div class="container-fluid text-center" id="passwordForm">
      <form class="form-horizontal col-sm-4 col-sm-offset-4" method="post" action="{{route('confirm_verified')}}">
        {{ csrf_field() }}
        <div class="form-group">

        <input name="password"type="password" class="form-control" id="password" placeholder="enter password" required="true">
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
        <br />

          <button class="btn btn-secondary btn-block"type="submit"> enter</button>
        </div>

      </form>

    </div>



@endsection
