@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="dashboard-btns">
                        <a href="{{ url('plant') }}" class="btn btn-default dashboard-item">Plants</a>
                        <a href="{{ url('user') }}" class="btn btn-default dashboard-item">Users</a>
                        <a href="{{ url('scan') }}" class="btn btn-default dashboard-item">Scans</a>
                        <a href="{{ url('season') }}" class="btn btn-default dashboard-item">Seasons</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
