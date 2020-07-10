@extends('layouts.frontend.noteindex')
@section('content')
<style>
    .notes-heading{
        margin-top: 22px;
        margin-bottom: 11px;
        font-size: 32px;
        font-weight: bold;
        font-family: helvetica;
        text-decoration: underline;
        text-transform: capitalize;
    }

    .notes-select:hover{
        background-color: #caf0f8;
        color: #00b4d8;
    }
    .notes-title{
        color: #03045e;
    }
    
    .notes-update{
        float: right;
    }
    </style>
<div class="container">
. . .
. 
..
.
. 
. 
. ... . 
. . .. ... . 
 .. . . . .. 
</div>
<div class="container">
. . .
. 
..
.
. 
. 
. ... . 
. . .. ... . 
 .. . . . .. 
</div>
<div class="container">
^
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading notes-heading">My notes</div>
                    <div class="panel-body">

                        @if($notes->isEmpty())
                            <img src="no-notes.png">
                            <p>
                                You have not created any notes! <a href="{{ url('notes/create') }}">Create one</a> now.
                            </p>
                        @else
                        <ul class="list-group">
                            @foreach($notes as $note)
                                <li class="list-group-item notes-select">
                                    <a href="{{ url('notes/edit', [$note->slug]) }}" class="notes-title">
                                        {{ $note->title }}
                                    </a>
                                    <span class="pull-right notes-update">{{ $note->updated_at->diffForHumans() }}</span>
                                </li>
                            @endforeach
                        </ul>
                        @endif
                        <br>
                        <div class="panel-heading notes-heading">Class notes</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
@endsection