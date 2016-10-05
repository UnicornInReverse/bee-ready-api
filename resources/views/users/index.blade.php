@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Users
                    
                    <a class="pull-right link" href="{{ url('/user/new') }}">
                        new
                    </a>
                </div>
                <div class="panel-body">
                    @foreach($users as $user)
                        <div class="selectable-item">
                            <a href="{{ url('user/' . $user->id) }}">
                                <p><b>name:</b> {{{ $user->name }}}</p>
                                <p><b>email:</b> {{{ $user->email }}}</p>
                            </a>
                        </div>
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