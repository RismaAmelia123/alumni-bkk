@extends('Alumni.Landing-page.landing-page')
@section('title','Perusahaan')
@section('landing-page')
        <!-- ======= Perusahaan Section ======= -->
        <section id="perusahaan" class="perusahaan">
            <div class="container pt-5">
              <div class="row">
                <div class="section-title">
                  <p>Perusahaan</p>
                </div>
                @foreach ($perusahaan as $item)
                  <div class="col-md-6 mb-2">
                    <div class="card shadow h-100">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-4">
                            <img src="/storage/{{ $item->foto }}" alt="Logo" class="rounded-circle" width="200">
                          </div>
                          <div class="col mt-4">
                            <h5 class="fw-bold">{{ $item->perusahaan }}</h5>
                            <h5>{{ $item->alamat }}</h5>
                            <h5>Pengisi Perusahaan : </h5>
                          </div>
                          <hr class="mt-3">
                        </div>
                        <div class="row">
                          <div class="col-3">
                            <h5 class="fw-bold">Kontak</h5>
                          </div>
                          <div class="col">
                            <h5>{{ $item->kontak }}</h5>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-3">
                            <h5 class="fw-bold">Deskripsi</h5>
                          </div>
                          <div class="col">
                            <h5>{{ $item->deskripsi }}</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </section><!-- End About Section -->
@endsection