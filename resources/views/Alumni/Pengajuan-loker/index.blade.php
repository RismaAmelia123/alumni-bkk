@extends('Alumni.Landing-page.landing-page')
@section('title','Lowongan Pekerjaan')
@section('landing-page')
        <!-- ======= Lowongan Section ======= -->
        <section id="lowongan" class="lowongan">
            <div class="container pt-5">
              <div class="row">
                @if (session('status'))
                  <div class="alert alert-primary alert-dismissible" role="alert">
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      {{ session('status') }}
                  </div>
                @endif
                <div class="section-title">
                  <p>Lowongan Pekerjaan</p>
                </div>
                @foreach ($lowongan as $item)
                  <div class="col-md-6 mb-2">
                    <div class="card shadow h-100">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-3">
                            <img src="/storage/{{ $item->perusahaan->foto }}" alt="Logo" class="rounded-circle" width="75">
                          </div>
                          <div class="col mt-2">
                            <h5 class="fw-bold">{{ $item->perusahaan->perusahaan }}</h5>
                            <h5>Bidang : {{ $item->lowongan }}</h5>
                            <h5>Pengisi Lowongan Pekerjaan :</h5>
                          </div>
                          <hr class="mt-3">
                        </div>
                        <div class="row">
                          <div class="col-3">
                            <h5 class="fw-bold">Lokasi</h5>
                          </div>
                          <div class="col">
                            <h5>{{ $item->perusahaan->alamat }}</h5>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-3">
                            <h5 class="fw-bold">Pendidikan</h5>
                          </div>
                          <div class="col">
                            <h5>{{ $item->pendidikan }}</h5>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-3">
                            <h5 class="fw-bold">Gaji</h5>
                          </div>
                          <div class="col">
                            <h5>{{ $item->gaji }}</h5>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-3">
                            <h5 class="fw-bold">Deskripsi </h5>
                          </div>
                            <div class="col">
                              <h5>{{ $item->perusahaan->deskripsi }}</h5>
                            </div>
                        </div> 
                        <a href="detail/{{ $item->id_lowongan }}"><input type="submit" value="Detail" class="btn btn-primary"></a>
                        <a href="riwayat/testimoni/add/{{ $item->id_lowongan }}"><input type="submit" value="Berikan Testimoni" class="btn btn-primary"></a>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </section><!-- End About Section -->
@endsection