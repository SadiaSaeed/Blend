@extends('layouts.frontend.noteindex')
@section('content')
<style>
    .notes-heading{
        
        margin-bottom: 11px;
        font-size: 18px;
        font-weight: bold;
        font-family: helvetica;
        text-decoration: underline;
        text-transform: capitalize;
        color: white;
        padding: 10px 15px;
        background-color: #00b4d8;
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
   <br>
   <br> 

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <a href="{{ route('notes.index', $course->course_slug) }}" class="notes-heading">My notes</a>
                    <a href="{{ route('notes.others', $course->course_slug) }}">Student's Notes</a></div>
                    <div class="panel-body">

                        @if($notes->isEmpty())
                            <img src="no-notes.png">
                            <p>
                                You have not created any notes! <a href="{{ route('notes.create', $course->course_slug) }}">Create one</a> now.
                            </p>
                        @else
                        <ul class="list-group">
                            @foreach($notes as $note)
                                <li class="list-group-item notes-select">
                                    <a href="{{ url('notes/edit', [$note->slug]) }}" class="notes-title">
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