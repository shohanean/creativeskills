@extends('layouts.dashboard')

@section('toolbar')
<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Home
            <!--begin::Separator-->
            <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
            <!--end::Separator-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Home</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
            <!--end::Title-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <!--begin::Filter menu-->
            <div class="m-0">
                <!--begin::Menu toggle-->
                <a href="#" class="btn btn-sm btn-flex btn-info btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->Filter</a>
                <!--end::Menu toggle-->
                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6244763d93048">
                    <!--begin::Header-->
                    <div class="px-7 py-5">
                        <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Menu separator-->
                    <div class="separator border-gray-200"></div>
                    <!--end::Menu separator-->
                    <!--begin::Form-->
                    <div class="px-7 py-5">
                        <form action="{{ route('home') }}" method="GET">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Select Course:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select name="course_id" class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6244763d93048" data-allow-clear="true">
                                        <option value="">-Select One Course-</option>
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Month:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <input class="form-control" type="month">
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('home') }}" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</a>
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </form>
                    </div>
                    <!--end::Form-->
                </div>
                <!--end::Menu 1-->
            </div>
            <!--end::Filter menu-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
@endsection

@section('content')
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
    <!--begin::Col-->
    <div class="col-xl-3">
        <!--begin::Card widget 3-->
        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-70" style="background-color: #7239EA;background-image:url({{ asset('dashboard_assets/media/svg/shapes/wave-bg-purple.svg') }})">
            <!--begin::Header-->
            <div class="card-header pt-5 mb-3">
                <!--begin::Icon-->
                <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
                    <i class="fas fa-award text-white fa-2x"></i>
                </div>
                <!--end::Icon-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex align-items-end mb-3">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <span class="fs-4hx text-white fw-bold me-6">{{ $courses->count() }}</span>
                    <div class="fw-bold fs-6 text-white">
                        <span class="d-block">Total</span>
                        <span class="">Courses</span>
                    </div>
                </div>
                <!--end::Info-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card widget 3-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-3">
        <!--begin::Card widget 3-->
        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-70" style="background-color: #7239EA;background-image:url({{ asset('dashboard_assets/media/svg/shapes/wave-bg-purple.svg') }})">
            <!--begin::Header-->
            <div class="card-header pt-5 mb-3">
                <!--begin::Icon-->
                <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
                    <i class="fas fa-user-graduate text-white fa-2x"></i>
                </div>
                <!--end::Icon-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex align-items-end mb-3">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <span class="fs-4hx text-white fw-bold me-6">{{ $students->count() }}</span>
                    <div class="fw-bold fs-6 text-white">
                        <span class="d-block">Admitted</span>
                        <span class="">Students</span>
                    </div>
                </div>
                <!--end::Info-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card widget 3-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-3">
        <!--begin::Card widget 3-->
        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-70" style="background-color: #7239EA;background-image:url({{ asset('dashboard_assets/media/svg/shapes/wave-bg-purple.svg') }})">
            <!--begin::Header-->
            <div class="card-header pt-5 mb-3">
                <!--begin::Icon-->
                <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
                    <i class="fa fa-user-check text-white fa-2x"></i>
                </div>
                <!--end::Icon-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex align-items-end mb-3">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <span class="fs-4hx text-white fw-bold me-6">{{ $users->whereNotNull('email_verified_at')->count() }}</span>
                    <div class="fw-bold fs-6 text-white">
                        <span class="d-block">Verified</span>
                        <span class="">Users</span>
                    </div>
                </div>
                <!--end::Info-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card widget 3-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-3">
        <!--begin::Card widget 3-->
        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-70" style="background-color: #7239EA;background-image:url({{ asset('dashboard_assets/media/svg/shapes/wave-bg-purple.svg') }})">
            <!--begin::Header-->
            <div class="card-header pt-5 mb-3">
                <!--begin::Icon-->
                <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
                    <i class="fa fa-users text-white fa-2x"></i>
                </div>
                <!--end::Icon-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex align-items-end mb-3">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <span class="fs-4hx text-white fw-bold me-6">{{ $users->count() }}</span>
                    <div class="fw-bold fs-6 text-white">
                        <span class="d-block">Total</span>
                        <span class="">Users</span>
                    </div>
                </div>
                <!--end::Info-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card widget 3-->
    </div>
    <!--end::Col-->
</div>
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body text-center bg-info">
                <h2>All Time & All Course</h2>
            </div>
        </div>
    </div>
</div>
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
    <!--begin::Col-->
    <div class="col-xl-3">
        <!--begin::Card widget 3-->
        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-70" style="background-color: #7239EA;background-image:url({{ asset('dashboard_assets/media/svg/shapes/wave-bg-purple.svg') }})">
            <!--begin::Header-->
            <div class="card-header pt-5 mb-3">
                <!--begin::Icon-->
                <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
                    <i class="far fa-money-bill-alt text-white fa-2x"></i>
                </div>
                <!--end::Icon-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex align-items-end mb-3">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <span class="fs-2hx text-white fw-bold me-6">{{ $students->sum('course_fee') }}</span>
                    <div class="fw-bold fs-6 text-white">
                        <span class="d-block">Total</span>
                        <span class="">Income</span>
                    </div>
                </div>
                <!--end::Info-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card widget 3-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-3">
        <!--begin::Card widget 3-->
        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-70" style="background-color: #7239EA;background-image:url({{ asset('dashboard_assets/media/svg/shapes/wave-bg-purple.svg') }})">
            <!--begin::Header-->
            <div class="card-header pt-5 mb-3">
                <!--begin::Icon-->
                <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
                    <i class="fa fa-percentage text-white fa-2x"></i>
                </div>
                <!--end::Icon-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex align-items-end mb-3">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <span class="fs-2hx text-white fw-bold me-6">{{ $students->sum('vat') }}</span>
                    <div class="fw-bold fs-6 text-white">
                        <span class="d-block">Total</span>
                        <span class="">Vat</span>
                    </div>
                </div>
                <!--end::Info-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card widget 3-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-3">
        <!--begin::Card widget 3-->
        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-70" style="background-color: #7239EA;background-image:url({{ asset('dashboard_assets/media/svg/shapes/wave-bg-purple.svg') }})">
            <!--begin::Header-->
            <div class="card-header pt-5 mb-3">
                <!--begin::Icon-->
                <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
                    <i class="fas fa-money-bill-wave text-white fa-2x"></i>
                </div>
                <!--end::Icon-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex align-items-end mb-3">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <span class="fs-2hx text-white fw-bold me-6">{{ $students->sum('net_amount') }}</span>
                    <div class="fw-bold fs-6 text-white">
                        <span class="d-block">Net</span>
                        <span class="">Amount</span>
                    </div>
                </div>
                <!--end::Info-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card widget 3-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-3">
        <!--begin::Card widget 3-->
        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-70" style="background-color: #7239EA;background-image:url({{ asset('dashboard_assets/media/svg/shapes/wave-bg-purple.svg') }})">
            <!--begin::Header-->
            <div class="card-header pt-5 mb-3">
                <!--begin::Icon-->
                <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
                    <i class="fas fa-money-bill-wave text-white fa-2x"></i>
                </div>
                <!--end::Icon-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex align-items-end mb-3">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <span class="fs-2hx text-white fw-bold me-6">{{ $students->sum('net_amount') }}</span>
                    <div class="fw-bold fs-6 text-white">
                        <span class="d-block">Net</span>
                        <span class="">Amount</span>
                    </div>
                </div>
                <!--end::Info-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card widget 3-->
    </div>
    <!--end::Col-->
</div>
@endsection
