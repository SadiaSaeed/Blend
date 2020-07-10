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
                    <div class="panel-heading">My notes---->       <a href="{{ route('notes.others', $course->course_slug) }}">Student's Notes</a></div>
                    <div class="panel-body">

                        @if($notes->isEmpty())
                            <img src="no-notes.png">
                            <p>
                                You have not created any notes! <a href="{{ route('notes.create', $course->course_slug) }}">Create one</a> now.
                            </p>
                        @else
                        <ul class="list-group">
                            @foreach($notes as $note)
<<<<<<< HEAD
                                <li class="list-group-item">
                                    <a href="{{ route('notes.edit', [$course->course_slug, $note->slug]) }}">
=======
                                <li class="list-group-item notes-select">
                                    <a href="{{ url('notes/edit', [$note->slug]) }}" class="notes-title">
>>>>>>> e8921f21900de0024b54ad5bf006636a0b89c354
                                        {{ $note->title }}
                                    </a>
                                    <span class="pull-right">{{ $note->updated_at->diffForHumans() }}</span>
                                    <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="{{ $note->rating }}" data-size="xs" disabled="">
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
        <a href="{{ route('notes.create', $course->course_slug) }}">Create one</a>
    </div>
    <br>
    <br>
    <br>
<script type="text/javascript">
    $("#input-id").rating();
</script>
@endsection