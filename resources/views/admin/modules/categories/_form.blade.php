<div class="form-group">
	{!! Form::label('title', 'Select Parent', ['class' => 'col-md-2 control-label']) !!}
	<div class="col-sm-6">	
	{!! Form::select('category', $categories, array('0'), ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('title', 'Category Name', ['class' => 'col-md-2 control-label']) !!}
	<div class="col-sm-6">
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Category Name']) !!}		
	</div>
</div>
