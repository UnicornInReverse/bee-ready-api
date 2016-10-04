@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Season {{{ $season->name }}}
                    
                    <p class="pull-right">
                        <a href="{{ url('/season/'. $season->id. '/edit') }}">
                            edit
                        </a>
                         |
                        <a href="{{ url('/season/' . $season->id . '/delete') }}">
                            delete
                        </a>
                    </p>
                </div>

                <div class="panel-body">
                    <p><b>name:</b> {{{ $season->name }}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection