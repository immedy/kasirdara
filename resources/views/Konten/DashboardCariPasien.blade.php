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
                            <button type="submit" class="btn btn-primary me-5">Cari</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Begin Konten --}}
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-fluid">
                <div class="row gy-5 g-xl-8">
                    <!--begin::Col Tabel Pasien-->
                    <div class="col-xl">
                        <!--begin::Tables Widget 9-->
                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Pasien</span>
                                </h3>
                                <div class="card-toolbar" title="Tambah Pasien">
                                    <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_new_target">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16"
                                                    height="2" rx="1" transform="rotate(-90 11.364 20.364)"
                                                    fill="black" />
                                                <rect x="4.36396" y="11.364" width="16" height="2"
                                                    rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Tambah Pasien
                                    </a>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-3">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fw-bolder text-muted">
                                                <th class="w-25px">No</th>
                                                <th class="min-w-140px">Nama</th>
                                                <th class="min-w-140px">Tanggal lahir</th>
                                                <th class="min-w-120px">Tempat Lahir</th>
                                                <th class="min-w-120px">NIK</th>
                                                <th class="min-w-100px text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-45px me-5">
                                                            <img src="src/media/avatars/150-11.jpg" alt="" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary fs-6">Ana
                                                                Simmons</a>
                                                            <span class="text-muted fw-bold text-muted d-block fs-7">jalan
                                                                Kusuma Bangsa RT 10 no 22</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-muted fw-bold text-muted d-block fs-7">19/09/1999</span>
                                                </td>
                                                <td class="text-end">
                                                    <div class="d-flex flex-column w-100 me-2">
                                                        <div class="d-flex flex-stack mb-2">
                                                            <span class="text-muted me-2 fs-7 fw-bold">Muara wIS</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>07097908903129038129038</td>
                                                <td>
                                                    <div class="d-flex justify-content-end flex-shrink-0">
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                                                            title="Edit Pasien">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="black" />
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Daftar">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                        fill="black" />
                                                                    <path opacity="0.3"
                                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--begin::Body-->
                        </div>
                        <!--end::Tables Widget 9-->
                    </div>
                    <!--end::Col Tabel Pasien-->
                </div>
            </div>
            <!--end::Container-->
        </div>
        {{-- End Konten --}}
    </div>
    {{-- Modal --}}
    <div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-fullscreen p-9">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <form id="kt_modal_new_target_form" class="form" action="#">
                        <div class="mb-13 text-center">
                            <h1 class="mb-3">Tambah Pasien Baru</h1>
                        </div>
                        <div class="row g-9 mb-8">
                            <div class="col-md-2 fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="Gelar Depan" name="gelar_depan"/>
                            </div>
                            <div class="col-md-3 fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="Nama Tanpa Gelar" name="nama"/>
                            </div>
                            <div class="col-md fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="Gelar Belakang" name="gelar_belakang"/>
                            </div>
                            <div class="col-md-3 fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="Tempat Lahir" name="Tempat Lahir"/>
                            </div>
                            <div class="col-md-2 fv-row">
                                <div class="position-relative d-flex align-items-center">
                                    <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
                                            <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
                                            <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
                                        </svg>
                                    </span>
                                    <input class="form-control form-control-solid ps-12" name="date" placeholder="Tanggal Lahir" id="kt_datepicker_1" />
                                </div>
                            </div>
                        </div>
                        <div class="row g-9 mb-8">
                            <div class="col-md fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="Agama" name="gelar_belakang"/>
                            </div>
                            <div class="col-md fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="Perkawinan" name="gelar_belakang"/>
                            </div>
                            <div class="col-md fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="Pendidikan" name="gelar_belakang"/>
                            </div>
                            <div class="col-md fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="Gol Darah" name="gelar_belakang"/>
                            </div>
                            <div class="col-md fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="Kewaraganegaraan" name="gelar_belakang"/>
                            </div>
                        </div>
                        <hr>
                        <h3>Alamat Sekarang</h3>
                        <hr>
                        <div class="row g-9 mb-8">
                            <div class="col-md fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="Alamat" name=""/>
                            </div>
                            <div class="col-md-2 fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="Kode Pos" name=""/>
                            </div>
                        </div>
                        <div class="row g-9 mb-8">
                            <div class="col-md-1 fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="RT" name=""/>
                            </div>
                            <div class="col-md-1 fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="RW" name=""/>
                            </div>
                            <div class="col-md fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="Provinsi" name=""/>
                            </div>
                            <div class="col-md fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="Kabupaten" name=""/>
                            </div>
                            <div class="col-md fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="Kelurahan" name=""/>
                            </div>
                        </div>
                        <hr>
                        <h3>Alamat Identitas</h3>
                        <hr>
                        <div class="row g-9 mb-8">
                            <div class="col-md-2 fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="Jenis Kartu" name=""/>
                            </div>
                            <div class="col-md fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="No Kartu" name=""/>
                            </div>
                        </div>
                        <div class="row g-9 mb-8">
                            <div class="col-md fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="Alamat" name=""/>
                            </div>
                            <div class="col-md-2 fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="Kode Pos" name=""/>
                            </div>
                        </div>
                        <div class="row g-9 mb-8">
                            <div class="col-md-1 fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="RT" name=""/>
                            </div>
                            <div class="col-md-1 fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="RW" name=""/>
                            </div>
                            <div class="col-md fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="Provinsi" name=""/>
                            </div>
                            <div class="col-md fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="Kabupaten" name=""/>
                            </div>
                            <div class="col-md fv-row">
                                <input type="text" class="form-control form-control-solid" placeholder="Kelurahan" name=""/>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center">
                            <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
                                <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                <span class="indicator-label">Simpan</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div> 
                    </form>
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    {{-- End Modal --}}

    
@endsection
