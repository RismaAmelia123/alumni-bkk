@extends('Alumni.Landing-page.landing-page')
@section('title','BKK - SMK YPC TASIKMALAYA')
@section('landing-page')
<section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Selamat Datang di <span>Situs Bursa Kerja Khusus Smk Ypc Tasikmalaya</span></h1>
            <h2>Bursa Kerja Khusus (BKK) adalah sebuah lembaga yang dibentuk di Sekolah Menengah Kejuruan Negeri dan Swasta, sebagai unit pelaksana yang memberikan pelayanan dan informasi lowongan kerja, penyaluran dan penempatan tenaga kerja, merupakan mitra dinas Tenaga Kerja dan Transmigrasi</h2>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/details-5.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

</section>

  <main id="main">
    <!-- ======= Lowongan Section ======= -->
    <section id="lowongan" class="lowongan">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Lowongan</h2>
          <p>Lowongan Pekerjaan</p>
        </div>
        <div class="row">
          @foreach ($lowongan as $item)
            <div class="col-md-4 col-lg-4 icon-boxes d-flex flex-column align-items-stretch justify-content-center mb-3" data-aos="fade-left">
              <div class="card shadow h-100">
                <div class="card-body">
                  <div class="row">
                    <div class="col-3">
                      <img src="/storage/{{ $item->perusahaan->foto }}" alt="Logo" class="rounded-circle" width="75">
                    </div>
                    <div class="col mt-2">
                      <h5>{{ $item->lowongan }}</h5>
                      <h5 class="fw-bold">{{ $item->perusahaan->perusahaan }}</h5>
                    </div>
                    <hr class="mt-3">
                  </div>
                  <div class="row">
                    <div class="col">
                      <h5 class="fw-bold">Lokasi</h5>
                    </div>
                    <div class="col">
                      <h5>{{ $item->perusahaan->alamat }}</h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <h5 class="fw-bold">Pendidikan</h5>
                    </div>
                    <div class="col">
                      <h5>{{ $item->pendidikan }}</h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <h5 class="fw-bold">Gaji</h5>
                    </div>
                    <div class="col">
                      <h5>{{ $item->gaji }}</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Perusahaan</h2>
          <p>Perusahaan</p>
        </div>
        <div class="row">
          @foreach ($perusahaan as $item)
              <div class="col-md-4 col-lg-4 icon-boxes d-flex flex-column align-items-stretch justify-content-center mb-3" data-aos="fade-left">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="row">
                            <h4 class="fw-bold">{{ $item->perusahaan }}</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <img src="/storage/{{ $item->foto }}" alt="Logo" class="rounded-circle" width="50">
                        </div>
                    </div>
                </div>
              </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="testimoni" class="testimoni">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Gallery</h2>
          <p>Gallery Kami</p>
        </div>

        <div class="row g-0" data-aos="fade-left">

          @foreach ($gallery as $gallery)
            <div class="col-lg-3 col-md-4">
              <div class="testimoni-item" data-aos="zoom-in" data-aos-delay="100">
                <a href="{{ $gallery->gallery }}" class="gallery-lightbox">
                  <img src="/storage/{{ $gallery->gallery }}" alt="" class="img-fluid">
                </a>
              </div>
            </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Testimoni</h2>
          <p>Testimoni Alumni</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                  @foreach ($testimoni as $testimoni)
                    <img src="/storage/{{ $testimoni->alumni->foto }}" class="testimonial-img" alt="Profile">
                    <h3>{{ $testimoni->alumni->nama_alumni }}</h3>
                    <h4>{{ $testimoni->alumni->nisn }}</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      {{ $testimoni->testimoni }}
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  @endforeach
                </div>
              </div>
              </div><!-- End testimonial item -->
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="card">
          <div class="card-body">
              <div class="row">
                <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                  <div class="info">
                    <div class="address">
                      <i class="bi bi-geo-alt"></i>
                      <h4>Lokasi :</h4>
                      <p>Komplek Pesantren Cintawana Desa Cikunten Singaparna Kabupaten Tasikmalaya Jawa Barat Kode Pos 46414</p>
                    </div>
                    <div class="email">
                      <i class="bi bi-envelope"></i>
                      <h4>Email :</h4>
                      <p>smkypctasikmalaya@gmail.com</p>
                    </div>
                    <div class="phone">
                      <i class="bi bi-phone"></i>
                      <h4>Telp :</h4>
                      <p>0265 546717</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
      
                  <form action="{{ url('contact/create') }}" method="post" role="form">
                    @csrf
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                      </div>
                    </div>
                    <div class="form-group mt-3">
                      <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn text-white mt-2" style="background-color: #696cff">Send Message</button></div>
                  </form>
      
                </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main>
    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
  
            <div class="col-lg-4 col-md-6">
              <div class="footer-info">
                <h4>BKK SMK YPC TASIKMALAYA</h4>
                <p>
                  Komplek Pesantren Cintawana Desa Cikunten Singaparna Kabupaten Tasikmalaya Jawa Barat <br>
                  Kode Pos 46414 <br><br>
                  <strong>Phone :</strong> Telp. 0265 546717<br>
                  <strong>Email :</strong> smkypctasikmalaya@gmail.com<br>
                </p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-8 footer-links">
              <h4>Tautan</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="/">Beranda</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/perusahaan/alumni">Perusahaan</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/loker">Lowongan Pekerjaan</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-8 footer-links">
              <h4>Sosial Media</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="/">Facebook</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/perusahaan/alumni">Instagram</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/loker">Youtobe</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>SMK YPC TASIKMALAYA</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
          Designed by <a href="#">Risma Amelia Putri</a>
        </div>
      </div>
    </footer><!-- End Footer -->
@endsection