@extends('konten')
@section('KONTEN')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Pasien</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start mx-4"></span>
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-fluid">
                <!--begin::Navbar-->
                <div class="card mb-5 mb-xl-10">
                    <div class="card-body pt-9 pb-0">
                        <!--begin::Details-->
                        <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                            <!--begin: Pic-->
                            <div class="me-7 mb-4">
                                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                    <img src="{{ asset('src/media/avatars/150-26.jpg') }}" alt="image" />
                                    <div
                                        class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px">
                                    </div>
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <!--begin::Title-->
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <!--begin::User-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Name-->
                                        <div class="d-flex align-items-center mb-2">
                                            <a
                                                class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{ $pasien->NAMA }}</a>
                                        </div>
                                        <!--end::Name-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                            <a class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">{{ $pasien->ALAMAT }}
                                            </a>
                                            <a class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                Tempat Lahir {{ $pasien->TEMPAT_LAHIR }}</a>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Title-->
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-grow-1 pe-8">
                                        <!--begin::Stats-->
                                        <div class="d-flex flex-wrap">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-2 fw-bolder" data-kt-countup="true"
                                                        data-kt-countup-value="{{ $pasien->GetTahun() }}"
                                                        data-kt-countup-prefix>0</div>
                                                </div>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fw-bold fs-6 text-gray-400">{{ $pasien->GetTahun() }}</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-2 fw-bolder" data-kt-countup="true"
                                                        data-kt-countup-value="{{ $pasien->GetBulan() }}">0</div>
                                                </div>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fw-bold fs-6 text-gray-400">Bulan</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-2 fw-bolder" data-kt-countup="true"
                                                        data-kt-countup-value="{{ $pasien->GetHari() }}"
                                                        data-kt-countup-prefix>0</div>
                                                </div>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fw-bold fs-6 text-gray-400">Hari</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Info-->
                        </div>
                    </div>
                </div>
                <!--end::Navbar-->
                <!--begin::Basic info-->
                <div class="card mb-5 mb-xl-10">
                    <!--begin::Card header-->
                    <div class="card-header border-0 cursor-pointer">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0">Pesan Ambulan</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Content-->
                    <div id="kt_account_profile_details" class="collapse show">
                        <!--begin::Form-->
                        <form id="kt_account_profile_details_form" class="form">
                            <!--begin::Card body-->
                            <div class="card-body border-top p-9">
                                <div class="row mb-2">
                                    <label class="col-lg-2 col-form-label fw-bold fs-6">
                                        <span class="required">Driver</span>
                                    </label>
                                    <div class="col-lg-3 fv-row">
                                        <select name="" aria-label="Select a Country" data-control="select2"
                                            data-placeholder="Select a country..."
                                            class="form-select form-select-solid form-select-lg fw-bold">
                                            <option value="">Select a Country...</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>
                                    <label class="col-lg-2 col-form-label fw-bold fs-6">
                                        <span class="required">Perawat Pendamping</span>
                                    </label>
                                    <div class="col-lg fv-row">
                                        <select name="" aria-label="Select a Country" data-control="select2"
                                            data-placeholder="Select a country..."
                                            class="form-select form-select-solid form-select-lg fw-bold">
                                            <option value="">Select a Country...</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label class="col-lg-2 col-form-label fw-bold fs-6">
                                        <span class="required">Pilih Ambulan</span>
                                    </label>
                                    <div class="col-lg-5 fv-row">
                                        <select name="jenisambulan_id" id="ambulan-dropdown" data-control="select2"
                                            data-placeholder="Pilih ambulan"
                                            class="form-select form-select-solid form-select-lg fw-bold">
                                            <option value=""></option>
                                            @foreach ($JenisAmbulan as $p)
                                                <option value="{{ $p->id }}">{{ $p->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label class="col-lg-2 col-form-label fw-bold fs-6">
                                        <span class="required">Pilih Tujuan</span>
                                    </label>
                                    <div class="col-lg fv-row">
                                        <select name="jenistujuan_id" id="tujuan-dropdown" data-control="select2" 
                                            class="form-select form-select-solid form-select-lg fw-bold">
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label class="col-lg-2 col-form-label fw-bold fs-6">
                                        <span class="required">BBM</span>
                                    </label>
                                    <div class="col-lg-3 fv-row">
                                        <input type="text" name="bbm" id="bbm" onkeyup="sum();"
                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                            placeholder="First name"  />
                                    </div>
                                    <div class="col-lg">
                                        <div class="row">
                                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                                <span class="required">Penyebrangan</span>
                                            </label>
                                            <div class="col-lg fv-row">
                                                <input type="text" name="penyebrangan" id="penyebrangan"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Last name"  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label class="col-lg-2 col-form-label fw-bold fs-6">
                                        <span class="required">Uang Makan</span>
                                    </label>
                                    <div class="col-lg-3 fv-row">
                                        <input type="text" name="uangmakan" id="uangmakan"
                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                            placeholder="First name" />
                                    </div>
                                    <div class="col-lg">
                                        <div class="row">
                                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                                <span class="required">Pembayaran Pasien</span>
                                            </label>
                                            <div class="col-lg fv-row">
                                                <input type="text" name="lname"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Last name" value="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label class="col-lg-2 col-form-label fw-bold fs-6">
                                        <span class="required">Penanggung Jawab</span>
                                    </label>
                                    <div class="col-lg-3 fv-row">
                                        <input type="text" name="fname"
                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                            placeholder="First name" value="" />
                                    </div>
                                    <div class="col-lg">
                                        <div class="row">
                                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                                <span class="required">Total Terima Pasien</span>
                                            </label>
                                            <div class="col-lg fv-row">
                                                <input type="text" name="lname"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Last name" value="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <button type="reset"
                                    class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                <button type="submit" class="btn btn-primary"
                                    id="kt_account_profile_details_submit">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#ambulan-dropdown').on('change', function() {
                    var jenisambulan_id = this.value;
                    $("#tujuan-dropdown").html('');
                    $.ajax({
                        url: "{{ url('get-tujuan-by-ambulan') }}",
                        type: "post",
                        data: {
                            jenisambulan_id: jenisambulan_id,
                            _token: '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(result) {
                            let eR = result.jenistujuan;
                            $.each(eR, function(key, value) {
                                $("#tujuan-dropdown").append(`<option value="${value.id}" 
                                value-harga="${value.harga}"  
                                value-bbm="${value.bbm}" 
                                value-uangmakan="${value.uangmakan}"
                                value-penyebrangan="${value.penyebrangan}">
                                ${value.name}</option>`);
                            });
                            $('#harga').val((eR)[0].harga);
                            $("#tujuan-dropdown").change(function() {
                                var harga = $('option:selected', this).attr('value-harga');
                                $('#harga').val(harga);
                            });
                            $('#bbm').val((eR)[0].bbm);
                            $("#tujuan-dropdown").change(function() {
                                var bbm = $('option:selected', this).attr('value-bbm');
                                $('#bbm').val(bbm);
                            });
                            
                            $('#uangmakan').val((eR)[0].uangmakan);
                            $("#tujuan-dropdown").change(function() {
                                var uangmakan = $('option:selected', this).attr('value-uangmakan');
                                $('#uangmakan').val(uangmakan);
                            });
    
                            $('#penyebrangan').val((eR)[0].penyebrangan);
                            $("#tujuan-dropdown").change(function() {
                                var penyebrangan = $('option:selected', this).attr('value-penyebrangan');
                                $('#penyebrangan').val(penyebrangan);
                            });
                        }
                    });
                });
            });
            
        </script>
        <script>
            function sum() {
                var bbm = document.getElementById('bbm').value;
                var uangmakan = document.getElementById('uangmakan').value;
                var harga = document.getElementById('harga').value;
                var penyebrangan = document.getElementById('penyebrangan').value;
                var result = parseInt(harga) - (parseInt(bbm) + parseInt(uangmakan) + parseInt (penyebrangan));
                if (!isNaN(result)){
                    document.getElementById('total_terima').value=result;
                }
            }
        </script>
    @endsection

  