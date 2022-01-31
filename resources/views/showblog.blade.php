<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">

    <!-- my link -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">

    <!-- cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <title>SMKN 1 BONDOWOSO</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('frontend')}}/img/logo-smakensa.svg" width="90" alt="">
              </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#about">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#website">Website Lain</a>
            </li>
            <li class="nav-item">
              <div class="btn-group nav-link">
                  <button type="button" class="btn dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Keahlian <i class="fas fa-angle-down"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/#jurusan">Bisnis management<a>
                    <a class="dropdown-item" href="/#jurusan">Teknologi Informatika</a>
                    <a class="dropdown-item" href="/#jurusan">Seni</a>
                  </div>
                </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#contact">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/terkini">Berita</a>
            </li>
          </ul>
        <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
                <a class="nav-link" href="/#"> <i class="fab fa-instagram"></i> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/#"> <i class="fab fa-facebook-f"></i> </a>
            </li>
        </ul>
        </div>
        </div>
    </nav>

    <div class="blog">
        <div class="jumbotron">
            <div class="container">
                <div class="text-center">
                    <img src="{{asset('blog').'/'.$berita->gambar}}" class="img-fluid rounded mb-3" alt="{{$berita->judul_berita}}" width="70%">
                </div>
                <h2>{{$berita->judul_berita}}</h2>
                <b>Publish {{$berita->tanggal_upload}} - {{$berita->pengupload}}</b>
                <p>
                    {!!$berita->isi!!}
                </p>
            </div>
        </div>
    </div>

    <div class="footer">
      <div class="jumbotron d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <h3>Alamat</h3>
              <p>Jl. HOS Cokroaminoto No. 110 Bondowoso, Jawa Timur Indonesia</p>

              <h3>Hub</h3>
              <p>Phone : 0332-4312-01</p>
              <p>Fax : 0332-4312-01</p>
              <p>Email : smkn1_bws@yahoo.com</p>
            </div>
            <div class="col-sm-3">
              <h3>Menu</h3>
              <p>Beranda</p>
              <p>Artikel</p>
              <p>Website kami</p>
              <p>Tentang</p>
              <p>Bidang keahlian</p>
              <p>Hubungi</p>
            </div>

            <div class="col-sm-3">
              <h3>Link Pintas</h3>
              <p>KEMENDIKBUD</p>
              <p>DITPSMK</p>

              <h3>SosialMedia</h3>
              <p>Instagram</p>
              <p>Facebook</p>
            </div>

            <div class="col-sm-3">
              <img src="{{asset('frontend')}}/img/smakensa.png" width="150px">
              <img src="{{asset('frontend')}}/img/kemdikbud.png" width="100px">
              <img src="{{asset('frontend')}}/img/jatim.png" width="100px">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="copyright">
      <p>© IqbalRoni - Portofolio 5</p>
    </div>

    <script src="{{asset('frontend')}}/js/slider.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="{{asset('frontend')}}/js/bootstrap.bundle.min.js"></script>
    <script>
      window.addEventListener("scroll", function () {
      var header = document.querySelector(".navbar");
      header.classList.toggle("sticky", window.scrollY > 0);
      })
    </script>
  </body>
</html>