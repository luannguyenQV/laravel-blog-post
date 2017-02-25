@extends('layouts.layout')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h1>{{ $title }}</h1>
                <hr class="top">
                <div class="row">
                    <div class="col-md-3">
                        <div>
                            <h4>Bài viết mới nhất</h4>
                            <hr>
                        </div>
                        @include('layouts.partials.lastedpost')
                        <div>
                            <hr>
                        </div>
                    </div> <!-- aside -->
                    <div class="col-md-9">
                        <div class="row">
                            <h1>{{ $post->title }}</h1>
                            <div class="post-entry-meta">
                                <span><i class="icon-user"></i> <a href="#">an nguyên </a> </span>
                                <span datetime="{!! $post->created_at !!}" class="time"> <i class="icon-time"></i> {{ $post->created_at }}</span>
                            </div>
                            <div>
                                <p>
                                    <b>{{ $post->excerpt }}</b>
                                </p>
                            </div>
                            <div class="post-body">
                                <p><?php echo $post->body ?></p>
                            </div>
                            <hr>
                            <div class="tagcloud">
                                @if(isset($tags))
                                    <h4>Tags:</h4>
                                    @foreach($tags as $tag)
                                        <a href="">{!! $tag->name !!}</a>
                                    @endforeach
                                @endif
                            </div>
                            <hr>
                            <div>
                                <h4>Bài viết liên quan:</h4>
                            </div>
                        </div> <!--End Post-->
                    </div>
                </div>

            </div> <!-- contain -->
        </div>
    </div> <!-- main -->

@stop
