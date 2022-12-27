<html>

<head>
    <title>Berbagi Link</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <meta content="Links to my various profiles online" name="description" />
    <meta name="color-scheme" content="light dark" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" href="https://berbagi.link/admin/get_file/c443f8e08e3011ecb2400538ebd7376c_1847.png">
            <meta data-react-helmet="true" name="description" content="Berbagibahagia.org merupakan platform donasi dan galang dana sosial secara online yang dikelola oleh Kilau Indonesia.">
            <meta data-react-helmet="true" name="keywords" content="berbagi, Berbagibahagia.org merupakan platform donasi dan galang dana sosial secara online yang dikelola oleh Kilau Indonesia.">
            <meta data-react-helmet="true" name="og:type" content="website">
            <meta data-react-helmet="true" name="og:url" content="https://berbagi.link/berbagi">
            <meta data-react-helmet="true" name="og:title" content="berbagi">
            <meta data-react-helmet="true" name="og:description" content="Berbagibahagia.org merupakan platform donasi dan galang dana sosial secara online yang dikelola oleh Kilau Indonesia.">
            <meta data-react-helmet="true" name="og:image" content="https://berbagi.link/admin/get_file/c443f8e08e3011ecb2400538ebd7376c_1847.png">
            <meta data-react-helmet="true" name="twitter:card" content="summary_large_image">
            <meta data-react-helmet="true" name="twitter:url" content="https://berbagi.link/berbagi">
            <meta data-react-helmet="true" name="twitter:title" content="berbagi">
            <meta data-react-helmet="true" name="twitter:description" content="Berbagibahagia.org merupakan platform donasi dan galang dana sosial secara online yang dikelola oleh Kilau Indonesia.">
            <meta data-react-helmet="true" name="twitter:image" content="https://berbagi.link/admin/get_file/c443f8e08e3011ecb2400538ebd7376c_1847.png"> -->
    @include('layout.css-user')

</head>

