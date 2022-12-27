<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('layouts.css')
    @include('layouts.css_bblink')
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
                            <i class="m-nav__link-icon la la-link mr-3"></i>
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
                                <i class="bi bi-clipboard"></i>
                            </button>
                        </div>
                        <!-- <a href="#" class="link-qr-code">
                            Generate QR
                        </a> -->
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
                                        @foreach ($users as $use)
                                        @if($use->id == Auth::user()->id)
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
                                            <form class="m-form" action="" method="" id="updateProfil"
                                                enctype="multipart/form-data">

                                                <div class="form-group m-form__group " id="username">
                                                    <label class="form-control-label" for="username">
                                                        Username
                                                    </label>
                                                    <div class="position-relative">
                                                        <input type="text"
                                                            class="form-control m-input required input-username-berbagilink"
                                                            id="" value="{{$use->username}}" readonly>
                                                        <div class="domain-username-berbagilink">berbagi.link/</div>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group " id="update-profile-display_name">
                                                    <label class="form-control-label" for="name">
                                                        Nama Yang Tampil
                                                    </label>
                                                    <input type="text" class="form-control m-input required" id="name"
                                                        value="{{$use->name}}" readonly>
                                                </div>
                                                <div class="form-group m-form__group " id="update-profile-location">
                                                    <label class="form-control-label" for="location">
                                                        Lokasi
                                                    </label>
                                                    <input type="text" class="form-control m-input required" id="lokasi"
                                                        value="{{$use->lokasi}}" placeholder="Lokasi..." readonly>
                                                </div>
                                                <div class="form-group m-form__group " id="update-profile-location_url">
                                                    <label class="form-control-label" for="link">
                                                        Link Lokasi(Google Map)
                                                    </label>
                                                    <input type="text" class="form-control m-input required"
                                                        value="{{$use->url}}"
                                                        placeholder="https://g.page/Amanah-Corp?share" readonly>
                                                </div>
                                                <div class="form-group m-form__group " id="biografi">
                                                    <label class="form-control-label" for="biografi">
                                                        Biografi
                                                    </label>
                                                    <textarea type="text" maxlength="160"
                                                        class="form-control m-input required" id="" rows="4"
                                                        value="{{$use->biografi}}" readonly></textarea>
                                                </div>
                                                <div class="text-right mt-3">
                                                    <a href="{{ url('/editprofil/'.$use->id.'/edit') }}"
                                                        class="btn btn-success m-btn m-btn--pill">Edit Profil</a>
                                                </div>
                                            </form>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="group-link-business-line "></div>
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
    </main>
    @include('layouts.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @include('layouts.js')
    @include('layouts.js_bblink')

    <script>
    $(document).ready(function() {

    })
    </script>

</body>

</html>