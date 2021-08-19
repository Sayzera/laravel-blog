<nav class="navbar navbar-expand-lg  py-4" id="navbar">
    <div class="container">
      <a class="navbar-brand" href="/">
          Ör<span>nek.</span>
      </a>

      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse text-center" id="navbarsExample09">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Anasayfa <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="{{route('web-hakkimizda')}}">Hakkımızda <span class="sr-only">(current)</span></a>
          </li>

           <li class="nav-item"><a class="nav-link" href="{{route('web-servisler')}}">Hizmetler</a></li>
           <li class="nav-item"><a class="nav-link" href="{{route('web-galeri')}}">Galeri</a></li>
           <li class="nav-item"><a class="nav-link" href="{{route('web-blog')}}">Blog</a></li>
           <li class="nav-item"><a class="nav-link" href="{{route('web-iletisim')}}">İletişim</a></li>
        </ul>

        <form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
          <a href="{{route('web-iletisim')}}" class="btn btn-solid-border btn-round-full">Fiyat alın</a>
        </form>
      </div>
    </div>
</nav>
