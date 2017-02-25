@extends('layouts.layout')

@section('head')
@stop

@section('slider')
    <div class="container" style="margin-top: 80px;"></div>
@stop

@section('content')

<div class="row">
	<article>
		<header>
			<h1>{{ $post->title }}</h1>
			<p class="postdatetime">{{ $post->updated_at }} | Cao Đẳng Viễn Đông</p>
		</header>
		<section>
			<p><?php echo $post->body; ?></p>
		</section>
		<section>
			<hr>
		</section>
		<section> <!--Bài viết liên quan-->
			<h4>Bài viết liên quan:</h4>
			<ul id="relationPost">
				@foreach($relationPost as $rPost)
					<li><a href="{{ url('bai-viet/'.$rPost->slug) }}">{{ $rPost->title }}</a></li>
				@endforeach
			</ul>
		</section>
	</article>
</div>

<div class="row"> <!--BAI VIET LIEN QUAN-->
	<div class="col-md-12 col-xs-12">
		@include('layouts.partials.lastedpostfull')
	</div>
</div>

@stop
