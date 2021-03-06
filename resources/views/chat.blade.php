@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Chatroom
                    </div>

                    <chat-log :messages="messages"></chat-log>
                    <chat-composer v-on:messagesent="addMessage"></chat-composer>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Online users in room
                        <span class="badge pull-right">@{{ usersInRoom.length }}</span>
                    </div>
                    <ul>
                        <li class="usOn" v-for='(user, index) in usersInRoom'>@{{index+1}} - @{{user.name}} - <span class="on"> Online</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
