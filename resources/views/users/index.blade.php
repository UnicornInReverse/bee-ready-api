@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Users
                    
                    <a class="pull-right" href="{{ url('/user/new') }}">
                        new
                    </a>
                </div>
                <div class="panel-body">
                    @foreach($users as $user)
                        <a href="{{ url('user/' . $user->id) }}">
                            <div>
                                <p><b>name:</b> {{{ $user->name }}}
                                <p><b>season:</b> {{{ $user->email }}}</p>
                            </div>
                        </a>
                        <hr>
                    @endforeach
                    <div class="pull-right">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection