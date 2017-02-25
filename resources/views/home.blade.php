@extends('layouts.layout')

@section('head')
@stop

@section('slider')
    @include('layouts/slide')
@stop

@section('content')

<div class="row paddingbot40">  <!-- GIOI THIEU CONTENT -->
    <h4 class="block-title" id="block-title-color_1">
        <span>GIỚI THIỆU</span>
    </h4>    
    <div class="col-md-12 col-xs-12">
        <div class="row">
            <div class="col-md-6 col-xs-6 col-sm-6">
                <div class="row largethumnail" style="padding-right: 25px;">
                    <div class="postimage">
                    <a href="{{ url('/bai-viet/' . $fgioithieu->slug ) }}">
                        <img class="img img-responsive full-width" src="{{ url( '/assets/blog/'.$fgioithieu->image_id) }}">
                    </a>
                    </div>
                    <h3><a href="{{ url('/bai-viet/' . $fgioithieu->slug ) }}">{{ $fgioithieu->title }}</a></h3>
                    <p class="postdatetime">CĐ Viễn Đông - {{ $fgioithieu->updated_at }} </p>
                    <span>{{ $fgioithieu->excerpt }}</span>
                </div>
            </div>
            <div class="col-md-6 col-md-6 col-xs-6 col-sm-6" style="padding-left: 20px;">
                @foreach($gioithieus as $gioithieu)
                    <div class="row" style="padding-bottom: 25px;">
                        <div class="divthumnailsh4">
                            <h4><a href="{{ url('/bai-viet/' . $gioithieu->slug ) }}">{{ $gioithieu->title }}</a></h4>
                            <p class="postdatetime">{{ $gioithieu->updated_at }} </p>
                        </div>
                        <div class="divthumnailsimg">
                            <a href="{{ url('/bai-viet/' . $gioithieu->slug ) }}"><img src="{{ url( '/assets/blog/'.$gioithieu->image_id) }}" alt=""></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div> <!--END GIOI THIEU CONTENT-->
<div class="row paddingbot40"> <!--TUYEN SINH -->
    <h4 class="block-title" id="block-title-color_2">
        <span>TUYỂN SINH</span>
    </h4>    
    <div class="col-md-12 col-xs-12"> <!-- Tuyen sinh [Contain] -->
        <div class="row">
            <div class="col-md-6 col-xs-6 col-sm-6">
                <div class="row largethumnail" style="padding-right: 10px;">
                    <div class="postimage">
                        <a href="{{ url('/bai-viet/' . $ftuyensinh[0]->slug ) }}"><img class="img img-responsive full-width" src="{{ url( '/assets/blog/'.$ftuyensinh[0]->image_id) }}"></a>
                    </div>
                    <h3><a href="{{ url('/bai-viet/' . $ftuyensinh[0]->slug ) }}">{{ $ftuyensinh[0]->title }}</a></h3>
                    <p class="postdatetime">CĐ Viễn Đông - {{ $ftuyensinh[0]->updated_at }} </p>
                    <span>{{ $ftuyensinh[0]->excerpt }}</span>
                </div>
            </div>
            <div class="col-md-6 col-xs-6 col-sm-6">
                <div class="row largethumnail" style="padding-left: 10px;">
                    <div class="postimage">
                        <a href="{{ url('/bai-viet/' . $ftuyensinh[1]->slug ) }}"><img class="img img-responsive full-width" src="{{ url( '/assets/blog/'.$ftuyensinh[1]->image_id) }}"></img></a>
                    </div>
                    <h3><a href="{{ url('/bai-viet/' . $ftuyensinh[1]->slug ) }}">{{ $ftuyensinh[1]->title }}</a></h3>
                    <p class="postdatetime">CĐ Viễn Đông - {{ $ftuyensinh[1]->updated_at }} </p>
                    <span>{{ $ftuyensinh[1]->excerpt }}</span>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-6 col-xs-6">
                <div class="row" style="padding-right: 10px;">
                    <div class="divthumnailsh4">
                        <h4><a href="{{ url('/bai-viet/'.$tuyensinhs[0]->slug ) }}">{{ $tuyensinhs[0]->title }}</a></h4>
                        <p class="postdatetime">{{ $tuyensinhs[0]->updated_at }} </p>
                    </div>
                    <div class="divthumnailsimg">
                        <a href="{{ url('/bai-viet/'.$tuyensinhs[0]->slug ) }}"><img src="{{ url('/assets/blog/'.$tuyensinhs[0]->image_id) }}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-6">
                <div class="row" style="padding-left: 10px;">
                    <div class="divthumnailsh4">
                        <h4><a href="{{ url('/bai-viet/'.$tuyensinhs[1]->slug ) }}">{{ $tuyensinhs[1]->title }}</a></h4>
                        <p class="postdatetime">{{ $tuyensinhs[1]->updated_at }} </p>
                    </div>
                    <div class="divthumnailsimg">
                        <a href="{{ url('/bai-viet/'.$tuyensinhs[1]->slug ) }}"><img src="{{ url('/assets/blog/'.$tuyensinhs[1]->image_id) }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-6 col-xs-6">
                <div class="row" style="padding-right: 10px;">
                    <div class="divthumnailsh4">
                        <h4><a href="{{ url('/bai-viet/'.$tuyensinhs[2]->slug ) }}">{{ $tuyensinhs[2]->title }}</a></h4>
                        <p class="postdatetime">{{ $tuyensinhs[2]->updated_at }} </p>
                    </div>
                    <div class="divthumnailsimg">
                        <a href="{{ url('/bai-viet/'.$tuyensinhs[2]->slug ) }}"><img src="{{ url('/assets/blog/'.$tuyensinhs[2]->image_id) }}" alt=""></a> 
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-6">
                <div class="row" style="padding-left: 10px;">
                    <div class="divthumnailsh4">
                        <h4><a href="{{ url('/bai-viet/'.$tuyensinhs[3]->slug ) }}">{{ $tuyensinhs[3]->title }}</a></h4>
                        <p class="postdatetime">{{ $tuyensinhs[3]->updated_at }} </p>
                    </div>
                    <div class="divthumnailsimg">
                        <a href="{{ url('/bai-viet/'.$tuyensinhs[3]->slug ) }}"><img src="{{ url('/assets/blog/'.$tuyensinhs[3]->image_id) }}" alt=""></a> 
                    </div>
                </div>
            </div>
        </div>                    
    </div> <!--END GIOI THIEU CONTENT-->                
