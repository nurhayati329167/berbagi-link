<html>

<head>
    <title>Berbagi Link</title>

<body>
    @include('layouts.css_user')
    <div id="berbagi-link-loader-container" class="loader-container " style="">
        <div class="loader"></div>
    </div>
    <div class="berbagi-link-super-container berbagi-link-main tab-information berbagi-link-theme-2" id=""
        style="position : absolute">
        <section class="berbagi-link-main-container" style="margin-top : 0px">
            <div class="berbagi-link-container">
                <div class="row user-container">
                    <div class="col-md-4 col-5 text-center">
                        <div class="avatar-container w-100">
                            <div class="avatar-img tab-information-container item-tab-container"
                                style="background:  center center / cover no-repeat; height: 173px;">
                            </div>
                            <div class="avatar-img tab-ibadah-container item-tab-container"
                                style="background:  center center / cover no-repeat; height: 173px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-7">
                        <div>
                            <div class="username-main-container">
                                <div class="username-lbl tab-information-container item-tab-container">
                                    {{ auth()->user()->username }}
                                </div>
                            </div>
                            <div class="bio-main-container">
                                <div class="bio-lbl tab-information-container item-tab-container">
                                    {{ auth()->user()->biografi}}
                                </div>
                            </div>
                            <div class="location-main-container">
                                <div class="location-container">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                    </svg>
                                    <span
                                        class="location-lbl tab-information-container item-tab-container">{{ auth()->user()->lokasi}}</span>
                                    <span
                                        class="location-lbl tab-ibadah-container item-tab-container">{{ auth()->user()->lokasi}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-information-container item-tab-container">
                    <div class="article-super-container mt-5">
                        <div class="article-container">
                            <div class="row article-head mx-0">
                                <div class="col-6">
                                    <div class="article-title">Artikel</div>
                                </div>
                            </div>
                            </br>


                            <div class="swiper mySwiper" style="overflow-x: scroll;">
                                <div class="swiper-wrapper">
                                    @foreach($artikels as $artikel)
                                    <div class="swiper-slide" style="padding: 0px; width: 90px; margin-right: 20px;"
                                        role="group" aria-label="1 / 2">
                                        <a class="link-article" href="{{$artikel->generate_artikel}}">
                                            <img src="{{ asset('storage/'.$artikel->gambar) }}" width="80"
                                                title="{{$artikel->judul_artikel}}">
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="row article-body mt-3 mx-0"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section container" style="padding:10px 0 10px 0; background:#fff; margin:5px 0 0 0;">
                    <div class="container">
                        <div class="full">
                            <table class="table head" style="border-top:2px solid #fffffe;">
                                <h5 style="margin: 0 5px 0; text-transform: capitalize;">Media</h5>
                            </table>
                        </div>

                        <div class="row" id="Media">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    @foreach($link as $link)
                                    <div class="swiper-slide" style="padding: 0px; width: 90px; " role="group"
                                        aria-label="1 / 2">
                                        <a class="link-article"
                                            href="https://berbagi.link/berbagi/article/0b31df40-8e34-11ec-a90f-2bd2bdbd3c9a">
                                            <img class="article-item" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAAYFBMVEU8Wpn///86WJjc4OtJY5729vowUpU2VpcbRY+Tn8HN0uJuga9xhLHEytwhSZDj5e+OncJSbKO+xdl/j7eXpMSlr8qyvNRbcaV4ibPv8fYqTpMMP4yuts+eqcfT2OUAOYpoXRyLAAACLElEQVR4nO3b23aCMBAF0BAhg1GBIIpES///LwtV69ISYSWZ5ME5S5/PxguEy7BkjKwUCxxVyd9qNrxLpQUPDeBCq/IK6AFCt18D0I+AEoJv/T0cygGgIm3/GFAJkzpeP2NaskrEBIiKqWi/gDE8+N+fQqF8RgCELv4l0A4Pijzd7JvDsa53z2kDCECnp2PZJZPZoh91uW5rQ/mYDTZAp9Lcjg/g+uttPTYA2PvNRweIcq4fF3BezfajAvRlvh8TIDYL+lEBC74ATACclvQjAvJFHwAeANpF/XgAMbcLxAYUfWTAeVk/GoCnkQEL/4R4AH0wVmb1oWnW6/E1JMXpZ7o21Hen70KLR5D6md4ZNl8FuvAAhpXIsQjTz8CwG0Bfg97CwXAkaGMD0kBnQiZARgACEIAAuAD+OMpqA4CJl/gEcTUsMm6pps+Ls/VLGp+X5WE7Wfo+Pq8R2QAyn4dHG0AX+ysofS5KbQArn0tEG4DXu3M2gDo24Cs2YB/7N+B1mW4D8HqL2gbg9eBoAci8PiRgAfD7lIIFQHo9V7YA1LEBl9iAtVcAb3v5l2y6UT6l93y5APJHphelncifgne1wLgsR2t8zqeemBCAAAQgAAEIQAACEIAABCAAAQhAAAIQgAAEIAABfAIcb+s7ArhyHfl0BIjKdejVEaCl69ivG2Ac+3W8pegEuA4+u41+uwBuo9/j8Lv9c07WAC7Effg9cRn/HwDZVLo5wH38/wf9LydyA+blFAAAAABJRU5ErkJggg=="
                                                style="width: 100%; padding: 5px; border-radius: 10%;"
                                                title="Apa itu HIDROSEFALUS?">
                                        </a>
                                    </div>
                                    @endforeach

                                    <div class="swiper-slide" style="padding: 0px; width: 100px; margin-right: 20px;"
                                        role="group" aria-label="2 / 2">
                                        <a class="link-article"
                                            href="https://api.whatsapp.com/send?phone=+628112484484Whatsap&text=Assalamu%27alaikum%20admin%20Berbagi%20Bahagia">
                                            <img class="article-item"
                                                src="https://berbagibahagia.org/gambarUpload/wa.png"
                                                style="width: 100%; padding: 5px; border-radius: 10%;"
                                                title="LELAH YANG DISUKAI OLEH ALLAH, APA YA KIRA-KIRA?">
                                        </a>
                                    </div>

                                    <div class="swiper-slide" style="padding: 0px; width: 100px; margin-right: 20px;"
                                        role="group" aria-label="1 / 2">
                                        <a class="link-article"
                                            href="https://berbagi.link/berbagi/article/0b31df40-8e34-11ec-a90f-2bd2bdbd3c9a">
                                            <img class="article-item"
                                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgAsK__LDMnnEs7X8h-DQ9HTO4c_meeiXRoQ&usqp=CAU"
                                                style="width: 100%; padding: 5px; border-radius: 10%;"
                                                title="Apa itu HIDROSEFALUS?">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                </br>
                <div class="section d-flex justify-content-center"
                    style="padding:10px 0 10px 0; background:#fff; margin:5px 0 0 0;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="full">
                                    <table class="table head" style="border-top:2px solid #fffffe;">
                                        <h5 style="margin: 0 5px 0; text-transform: capitalize;">Donasi</h5>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide" style="width: 100px; margin-right: 15px;" role="group"
                            aria-label="2 / 4">
                            <div class="text-center">
                                <div class="product_list2">
                                    <a href="https://berbagibahagia.org/program/bantumangsunarya">
                                        <img class="img-responsive"
                                            src="https://berbagibahagia.org/gambarUpload/gerobak pak sunarya.png"
                                            alt="#" style="width: 100%; height: auto; border-radius: %;" title="">
                                        <a href="https://berbagibahagia.org/program/bantumangsunarya"></a>

                                        <div class="product_detail_btm2">
                                            <div class="center">
                                                </br>
                                                <h4 style="font-size: 12px"><b>Bantuan Usaha Mang Sunarya Penjual Bubur
                                                        Kacang</b></h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide" style=" width: 100px; margin-right: 15px;" role="group"
                            aria-label="2 / 4">
                            <a href="https://berbagibahagia.org/program/bantuagung">
                                <div class="text-center">
                                    <div class="product_list2">

                                        <img class="img-responsive"
                                            src="https://berbagibahagia.org/gambarUpload/Agung.png" alt="#"
                                            style="width: 100%; height: auto; border-radius: %;" title="">
                                        <a href="https://berbagibahagia.org/program/bantuagung"></a>

                                        <div class="product_detail_btm2">
                                            <div class="center">
                                                </br>
                                                <h4 style="font-size: 12px"><b>Bantu Agung Mempunyai Alat Kelamin</b>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide" style="width: 100px; margin-right: 15px;" role="group"
                            aria-label="2 / 4">
                            <div class="text-center">
                                <div class="product_list2">
                                    <a href="https://berbagibahagia.org/program/bantupakase">
                                        <img class="img-responsive"
                                            src="https://berbagibahagia.org/gambarUpload/Thumbnail Ase.png" alt="#"
                                            style="width: 100%; height: auto; border-radius: %;" title="">
                                        <a href="https://berbagibahagia.org/program/bantupakase"></a>

                                        <div class="product_detail_btm2">
                                            <div class="center">
                                                </br>
                                                <h4 style="font-size: 12px"><b>Bantu Bapak Ase Jalan Normal Lagi</b>
                                                </h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </br>

                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-active"
                            style="padding-bottom: 15px; width: 209.444px; margin-right: 15px;" role="group"
                            aria-label="1 / 4">
                            <div class="text-center">
                                <div class="product_list2">
                                    <div class="product_img2">
                                        <img class="img-responsive"
                                            src="https://berbagibahagia.org/gambarUpload/card-wakaf(1).png" alt="#"
                                            style="width: 100%; height: auto; border-radius: %;" title="">
                                    </div>
                                    <div class="product_detail_btm2">
                                        <div class="center">

                                            <h4 style="font-size: 14px"><b>Wakaf masjid pelosok ciamis</b></h4>
                                        </div>
                                        <p class="center author mt-1" style="font-size: 11px;">berbagibahagia<span
                                                class="fa fa-check" style="color:#1f5daa;"></span>
                                        </p>
                                        <hr style="margin:0;">
                                        <div class="product_price2 shopping-cart" style="font-size:10px;">
                                            <table class="table">
                                                <tbody>
                                                    <tr style="margin-bottom:-10px;">
                                                        <td align="left">Terkumpul</td>
                                                        <td align="right" style="text-align:right; ">Sisa Waktu</td>
                                                    </tr>
                                                    <tr style=" border-top: 2px solid #ffffff;">
                                                        <td align="left"><b>Rp.480.018</b></td>
                                                        <td align="right" style="text-align:right;"><b>78 Hari </b></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    <div class="starratin2 center">
                                        <div class="progress" style="width:100%;">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="2.4243333333333"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 2.42433%;"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active"
                            style="padding-bottom: 15px; width: 209.444px; margin-right: 15px;" role="group"
                            aria-label="1 / 4">
                            <div class="text-center">
                                <div class="product_list2">
                                    <div class="product_img2">
                                        <img class="img-responsive"
                                            src="https://berbagibahagia.org/gambarUpload/gerobak pak sunarya.png"
                                            alt="#" style="width: 100%; height: auto; border-radius: %;" title="">
                                    </div>
                                    <div class="product_detail_btm2">
                                        <div class="center">

                                            <h4 style="font-size: 14px"><b>BANTU RENOVASI MASJID AT-TAUBAH DENGAN
                                                    SEDEKAH TER</b></h4>
                                        </div>
                                        <p class="center author mt-1" style="font-size: 12px;">berbagibahagia<span
                                                class="fa fa-check" style="color:#1f5daa;"></span>
                                        </p>
                                        <hr style="margin:0;">
                                        <div class="product_price2 shopping-cart" style="font-size:10px;">
                                            <table class="table">
                                                <tbody>
                                                    <tr style="margin-bottom:-10px;">
                                                        <td align="left">Terkumpul</td>
                                                        <td align="right" style="text-align:right; ">Sisa Waktu</td>
                                                    </tr>
                                                    <tr style=" border-top: 2px solid #ffffff;">
                                                        <td align="left"><b>Rp.480.018</b></td>
                                                        <td align="right" style="text-align:right;"><b>78 Hari </b></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <p></p>
                                    </div>
                                    <div class="starratin2 center">
                                        <div class="progress" style="width:100%;">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="2.4243333333333"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 2.42433%;"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active"
                            style="padding-bottom: 15px; width: 209.444px; margin-right: 15px;" role="group"
                            aria-label="1 / 4">
                            <div class="text-center">
                                <div class="product_list2">
                                    <div class="product_img2">
                                        <img class="img-responsive"
                                            src="https://berbagibahagia.org/gambarUpload/gerobak pak sunarya.png"
                                            alt="#" style="width: 100%; height: auto; border-radius: %;" title="">
                                    </div>
                                    <div class="product_detail_btm2">
                                        <div class="center">
                                            <h4 style="font-size: 11px"><b>BANTU RENOVASI MASJID AT-TAUBAH DENGAN
                                                    SEDEKAH TER</b></h4>
                                        </div>
                                        <p class="center author mt-1" style="font-size: 12px;">berbagibahagia<span
                                                class="fa fa-check" style="color:#1f5daa;"></span>
                                        </p>
                                        <hr style="margin:0;">
                                        <div class="product_price2 shopping-cart" style="font-size:10px;">
                                            <table class="table">
                                                <tbody>
                                                    <tr style="margin-bottom:-10px;">
                                                        <td align="left">Terkumpul</td>
                                                        <td align="right" style="text-align:right; ">Sisa Waktu</td>
                                                    </tr>
                                                    <tr style=" border-top: 2px solid #ffffff;">
                                                        <td align="left"><b>Rp.480.018</b></td>
                                                        <td align="right" style="text-align:right;"><b>78 Hari </b></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <p></p>
                                    </div>
                                    <div class="starratin2 center">
                                        <div class="progress" style="width:100%;">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="2.4243"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 2%;"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row article-body mt-3 mx-0"></div>
                </div>
            </div>
    </div>
    </div>


    <div id="berbagi-link-location-container" class="berbagi-link-super-container tab-information ">
        <div class="modal-location-super-container">
            <div class="modal-location-container">
                <div class="text-center">
                    <img class="modal-location-avatar-img tab-information-container item-tab-container" style="
                                  background: url(https://berbagi.link/admin/get_file/c443f8e08e3011ecb2400538ebd7376c_1847.png);
              background-repeat: no-repeat;
              background-size: cover;
              background-position: center center;
                              ">
                    <img class="modal-location-avatar-img tab-ibadah-container item-tab-container" style="
                                  background: url(https://berbagi.link/admin/get_file/c443f8e08e3011ecb2400538ebd7376c_1847.png);
              background-repeat: no-repeat;
              background-size: cover;
              background-position: center center;
                              ">
                </div>
                <h3 class="modal-location-username-lbl mt-3 tab-information-container item-tab-container">
                    {{ auth()->user()->username }}
                </h3>
                <h3 class="modal-location-username-lbl mt-3 tab-ibadah-container item-tab-container">
                    {{ auth()->user()->username }}
                </h3>
                <div class="text-center mt-4">
                    <div class="">
                        <div class="modal-location-lbl mt-3 mb-4">
                            <a class="modal-location-lbl-container"
                                href="https://www.google.com/maps/place/Kilau+Indonesia+Cabang+Sumedang/@-6.8298529,107.9175756,15z/data=!4m5!3m4!1s0x2e6ec7996f1150e5:0xcc9227b38e92608!8m2!3d-6.8298529!4d107.9175756"
                                target="blank">
                                {{ auth()->user()->lokasi}}
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('layout.js-user')
</body>

</body>

</html>