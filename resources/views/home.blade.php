@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {{-- <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="dashboard-btns">
                        <a href="{{ url('plant') }}" class="btn btn-default dashboard-item">Plants</a>
                        <a href="{{ url('user') }}" class="btn btn-default dashboard-item">Users</a>
                        <a href="{{ url('scan') }}" class="btn btn-default dashboard-item">Scans</a>
                        <a href="{{ url('season') }}" class="btn btn-default dashboard-item">Seasons</a>
                    </div>
                </div>
            </div> --}}

            <div class="panel panel-default">
                <div class="panel-heading">
                    Users

                    <p class="pull-right">
                        <a href="{{ url('user') }}" >all</a>
                         | 
                        <a href="{{ url('user/new') }}" >new</a>
                    </p>
                </div>

                <div class="panel-body">
                <div class="panel panel-default">
                    <form method="POST" action="{{ url('user/search') }}">
                        <input id="keyword" type="text" class="form-control" name="keyword" placeholder="search users" required="required">

                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Recent scans

                    <p class="pull-right">
                        <a href="{{ url('/scan') }}">all</a>
                    </p>

                </div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <th>plaats</th>
                            <th>plant</th>
                            <th>user</th>
                        </thead>
                        <tbody>
                            @foreach($scans as $scan)
                                <tr>
                                    <td>
                                        Rotterdam
                                    </td>
                                    <td>
                                        <a href="{{ url('plant/' . $scan->plant->id) }}">
                                            {{{ $scan->plant->name }}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ url('user/' . $scan->user->id) }}"> 
                                            {{{ $scan->user->name }}}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
