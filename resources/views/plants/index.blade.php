@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <form method="POST" action="{{ url('plant/search') }}">
                    <input id="keyword" type="text" class="form-control" name="keyword" placeholder="search" autofocus="autofocus" required="required" value="{{{ $keyword}}}">

                    {{ csrf_field() }}
                </form>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Planten
                    
                    <a class="pull-right  link" href="{{ url('/plant/new') }}">
                        new
                    </a>
                </div>
                <div class="panel-body">
                    @foreach($plants as $plant)
                        <div class="selectable-item">
                            <a href="{{ url('plant/' . $plant->id) }}">
                                <p><b>name:</b> {{{ $plant->name }}}</p>
                                <p><b>season:</b> {{{ $plant->season->name }}}</p>
                            </a>
                        </div>
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