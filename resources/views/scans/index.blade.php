@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Scans</div>
        
                <div class="panel-body">
                <table class="table">
                    <thead>
                        <th>plant</th>
                        <th>user</th>
                        <th>longitude</th>
                        <th>latitude</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($scans as $scan)
                            <tr>
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
                                <td>
                                    {{{ $scan->longitude }}}
                                </td>
                                <td>
                                    {{{ $scan->latitude }}}
                                </td>
                                <td>
                                    <a href="{{ url('scan/' .$scan->id . '/delete') }}">
                                        delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
