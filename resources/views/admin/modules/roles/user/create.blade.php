@extends('admin')

@section('PageHeader')
    <h1>User <small>Tạo mới User</small></h1>
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
                    <div class="form-group">
                        {!! Form::label('name', 'Name', ['class' => 'col-md-2 control-label']) !!}
                        <div class="col-sm-7">
                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                            {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                        </div>

                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Mail', ['class' => 'col-md-2 control-label']) !!}
                        <div class="col-sm-7">
                            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', 'Password', ['class' => 'col-md-2 control-label']) !!}
                        <div class="col-sm-7">
                            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('confirm-password', 'Confirm Password', ['class' => 'col-md-2 control-label']) !!}
                        <div class="col-sm-7">
                            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('', 'Roles', ['class' => 'col-md-2 control-label']) !!}
                        <div class="col-sm-7">
                        @foreach($roles as $role)
                            <div style="display: block; border-bottom: 1px solid #eee;">
                                {!! Form::checkbox($role->id, $role->id, null) !!}
                                {!! Form::label($role->id, $role->name, ['class' => 'control-label', 'style' => 'padding-left:10px']) !!}
                            </div>
                        @endforeach
                        </div>
                    </div>

                    <div class="box-footer text-center" style="vertical-align: center;">
                        <button type="submit" class="btn btn-info pull-right">Save User</button>
                    </div>

                {!! Form::close() !!}
                </div><!-- /.box-body -->
                <!-- /.box-footer-->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->

@endsection