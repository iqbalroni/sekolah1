<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
   
    <!-- Judul pada website -->

    <title>SMKN 1 BONDOWOSO</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">

    <!-- my link -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">

    <!-- cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- aos -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/aos.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
  </head>
  <body>
    @include('sweet::alert')

    <nav class="navbar navbar-expand-lg fixed-top" data-aos="fade-down" data-aos-duration="1000">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('frontend')}}/img/logo-smakensa.svg" width="90" alt="" data-aos="fade-down" data-aos-duration="1500">
              </a>
        <button data-aos="fade-down" data-aos-duration="1500" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" data-aos="fade-down" data-aos-duration="1500">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#website">Spesial</a>
            </li>
            <li class="nav-item">
              <div class="btn-group nav-link">
                  <button type="button" class="btn dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Keahlian <i class="fas fa-angle-down"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#jurusan">Bisnis management<a>
                    <a class="dropdown-item" href="#jurusan">Teknologi Informatika</a>
                    <a class="dropdown-item" href="#jurusan">Seni</a>
                  </div>
                </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/terkini">Berita</a>
            </li>
          </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item" id="form">
              <form action="/terkini" method="GET">
                <div class="input-group cari">
                  <input name="cari" type="text" class="form-control" placeholder="Search">
                  <div class="input-group-append">
                    <button class="btn btn-pink" type="submit" id="button-addon2">
                    <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
            </li>
            <li class="nav-item" id="exit">
              <a class="nav-link">
                <i class="fas fa-times"></i>
              </a>
            </li>
            <li class="nav-item" id="search">
              <a class="nav-link">
                <i class="fas fa-search"></i>
              </a>
            </li>
            <li class="nav-item" id="ig">
                <a class="nav-link" href="https://www.instagram.com/smkn1bws.official/"> <i class="fab fa-instagram"></i> </a>
            </li>
            <li class="nav-item" id="fb">
                <a class="nav-link" href="https://www.instagram.com/smkn1bws.official/"> <i class="fab fa-facebook-f"></i> </a>
            </li>
        </ul>
        </div>
        </div>
    </nav>

    <div class="slider-container">
        <div class="left-slider">
          @foreach ($flexbanner as $row)
            @if ($row->status == 1)
              <div class="banner-img" style="background-image: url('{{asset('banner').'/'.$row->gambar}}')"></div>
            @endif
          @endforeach
        </div>
        <div class="right-slider">
            @foreach ($banner as $row)
              @if ($row->status == 1)
              <div class="banner">
                <h1>{{$row->judul}}</h1>
                <p>{{$row->artikel}}</p>
              </div>
              @endif
            @endforeach
        </div>   
        <div class="action-button">
            <button class="down-button">
                <i class="fas fa-arrow-down"></i>
            </button>
            <button class="up-button">
                <i class="fas fa-arrow-up"></i>
            </button>
        </div>
    </div>

    <div class="qoutes" id="about">
        <div class="jumbotron d-flex align-items-center">
        <div class="container">
          <div class="row pt-5 d-flex align-items-center">
              <div class="col-sm-6 text-left">
              <h2 class="title">Kenapa</h2>
              <h2 class="title">Smakensa?</h2>
              <p class="text-title">karena para pendidik mempunyai tujuan agar siswa siswi SMK Negeri 1 Bondowoso bisa bersaing di dunia industri 4.0. tidak hanya itu para pendidik juga akan membentuk karakter siswa siswi yang beriman dan bertaqwa.</p>
                <a href="" class="btn btn-primary mt-3">Baca Lebih Lanjut<i class="fas fa-angle-right pl-2"></i></a>
            </div>
            <div class="col-sm-6">
              <div class="text-center">
              <img src="{{asset('frontend')}}/img/salim_02.png" class="img-fluid" data-aos="fade-up">
              </div>
            </div>
            
          </div>
        </div>
      </div>
      </div>
        <!--<div class="jumbotron text-center d-flex align-items-center">-->
        <!--    <div class="container">-->
        <!--      <h2>Kenapa Smakensa?</h2>-->
        <!--      <p>Ada apa aja sih di sekolah Smkn 1 Bondowoso</p>-->
        <!--      <div class="garis"></div>-->
        <!--      <br>-->
        <!--      <div class="row">-->
        <!--        <div class="col-sm-4 mb-2">-->
        <!--          <div class="box">-->
        <!--            <i class="fas fa-school fa-2x" style="background-color:#787596; color:#39374E;"></i>-->
        <!--            <h4 class="title">Sekolah Yang Nyaman</h4>-->
        <!--            <p>Smkn 1 Bondowoso memiliki lingkungan yang nyaman dan kondusif</p>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--        <div class="col-sm-4 mb-2">-->
        <!--          <div class="box">-->
        <!--            <i class="fas fa-desktop fa-2x"></i>-->
        <!--            <h4 class="title">Fasilitas Sekolah</h4>-->
        <!--            <p>Fasilitas lengkap untuk belajar dan mengajar di sekolah</p>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--        <div class="col-sm-4 mb-2">-->
        <!--          <div class="box">-->
        <!--            <i class="fas fa-business-time fa-2x" style="background-color:#fff09e; color:#ffd900;"></i>-->
        <!--            <h4 class="title">Kerja Sama</h4>-->
        <!--            <p>Smkn 1 Bondowoso memiliki kerja sama dengan tempat industri</p>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->
    </div>

    <div class="website" id="website">
      <div class="jumbotron d-flex align-items-center">
        <div class="container">
          <div class="row">
            @foreach ($domain as $row)
              <div class="col-sm-4 mb-3">
                <div class="card">
                  <img src="{{asset('domain').'/'.$row->foto}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{{$row->judul}}</h5>
                    <hr>
                    <a href="{{$row->link}}" class="btn">Kunjungi  <i class="fas fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="youtube" >
      <div class="jumbotron text-center d-flex align-items-center">
        <div class="container">
          <p> <i class="fab fa-youtube"></i>  Smkn1bws.sch.id</p>
          <h2 class="title">Smakensa TV</h2>
          <hr class="garis">
          @foreach ($youtube as $row)
            <iframe width="100%" height="400" src="{{$row->link}}" data-aos="zoom-in">
            </iframe>
          @endforeach
        </div>
      </div>
    </div>

    <div class="jurusan" id="jurusan">
      <div class="jumbotron d-flex align-items-center">
        <div class="container">
          <div class="text-center">
            <h2 class="title">Bidang Keahlian</h2>
            <p class="text-title">Pilih Bidang keahlian favoritmu di Smkn 1 Bondowoso</p>
            <hr class="garis">
          </div>
          <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#bm" role="tab" aria-controls="home" aria-selected="true"> <i class="fas fa-business-time"></i> Bisnis management (BM)</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#it" role="tab" aria-controls="profile" aria-selected="false"> <i class="fab fa-react"></i> Teknologi Informatika (IT)</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#art" role="tab" aria-controls="contact" aria-selected="false"> <i class="fas fa-video"></i> Seni (Art)</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="bm" role="tabpanel" aria-labelledby="home-tab">
              <div class="row">
                <div class="col-sm-3 mb-4">
                  <div class="card" data-aos="fade-down" data-aos-duration="500">
                    <img src="{{asset('frontend')}}/img/ak.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Akutansi</h5>
                      <p>
                        Suatu proses mencatat, mengklarifikasi, meringkas, mengolah dan menyajikan data, transaksi serta kejadian yang berhubungan keuangan.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3 mb-4">
                  <div class="card" data-aos="fade-down" data-aos-duration="1000">
                    <img src="{{asset('frontend')}}/img/pb.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Perbankan</h5>
                      <p>
                        Bidang Studi yang fokus pada dunia keuangan, seperti bank, asuransi, lembaga simpan pinjam, pasar modal serta transaksi di dalamnya.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3 mb-4">
                  <div class="card" data-aos="fade-down" data-aos-duration="1500">
                    <img src="{{asset('frontend')}}/img/ap.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Administrasi Perkantoran</h5>
                      <p>
                        Serangkaian kegiatan sehari-hari yang berkaitan dengan perencanaan keuangan, penagihan dan pencatatan, personalia dan distribusi barang.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3 mb-4">
                  <div class="card" data-aos="fade-down" data-aos-duration="2000">
                    <img src="{{asset('frontend')}}/img/bdp copy.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Bisnis daring pemasaran</h5>
                      <p>
                        Keahlian yang mempelajari dasar-dasar kemampuan dan keilmuan marketing baik marketing secara konvosional maupun melalui media daring.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="it" role="tabpanel" aria-labelledby="profile-tab">
              <div class="row">
                <div class="col-sm-3 mb-4">
                  <div class="card" data-aos="zoom-in">
                    <img src="{{asset('frontend')}}/img/tkj-2.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Teknik Komputer Jaringan</h5>
                      <p>
                        Teknik mempelajari tentang cara instalasi PC, instalasi LAN memperbaiki PC dan mempelajari program-progam PC dan Networking.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3 mb-4">
                  <div class="card" data-aos="zoom-in">
                    <img src="{{asset('frontend')}}/img/rpl-2.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Rekayasa Perangkat Lunak</h5>
                      <p>
                        Satu Bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan aplikasi, pemeliharaan, dan manajement.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3 mb-4">
                  <div class="card" data-aos="zoom-in">
                    <img src="{{asset('frontend')}}/img/multimedia.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Multimedia</h5>
                      <p>
                        Teknik mempelajari tentang cara membuat sebuah animasi dan menggambar, sehingga pengguna bisa navigasi, berinteraksi dan berkarya.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="art" role="tabpanel" aria-labelledby="contact-tab">
              <div class="row">
                <div class="col-sm-3 mb-4">
                  <div class="card" data-aos="zoom-in">
                    <img src="{{asset('frontend')}}/img/tp3.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Teknik Pertelevisian</h5>
                      <p>
                        Mengerjakan proyek multimedia, sebagai asisten riset, markerting,periklanan, industri online dan jurnalistik.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3 mb-4">
                  <div class="card" data-aos="zoom-in">
                    <img src="{{asset('frontend')}}/img/PF.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Perfilman</h5>
                      <p>
                        Mengerjakan proyek multimedia, sebagai asisten riset, markerting,periklanan, industri online dan jurnalistik.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

    {{-- <div class="agenda" id="agenda">
      <div class="jumbotron d-flex align-items-center">
        <div class="container">
          <div class="row pt-5 d-flex align-items-center">
            <div class="col-sm-6" data-aos="fade-down">
              <h2 class="title">Agenda Sekolah</h2>
              <p class="text-title">
                Agenda sekolah yang akan mendatang
              </p>
              {{$nomer == 10}}
              @foreach ($agenda as $row)
                  <div class="alert mt-2" role="alert">
                    <h4>{{$row->kegiatan}}</h4>
                    <p>tanggal {{$row->tanggal}}</p>
                  </div>
                @endforeach
            </div>
            <div class="col-sm-6" data-aos="fade-down">
              <div class="text-center">
                <img src="{{asset('frontend')}}/img/salim_02.png" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    <!--<div class="testi">-->
    <!--  <div class="swiper">-->
    <!--    <div class="text-center">-->
    <!--      <h2 class="title">Apa kata Alumni</h2>-->
    <!--      <p class="text-title">-->
    <!--        Komentar dari alumni Smkn 1 bondowoso-->
    <!--      </p>-->
    <!--      <hr class="garis">-->
    <!--    </div>-->
    <!--    <div class="swiper-container">-->
    <!--      <div class="swiper-wrapper">-->
    <!--        @foreach ($komentar as $row)-->
    <!--          @if ($row->status == 2)-->
    <!--          <div class="swiper-slide">-->
    <!--            <div class="testimonialBox">-->
    <!--                <div class="detail">-->
    <!--                    <img src="{{asset('alumni').'/'.$row->foto}}">-->
    <!--                </div>-->
    <!--                <div class="star mb-2">-->
    <!--                  <i class="fas fa-star"></i>-->
    <!--                  <i class="fas fa-star"></i>-->
    <!--                  <i class="fas fa-star"></i>-->
    <!--                  <i class="fas fa-star"></i>-->
    <!--                  <i class="fas fa-star"></i>-->
    <!--                </div>-->
    <!--                <div class="content">-->
    <!--                  <p>"{{$row->pesan}}"</p>-->
    <!--                </div>-->
    <!--                <div class="text-center">-->
    <!--                  <h3>{{$row->nama}}</h3>-->
    <!--                  <h5>{{$row->profesi}}</h5>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          @endif-->
    <!--        @endforeach-->
    <!--          <div class="swiper-slide">-->
    <!--              <div class="testimonialBox">-->
    <!--                <a href="/komentar">-->
    <!--                  <div class="add mt-4">-->
    <!--                    <i class="fas fa-plus fa-3x icon-add"></i>-->
    <!--                  </div>-->
    <!--                </a>-->
    <!--                <p class="mt-3">Tambahkan Komentar</p>-->
    <!--              </div>-->
    <!--          </div>-->
    <!--      </div>-->
    <!--      <div class="swiper-pagination"></div> -->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->

    

    <div class="contact" id="contact">
      <div class="jumbotron d-flex align-items-center">
        <div class="container">
          <div class="text-center">
            <h2 class="title">Hubungi Kami</h2>
            <div class="hub">
              <p class="text-title">
                <i class="fas fa-map-marker-alt"></i> Jln Hos Cokrominoto
              </p>
              <p class="text-title">
                <i class="fas fa-phone"></i> 0332-4312-01
              </p>
              <p class="text-title">
                <i class="fas fa-envelope"></i> smkn1_bws@yahoo.com
              </p>
            </div>
            <hr class="garis">
          </div>
          <div class="row pt-5 d-flex align-items-center">
            <div class="col-sm-6">
              <div class="text-center">
              <img src="{{asset('frontend')}}/img/image.png" class="img-fluid" data-aos="fade-up">
              </div>
            </div>
            <div class="col-sm-6 text-center">
              <form class="forms-sample" action="/contact/simpan" method="post" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nama" name="nama" data-aos="fade-down" data-aos-duration="1300">
                  @error('nama')
                      <p class="text-danger text-left">{{$message}}</p>
                  @enderror
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" value="+62" placeholder="No Telp" name="no_telp" data-aos="fade-down"  data-aos-duration="1000">
                  @error('no_telp')
                    <p class="text-danger text-left">{{$message}}</p>
                  @enderror
                </div>
                <div class="form-group">
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Pesan" name="pesan" data-aos="fade-down" data-aos-duration="800"></textarea>
                  @error('pesan')
                    <p class="text-danger text-left">{{$message}}</p>
                  @enderror
                </div>
                <button data-aos="fade-down" data-aos-duration="500" type="submit" class="btn submit">Kirim Pesan <i class="fas fa-paper-plane"></i> </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="iklan mb-3">
      <div class="brand">
        <div class="swiper-wrapper">
          @foreach ($brand as $row)
            <div class="swiper-slide"><img src="{{asset('brand').'/'.$row->foto}}" class="img-fluid"></div>
          @endforeach
        </div>
        <!-- Add Pagination -->
        {{-- <div class="swiper-pagination"></div> --}}
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

            <div class="col-sm-3 logo-logo">
              <div class="row">
                <div class="col-sm-6">
                  <img src="{{asset('frontend')}}/img/smakensa-1.png" width="150px">
                </div>
                <div class="col-sm-6">
                  <img src="{{asset('frontend')}}/img/kemdikbud-1.png" width="150px">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <img src="{{asset('frontend')}}/img/jatim-1.png" width="150px">
                </div>
                <div class="col-sm-6">
                  <img src="{{asset('frontend')}}/img/bondowoso-1.png" width="150px">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="copyright">
      <p>Copyright © 2021. IT SMAKENSA 2021 - Gen12 2.0</p>
    </div>

    <script>
      var input = document.getElementById('form');
      var ig = document.getElementById('ig');
      var fb = document.getElementById('fb');
      var tutup = document.getElementById('exit');
      var cari = document.getElementById('search');

      cari.onclick = function(){
        cari.style.display = "none";
        ig.style.display = "none";
        fb.style.display = "none";
        tutup.style.display = "block";
        input.style.display = "block";
      }

      tutup.onclick = function(){
        ig.style.display = "block";
        fb.style.display = "block";
        cari.style.display = "block";
        tutup.style.display = "none";
        input.style.display = "none";
      }

    </script>


    <script src="{{asset('frontend')}}/js/slider.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="{{asset('frontend')}}/js/bootstrap.bundle.min.js"></script>
    <script>
      window.addEventListener("scroll", function () {
      var header = document.querySelector(".navbar");
      header.classList.toggle("sticky", window.scrollY > 0);
      })
    </script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{asset('frontend')}}/js/aos.js"></script>
    <script>
      AOS.init({
            duration: 2000,
        });
    </script>

    <script>
      function myFunction(x) {
        if (x.matches) {
          var swiper = new Swiper('.brand', {
            slidesPerView: 3,
            spaceBetween: 30,
            freeMode: true,
            loop:true,
            pagination: {
              el: '.swiper-pagination',
              clickable: true,
            },
          });
        } else {
          var swiper = new Swiper('.brand', {
            slidesPerView: 5,
            spaceBetween: 30,
            freeMode: true,
            loop:true,
            pagination: {
              el: '.swiper-pagination',
              clickable: true,
            },
          });
        }
      }

      var x = window.matchMedia("(max-width: 700px)");
      myFunction(x);
      x.addListener(myFunction);


      
    </script>

    <script>
        var swiper = new Swiper('.swiper-container', {
          effect: 'coverflow',
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: 'auto',
          coverflowEffect: {
            rotate: 10,
            stretch: 0,
            depth: 0,
            modifier: 3,
            slideShadows: false,
          },

        // jika ingin membuat looping card
        // loop:true

        //   script di bawah jika ingin tidak loop card
          pagination: {
            el: '.swiper-pagination',
          },
        });
      </script>
  </body>
</html>