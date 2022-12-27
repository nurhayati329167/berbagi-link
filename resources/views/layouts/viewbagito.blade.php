<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    <i class="bi bi-link-45deg"></i>
                    Bagi To
                </h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item">
                        Analisis
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="m-content m-content-bagi-to">
        <div class="row mx-md-0">
            <div class="col-md-3 pl-md-0 col-create-link">
                <div class="link-item-admin-container link-bagi-to-item-admin-new" style="background-color : #ffffff;">
                    <div class="link-main-item">
                        <div class="link-left-item">
                            <i class="bi bi-plus-lg"></i>
                        </div>
                        <div class="link-center-item">
                            <div class="text-container">
                                <div class="lbl-link" style="color : #46C4BF">
                                    Buat Link Baru
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="link-menu-new">
                        <div class="link-menu-items">
                            <form class="m-form" action="{{ url('buat-bagi-to')}}" method="POST" id="create-link"
                                enctype="multipart/form-data">
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                {{ csrf_field() }}
                                <div class="menu-items tab-content mt-3 mb-3">
                                    <div class="form-group m-form__group pb-2">
                                        <label class="form-control-label" for="create-title">
                                            Judul
                                        </label>
                                        <input type="text" class="form-control m-input required" id="title" value=""
                                            placeholder="Judul" name="judul_to">
                                    </div>
                                    <div class="form-group m-form__group pt-0 pb-2">
                                        <label class="form-control-label" for="create-link">
                                            Link
                                        </label>
                                        <input type="text" class="form-control m-input required" id="link2" value=""
                                            placeholder="https://" name="link_to">
                                    </div>
                                    <div class="">
                                        <label class="warning-link">
                                            Masukan Link yang terdaftar
                                        </label>
                                    </div>

                                    <div class="form-group m-form__group pt-0 pb-2">

                                        <label class="form-control-label" for="create-generate_link">
                                            Generate link
                                        </label>
                                        <input type="text" class="form-control m-input required" id="generate_link"
                                            value="Https://Bagi.to/" name="generate" readonly="">

                                    </div>
                                </div>
                                <div class="row py-4" style="border-top: 2px dashed #46C4BF;">
                                    <div class="col-6 text-left">
                                        <button type="button" class="btn btn-outline-warning m-btn--pill btn-cancel">
                                            Batalkan
                                        </button>
                                    </div>
                                    <div class="col-6 text-right">
                                        <button type="submit" class="btn btn-outline-success m-btn--pill">
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-list-link mt-4 mt-md-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="list-link-container">
                            <div class="list-link-content" style="display: block;">
                                <div class="list-link-header">
                                    <div class="row mx-0">
                                        <div class="col-5 px-0">
                                            <div class="btn-select-all default_pointer_cs delete_all" type="button"
                                                id="master">
                                                Pilih Semua
                                            </div>
                                            <div class="btn-open-search-form">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsearch"
                                                    style="color : #46C4BF"><i class="bi bi-search"></i></a>

                                            </div>
                                        </div>
                                        <div class="col-7 px-0 text-right">
                                            <div class="group-btn-bagi-to">
                                                <div class="btn-view-analytic default_pointer_cs">
                                                    Lihat Analisis Link
                                                </div>
                                                <div class="btn-delete-link default_pointer_cs delete_all"
                                                    data-url="{{ url('bagito_delete') }}" type="button">
                                                    <i class="bi bi-trash3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 search-form-container" style="display: none;" id="collapsearch"
                                        class="panel-collapse collapse in">
                                        <form action="{{ url('bagito/filter')}}" method="get">
                                            <!-- <div class="col-md- search-form-group">
                                                <input id="filter_name" type="text" name="keyword" class="form-control"
                                                    placeholder="Nama Link..." value="">
                                            </div> -->
                                            <div class="col-md-4 search-form-group">
                                                <input type="date" id="filter_date" class="form-control datepicker" name="dari"
                                                    placeholder="Tanggal Dibuat..." value="{{ date('Y-m-d')}}">
                                            </div>
                                            <div class="col-md-4 search-form-group">
                                                <input type="date" id="filter_date" class="form-control datepicker" name="sampai"
                                                    placeholder="Tanggal Dibuat..." value="{{ date('Y-m-d')}}">
                                            </div>
                                            <div class="col-md-4 search-form-group">
                                                <button type="button" class="btn btn-brand btn-search"
                                                    id="btn-search">Cari</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="list-link-body default_cursor_cs">
                                    <div class="list-link-body-bg default_cursor_cs">
                                        <div class="list-link default_cursor_cs" id="list-link">
                                            <form action="{{ url('bagito_delete') }}" method="post">

                                                @foreach ($links as $link)
                                                <div class="link-bagi-to-item-admin-edit"
                                                    id="link-bagi-to-item-admin-edit-23579" data-id="23579"
                                                    style="background-color : #ffffff;">
                                                    <div class="link-main-item">
                                                        <div class="link-left-item">
                                                            <div class="checkbox-bagi-to">
                                                                <label>
                                                                    <input type="checkbox" class="sub_chk"
                                                                        name="ids[{{$link->id}}]" value="{{$link->id}}">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="link-center-item">
                                                            <div class="text-container">
                                                                <div class="lbl-link default_pointer_cs"
                                                                    style="color : #46C4BF">
                                                                    <div class="form-link-value">
                                                                        <input class="link-value" type="text"
                                                                            value="{{$link->link_to}}" id="copy-to"
                                                                            readonly="">
                                                                        <!-- <input value="" class="link-value-copied"
                                                                            type="hidden"> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="link-right-item default_pointer_cs">
                                                            <div class="menu-link-item">
                                                                <div class="item-menu-link nav-copy">
                                                                    <button class="btn btn-xs" onclick="copyTo()">
                                                                        Salin
                                                                    </button>
                                                                </div>
                                                                <div class="item-menu-link">
                                                                    <button class="btn btn-xs" type="button" id="share">
                                                                        Bagikan
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 default_cursor_cs">
                                                        <span class="link-created_at default_cursor_cs">
                                                            {{ showDateTime($link->created_at, 'l, d F Y')}}
                                                        </span>
                                                    </div>
                                                </div>
                                            </form>
                                            @endforeach

                                            <template id="my-template">
                                                <swal-title>
                                                    Share link
                                                </swal-title>
                                                <swal-body color="">abc</swal-body>
                                                <swal-button type="cancel">
                                                    Cancel
                                                </swal-button>
                                            </template>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-link-empty" style="display: none;">
                                <div class="list-link-empty-bg">
                                    <h1 class="lbl-list-empty">
                                        <b><u>Ups,</u></b> <br> Data Link Kalian Masih Kosong
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-md-0 mt-4 mt-md-0">
                        <div class="analytic-link-container" style="">
                            <div class="analytic-link-content" style="display: block;">
                                <div class="analytic-link-header">
                                    <div class="analytic-link-title">
                                        Analisis Link
                                    </div>
                                </div>
                                <div class="analytic-link-body">
                                    <div class="analytic-link-filter">
                                        <div class="row mx-md-0">
                                            <div class="col-md-6 px-md-0">
                                                <div class="row mx-0">
                                                    <div class="col-md-6 pl-md-0 pr-md-1">
                                                        <div class="form-group m-form__group">
                                                            <label class="form-control-label" for="date_start">
                                                                Dari
                                                            </label>
                                                            <input type="date"
                                                                class="form-control m-input required datetimepicker-custom"
                                                                id="date_start" value="" placeholder="01-01-2019"
                                                                name="date_start">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pr-md-0 pl-md-1">
                                                        <div class="form-group m-form__group">
                                                            <label class="form-control-label" for="date_end">
                                                                Sampai
                                                            </label>
                                                            <input type="date"
                                                                class="form-control m-input required datetimepicker-custom"
                                                                id="date_end" value="31-10-2022"
                                                                placeholder="31-12-2019" name="date_end">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-md-1 pr-md-0">
                                                <div class="row mx-0">
                                                    <div class="col-md-6 pl-md-1 pr-md-1">
                                                        <div class="form-group m-form__group">
                                                            <div class="checkbox-filter-bagi-to mt-md-3 pt-md-1">
                                                                <label class="m-checkbox">
                                                                    <input type="radio" value="lowest"
                                                                        name="sort_by">Terendah
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="checkbox-filter-bagi-to">
                                                                <label class="m-checkbox">
                                                                    <input type="radio" value="highest" name="sort_by"
                                                                        checked="">Tertinggi
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 px-md-0">
                                                        <button type="button" class="btn btn-outline-info w-100"
                                                            id="btn-filter">
                                                            Filter
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="analytic-link-list-container">
                                        <div class="analytic-link-list-bg">
                                            <div class="analytic-link-list" id="analytic-link-list"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="analytic-link-footer">
                                    <div class="row mx-0">
                                        <div class="col-md-5 order-12 order-md-1">
                                            <div class="btn-info-chart">
                                                Info Link Grafik
                                            </div>
                                        </div>
                                        <div class="col-8 col-md-5 text-md-right order-md-2">
                                            <div class="total-link-lbl">
                                                Total Klik Link
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2 order-md-3">
                                            <div class="total-click">

                                                <h1 class="mb-0 text-right w-100" id="total-click"></h1>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="analytic-link-empty" style="display: none;">
                                <div class="analytic-link-empty-bg">
                                    <h1 class="lbl-analytic-empty">
                                        <b><u>Fitur</u></b> <br> Analisis Link Kalian Belum di Aktifkan
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row mx-0 row-chart-link">
            <div class="col-md-12 px-md-0">
                <div class="chart-link-container">
                    <div class="chart-link-content" id="click-chart">
                        <div class="chart-link-header">
                            <h1 class="chart-link-title text-center">
                                Grafik Link
                            </h1>
                        </div>
                        <div class="chart-link-body">
                            <div class="chart-link-bg">
                                <div id="chart-link-data" style="min-width: 100%;" data-highcharts-chart="0">
                                    <div id="highcharts-rf8xipr-0" dir="ltr" class="highcharts-container "
                                        style="position: relative; overflow: hidden; width: 1177px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        <svg version="1.1" class="highcharts-root"
                                            style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                                            xmlns="http://www.w3.org/2000/svg" width="1177" height="400"
                                            viewBox="0 0 1177 400">
                                            <desc>Created with Highcharts 6.1.0</desc>
                                            <defs>
                                                <clipPath id="highcharts-rf8xipr-1">
                                                    <rect x="0" y="0" width="1128" height="351" fill="none">
                                                    </rect>
                                                </clipPath>
                                            </defs>
                                            <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1177"
                                                height="400" rx="0" ry="0"></rect>
                                            <rect fill="none" class="highcharts-plot-background" x="39" y="10"
                                                width="1128" height="351"></rect>
                                            <g class="highcharts-grid highcharts-xaxis-grid "></g>
                                            <g class="highcharts-grid highcharts-yaxis-grid "></g>
                                            <rect fill="none" class="highcharts-plot-border" x="39" y="10" width="1128"
                                                height="351"></rect>
                                            <g class="highcharts-axis highcharts-xaxis "><text x="603"
                                                    text-anchor="middle" transform="translate(0,0)"
                                                    class="highcharts-axis-title" style="color:#666666;fill:#666666;"
                                                    y="378">
                                                    <tspan>Tanggal</tspan>
                                                </text>
                                                <path fill="none" class="highcharts-axis-line" stroke="#ccd6eb"
                                                    stroke-width="1" d="M 39 361.5 L 1167 361.5"></path>
                                            </g>
                                            <g class="highcharts-axis highcharts-yaxis "><text x="26.333332061767578"
                                                    text-anchor="middle"
                                                    transform="translate(0,0) rotate(270 26.333332061767578 185.5)"
                                                    class="highcharts-axis-title" style="color:#666666;fill:#666666;"
                                                    y="185.5">
                                                    <tspan>Total</tspan>
                                                </text>
                                                <path fill="none" class="highcharts-axis-line" d="M 39 10 L 39 361">
                                                </path>
                                            </g>
                                            <g class="highcharts-series-group">
                                                <g class="highcharts-series highcharts-series-0 highcharts-line-series highcharts-color-0 "
                                                    transform="translate(39,10) scale(1 1)"
                                                    clip-path="url(#highcharts-rf8xipr-1)"></g>
                                                <g class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-color-0 "
                                                    transform="translate(39,10) scale(1 1)"></g>
                                            </g><text x="589" text-anchor="middle" class="highcharts-title"
                                                style="color:#333333;font-size:18px;fill:#333333;" y="24"></text><text
                                                x="589" text-anchor="middle" class="highcharts-subtitle"
                                                style="color:#666666;fill:#666666;" y="24"></text>
                                            <g class="highcharts-data-labels highcharts-series-0 highcharts-line-series highcharts-color-0 "
                                                transform="translate(39,10) scale(1 1)" opacity="1"
                                                visibility="visible"></g>
                                            <g class="highcharts-axis-labels highcharts-xaxis-labels "></g>
                                            <g class="highcharts-axis-labels highcharts-yaxis-labels "></g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>