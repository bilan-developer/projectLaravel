@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                  <p>Все пользователи</p>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-body">

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr >
                                        <td>№</td>
                                        <td>Email</td>
                                        <td>login</td>
                                        <td>activ</td>
                                        <td>Ip</td>
                                    </tr>
                                    {{--@foreach($users as $user)--}}
                                    <tr>
                                        <td> {{$user['user']->id}}</td>
                                        <td> {{$user['user']->name}}</td>
                                        <td> {{$user['user']->email}}</td>
                                        <td> {{$user['time']}}</td>
                                        <td> {{$user['ip']}}</td>
                                    </tr>
                                    {{--@endforeach--}}
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
