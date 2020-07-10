@extends('layouts.frontend.noteindex')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="{{ route('notes.index', $course->course_slug) }}">My notes</a>---->       Student's Notes</div>
                    <div class="panel-body">
                        @if($notes->isEmpty())
                            <p>
                                No notes found from other students.
                            </p>
                        @else
                        <ul class="list-group">
                            @foreach($notes as $note)
                                <li class="list-group-item">
                                    <a href="{{ route('notes.view', [$course->course_slug, $note->slug]) }}">
                                        {{ $note->title }}
                                    </a>
                                    <span class="pull-right">{{ $note->updated_at->diffForHumans() }}</span>
                                    <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="{{ $note->rating }}" data-size="xs" disabled="">
                                </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('notes.create', $course->course_slug) }}">Create one</a>
    </div>
    
<script type="text/javascript">
    $("#input-id").rating();
</script>
@endsection