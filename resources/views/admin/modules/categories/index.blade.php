@extends('admin')

@section('PageHeader')
    <h1>
        Danh sách Categories
        <small>Hiển thị tất cả Categories</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Categories</li>
    </ol>
@endsection

@section('content')
@if ($message = Session::get('success')) 
    <div class="alert alert-success">
        <p><?php echo $message?></p>
    </div>
@endif
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
                <ul class="category">
                    <?php foreach($categories as $node): ?>
                        <?php echo StaticFunc::renderNodeBackend($node); ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div><!-- /.row -->
@endsection