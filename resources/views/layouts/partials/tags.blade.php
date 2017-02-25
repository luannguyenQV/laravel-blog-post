<div class="tagcloud">
    @if(isset($tags))
        @foreach($tags as $tag)
            <a href="">{!! $tag->name !!}</a>
        @endforeach
    @endif
</div>
