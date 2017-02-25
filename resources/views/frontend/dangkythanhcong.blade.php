@extends('layouts.layout')

@section('head')
@stop

@section('slider')
	<div class="container" style="height: 60px;"></div>
@stop

@section('content')

	<div class="row text-center" style="padding-top: 40px;">
		<h4>Chúc mừng bạn đã đăng ký xét tuyển thành công vào Cao Đẳng Viễn Đông</h4>
	</div>
	<div class="row text-center" style="padding-top: 40px;">
		<a href="{{ route('dkxetuyen') }}" class="btn btn-default"><< quay lại</a>
	</div>

@stop