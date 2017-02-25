<div class="row paddingbot40" style="margin-top: 40px;"> <!-- KHOA -->
    <h4 class="block-title" id="block-title-color_4"><span>BÀI VIẾT MỚI NHẤT</span></h4>
    <div class="col-md-12 col-xs-12">
        <div class="row">
            <div class="col-xs-4">
                <div class="row col3_1">
                    <div class="postimage_col3">
                        <a href="{{ $posts[0]->slug }}"><img class="img img-responsive full-width" src="{{ url('/assets/blog/'.$posts[0]->image_id) }}">  </a>
                    </div>
                    <h3><a href="{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="row col3_2">
                    <div class="postimage_col3">
                        <a href="{{ $posts[1]->slug }}"><img class="img img-responsive full-width" src="{{ url('/assets/blog/'.$posts[1]->image_id) }}"></a>
                    </div>
                    <h3><a href="{{ $posts[1]->slug }}">{{ $posts[1]->title }}</a></h3>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="row col3_3">
                    <div class="postimage_col3">
                        <a href="{{ $posts[2]->slug }}"><img class="img img-responsive full-width" src="{{ url('/assets/blog/'.$posts[2]->image_id) }}"> </a>
                    </div>
                    <h3><a href="{{ $posts[2]->slug }}">{{ $posts[2]->title }}</a></h3>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top: 20px;">
            <div class="col-xs-4">
                <div class="row col3_1">
                    <div class="postimage_col3">
                        <a href="{{ $posts[3]->slug }}"><img class="img img-responsive full-width" src="{{ url('/assets/blog/'.$posts[3]->image_id) }}"></a>
                    </div>
                    <h3><a href="{{ $posts[3]->slug }}">{{ $posts[3]->title }}</a></h3>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="row col3_2">
                    <div class="postimage_col3">
                        <a href="{{ $posts[4]->slug }}"><img class="img img-responsive full-width" src="{{ url('/assets/blog/'.$posts[4]->image_id) }}"></a>
                    </div>
                    <h3><a href="{{ $posts[4]->slug }}">{{ $posts[4]->title }}</a></h3>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="row col3_3">
                    <div class="postimage_col3">
                        <a href="{{ $posts[5]->slug }}"><img class="img img-responsive full-width" src="{{ url('/assets/blog/'.$posts[5]->image_id) }}"></a>
                    </div>
                    <h3><a href="{{ $posts[5]->slug }}">{{ $posts[5]->title }}</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
