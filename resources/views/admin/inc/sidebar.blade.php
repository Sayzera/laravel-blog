<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('site-ayarlari-anasayfa')}}">Anasayfa & Genel Ayarlar</a></li>
                </ul>
            </li>

            <li><a><i class="fa fa-graduation-cap"></i> Hakkımızda <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('hakkimizda')}}">Hakkımızda Sayfası</a></li>
                    <li><a href="{{route('ekip-uyeleri')}}">Ekip Üyesi Ekle</a></li>
                    <li><a href="{{route('ekip-uyeleri-list')}}">Ekip Üyeleri</a></li>
                    <li><a href="{{route('hakkimizda-yorum')}}">Yorum Ekle</a></li>
                    <li><a href="{{route('yorum-list')}}">Yorum List</a></li>
                </ul>
            </li>

            <li><a><i class="fa fa-tags"></i> Servisler <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('servis-page')}}">Servisler Sayfası</a></li>
                    <li><a href="{{route('hizmet-ekle')}}">Servis Ekle</a></li>
                    <li><a href="{{route('servis-list')}}">Servis List</a></li>
                </ul>
            </li>

            <li><a><i class="fa fa-camera-retro"></i> Portfolio <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('portfolio')}}">Portfolio Sayfası</a></li>
                    <li><a href="{{route('resim-ekle-page')}}">Resim Ekle</a></li>
                    <li><a href="{{route('resim-list')}}">Resim List</a></li>
                </ul>
            </li>

            <li><a><i class="fa fa-mobile"></i>İletişim<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('iletisim')}}">İletişim Sayfasi</a></li>
                </ul>
            </li>

            <li><a><i class="fa fa-book"></i>Blog<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('blog')}}">Blog Yaz</a></li>
                    <li><a href="{{route('blog-list')}}">Blog Yazilari</a></li>

                </ul>
            </li>

    </div>


</div>
<!-- /sidebar menu -->


<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
    <a href="{{route('user-profil')}}" data-toggle="tooltip" data-placement="top" title="Profil">
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
