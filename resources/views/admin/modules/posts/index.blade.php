@extends('admin')

@section('PageHeader')
    <h1>
        Posts List
        <small>view all existing Posts</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Posts</li>
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
<!--                                 <th>Show</th>
                                <th>Hide</th>
 -->                            <th>Img</th>
                                <th>Title</th>
                                <th>Excerpt</th>
                                <th>View</th>
                                <th class="hidden-phone">Date</th>
                                <th class="hidden-phone">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($posts as $post)
                                <tr>
                                    <td class="highlight">
                                        <div class="warning"></div>
                                        <a href="{{ URL::route('admin.posts.edit', ['id' => $post->id]) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                    </td>
<!--                                     <td><a href="#" class="btn btn-sm btn-success"><i class="fa fa-thumbs-up"></i></a></td>
                                    <td><a href="#" class="btn btn-sm btn-warning"><i class="fa fa-thumbs-down"></i></a></td>
 -->                                    <td>
                                        <img width="100px" height="auto" src="{{ URL::to('assets/blog/' . $post->image_id) }}">
                                    </td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->excerpt }}</td>
                                    <td><a target="_blank" href="{{ URL::to('bai-viet/' . $post->slug) }}" class="btn mini red">Preview</a></td>
                                    <td class="hidden-phone">{{ $post->updated_at }}</td>
                                    <td class="hidden-phone">
                                        {!! Form::model($post, ['url' => route('admin.posts.destroy', ['id' => $post->id]), 'role' => 'form', 'class' => 'form-horizontal', 'files' => true, 'method' => 'DELETE']) !!}
                                            <button href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>                                        
                                        {!! Form::close() !!}                    
                                    </td>
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