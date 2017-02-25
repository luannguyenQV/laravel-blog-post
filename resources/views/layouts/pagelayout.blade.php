@extends('layouts.layout')

@section('head')
@stop

@section('slider')
    <div class="container" style="margin-top: 80px;"></div>
@stop

@section('content')

    <div class="row">
        @if(isset($title))
            <h1 style="border-bottom: 1px solid #aaa">Cao Đẳng Viễn Đông - {{ $title }}</h1>
        @else
            <h1>Cao Đẳng Viễn Đông</h1>
        @endif
    </div>

@if (isset($posts))
<div class="row">
    @foreach($posts as $post)
        <article style="border: none; margin-bottom: 20px; display: block; padding: 0;">
            <section class="postthumnailsimg">
                <img class="img img-responsive full-width" src="{{ url('/assets/blog/'.$post->image_id) }}">
            </section>
            <section class="postthumnailscontent">
                <h1><a href="{{ 'bai-viet/' . $post->slug  }}">{{ $post->title }}</a></h1>
                <p class="postdatetime">{{ $post->updated_at }}</p>
                <p>{{ $post->excerpt  }}</p>
            </section>
        </article>
        <hr>
    @endforeach
</div>
@else
    <div class="row">
        <h4>Đang cập nhật</h4>
    </div>
@endif

@stop
