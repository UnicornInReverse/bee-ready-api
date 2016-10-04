@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Plant {{{ $plant->name }}}
                    
                    <p class="pull-right">
                        <a class="link" href="{{ url('/plant/'. $plant->id. '/edit') }}">
                            edit
                        </a>
                         |
                        <a class="link" href="{{ url('/plant/' . $plant->id . '/delete') }}">
                            delete
                        </a>
                    </p>
                </div>

                <div class="panel-body">
                    <p><b>Season:</b> {{{ $plant->season->name }}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection