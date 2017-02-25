<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Cao Đẳng Viễn Đông</title>
    <meta name="author" content="luannguyen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    {!! Html::style("frontend/css/bootstrap.css") !!}
    {!! Html::style("frontend/css/font-awesome.min.css") !!}
    {!! Html::style("frontend/css/main.css") !!}
    @yield('head') <!--Heading Script-->
</head><!--/head-->

<body>

@include('layouts.menu')

@yield('slider') <!--Only For Home-->

<div class="container">
	<div class="row">
		<div class="col-md-8 col-xs-12">
			@yield('content')
		</div>
		<div class="col-md-4 col-xs-12">
		    <div class="row" style="margin-left: 15px;">
				@include('layouts.partials.aside')
		    </div>
		</div>
	</div>

</div>

@include('layouts.footer')

{!! Html::script("frontend/js/jQuery-2.1.4.min.js") !!}
{!! Html::script("frontend/js/bootstrap.min.js") !!}
{!! Html::script("frontend/js/main.js") !!}
@yield('footerscript')
<script>
</script>
</body>
</html>
