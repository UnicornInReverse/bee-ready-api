@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Seasons
                    
                    <a class="pull-right" href="{{ url('/season/new') }}">
                        new
                    </a>
                </div>
                <div class="panel-body">
                    @foreach($seasons as $season)
                        <a href="{{ url('season/' . $season->id) }}">
                            <div>
                                <p><b>name:</b> {{{ $season->name }}}</p>
                            </div>
                        </a>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection