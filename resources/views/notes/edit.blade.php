@extends('layouts.frontend.noteindex')
@section('content')
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
                    <div class="panel-heading">Create new note</div>
                    <div class="panel-body">
                        <form action="{{ url('notes/create') }}" method="POST" class="form" role="form">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="title" value="{{ $note->title }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                <textarea class="form-control" name="body" rows="15" required>{{ $note->body }}</textarea>

                                @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection