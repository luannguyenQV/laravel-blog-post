<div class="form-group">
    {{ Form::label('title', 'Title', ['class' => 'col-md-2 control-label']) }}
    <div class="col-sm-6">
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Product Title']) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('abstract', 'Abstract', ['class' => 'col-md-2 control-label']) }}
    <div class="col-sm-6">
        {!! Form::textarea('abstract', null, ['class' => 'form-control', 'rows' => '3', 'placeholder' => 'Abstract - Mô tả ngắn gọn']) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('body', 'Body', ['class' => 'col-md-2 control-label']) }}
    <div class="col-sm-9">
        {!! Form::textarea('body', null, ['class' => 'form-control ckeditor', 'placeholder' => 'Body - Mô tả chi tiết']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('image', 'Image', ['class' => 'col-md-2 control-label']) !!}

    {!! Form::file('image', ['class' => 'col-md-4']) !!}
</div>

<div class="form-group">
    {{ Form::label('producer', 'Producer', ['class' => 'col-md-2 control-label']) }}
    <div class="col-sm-6">
        {!! Form::text('producer', null, ['class' => 'form-control', 'placeholder' => 'Producer']) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('price', 'Price', ['class' => 'col-md-2 control-label']) }}
    <div class="col-sm-6">
        {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Producer']) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('features', 'Features', ['class' => 'col-md-2 control-label']) }}
    <div class="col-sm-9">
        {!! Form::textarea('features', null, ['class' => 'form-control', 'placeholder' => 'Body - Mô tả chi tiết']) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('specifications', 'Specifications', ['class' => 'col-md-2 control-label']) }}
    <div class="col-sm-9">
        {!! Form::textarea('specifications', null, ['class' => 'form-control', 'placeholder' => 'Body - Mô tả chi tiết']) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('document', 'Document', ['class' => 'col-md-2 control-label']) }}
    <div class="col-sm-9">
        {!! Form::textarea('document', null, ['class' => 'form-control', 'placeholder' => 'Body - Mô tả chi tiết']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-2 control-label"><b>Categories</b></div>
    <div class="col-sm-9">

    </div>
</div>

@foreach($categories as $node)
<div class="form-group">
    <div class="col-sm-2"></div>
    <div class="col-sm-9">
        {!! Form::checkbox($node->id, $node->id, null) !!}
        {!! Form::label($node->id, $node->category, ['class' => 'control-label']) !!}
    </div>
</div>
@endforeach



