@extends('layouts.layout')

@section('head')
@stop

@section('slider')
	<div class="container" style="height: 60px;"></div>
@stop

@section('content')

<div class="row text-center" style="padding: 0;">
	<h1>ĐĂNG KÝ XÉT TUYỂN TRỰC TUYẾN</h1>
	<hr>
    {!! Form::open(['url' => route('store.xettuyen'), 'role' => 'form', 'class' => 'form-horizontal', 'files'=>true, 'method' => 'POST']) !!}
		
    	@include('frontend.partials._xettuyen')
   
    <div class="box-footer center-block text-center">
        <button type="submit" class="btn btn-info" style=";width: 20%;">ĐĂNG KÝ</button>
        <button type="reset" class="btn btn-default" style=";width: 20%;">VIẾT LẠI</button>
    </div>

    {!! Form::close() !!}
</div>

{!! Html::script("frontend/js/bootstrap.min.js") !!}
@stop