</div> <!-- END TUYEN SINH -->
<div class="row paddingbot40"> <!-- TIN TUC -->
    <h4 class="block-title" id="block-title-color_3"><span>TIN TỨC</span></h4>    
    <div class="col-md-12 col-xs-12">
        <div class="row">
            <div class="col-xs-4">
                <div class="row col3_1">
                    <div class="postimage_col3">
                        <a href="{{ 'bai-viet/'.$tintucs[0]->slug }}"><img class="img img-responsive full-width" src="{{ url('/assets/blog/'.$tintucs[0]->image_id) }}">  </a>
                    </div>
                    <h3><a href="{{ 'bai-viet/'.$tintucs[0]->slug }}">{{ $tintucs[0]->title }}</a></h3>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="row col3_2">
                    <div class="postimage_col3">
                        <a href="{{ 'bai-viet/'.$tintucs[1]->slug }}"><img class="img img-responsive full-width" src="{{ url('/assets/blog/'.$tintucs[1]->image_id) }}"></a>
                    </div>                                
                    <h3><a href="{{ 'bai-viet/'.$tintucs[1]->slug }}">{{ $tintucs[1]->title }}</a></h3>
                </div>                            
            </div>
            <div class="col-xs-4">
                <div class="row col3_3">
                    <div class="postimage_col3">
                        <a href="{{ 'bai-viet/'.$tintucs[2]->slug }}"><img class="img img-responsive full-width" src="{{ url('/assets/blog/'.$tintucs[2]->image_id) }}"> </a>
                    </div>
                    <h3><a href="{{ 'bai-viet/'.$tintucs[2]->slug }}">{{ $tintucs[2]->title }}</a></h3>
                </div>                            
            </div>
        </div>
        <div class="row" style="padding-top: 20px;">
            <div class="col-xs-4">
                <div class="row col3_1">
                    <div class="postimage_col3">
                        <a href="{{ 'bai-viet/'.$tintucs[3]->slug }}"><img class="img img-responsive full-width" src="{{ url('/assets/blog/'.$tintucs[3]->image_id) }}"></a>
                    </div>
                    <h3><a href="{{ 'bai-viet/'.$tintucs[3]->slug }}">{{ $tintucs[3]->title }}</a></h3>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="row col3_2">
                    <div class="postimage_col3">
                        <a href="{{ 'bai-viet/'.$tintucs[4]->slug }}"><img class="img img-responsive full-width" src="{{ url('/assets/blog/'.$tintucs[4]->image_id) }}"></a>
                    </div>                                
                    <h3><a href="{{ 'bai-viet/'.$tintucs[4]->slug }}">{{ $tintucs[4]->title }}</a></h3>
                </div>                            
            </div>
            <div class="col-xs-4">
                <div class="row col3_3">
                    <div class="postimage_col3">
                        <a href="{{ 'bai-viet/'.$tintucs[5]->slug }}"><img class="img img-responsive full-width" src="{{ url('/assets/blog/'.$tintucs[5]->image_id) }}"></a>
                    </div>
                    <h3><a href="{{ 'bai-viet/'.$tintucs[5]->slug }}">{{ $tintucs[5]->title }}</a></h3>
                </div>                            
            </div>
        </div>
    </div>
</div><!-- END TIN TUC -->
<div class="row paddingbot40"> <!-- KHOA -->
    <h4 class="block-title" id="block-title-color_4"><span>KHOA</span></h4>    
    <div class="col-md-12 col-xs-12">
        <div class="row">
            <div class="col-xs-4">
                <div class="row col3_1">
                    <div class="postimage_col3">
                        <a href="{{ 'bai-viet/'.$khoas[0]->slug }}"><img class="img img-responsive full-width" src="{{ url('/assets/blog/'.$khoas[0]->image_id) }}">  </a>
                    </div>
                    <h3><a href="{{ 'bai-viet/'.$khoas[0]->slug }}">{{ $khoas[0]->title }}</a></h3>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="row col3_2">
                    <div class="postimage_col3">
                        <a href="{{ 'bai-viet/'.$khoas[1]->slug }}"><img class="img img-responsive full-width" src="{{ url('/assets/blog/'.$khoas[1]->image_id) }}"></a>
                    </div>                                
                    <h3><a href="{{ 'bai-viet/'.$khoas[1]->slug }}">{{ $khoas[1]->title }}</a></h3>
                </div>                            
            </div>
            <div class="col-xs-4">
                <div class="row col3_3">
                    <div class="postimage_col3">
                        <a href="{{ 'bai-viet/'.$khoas[2]->slug }}"><img class="img img-responsive full-width" src="{{ url('/assets/blog/'.$khoas[2]->image_id) }}"> </a>
                    </div>
                    <h3><a href="{{ 'bai-viet/'.$khoas[2]->slug }}">{{ $khoas[2]->title }}</a></h3>
                </div>                            
            </div>
        </div>
        <div class="row" style="padding-top: 20px;">
            <div class="col-xs-4">
                <div class="row col3_1">
                    <div class="postimage_col3">
                        <a href="{{ 'bai-viet/'.$khoas[3]->slug }}"><img class="img img-responsive full-width" src="{{ url('/assets/blog/'.$khoas[3]->image_id) }}"></a>
                    </div>
                    <h3><a href="{{ 'bai-viet/'.$khoas[3]->slug }}">{{ $khoas[3]->title }}</a></h3>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="row col3_2">
                    <div class="postimage_col3">
                        <a href="{{ 'bai-viet/'.$khoas[4]->slug }}"><img class="img img-responsive full-width" src="{{ url('/assets/blog/'.$khoas[4]->image_id) }}"></a>
                    </div>                                
                    <h3><a href="{{ 'bai-viet/'.$khoas[4]->slug }}">{{ $khoas[4]->title }}</a></h3>
                </div>                            
            </div>
            <div class="col-xs-4">
                <div class="row col3_3">
                    <div class="postimage_col3">
                        <a href="{{ 'bai-viet/'.$khoas[5]->slug }}"><img class="img img-responsive full-width" src="{{ url('/assets/blog/'.$khoas[5]->image_id) }}"></a>
                    </div>
                    <h3><a href="{{ 'bai-viet/'.$khoas[5]->slug }}">{{ $khoas[5]->title }}</a></h3>
                </div>                            
            </div>
        </div>
    </div>
    <!-- COMMENT      
    <div class="row">
        <h4 class="block-title" id="block-title-color_5"><span>PHÒNG BAN</span></h4>    
    </div>      
    <div class="row">
        <h4 class="block-title" id="block-title-color_6"><span>HỢP TÁC QUỐC TẾ</span></h4>    
    </div>       
    <div class="row">
        <h4 class="block-title" id="block-title-color_7"><span>THÔNG TIN SINH VIÊN</span></h4>    
    </div>                                                              
    --> 
</div>

@stop
