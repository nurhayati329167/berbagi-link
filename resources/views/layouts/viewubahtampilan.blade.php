<div class="m-grid__item m-grid__item--fluid m-wrapper wrapper-berbagi-link">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader position-relative">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    <i class="bi bi-plus-lg"></i>
                    Berbagi Link
                </h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item">
                        Ubah Tampilan
                    </li>
                </ul>
            </div>
            <div id="link-web-container">
                <div class="link-container-user" style="margin-top: 0px;">
                    <input id="link-web" value="" readonly="" style="background: #a29e9e80;">
                    <button class="btn" onclick="copyMyLink()">
                        <i class="fa fa-copy"></i>
                    </button>
                </div>
                <a href="https://berbagi.link/admin/berbagi_link/qr_code" class="link-qr-code">
                    Generate QR
                </a>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="m-content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12">
                <div class="row justify-content-md-center">
                    <div class="col-lg-8 m-portlet pt-4"
                        style="box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.3);border-radius: 20px;">
                        <div class="profile-setting mt-5 mx-4 mb-3">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <div class="container-avatar-admin">
                                        <img class="avatar-img-admin"
                                            src="https://berbagi.link/assets/theme/default/img/round-account-button-with-user-inside@2x.png">

                                        <div class="shadow-avatar load-modal"
                                            data-href="https://berbagi.link/admin/berbagi_link/profile/image">
                                            <i class="bi bi-upload"></i>
                                        </div>
                                    </div>
                                    <div style="margin-top:10px;">
                                        <i style="font-size:11px;">**Silahkan unggah gambar berukuran resolusi
                                            1:1 (Maksimum ukuran gambar 1
                                            MB)</i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <form class="m-form" action="" method="" id="updateProfil"
                                        enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        @csrf
                                        <div class="form-group m-form__group " id="username">
                                            <label class="form-control-label" for="username">
                                                Username
                                            </label>
                                            <div class="position-relative">
                                                <input type="text"
                                                    class="form-control m-input required input-username-berbagilink"
                                                    id="" value="{{Auth::user()->username}}" readonly>
                                                <div class="domain-username-berbagilink">berbagi.link/</div>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group " id="update-profile-display_name">
                                            <label class="form-control-label" for="name">
                                                Nama Yang Tampil
                                            </label>
                                            <input type="text" class="form-control m-input required" id="name"
                                                value="{{Auth::user()->name}}">
                                        </div>
                                        <div class="form-group m-form__group " id="update-profile-location">
                                            <label class="form-control-label" for="location">
                                                Lokasi
                                            </label>
                                            <input type="text" class="form-control m-input required" id="lokasi"
                                                value="{{Auth::user()->lokasi}}" placeholder="Lokasi..." readonly>
                                        </div>
                                        <div class="form-group m-form__group " id="update-profile-location_url">
                                            <label class="form-control-label" for="link">
                                                Link Lokasi(Google Map)
                                            </label>
                                            <input type="text" class="form-control m-input required"
                                                value="{{Auth::user()->lokasi_url}}"
                                                placeholder="https://g.page/Amanah-Corp?share" readonly>
                                        </div>
                                        <div class="form-group m-form__group " id="biografi">
                                            <label class="form-control-label" for="biografi">
                                                Biografi
                                            </label>
                                            <textarea type="text" maxlength="160" class="form-control m-input required"
                                                id="" rows="4" value="{{Auth::user()->biografi}}" readonly></textarea>
                                        </div>

                                        <div class="form-group m-form__group position-relative mt-0 pt-0"
                                            id="update-profile-show_ibadah">
                                            <label class="form-control-label" for="show_ibadah">
                                                <div style="font-weight: 600;">Tampilkan Menu Ibadah</div>
                                                <div>(Tema default)</div>
                                            </label>
                                            <label class="switch" style="top: 5px;">
                                                <input type="checkbox" id="show_ibadah" name="show_ibadah" value="1">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <div class="text-right mt-3">
                                            <button type="submit" class="btn btn-success m-btn m-btn--pill"
                                                id="btn_save">
                                                Edit Profil
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="group-link-business-line "></div>
                        </div>
                        <div class="px-3">

                            <div class="row">
                                <div class="col-12 px-0">
                                    <div class="row">
                                        <div class="group-link-business-line "></div>
                                    </div>
                                </div>
                            </div>
                            <div class="group-link-business">
                                <div class="group-link-business-header">
                                    <div class="group-link-business-title">
                                        Tautan
                                    </div>
                                </div>
                            </div>

                            <div class="link-item-admin-container link-item-admin-group-new"
                                style="background-color : #ffffff;">
                                <div class="link-main-item">
                                    <div class="link-left-item">
                                        <i class="fa fa-folder icon-new"></i>
                                    </div>
                                    <div class="link-center-item">
                                        <div class="text-container">
                                            <div class="lbl-link" style="color : #46C4BF">
                                                Buat Grup Link Baru
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse" id="group-link-menu-new">
                                    <div class="link-menu-items">
                                        <ul class="nav" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#"
                                                    data-target="#tab_general_group_new">
                                                    <span>Umum</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#"
                                                    data-target="#tab_thumbnail_group_new">
                                                    <span>Ikon</span>
                                                </a>
                                            </li>
                                            <li class="nav-item d-inline-block">
                                                <a class="nav-link" data-toggle="tab" href="#"
                                                    data-target="#tab_color_group_new">
                                                    <span>Warna Link</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <form class="m-form"
                                            action="https://berbagi.link/admin/berbagi_link/group_link/create"
                                            method="POST" id="form-create-group-link" enctype="multipart/form-data">
                                            <div class="menu-items tab-content mb-4">
                                                <div class="tab-pane active" id="tab_general_group_new" role="tabpanel">
                                                    <div class="form-group m-form__group">
                                                        <label class="form-control-label" for="create-group-link-title">
                                                            Judul
                                                        </label>
                                                        <input type="text" class="form-control m-input required"
                                                            id="create-group-link-title" value="" placeholder="Judul..."
                                                            name="title">
                                                    </div>
                                                    <input type="hidden" name="_token"
                                                        value="XOMV1jhIHHHho4rWXvgoHITKo50tYm29TdHdKBo0">
                                                    <div class="form-group m-form__group">
                                                        <label class="form-control-label" for="create-group-link-links">
                                                            Links
                                                        </label>
                                                        <select
                                                            class="form-control create-group-link-links select2-hidden-accessible"
                                                            id="create-group-link-links" style="width: 100%;" value=""
                                                            name="links[]" multiple=""
                                                            data-select2-id="create-group-link-links" tabindex="-1"
                                                            aria-hidden="true">
                                                        </select><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" data-select2-id="1" style="width: 100%;"><span
                                                                class="selection"><span
                                                                    class="select2-selection select2-selection--multiple"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="-1">
                                                                    <ul class="select2-selection__rendered">
                                                                        <li
                                                                            class="select2-search select2-search--inline">
                                                                            <input class="select2-search__field"
                                                                                type="search" tabindex="-1"
                                                                                autocomplete="off" autocorrect="off"
                                                                                autocapitalize="none" spellcheck="false"
                                                                                role="textbox" aria-autocomplete="list"
                                                                                placeholder="" style="width: 0.75em;">
                                                                        </li>
                                                                    </ul>
                                                                </span></span><span class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" data-select2-id="1" style="width: 100%;"><span
                                                                class="selection"><span
                                                                    class="select2-selection select2-selection--multiple"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="-1">
                                                                    <ul class="select2-selection__rendered">
                                                                        <li
                                                                            class="select2-search select2-search--inline">
                                                                            <input class="select2-search__field"
                                                                                type="search" tabindex="0"
                                                                                autocomplete="off" autocorrect="off"
                                                                                autocapitalize="none" spellcheck="false"
                                                                                role="textbox" aria-autocomplete="list"
                                                                                placeholder="" style="width: 0.75em;">
                                                                        </li>
                                                                    </ul>
                                                                </span></span><span class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span>
                                                    </div>
                                                    <i style="font-size: 11px;">**Tidak semua tema mendukung
                                                        fitur grup link ini.</i>
                                                </div>
                                                <div class="tab-pane" id="tab_thumbnail_group_new" role="tabpanel">
                                                    <div
                                                        class="form-group m-form__group position-relative mt-4 pt-0 pb-2 text-center">
                                                        <label class="form-control-label" for="scedule-70"
                                                            style="color: #747679;">Ganti ikon sesuai keinginan
                                                            anda</label>
                                                    </div>
                                                    <div class="mt-0 pt-0">
                                                        <div class="text-center">
                                                            <div class="container-link-thumbnail">
                                                                <img class="thumbnail-preview"
                                                                    src="https://berbagi.link/images/insert-picture-icon.png">
                                                                <input name="thumbnail" type="hidden" value=""
                                                                    class="thumbnail-input">
                                                                <div class="shadow-avatar load-modal"
                                                                    data-href="https://berbagi.link/admin/berbagi_link/image/link-item-admin-group-new">
                                                                    <i class="fa fa-upload"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-center container-remove-thumbnail"
                                                            style="display:none">
                                                            <input name="thumbnail_remove" type="hidden" value="0"
                                                                class="thumbnail_remove-input">
                                                            <span class="remove-thumbnail">Hapus</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_color_group_new" role="tabpanel">
                                                    <div
                                                        class="form-group m-form__group position-relative mt-4 pt-0 pb-2 text-center">
                                                        <label class="form-control-label" for="scedule-70"
                                                            style="color: #747679;">
                                                            Ubah warna per link, sesuai yang anda inginkan
                                                        </label>
                                                    </div>
                                                    <div class="form-group m-form__group position-relative mt-0 pt-0">
                                                        <label class="form-control-label" for="color-new">
                                                            Ubah Warna
                                                        </label>
                                                        <label class="switch">
                                                            <input type="checkbox" id="color-group-new"
                                                                name="change_color" value="1">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-color-picker collapse">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="custom" class="col-form-label"
                                                                        style="min-height: 57px">
                                                                        Warna Tombol
                                                                    </label>
                                                                    <div class="position-relative custom-container">
                                                                        <input class="form-control color-picker"
                                                                            autocomplete="off" maxlength="7"
                                                                            name="button_color" type="text"
                                                                            value="#000000" style="display: none;">
                                                                        <div class="sp-replacer sp-light">
                                                                            <div class="sp-preview">
                                                                                <div class="sp-preview-inner"
                                                                                    style="background-color: rgb(0, 0, 0);">
                                                                                </div>
                                                                            </div>
                                                                            <div class="sp-dd">▼</div>
                                                                        </div>
                                                                        <div class="sp-replacer sp-light">
                                                                            <div class="sp-preview">
                                                                                <div class="sp-preview-inner"
                                                                                    style="background-color: rgb(0, 0, 0);">
                                                                                </div>
                                                                            </div>
                                                                            <div class="sp-dd">▼</div>
                                                                        </div>

                                                                    </div>
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="custom" class="col-form-label"
                                                                        style="min-height: 57px">
                                                                        Warna Teks Tombol
                                                                    </label>
                                                                    <div class="position-relative custom-container">
                                                                        <input class="form-control color-picker"
                                                                            autocomplete="off" maxlength="7"
                                                                            name="button_text_color" type="text"
                                                                            value="#000000" style="display: none;">
                                                                        <div class="sp-replacer sp-light">
                                                                            <div class="sp-preview">
                                                                                <div class="sp-preview-inner"
                                                                                    style="background-color: rgb(0, 0, 0);">
                                                                                </div>
                                                                            </div>
                                                                            <div class="sp-dd">▼</div>
                                                                        </div>
                                                                        <div class="sp-replacer sp-light">
                                                                            <div class="sp-preview">
                                                                                <div class="sp-preview-inner"
                                                                                    style="background-color: rgb(0, 0, 0);">
                                                                                </div>
                                                                            </div>
                                                                            <div class="sp-dd">▼</div>
                                                                        </div>

                                                                    </div>
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="custom" class="col-form-label"
                                                                        style="min-height: 57px">
                                                                        Warna Garis
                                                                    </label>
                                                                    <div class="position-relative custom-container">
                                                                        <input class="form-control color-picker"
                                                                            autocomplete="off" maxlength="7"
                                                                            name="button_border_color" type="text"
                                                                            value="#000000" style="display: none;">
                                                                        <div class="sp-replacer sp-light">
                                                                            <div class="sp-preview">
                                                                                <div class="sp-preview-inner"
                                                                                    style="background-color: rgb(0, 0, 0);">
                                                                                </div>
                                                                            </div>
                                                                            <div class="sp-dd">▼</div>
                                                                        </div>
                                                                        <div class="sp-replacer sp-light">
                                                                            <div class="sp-preview">
                                                                                <div class="sp-preview-inner"
                                                                                    style="background-color: rgb(0, 0, 0);">
                                                                                </div>
                                                                            </div>
                                                                            <div class="sp-dd">▼</div>
                                                                        </div>

                                                                    </div>
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row py-4" style="border-top: 2px dashed #46C4BF;">
                                                <div class="col-6 text-left">
                                                    <button type="button"
                                                        class="btn btn-outline-warning m-btn--pill btn-cancel">
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
                            <div class="link-item-admin-container header-item-admin-new"
                                style="background-color : #ffffff;">
                                <div class="link-main-item">
                                    <div class="link-left-item">
                                        <i class="fa fa-plus icon-new"></i>
                                    </div>
                                    <div class="link-center-item">
                                        <div class="text-container">
                                            <div class="lbl-link" style="color : #46C4BF">
                                                Buat Judul Baru
                                                <div class="badge badge-info badge-new" style="
                        position: relative;
                        top: -12px;
                        left: 0px;
                        z-index: 10;
                        font-size: 11px;
                        padding: 0.2em 0.4em;
                    ">NEW</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse" id="header-menu-new">
                                    <div class="link-menu-items">
                                        <ul class="nav" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#"
                                                    data-target="#tab_general_header_new">
                                                    <span>Umum</span>
                                                </a>
                                            </li>
                                            <li class="nav-item d-inline-block">
                                                <a class="nav-link" data-toggle="tab" href="#"
                                                    data-target="#tab_color_new">
                                                    <span>Warna Judul</span>
                                                </a>
                                            </li>
                                            <li class="nav-item d-inline-block">
                                                <a class="nav-link" data-toggle="tab" href="#"
                                                    data-target="#tab_align_new">
                                                    <span>Posisi</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <form class="m-form"
                                            action="https://berbagi.link/admin/berbagi_link/header/create" method="POST"
                                            id="form-create-header" enctype="multipart/form-data">
                                            <div class="menu-items tab-content mb-4">
                                                <div class="tab-pane active" id="tab_general_header_new"
                                                    role="tabpanel">
                                                    <div class="form-group m-form__group">
                                                        <label class="form-control-label" for="create-title">
                                                            Judul
                                                        </label>
                                                        <input type="text" class="form-control m-input required"
                                                            id="create-title" value="" placeholder="Judul..."
                                                            name="title">
                                                    </div>
                                                    <div class="form-group m-form__group position-relative">
                                                        <label class="form-control-label" for="create-is_active">
                                                            Tampilkan Judul
                                                        </label>
                                                        <label class="switch" style="top: 17px;">
                                                            <input type="checkbox" id="create-is_active"
                                                                name="is_active" value="1" checked="">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <input type="hidden" name="_token"
                                                        value="XOMV1jhIHHHho4rWXvgoHITKo50tYm29TdHdKBo0">
                                                </div>
                                                <div class="tab-pane" id="tab_color_new" role="tabpanel">
                                                    <div
                                                        class="form-group m-form__group position-relative mt-4 pt-0 pb-2 text-center">
                                                        <label class="form-control-label" for="scedule-70"
                                                            style="color: #747679;">
                                                            Ubah warna per link, sesuai yang anda inginkan
                                                        </label>
                                                    </div>
                                                    <div class="form-group m-form__group position-relative mt-0 pt-0">
                                                        <label class="form-control-label" for="color-new">
                                                            Ubah Warna
                                                        </label>
                                                        <label class="switch">
                                                            <input type="checkbox" id="color-new" name="change_color"
                                                                value="1">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-color-picker collapse">
                                                        <div class="row">
                                                            <div class="col-md-4"></div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="custom" class="col-form-label"
                                                                        style="min-height: 57px">
                                                                        Warna Teks
                                                                    </label>
                                                                    <div class="position-relative custom-container">
                                                                        <input class="form-control color-picker"
                                                                            autocomplete="off" maxlength="7"
                                                                            name="text_color" type="text"
                                                                            value="#000000" style="display: none;">
                                                                        <div class="sp-replacer sp-light">
                                                                            <div class="sp-preview">
                                                                                <div class="sp-preview-inner"
                                                                                    style="background-color: rgb(0, 0, 0);">
                                                                                </div>
                                                                            </div>
                                                                            <div class="sp-dd">▼</div>
                                                                        </div>
                                                                        <div class="sp-replacer sp-light">
                                                                            <div class="sp-preview">
                                                                                <div class="sp-preview-inner"
                                                                                    style="background-color: rgb(0, 0, 0);">
                                                                                </div>
                                                                            </div>
                                                                            <div class="sp-dd">▼</div>
                                                                        </div>

                                                                    </div>
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_align_new" role="tabpanel">
                                                    <div class="form-group m-form__group position-relative mt-0 pt-0">
                                                        <label class="form-control-label" for="color-new">
                                                            Posisi Judul
                                                        </label>
                                                    </div>
                                                    <div class="form-align">
                                                        <div class="row">
                                                            <div class="col-md-4 mb-3 mb-md-0"
                                                                style="display: flex;align-items: center;">
                                                                <label class="m-radio mb-0"> Kiri
                                                                    <input type="radio" value="left" name="text_align">
                                                                    <span><img
                                                                            src="https://berbagi.link/images/marketplace/form/checklist.svg"
                                                                            alt=""></span>
                                                                </label>
                                                                <i style="margin-left: 10px;font-size: 25px;border: 1px solid black;padding: 4px;border-radius: 6px;"
                                                                    class="fas fa-align-left"></i>
                                                            </div>
                                                            <div class="col-md-4 mb-3 mb-md-0"
                                                                style="display: flex;align-items: center;">
                                                                <label class="m-radio mb-0"> Tengah
                                                                    <input type="radio" value="center" name="text_align"
                                                                        checked="">
                                                                    <span><img
                                                                            src="https://berbagi.link/images/marketplace/form/checklist.svg"
                                                                            alt=""></span>
                                                                </label>
                                                                <i style="margin-left: 10px;font-size: 25px;border: 1px solid black;padding: 4px;border-radius: 6px;"
                                                                    class="fas fa-align-center"></i>
                                                            </div>
                                                            <div class="col-md-4 mb-3 mb-md-0"
                                                                style="display: flex;align-items: center;">
                                                                <label class="m-radio mb-0"> Kanan
                                                                    <input type="radio" value="right" name="text_align">
                                                                    <span><img
                                                                            src="https://berbagi.link/images/marketplace/form/checklist.svg"
                                                                            alt=""></span>
                                                                </label>
                                                                <i style="margin-left: 10px;font-size: 25px;border: 1px solid black;padding: 4px;border-radius: 6px;"
                                                                    class="fas fa-align-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row py-4" style="border-top: 2px dashed #46C4BF;">
                                                <div class="col-6 text-left">
                                                    <button type="button"
                                                        class="btn btn-outline-warning m-btn--pill btn-cancel">
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
                            <div class="link-item-admin-container link-item-admin-new"
                                style="background-color : #ffffff;">
                                <div class="link-main-item">
                                    <div class="link-left-item">
                                        <i class="fa fa-plus icon-new"></i>
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
                                        <ul class="nav" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#"
                                                    data-target="#tab_general_new">
                                                    <span>Umum</span>
                                                </a>
                                            </li>
                                            <li class="nav-item position-relative">
                                                <a class="nav-link" data-toggle="tab" href="#"
                                                    data-target="#tab_sublink_new">
                                                    <span>Sublink</span>
                                                    <div class="badge badge-info badge-new" style="
                            position: absolute;
                            top: 2px;
                            left: 31px;
                            z-index: 10;
                            font-size: 8px;
                            padding: 0.2em 0.4em;
                        ">NEW</div>
                                                </a>
                                            </li>
                                            <li class="nav-item d-inline-block">
                                                <a class="nav-link" data-toggle="tab" href="#"
                                                    data-target="#tab_color_new">
                                                    <span>Warna Link</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#"
                                                    data-target="#tab_thumbnail_new">
                                                    <span>Ikon</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#"
                                                    data-target="#tab_scheduling_new">
                                                    <span>Penjadwalan</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#"
                                                    data-target="#tab_animation_new">
                                                    <span>Animasi</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#"
                                                    data-target="#tab_redirect_new">
                                                    <span>Arahkan</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <form class="m-form" action="https://berbagi.link/admin/berbagi_link/create"
                                            method="POST" id="form-create-link" enctype="multipart/form-data">
                                            <div class="menu-items tab-content mb-4">
                                                <div class="tab-pane active" id="tab_general_new" role="tabpanel">
                                                    <div class="form-group m-form__group">
                                                        <label class="form-control-label" for="create-title">
                                                            Judul
                                                        </label>
                                                        <input type="text" class="form-control m-input required"
                                                            id="create-title" value="" placeholder="Judul..."
                                                            name="title">
                                                    </div>
                                                    <div class="form-group m-form__group position-relative">
                                                        <label class="form-control-label" for="create-is_active">
                                                            Tampilkan Link
                                                        </label>
                                                        <label class="switch" style="top: 17px;">
                                                            <input type="checkbox" id="create-is_active"
                                                                name="is_active" value="1" checked="">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <input type="hidden" name="_token"
                                                        value="XOMV1jhIHHHho4rWXvgoHITKo50tYm29TdHdKBo0">
                                                    <div class="form-group m-form__group position-relative">
                                                        <label class="form-control-label" for="create-group_type">
                                                            Tipe
                                                        </label>
                                                        <div class="badge badge-info badge-new" style="
                            position: absolute;
                            top: 7px;
                            left: 20px;
                            z-index: 10;
                            font-size: 8px;
                            padding: 0.2em 0.4em;
                        ">NEW</div>
                                                        <select class="form-control select2-hidden-accessible"
                                                            style="width: 100%;" id="create-group_type" value=""
                                                            name="group_type" data-select2-id="create-group_type"
                                                            tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="3"></option>
                                                            <option value="creative_design"
                                                                data-icon="fas fa-paint-brush">
                                                                CREATIVE &amp; DESIGN
                                                            </option>
                                                            <option value="crowdfunding" data-icon="fa fa-heart">
                                                                CROWDFUNDING
                                                            </option>
                                                            <option value="informasi" data-icon="fa fa-address-card">
                                                                INFORMASI
                                                            </option>
                                                            <option value="marketplace" data-icon="fas fa-shopping-bag">
                                                                MARKETPLACE
                                                            </option>
                                                            <option value="media_sosial" data-icon="fa fa-users">
                                                                MEDIA SOSIAL
                                                            </option>
                                                            <option value="payment" data-icon="fas fa-dollar-sign">
                                                                PAYMENT
                                                            </option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" data-select2-id="2" style="width: 100%;"><span
                                                                class="selection"><span
                                                                    class="select2-selection select2-selection--single"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="-1"
                                                                    aria-labelledby="select2-create-group_type-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-create-group_type-container"
                                                                        role="textbox" aria-readonly="true"><span
                                                                            class="select2-selection__placeholder">SILAHKAN
                                                                            PILIH TIPE</span></span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" data-select2-id="2" style="width: 100%;"><span
                                                                class="selection"><span
                                                                    class="select2-selection select2-selection--single"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="0"
                                                                    aria-labelledby="select2-create-group_type-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-create-group_type-container"
                                                                        role="textbox" aria-readonly="true"><span
                                                                            class="select2-selection__placeholder">SILAHKAN
                                                                            PILIH TIPE</span></span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span>
                                                    </div>
                                                    <div class="form-group m-form__group form-link-set-type position-relative"
                                                        style="display: none;">
                                                        <label class="form-control-label" for="create-type">
                                                            Jenis
                                                        </label>
                                                        <div class="badge badge-info badge-new" style="
                            position: absolute;
                            top: 7px;
                            left: 25px;
                            z-index: 10;
                            font-size: 8px;
                            padding: 0.2em 0.4em;
                        ">NEW</div>
                                                        <select class="form-control select2-hidden-accessible"
                                                            style="width: 100%;" id="create-type" value="" name="type"
                                                            data-select2-id="create-type" tabindex="-1"
                                                            aria-hidden="true">
                                                        </select><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" data-select2-id="3" style="width: 100%;"><span
                                                                class="selection"><span
                                                                    class="select2-selection select2-selection--single"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="-1"
                                                                    aria-labelledby="select2-create-type-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-create-type-container"
                                                                        role="textbox" aria-readonly="true"></span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" data-select2-id="4" style="width: 100%;"><span
                                                                class="selection"><span
                                                                    class="select2-selection select2-selection--single"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="0"
                                                                    aria-labelledby="select2-create-type-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-create-type-container"
                                                                        role="textbox" aria-readonly="true"></span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span>
                                                    </div>
                                                    <div class="form-link-type pt-3" style="display: none;">
                                                        <div class="form-group m-form__group form-link-value">
                                                            <label class="form-control-label lbl-link_value"
                                                                for="create-link_value"></label>
                                                            <div class="create-form-control-link_value-container">

                                                                <input type="text" class="form-control m-input required"
                                                                    id="create-link_value" value="" placeholder=""
                                                                    name="link_value">
                                                            </div>
                                                        </div>
                                                        <div class="form-group m-form__group">
                                                            <label class="form-control-label" for="create-url">
                                                                Generate
                                                            </label>
                                                            <input type="text" class="form-control m-input required"
                                                                id="create-url" value="" placeholder="http://url..."
                                                                name="url" readonly="">
                                                        </div>
                                                        <div class="form-group m-form__group form-chat"
                                                            style="display: none;">
                                                            <label class="form-control-label" for="create-chat">
                                                                Chat Otomatis
                                                            </label>
                                                            <textarea class="form-control m-input" name="chat"
                                                                id="create-chat"
                                                                placeholder="Hallo, dengan Bisatopup Store?"></textarea>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_sublink_new" role="tabpanel">
                                                    <div class="form-group m-form__group">
                                                        <label class="form-control-label" for="create-sublink">
                                                            Sublink
                                                        </label>
                                                        <input type="text" class="form-control m-input"
                                                            id="create-sublink" value="" placeholder="Sublink..."
                                                            name="sublink">
                                                    </div>
                                                    <div class="form-group m-form__group sublink-container">
                                                        <label class="form-control-label">
                                                            Sublink Generate
                                                        </label>
                                                        <input name="sublink_copy" class="form-control m-input"
                                                            value="https://berbagi.link/nurhayati" readonly="">
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_scheduling_new" role="tabpanel">
                                                    <div class="py-3">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <span>Silahkan berlangganan Pro untuk
                                                                    mendapatkan akses ke fitur ini dan banyak
                                                                    lagi!</span>
                                                            </div>
                                                            <div class="col-md-4 text-right">

                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-outline-info m-btn--pill load-modal"
                                                                    data-modal-id="modal-subscription" data-backdrop="1"
                                                                    data-href="https://berbagi.link/admin/berbagi_link/get_modal_upgrade_account">
                                                                    Berlangganan
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_animation_new" role="tabpanel">
                                                    <div class="py-3">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <span>Silahkan berlangganan Pro untuk
                                                                    mendapatkan akses ke fitur ini dan banyak
                                                                    lagi!</span>
                                                            </div>
                                                            <div class="col-md-4 text-right">

                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-outline-info m-btn--pill load-modal"
                                                                    data-modal-id="modal-subscription" data-backdrop="1"
                                                                    data-href="https://berbagi.link/admin/berbagi_link/get_modal_upgrade_account">
                                                                    Berlangganan
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_thumbnail_new" role="tabpanel">
                                                    <div
                                                        class="form-group m-form__group position-relative mt-4 pt-0 pb-2 text-center">
                                                        <label class="form-control-label" for="scedule-70"
                                                            style="color: #747679;">Ganti ikon sesuai keinginan
                                                            anda</label>
                                                    </div>
                                                    <div class="mt-0 pt-0">
                                                        <div class="text-center">
                                                            <div class="container-link-thumbnail">
                                                                <img class="thumbnail-preview"
                                                                    src="https://berbagi.link/images/insert-picture-icon.png">
                                                                <input name="thumbnail" type="hidden" value=""
                                                                    class="thumbnail-input">
                                                                <div class="shadow-avatar load-modal"
                                                                    data-href="https://berbagi.link/admin/berbagi_link/image/link-item-admin-new">
                                                                    <i class="fa fa-upload"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-center container-remove-thumbnail"
                                                            style="display:none">
                                                            <input name="thumbnail_remove" type="hidden" value="0"
                                                                class="thumbnail_remove-input">
                                                            <span class="remove-thumbnail">Hapus</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_redirect_new" role="tabpanel">
                                                    <div class="py-3">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <span>Silahkan berlangganan Pro untuk
                                                                    mendapatkan akses ke fitur ini dan banyak
                                                                    lagi!</span>
                                                            </div>
                                                            <div class="col-md-4 text-right">

                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-outline-info m-btn--pill load-modal"
                                                                    data-modal-id="modal-subscription" data-backdrop="1"
                                                                    data-href="https://berbagi.link/admin/berbagi_link/get_modal_upgrade_account">
                                                                    Berlangganan
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_color_new" role="tabpanel">
                                                    <div
                                                        class="form-group m-form__group position-relative mt-4 pt-0 pb-2 text-center">
                                                        <label class="form-control-label" for="scedule-70"
                                                            style="color: #747679;">
                                                            Ubah warna per link, sesuai yang anda inginkan
                                                        </label>
                                                    </div>
                                                    <div class="form-group m-form__group position-relative mt-0 pt-0">
                                                        <label class="form-control-label" for="color-new">
                                                            Ubah Warna
                                                        </label>
                                                        <label class="switch">
                                                            <input type="checkbox" id="color-new" name="change_color"
                                                                value="1">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-color-picker collapse">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="custom" class="col-form-label"
                                                                        style="min-height: 57px">
                                                                        Warna Tombol
                                                                    </label>
                                                                    <div class="position-relative custom-container">
                                                                        <input class="form-control color-picker"
                                                                            autocomplete="off" maxlength="7"
                                                                            name="button_color" type="text"
                                                                            value="#000000" style="display: none;">
                                                                        <div class="sp-replacer sp-light">
                                                                            <div class="sp-preview">
                                                                                <div class="sp-preview-inner"
                                                                                    style="background-color: rgb(0, 0, 0);">
                                                                                </div>
                                                                            </div>
                                                                            <div class="sp-dd">▼</div>
                                                                        </div>
                                                                        <div class="sp-replacer sp-light">
                                                                            <div class="sp-preview">
                                                                                <div class="sp-preview-inner"
                                                                                    style="background-color: rgb(0, 0, 0);">
                                                                                </div>
                                                                            </div>
                                                                            <div class="sp-dd">▼</div>
                                                                        </div>

                                                                    </div>
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="custom" class="col-form-label"
                                                                        style="min-height: 57px">
                                                                        Warna Teks Tombol
                                                                    </label>
                                                                    <div class="position-relative custom-container">
                                                                        <input class="form-control color-picker"
                                                                            autocomplete="off" maxlength="7"
                                                                            name="button_text_color" type="text"
                                                                            value="#000000" style="display: none;">
                                                                        <div class="sp-replacer sp-light">
                                                                            <div class="sp-preview">
                                                                                <div class="sp-preview-inner"
                                                                                    style="background-color: rgb(0, 0, 0);">
                                                                                </div>
                                                                            </div>
                                                                            <div class="sp-dd">▼</div>
                                                                        </div>
                                                                        <div class="sp-replacer sp-light">
                                                                            <div class="sp-preview">
                                                                                <div class="sp-preview-inner"
                                                                                    style="background-color: rgb(0, 0, 0);">
                                                                                </div>
                                                                            </div>
                                                                            <div class="sp-dd">▼</div>
                                                                        </div>

                                                                    </div>
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="custom" class="col-form-label"
                                                                        style="min-height: 57px">
                                                                        Warna Garis
                                                                    </label>
                                                                    <div class="position-relative custom-container">
                                                                        <input class="form-control color-picker"
                                                                            autocomplete="off" maxlength="7"
                                                                            name="button_border_color" type="text"
                                                                            value="#000000" style="display: none;">
                                                                        <div class="sp-replacer sp-light">
                                                                            <div class="sp-preview">
                                                                                <div class="sp-preview-inner"
                                                                                    style="background-color: rgb(0, 0, 0);">
                                                                                </div>
                                                                            </div>
                                                                            <div class="sp-dd">▼</div>
                                                                        </div>
                                                                        <div class="sp-replacer sp-light">
                                                                            <div class="sp-preview">
                                                                                <div class="sp-preview-inner"
                                                                                    style="background-color: rgb(0, 0, 0);">
                                                                                </div>
                                                                            </div>
                                                                            <div class="sp-dd">▼</div>
                                                                        </div>

                                                                    </div>
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row py-4" style="border-top: 2px dashed #46C4BF;">
                                                <div class="col-6 text-left">
                                                    <button type="button"
                                                        class="btn btn-outline-warning m-btn--pill btn-cancel">
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
                            <div class="link-item-admin-container article-item-admin-new"
                                style="background-color : #ffffff;">
                                <div class="link-main-item">
                                    <div class="link-left-item">
                                        <i class="fa fa-plus icon-new"></i>
                                    </div>
                                    <div class="link-center-item">
                                        <div class="text-container">
                                            <div class="lbl-link" style="color : #46C4BF">
                                                Buat Artikel Baru
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse" id="article-menu-new">
                                    <div class="link-menu-items">
                                        <form class="m-form"
                                            action="https://berbagi.link/admin/berbagi_link/articles/create"
                                            method="POST" id="form-create-article" enctype="multipart/form-data">
                                            <div class="menu-items tab-content mb-4">
                                                <div class="form-group m-form__group">
                                                    <label class="form-control-label" for="create-title-article">
                                                        Judul
                                                    </label>
                                                    <input type="text" class="form-control m-input required"
                                                        id="create-title-article" value="" placeholder="Judul..."
                                                        name="title">
                                                </div>
                                                <input type="hidden" name="_token"
                                                    value="XOMV1jhIHHHho4rWXvgoHITKo50tYm29TdHdKBo0">
                                                <div class="form-group m-form__group position-relative mt-4 pt-0">
                                                    <label class="form-control-label" for="create-status-article">
                                                        Tampilkan Artikel
                                                    </label>
                                                    <label class="switch">
                                                        <input type="checkbox" id="create-status-article"
                                                            name="is_active" value="1" checked="">
                                                        <span class="slider round"></span>
                                                        <input type="hidden" name="status" value="1">
                                                    </label>
                                                </div>
                                                <div class="form-group m-form__group">
                                                    <label class="form-control-label" for="create-url-article">
                                                        URL
                                                    </label>
                                                    <input type="text" class="form-control m-input required"
                                                        id="create-url-article" name="url" value=""
                                                        placeholder="http://url...">
                                                </div>
                                                <div class="form-group m-form__group">
                                                    <label class="form-control-label" for="create-image-article">
                                                        Gambar Artikel
                                                    </label>
                                                    <div class="text-center">
                                                        <div class="container-article-image">
                                                            <img class="image-preview"
                                                                src="https://berbagi.link/images/insert-picture-icon.png">
                                                            <input name="image" type="hidden" value=""
                                                                class="image-input">
                                                            <div class="shadow-avatar load-modal"
                                                                data-href="https://berbagi.link/admin/berbagi_link/articles/image/article-item-admin-new">
                                                                <i class="fa fa-upload"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group">
                                                    <label class="form-control-label" for="create-content-article">
                                                        Kolom Detail
                                                    </label>
                                                    <textarea class="form-control" id="create-content-article"
                                                        name="content" rows="5" placeholder="Konten..."
                                                        style="display: none;"></textarea>
                                                    <div class="note-editor note-frame panel">
                                                        <div class="note-dropzone">
                                                            <div class="note-dropzone-message"></div>
                                                        </div>
                                                        <div class="note-toolbar-wrapper panel-default">
                                                            <div class="note-toolbar panel-heading" role="toolbar">
                                                                <div class="note-btn-group btn-group note-style">
                                                                    <div class="note-btn-group btn-group">
                                                                        <button type="button"
                                                                            class="note-btn btn btn-default btn-sm dropdown-toggle"
                                                                            role="button" tabindex="-1"
                                                                            data-toggle="dropdown" title=""
                                                                            aria-label="Gaya"
                                                                            data-original-title="Gaya"><i
                                                                                class="note-icon-magic"></i>
                                                                            <span
                                                                                class="note-icon-caret"></span></button>
                                                                        <ul class="dropdown-menu dropdown-style"
                                                                            role="list" aria-label="Gaya">
                                                                            <li role="listitem" aria-label="p">
                                                                                <a href="#" data-value="p">
                                                                                    <p>p</p>
                                                                                </a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="blockquote">
                                                                                <a href="#" data-value="blockquote">
                                                                                    <blockquote>Kutipan
                                                                                    </blockquote>
                                                                                </a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="pre"><a
                                                                                    href="#" data-value="pre">
                                                                                    <pre>Kode</pre>
                                                                                </a></li>
                                                                            <li role="listitem" aria-label="h1">
                                                                                <a href="#" data-value="h1">
                                                                                    <h1>Heading 1</h1>
                                                                                </a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="h2">
                                                                                <a href="#" data-value="h2">
                                                                                    <h2>Heading 2</h2>
                                                                                </a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="h3">
                                                                                <a href="#" data-value="h3">
                                                                                    <h3>Heading 3</h3>
                                                                                </a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="h4">
                                                                                <a href="#" data-value="h4">
                                                                                    <h4>Heading 4</h4>
                                                                                </a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="h5">
                                                                                <a href="#" data-value="h5">
                                                                                    <h5>Heading 5</h5>
                                                                                </a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="h6">
                                                                                <a href="#" data-value="h6">
                                                                                    <h6>Heading 6</h6>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="note-btn-group btn-group note-fontsize">
                                                                    <div class="note-btn-group btn-group">
                                                                        <button type="button"
                                                                            class="note-btn btn btn-default btn-sm dropdown-toggle"
                                                                            role="button" tabindex="-1"
                                                                            data-toggle="dropdown" title=""
                                                                            aria-label="Ukuran font"
                                                                            data-original-title="Ukuran font"><span
                                                                                class="note-current-fontsize">16</span>
                                                                            <span
                                                                                class="note-icon-caret"></span></button>
                                                                        <ul class="dropdown-menu note-check dropdown-fontsize"
                                                                            role="list" aria-label="Ukuran font">
                                                                            <li role="listitem" aria-label="8">
                                                                                <a href="#" data-value="8"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    8</a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="9">
                                                                                <a href="#" data-value="9"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    9</a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="10">
                                                                                <a href="#" data-value="10"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    10</a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="11">
                                                                                <a href="#" data-value="11"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    11</a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="12">
                                                                                <a href="#" data-value="12"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    12</a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="14">
                                                                                <a href="#" data-value="14"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    14</a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="18">
                                                                                <a href="#" data-value="18"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    18</a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="24">
                                                                                <a href="#" data-value="24"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    24</a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="36">
                                                                                <a href="#" data-value="36"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    36</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="note-btn-group btn-group note-font">
                                                                    <button type="button"
                                                                        class="note-btn btn btn-default btn-sm note-btn-bold"
                                                                        role="button" tabindex="-1" title=""
                                                                        aria-label="Tebal (CTRL+B)"
                                                                        data-original-title="Tebal (CTRL+B)"><i
                                                                            class="note-icon-bold"></i></button><button
                                                                        type="button"
                                                                        class="note-btn btn btn-default btn-sm note-btn-italic"
                                                                        role="button" tabindex="-1" title=""
                                                                        aria-label="Miring (CTRL+I)"
                                                                        data-original-title="Miring (CTRL+I)"><i
                                                                            class="note-icon-italic"></i></button><button
                                                                        type="button"
                                                                        class="note-btn btn btn-default btn-sm note-btn-underline"
                                                                        role="button" tabindex="-1" title=""
                                                                        aria-label="Garis bawah (CTRL+U)"
                                                                        data-original-title="Garis bawah (CTRL+U)"><i
                                                                            class="note-icon-underline"></i></button><button
                                                                        type="button"
                                                                        class="note-btn btn btn-default btn-sm"
                                                                        role="button" tabindex="-1" title=""
                                                                        aria-label="Bersihkan gaya (CTRL+\)"
                                                                        data-original-title="Bersihkan gaya (CTRL+\)"><i
                                                                            class="note-icon-eraser"></i></button>
                                                                </div>
                                                                <div class="note-btn-group btn-group note-fontname">
                                                                    <div class="note-btn-group btn-group">
                                                                        <button type="button"
                                                                            class="note-btn btn btn-default btn-sm dropdown-toggle"
                                                                            role="button" tabindex="-1"
                                                                            data-toggle="dropdown" title=""
                                                                            aria-label="Jenis Tulisan"
                                                                            data-original-title="Jenis Tulisan"><span
                                                                                class="note-current-fontname"></span>
                                                                            <span
                                                                                class="note-icon-caret"></span></button>
                                                                        <ul class="dropdown-menu note-check dropdown-fontname"
                                                                            role="list" aria-label="Jenis Tulisan">
                                                                            <li role="listitem" aria-label="Arial"><a
                                                                                    href="#" data-value="Arial"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    <span
                                                                                        style="font-family: 'Arial'">Arial</span></a>
                                                                            </li>
                                                                            <li role="listitem"
                                                                                aria-label="Arial Black"><a href="#"
                                                                                    data-value="Arial Black"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    <span
                                                                                        style="font-family: 'Arial Black'">Arial
                                                                                        Black</span></a></li>
                                                                            <li role="listitem"
                                                                                aria-label="Comic Sans MS"><a href="#"
                                                                                    data-value="Comic Sans MS"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    <span
                                                                                        style="font-family: 'Comic Sans MS'">Comic
                                                                                        Sans MS</span></a></li>
                                                                            <li role="listitem"
                                                                                aria-label="Courier New"><a href="#"
                                                                                    data-value="Courier New"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    <span
                                                                                        style="font-family: 'Courier New'">Courier
                                                                                        New</span></a></li>
                                                                            <li role="listitem" aria-label="Helvetica">
                                                                                <a href="#" data-value="Helvetica"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    <span
                                                                                        style="font-family: 'Helvetica'">Helvetica</span></a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="Impact"><a
                                                                                    href="#" data-value="Impact"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    <span
                                                                                        style="font-family: 'Impact'">Impact</span></a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="Tahoma"><a
                                                                                    href="#" data-value="Tahoma"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    <span
                                                                                        style="font-family: 'Tahoma'">Tahoma</span></a>
                                                                            </li>
                                                                            <li role="listitem"
                                                                                aria-label="Times New Roman"><a href="#"
                                                                                    data-value="Times New Roman"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    <span
                                                                                        style="font-family: 'Times New Roman'">Times
                                                                                        New Roman</span></a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="Verdana"><a
                                                                                    href="#" data-value="Verdana"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    <span
                                                                                        style="font-family: 'Verdana'">Verdana</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="note-btn-group btn-group note-color">
                                                                    <div class="note-btn-group btn-group note-color">
                                                                        <button type="button"
                                                                            class="note-btn btn btn-default btn-sm note-current-color-button"
                                                                            role="button" tabindex="-1" title=""
                                                                            aria-label="Warna sekarang"
                                                                            data-original-title="Warna sekarang"
                                                                            data-backcolor="#FFFF00"><i
                                                                                class="note-icon-font note-recent-color"
                                                                                style="background-color: rgb(255, 255, 0);"></i></button><button
                                                                            type="button"
                                                                            class="note-btn btn btn-default btn-sm dropdown-toggle"
                                                                            role="button" tabindex="-1"
                                                                            data-toggle="dropdown" title=""
                                                                            aria-label="Selengkapnya"
                                                                            data-original-title="Selengkapnya">
                                                                            <span
                                                                                class="note-icon-caret"></span></button>
                                                                        <ul class="dropdown-menu" role="list">
                                                                            <div class="note-palette">
                                                                                <div class="note-palette-title">
                                                                                    Warna latar</div>
                                                                                <div> <button type="button"
                                                                                        class="note-color-reset btn btn-light"
                                                                                        data-event="backColor"
                                                                                        data-value="inherit">Transparan
                                                                                    </button> </div>
                                                                                <div class="note-holder"
                                                                                    data-event="backColor">
                                                                                    <div class="note-color-palette">
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#000000"
                                                                                                data-event="backColor"
                                                                                                data-value="#000000"
                                                                                                title=""
                                                                                                aria-label="Black"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Black"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#424242"
                                                                                                data-event="backColor"
                                                                                                data-value="#424242"
                                                                                                title=""
                                                                                                aria-label="Tundora"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Tundora"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#636363"
                                                                                                data-event="backColor"
                                                                                                data-value="#636363"
                                                                                                title=""
                                                                                                aria-label="Dove Gray"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Dove Gray"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9C9C94"
                                                                                                data-event="backColor"
                                                                                                data-value="#9C9C94"
                                                                                                title=""
                                                                                                aria-label="Star Dust"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Star Dust"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CEC6CE"
                                                                                                data-event="backColor"
                                                                                                data-value="#CEC6CE"
                                                                                                title=""
                                                                                                aria-label="Pale Slate"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Pale Slate"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#EFEFEF"
                                                                                                data-event="backColor"
                                                                                                data-value="#EFEFEF"
                                                                                                title=""
                                                                                                aria-label="Gallery"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Gallery"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#F7F7F7"
                                                                                                data-event="backColor"
                                                                                                data-value="#F7F7F7"
                                                                                                title=""
                                                                                                aria-label="Alabaster"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Alabaster"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFFFFF"
                                                                                                data-event="backColor"
                                                                                                data-value="#FFFFFF"
                                                                                                title=""
                                                                                                aria-label="White"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="White"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FF0000"
                                                                                                data-event="backColor"
                                                                                                data-value="#FF0000"
                                                                                                title=""
                                                                                                aria-label="Red"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Red"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FF9C00"
                                                                                                data-event="backColor"
                                                                                                data-value="#FF9C00"
                                                                                                title=""
                                                                                                aria-label="Orange Peel"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Orange Peel"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFFF00"
                                                                                                data-event="backColor"
                                                                                                data-value="#FFFF00"
                                                                                                title=""
                                                                                                aria-label="Yellow"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Yellow"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#00FF00"
                                                                                                data-event="backColor"
                                                                                                data-value="#00FF00"
                                                                                                title=""
                                                                                                aria-label="Green"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Green"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#00FFFF"
                                                                                                data-event="backColor"
                                                                                                data-value="#00FFFF"
                                                                                                title=""
                                                                                                aria-label="Cyan"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Cyan"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#0000FF"
                                                                                                data-event="backColor"
                                                                                                data-value="#0000FF"
                                                                                                title=""
                                                                                                aria-label="Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9C00FF"
                                                                                                data-event="backColor"
                                                                                                data-value="#9C00FF"
                                                                                                title=""
                                                                                                aria-label="Electric Violet"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Electric Violet"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FF00FF"
                                                                                                data-event="backColor"
                                                                                                data-value="#FF00FF"
                                                                                                title=""
                                                                                                aria-label="Magenta"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Magenta"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#F7C6CE"
                                                                                                data-event="backColor"
                                                                                                data-value="#F7C6CE"
                                                                                                title=""
                                                                                                aria-label="Azalea"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Azalea"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFE7CE"
                                                                                                data-event="backColor"
                                                                                                data-value="#FFE7CE"
                                                                                                title=""
                                                                                                aria-label="Karry"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Karry"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFEFC6"
                                                                                                data-event="backColor"
                                                                                                data-value="#FFEFC6"
                                                                                                title=""
                                                                                                aria-label="Egg White"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Egg White"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#D6EFD6"
                                                                                                data-event="backColor"
                                                                                                data-value="#D6EFD6"
                                                                                                title=""
                                                                                                aria-label="Zanah"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Zanah"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CEDEE7"
                                                                                                data-event="backColor"
                                                                                                data-value="#CEDEE7"
                                                                                                title=""
                                                                                                aria-label="Botticelli"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Botticelli"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CEE7F7"
                                                                                                data-event="backColor"
                                                                                                data-value="#CEE7F7"
                                                                                                title=""
                                                                                                aria-label="Tropical Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Tropical Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#D6D6E7"
                                                                                                data-event="backColor"
                                                                                                data-value="#D6D6E7"
                                                                                                title=""
                                                                                                aria-label="Mischka"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Mischka"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E7D6DE"
                                                                                                data-event="backColor"
                                                                                                data-value="#E7D6DE"
                                                                                                title=""
                                                                                                aria-label="Twilight"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Twilight"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E79C9C"
                                                                                                data-event="backColor"
                                                                                                data-value="#E79C9C"
                                                                                                title=""
                                                                                                aria-label="Tonys Pink"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Tonys Pink"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFC69C"
                                                                                                data-event="backColor"
                                                                                                data-value="#FFC69C"
                                                                                                title=""
                                                                                                aria-label="Peach Orange"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Peach Orange"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFE79C"
                                                                                                data-event="backColor"
                                                                                                data-value="#FFE79C"
                                                                                                title=""
                                                                                                aria-label="Cream Brulee"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Cream Brulee"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#B5D6A5"
                                                                                                data-event="backColor"
                                                                                                data-value="#B5D6A5"
                                                                                                title=""
                                                                                                aria-label="Sprout"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Sprout"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#A5C6CE"
                                                                                                data-event="backColor"
                                                                                                data-value="#A5C6CE"
                                                                                                title=""
                                                                                                aria-label="Casper"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Casper"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9CC6EF"
                                                                                                data-event="backColor"
                                                                                                data-value="#9CC6EF"
                                                                                                title=""
                                                                                                aria-label="Perano"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Perano"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#B5A5D6"
                                                                                                data-event="backColor"
                                                                                                data-value="#B5A5D6"
                                                                                                title=""
                                                                                                aria-label="Cold Purple"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Cold Purple"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#D6A5BD"
                                                                                                data-event="backColor"
                                                                                                data-value="#D6A5BD"
                                                                                                title=""
                                                                                                aria-label="Careys Pink"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Careys Pink"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E76363"
                                                                                                data-event="backColor"
                                                                                                data-value="#E76363"
                                                                                                title=""
                                                                                                aria-label="Mandy"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Mandy"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#F7AD6B"
                                                                                                data-event="backColor"
                                                                                                data-value="#F7AD6B"
                                                                                                title=""
                                                                                                aria-label="Rajah"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Rajah"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFD663"
                                                                                                data-event="backColor"
                                                                                                data-value="#FFD663"
                                                                                                title=""
                                                                                                aria-label="Dandelion"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Dandelion"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#94BD7B"
                                                                                                data-event="backColor"
                                                                                                data-value="#94BD7B"
                                                                                                title=""
                                                                                                aria-label="Olivine"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Olivine"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#73A5AD"
                                                                                                data-event="backColor"
                                                                                                data-value="#73A5AD"
                                                                                                title=""
                                                                                                aria-label="Gulf Stream"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Gulf Stream"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#6BADDE"
                                                                                                data-event="backColor"
                                                                                                data-value="#6BADDE"
                                                                                                title=""
                                                                                                aria-label="Viking"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Viking"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#8C7BC6"
                                                                                                data-event="backColor"
                                                                                                data-value="#8C7BC6"
                                                                                                title=""
                                                                                                aria-label="Blue Marguerite"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Blue Marguerite"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#C67BA5"
                                                                                                data-event="backColor"
                                                                                                data-value="#C67BA5"
                                                                                                title=""
                                                                                                aria-label="Puce"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Puce"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CE0000"
                                                                                                data-event="backColor"
                                                                                                data-value="#CE0000"
                                                                                                title=""
                                                                                                aria-label="Guardsman Red"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Guardsman Red"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E79439"
                                                                                                data-event="backColor"
                                                                                                data-value="#E79439"
                                                                                                title=""
                                                                                                aria-label="Fire Bush"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Fire Bush"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#EFC631"
                                                                                                data-event="backColor"
                                                                                                data-value="#EFC631"
                                                                                                title=""
                                                                                                aria-label="Golden Dream"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Golden Dream"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#6BA54A"
                                                                                                data-event="backColor"
                                                                                                data-value="#6BA54A"
                                                                                                title=""
                                                                                                aria-label="Chelsea Cucumber"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Chelsea Cucumber"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#4A7B8C"
                                                                                                data-event="backColor"
                                                                                                data-value="#4A7B8C"
                                                                                                title=""
                                                                                                aria-label="Smalt Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Smalt Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#3984C6"
                                                                                                data-event="backColor"
                                                                                                data-value="#3984C6"
                                                                                                title=""
                                                                                                aria-label="Boston Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Boston Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#634AA5"
                                                                                                data-event="backColor"
                                                                                                data-value="#634AA5"
                                                                                                title=""
                                                                                                aria-label="Butterfly Bush"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Butterfly Bush"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#A54A7B"
                                                                                                data-event="backColor"
                                                                                                data-value="#A54A7B"
                                                                                                title=""
                                                                                                aria-label="Cadillac"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Cadillac"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9C0000"
                                                                                                data-event="backColor"
                                                                                                data-value="#9C0000"
                                                                                                title=""
                                                                                                aria-label="Sangria"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Sangria"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#B56308"
                                                                                                data-event="backColor"
                                                                                                data-value="#B56308"
                                                                                                title=""
                                                                                                aria-label="Mai Tai"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Mai Tai"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#BD9400"
                                                                                                data-event="backColor"
                                                                                                data-value="#BD9400"
                                                                                                title=""
                                                                                                aria-label="Buddha Gold"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Buddha Gold"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#397B21"
                                                                                                data-event="backColor"
                                                                                                data-value="#397B21"
                                                                                                title=""
                                                                                                aria-label="Forest Green"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Forest Green"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#104A5A"
                                                                                                data-event="backColor"
                                                                                                data-value="#104A5A"
                                                                                                title=""
                                                                                                aria-label="Eden"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Eden"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#085294"
                                                                                                data-event="backColor"
                                                                                                data-value="#085294"
                                                                                                title=""
                                                                                                aria-label="Venice Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Venice Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#311873"
                                                                                                data-event="backColor"
                                                                                                data-value="#311873"
                                                                                                title=""
                                                                                                aria-label="Meteorite"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Meteorite"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#731842"
                                                                                                data-event="backColor"
                                                                                                data-value="#731842"
                                                                                                title=""
                                                                                                aria-label="Claret"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Claret"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#630000"
                                                                                                data-event="backColor"
                                                                                                data-value="#630000"
                                                                                                title=""
                                                                                                aria-label="Rosewood"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Rosewood"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#7B3900"
                                                                                                data-event="backColor"
                                                                                                data-value="#7B3900"
                                                                                                title=""
                                                                                                aria-label="Cinnamon"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Cinnamon"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#846300"
                                                                                                data-event="backColor"
                                                                                                data-value="#846300"
                                                                                                title=""
                                                                                                aria-label="Olive"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Olive"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#295218"
                                                                                                data-event="backColor"
                                                                                                data-value="#295218"
                                                                                                title=""
                                                                                                aria-label="Parsley"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Parsley"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#083139"
                                                                                                data-event="backColor"
                                                                                                data-value="#083139"
                                                                                                title=""
                                                                                                aria-label="Tiber"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Tiber"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#003163"
                                                                                                data-event="backColor"
                                                                                                data-value="#003163"
                                                                                                title=""
                                                                                                aria-label="Midnight Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Midnight Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#21104A"
                                                                                                data-event="backColor"
                                                                                                data-value="#21104A"
                                                                                                title=""
                                                                                                aria-label="Valentino"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Valentino"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#4A1031"
                                                                                                data-event="backColor"
                                                                                                data-value="#4A1031"
                                                                                                title=""
                                                                                                aria-label="Loulou"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Loulou"></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="note-palette">
                                                                                <div class="note-palette-title">
                                                                                    Warna font</div>
                                                                                <div> <button type="button"
                                                                                        class="note-color-reset btn btn-light"
                                                                                        data-event="removeFormat"
                                                                                        data-value="foreColor">Kembalikan
                                                                                        kesemula </button>
                                                                                </div>
                                                                                <div class="note-holder"
                                                                                    data-event="foreColor">
                                                                                    <div class="note-color-palette">
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#000000"
                                                                                                data-event="foreColor"
                                                                                                data-value="#000000"
                                                                                                title=""
                                                                                                aria-label="Black"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Black"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#424242"
                                                                                                data-event="foreColor"
                                                                                                data-value="#424242"
                                                                                                title=""
                                                                                                aria-label="Tundora"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Tundora"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#636363"
                                                                                                data-event="foreColor"
                                                                                                data-value="#636363"
                                                                                                title=""
                                                                                                aria-label="Dove Gray"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Dove Gray"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9C9C94"
                                                                                                data-event="foreColor"
                                                                                                data-value="#9C9C94"
                                                                                                title=""
                                                                                                aria-label="Star Dust"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Star Dust"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CEC6CE"
                                                                                                data-event="foreColor"
                                                                                                data-value="#CEC6CE"
                                                                                                title=""
                                                                                                aria-label="Pale Slate"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Pale Slate"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#EFEFEF"
                                                                                                data-event="foreColor"
                                                                                                data-value="#EFEFEF"
                                                                                                title=""
                                                                                                aria-label="Gallery"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Gallery"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#F7F7F7"
                                                                                                data-event="foreColor"
                                                                                                data-value="#F7F7F7"
                                                                                                title=""
                                                                                                aria-label="Alabaster"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Alabaster"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFFFFF"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FFFFFF"
                                                                                                title=""
                                                                                                aria-label="White"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="White"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FF0000"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FF0000"
                                                                                                title=""
                                                                                                aria-label="Red"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Red"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FF9C00"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FF9C00"
                                                                                                title=""
                                                                                                aria-label="Orange Peel"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Orange Peel"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFFF00"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FFFF00"
                                                                                                title=""
                                                                                                aria-label="Yellow"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Yellow"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#00FF00"
                                                                                                data-event="foreColor"
                                                                                                data-value="#00FF00"
                                                                                                title=""
                                                                                                aria-label="Green"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Green"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#00FFFF"
                                                                                                data-event="foreColor"
                                                                                                data-value="#00FFFF"
                                                                                                title=""
                                                                                                aria-label="Cyan"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Cyan"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#0000FF"
                                                                                                data-event="foreColor"
                                                                                                data-value="#0000FF"
                                                                                                title=""
                                                                                                aria-label="Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9C00FF"
                                                                                                data-event="foreColor"
                                                                                                data-value="#9C00FF"
                                                                                                title=""
                                                                                                aria-label="Electric Violet"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Electric Violet"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FF00FF"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FF00FF"
                                                                                                title=""
                                                                                                aria-label="Magenta"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Magenta"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#F7C6CE"
                                                                                                data-event="foreColor"
                                                                                                data-value="#F7C6CE"
                                                                                                title=""
                                                                                                aria-label="Azalea"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Azalea"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFE7CE"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FFE7CE"
                                                                                                title=""
                                                                                                aria-label="Karry"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Karry"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFEFC6"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FFEFC6"
                                                                                                title=""
                                                                                                aria-label="Egg White"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Egg White"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#D6EFD6"
                                                                                                data-event="foreColor"
                                                                                                data-value="#D6EFD6"
                                                                                                title=""
                                                                                                aria-label="Zanah"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Zanah"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CEDEE7"
                                                                                                data-event="foreColor"
                                                                                                data-value="#CEDEE7"
                                                                                                title=""
                                                                                                aria-label="Botticelli"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Botticelli"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CEE7F7"
                                                                                                data-event="foreColor"
                                                                                                data-value="#CEE7F7"
                                                                                                title=""
                                                                                                aria-label="Tropical Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Tropical Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#D6D6E7"
                                                                                                data-event="foreColor"
                                                                                                data-value="#D6D6E7"
                                                                                                title=""
                                                                                                aria-label="Mischka"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Mischka"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E7D6DE"
                                                                                                data-event="foreColor"
                                                                                                data-value="#E7D6DE"
                                                                                                title=""
                                                                                                aria-label="Twilight"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Twilight"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E79C9C"
                                                                                                data-event="foreColor"
                                                                                                data-value="#E79C9C"
                                                                                                title=""
                                                                                                aria-label="Tonys Pink"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Tonys Pink"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFC69C"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FFC69C"
                                                                                                title=""
                                                                                                aria-label="Peach Orange"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Peach Orange"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFE79C"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FFE79C"
                                                                                                title=""
                                                                                                aria-label="Cream Brulee"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Cream Brulee"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#B5D6A5"
                                                                                                data-event="foreColor"
                                                                                                data-value="#B5D6A5"
                                                                                                title=""
                                                                                                aria-label="Sprout"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Sprout"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#A5C6CE"
                                                                                                data-event="foreColor"
                                                                                                data-value="#A5C6CE"
                                                                                                title=""
                                                                                                aria-label="Casper"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Casper"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9CC6EF"
                                                                                                data-event="foreColor"
                                                                                                data-value="#9CC6EF"
                                                                                                title=""
                                                                                                aria-label="Perano"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Perano"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#B5A5D6"
                                                                                                data-event="foreColor"
                                                                                                data-value="#B5A5D6"
                                                                                                title=""
                                                                                                aria-label="Cold Purple"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Cold Purple"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#D6A5BD"
                                                                                                data-event="foreColor"
                                                                                                data-value="#D6A5BD"
                                                                                                title=""
                                                                                                aria-label="Careys Pink"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Careys Pink"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E76363"
                                                                                                data-event="foreColor"
                                                                                                data-value="#E76363"
                                                                                                title=""
                                                                                                aria-label="Mandy"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Mandy"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#F7AD6B"
                                                                                                data-event="foreColor"
                                                                                                data-value="#F7AD6B"
                                                                                                title=""
                                                                                                aria-label="Rajah"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Rajah"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFD663"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FFD663"
                                                                                                title=""
                                                                                                aria-label="Dandelion"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Dandelion"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#94BD7B"
                                                                                                data-event="foreColor"
                                                                                                data-value="#94BD7B"
                                                                                                title=""
                                                                                                aria-label="Olivine"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Olivine"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#73A5AD"
                                                                                                data-event="foreColor"
                                                                                                data-value="#73A5AD"
                                                                                                title=""
                                                                                                aria-label="Gulf Stream"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Gulf Stream"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#6BADDE"
                                                                                                data-event="foreColor"
                                                                                                data-value="#6BADDE"
                                                                                                title=""
                                                                                                aria-label="Viking"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Viking"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#8C7BC6"
                                                                                                data-event="foreColor"
                                                                                                data-value="#8C7BC6"
                                                                                                title=""
                                                                                                aria-label="Blue Marguerite"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Blue Marguerite"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#C67BA5"
                                                                                                data-event="foreColor"
                                                                                                data-value="#C67BA5"
                                                                                                title=""
                                                                                                aria-label="Puce"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Puce"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CE0000"
                                                                                                data-event="foreColor"
                                                                                                data-value="#CE0000"
                                                                                                title=""
                                                                                                aria-label="Guardsman Red"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Guardsman Red"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E79439"
                                                                                                data-event="foreColor"
                                                                                                data-value="#E79439"
                                                                                                title=""
                                                                                                aria-label="Fire Bush"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Fire Bush"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#EFC631"
                                                                                                data-event="foreColor"
                                                                                                data-value="#EFC631"
                                                                                                title=""
                                                                                                aria-label="Golden Dream"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Golden Dream"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#6BA54A"
                                                                                                data-event="foreColor"
                                                                                                data-value="#6BA54A"
                                                                                                title=""
                                                                                                aria-label="Chelsea Cucumber"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Chelsea Cucumber"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#4A7B8C"
                                                                                                data-event="foreColor"
                                                                                                data-value="#4A7B8C"
                                                                                                title=""
                                                                                                aria-label="Smalt Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Smalt Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#3984C6"
                                                                                                data-event="foreColor"
                                                                                                data-value="#3984C6"
                                                                                                title=""
                                                                                                aria-label="Boston Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Boston Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#634AA5"
                                                                                                data-event="foreColor"
                                                                                                data-value="#634AA5"
                                                                                                title=""
                                                                                                aria-label="Butterfly Bush"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Butterfly Bush"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#A54A7B"
                                                                                                data-event="foreColor"
                                                                                                data-value="#A54A7B"
                                                                                                title=""
                                                                                                aria-label="Cadillac"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Cadillac"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9C0000"
                                                                                                data-event="foreColor"
                                                                                                data-value="#9C0000"
                                                                                                title=""
                                                                                                aria-label="Sangria"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Sangria"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#B56308"
                                                                                                data-event="foreColor"
                                                                                                data-value="#B56308"
                                                                                                title=""
                                                                                                aria-label="Mai Tai"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Mai Tai"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#BD9400"
                                                                                                data-event="foreColor"
                                                                                                data-value="#BD9400"
                                                                                                title=""
                                                                                                aria-label="Buddha Gold"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Buddha Gold"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#397B21"
                                                                                                data-event="foreColor"
                                                                                                data-value="#397B21"
                                                                                                title=""
                                                                                                aria-label="Forest Green"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Forest Green"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#104A5A"
                                                                                                data-event="foreColor"
                                                                                                data-value="#104A5A"
                                                                                                title=""
                                                                                                aria-label="Eden"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Eden"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#085294"
                                                                                                data-event="foreColor"
                                                                                                data-value="#085294"
                                                                                                title=""
                                                                                                aria-label="Venice Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Venice Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#311873"
                                                                                                data-event="foreColor"
                                                                                                data-value="#311873"
                                                                                                title=""
                                                                                                aria-label="Meteorite"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Meteorite"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#731842"
                                                                                                data-event="foreColor"
                                                                                                data-value="#731842"
                                                                                                title=""
                                                                                                aria-label="Claret"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Claret"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#630000"
                                                                                                data-event="foreColor"
                                                                                                data-value="#630000"
                                                                                                title=""
                                                                                                aria-label="Rosewood"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Rosewood"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#7B3900"
                                                                                                data-event="foreColor"
                                                                                                data-value="#7B3900"
                                                                                                title=""
                                                                                                aria-label="Cinnamon"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Cinnamon"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#846300"
                                                                                                data-event="foreColor"
                                                                                                data-value="#846300"
                                                                                                title=""
                                                                                                aria-label="Olive"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Olive"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#295218"
                                                                                                data-event="foreColor"
                                                                                                data-value="#295218"
                                                                                                title=""
                                                                                                aria-label="Parsley"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Parsley"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#083139"
                                                                                                data-event="foreColor"
                                                                                                data-value="#083139"
                                                                                                title=""
                                                                                                aria-label="Tiber"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Tiber"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#003163"
                                                                                                data-event="foreColor"
                                                                                                data-value="#003163"
                                                                                                title=""
                                                                                                aria-label="Midnight Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Midnight Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#21104A"
                                                                                                data-event="foreColor"
                                                                                                data-value="#21104A"
                                                                                                title=""
                                                                                                aria-label="Valentino"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Valentino"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#4A1031"
                                                                                                data-event="foreColor"
                                                                                                data-value="#4A1031"
                                                                                                title=""
                                                                                                aria-label="Loulou"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Loulou"></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="note-btn-group btn-group note-para">
                                                                    <button type="button"
                                                                        class="note-btn btn btn-default btn-sm"
                                                                        role="button" tabindex="-1" title=""
                                                                        aria-label="Pencacahan (CTRL+SHIFT+NUM7)"
                                                                        data-original-title="Pencacahan (CTRL+SHIFT+NUM7)"><i
                                                                            class="note-icon-unorderedlist"></i></button><button
                                                                        type="button"
                                                                        class="note-btn btn btn-default btn-sm"
                                                                        role="button" tabindex="-1" title=""
                                                                        aria-label="Penomoran (CTRL+SHIFT+NUM8)"
                                                                        data-original-title="Penomoran (CTRL+SHIFT+NUM8)"><i
                                                                            class="note-icon-orderedlist"></i></button>
                                                                    <div class="note-btn-group btn-group">
                                                                        <button type="button"
                                                                            class="note-btn btn btn-default btn-sm dropdown-toggle"
                                                                            role="button" tabindex="-1"
                                                                            data-toggle="dropdown" title=""
                                                                            aria-label="Paragraf"
                                                                            data-original-title="Paragraf"><i
                                                                                class="note-icon-align-left"></i>
                                                                            <span
                                                                                class="note-icon-caret"></span></button>
                                                                        <ul class="dropdown-menu" role="list">
                                                                            <div
                                                                                class="note-btn-group btn-group note-align">
                                                                                <button type="button"
                                                                                    class="note-btn btn btn-default btn-sm"
                                                                                    role="button" tabindex="-1" title=""
                                                                                    aria-label="Rata kiri (CTRL+SHIFT+L)"
                                                                                    data-original-title="Rata kiri (CTRL+SHIFT+L)"><i
                                                                                        class="note-icon-align-left"></i></button><button
                                                                                    type="button"
                                                                                    class="note-btn btn btn-default btn-sm"
                                                                                    role="button" tabindex="-1" title=""
                                                                                    aria-label="Rata tengah (CTRL+SHIFT+E)"
                                                                                    data-original-title="Rata tengah (CTRL+SHIFT+E)"><i
                                                                                        class="note-icon-align-center"></i></button><button
                                                                                    type="button"
                                                                                    class="note-btn btn btn-default btn-sm"
                                                                                    role="button" tabindex="-1" title=""
                                                                                    aria-label="Rata kanan (CTRL+SHIFT+R)"
                                                                                    data-original-title="Rata kanan (CTRL+SHIFT+R)"><i
                                                                                        class="note-icon-align-right"></i></button><button
                                                                                    type="button"
                                                                                    class="note-btn btn btn-default btn-sm"
                                                                                    role="button" tabindex="-1" title=""
                                                                                    aria-label="Rata kanan kiri (CTRL+SHIFT+J)"
                                                                                    data-original-title="Rata kanan kiri (CTRL+SHIFT+J)"><i
                                                                                        class="note-icon-align-justify"></i></button>
                                                                            </div>
                                                                            <div
                                                                                class="note-btn-group btn-group note-list">
                                                                                <button type="button"
                                                                                    class="note-btn btn btn-default btn-sm"
                                                                                    role="button" tabindex="-1" title=""
                                                                                    aria-label="Outdent (CTRL+[)"
                                                                                    data-original-title="Outdent (CTRL+[)"><i
                                                                                        class="note-icon-align-outdent"></i></button><button
                                                                                    type="button"
                                                                                    class="note-btn btn btn-default btn-sm"
                                                                                    role="button" tabindex="-1" title=""
                                                                                    aria-label="Indent (CTRL+])"
                                                                                    data-original-title="Indent (CTRL+])"><i
                                                                                        class="note-icon-align-indent"></i></button>
                                                                            </div>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="note-btn-group btn-group note-height">
                                                                    <div class="note-btn-group btn-group">
                                                                        <button type="button"
                                                                            class="note-btn btn btn-default btn-sm dropdown-toggle"
                                                                            role="button" tabindex="-1"
                                                                            data-toggle="dropdown" title=""
                                                                            aria-label="Jarak baris"
                                                                            data-original-title="Jarak baris"><i
                                                                                class="note-icon-text-height"></i>
                                                                            <span
                                                                                class="note-icon-caret"></span></button>
                                                                        <ul class="dropdown-menu note-check dropdown-line-height"
                                                                            role="list" aria-label="Jarak baris">
                                                                            <li role="listitem" aria-label="1.0"><a
                                                                                    href="#" data-value="1.0"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    1.0</a></li>
                                                                            <li role="listitem" aria-label="1.2"><a
                                                                                    href="#" data-value="1.2"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    1.2</a></li>
                                                                            <li role="listitem" aria-label="1.4"><a
                                                                                    href="#" data-value="1.4"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    1.4</a></li>
                                                                            <li role="listitem" aria-label="1.5"><a
                                                                                    href="#" data-value="1.5"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    1.5</a></li>
                                                                            <li role="listitem" aria-label="1.6"><a
                                                                                    href="#" data-value="1.6"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    1.6</a></li>
                                                                            <li role="listitem" aria-label="1.8"><a
                                                                                    href="#" data-value="1.8"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    1.8</a></li>
                                                                            <li role="listitem" aria-label="2.0"><a
                                                                                    href="#" data-value="2.0"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    2.0</a></li>
                                                                            <li role="listitem" aria-label="3.0"><a
                                                                                    href="#" data-value="3.0"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    3.0</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="note-btn-group btn-group note-insert">
                                                                    <button type="button"
                                                                        class="note-btn btn btn-default btn-sm"
                                                                        role="button" tabindex="-1" title=""
                                                                        aria-label="Masukkan garis horizontal (CTRL+ENTER)"
                                                                        data-original-title="Masukkan garis horizontal (CTRL+ENTER)"><i
                                                                            class="note-icon-minus"></i></button>
                                                                </div>
                                                                <div class="note-btn-group btn-group note-table">
                                                                    <div class="note-btn-group btn-group">
                                                                        <button type="button"
                                                                            class="note-btn btn btn-default btn-sm dropdown-toggle"
                                                                            role="button" tabindex="-1"
                                                                            data-toggle="dropdown" title=""
                                                                            aria-label="Tabel"
                                                                            data-original-title="Tabel"><i
                                                                                class="note-icon-table"></i>
                                                                            <span
                                                                                class="note-icon-caret"></span></button>
                                                                        <ul class="dropdown-menu note-table" role="list"
                                                                            aria-label="Tabel">
                                                                            <div class="note-dimension-picker">
                                                                                <div class="note-dimension-picker-mousecatcher"
                                                                                    data-event="insertTable"
                                                                                    data-value="1x1"
                                                                                    style="width: 10em; height: 10em;">
                                                                                </div>
                                                                                <div
                                                                                    class="note-dimension-picker-highlighted">
                                                                                </div>
                                                                                <div
                                                                                    class="note-dimension-picker-unhighlighted">
                                                                                </div>
                                                                            </div>
                                                                            <div class="note-dimension-display">
                                                                                1 x 1</div>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="note-editing-area">
                                                            <div class="note-handle">
                                                                <div class="note-control-selection">
                                                                    <div class="note-control-selection-bg">
                                                                    </div>
                                                                    <div class="note-control-holder note-control-nw">
                                                                    </div>
                                                                    <div class="note-control-holder note-control-ne">
                                                                    </div>
                                                                    <div class="note-control-holder note-control-sw">
                                                                    </div>
                                                                    <div class="note-control-sizing note-control-se">
                                                                    </div>
                                                                    <div class="note-control-selection-info">
                                                                    </div>
                                                                </div>
                                                            </div><textarea class="note-codable" role="textbox"
                                                                aria-multiline="true"></textarea>
                                                            <div class="note-editable" contenteditable="true"
                                                                role="textbox" aria-multiline="true"
                                                                style="height: 250px;">
                                                                <p><br></p>
                                                            </div>
                                                        </div><output class="note-status-output"
                                                            aria-live="polite"></output>
                                                        <div class="note-statusbar" role="status">
                                                            <div class="note-resizebar" role="seperator"
                                                                aria-orientation="horizontal" aria-label="Resize">
                                                                <div class="note-icon-bar"></div>
                                                                <div class="note-icon-bar"></div>
                                                                <div class="note-icon-bar"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="note-editor note-frame panel">
                                                        <div class="note-dropzone">
                                                            <div class="note-dropzone-message"></div>
                                                        </div>
                                                        <div class="note-toolbar-wrapper panel-default">
                                                            <div class="note-toolbar panel-heading" role="toolbar">
                                                                <div class="note-btn-group btn-group note-style">
                                                                    <div class="note-btn-group btn-group">
                                                                        <button type="button"
                                                                            class="note-btn btn btn-default btn-sm dropdown-toggle"
                                                                            role="button" tabindex="-1"
                                                                            data-toggle="dropdown" title=""
                                                                            aria-label="Gaya"
                                                                            data-original-title="Gaya"><i
                                                                                class="note-icon-magic"></i>
                                                                            <span
                                                                                class="note-icon-caret"></span></button>
                                                                        <ul class="dropdown-menu dropdown-style"
                                                                            role="list" aria-label="Gaya">
                                                                            <li role="listitem" aria-label="p">
                                                                                <a href="#" data-value="p">
                                                                                    <p>p</p>
                                                                                </a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="blockquote">
                                                                                <a href="#" data-value="blockquote">
                                                                                    <blockquote>Kutipan
                                                                                    </blockquote>
                                                                                </a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="pre"><a
                                                                                    href="#" data-value="pre">
                                                                                    <pre>Kode</pre>
                                                                                </a></li>
                                                                            <li role="listitem" aria-label="h1">
                                                                                <a href="#" data-value="h1">
                                                                                    <h1>Heading 1</h1>
                                                                                </a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="h2">
                                                                                <a href="#" data-value="h2">
                                                                                    <h2>Heading 2</h2>
                                                                                </a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="h3">
                                                                                <a href="#" data-value="h3">
                                                                                    <h3>Heading 3</h3>
                                                                                </a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="h4">
                                                                                <a href="#" data-value="h4">
                                                                                    <h4>Heading 4</h4>
                                                                                </a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="h5">
                                                                                <a href="#" data-value="h5">
                                                                                    <h5>Heading 5</h5>
                                                                                </a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="h6">
                                                                                <a href="#" data-value="h6">
                                                                                    <h6>Heading 6</h6>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="note-btn-group btn-group note-fontsize">
                                                                    <div class="note-btn-group btn-group">
                                                                        <button type="button"
                                                                            class="note-btn btn btn-default btn-sm dropdown-toggle"
                                                                            role="button" tabindex="-1"
                                                                            data-toggle="dropdown" title=""
                                                                            aria-label="Ukuran font"
                                                                            data-original-title="Ukuran font"><span
                                                                                class="note-current-fontsize">13</span>
                                                                            <span
                                                                                class="note-icon-caret"></span></button>
                                                                        <ul class="dropdown-menu note-check dropdown-fontsize"
                                                                            role="list" aria-label="Ukuran font">
                                                                            <li role="listitem" aria-label="8">
                                                                                <a href="#" data-value="8"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    8</a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="9">
                                                                                <a href="#" data-value="9"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    9</a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="10">
                                                                                <a href="#" data-value="10"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    10</a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="11">
                                                                                <a href="#" data-value="11"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    11</a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="12">
                                                                                <a href="#" data-value="12"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    12</a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="14">
                                                                                <a href="#" data-value="14"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    14</a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="18">
                                                                                <a href="#" data-value="18"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    18</a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="24">
                                                                                <a href="#" data-value="24"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    24</a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="36">
                                                                                <a href="#" data-value="36"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    36</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="note-btn-group btn-group note-font">
                                                                    <button type="button"
                                                                        class="note-btn btn btn-default btn-sm note-btn-bold"
                                                                        role="button" tabindex="-1" title=""
                                                                        aria-label="Tebal (CTRL+B)"
                                                                        data-original-title="Tebal (CTRL+B)"><i
                                                                            class="note-icon-bold"></i></button><button
                                                                        type="button"
                                                                        class="note-btn btn btn-default btn-sm note-btn-italic"
                                                                        role="button" tabindex="-1" title=""
                                                                        aria-label="Miring (CTRL+I)"
                                                                        data-original-title="Miring (CTRL+I)"><i
                                                                            class="note-icon-italic"></i></button><button
                                                                        type="button"
                                                                        class="note-btn btn btn-default btn-sm note-btn-underline"
                                                                        role="button" tabindex="-1" title=""
                                                                        aria-label="Garis bawah (CTRL+U)"
                                                                        data-original-title="Garis bawah (CTRL+U)"><i
                                                                            class="note-icon-underline"></i></button><button
                                                                        type="button"
                                                                        class="note-btn btn btn-default btn-sm"
                                                                        role="button" tabindex="-1" title=""
                                                                        aria-label="Bersihkan gaya (CTRL+\)"
                                                                        data-original-title="Bersihkan gaya (CTRL+\)"><i
                                                                            class="note-icon-eraser"></i></button>
                                                                </div>
                                                                <div class="note-btn-group btn-group note-fontname">
                                                                    <div class="note-btn-group btn-group">
                                                                        <button type="button"
                                                                            class="note-btn btn btn-default btn-sm dropdown-toggle"
                                                                            role="button" tabindex="-1"
                                                                            data-toggle="dropdown" title=""
                                                                            aria-label="Jenis Tulisan"
                                                                            data-original-title="Jenis Tulisan"><span
                                                                                class="note-current-fontname"
                                                                                style="font-family: &quot;Open Sans&quot;;">Open
                                                                                Sans</span> <span
                                                                                class="note-icon-caret"></span></button>
                                                                        <ul class="dropdown-menu note-check dropdown-fontname"
                                                                            role="list" aria-label="Jenis Tulisan">
                                                                            <li role="listitem" aria-label="Arial"><a
                                                                                    href="#" data-value="Arial"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    <span
                                                                                        style="font-family: 'Arial'">Arial</span></a>
                                                                            </li>
                                                                            <li role="listitem"
                                                                                aria-label="Arial Black"><a href="#"
                                                                                    data-value="Arial Black"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    <span
                                                                                        style="font-family: 'Arial Black'">Arial
                                                                                        Black</span></a></li>
                                                                            <li role="listitem"
                                                                                aria-label="Comic Sans MS"><a href="#"
                                                                                    data-value="Comic Sans MS"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    <span
                                                                                        style="font-family: 'Comic Sans MS'">Comic
                                                                                        Sans MS</span></a></li>
                                                                            <li role="listitem"
                                                                                aria-label="Courier New"><a href="#"
                                                                                    data-value="Courier New"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    <span
                                                                                        style="font-family: 'Courier New'">Courier
                                                                                        New</span></a></li>
                                                                            <li role="listitem" aria-label="Helvetica">
                                                                                <a href="#" data-value="Helvetica"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    <span
                                                                                        style="font-family: 'Helvetica'">Helvetica</span></a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="Impact"><a
                                                                                    href="#" data-value="Impact"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    <span
                                                                                        style="font-family: 'Impact'">Impact</span></a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="Tahoma"><a
                                                                                    href="#" data-value="Tahoma"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    <span
                                                                                        style="font-family: 'Tahoma'">Tahoma</span></a>
                                                                            </li>
                                                                            <li role="listitem"
                                                                                aria-label="Times New Roman"><a href="#"
                                                                                    data-value="Times New Roman"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    <span
                                                                                        style="font-family: 'Times New Roman'">Times
                                                                                        New Roman</span></a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="Verdana"><a
                                                                                    href="#" data-value="Verdana"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    <span
                                                                                        style="font-family: 'Verdana'">Verdana</span></a>
                                                                            </li>
                                                                            <li role="listitem" aria-label="Open Sans">
                                                                                <a href="#" data-value="Open Sans"
                                                                                    class="checked"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    <span
                                                                                        style="font-family: 'Open Sans'">Open
                                                                                        Sans</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="note-btn-group btn-group note-color">
                                                                    <div class="note-btn-group btn-group note-color">
                                                                        <button type="button"
                                                                            class="note-btn btn btn-default btn-sm note-current-color-button"
                                                                            role="button" tabindex="-1" title=""
                                                                            aria-label="Warna sekarang"
                                                                            data-original-title="Warna sekarang"
                                                                            data-backcolor="#FFFF00"><i
                                                                                class="note-icon-font note-recent-color"
                                                                                style="background-color: rgb(255, 255, 0);"></i></button><button
                                                                            type="button"
                                                                            class="note-btn btn btn-default btn-sm dropdown-toggle"
                                                                            role="button" tabindex="-1"
                                                                            data-toggle="dropdown" title=""
                                                                            aria-label="Selengkapnya"
                                                                            data-original-title="Selengkapnya">
                                                                            <span
                                                                                class="note-icon-caret"></span></button>
                                                                        <ul class="dropdown-menu" role="list">
                                                                            <div class="note-palette">
                                                                                <div class="note-palette-title">
                                                                                    Warna latar</div>
                                                                                <div> <button type="button"
                                                                                        class="note-color-reset btn btn-light"
                                                                                        data-event="backColor"
                                                                                        data-value="inherit">Transparan
                                                                                    </button> </div>
                                                                                <div class="note-holder"
                                                                                    data-event="backColor">
                                                                                    <div class="note-color-palette">
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#000000"
                                                                                                data-event="backColor"
                                                                                                data-value="#000000"
                                                                                                title=""
                                                                                                aria-label="Black"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Black"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#424242"
                                                                                                data-event="backColor"
                                                                                                data-value="#424242"
                                                                                                title=""
                                                                                                aria-label="Tundora"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Tundora"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#636363"
                                                                                                data-event="backColor"
                                                                                                data-value="#636363"
                                                                                                title=""
                                                                                                aria-label="Dove Gray"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Dove Gray"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9C9C94"
                                                                                                data-event="backColor"
                                                                                                data-value="#9C9C94"
                                                                                                title=""
                                                                                                aria-label="Star Dust"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Star Dust"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CEC6CE"
                                                                                                data-event="backColor"
                                                                                                data-value="#CEC6CE"
                                                                                                title=""
                                                                                                aria-label="Pale Slate"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Pale Slate"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#EFEFEF"
                                                                                                data-event="backColor"
                                                                                                data-value="#EFEFEF"
                                                                                                title=""
                                                                                                aria-label="Gallery"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Gallery"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#F7F7F7"
                                                                                                data-event="backColor"
                                                                                                data-value="#F7F7F7"
                                                                                                title=""
                                                                                                aria-label="Alabaster"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Alabaster"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFFFFF"
                                                                                                data-event="backColor"
                                                                                                data-value="#FFFFFF"
                                                                                                title=""
                                                                                                aria-label="White"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="White"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FF0000"
                                                                                                data-event="backColor"
                                                                                                data-value="#FF0000"
                                                                                                title=""
                                                                                                aria-label="Red"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Red"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FF9C00"
                                                                                                data-event="backColor"
                                                                                                data-value="#FF9C00"
                                                                                                title=""
                                                                                                aria-label="Orange Peel"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Orange Peel"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFFF00"
                                                                                                data-event="backColor"
                                                                                                data-value="#FFFF00"
                                                                                                title=""
                                                                                                aria-label="Yellow"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Yellow"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#00FF00"
                                                                                                data-event="backColor"
                                                                                                data-value="#00FF00"
                                                                                                title=""
                                                                                                aria-label="Green"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Green"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#00FFFF"
                                                                                                data-event="backColor"
                                                                                                data-value="#00FFFF"
                                                                                                title=""
                                                                                                aria-label="Cyan"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Cyan"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#0000FF"
                                                                                                data-event="backColor"
                                                                                                data-value="#0000FF"
                                                                                                title=""
                                                                                                aria-label="Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9C00FF"
                                                                                                data-event="backColor"
                                                                                                data-value="#9C00FF"
                                                                                                title=""
                                                                                                aria-label="Electric Violet"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Electric Violet"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FF00FF"
                                                                                                data-event="backColor"
                                                                                                data-value="#FF00FF"
                                                                                                title=""
                                                                                                aria-label="Magenta"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Magenta"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#F7C6CE"
                                                                                                data-event="backColor"
                                                                                                data-value="#F7C6CE"
                                                                                                title=""
                                                                                                aria-label="Azalea"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Azalea"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFE7CE"
                                                                                                data-event="backColor"
                                                                                                data-value="#FFE7CE"
                                                                                                title=""
                                                                                                aria-label="Karry"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Karry"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFEFC6"
                                                                                                data-event="backColor"
                                                                                                data-value="#FFEFC6"
                                                                                                title=""
                                                                                                aria-label="Egg White"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Egg White"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#D6EFD6"
                                                                                                data-event="backColor"
                                                                                                data-value="#D6EFD6"
                                                                                                title=""
                                                                                                aria-label="Zanah"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Zanah"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CEDEE7"
                                                                                                data-event="backColor"
                                                                                                data-value="#CEDEE7"
                                                                                                title=""
                                                                                                aria-label="Botticelli"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Botticelli"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CEE7F7"
                                                                                                data-event="backColor"
                                                                                                data-value="#CEE7F7"
                                                                                                title=""
                                                                                                aria-label="Tropical Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Tropical Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#D6D6E7"
                                                                                                data-event="backColor"
                                                                                                data-value="#D6D6E7"
                                                                                                title=""
                                                                                                aria-label="Mischka"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Mischka"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E7D6DE"
                                                                                                data-event="backColor"
                                                                                                data-value="#E7D6DE"
                                                                                                title=""
                                                                                                aria-label="Twilight"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Twilight"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E79C9C"
                                                                                                data-event="backColor"
                                                                                                data-value="#E79C9C"
                                                                                                title=""
                                                                                                aria-label="Tonys Pink"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Tonys Pink"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFC69C"
                                                                                                data-event="backColor"
                                                                                                data-value="#FFC69C"
                                                                                                title=""
                                                                                                aria-label="Peach Orange"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Peach Orange"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFE79C"
                                                                                                data-event="backColor"
                                                                                                data-value="#FFE79C"
                                                                                                title=""
                                                                                                aria-label="Cream Brulee"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Cream Brulee"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#B5D6A5"
                                                                                                data-event="backColor"
                                                                                                data-value="#B5D6A5"
                                                                                                title=""
                                                                                                aria-label="Sprout"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Sprout"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#A5C6CE"
                                                                                                data-event="backColor"
                                                                                                data-value="#A5C6CE"
                                                                                                title=""
                                                                                                aria-label="Casper"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Casper"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9CC6EF"
                                                                                                data-event="backColor"
                                                                                                data-value="#9CC6EF"
                                                                                                title=""
                                                                                                aria-label="Perano"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Perano"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#B5A5D6"
                                                                                                data-event="backColor"
                                                                                                data-value="#B5A5D6"
                                                                                                title=""
                                                                                                aria-label="Cold Purple"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Cold Purple"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#D6A5BD"
                                                                                                data-event="backColor"
                                                                                                data-value="#D6A5BD"
                                                                                                title=""
                                                                                                aria-label="Careys Pink"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Careys Pink"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E76363"
                                                                                                data-event="backColor"
                                                                                                data-value="#E76363"
                                                                                                title=""
                                                                                                aria-label="Mandy"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Mandy"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#F7AD6B"
                                                                                                data-event="backColor"
                                                                                                data-value="#F7AD6B"
                                                                                                title=""
                                                                                                aria-label="Rajah"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Rajah"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFD663"
                                                                                                data-event="backColor"
                                                                                                data-value="#FFD663"
                                                                                                title=""
                                                                                                aria-label="Dandelion"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Dandelion"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#94BD7B"
                                                                                                data-event="backColor"
                                                                                                data-value="#94BD7B"
                                                                                                title=""
                                                                                                aria-label="Olivine"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Olivine"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#73A5AD"
                                                                                                data-event="backColor"
                                                                                                data-value="#73A5AD"
                                                                                                title=""
                                                                                                aria-label="Gulf Stream"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Gulf Stream"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#6BADDE"
                                                                                                data-event="backColor"
                                                                                                data-value="#6BADDE"
                                                                                                title=""
                                                                                                aria-label="Viking"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Viking"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#8C7BC6"
                                                                                                data-event="backColor"
                                                                                                data-value="#8C7BC6"
                                                                                                title=""
                                                                                                aria-label="Blue Marguerite"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Blue Marguerite"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#C67BA5"
                                                                                                data-event="backColor"
                                                                                                data-value="#C67BA5"
                                                                                                title=""
                                                                                                aria-label="Puce"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Puce"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CE0000"
                                                                                                data-event="backColor"
                                                                                                data-value="#CE0000"
                                                                                                title=""
                                                                                                aria-label="Guardsman Red"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Guardsman Red"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E79439"
                                                                                                data-event="backColor"
                                                                                                data-value="#E79439"
                                                                                                title=""
                                                                                                aria-label="Fire Bush"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Fire Bush"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#EFC631"
                                                                                                data-event="backColor"
                                                                                                data-value="#EFC631"
                                                                                                title=""
                                                                                                aria-label="Golden Dream"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Golden Dream"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#6BA54A"
                                                                                                data-event="backColor"
                                                                                                data-value="#6BA54A"
                                                                                                title=""
                                                                                                aria-label="Chelsea Cucumber"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Chelsea Cucumber"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#4A7B8C"
                                                                                                data-event="backColor"
                                                                                                data-value="#4A7B8C"
                                                                                                title=""
                                                                                                aria-label="Smalt Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Smalt Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#3984C6"
                                                                                                data-event="backColor"
                                                                                                data-value="#3984C6"
                                                                                                title=""
                                                                                                aria-label="Boston Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Boston Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#634AA5"
                                                                                                data-event="backColor"
                                                                                                data-value="#634AA5"
                                                                                                title=""
                                                                                                aria-label="Butterfly Bush"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Butterfly Bush"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#A54A7B"
                                                                                                data-event="backColor"
                                                                                                data-value="#A54A7B"
                                                                                                title=""
                                                                                                aria-label="Cadillac"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Cadillac"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9C0000"
                                                                                                data-event="backColor"
                                                                                                data-value="#9C0000"
                                                                                                title=""
                                                                                                aria-label="Sangria"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Sangria"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#B56308"
                                                                                                data-event="backColor"
                                                                                                data-value="#B56308"
                                                                                                title=""
                                                                                                aria-label="Mai Tai"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Mai Tai"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#BD9400"
                                                                                                data-event="backColor"
                                                                                                data-value="#BD9400"
                                                                                                title=""
                                                                                                aria-label="Buddha Gold"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Buddha Gold"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#397B21"
                                                                                                data-event="backColor"
                                                                                                data-value="#397B21"
                                                                                                title=""
                                                                                                aria-label="Forest Green"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Forest Green"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#104A5A"
                                                                                                data-event="backColor"
                                                                                                data-value="#104A5A"
                                                                                                title=""
                                                                                                aria-label="Eden"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Eden"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#085294"
                                                                                                data-event="backColor"
                                                                                                data-value="#085294"
                                                                                                title=""
                                                                                                aria-label="Venice Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Venice Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#311873"
                                                                                                data-event="backColor"
                                                                                                data-value="#311873"
                                                                                                title=""
                                                                                                aria-label="Meteorite"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Meteorite"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#731842"
                                                                                                data-event="backColor"
                                                                                                data-value="#731842"
                                                                                                title=""
                                                                                                aria-label="Claret"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Claret"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#630000"
                                                                                                data-event="backColor"
                                                                                                data-value="#630000"
                                                                                                title=""
                                                                                                aria-label="Rosewood"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Rosewood"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#7B3900"
                                                                                                data-event="backColor"
                                                                                                data-value="#7B3900"
                                                                                                title=""
                                                                                                aria-label="Cinnamon"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Cinnamon"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#846300"
                                                                                                data-event="backColor"
                                                                                                data-value="#846300"
                                                                                                title=""
                                                                                                aria-label="Olive"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Olive"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#295218"
                                                                                                data-event="backColor"
                                                                                                data-value="#295218"
                                                                                                title=""
                                                                                                aria-label="Parsley"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Parsley"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#083139"
                                                                                                data-event="backColor"
                                                                                                data-value="#083139"
                                                                                                title=""
                                                                                                aria-label="Tiber"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Tiber"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#003163"
                                                                                                data-event="backColor"
                                                                                                data-value="#003163"
                                                                                                title=""
                                                                                                aria-label="Midnight Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Midnight Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#21104A"
                                                                                                data-event="backColor"
                                                                                                data-value="#21104A"
                                                                                                title=""
                                                                                                aria-label="Valentino"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Valentino"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#4A1031"
                                                                                                data-event="backColor"
                                                                                                data-value="#4A1031"
                                                                                                title=""
                                                                                                aria-label="Loulou"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Loulou"></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="note-palette">
                                                                                <div class="note-palette-title">
                                                                                    Warna font</div>
                                                                                <div> <button type="button"
                                                                                        class="note-color-reset btn btn-light"
                                                                                        data-event="removeFormat"
                                                                                        data-value="foreColor">Kembalikan
                                                                                        kesemula </button>
                                                                                </div>
                                                                                <div class="note-holder"
                                                                                    data-event="foreColor">
                                                                                    <div class="note-color-palette">
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#000000"
                                                                                                data-event="foreColor"
                                                                                                data-value="#000000"
                                                                                                title=""
                                                                                                aria-label="Black"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Black"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#424242"
                                                                                                data-event="foreColor"
                                                                                                data-value="#424242"
                                                                                                title=""
                                                                                                aria-label="Tundora"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Tundora"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#636363"
                                                                                                data-event="foreColor"
                                                                                                data-value="#636363"
                                                                                                title=""
                                                                                                aria-label="Dove Gray"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Dove Gray"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9C9C94"
                                                                                                data-event="foreColor"
                                                                                                data-value="#9C9C94"
                                                                                                title=""
                                                                                                aria-label="Star Dust"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Star Dust"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CEC6CE"
                                                                                                data-event="foreColor"
                                                                                                data-value="#CEC6CE"
                                                                                                title=""
                                                                                                aria-label="Pale Slate"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Pale Slate"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#EFEFEF"
                                                                                                data-event="foreColor"
                                                                                                data-value="#EFEFEF"
                                                                                                title=""
                                                                                                aria-label="Gallery"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Gallery"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#F7F7F7"
                                                                                                data-event="foreColor"
                                                                                                data-value="#F7F7F7"
                                                                                                title=""
                                                                                                aria-label="Alabaster"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Alabaster"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFFFFF"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FFFFFF"
                                                                                                title=""
                                                                                                aria-label="White"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="White"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FF0000"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FF0000"
                                                                                                title=""
                                                                                                aria-label="Red"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Red"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FF9C00"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FF9C00"
                                                                                                title=""
                                                                                                aria-label="Orange Peel"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Orange Peel"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFFF00"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FFFF00"
                                                                                                title=""
                                                                                                aria-label="Yellow"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Yellow"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#00FF00"
                                                                                                data-event="foreColor"
                                                                                                data-value="#00FF00"
                                                                                                title=""
                                                                                                aria-label="Green"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Green"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#00FFFF"
                                                                                                data-event="foreColor"
                                                                                                data-value="#00FFFF"
                                                                                                title=""
                                                                                                aria-label="Cyan"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Cyan"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#0000FF"
                                                                                                data-event="foreColor"
                                                                                                data-value="#0000FF"
                                                                                                title=""
                                                                                                aria-label="Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9C00FF"
                                                                                                data-event="foreColor"
                                                                                                data-value="#9C00FF"
                                                                                                title=""
                                                                                                aria-label="Electric Violet"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Electric Violet"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FF00FF"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FF00FF"
                                                                                                title=""
                                                                                                aria-label="Magenta"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Magenta"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#F7C6CE"
                                                                                                data-event="foreColor"
                                                                                                data-value="#F7C6CE"
                                                                                                title=""
                                                                                                aria-label="Azalea"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Azalea"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFE7CE"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FFE7CE"
                                                                                                title=""
                                                                                                aria-label="Karry"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Karry"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFEFC6"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FFEFC6"
                                                                                                title=""
                                                                                                aria-label="Egg White"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Egg White"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#D6EFD6"
                                                                                                data-event="foreColor"
                                                                                                data-value="#D6EFD6"
                                                                                                title=""
                                                                                                aria-label="Zanah"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Zanah"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CEDEE7"
                                                                                                data-event="foreColor"
                                                                                                data-value="#CEDEE7"
                                                                                                title=""
                                                                                                aria-label="Botticelli"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Botticelli"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CEE7F7"
                                                                                                data-event="foreColor"
                                                                                                data-value="#CEE7F7"
                                                                                                title=""
                                                                                                aria-label="Tropical Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Tropical Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#D6D6E7"
                                                                                                data-event="foreColor"
                                                                                                data-value="#D6D6E7"
                                                                                                title=""
                                                                                                aria-label="Mischka"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Mischka"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E7D6DE"
                                                                                                data-event="foreColor"
                                                                                                data-value="#E7D6DE"
                                                                                                title=""
                                                                                                aria-label="Twilight"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Twilight"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E79C9C"
                                                                                                data-event="foreColor"
                                                                                                data-value="#E79C9C"
                                                                                                title=""
                                                                                                aria-label="Tonys Pink"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Tonys Pink"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFC69C"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FFC69C"
                                                                                                title=""
                                                                                                aria-label="Peach Orange"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Peach Orange"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFE79C"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FFE79C"
                                                                                                title=""
                                                                                                aria-label="Cream Brulee"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Cream Brulee"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#B5D6A5"
                                                                                                data-event="foreColor"
                                                                                                data-value="#B5D6A5"
                                                                                                title=""
                                                                                                aria-label="Sprout"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Sprout"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#A5C6CE"
                                                                                                data-event="foreColor"
                                                                                                data-value="#A5C6CE"
                                                                                                title=""
                                                                                                aria-label="Casper"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Casper"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9CC6EF"
                                                                                                data-event="foreColor"
                                                                                                data-value="#9CC6EF"
                                                                                                title=""
                                                                                                aria-label="Perano"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Perano"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#B5A5D6"
                                                                                                data-event="foreColor"
                                                                                                data-value="#B5A5D6"
                                                                                                title=""
                                                                                                aria-label="Cold Purple"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Cold Purple"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#D6A5BD"
                                                                                                data-event="foreColor"
                                                                                                data-value="#D6A5BD"
                                                                                                title=""
                                                                                                aria-label="Careys Pink"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Careys Pink"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E76363"
                                                                                                data-event="foreColor"
                                                                                                data-value="#E76363"
                                                                                                title=""
                                                                                                aria-label="Mandy"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Mandy"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#F7AD6B"
                                                                                                data-event="foreColor"
                                                                                                data-value="#F7AD6B"
                                                                                                title=""
                                                                                                aria-label="Rajah"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Rajah"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFD663"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FFD663"
                                                                                                title=""
                                                                                                aria-label="Dandelion"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Dandelion"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#94BD7B"
                                                                                                data-event="foreColor"
                                                                                                data-value="#94BD7B"
                                                                                                title=""
                                                                                                aria-label="Olivine"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Olivine"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#73A5AD"
                                                                                                data-event="foreColor"
                                                                                                data-value="#73A5AD"
                                                                                                title=""
                                                                                                aria-label="Gulf Stream"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Gulf Stream"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#6BADDE"
                                                                                                data-event="foreColor"
                                                                                                data-value="#6BADDE"
                                                                                                title=""
                                                                                                aria-label="Viking"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Viking"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#8C7BC6"
                                                                                                data-event="foreColor"
                                                                                                data-value="#8C7BC6"
                                                                                                title=""
                                                                                                aria-label="Blue Marguerite"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Blue Marguerite"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#C67BA5"
                                                                                                data-event="foreColor"
                                                                                                data-value="#C67BA5"
                                                                                                title=""
                                                                                                aria-label="Puce"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Puce"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CE0000"
                                                                                                data-event="foreColor"
                                                                                                data-value="#CE0000"
                                                                                                title=""
                                                                                                aria-label="Guardsman Red"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Guardsman Red"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E79439"
                                                                                                data-event="foreColor"
                                                                                                data-value="#E79439"
                                                                                                title=""
                                                                                                aria-label="Fire Bush"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Fire Bush"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#EFC631"
                                                                                                data-event="foreColor"
                                                                                                data-value="#EFC631"
                                                                                                title=""
                                                                                                aria-label="Golden Dream"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Golden Dream"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#6BA54A"
                                                                                                data-event="foreColor"
                                                                                                data-value="#6BA54A"
                                                                                                title=""
                                                                                                aria-label="Chelsea Cucumber"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Chelsea Cucumber"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#4A7B8C"
                                                                                                data-event="foreColor"
                                                                                                data-value="#4A7B8C"
                                                                                                title=""
                                                                                                aria-label="Smalt Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Smalt Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#3984C6"
                                                                                                data-event="foreColor"
                                                                                                data-value="#3984C6"
                                                                                                title=""
                                                                                                aria-label="Boston Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Boston Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#634AA5"
                                                                                                data-event="foreColor"
                                                                                                data-value="#634AA5"
                                                                                                title=""
                                                                                                aria-label="Butterfly Bush"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Butterfly Bush"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#A54A7B"
                                                                                                data-event="foreColor"
                                                                                                data-value="#A54A7B"
                                                                                                title=""
                                                                                                aria-label="Cadillac"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Cadillac"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9C0000"
                                                                                                data-event="foreColor"
                                                                                                data-value="#9C0000"
                                                                                                title=""
                                                                                                aria-label="Sangria"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Sangria"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#B56308"
                                                                                                data-event="foreColor"
                                                                                                data-value="#B56308"
                                                                                                title=""
                                                                                                aria-label="Mai Tai"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Mai Tai"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#BD9400"
                                                                                                data-event="foreColor"
                                                                                                data-value="#BD9400"
                                                                                                title=""
                                                                                                aria-label="Buddha Gold"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Buddha Gold"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#397B21"
                                                                                                data-event="foreColor"
                                                                                                data-value="#397B21"
                                                                                                title=""
                                                                                                aria-label="Forest Green"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Forest Green"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#104A5A"
                                                                                                data-event="foreColor"
                                                                                                data-value="#104A5A"
                                                                                                title=""
                                                                                                aria-label="Eden"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Eden"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#085294"
                                                                                                data-event="foreColor"
                                                                                                data-value="#085294"
                                                                                                title=""
                                                                                                aria-label="Venice Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Venice Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#311873"
                                                                                                data-event="foreColor"
                                                                                                data-value="#311873"
                                                                                                title=""
                                                                                                aria-label="Meteorite"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Meteorite"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#731842"
                                                                                                data-event="foreColor"
                                                                                                data-value="#731842"
                                                                                                title=""
                                                                                                aria-label="Claret"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Claret"></button>
                                                                                        </div>
                                                                                        <div class="note-color-row">
                                                                                            <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#630000"
                                                                                                data-event="foreColor"
                                                                                                data-value="#630000"
                                                                                                title=""
                                                                                                aria-label="Rosewood"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Rosewood"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#7B3900"
                                                                                                data-event="foreColor"
                                                                                                data-value="#7B3900"
                                                                                                title=""
                                                                                                aria-label="Cinnamon"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Cinnamon"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#846300"
                                                                                                data-event="foreColor"
                                                                                                data-value="#846300"
                                                                                                title=""
                                                                                                aria-label="Olive"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Olive"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#295218"
                                                                                                data-event="foreColor"
                                                                                                data-value="#295218"
                                                                                                title=""
                                                                                                aria-label="Parsley"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Parsley"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#083139"
                                                                                                data-event="foreColor"
                                                                                                data-value="#083139"
                                                                                                title=""
                                                                                                aria-label="Tiber"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Tiber"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#003163"
                                                                                                data-event="foreColor"
                                                                                                data-value="#003163"
                                                                                                title=""
                                                                                                aria-label="Midnight Blue"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Midnight Blue"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#21104A"
                                                                                                data-event="foreColor"
                                                                                                data-value="#21104A"
                                                                                                title=""
                                                                                                aria-label="Valentino"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Valentino"></button><button
                                                                                                type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#4A1031"
                                                                                                data-event="foreColor"
                                                                                                data-value="#4A1031"
                                                                                                title=""
                                                                                                aria-label="Loulou"
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="Loulou"></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="note-btn-group btn-group note-para">
                                                                    <button type="button"
                                                                        class="note-btn btn btn-default btn-sm"
                                                                        role="button" tabindex="-1" title=""
                                                                        aria-label="Pencacahan (CTRL+SHIFT+NUM7)"
                                                                        data-original-title="Pencacahan (CTRL+SHIFT+NUM7)"><i
                                                                            class="note-icon-unorderedlist"></i></button><button
                                                                        type="button"
                                                                        class="note-btn btn btn-default btn-sm"
                                                                        role="button" tabindex="-1" title=""
                                                                        aria-label="Penomoran (CTRL+SHIFT+NUM8)"
                                                                        data-original-title="Penomoran (CTRL+SHIFT+NUM8)"><i
                                                                            class="note-icon-orderedlist"></i></button>
                                                                    <div class="note-btn-group btn-group">
                                                                        <button type="button"
                                                                            class="note-btn btn btn-default btn-sm dropdown-toggle"
                                                                            role="button" tabindex="-1"
                                                                            data-toggle="dropdown" title=""
                                                                            aria-label="Paragraf"
                                                                            data-original-title="Paragraf"><i
                                                                                class="note-icon-align-left"></i>
                                                                            <span
                                                                                class="note-icon-caret"></span></button>
                                                                        <ul class="dropdown-menu" role="list">
                                                                            <div
                                                                                class="note-btn-group btn-group note-align">
                                                                                <button type="button"
                                                                                    class="note-btn btn btn-default btn-sm"
                                                                                    role="button" tabindex="-1" title=""
                                                                                    aria-label="Rata kiri (CTRL+SHIFT+L)"
                                                                                    data-original-title="Rata kiri (CTRL+SHIFT+L)"><i
                                                                                        class="note-icon-align-left"></i></button><button
                                                                                    type="button"
                                                                                    class="note-btn btn btn-default btn-sm"
                                                                                    role="button" tabindex="-1" title=""
                                                                                    aria-label="Rata tengah (CTRL+SHIFT+E)"
                                                                                    data-original-title="Rata tengah (CTRL+SHIFT+E)"><i
                                                                                        class="note-icon-align-center"></i></button><button
                                                                                    type="button"
                                                                                    class="note-btn btn btn-default btn-sm"
                                                                                    role="button" tabindex="-1" title=""
                                                                                    aria-label="Rata kanan (CTRL+SHIFT+R)"
                                                                                    data-original-title="Rata kanan (CTRL+SHIFT+R)"><i
                                                                                        class="note-icon-align-right"></i></button><button
                                                                                    type="button"
                                                                                    class="note-btn btn btn-default btn-sm"
                                                                                    role="button" tabindex="-1" title=""
                                                                                    aria-label="Rata kanan kiri (CTRL+SHIFT+J)"
                                                                                    data-original-title="Rata kanan kiri (CTRL+SHIFT+J)"><i
                                                                                        class="note-icon-align-justify"></i></button>
                                                                            </div>
                                                                            <div
                                                                                class="note-btn-group btn-group note-list">
                                                                                <button type="button"
                                                                                    class="note-btn btn btn-default btn-sm"
                                                                                    role="button" tabindex="-1" title=""
                                                                                    aria-label="Outdent (CTRL+[)"
                                                                                    data-original-title="Outdent (CTRL+[)"><i
                                                                                        class="note-icon-align-outdent"></i></button><button
                                                                                    type="button"
                                                                                    class="note-btn btn btn-default btn-sm"
                                                                                    role="button" tabindex="-1" title=""
                                                                                    aria-label="Indent (CTRL+])"
                                                                                    data-original-title="Indent (CTRL+])"><i
                                                                                        class="note-icon-align-indent"></i></button>
                                                                            </div>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="note-btn-group btn-group note-height">
                                                                    <div class="note-btn-group btn-group">
                                                                        <button type="button"
                                                                            class="note-btn btn btn-default btn-sm dropdown-toggle"
                                                                            role="button" tabindex="-1"
                                                                            data-toggle="dropdown" title=""
                                                                            aria-label="Jarak baris"
                                                                            data-original-title="Jarak baris"><i
                                                                                class="note-icon-text-height"></i>
                                                                            <span
                                                                                class="note-icon-caret"></span></button>
                                                                        <ul class="dropdown-menu note-check dropdown-line-height"
                                                                            role="list" aria-label="Jarak baris">
                                                                            <li role="listitem" aria-label="1.0"><a
                                                                                    href="#" data-value="1.0"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    1.0</a></li>
                                                                            <li role="listitem" aria-label="1.2"><a
                                                                                    href="#" data-value="1.2"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    1.2</a></li>
                                                                            <li role="listitem" aria-label="1.4"><a
                                                                                    href="#" data-value="1.4"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    1.4</a></li>
                                                                            <li role="listitem" aria-label="1.5"><a
                                                                                    href="#" data-value="1.5"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    1.5</a></li>
                                                                            <li role="listitem" aria-label="1.6"><a
                                                                                    href="#" data-value="1.6"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    1.6</a></li>
                                                                            <li role="listitem" aria-label="1.8"><a
                                                                                    href="#" data-value="1.8"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    1.8</a></li>
                                                                            <li role="listitem" aria-label="2.0"><a
                                                                                    href="#" data-value="2.0"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    2.0</a></li>
                                                                            <li role="listitem" aria-label="3.0"><a
                                                                                    href="#" data-value="3.0"><i
                                                                                        class="note-icon-menu-check"></i>
                                                                                    3.0</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="note-btn-group btn-group note-insert">
                                                                    <button type="button"
                                                                        class="note-btn btn btn-default btn-sm"
                                                                        role="button" tabindex="-1" title=""
                                                                        aria-label="Masukkan garis horizontal (CTRL+ENTER)"
                                                                        data-original-title="Masukkan garis horizontal (CTRL+ENTER)"><i
                                                                            class="note-icon-minus"></i></button>
                                                                </div>
                                                                <div class="note-btn-group btn-group note-table">
                                                                    <div class="note-btn-group btn-group">
                                                                        <button type="button"
                                                                            class="note-btn btn btn-default btn-sm dropdown-toggle"
                                                                            role="button" tabindex="-1"
                                                                            data-toggle="dropdown" title=""
                                                                            aria-label="Tabel"
                                                                            data-original-title="Tabel"><i
                                                                                class="note-icon-table"></i>
                                                                            <span
                                                                                class="note-icon-caret"></span></button>
                                                                        <ul class="dropdown-menu note-table" role="list"
                                                                            aria-label="Tabel">
                                                                            <div class="note-dimension-picker">
                                                                                <div class="note-dimension-picker-mousecatcher"
                                                                                    data-event="insertTable"
                                                                                    data-value="1x1"
                                                                                    style="width: 10em; height: 10em;">
                                                                                </div>
                                                                                <div
                                                                                    class="note-dimension-picker-highlighted">
                                                                                </div>
                                                                                <div
                                                                                    class="note-dimension-picker-unhighlighted">
                                                                                </div>
                                                                            </div>
                                                                            <div class="note-dimension-display">
                                                                                1 x 1</div>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="note-editing-area">
                                                            <div class="note-handle">
                                                                <div class="note-control-selection">
                                                                    <div class="note-control-selection-bg">
                                                                    </div>
                                                                    <div class="note-control-holder note-control-nw">
                                                                    </div>
                                                                    <div class="note-control-holder note-control-ne">
                                                                    </div>
                                                                    <div class="note-control-holder note-control-sw">
                                                                    </div>
                                                                    <div class="note-control-sizing note-control-se">
                                                                    </div>
                                                                    <div class="note-control-selection-info">
                                                                    </div>
                                                                </div>
                                                            </div><textarea class="note-codable" role="textbox"
                                                                aria-multiline="true"></textarea>
                                                            <div class="note-editable" contenteditable="true"
                                                                role="textbox" aria-multiline="true"
                                                                style="height: 250px;">
                                                                <p><br></p>
                                                            </div>
                                                        </div><output class="note-status-output"
                                                            aria-live="polite"></output>
                                                        <div class="note-statusbar" role="status">
                                                            <div class="note-resizebar" role="seperator"
                                                                aria-orientation="horizontal" aria-label="Resize">
                                                                <div class="note-icon-bar"></div>
                                                                <div class="note-icon-bar"></div>
                                                                <div class="note-icon-bar"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="row py-4" style="border-top: 2px dashed #46C4BF;">
                                                <div class="col-6 text-left">
                                                    <button type="button"
                                                        class="btn btn-outline-warning m-btn--pill btn-cancel">
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
                            <div class="row">
                                <div class="col-12 px-0">
                                    <div class="row">
                                        <div class="group-link-business-line "></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="collapse" id="link-menu-14693">
                    <div class="link-menu-items">
                        <ul class="nav" role="tablist" style="overflow-y: hidden;display: block;white-space: nowrap;">
                            <li class="nav-item d-inline-block">
                                <a class="nav-link active" data-toggle="tab" href="#" data-target="#tab_general_14693">
                                    <span>Umum</span>
                                </a>
                            </li>
                            <li class="nav-item d-inline-block">
                                <a class="nav-link" data-toggle="tab" href="#" data-target="#tab_thumbnail_14693">
                                    <span>Ikon</span>
                                </a>
                            </li>
                            <li class="nav-item d-inline-block">
                                <a class="nav-link" data-toggle="tab" href="#" data-target="#tab_color_14693">
                                    <span>Warna Link</span>
                                </a>
                            </li>
                        </ul>
                        <form class="m-form form-edit-group-link"
                            action="https://berbagi.link/admin/berbagi_link/group_link/update/14693" method="POST"
                            id="form-update-link-14693" enctype="multipart/form-data">
                            <div class="menu-items tab-content mb-4">
                                <div class="tab-pane active" id="tab_general_14693" role="tabpanel">
                                    <div class="form-group m-form__group">
                                        <label class="form-control-label" for="name">
                                            Judul
                                        </label>
                                        <input type="text" class="form-control m-input required" id="title-14693"
                                            value="Facebook" placeholder="Judul..." name="title">
                                    </div>
                                    <input type="hidden" name="_token" value="XOMV1jhIHHHho4rWXvgoHITKo50tYm29TdHdKBo0">
                                    <div class="form-group m-form__group">
                                        <label class="form-control-label">
                                            Links
                                        </label>
                                        <select class="form-control edit-links select2-hidden-accessible"
                                            id="links-14693" style="width: 100%;" value="" name="links[]" multiple=""
                                            data-select2-id="links-14693" tabindex="-1" aria-hidden="true">
                                            <option value="12850" selected="" data-select2-id="13">
                                                Whatsapp
                                            </option>
                                        </select><span class="select2 select2-container select2-container--default"
                                            dir="ltr" data-select2-id="14" style="width: 100%;"><span
                                                class="selection"><span
                                                    class="select2-selection select2-selection--multiple"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="-1">
                                                    <ul class="select2-selection__rendered">
                                                        <li class="select2-selection__choice" title="
                                Whatsapp
                            " data-select2-id="15"><span class="select2-selection__choice__remove"
                                                                role="presentation">×</span>
                                                            Whatsapp
                                                        </li>
                                                        <li class="select2-search select2-search--inline">
                                                            <input class="select2-search__field" type="search"
                                                                tabindex="0" autocomplete="off" autocorrect="off"
                                                                autocapitalize="none" spellcheck="false" role="textbox"
                                                                aria-autocomplete="list" placeholder=""
                                                                style="width: 0.75em;">
                                                        </li>
                                                    </ul>
                                                </span></span><span class="dropdown-wrapper"
                                                aria-hidden="true"></span></span>
                                    </div>
                                    <i style="font-size: 11px;">**Tidak semua tema
                                        mendukung fitur grup link ini.</i>
                                </div>
                                <div class="tab-pane" id="tab_thumbnail_14693" role="tabpanel">
                                    <div class="form-group m-form__group position-relative mt-4 pt-0 pb-2 text-center">
                                        <label class="form-control-label" for="scedule-70" style="color: #747679;">Ganti
                                            ikon
                                            sesuai keinginan anda</label>
                                    </div>
                                    <div class="mt-0 pt-0">
                                        <div class="text-center">
                                            <div class="container-link-thumbnail">
                                                <img class="thumbnail-preview"
                                                    src="https://berbagi.link/admin/get_file/115cbef0439e11ed9c875bdbab10026f_9825.png">
                                                <input name="thumbnail" type="hidden" value="" class="thumbnail-input">
                                                <div class="shadow-avatar load-modal"
                                                    data-href="https://berbagi.link/admin/berbagi_link/image/link-item-admin-14693">
                                                    <i class="fa fa-upload"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center container-remove-thumbnail" style="display:block">
                                            <input name="thumbnail_remove" type="hidden" value="0"
                                                class="thumbnail_remove-input">
                                            <span class="remove-thumbnail">Hapus</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_color_14693" role="tabpanel">
                                    <div class="form-group m-form__group position-relative mt-4 pt-0 pb-2 text-center">
                                        <label class="form-control-label" for="scedule-70" style="color: #747679;">
                                            Ubah warna per link, sesuai yang anda
                                            inginkan
                                        </label>
                                    </div>
                                    <div class="form-group m-form__group position-relative mt-0 pt-0">
                                        <label class="form-control-label" for="color-14693">
                                            Ubah Warna
                                        </label>
                                        <label class="switch">
                                            <input type="checkbox" id="color-14693" name="change_color" value="1">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="form-color-picker collapse ">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="custom" class="col-form-label" style="min-height: 57px">
                                                        Warna Tombol
                                                    </label>
                                                    <div class="position-relative custom-container">
                                                        <input class="form-control color-picker" autocomplete="off"
                                                            maxlength="7" name="button_color" type="text"
                                                            value="#000000" style="display: none;">
                                                        <div class="sp-replacer sp-light">
                                                            <div class="sp-preview">
                                                                <div class="sp-preview-inner"
                                                                    style="background-color: rgb(0, 0, 0);">
                                                                </div>
                                                            </div>
                                                            <div class="sp-dd">▼
                                                            </div>
                                                        </div>
                                                        <div class="sp-replacer sp-light">
                                                            <div class="sp-preview">
                                                                <div class="sp-preview-inner"
                                                                    style="background-color: rgb(0, 0, 0);">
                                                                </div>
                                                            </div>
                                                            <div class="sp-dd">▼
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="custom" class="col-form-label" style="min-height: 57px">
                                                        Warna Teks Tombol
                                                    </label>
                                                    <div class="position-relative custom-container">
                                                        <input class="form-control color-picker" autocomplete="off"
                                                            maxlength="7" name="button_text_color" type="text"
                                                            value="#000000" style="display: none;">
                                                        <div class="sp-replacer sp-light">
                                                            <div class="sp-preview">
                                                                <div class="sp-preview-inner"
                                                                    style="background-color: rgb(0, 0, 0);">
                                                                </div>
                                                            </div>
                                                            <div class="sp-dd">▼
                                                            </div>
                                                        </div>
                                                        <div class="sp-replacer sp-light">
                                                            <div class="sp-preview">
                                                                <div class="sp-preview-inner"
                                                                    style="background-color: rgb(0, 0, 0);">
                                                                </div>
                                                            </div>
                                                            <div class="sp-dd">▼
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="custom" class="col-form-label" style="min-height: 57px">
                                                        Warna Garis
                                                    </label>
                                                    <div class="position-relative custom-container">
                                                        <input class="form-control color-picker" autocomplete="off"
                                                            maxlength="7" name="button_border_color" type="text"
                                                            value="#000000" style="display: none;">
                                                        <div class="sp-replacer sp-light">
                                                            <div class="sp-preview">
                                                                <div class="sp-preview-inner"
                                                                    style="background-color: rgb(0, 0, 0);">
                                                                </div>
                                                            </div>
                                                            <div class="sp-dd">▼
                                                            </div>
                                                        </div>
                                                        <div class="sp-replacer sp-light">
                                                            <div class="sp-preview">
                                                                <div class="sp-preview-inner"
                                                                    style="background-color: rgb(0, 0, 0);">
                                                                </div>
                                                            </div>
                                                            <div class="sp-dd">▼
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-4" style="border-top: 1px solid #9b8f8f;">
                                <div class="col-6 text-left">
                                    <button type="button" class="btn btn-outline-danger m-btn--pill btn-delete-link"
                                        data-href="https://berbagi.link/admin/berbagi_link/delete/14693">
                                        Hapus
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
</div>
<div class="collapse" id="link-menu-12850">
    <div class="link-menu-items">
        <ul class="nav" role="tablist" style="overflow-y: hidden;display: block;white-space: nowrap;">
            <li class="nav-item d-inline-block">
                <a class="nav-link active" data-toggle="tab" href="#" data-target="#tab_general_12850">
                    <span>Umum</span>
                </a>
            </li>
            <li class="nav-item d-inline-block position-relative">
                <a class="nav-link" data-toggle="tab" href="#" data-target="#tab_sublink_12850">
                    <span>Sublink</span>
                    <div class="badge badge-info badge-new" style="
                            position: absolute;
                            top: 2px;
                            left: 31px;
                            z-index: 10;
                            font-size: 8px;
                            padding: 0.2em 0.4em;
                        ">NEW</div>
                </a>
            </li>
            <li class="nav-item d-inline-block">
                <a class="nav-link" data-toggle="tab" href="#" data-target="#tab_color_12850">
                    <span>Warna Link</span>
                </a>
            </li>
            <li class="nav-item d-inline-block">
                <a class="nav-link" data-toggle="tab" href="#" data-target="#tab_thumbnail_12850">
                    <span>Ikon</span>
                </a>
            </li>
            <li class="nav-item d-inline-block">
                <a class="nav-link" data-toggle="tab" href="#" data-target="#tab_scheduling_12850">
                    <span>Penjadwalan</span>
                </a>
            </li>
            <li class="nav-item d-inline-block">
                <a class="nav-link" data-toggle="tab" href="#" data-target="#tab_animation_12850">
                    <span>Animasi</span>
                </a>
            </li>
            <li class="nav-item d-inline-block">
                <a class="nav-link" data-toggle="tab" href="#" data-target="#tab_redirect_12850">
                    <span>Arahkan</span>
                </a>
            </li>
        </ul>
        <form class="m-form form-edit-link" action="https://berbagi.link/admin/berbagi_link/update/12850" method="POST"
            id="form-update-link-12850" enctype="multipart/form-data">
            <div class="menu-items tab-content mb-4">
                <div class="tab-pane active" id="tab_general_12850" role="tabpanel">
                    <div class="form-group m-form__group">
                        <label class="form-control-label" for="name">
                            Judul
                        </label>
                        <input type="text" class="form-control m-input required" id="title-12850" value="Whatsapp"
                            placeholder="Judul..." name="title">
                    </div>
                    <div class="form-group m-form__group position-relative">
                        <label class="form-control-label" for="is_active-12850">
                            Tampilkan Link
                        </label>
                        <label class="switch" style="top: 17px;">
                            <input type="checkbox" id="is_active-12850" name="is_active" value="1" checked="">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="form-group m-form__group position-relative">
                        <label class="form-control-label" for="group_type-12850">
                            Tipe
                        </label>
                        <div class="badge badge-info badge-new" style="
                            position: absolute;
                            top: 7px;
                            left: 20px;
                            z-index: 10;
                            font-size: 8px;
                            padding: 0.2em 0.4em;
                        ">NEW</div>
                        <select class="form-control edit-group_type select2-hidden-accessible" style="width: 100%;"
                            id="group_type-12850" value="" name="group_type" data-select2-id="group_type-12850"
                            tabindex="-1" aria-hidden="true">
                            <option value="creative_design" data-icon="fas fa-paint-brush">
                                CREATIVE &amp; DESIGN
                            </option>
                            <option value="crowdfunding" data-icon="fa fa-heart">
                                CROWDFUNDING
                            </option>
                            <option value="informasi" data-icon="fa fa-address-card">
                                INFORMASI
                            </option>
                            <option value="marketplace" data-icon="fas fa-shopping-bag">
                                MARKETPLACE
                            </option>
                            <option value="media_sosial" selected="" data-icon="fa fa-users" data-select2-id="8">
                                MEDIA SOSIAL
                            </option>
                            <option value="payment" data-icon="fas fa-dollar-sign">
                                PAYMENT
                            </option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="7" style="width: 100%;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-group_type-12850-container"><span
                                        class="select2-selection__rendered" id="select2-group_type-12850-container"
                                        role="textbox" aria-readonly="true" title="
                                MEDIA SOSIAL
                            "><span><i style="margin-right: 10px;color: #46C4BF;" class="fa fa-users" width="45px">
                                            </i>
                                            MEDIA SOSIAL
                                        </span></span><span class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                aria-hidden="true"></span></span>
                    </div>
                    <div class="form-group m-form__group form-link-set-type position-relative">
                        <label class="form-control-label" for="type-12850">
                            Jenis
                        </label>
                        <div class="badge badge-info badge-new" style="
                            position: absolute;
                            top: 7px;
                            left: 25px;
                            z-index: 10;
                            font-size: 8px;
                            padding: 0.2em 0.4em;
                        ">NEW</div>
                        <select class="form-control edit-type select2-hidden-accessible" style="width: 100%;"
                            id="type-12850" value="" name="type" data-select2-id="type-12850" tabindex="-1"
                            aria-hidden="true">
                            <option value="whatsapp" data-icon="https://berbagi.link/images/type_link/whatsapp.png"
                                selected="" data-select2-id="9">
                                WHATSAPP
                            </option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="10" style="width: 100%;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-type-12850-container"><span
                                        class="select2-selection__rendered" id="select2-type-12850-container"
                                        role="textbox" aria-readonly="true" title="
                                WHATSAPP
                            "><span class="state-type-per-link-container state-type-per-link-whatsapp"><span
                                                class="state-type-per-link-img-container"><img
                                                    class="state-type-per-link-img"
                                                    src="https://berbagi.link/images/type_link/whatsapp.png"></span><span
                                                class="state-type-per-link-text">
                                                WHATSAPP
                                            </span></span></span><span class="select2-selection__arrow"
                                        role="presentation"><b role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                    <div class="form-link-type pt-3" style="">
                        <div class="form-group m-form__group form-link-value">
                            <label class="form-control-label lbl-link_value" for="link_value-12850">Nomor</label>
                            <div class="edit-form-control-link_value-container">
                                <div class="form-phone_code-container" style="display: block;">
                                    <select
                                        class="form-control form-phone_code edit-phone_code select2-hidden-accessible"
                                        style="width: 100%;" id="phone_code-12850" value="" name="phone_code"
                                        data-select2-id="phone_code-12850" tabindex="-1" aria-hidden="true">
                                        <option value="62" selected="" data-select2-id="11">62
                                            - Indonesia</option>
                                    </select><span class="select2 select2-container select2-container--default"
                                        dir="ltr" data-select2-id="12" style="width: 100%;"><span
                                            class="selection"><span class="select2-selection select2-selection--single"
                                                role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                aria-labelledby="select2-phone_code-12850-container"><span
                                                    class="select2-selection__rendered"
                                                    id="select2-phone_code-12850-container" role="textbox"
                                                    aria-readonly="true" title="62 - Indonesia">62
                                                    -
                                                    Indonesia</span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <input type="text" class="form-control m-input required" id="link_value-12850"
                                    value="89633792001" placeholder="81......." name="link_value">
                            </div>
                        </div>
                        <div class="form-group m-form__group">
                            <label class="form-control-label" for="url-12850">
                                Generate
                            </label>
                            <input type="text" class="form-control m-input required" id="url-12850"
                                value="https://wa.me/6289633792001" placeholder="http://url..." name="url" readonly="">
                        </div>
                        <div class="form-group m-form__group form-chat" style="display: block;">
                            <label class="form-control-label" for="chat-12850">
                                Chat Otomatis
                            </label>
                            <textarea class="form-control m-input" name="chat" id="chat-12850"
                                placeholder="Hallo, dengan Bisatopup Store?">Hallo</textarea>

                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab_sublink_12850" role="tabpanel">
                    <div class="form-group m-form__group">
                        <label class="form-control-label">
                            Sublink
                        </label>
                        <input type="text" class="form-control m-input" id="sublink-12850" value=""
                            placeholder="Sublink..." name="sublink">
                    </div>
                    <div class="form-group m-form__group sublink-container">
                        <label class="form-control-label">
                            Sublink Generate
                        </label>
                        <input name="sublink_copy" class="form-control m-input" value="https://berbagi.link/nurhayati"
                            readonly="">
                        <button type="button" class="btn btn-sublink-copy">
                            <i class="fa fa-copy"></i>
                        </button>
                    </div>
                </div>
                <div class="tab-pane" id="tab_thumbnail_12850" role="tabpanel">
                    <div class="form-group m-form__group position-relative mt-4 pt-0 pb-2 text-center">
                        <label class="form-control-label" for="scedule-70" style="color: #747679;">Ganti ikon
                            sesuai keinginan anda</label>
                    </div>
                    <div class="mt-0 pt-0">
                        <div class="text-center">
                            <div class="container-link-thumbnail">
                                <img class="thumbnail-preview"
                                    src="https://berbagi.link/images/insert-picture-icon.png">
                                <input name="thumbnail" type="hidden" value="" class="thumbnail-input">
                                <div class="shadow-avatar load-modal"
                                    data-href="https://berbagi.link/admin/berbagi_link/image/link-item-admin-12850">
                                    <i class="fa fa-upload"></i>
                                </div>
                            </div>
                        </div>
                        <div class="text-center container-remove-thumbnail" style="display:none">
                            <input name="thumbnail_remove" type="hidden" value="0" class="thumbnail_remove-input">
                            <span class="remove-thumbnail">Hapus</span>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab_scheduling_12850" role="tabpanel">
                    <div class="py-3">
                        <div class="row">
                            <div class="col-md-8">
                                <span>Silahkan berlangganan Pro
                                    untuk mendapatkan akses ke fitur
                                    ini dan banyak lagi!</span>
                            </div>
                            <div class="col-md-4 text-right">

                                <a href="javascript:void(0)" class="btn btn-outline-info m-btn--pill load-modal"
                                    data-modal-id="modal-subscription" data-backdrop="1"
                                    data-href="https://berbagi.link/admin/berbagi_link/get_modal_upgrade_account">
                                    Berlangganan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab_animation_12850" role="tabpanel">
                    <div class="py-3">
                        <div class="row">
                            <div class="col-md-8">
                                <span>Silahkan berlangganan Pro
                                    untuk mendapatkan akses ke fitur
                                    ini dan banyak lagi!</span>
                            </div>
                            <div class="col-md-4 text-right">

                                <a href="javascript:void(0)" class="btn btn-outline-info m-btn--pill load-modal"
                                    data-modal-id="modal-subscription" data-backdrop="1"
                                    data-href="https://berbagi.link/admin/berbagi_link/get_modal_upgrade_account">
                                    Berlangganan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab_redirect_12850" role="tabpanel">
                    <div class="py-3">
                        <div class="row">
                            <div class="col-md-8">
                                <span>Silahkan berlangganan Pro
                                    untuk mendapatkan akses ke fitur
                                    ini dan banyak lagi!</span>
                            </div>
                            <div class="col-md-4 text-right">

                                <a href="javascript:void(0)" class="btn btn-outline-info m-btn--pill load-modal"
                                    data-modal-id="modal-subscription" data-backdrop="1"
                                    data-href="https://berbagi.link/admin/berbagi_link/get_modal_upgrade_account">
                                    Berlangganan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab_color_12850" role="tabpanel">
                    <div class="form-group m-form__group position-relative mt-4 pt-0 pb-2 text-center">
                        <label class="form-control-label" for="scedule-70" style="color: #747679;">
                            Ubah warna per link, sesuai yang anda
                            inginkan
                        </label>
                    </div>
                    <div class="form-group m-form__group position-relative mt-0 pt-0">
                        <label class="form-control-label" for="color-12850">
                            Ubah Warna
                        </label>
                        <label class="switch">
                            <input type="checkbox" id="color-12850" name="change_color" value="1">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="form-color-picker collapse ">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="custom" class="col-form-label" style="min-height: 57px">
                                        Warna Tombol
                                    </label>
                                    <div class="position-relative custom-container">
                                        <input class="form-control color-picker" autocomplete="off" maxlength="7"
                                            name="button_color" type="text" value="#000000" style="display: none;">
                                        <div class="sp-replacer sp-light">
                                            <div class="sp-preview">
                                                <div class="sp-preview-inner" style="background-color: rgb(0, 0, 0);">
                                                </div>
                                            </div>
                                            <div class="sp-dd">▼
                                            </div>
                                        </div>
                                        <div class="sp-replacer sp-light">
                                            <div class="sp-preview">
                                                <div class="sp-preview-inner" style="background-color: rgb(0, 0, 0);">
                                                </div>
                                            </div>
                                            <div class="sp-dd">▼
                                            </div>
                                        </div>

                                    </div>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="custom" class="col-form-label" style="min-height: 57px">
                                        Warna Teks Tombol
                                    </label>
                                    <div class="position-relative custom-container">
                                        <input class="form-control color-picker" autocomplete="off" maxlength="7"
                                            name="button_text_color" type="text" value="#000000" style="display: none;">
                                        <div class="sp-replacer sp-light">
                                            <div class="sp-preview">
                                                <div class="sp-preview-inner" style="background-color: rgb(0, 0, 0);">
                                                </div>
                                            </div>
                                            <div class="sp-dd">▼
                                            </div>
                                        </div>
                                        <div class="sp-replacer sp-light">
                                            <div class="sp-preview">
                                                <div class="sp-preview-inner" style="background-color: rgb(0, 0, 0);">
                                                </div>
                                            </div>
                                            <div class="sp-dd">▼
                                            </div>
                                        </div>

                                    </div>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="custom" class="col-form-label" style="min-height: 57px">
                                        Warna Garis
                                    </label>
                                    <div class="position-relative custom-container">
                                        <input class="form-control color-picker" autocomplete="off" maxlength="7"
                                            name="button_border_color" type="text" value="#000000"
                                            style="display: none;">
                                        <div class="sp-replacer sp-light">
                                            <div class="sp-preview">
                                                <div class="sp-preview-inner" style="background-color: rgb(0, 0, 0);">
                                                </div>
                                            </div>
                                            <div class="sp-dd">▼
                                            </div>
                                        </div>
                                        <div class="sp-replacer sp-light">
                                            <div class="sp-preview">
                                                <div class="sp-preview-inner" style="background-color: rgb(0, 0, 0);">
                                                </div>
                                            </div>
                                            <div class="sp-dd">▼
                                            </div>
                                        </div>

                                    </div>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-4" style="border-top: 1px solid #9b8f8f;">
                <div class="col-6 text-left">
                    <button type="button" class="btn btn-outline-danger m-btn--pill btn-delete-link"
                        data-href="https://berbagi.link/admin/berbagi_link/delete/12850">
                        Hapus
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
</div>
</div>
</div>
<div class="link-container-admin px-3 mt-4">
</div>
</div>
</div>