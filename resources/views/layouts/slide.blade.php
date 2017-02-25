<section>
<div class="container">
    <div class="row">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="img-responsive" src="{{ url('/images/slider_1.jpg') }}" alt="Viễn Đông Start up">
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="{{ url('/images/slider_2.png') }}" alt="Viễn Đông Start up">
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="{{ url('/images/slider_3.jpg') }}" alt="Viễn Đông Start up">
                    </div>
                </div>

                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only"><</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">></span>
                </a>
            </div>        
    </div>
</div><!--End slider-->
</section>