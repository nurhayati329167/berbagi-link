<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- <meta content="" name="description">
    <meta content="" name="keywords"> -->
    @include('layouts.css')
    @include('layouts.css_bblink')
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
</style>
</head>

<body>
    @include('layouts.header')
    @include('layouts.sidebar')

    <main id="main" class="main">
    <div class="m-grid__item m-grid__item--fluid m-wrapper wrapper-berbagi-link">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader position-relative">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    <i class="bi bi-link-45deg"></i>
                    Berbagi Link
                </h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item">
                        Ubah Tampilan
                    </li>
                </ul>
            </div>
            <div id="link-web-container">
            @if ($users->id == Auth::user()->id)
                <div class="link-container-user" style="margin-top: 0px;">      
                <label></label>
                    <input id="link-web" value="https://berbagibahagia.org/link/{{ $users->username}}" readonly="" style="background: #a29e9e80;" />
                    <button class="btn" onclick="copyMyLink()">
                        <i class="bi bi-clipboard"></i>
                    </button>
                </div>
                <a href="{{ route('generate',$users->id) }}" class="link-qr-code">
                    Generate QR
                </a>
                @endif 
            </div>
        </div>
    </div>
    <br/>

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
                            <form class="m-form" action="{{ url('/editprofil/'.$users->id) }}" method="post" id="updateProfil"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('patch')
                                        @if ($users->id == Auth::user()->id)
                                <div class="col-md-4 text-center">
                                        <div id="profile-container">
                                            <image id="profileImage" src="http://lorempixel.com/100/100" />
                                        </div>
                                        <input type="file" name="gambar" accept="image/*" placeholder="Photo" required=""  id="imageUpload" class="form-control m-input required image">
                                        <input type="hidden" name="bases" id="base">
                                        <!-- <input id="imageUpload" type="file" 
                                            name="gambar" placeholder="Photo" required="" capture> -->
                                    <div style="margin-top:10px;">
                                        <i style="font-size:11px;">Silahkan unggah gambar</i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    
                                        <div class="form-group m-form__group " id="username">
                                            <label class="form-control-label" for="username">
                                                Username
                                            </label>
                                            <div class="position-relative">
                                                <input type="text"
                                                    class="form-control m-input required input-username-berbagilink"
                                                    id="username" value="{{$users->username}}" name="username" required>
                                                <div class="domain-username-berbagilink">berbagi.link/</div>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group " id="update-profile-display_name">
                                            <label class="form-control-label" for="name">
                                                Nama Yang Tampil
                                            </label>
                                            <input type="text" class="form-control m-input required" id="name"
                                                value="{{$users->name}}" name="name" required>
                                        </div>
                                        <div class="form-group m-form__group " id="update-profile-location">
                                            <label class="form-control-label" for="lokasi">
                                                Lokasi
                                            </label>
                                            <input type="text" class="form-control m-input required" id="lokasi"
                                                value="{{$users->lokasi}}" placeholder="Lokasi..." name="lokasi" required>
                                        </div>
                                        <div class="form-group m-form__group " id="update-profile-location_url">
                                            <label class="form-control-label" for="url">
                                                Link Lokasi(Google Map)
                                            </label>
                                            <input type="text" class="form-control m-input required"
                                                value="{{$users->url}}" required
                                                placeholder="https://g.page/Amanah-Corp?share" name="url">
                                        </div>
                                        <div class="form-group m-form__group " id="biografi">
                                            <label class="form-control-label" for="biografi">
                                                Biografi
                                            </label>
                                            <textarea type="text" maxlength="160" class="form-control m-input required"
                                                id="" rows="4" value="{{$users->biografi}}" name="biografi" required></textarea>
                                        </div>
                                        <div class="text-right mt-3">
                                            <button type="submit" class="btn btn-success m-btn m-btn--pill"
                                                id="btn_save">
                                                Simpan
                                            </button>
                                        </div>
                                </div>
                                @else
                                        Oops....data tidak ditemukan(404);
                                        @endif
                                    </form>
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
                            <!-- <div class="link-item-admin-container link-item-admin-group-new"
                                style="background-color : #ffffff;">
                                <div class="link-main-item">
                                    <div class="link-left-item">
                                    <i class="bi bi-folder2" ></i>
                                    </div>
                                    <div class="link-center-item">
                                        <div class="text-container">
                                            <div class="lbl-link">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="color : #46C4BF">Buat Grup Link Baru</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="link-menu-items" >
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
                                                            id="title" value="" placeholder="Judul..."
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
                                                    <button type="button" class="btn btn-outline-warning m-btn--pill btn-cancel" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapseThree">
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
                            </div> -->
                            <!-- <div class="link-item-admin-container header-item-admin-new"
                                style="background-color : #ffffff;">
                                <div class="link-main-item">
                                    <div class="link-left-item">
                                        <i class="bi bi-plus-lg"></i>
                                    </div>
                                    <div class="link-center-item">
                                        <div class="text-container">
                                            <div class="lbl-link" style="color : #46C4BF">
                                            <a data-toggle="collapse" href="#collapse2" style="color : #46C4BF">Buat Judul Baru</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse in">
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
                                        <form class="m-form" action="{{url('buat-judul')}}" method="POST"
                                            id="create-judul" name="create-judul" enctype="multipart/form-data">
                                            <div class="menu-items tab-content mb-4">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            {{ csrf_field() }}
                                                <div class="tab-pane active" id="tab_general_header_new"
                                                    role="tabpanel">
                                                    <div class="form-group m-form__group">
                                                        <label class="form-control-label" for="create-title">
                                                            Judul
                                                        </label>
                                                        <input type="text" class="form-control m-input required"
                                                            id="title" value="" placeholder="Judul..."
                                                            name="title">
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
                                                        <div class="form-color-picker collapse show" style="">
                                                            <div class="row">
                                                                <div class="col-md-4"></div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="custom" class="col-form-label" style="min-height: 57px">
                                                                            Warna Teks
                                                                        </label>
                                                                        
                                                                            <input type="text" class="form control" id="colorpicker">
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4"></div>
                                                            </div>
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
                                                                    class="bi bi-text-left"></i>
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
                                                                    class="bi bi-text-center"></i>
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
                                                                    class="bi bi-text-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row py-4" style="border-top: 2px dashed #46C4BF;">
                                                <div class="col-6 text-left">
                                                    <button type="button" class="btn btn-outline-warning m-btn--pill btn-cancel" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapseThree">
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
                            </div> -->
                            <div class="link-item-admin-container link-item-admin-new"
                                style="background-color : #ffffff;">
                                <div class="link-main-item">
                                    <div class="link-left-item">
                                        <i class="bi bi-plus-lg"></i>
                                    </div>
                                    <div class="link-center-item">
                                        <div class="text-container">
                                            <div class="lbl-link" style="color : #46C4BF">
                                            <a data-toggle="collapse" href="#collapse3" style="color : #46C4BF">Buat  Link Baru</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse in">
                                    <div class="link-menu-items">
                                        <ul class="nav" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#"
                                                    data-target="#tab_general_new">
                                                    <span>Umum</span>
                                                </a>
                                            </li>
                                            <!-- <li class="nav-item position-relative">
                                                <a class="nav-link" data-toggle="tab" href="#"
                                                    data-target="#tab_sublink_new">
                                                    <span>Sublink</span>
                                                </a>
                                            </li> -->
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#"
                                                    data-target="#tab_thumbnail_new">
                                                    <span>Ikon</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <form class="m-form" action="{{ url('buat-link')}}" -method="POST" id="buat-link" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            {{ csrf_field() }}
                                            <div class="menu-items tab-content mb-4">
                                                <div class="tab-pane active" id="tab_general_new" role="tabpanel">
                                                    <div class="form-group m-form__group">
                                                        <label class="form-control-label" for="create-title">
                                                            Judul
                                                        </label>
                                                        <input type="text" class="form-control m-input required"
                                                            id="title" value="" placeholder="Judul..."
                                                            name="judul_link">
                                                    </div>
                                                    <div class="form-group m-form__group position-relative">
                                                        <label class="form-control-label" for="create-group_type">
                                                            Tipe
                                                        </label>
                                                        <select id="show" id="tipe" class="form-control m-input required" name="tipe">
                                                            <option selected="selected">Pilih Tipe</option>
                                                            <option value="1">Informasi</option>
                                                            <option value="2">Media Sosial</option>
                                                            <option value="3">Payment</option>
                                                        </select>
                                                        <input type="text" name="type" id="type" value="" hidden />
                                                    </div>
                                                    <div class="form-group m-form__group" id="informasi">
                                                        <label class="form-control-label">
                                                            Jenis
                                                        </label>
                                                        <select class="form-control" id="tipeinformasi">
                                                        <option>Pilih Tipe Informasi</option>
                                                            <option value="email">Email</option>
                                                            <option value="gdrive">Google Drive</option>
                                                            <option value="gform">Google Form</option>
                                                            <option value="gmaps">Google Maps</option>
                                                            <option value="gmeet">Google Meet</option>
                                                            <option value="gplay">Google Play</option>
                                                            <option value="website">Website</option>
                                                            <option value="zoom">Zoom</option>
                                                            <option value="appstore" data-thumbnail="https://images.app.goo.gl/joJEFQTYGmuQFSfb9">App Store</option>
                                                            <option value="telp">Telephone</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group m-form__group" id="sosmed">
                                                        <label class="form-control-label">
                                                            Jenis
                                                        </label>
                                                        <select class="form-control" id="tipesosmed">
                                                        <option>Pilih Tipe Sosial Media</option>
                                                            <option value="fb">Facebook</option>
                                                            <option value="ig">Instagram</option>
                                                            <option value="line">Line</option>
                                                            <option value="linkedin">LinkedIn</option>
                                                            <option value="tele">Telegram</option>
                                                            <option value="tiktok">Tiktok</option>
                                                            <option value="twitter">Twitter</option>
                                                            <option value="wa">Whatsapp</option>
                                                            <option value="yt">Youtube</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group m-form__group" id="payment">
                                                        <label class="form-control-label">
                                                            Jenis
                                                        </label>
                                                        <select class="form-control" id="tipepayment">
                                                        <option>Pilih Tipe Payment</option>
                                                            <option value="qris">Qris</option>
                                                            <option value="2" hidden></option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group m-form__group" id="notlp">
                                                        <label class="form-control-label" for="create-title">
                                                            Nomor Telepon
                                                        </label>
                                                        <input type="text" class="form-control" id="notelp" value="" placeholder="+62XXXXXX" name="nomor">
                                                    </div>
                                                    <div class="form-group m-form__group form-link-value" id="email">
                                                        <label class="form-control-label lbl-link_value" for="create-link_value">
                                                            Email
                                                        </label>
                                                        <input type="text" class="form-control" id="emails" value="" placeholder="sales@amanahcorp.co.id" name="email">
                                                    </div>

                                                    <div class="form-group m-form__group form-link-value" id="user">
                                                        <label class="form-control-label lbl-link_value" for="create-link_value">
                                                            Username
                                                        </label>
                                                        <input type="text" class="form-control" id="usernem" value="" placeholder="bisaberbagi.indonesia" name="username">
                                                    </div>

                                                    <div class="form-group m-form__group" id="link">
                                                        <label class="form-control-label" for="create-title">
                                                            Link
                                                        </label>
                                                        <input type="text" class="form-control" id="links" value="" placeholder="http:://" name="generate_link">
                                                    </div>

                                                    <div class="form-group m-form__group form-link-value" id="nomor">
                                                        <label class="form-control-label lbl-link_value" for="create-link_value">
                                                            Nomor
                                                        </label>
                                                        <input type="text" class="form-control" id="nomors" value="" placeholder="+62XXXXXX" name="nomor">
                                                    </div>

                                                    <div class="form-group m-form__group form-chat" id="chat">
                                                        <label class="form-control-label" for="create-title">
                                                            Chat Otomatis
                                                        </label>
                                                        <input type="text" class="form-control" placeholder="Hallo, dengan berbagi link.">
                                                    </div>

                                                    <div class="form-group m-form__group" id="generate">
                                                        <label class="form-control-label" for="create-title">
                                                            Generate
                                                        </label>
                                                        <input type="text" class="form-control" placeholder="http://" id="jeneret" value="" readonly> 
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
                                                            value="" readonly="">
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
                                                            <input type="file" name="gambar" class="form-control image" >
                                                            <input type="hidden" name="bases" id="base">   
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row py-4" style="border-top: 2px dashed #46C4BF;">
                                                <div class="col-6 text-left">
                                                    <button type="button" class="btn btn-outline-warning m-btn--pill btn-cancel" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseThree">
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
                                    <i class="bi bi-plus-lg"></i>
                                    </div>
                                    <div class="link-center-item">
                                        <div class="text-container">
                                            <div class="lbl-link" style="color : #46C4BF">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" style="color : #46C4BF">Buat Artikel Baru</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse in">
                                    <div class="link-menu-items">
                                        <form class="m-form" 
                                            action="{{ url('/artikel')}}"
                                            method="post" id="create-artikel" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            @csrf
                                            <div class="menu-items tab-content mb-4">
                                                <div class="form-group m-form__group">
                                                    <label class="form-control-label" for="judul">
                                                        Judul
                                                    </label>
                                                    <input type="text" class="form-control m-input required" name="judul_artikel" placeholder="Judul...">
                                                </div>
                                                <div class="form-group m-form__group">
                                                    <label class="form-control-label" for="link_artikel">
                                                        URL
                                                    </label>
                                                    <input type="text" class="form-control m-input required" name="generate_artikel"placeholder="http://url...">
                                                </div>
                                                <div class="form-group m-form__group">
                                                    <label class="form-control-label" for="create-image-article">
                                                        Gambar Artikel
                                                    </label>
                                                    <div class="text-center">
                                                    <input type="file" name="gambar" class="form-control image" >
                                                    <input type="hidden" name="bases" id="base">
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group">
                                                    <label class="form-control-label" for="isi">
                                                        Kolom Detail
                                                    </label>
                                                    <textarea  id="summernote"
                                                        name="isi_artikel" id="isi" placeholder="Konten..."style="display: none;"></textarea>
                                                </div>
                                            </div>
                                            <div class="row py-4" style="border-top: 2px dashed #46C4BF;">
                                                <div class="col-6 text-left">
                                                    <button type="button" class="btn btn-outline-warning m-btn--pill btn-cancel" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                                                        Batalkan
                                                    </button>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <button type="submit" class="btn btn-outline-success m-btn--pill" id="simpan">
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
                                    <i class="bi bi-plus-lg"></i>
                                    </div>
                                    <div class="link-center-item">
                                        <div class="text-container">
                                            <div class="lbl-link" style="color : #46C4BF">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" style="color : #46C4BF">Buat Donasi Baru</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse in">
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                                @endif
                                    <div class="link-menu-items">
                                        <form class="m-form"
                                        action="{{url('new-galang-dana')}}"
                                            method="post" id="create-galang-dana" enctype="multipart/form-data" name="create-galang-dana">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            {{ csrf_field() }}
                                            <div class="menu-items tab-content mb-4">
                                                <div class="form-group m-form__group">
                                                    <label class="form-control-label">
                                                        Judul Campaign
                                                    </label>
                                                    <input type="text" class="form-control m-input required"
                                                        name="title" id="title" placeholder="Judul Campaign" maxlength="100" required>
                                                    <p style="font-size:11px; margin-bottom:-10px;">Maksimal 100 karakter</p>
                                                </div>
                                                <div class="form-group m-form__group">
                                                    <label class="form-control-label">
                                                        Target Dana
                                                    </label>
                                                    <input type="text" class="form-control m-input required" name="id_category" id="id_category"
                                                        onkeyup="convertToRupiah(this);" placeholder="Rp.0" required>
                                                </div>
                                                <div class="form-group m-form__group">
                                                    <label class="form-control-label" for="link_artikel">
                                                        Deadline Penggalangan Dana
                                                    </label>
                                                    <input type="date" class="form-control m-input required"
                                                    name="end_date" id="end_date" required>
                                                </div>
                                                <div class="form-group m-form__group">
                                                    <label class="form-control-label" for="link_artikel">
                                                        Lokasi Penyaluran
                                                    </label>
                                                    <input type="text" class="form-control m-input required"
                                                    name="alamat" id="alamat" placeholder="Lokasi penyaluran" required>
                                                </div>
                                                <div class="form-group m-form__group">
                                                    <div class="form-field">
                                                    <label>Tentukan link untuk campaign</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend" style="width:100%;">
                                                            <span
                                                                class="input-group-text nyumput">berbagibahagia.org/program/</span>
                                                            <input type="text" name="deskripsi" style="" class="form-control m-input required"
                                                                id="deskripsi" placeholder="contoh : bantupaknana" required>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>  
                                                <div class="form-group m-form__group">
                                                <label class="form-control-label">
                                                        Kategori
                                                    </label>
                                                    <select id="id" class="form-control m-input required" name="id">
                                                    <option selected="selected" value="">Pilih Kategori</option>
                                                    @foreach($kategori as $c)
                                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group m-form__group">
                                                    <label class="form-control-label">
                                                        Provinsi
                                                    </label>
                                                    <select id="provinsi" class="form-control m-input required">
                                                        <option selected="selected" value="">pilih provinsi</option>
                                                        @foreach($provinsi as $prov)
                                                        <option value="{{$prov->id}}">{{$prov->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group m-form__group">
                                                    <label class="form-control-label">
                                                        Kota
                                                    </label>
                                                    <select id="kota" class="form-control m-input required" name="nama_kota">
                                                        <option selected="selected" value="">pilih kota</option>
                                                    </select>
                                                    @error('id_category')
                                                    <div class="form-text text-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group m-form__group" hidden id="rincians">
                                                    <label class="form-control-label">
                                                        Dokumen medis
                                                    </label>
                                                    <img id="keluar" style="height:80px; margin-bottom:10px;" src="">
                                                    <input type="file" name="rincian" id="limit1mbb" accept="image/*"
                                                        onchange="soang(event)" class="form-control m-input required">
                                                </div>
                                                <div class="form-group m-form__group">
                                                    <label class="form-control-label">
                                                        Foto cover
                                                    </label>
                                                    <input type="file" name="gambar" class="form-control m-input required image"
                                                     accept="image/*" >
                                                    <input type="hidden" name="bases" id="base">
                                                </div>
                                                <div class="form-group m-form__group">
                                                    <label class="form-control-label" for="isi">
                                                        Deskripsi / cerita lengkap
                                                    </label>
                                                    <textarea  id="summernotes"
                                                        name="artikel" id="artikel" rows="10" placeholder="Konten..."
                                                        style="display: none;"></textarea>
                                                </div>
                                            </div>
                                            <div class="row py-4" style="border-top: 2px dashed #46C4BF;">
                                                <div class="col-6 text-left">
                                                    <button type="button" class="btn btn-outline-warning m-btn--pill btn-cancel" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapseThree">
                                                        Batalkan
                                                    </button>
                                            
                                                </div>
                                                <div class="col-6 text-right">
                                                    <button type="submit" class="btn btn-outline-success m-btn--pill" id="simpan5">
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

        </div>

    </div>
</div>
<div class="link-container-admin px-3 mt-4">
</div>
    </main>
    @include('layouts.footer')
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @include('layouts.js')
   
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.2/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 200
        })
    })
    $(document).ready(function() {
        $('#summernotes').summernote();
    })
  </script>
    <script>
         $('#colorpicker').colorpicker();
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            $('#create-judul').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: "{{url('buat-judul')}}",
                data: formData,
                cache: false,
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function (data) {
                    Swal.fire({
                    icon: 'success',
                    title: 'Sukses',
                    button: 'Ok',
                    })
                    location.reload();
                },
                error: function (data) {
                    console.log(data);
                }
            });
        })
        })

    </script>
    <script type="text/javascript">
        function copyMyLink() {
            var copyText = document.getElementById("link-web");
            copyText.select();
            document.execCommand("copy");
        }
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            $('#buat-link').submit(function(e) {
            e.preventDefault();
            var formData= new FormData(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: "{{ url('buat-link')}}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success:function (data) {
                    Swal.fire({
                    icon: 'success',
                    title: 'Sukses',
                    button: 'Ok',
                    })
                    location.reload();
                },
                error: function(data) {
                    console.log(data);
                }
            });
        })
        })
    </script>
    <script>
        function edit(id){
            $.post("{{url('edit-profil')}}/"+ id,{}, function(data,status){
                $("#updateProfil").html('Edit Profil')
                $("#")
            });
        }
        
        jQuery(document).ready(function(){
            $('#create-artikel').submit(function(e) {
            e.preventDefault();
            var formData= new FormData(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: "/artikel",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success:function (data) {
                    Swal.fire({
                    icon: 'success',
                    title: 'Sukses',
                    button: 'Ok',
                    })
                    location.reload();
                },
                error: function(data) {
                    console.log(data);
                }
            });
        })
        })
        
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            $('#create-galang-dana').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: "{{url('new-galang-dana')}}",
                data: formData,
                cache: false, 
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function (data) {
                    Swal.fire({
                    icon: 'success',
                    title: 'Sukses',
                    text: 'Galang dana berhasil dibuat',
                    button: 'Ok',
                    })
                    location.reload();
                },
                error: function (data) {
                    console.log(data);
                }
            });
        })
        })
    </script>
    <script type="text/javascript">
        $(function provinsi() {
    console.log('cc');
    // document.getElementById("b").innerHTML="dasdjkasd";

    $.get('/prof', function(data) {
        var isi = '';
        for (var i = 0; i < data.length; i++) {
            isi += `<option value='` + data[i]['province_id'] + `'>` + data[i]['name'] + `</option>`;
        }
        document.getElementById("b").innerHTML = isi;
        // console.log(actualData['rajaongkir']);
    });

    $('#provinsi').change(function() {

        //Mengambil value dari option select provinsi kemudian parameternya dikirim menggunakan ajax
        var prov = $('#provinsi').val();
        console.log(prov);

        $.ajax({
            type: 'GET',
            url: '/cek_kab',
            data: {
                id_prov: prov
            },
            success: function(data) {
                var add = '';
                for (var i = 0; i < data.length; i++) {
                    add += `<option value='` + data[i]['name'] + `'>` + data[i]['name'] +
                        `</option>`;
                }
                document.getElementById("kota").innerHTML = add;
                //jika data berhasil didapatkan, tampilkan ke dalam option select kabupaten
                // $("#kabupaten").html(data);
            }
        });
    });

    // $.ajax({
    // type:'GET',
    // url:'/../prof',
    // headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             },

    // dataType: 'json',
    // success :function(response) {
    // //   var data = response;
    //       console.log(response);
    //     //   
    //     // document.getElementById("list").innerHTML=response;
    //     // response
    //     // for (var i=0; i < response['rajaongkir']['results'].length; i++) {
    //     //     isi += `<option value='`+response['rajaongkir']['results'][i]['province_id']+`'>`+response['rajaongkir']['results'][i]['province']+`</option>`;
    //     // }
    //     // $("#mycart").slideToggle();

    // }
    // });



});
    // $(function(){
    //     $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             }
    // })
    // $(function(){ 
    //     $('#provinsi').on('change', function(){
    //         let id_provinsi = $('#provinsi').val();
    //         $.ajax({
    //             type: 'post',
    //             url: '/cek-kab',
    //             data: {id_provinsi:id_provinsi},
    //             cache: false,
    //             success:function(msg){
    //                 $('#kota').html(msg);
    //             },
    //             error: function(data){
    //                 console.log('error:', data)
    //             },
                
    //         })
    //     })
    // })
// })
    </script>
</body>

</html>