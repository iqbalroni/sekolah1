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

    <div class="form-komentar">
        <div class="jumbotron d-flex align-items-center">
            <div class="container">
                <div class="text-center">
                    <h2 class="title">Komentar Alumni</h2>
                    <p class="text-title">Masukan Motivasi Dan Komentar Alumni</p>
                    <hr class="garis">
                  </div>
                <form class="forms-sample" action="/komentar/simpan" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Nama</label>
                                <input type="text" value="{{old('nama')}}" class="form-control" id="exampleInputName1" placeholder="Nama" name="nama">
                                @error('nama')
                                  <p class="text-warning">{{$message}}</p>
                                @enderror
                              </div>
                          </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Profesi</label>
                                <input type="text" value="{{old('profesi')}}" class="form-control" id="exampleInputName1" placeholder="Profesi" name="profesi">
                                @error('profesi')
                                  <p class="text-warning">{{$message}}</p>
                                @enderror
                              </div>
                          </div>
                        </div>

                        <div class="row d-flex align-items-center">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleTextarea1">Motivasi / Komentar</label>
                                    <textarea class="form-control" value="{{old('pesan')}}" id="exampleTextarea1" rows="3" placeholder="pesan" name="pesan"></textarea>
                                    @error('pesan')
                                        <p class="text-warning">{{$message}}</p>
                                    @enderror
                                  </div>
                              </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Foto</label>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                          <input type="file" name="foto" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                          <label class="custom-file-label" for="inputGroupFile01">Foto</label>
                                        </div>
                                      </div>
                                    @error('foto')
                                      <p class="text-warning">{{$message}}</p>
                                    @enderror
                                  </div>
                              </div>
                        </div>
                    <button type="submit" class="btn yellow mr-2">Kirim</button>
                  </form>
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