@extends('admin')

@section('styles')
  <script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
@endsection

@section('PageHeader')
  <h1>
    Edit Post
    <small>Edit/Amend Existing Post</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">Posts</li>
  </ol>
@endsection

@section('content')
    <div class='row'>
        <div class='col-md-12'>
            <div class="box box-primary">
                <div class="box-body">
                    {!! Form::model($post, ['url' => route('admin.posts.update', ['id' => $post->id]), 'role' => 'form', 'files'=>true, 'class' => 'form-horizontal', 'method' => 'PATCH']) !!}
                    @include('admin.modules.posts._form')
              			<div class="box-footer">
                			<button type="submit" class="btn btn-info">Save Post</button>
              			</div>
            		    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footerScript')
  <script>
      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
                  $('#blah')
                      .attr('src', e.target.result);
              };
              reader.readAsDataURL(input.files[0]);
          }
      }
  
      CKEDITOR.replace( 'body', {
          filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
          filebrowserBrowseUrl: '/laravel-filemanager?type=Files'
      });
  </script>
@endsection