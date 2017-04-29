@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><a href='/admin/project'>Projects</a></div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><a href='/admin/institution'>Institutions</a></div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><a href='/admin/experience'>Experiences</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
