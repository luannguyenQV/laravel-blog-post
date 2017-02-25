@extends('admin')

@section('styles')
  <script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
@endsection

@section('PageHeader')
    <h1>
       Tạo mới bài viết
       <small>Tạo mới bài viết</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>[Admin]</a></li>
        <li class="active">[Posts]</li>
      </ol>
@endsection

@section('content')
    <div class='row'>
      <div class='col-md-12'>
        <!-- Box -->
        <div class="box box-primary">
          <div class="box-body">
            {!! Form::open(['url' => route('admin.posts.store'), 'role' => 'form', 'class' => 'form-horizontal', 'files'=>true, 'method' => 'POST']) !!}

            @include('admin.modules.posts._form')
           
            <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Save Post</button>
            </div>

            {!! Form::close() !!}
          </div><!-- /.box-body -->
          <!-- /.box-footer-->
       </div><!-- /.box -->
     </div><!-- /.col -->
    </div><!-- /.row -->
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