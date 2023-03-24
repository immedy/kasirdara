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
                                value="" placeholder="Search">
                        </div>
                        <div class="d-flex align-items-center">
                            <button type="submit" class="btn btn-primary me-5">Search</button>
                            <a id="kt_horizontal_search_advanced_link" class="btn btn-link" data-bs-toggle="collapse"
                                href="#kt_advanced_search_form">Advanced Search</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center py-1">
                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>
                </div>
            </div>
        </div>
        {{-- Begin Konten --}}

        {{-- End konten --}}
    </div>
    @endsection