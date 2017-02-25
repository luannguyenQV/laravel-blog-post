<div>
    @foreach($posts as $post)
        <div class="media">
            <div class="pull-left">
                @if($post->image_id)
                    <a href=""><img src="{!! url('assets/blog/' . $post->image_id) !!}" alt=""></a>
                @else
                    <a href=""><img src="{!! url('assets/blog/' . $post->image_id) !!}" alt=""></a>
                @endif
            </div>
            <div class="media-body">
                <p class="media-heading"><a href="{!! URL::route('post.show', array('slug'=> $post->slug )) !!}">{!! $post->title !!}</a></p>
                <p class="muted">{!! $post->created_at !!}</p>
            </div>
        </div>
    @endforeach
</div>
