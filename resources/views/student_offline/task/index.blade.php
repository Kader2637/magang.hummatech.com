@extends('student_offline.layouts.app')
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Tugas kamu : Di setiap latihan akan membuat kemampuan kamu meningkat jadi lebih baik </h4>
                    <nav aria-label="breadcrumb mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="/siswa-offline">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Tugas</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('assets-user/dist/images/breadcrumb/ChatBc.png') }}" alt=""
                            class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid note-has-grid">
        <ul class="nav nav-pills p-3 mb-3 rounded align-items-center card flex-row">
          <li class="nav-item">
            <a data-bs-toggle="tab" href="#task" role="tab" class="nav-link note-link d-flex align-items-center justify-content-center active px-3 px-md-3 me-0 me-md-2 text-body-color" id="all-category">
              <i class="ti ti-book fill-white me-0 me-md-1"></i>
              <span class="d-none d-md-block font-weight-medium">Tugas</span>
            </a>
          </li>
          <li class="nav-item">
            <a data-bs-toggle="tab" href="#done" role="tab" class="nav-link note-link d-flex align-items-center justify-content-center px-3 px-md-3 me-0 me-md-2 text-body-color " id="note-business">
              <i class="ti ti-history fill-white me-0 me-md-1"></i>
              <span class="d-none d-md-block font-weight-medium">Tugas Selesai</span>
            </a>
          </li>
          <li class="nav-item">
            <a data-bs-toggle="tab" href="#acc" role="tab" class="nav-link note-link d-flex align-items-center justify-content-center px-3 px-md-3 me-0 me-md-2 text-body-color " id="note-social">
              <i class="ti ti-medal fill-white me-0 me-md-1"></i>
              <span class="d-none d-md-block font-weight-medium">Tugas dinilai</span>
            </a>
          </li>
          <li class="nav-item ms-auto">
            <form action="">
                <div class="d-flex">
                    <div class="search-box mx-2">
                        <input type="text" class="form-control search-chat py-2" id="text-srh" placeholder="Cari Materi">
                    </div>
                    <button class="btn btn-primary">
                        Cari
                    </button>
                </div>
            </form>
          </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="task" role="tabpanel">
                <div class="d-flex flex-wrap justify-content-between all-category note-important">
                    <div class="col-xl-6 col-lg-12" style="width: 49%">
                        <div class="card border-start border-info py-3 px-4">
                            <div class="d-flex no-block align-items-center">
                                <div class="col-lg-9">
                                    <div class="d-flex gap-2">
                                        <p>Nama Materi -> Nama Sub Materi</p>
                                        <p class="badge bg-light-success text-success" style="font-size: 12px">
                                            Mudah
                                        </p>
                                    </div>
                                    <h5>Lorem ipsum dolor sit amet consectetur. Netus nam porta elit pellentesque accumsan commod.</h5>
                                </div>
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-light-primary text-primary" data-bs-toggle="modal" data-bs-target="#add">
                                        Kumpulkan
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-databricks"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l9 5l9 -5v-3l-9 5l-9 -5v-3l9 5l9 -5v-3l-9 5l-9 -5l9 -5l5.418 3.01" /></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12" style="width: 49%">
                        <div class="card border-start border-info py-3 px-4">
                            <div class="d-flex no-block align-items-center">
                                <div class="col-lg-9">
                                    <div class="d-flex gap-2">
                                        <p>Nama Materi -> Nama Sub Materi</p>
                                        <p class="badge bg-light-success text-success" style="font-size: 12px">
                                            Mudah
                                        </p>
                                    </div>
                                    <h5>Lorem ipsum dolor sit amet consectetur. Netus nam porta elit pellentesque accumsan commod.</h5>
                                </div>
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-light-primary text-primary" data-bs-toggle="modal" data-bs-target="#add">
                                        Kumpulkan
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-databricks"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l9 5l9 -5v-3l-9 5l-9 -5v-3l9 5l9 -5v-3l-9 5l-9 -5l9 -5l5.418 3.01" /></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <div class="tab-pane" id="done" role="tabpanel">
                <div class="d-flex flex-wrap justify-content-between all-category note-important">
                    <div class="col-xl-6 col-lg-12" style="width: 49%">
                        <div class="card border-start border-info py-3 px-4">
                            <div class="d-flex no-block align-items-center">
                                <div class="col-lg-9">
                                    <div class="d-flex gap-2">
                                        <p>Nama Materi -> Nama Sub Materi</p>
                                        <p class="badge bg-light-success text-success" style="font-size: 12px">
                                            Mudah
                                        </p>
                                    </div>
                                    <h5>Lorem ipsum dolor sit amet consectetur. Netus nam porta elit pellentesque accumsan commod.</h5>
                                </div>
                                <div class="ms-auto">
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-light-success text-success dropdown text-center px-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Selesai
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="19"  height="19"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /></svg>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <button type="button" class="dropdown-item edit-item-btn btn-edit" data-id="1"
                                                data-start="15-03-2024"
                                                data-end="18-03-2024"
                                                data-description="Lorem ipsum dolor sit amet consectetur. Interdum.."
                                                data-status="Penting">
                
                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.8125 3.43732L10.3125 5.93732M2.8125 8.43732L5.3125 10.9373M1.875 11.8747H4.375L10.9375 5.3122C11.269 4.98068 11.4553 4.53104 11.4553 4.0622C11.4553 3.59336 11.269 3.14372 10.9375 2.8122C10.606 2.48068 10.1563 2.29443 9.6875 2.29443C9.21866 2.29443 8.76902 2.48068 8.4375 2.8122L1.875 9.3747V11.8747ZM13.125 9.37482V11.8748H8.125L10.625 9.37482H13.125Z" stroke="#5A6A85" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                Edit Jawaban
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12" style="width: 49%">
                        <div class="card border-start border-info py-3 px-4">
                            <div class="d-flex no-block align-items-center">
                                <div class="col-lg-9">
                                    <div class="d-flex gap-2">
                                        <p>Nama Materi -> Nama Sub Materi</p>
                                        <p class="badge bg-light-success text-success" style="font-size: 12px">
                                            Mudah
                                        </p>
                                    </div>
                                    <h5>Lorem ipsum dolor sit amet consectetur. Netus nam porta elit pellentesque accumsan commod.</h5>
                                </div>
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-light-primary text-primary" data-bs-toggle="modal" data-bs-target="#add">
                                        Kumpulkan
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-databricks"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l9 5l9 -5v-3l-9 5l-9 -5v-3l9 5l9 -5v-3l-9 5l-9 -5l9 -5l5.418 3.01" /></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <div class="tab-pane" id="acc" role="tabpanel">
                <div class="sub-materi py-4">
                    <h4>Penilaian Tugas Dari Sub Materi</h4>
                    <div class="d-flex flex-wrap justify-content-between all-category note-important">
                        <div class="col-xl-6 col-lg-12" style="width: 49%">
                            <div class="card border-start border-info py-3 px-4">
                                <div class="d-flex no-block align-items-center">
                                    <div class="col-lg-9">
                                        <div class="d-flex gap-2">
                                            <p>Nama Materi -> Nama Sub Materi</p>
                                            <p class="badge bg-light-success text-success" style="font-size: 12px">
                                                Mudah
                                            </p>
                                        </div>
                                        <h5>Lorem ipsum dolor sit amet consectetur. Netus nam porta elit pellentesque accumsan commod.</h5>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-light-success text-success dropdown text-center px-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                90
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="19"  height="19"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /></svg>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <button type="button" class="dropdown-item edit-item-btn btn-detail text-center" data-id="1"
                                                    data-start="15-03-2024"
                                                    data-end="18-03-2024"
                                                    data-description="Lorem ipsum dolor sit amet consectetur. Interdum.."
                                                    data-status="Penting">
                                                    Lihat Detail
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12" style="width: 49%">
                            <div class="card border-start border-info py-3 px-4">
                                <div class="d-flex no-block align-items-center">
                                    <div class="col-lg-9">
                                        <div class="d-flex gap-2">
                                            <p>Nama Materi -> Nama Sub Materi</p>
                                            <p class="badge bg-light-success text-success" style="font-size: 12px">
                                                Mudah
                                            </p>
                                        </div>
                                        <h5>Lorem ipsum dolor sit amet consectetur. Netus nam porta elit pellentesque accumsan commod.</h5>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-light-danger text-danger dropdown text-center px-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                45
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="19"  height="19"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /></svg>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <button type="button" class="dropdown-item edit-item-btn btn-detail text-center" data-id="1"
                                                    data-start="15-03-2024"
                                                    data-end="18-03-2024"
                                                    data-description="Lorem ipsum dolor sit amet consectetur. Interdum.."
                                                    data-status="Penting">
                                                    Lihat Detail
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
                <div class="sub-materi">
                    <h4>Penilaian Dari Tantangan</h4>
                    <div class="mt-1 d-flex flex-wrap justify-content-between all-category note-important">
                        <div class="col-xl-6 col-lg-12" style="width: 49%">
                            <div class="card border-start border-info py-3 px-4">
                                <div class="d-flex no-block align-items-center">
                                    <div class="col-lg-9">
                                        <div class="d-flex gap-2">
                                            <p>Nama Materi -> Nama Sub Materi</p>
                                            <p class="badge bg-light-success text-success" style="font-size: 12px">
                                                Mudah
                                            </p>
                                        </div>
                                        <h5>Lorem ipsum dolor sit amet consectetur. Netus nam porta elit pellentesque accumsan commod.</h5>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-light-success text-success dropdown text-center px-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                90
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="19"  height="19"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /></svg>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <button type="button" class="dropdown-item edit-item-btn btn-detail text-center" data-id="1"
                                                    data-start="15-03-2024"
                                                    data-end="18-03-2024"
                                                    data-description="Lorem ipsum dolor sit amet consectetur. Interdum.."
                                                    data-status="Penting">
                                                    Lihat Detail
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12" style="width: 49%">
                            <div class="card border-start border-info py-3 px-4">
                                <div class="d-flex no-block align-items-center">
                                    <div class="col-lg-9">
                                        <div class="d-flex gap-2">
                                            <p>Nama Materi -> Nama Sub Materi</p>
                                            <p class="badge bg-light-success text-success" style="font-size: 12px">
                                                Mudah
                                            </p>
                                        </div>
                                        <h5>Lorem ipsum dolor sit amet consectetur. Netus nam porta elit pellentesque accumsan commod.</h5>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-light-danger text-danger dropdown text-center px-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                45
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="19"  height="19"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /></svg>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <button type="button" class="dropdown-item edit-item-btn btn-edit text-center" data-id="1"
                                                    data-start="15-03-2024"
                                                    data-end="18-03-2024"
                                                    data-description="Lorem ipsum dolor sit amet consectetur. Interdum.."
                                                    data-status="Penting">
                                                    Lihat Detail
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
        <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title" id="myLargeModalLabel">
                            Kumpulkan Tugas
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/create/jurnal" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="modal-body">
                            <div class="mb-2">
                                <h6>
                                    <svg width="26" class="me-2" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.5837 2.1665C21.4126 2.16646 22.2103 2.48319 22.8134 3.05189C23.4166 3.6206 23.7796 4.39829 23.8282 5.22584L23.8337 5.4165V20.5832C23.8337 21.4121 23.517 22.2098 22.9483 22.813C22.3796 23.4161 21.6019 23.7791 20.7743 23.8278L20.5837 23.8332H5.41699C4.58801 23.8332 3.79035 23.5165 3.18721 22.9478C2.58407 22.3791 2.22104 21.6014 2.17241 20.7738L2.16699 20.5832V5.4165C2.16695 4.58753 2.48368 3.78986 3.05238 3.18672C3.62109 2.58358 4.39877 2.22055 5.22633 2.17192L5.41699 2.1665H20.5837ZM13.0003 11.9165H11.917L11.7902 11.9241C11.5269 11.9554 11.2843 12.0822 11.1082 12.2805C10.9321 12.4787 10.8349 12.7347 10.8349 12.9998C10.8349 13.265 10.9321 13.5209 11.1082 13.7192C11.2843 13.9175 11.5269 14.0443 11.7902 14.0756L11.917 14.0832V17.3332L11.9246 17.4599C11.9531 17.7017 12.0622 17.9269 12.2344 18.0991C12.4066 18.2712 12.6318 18.3804 12.8736 18.4089L13.0003 18.4165H14.0837L14.2104 18.4089C14.4522 18.3804 14.6774 18.2712 14.8496 18.0991C15.0217 17.9269 15.1309 17.7017 15.1594 17.4599L15.167 17.3332L15.1594 17.2064C15.1335 16.9854 15.0402 16.7777 14.8921 16.6116C14.744 16.4455 14.5484 16.329 14.3317 16.278L14.2104 16.2563L14.0837 16.2498V12.9998L14.0761 12.8731C14.0476 12.6313 13.9384 12.4061 13.7662 12.2339C13.5941 12.0618 13.3689 11.9526 13.1271 11.9241L13.0003 11.9165ZM13.0112 8.6665L12.8736 8.67409C12.6103 8.70541 12.3676 8.83221 12.1915 9.03047C12.0154 9.22873 11.9182 9.48468 11.9182 9.74984C11.9182 10.015 12.0154 10.2709 12.1915 10.4692C12.3676 10.6675 12.6103 10.7943 12.8736 10.8256L13.0003 10.8332L13.1379 10.8256C13.4012 10.7943 13.6439 10.6675 13.82 10.4692C13.996 10.2709 14.0933 10.015 14.0933 9.74984C14.0933 9.48468 13.996 9.22873 13.82 9.03047C13.6439 8.83221 13.4012 8.70541 13.1379 8.67409L13.0112 8.6665Z" fill="#5D87FF"/>
                                    </svg>
                                     Soal!</h6>
                                <p class="px-4 ms-2">Lorem ipsum dolor sit amet consectetur. Semper phasellus aenean vel dolor purus commodo egestas rhoncus. Magna massa nunc id sagittis eget pellentesque ut ullamcorper. Ipsum felis aliquam at neque elementum viverra turpis. Facilisis faucibus pretium laoreet scelerisque aliquam. Volutpat ante sit iaculis sit donec. Amet dictumst lorem in vehicula lorem. Aenean est gravida fermentum sed nibh imperdiet. Nullam neque gravida mattis in quisque. Massa amet arcu et aliquam justo aliquet vulputate ultrices urna. Laoreet eleifend integer ut vitae. Nunc vitae aliquam enim vivamus lorem augue egestas ullamcorper. Nulla ut maecenas et varius faucibus ultrices viverra mi. Nunc feugiat leo porttitor sem urna sed amet.
                                    Malesuada ornare rhoncus pretium in tristique scelerisque. Sit condimentum velit feugiat est felis tempus feugiat non feugiat. Enim purus at euismod lectus lobortis placerat sollicitudin.</p>
                            </div>
                            <div class="px-4">
                                <label for="" class="mt-2 mb-2">Jawaban</label>
                                <input type="file" name="" class="form-control">
                                @error('')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer pe-4 me-2">
                            <button type="button" class="btn btn-light-danger text-danger font-medium waves-effect text-start"
                                data-bs-dismiss="modal">
                                Tutup
                            </button>
                            <button type="submit"
                                class="btn btn-primary font-medium waves-effect text-start"
                                data-bs-dismiss="modal">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>

      <div class="modal fade" id="modal-edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Edit Tugas
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
                        <div class="mb-2">
                          <h6>
                              <svg width="26" class="me-2" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M20.5837 2.1665C21.4126 2.16646 22.2103 2.48319 22.8134 3.05189C23.4166 3.6206 23.7796 4.39829 23.8282 5.22584L23.8337 5.4165V20.5832C23.8337 21.4121 23.517 22.2098 22.9483 22.813C22.3796 23.4161 21.6019 23.7791 20.7743 23.8278L20.5837 23.8332H5.41699C4.58801 23.8332 3.79035 23.5165 3.18721 22.9478C2.58407 22.3791 2.22104 21.6014 2.17241 20.7738L2.16699 20.5832V5.4165C2.16695 4.58753 2.48368 3.78986 3.05238 3.18672C3.62109 2.58358 4.39877 2.22055 5.22633 2.17192L5.41699 2.1665H20.5837ZM13.0003 11.9165H11.917L11.7902 11.9241C11.5269 11.9554 11.2843 12.0822 11.1082 12.2805C10.9321 12.4787 10.8349 12.7347 10.8349 12.9998C10.8349 13.265 10.9321 13.5209 11.1082 13.7192C11.2843 13.9175 11.5269 14.0443 11.7902 14.0756L11.917 14.0832V17.3332L11.9246 17.4599C11.9531 17.7017 12.0622 17.9269 12.2344 18.0991C12.4066 18.2712 12.6318 18.3804 12.8736 18.4089L13.0003 18.4165H14.0837L14.2104 18.4089C14.4522 18.3804 14.6774 18.2712 14.8496 18.0991C15.0217 17.9269 15.1309 17.7017 15.1594 17.4599L15.167 17.3332L15.1594 17.2064C15.1335 16.9854 15.0402 16.7777 14.8921 16.6116C14.744 16.4455 14.5484 16.329 14.3317 16.278L14.2104 16.2563L14.0837 16.2498V12.9998L14.0761 12.8731C14.0476 12.6313 13.9384 12.4061 13.7662 12.2339C13.5941 12.0618 13.3689 11.9526 13.1271 11.9241L13.0003 11.9165ZM13.0112 8.6665L12.8736 8.67409C12.6103 8.70541 12.3676 8.83221 12.1915 9.03047C12.0154 9.22873 11.9182 9.48468 11.9182 9.74984C11.9182 10.015 12.0154 10.2709 12.1915 10.4692C12.3676 10.6675 12.6103 10.7943 12.8736 10.8256L13.0003 10.8332L13.1379 10.8256C13.4012 10.7943 13.6439 10.6675 13.82 10.4692C13.996 10.2709 14.0933 10.015 14.0933 9.74984C14.0933 9.48468 13.996 9.22873 13.82 9.03047C13.6439 8.83221 13.4012 8.70541 13.1379 8.67409L13.0112 8.6665Z" fill="#5D87FF"/>
                              </svg>
                               Soal!</h6>
                          <p class="px-4 ms-2">Lorem ipsum dolor sit amet consectetur. Semper phasellus aenean vel dolor purus commodo egestas rhoncus. Magna massa nunc id sagittis eget pellentesque ut ullamcorper. Ipsum felis aliquam at neque elementum viverra turpis. Facilisis faucibus pretium laoreet scelerisque aliquam. Volutpat ante sit iaculis sit donec. Amet dictumst lorem in vehicula lorem. Aenean est gravida fermentum sed nibh imperdiet. Nullam neque gravida mattis in quisque. Massa amet arcu et aliquam justo aliquet vulputate ultrices urna. Laoreet eleifend integer ut vitae. Nunc vitae aliquam enim vivamus lorem augue egestas ullamcorper. Nulla ut maecenas et varius faucibus ultrices viverra mi. Nunc feugiat leo porttitor sem urna sed amet.
                              Malesuada ornare rhoncus pretium in tristique scelerisque. Sit condimentum velit feugiat est felis tempus feugiat non feugiat. Enim purus at euismod lectus lobortis placerat sollicitudin.</p>
                      </div>
                      <div class="px-4">
                        <label for="" class="mt-2 mb-2">Jawaban</label>
                        <input type="file" name="" class="form-control">
                        @error('')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    </div>
                    <div class="modal-footer pe-4 me-2">
                        <button type="button" class="btn btn-light-danger text-danger font-medium waves-effect text-start"
                            data-bs-dismiss="modal">
                            Tutup
                        </button>
                        <button type="submit"
                            class="btn btn-primary font-medium waves-effect text-start"
                            data-bs-dismiss="modal">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
      </div>

      <div class="modal fade" id="modal-detail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Detail tugas yang dinilai
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
                        <div class="mb-2">
                          <h6>
                              <svg width="26" class="me-2" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M20.5837 2.1665C21.4126 2.16646 22.2103 2.48319 22.8134 3.05189C23.4166 3.6206 23.7796 4.39829 23.8282 5.22584L23.8337 5.4165V20.5832C23.8337 21.4121 23.517 22.2098 22.9483 22.813C22.3796 23.4161 21.6019 23.7791 20.7743 23.8278L20.5837 23.8332H5.41699C4.58801 23.8332 3.79035 23.5165 3.18721 22.9478C2.58407 22.3791 2.22104 21.6014 2.17241 20.7738L2.16699 20.5832V5.4165C2.16695 4.58753 2.48368 3.78986 3.05238 3.18672C3.62109 2.58358 4.39877 2.22055 5.22633 2.17192L5.41699 2.1665H20.5837ZM13.0003 11.9165H11.917L11.7902 11.9241C11.5269 11.9554 11.2843 12.0822 11.1082 12.2805C10.9321 12.4787 10.8349 12.7347 10.8349 12.9998C10.8349 13.265 10.9321 13.5209 11.1082 13.7192C11.2843 13.9175 11.5269 14.0443 11.7902 14.0756L11.917 14.0832V17.3332L11.9246 17.4599C11.9531 17.7017 12.0622 17.9269 12.2344 18.0991C12.4066 18.2712 12.6318 18.3804 12.8736 18.4089L13.0003 18.4165H14.0837L14.2104 18.4089C14.4522 18.3804 14.6774 18.2712 14.8496 18.0991C15.0217 17.9269 15.1309 17.7017 15.1594 17.4599L15.167 17.3332L15.1594 17.2064C15.1335 16.9854 15.0402 16.7777 14.8921 16.6116C14.744 16.4455 14.5484 16.329 14.3317 16.278L14.2104 16.2563L14.0837 16.2498V12.9998L14.0761 12.8731C14.0476 12.6313 13.9384 12.4061 13.7662 12.2339C13.5941 12.0618 13.3689 11.9526 13.1271 11.9241L13.0003 11.9165ZM13.0112 8.6665L12.8736 8.67409C12.6103 8.70541 12.3676 8.83221 12.1915 9.03047C12.0154 9.22873 11.9182 9.48468 11.9182 9.74984C11.9182 10.015 12.0154 10.2709 12.1915 10.4692C12.3676 10.6675 12.6103 10.7943 12.8736 10.8256L13.0003 10.8332L13.1379 10.8256C13.4012 10.7943 13.6439 10.6675 13.82 10.4692C13.996 10.2709 14.0933 10.015 14.0933 9.74984C14.0933 9.48468 13.996 9.22873 13.82 9.03047C13.6439 8.83221 13.4012 8.70541 13.1379 8.67409L13.0112 8.6665Z" fill="#5D87FF"/>
                              </svg>
                               Soal!</h6>
                          <p class="px-4 ms-2">Lorem ipsum dolor sit amet consectetur. Semper phasellus aenean vel dolor purus commodo egestas rhoncus. Magna massa nunc id sagittis eget pellentesque ut ullamcorper. Ipsum felis aliquam at neque elementum viverra turpis. Facilisis faucibus pretium laoreet scelerisque aliquam. Volutpat ante sit iaculis sit donec. Amet dictumst lorem in vehicula lorem. Aenean est gravida fermentum sed nibh imperdiet. Nullam neque gravida mattis in quisque. Massa amet arcu et aliquam justo aliquet vulputate ultrices urna. Laoreet eleifend integer ut vitae. Nunc vitae aliquam enim vivamus lorem augue egestas ullamcorper. Nulla ut maecenas et varius faucibus ultrices viverra mi. Nunc feugiat leo porttitor sem urna sed amet.
                              Malesuada ornare rhoncus pretium in tristique scelerisque. Sit condimentum velit feugiat est felis tempus feugiat non feugiat. Enim purus at euismod lectus lobortis placerat sollicitudin.</p>
                      </div>
                      <div class="px-4">
                        <h6>Nilai</h6>
                        <h4 class="text-secondary">80.6</h4>
                    </div>
                    </div>
                    <div class="modal-footer pe-4 me-2">
                        <button type="button" class="btn btn-light-danger text-danger font-medium waves-effect text-start"
                            data-bs-dismiss="modal">
                            Tutup
                        </button>
                    </div>
                </form>
            </div>
        </div>
      </div>

    {{-- <div class="row g-2 mb-4">
        <div class="col-sm-4">
            <h4 class="mx-1">Tugas</h4>
        </div>
        <div class="col-sm-auto ms-auto">
            <form action="">
                <div class="d-flex">
                    <div class="search-box mx-2">
                        <input type="text" class="form-control search-chat py-2" id="text-srh" placeholder="Cari Materi">
                    </div>
                    <button class="btn btn-primary">
                        Cari
                    </button>
                </div>
            </form>
        </div>
    </div> --}}



@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@2"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.btn-edit').click(function () {
            var id = $(this).data('id');
            $('#form-update').attr('action', '/material/' + id);
            $('#modal-edit').modal('show');
        });
        $('.btn-detail').click(function () {
            var id = $(this).data('id');
            $('#modal-detail').modal('show');
        });

        function preview(event) {
            var input = event.target;
            var previewImages = document.getElementsByClassName('image-preview');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    Array.from(previewImages).forEach(function(previewImage) {
                        previewImage.src = e.target.result;
                        previewImage.style.display = 'block';
                    });
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        $('.btn-detail').click(function() {
            var detail = $('#detail-content');
            detail.empty();
            var id = $(this).data('id');
            var name = $(this).data('name');
            var date = $(this).data('date');
            var school = $(this).data('school');
            var description = $(this).data('description');
            var image = $(this).data('image');
            detail.append('<div class="mb-2">');
            detail.append('<h6 class="f-w-600">Nama</h6>');
            detail.append('<p class="text-muted">' + name + '</p>')
            detail.append('</div>');
            detail.append('<div class="mb-2">');
            detail.append('<h6 class="f-w-600">Tanggal</h6>');
            detail.append('<p class="text-muted">' + date + '</p>')
            detail.append('</div>');
            detail.append('<div class="mb-2">');
            detail.append('<h6 class="f-w-600">Sekolah</h6>');
            detail.append('<p class="text-muted">' + school + '</p>')
            detail.append('</div>');
            detail.append('<div class="mb-2">');
            detail.append('<h6 class="f-w-600">Kegiatan</h6>');
            detail.append('<p>' + description + '</p>')
            detail.append('</div>');
            detail.append('<div class="mb-2">');
            detail.append('<h6 class="f-w-600">Bukti</h6>');
            detail.append('<img src="' + image + '" width="100%"></img>')
            detail.append('</div>');
            $('#detail').modal('show');
        });

        $('.btn-delete').click(function () {
            var id = $(this).data('id');
            $('#form-delete').attr('action', '/division/' + id);
            $('#modal-delete').modal('show');
        });
    </script>
@endsection