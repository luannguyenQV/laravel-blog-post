<header class="container-fluid" id="header"> <!-- START HEADER -->
    <div class="row">  
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-4 col-sm-4">
                    <div class="row">
                        <h1 id="logo">
                            <a href="{{ url('/') }}">
                                <img class="img-responsible" src="{{ url('images/viendong.png') }}">
                            </a>
                        </h1>
                    </div>
                </div>
                <div class="col-md-4 col-xs-8 col-sm-8">
                    <div class="row">
                        <h1 id="head_h1">BỘ GIÁO DỤC ĐÀO TẠO</h1>
                        <h2 id="head_h2">TRƯỜNG CAO ĐẲNG VIỄN ĐÔNG</h2>
                    </div>
                </div>
                <div class="col-md-6 text-right hidden-sm hidden-xs" id="header-right">
                    <div class="text-right">
                        <!--<a class="floating-box" id="facebook" href="http://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>-->
                        <a class="btn-metro floating-box" id="lienhe">Liên hệ</a>
                        <a class="btn-metro floating-box" id="tuyensinh">Tuyển Sinh</a>
                    </div>
                </div>
            </div>             
        </div>     
    </div>
</header>    
<nav class="navbar navbar-default navbar-fixed-top top-nav-collapse" id="navigation-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse col-md-8 col-md-offset-2" id="navbar">
        <ul class="nav navbar-nav">
            <li class="menu-item ">
                <a href="{{ url('/') }}">TRANG CHỦ</a>
            </li>
            <li class="menu-item ">
                <a href="{{ url('khoa') }}">KHOA</a>
            </li>
            <li class="menu-item ">
                <a href="{{ url('tin-tuc') }}">TIN TỨC</a>
            </li>                    
            <li class="menu-item">
                <a href="{{ url('hop-tac-quoc-te') }}">HỢP TÁC QUỐC TẾ</a>
            </li>
            <li class="menu-item">
                <a href="{{ url('phong-ban') }}">PHÒNG BAN</a>
            </li>                    
            <li class="menu-item ">
                <a href="{{ url('gioi-thieu') }}">GIỚI THIỆU</a>
            </li>
            <li class="menu-item ">
                <a href="{{ url('hoi-dap') }}">HỎI ĐÁP</a>
            </li>
            <li class="menu-item ">
                <a href="{{ url('lien-he') }}">LIÊN HỆ</a>
            </li>
        </ul>
    </div>
</nav>