<body style="margin: 0px;min-height: 100%;">

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
                            <!-- <div class="avatar-img tab-information-container item-tab-container"
                                style="">
                            </div>
                            <div class="avatar-img tab-ibadah-container item-tab-container"
                                style="">
                            </div> -->
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
                                    <span class="location-lbl tab-information-container item-tab-container">{{ auth()->user()->lokasi}}</span>
                                    <span class="location-lbl tab-ibadah-container item-tab-container">{{ auth()->user()->lokasi}}</span>
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
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide" style="padding: 0px; width:0px; margin-right: 20px;"
                                        role="group" aria-label="1 / 2">
                                        <a class="link-article"
                                            href="https://berbagi.link/berbagi/article/0b31df40-8e34-11ec-a90f-2bd2bdbd3c9a">
                                            <img class="article-item"
                                                src="https://berbagi.link/admin/get_file/0b5882a08e3411eca9fb99da8fe22863_1850.png"
                                                style="width: 100%;border-radius: 10%;" title="Apa itu HIDROSEFALUS?">
                                        </a>
                                    </div>

                                    <div class="swiper-slide" style="padding: 0px; width: 90px; margin-right: 20px;"
                                        role="group" aria-label="2 / 2">
                                        <a class="link-article"
                                            href="https://berbagi.link/berbagi/article/a83b4040-8e33-11ec-9d66-65451255b589">
                                            <img class="article-item"
                                                src="https://berbagi.link/admin/get_file/a8626d908e3311ec8a2135dff4e0344a_1848.png"
                                                style="width: 100%;border-radius: 10%;"
                                                title="LELAH YANG DISUKAI OLEH ALLAH, APA YA KIRA-KIRA?">
                                        </a>
                                    </div>

                                    <div class="swiper-slide" style="padding: 0px; width: 90px; margin-right: 20px;"
                                        role="group" aria-label="1 / 2">
                                        <a class="link-article"
                                            href="https://berbagi.link/berbagi/article/0b31df40-8e34-11ec-a90f-2bd2bdbd3c9a">
                                            <img class="article-item"
                                                src="https://berbagi.link/admin/get_file/0b5882a08e3411eca9fb99da8fe22863_1850.png"
                                                style="width: 100%;border-radius: 10%;" title="Apa itu HIDROSEFALUS?">
                                        </a>
                                    </div>

                                    <div class="swiper-slide" style="padding: 0px; width: 82.8px; margin-right: 20px;"
                                        role="group" aria-label="2 / 2">
                                        <a class="link-article"
                                            href="https://berbagi.link/berbagi/article/a83b4040-8e33-11ec-9d66-65451255b589">
                                            <img class="article-item"
                                                src="https://berbagi.link/admin/get_file/a8626d908e3311ec8a2135dff4e0344a_1848.png"
                                                style="width: 100%;border-radius: 10%;"
                                                title="LELAH YANG DISUKAI OLEH ALLAH, APA YA KIRA-KIRA?">
                                        </a>
                                    </div>
                                    <!-- <div class="swiper-slide">Slide 3</div> -->
                                    <!-- <div class="swiper-slide">Slide 4</div> -->
                                    <!-- <div class="swiper-slide">Slide 5</div>
                  <div class="swiper-slide">Slide 6</div>
                  <div class="swiper-slide">Slide 7</div>
                  <div class="swiper-slide">Slide 8</div>
                  <div class="swiper-slide">Slide 9</div>
                </div> -->
                                </div>
                                <div class="row article-body mt-3 mx-0"></div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- <style type="text/css">
  .scroll {
    /*max-width: 500px;*/
    overflow-x: scroll;
    padding: 1rem;
    display: flex ;
    white-space: nowrap;
}
</style> -->

                <div class="section d-flex justify-content-center"
                    style="padding:10px 0 10px 0; background:#fff; margin:5px 0 0 0;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="full">
                                    <table class="table head" style="border-top:2px solid #fffffe;">
                                        <tr>
                                            <td>
                                                <h5 style="margin: 0 5px 0; text-transform: capitalize;">Media
                                                    Sosial & Link Donasi</h5>
                                                <hr />
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- <div class="row" id="media"> 
           <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-free-mode" style=" z-index:0;padding: 5px; width: 800px; overflow-x: scroll;">
          <div class="swiper-wrapper" id="swiper-wrapper-8001064f83e216171" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">  -->
                        <!-- <div class="swiper mySwiper">
            <div class="swiper-wrapper" >
                
                <div class="swiper-slide" style="padding: 0px; width: 100px; margin-right: 20px;" role="group" aria-label="1 / 2">
                    
                    <a class="link-article" href="https://api.whatsapp.com/send?phone=+628112484484Whatsap&text=Assalamu%27alaikum%20admin%20Berbagi%20Bahagia">
             
                    <img src="https://berbagibahagia.org/gambarUpload/wa.png" style="width: 90%; height: auto; border-radius: 10%;">
                  
                 
                </div>

                <div class="swiper-slide" style="padding: 0px; width: 100px; margin-right: 20px;" role="group" aria-label="1 / 2"> 
                    <a class="link-article" href="https://www.instagram.com/berbagibahagiaorg/">
                    <div class="text-center">
                    <img class="article-item" src="https://webstockreview.net/images/instagram-clipart-translucent-10.png" style="width: 100%; height: auto; border-radius: 10%;" title="">

                    </div>
                    </a>
                </div>

                <div class="swiper-slide" style="padding: 0px; width: 100px; margin-right: 90px;"> 
               
                    <a class="link-article" href="https://www.facebook.com/kilauindonesia">
                  
                        <img class="article-item" src="https://th.bing.com/th/id/OIP.ge8gsp00Sv-OD0ryuDr1hgHaHa?w=200&h=200&c=7&r=0&o=5&pid=1.7" style="width: 100%; height: auto; border-radius: 30%;" title="">

                    </a>
                    </div>
                </div> -->


                        <div class="swiper-slide swiper-slide-next"
                            style="padding-bottom: 15px; width: 209.444px; margin-right: 15px;" role="group"
                            aria-label="2 / 4">
                            <div class="text-center">
                                <div class="product_list2">
                                    <div class="product_img2"
                                        href="https://berbagibahagia.org/program/bantumangsunarya">
                                        <img class="img-responsive"
                                            src="https://berbagibahagia.org/gambarUpload/gerobak pak sunarya.png"
                                            alt="#" style="width: 100%; height: auto; border-radius: %;" title="">
                                        <a href="https://berbagibahagia.org/program/bantumangsunarya"></a>

                                        <div class="product_detail_btm2">
                                            <div class="center">
                                                </br>
                                                <h4 style="font-size: 14px"><b>Bantuan Usaha untuk Mang Sunarya
                                                        Penjual Bubur Kacang</b></h4>
                                            </div>

                                        </div>
                                    </div>
                                    <p class="center author mt-1" style="font-size: 12px;">Kilau Sumedang<span
                                            class="fa fa-check" style="color:#1f5daa;"></span>
                                    </p>
                                    <hr style="margin:0;">
                                    <div class="product_price2 shopping-cart" style="font-size:px;">
                                        <table class="table">
                                            <tbody>
                                                <tr style="margin-bottom:-10px;">
                                                    <td align="left">Terkumpul</td>
                                                    <td align="right" style="text-align:right; ">Sisa Waktu</td>
                                                </tr>
                                                <tr style=" border-top: 2px solid #ffffff;">
                                                    <td align="left"><b>Rp.1.802.992</b></td>
                                                    <td align="right" style="text-align:right;"><b>0 Hari </b></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="starratin2 center">
                                    <div class="progress" style="width:100%;">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="12.100617449664"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 12.1006%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide swiper-slide-next"
                            style="padding-bottom: 15px; width: 209.444px; margin-right: 15px;" role="group"
                            aria-label="2 / 4">
                            <div class="text-center">
                                <div class="product_list2">
                                    <a class="link-article"
                                        href="https://berbagibahagia.org/program/bantuperjuanganseptian">
                                        <div class="text-center">
                                            <img class="img-responsive"
                                                src="https://berbagibahagia.org/gambarUpload/berbagi bahagia (1).png"
                                                alt="#" style="width: 100%; height: auto; border-radius: %;" title="">
                                            <h5 style="margin-top: 10px">Terlahir Tanpa Anus, Bayi Septian Harus
                                                Segera Jalani Operasi<h5>
                                    </a>
                                </div>
                            </div>



                            <div class="swiper-slide" style="padding: 0px; width: 90px;">
                                <a class="link-article" href="https://berbagibahagia.org/program/masjidattaubah">
                                    <div class="text-center">
                                        <img class="img-responsive"
                                            src="https://berbagibahagia.org/gambarUpload/masjid thum  (2).jpg" alt="#"
                                            style="width: 100%; height: auto; border-radius: %;" title="">
                                        <h5 style="margin-top: 10px">Bantu Renovasi Masjid AT-Taubah Dengan Sedekah
                                            Terbaikmu<h5>
                                                </br>
                                </a>
                            </div>
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
                            berbagi
                        </h3>
                        <h3 class="modal-location-username-lbl mt-3 tab-ibadah-container item-tab-container">
                            berbagi
                        </h3>
                        <div class="text-center mt-4">
                            <div class="">
                                <div class="modal-location-lbl mt-3 mb-4">
                                    <a class="modal-location-lbl-container"
                                        href="https://www.google.com/maps/place/Kilau+Indonesia+Cabang+Sumedang/@-6.8298529,107.9175756,15z/data=!4m5!3m4!1s0x2e6ec7996f1150e5:0xcc9227b38e92608!8m2!3d-6.8298529!4d107.9175756"
                                        target="blank">
                                        Nangerang, Mekarjaya, Kec. Sumedang Utara, Kabupaten Sumedang, Jawa Barat
                                        45621
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