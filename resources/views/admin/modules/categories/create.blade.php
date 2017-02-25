@extends('admin')

@section('PageHeader')
    <h1>
        Tạo mới Category
        <small>Tạo mới category</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Categories</li>
        <li class="active">Create</li>
    </ol>
@endsection

@section('content')
<div class='row'>   
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::open(['url' => route('admin.categories.store'), 'role' => 'form', 'class' => 'form-horizontal', 'method' => 'POST']) !!}
                    
                    @include('admin.modules.categories._form', compact('categories'))

                    <div class="box-footer">
                        <button class="btn btn-info pull-right" type="submit">Create New Category</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div><!-- /.row -->
@endsection