@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Plant {{{ $plant->name }}}
                    
                    <a class="pull-right" href="{{ url('/plant/' . $plant->id . '/edit') }}">
                        edit
                    </a>
                </div>

                <div class="panel-body">
                    <p><b>Season:</b> {{{ $plant->season->name }}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection