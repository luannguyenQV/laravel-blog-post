@extends('admin')

@section('content')
    <div class='row'>
        <div class='col-md-6'>
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Bản quyền Viễn Đông</h3> 
                </div>
                <div class="box-footer">
                    Website bản quyền Cao Đẳng Viễn Đông
                </div>
            </div>
        </div>
        <div class='col-md-6'>
        </div>
    </div>
    <div class='row'>
        <div class='col-md-6'>
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Số lượng bài viết</h3> 
                </div>
                <div class="box-footer">
                    <p>Số lượng bài viết: <span class="label label-warning">{{ $numOfPost }}</span></p>
                    <div>
                        <a style="display: inline-block" class="btn btn-default pull-right" href="{{ route('admin.posts.create') }}" title="">Tạo mới bài viết</a>
                        <a style="display: inline-block" class="btn btn-default pull-right" href="{{ route('admin.posts.index') }}" title="">Danh sách bài viết</a>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-md-6'>
        </div>
    </div>
    <div class='row'>
        <div class='col-md-6'>
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Số thành viên</h3> 
                </div>
                <div class="box-footer">
                    <p>Số lượng thành viên: <span class="badge">{{ $numOfUser }}</span></p>
                </div>
            </div>
        </div>
        <div class='col-md-6'>
        </div>
    </div>

@endsection