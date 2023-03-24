@extends('konten')
@section('KONTEN')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center">
                        <div class="position-relative w-md-400px me-md-2">
                            <span
                                class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                        rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="black"></path>
                                </svg>
                            </span>
                            <input type="text" class="form-control form-control-solid ps-10" name="search"
                                value="" placeholder="Cari Pasien">
                        </div>
                        <div class="d-flex align-items-center">
                            <button type="submit" class="btn btn-primary me-5">Cari Pasien</button>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center py-1">
                    <a href="/DashboardCariPasien" class="btn btn-sm btn-primary"  id="kt_toolbar_primary_button">Daftar Pasien</a>
                </div>
            </div>
        </div>
        {{-- Begin Konten --}}
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-fluid">
                <!--begin::Row-->
                <div class="row g-5 g-xl-8">
                    <div class="col-xl-3">
                        <!--begin::Statistics Widget 1-->
                        <div class="card bgi-no-repeat card-xl-stretch mb-xl-8"
                            style="background-position: right top; background-size: 30% auto; background-image: url(src/media/svg/shapes/abstract-4.svg)">
                            <!--begin::Body-->
                            <div class="card-body">
                                <a href="#" class="card-title fw-bolder text-muted text-hover-primary fs-4">Nama Pasien</a>    
                                <div class="fw-bolder text-primary my-6">Umur Pasien  30 tahun 3 Bulan 2 hari</div>
                                <div class="fw-bolder text-primary my-6">Tanggal Masuk 19/10/2023</div>
                                <p class="text-dark-75 fw-bold fs-5 m-0">Alamat Pasien </p>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Statistics Widget 1-->
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        {{-- End Konten --}}
    </div>
@endsection
