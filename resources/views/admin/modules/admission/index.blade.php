@extends('admin')

@section('PageHeader')
    <h1>
        Danh sách Đăng ký xét tuyển
        <small>Hiển thị tất cả Đăng ký xét tuyển</small>
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
                            <th>Họ tên</th>
                            <th>CMND</th>
                            <th>Ngày sinh</th>
                            <th>Đăng ký bậc học</th>
                            <th>KV Ưu tiên</th>
                            <th>Khối xét tuyển</th>
                            <th>Điện thoại</th>
                            <th>Email</th>
                            <th class="hidden-phone">Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($admissions as $admission)
                            <tr>
                                <td>{{ $admission->hoten }}</td>
                                <td>{{ $admission->CMND }}</td>
                                <td>{{ $admission->ngaysinh }}</td>
                                <td>{{ $admission->dangkybachoc }}</td>
                                <td>{{ $admission->doituongthuockhuvucuutien }}</td>
                                <td>{{ $admission->khoixettuyen }}</td>
                                <td>{{ $admission->dienthoai }}</td>
                                <td>{{ $admission->email }}</td>
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