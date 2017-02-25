@extends('admin')

@section('PageHeader')
    <h1>
        Category
        <small>Hiển thị chi tiết Category</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Categories</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="pull-right">
            <a href="{{ route('admin.categories.create') }}" class="btn btn-success">Create Categories</a>
        </div>       
        <hr>
    </div>
</div>

<div class='row'>   
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Category: <strong>{{ $category->name }}</strong></h4>
                        <p>Description:</p>
                        @if(isset($category->description))
                            <p>{{ $category->description }}</p>
                        @else 
                            <p>chưa có mô tả</p>
                        @endif
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-1 col-xs-3">                                                  
                        {!! Form::open(['route' => ['admin.categories.destroy', $category->slug], 'role' => 'form', 'class' => 'form-horizontal', 'method' => 'DELETE']) !!}
                            <button type="submit" class="btn btn-info pull-right"> Delete </button>
                        {!! Form::close() !!}
                    </div>
                    <div class="col-md-1 col-xs-3">
                        <a href="{{ url('admin/categories/' . $category->id . '/edit') }}" class="btn btn-success"> Edit </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.row -->
@endsection