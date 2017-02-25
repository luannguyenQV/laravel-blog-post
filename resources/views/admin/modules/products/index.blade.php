@extends('admin')

@section('PageHeader')
    <h1>
        Danh sách Sản phẩm
        <small>Hiển thị tất cả sản phẩm</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> [Admin]</a></li>
        <li class="active">[Products]</li>
    </ol>
@endsection

@section('content')
    <div class='row'>
        <div class='col-md-12'>
            <!-- Box -->
            <div class="box box-primary">

                <div class="box-body">

                    <table class="table table-striped table-bordered table-advance table-hover" id="Table_List">
                        <thead>
                        <tr>
                            <th>Edit</th>
                            <th>Show</th>
                            <th>Hide</th>
                            <th>Img</th>
                            <th>Title</th>
                            <th>Excerpt</th>
                            <th>View</th>
                            <th class="hidden-phone">Date</th>
                            <th class="hidden-phone">Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($products as $product)
                            <tr>
                                <td class="highlight">
                                    <div class="warning"></div>
{{--                                    <a href="{{ URL::route('posts.edit', ['id' => $post->id]) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>--}}
                                </td>
                                <td><a href="#" class="btn btn-sm btn-success"><i class="fa fa-thumbs-up"></i></a></td>
                                <td><a href="#" class="btn btn-sm btn-warning"><i class="fa fa-thumbs-down"></i></a></td>
                                <td>
                                    <img width="100px" height="auto" src="{{ URL::to('assets/products/' . $product->img) }}">
                                </td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->abstract }}</td>
                                <td><a href="#" class="btn mini red">Preview</a></td>
                                <td class="hidden-phone">{{ $product->updated_at }}</td>
                                <td class="hidden-phone"><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>


                </div><!-- /.box-body -->
                <!-- /.box-footer-->
            </div><!-- /.box -->
        </div><!-- /.col -->

    </div><!-- /.row -->
@endsection