<div class="form-group">
     {!! Form::label('title', 'Title', ['class' => 'col-md-2 control-label']) !!}
     <div class="col-sm-6">
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Post Title']) !!}
        {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('image', 'Image', ['class' => 'col-md-2 control-label']) !!}
    @if(isset($post))
        <img src="{{ url('assets/blog/' . $post->image_id) }}" id="blah" class="thumb img-responsive col-md-4 control-label" alt="post-img">      
    @else
        <img src="{{ url('assets/blog/default.png') }}" id="blah" class="thumb img-responsive col-md-4 control-label" alt="post-img">     
    @endif
    {!! Form::file('image', ['class' => 'col-md-4', 'onchange' => 'readURL(this)']) !!}
</div><!-- END IMG -->

<div class="form-group">
    {!! Form::label('excerpt', 'Excerpt', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '3']) !!}
        {!! $errors->first('excerpt', '<span class="help-block">:message</span>') !!}
    </div>
 </div>

<div class="form-group">
    {!! Form::label('body', 'Main Content', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::textarea('body', null, ['class' => 'form-control ckeditor']) !!}
        {!! $errors->first('body', '<span class="help-block">:message</span>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-2 control-label"><b>Categories</b></div>
    <div class="col-sm-9">
        @foreach($categories as $node)
            <div style="display: block;border-bottom: 1px solid #eee;">
            @if (isset($curCategory))
                @if ($curCategory->contains('id', $node->id))  
                    {!! Form::checkbox($node->id, $node->id, true) !!}
                @else
                    {!! Form::checkbox($node->id, $node->id, null) !!}
                @endif
                    {!! Form::label($node->id, $node->name, ['class' => 'control-label', 'style' => 'padding-left:10px']) !!}
            @else
                {!! Form::checkbox($node->id, $node->id, null) !!}
                {!! Form::label($node->id, $node->name, ['class' => 'control-label', 'style' => 'padding-left:10px']) !!}
            @endif
            </div>
        @endforeach    
    </div>
</div>

<div class="form-group">
    {!! Form::label('tags', 'Tags', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        @if(isset($post) && count($post->tags)>0)
            <?php $tags = implode(',', $post->tags->lists('name')->toArray()); ?>
        @else
            <?php $tags = null; ?>
        @endif
            {!! Form::text('tags', $tags, ['class' => 'form-control', 'data-role' => 'tagsinput']) !!}
            {!! $errors->first('tags', '<span class="help-block">:message</span>') !!}
    </div>
</div>