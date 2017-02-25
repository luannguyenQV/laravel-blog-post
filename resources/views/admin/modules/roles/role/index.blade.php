@extends('admin')

@section('PageHeader')
    <h1>
        Roles Management
        <small>View all Roles</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Roles</li>
      </ol>
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="pull-right"><a href="{{ route('admin.roles.create') }}" class="btn btn-success">Create Roles</a></div>		
		<hr>
	</div>
</div>

@if ($message = Session::get('success')) 
	<div class="alert alert-success">
		<p>{{ $message }}</p>
	</div>
@endif

<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-body">
				<table class="table table-striped table-bordered table-advance table-hover" id="Table_List">
					<thead>
						<tr>
							<th>No</th>
							<th>Roles Name</th>
							<th>Permissions</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 0; ?>
						<?php foreach ($data as $key => $role): ?>
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $role->display_name }}</td>
							<td>
								<?php foreach ($role->perms as $perm): ?>
									<label class="label label-success">{{ $perm->display_name }}</label>
								<?php endforeach ?>
							</td>
							<td>
								@permission('role-edit')
									<a class="btn btn-info" href="{{ route('admin.roles.edit', ['id' => $role->id]) }}">Edit</a>
								@endpermission	
							</td>
							<td>
								@permission('role-edit')
                                    {!! Form::model($role, ['url' => route('admin.roles.destroy', ['id' => $role->id]), 'role' => 'form', 'class' => 'form-horizontal', 'files' => true, 'method' => 'DELETE']) !!}
                                        <button href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    {!! Form::close()!!}                                                       
								@endpermission	
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
				{!! $data->render() !!}
			</div>
		</div>
	</div>
</div>

@endsection