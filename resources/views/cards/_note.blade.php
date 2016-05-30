@cache($note)
    <h1>{{ $note->body }}</h1>
@endcache

{{--if(check_cached_note($note)){--}}
    {{--<h1>{{ $note->body }}</h1>--}}
{{--}--}}
