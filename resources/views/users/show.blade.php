@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    User
                    
                    <a class="pull-right" href="{{ url('/user/' . $user->id . '/edit') }}">
                        edit
                    </a>
                </div>
                <div class="panel-body">
                    <p><b>name:</b> {{{ $user->name }}}</p>
                    <p><b>email:</b> {{{ $user->email }}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection