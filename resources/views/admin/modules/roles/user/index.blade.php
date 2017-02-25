@extends('admin')

@section('PageHeader')
    <h1>
        User Management
        <small>View all User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Users</li>
      </ol>
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="pull-right"><a href="{{ route('admin.users.create') }}" class="btn btn-success">Create User</a></div>		
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
							<th>Name</th>
							<th>Email</th>
							<th>Roles</th>
							<th>Todo</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 0; ?>
						<?php foreach ($data as $key => $user): ?>
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>
								@if(!empty($user->roles))
									<?php foreach ($user->roles as $role): ?>
										<label class="label label-success">{{ $role->display_name }}</label>
									<?php endforeach ?>
								@endif
							</td>
							<td>active</td>
							<td><a href="{{ route('admin.users.edit', ['id' => $user->id] ) }}" title="">Edit</a></td>
							<td>delete</td>
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