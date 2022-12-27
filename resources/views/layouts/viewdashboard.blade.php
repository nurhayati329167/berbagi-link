<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-subheader">
        <div class="d-block d-md-flex align-items-center">
            <div class="">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    <div class="header-for-username">Hai, {{ Auth::user()->name }}</div>
                    <div class="subheader-for-username">Bagaimana kabarmu hari ini?</div>
                </h3> 
            </div>
            <div class="link-container-user mr-auto mt-4 mb-3 mt-md-0">
                <a href="#">
                    <input style="font-weight:500" id="link-web" value="https://berbagibahagia.org/link/{{ Auth::user()->username}}" readonly="">
                </a>
                <button class="btn" onclick="copyMyLink()" style="top: 0px;">
                    <i class="bi bi-clipboard2"></i>
                </button>
            </div>
            <div class="filter-date-container">
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="m-content pt-4">
        <div class="m-portlet m-portlet--mobile m-portlet-" style="background: transparent;box-shadow: none;">
            <div class="row">
                <div class="col-md-8 pr-md-0 dashboard2-col-md-8">
                    <div class="row mx-md-0 list-analysis-dashboard">
                    </div>
                    <div class="row mx-md-0 list-table-dashboard mt-2 mt-md-0">
                        <div class="col-md-12 pl-md-0 item-table-dashboard" id="item-table-dashboard-user-activity">
                            <div class="bg-white table-dashboard-container">
                                <div class="table-dashboard-header">
                                    <div class="table-dashboard-item">
                                        <div class="row mx-0">
                                            <div class="col-md-12 table-dashboard-col">
                                                <div class="table-dashboard-left-container">
                                                    <div class="table-dashboard-left">
                                                        <div class="table-dashboard-image-container">
                                                            <img class="table-dashboard-image"
                                                                src="https://berbagi.link/images/dashboard/layer2.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="table-dashboard-txt-container">
                                                            Aktifitas User
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table-dashboard-more-container">
                                                    <a class="btn btn-warning table-dashboard-more-btn"
                                                        href="#">
                                                        Selengkapnya &gt;
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-dashboard-body">
                                    <div class="table-body-product_rating-empty-container">
                                        <div class="table-body-product_rating-empty"><i class="la la-file"></i>
                                            <div class="table-body-product_rating-empty-lbl">Tidak Ada Data
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-md-0 list-profile-berbagilink mt-2">
                        <div class="col-md-6 pl-md-0 item-profile-berbagilink" id="item-profile-berbagilink-link">
                            <div class="bg-white item-profile-berbagilink-container px-2 py-4">
                                <div class="row mx-0">
                                    <div class="col-md-12">
                                        <div class="item-profile-berbagilink-my-link">
                                            <div class="item-profile-berbagilink-my-link-container-user my-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-0 item-profile-berbagilink" id="item-profile-berbagilink-preview">
                            <div class="item-profile-berbagilink-container">
                                <div class="row mx-0 pt-3 h-100 h-auto-custom-mobile">
                                    <div class="col-md-5 px-md-0 item-profile-berbagilink-preview-bg-supercontainer">
                                        <div class="item-profile-berbagilink-preview-bg-container">
                                            <div class="container-preview">
                                                <div class="profile-preview" style="height: 100%;">
                                                    <div class="" style="zoom: 1;">


                                                        <div id="berbagi-link-loader-container"
                                                            class="loader-container mobile-view" style="">
                                                            <div class="loader"></div>
                                                        </div>
                                                        <div class="berbagi-link-super-container berbagi-link-main tab-information  berbagi-link-theme-1"
                                                            id="mobile-view" style="position : absolute">
                                                            <section class="berbagi-link-main-container"
                                                                style="margin-top : 0px">
                                                                <div class="berbagi-link-container">
                                                                    <div
                                                                        class="tab-information-container item-tab-container">
                                                                        <div class="links-guest-container">
                                                                            <div class="link-item-guest-container  round-square group-link-item link-"
                                                                                style="" data-id="14693">
                                                                                <div class="link-left-item" style="">
                                                                                </div>
                                                                                <div class="link-center-item ">
                                                                                    <div class="text-container">

                                                                                    </div>
                                                                                </div>
                                                                                <div class="link-container-group"
                                                                                    style="">
                                                                                    <div class="link-item-guest-container  round-square link "
                                                                                        style="" data-id="12850">
                                                                                        <a href=""
                                                                                            class="link-main-item"
                                                                                            target="_blank"
                                                                                            title="Whatsapp">
                                                                                            <div class="link-left-item"
                                                                                                style="">
                                                                                                <div class="icon-item"
                                                                                                    style="background-color: #1BD741;-webkit-mask: url(https://berbagi.link/storage/icons/whatsapp_3.svg) no-repeat center;mask: url(https://berbagi.link/storage/icons/whatsapp_3.svg) no-repeat center;">
                                                                                                </div>
                                                                                                <img class="link-thumbnail"
                                                                                                    src="https://berbagi.link/"
                                                                                                    onerror="this.style.display='none'"
                                                                                                    style="display: none;">
                                                                                            </div>
                                                                                            <div
                                                                                                class="link-center-item ">
                                                                                                <div
                                                                                                    class="text-container">
                                                                                                    <div class="lbl-link"
                                                                                                        style="color: #1BD741;">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-ibadah-container item-tab-container"
                                                                        style="position: relative;">
                                                                        <div id="ibadah-app">
                                                                            <div
                                                                                class="tw-max-w-2xl tw-mx-auto tw-font-merriweather ">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>

                                                        </div>
                                                        <div id="berbagi-link-location-container"
                                                            class="berbagi-link-super-container tab-information mobile-view">
                                                            <div class="modal-location-super-container">
                                                                <div class="modal-location-container">
                                                                    <div class="text-center">

                                                                    </div>

                                                                    <div class="text-center mt-4">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-categories-super-container mobile-view"
                                                            style="display: none;" id="modal-product-categories"></div>
                                                        <div class="modal-categories-super-container mobile-view"
                                                            style="display: none;" id="modal-event-categories">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="item-profile-berbagilink-preview-text-group">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-md-0 mt-4 mt-md-0 dashboard2-col-md-4">
                    <div class="bg-white item-add-new-link-container">
                        <div class="row mx-0">
                            <div class="col-md-12">
                                <div class="item-add-new-link-title">
                                    Tambah link baru
                                </div>
                                <div class="item-add-new-link-content-container">
                                    <div class="row">
                                        <div class="col-md-8 pr-md-1">
                                            <div class="item-add-new-link-content-input-container">
                                                <input class="item-add-new-link-content-input" type="text"
                                                    placeholder="Masukan link disini">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-md-3 mt-3 mt-md-0">
                                            <div class="item-add-new-link-content-btn-container">
                                                <a class="item-add-new-link-content-btn btn btn-success"
                                                    href="{{ url('/editprofil')}}">
                                                    <i class="bi bi-plus-lg"></i> Add Link
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white item-add-new-shorten-link-container">
                        <div class="row mx-0">
                            <div class="col-md-12">
                                <div class="item-add-new-shorten-link-title">
                                    Persingkat link
                                </div>
                                <div class="item-add-new-shorten-link-content-container">
                                    <div class="row">
                                        <div class="col-md-8 pr-md-1">
                                            <div class="item-add-new-shorten-link-content-input-container">
                                                <input class="item-add-new-shorten-link-content-input" type="text"
                                                    placeholder="Masukan link disini">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-md-3 mt-3 mt-md-0">
                                            <div class="item-add-new-shorten-link-content-btn-container">
                                                <a class="item-add-new-shorten-link-content-btn btn btn-warning"
                                                    href="{{ url('/bagito')}}">
                                                    <i class="bi bi-hash"></i> Shorten
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white item-add-new-article-container">
                        <a href="{{ url('editprofil')}}" class="item-add-new-article-link">
                            <div class="row mx-0 item-add-new-article-row">
                                <div class="col-2 pr-0 item-add-new-article-col">
                                    <img class="item-add-new-article-img"
                                        src="https://berbagi.link/images/dashboard/application.svg" alt="">
                                </div>
                                <div class="col-8 pr-0 item-add-new-article-col">
                                    <div class="item-add-new-article-txt">
                                        <div class="item-add-new-article-title">
                                            Buat Artikel Baru
                                        </div>
                                        <div class="item-add-new-article-desc">
                                            Buat artikel agar para pengguna dapat mendapatkan info terbaru dari
                                            produk kamu!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 item-add-new-article-col">
                                    <i class="la la-angle-right icon-la-angle-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>