@extends('Admin.Dashboard.index')
@section('title', 'Dashboard')
@section('content')
             <!-- Content wrapper -->
             <div class="content-wrapper">
                <!-- Content -->
    
                <div class="container-xxl flex-grow-1 container-p-y">
                  <div class="row">
                    <div class="col-lg-12 mb-4 order-0">
                      <div class="card">
                        <div class="d-flex align-items-end row">
                          <div class="col-sm-9">
                            <div class="card-body">
                              <h5 class="card-title text-primary">Selamat Datang {{ Auth::guard('admins')->user()->nama }} 🎉</h5>
                              <p class="mb-5">
                                Bursa Kerja Khusus Sekolah Menengah Kejuruan Yayasan Pesantren Cintawana Tasikmalaya
                              </p>
                            </div>
                          </div>
                          <div class="col-sm-3 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                              <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-12 col-6 mb-4">
                            <div class="card h-100">
                              <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <span class="fw-semibold d-block mb-1">Alumni</span>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><h2>{{ $alumni }}</h2></div>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                          <div class="col-lg-3 col-md-12 col-6 mb-4">
                            <div class="card h-100">
                              <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <span class="fw-semibold d-block mb-1">Perusahaan</span>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><h2>{{ $perusahaan }}</h2></div>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-6 mb-4">
                            <div class="card h-100">
                              <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <span class="fw-semibold d-block mb-1">Lowongan</span>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><h2>{{ $lowongan }}</h2></div>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-6 mb-4">
                            <div class="card h-100">
                              <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <span class="fw-semibold d-block mb-1">Lamaran</span>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><h2>{{ $lamaran }}</h2></div>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    {{-- </div> --}}
                  </div>
                  <div class="row">
                    <!-- Order Statistics -->
                    <div class="col-md-6 col-lg-4 order-2 mb-4">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <h5 class="card-title m-0 me-2">Perusahaan</h5>
                        </div>
                        <div class="card-body">
                          @if ($perusahaan ?? '')
                            <ul class="p-0 m-0">
                              @foreach ($perusahaan1 as $perusahaan)
                              <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                  <img src="/storage/{{ $perusahaan->foto }}" alt="Profile" class="rounded" />
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                  <div class="me-2">
                                    <h6 class="mb-0">{{ $perusahaan->perusahaan}}</h6>
                                    <small class="text-muted d-block mb-1">{{ $perusahaan->alamat }}</small>
                                  </div>
                                  <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0"></h6>
                                  </div>
                                </div>
                              </li>
                              @endforeach
                            </ul>
                          @else
                            <div class="text-center">
                              Tidak Ada Data
                            </div>
                          @endif
                        </div>
                      </div>
                    </div>
                    <!--/ Order Statistics -->
    
                    <!-- Expense Overview -->
                    <div class="col-md-6 col-lg-4 order-2 mb-4">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <h5 class="card-title m-0 me-2">Lowongan</h5>
                        </div>
                        <div class="card-body">
                          @if ($lowongan ?? '')
                            <ul class="p-0 m-0">
                              @foreach ($loker as $loker)
                              <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                  <img src="/storage/{{ $loker->perusahaan->foto }}" alt="Profile" class="rounded" />
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                  <div class="me-2">
                                    <small class="text-muted d-block mb-1">{{ $loker->perusahaan->perusahaan }}</small>
                                    <h6 class="mb-0">{{ $loker->lowongan }}</h6>
                                  </div>
                                  <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0"></h6>
                                  </div>
                                </div>
                              </li>
                              @endforeach
                            </ul>
                          @else
                            <div class="text-center">
                              Tidak Ada Data
                            </div>
                          @endif
                        </div>
                      </div>
                    </div>
                    <!--/ Expense Overview -->
    
                    <!-- Transactions -->
                    <div class="col-md-6 col-lg-4 order-2 mb-4">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <h5 class="card-title m-0 me-2">Lamaran Masuk</h5>
                        </div>
                        <div class="card-body">
                          @if ($lamaran ?? '')
                            <ul class="p-0 m-0">
                              @foreach ($lamar as $lamar)
                              <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                  <img src="/storage/{{ $lamar->alumni->foto }}" alt="Profile" class="rounded" />
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                  <div class="me-2">
                                    <h6 class="mb-0">{{ $lamar->lowongan->perusahaan->perusahaan }}</h6>
                                    <small class="text-muted d-block mb-1">{{ $lamar->alumni->nama_alumni }}</small>
                                  </div>
                                  <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0"></h6>
                                  </div>
                                </div>
                              </li>
                              @endforeach
                            </ul>
                          @else
                            <div class="text-center">
                              Tidak Ada Data
                            </div>
                          @endif
                        </div>
                      </div>
                    </div>
                    <!--/ Transactions -->
                  </div>
                </div>
                <!-- / Content -->
    
                
    
                <div class="content-backdrop fade"></div>
              </div>
              <!-- Content wrapper --> 
@endsection