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
                {!! Form::open(['url' => route('admin.categories.update', $category->id), 'role' => 'form', 'class' => 'form-horizontal', 'method' => 'PUT']) !!}
                
                <div class="form-group">
                    {!! Form::label('title', 'Select Parent', ['class' => 'col-md-2 control-label']) !!}
                    <div class="col-sm-6">                        
                    @if (isset($category->parent_id))
                        {!! Form::select('category', $categories, $category->parent_id, ['class' => 'form-control']) !!}
                    @else
                        {!! Form::select('category', $categories, '0', ['class' => 'form-control']) !!}
                    @endif
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('title', 'Category Name', ['class' => 'col-md-2 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Category Name']) !!}     
                    </div>
                </div>
                    <div class="box-footer">
                        <button class="btn btn-info pull-right" type="submit">Save Category</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div><!-- /.row -->
@endsection