@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Planten
                    
                    <a class="pull-right" href="{{ url('/plant/new') }}">
                        new
                    </a>
                </div>
                <div class="panel-body">
                    @foreach($plants as $plant)
                        <a href="{{ url('plant/' . $plant->id) }}">
                            <div>
                                <p><b>name:</b> {{{ $plant->name }}}
                                <p><b>season:</b> {{{ $plant->season->name }}}</p>
                            </div>
                        </a>
                        <hr>
                    @endforeach
                    <div class="pull-right">
                        {{ $plants->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection