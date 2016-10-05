@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Seasons
                    
                    <a class="pull-right link" href="{{ url('/season/new') }}">
                        new
                    </a>
                </div>
                <div class="panel-body">
                    @foreach($seasons as $season)
                        <div class="selectable-item">
                            <a href="{{ url('season/' . $season->id) }}">
                                <p><b>name:</b> {{{ $season->name }}}</p>
                            </a>
                        </div>
                    @endforeach
                    <div class="pull-right">
                        {{ $seasons->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection