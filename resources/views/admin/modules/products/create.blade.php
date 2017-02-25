@extends('admin')

@section('styles')
        <!-- ckEditor -->
<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
@endsection

@section('PageHeader')
    <h1>
        Tạo mới sản phẩm
        <small>Tạo mới sản phẩm</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>[Admin]</a></li>
        <li class="active">[Products]</li>
    </ol>
@endsection

@section('content')
    <div class='row'>
        <div class='col-md-12'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-body">
                    {!! Form::open(['url' => route('products.store'), 'role' => 'form', 'class' => 'form-horizontal', 'files'=>true, 'method' => 'POST']) !!}

                    @include('backend.products._form', $categories)

                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Save Product</button>
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
        CKEDITOR.replace( 'body', {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files'
        });
    </script>

@endsection