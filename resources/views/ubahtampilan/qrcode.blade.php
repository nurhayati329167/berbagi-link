<html data-cursor-style="true" data-chrome-id="bmjmipppabdlpjccanalncobmbacckjn"
    class="wf-opensans-n6-active wf-opensans-n4-active wf-opensans-n3-active wf-opensans-n7-active wf-opensans-n8-active wf-poppins-n4-active wf-poppins-n3-active wf-poppins-n5-active wf-poppins-n6-active wf-poppins-n7-active wf-active">

<head>
    <meta charset="utf-8">
    <title>Bisaberbagi</title>
    <link rel="shortcut icon" href="https://berbagi.link/images/b_berbagi_warna.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7COpen+Sans:300,400,600,700,800"
        media="all">
    <script>
    WebFont.load({
        google: {
            "families": ["Poppins:300,400,500,600,700", "Open+Sans:300,400,600,700,800"]
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
    </script>
    <meta data-react-helmet="true" name="description" content="Tautkan Banyak Link Dalam Satu Klik">
    <meta data-react-helmet="true" name="keywords" content="bisaberbagi, berbagilink, bisa berbagi, berbagi link">
    <meta data-react-helmet="true" name="og:type" content="website">
    <meta data-react-helmet="true" name="og:url" content="https://berbagi.link">
    <meta data-react-helmet="true" name="og:title" content="BisaBerbagi">
    <meta data-react-helmet="true" name="og:description" content="Tautkan Banyak Link Dalam Satu Klik">
    <meta data-react-helmet="true" name="og:image" content="https://berbagi.link/images/b_berbagi_warna.png">
    <meta data-react-helmet="true" name="twitter:card" content="summary_large_image">
    <meta data-react-helmet="true" name="twitter:url" content="https://berbagi.link">
    <meta data-react-helmet="true" name="twitter:title" content="BisaBerbagi">
    <meta data-react-helmet="true" name="twitter:description" content="Tautkan Banyak Link Dalam Satu Klik">
    <meta data-react-helmet="true" name="twitter:image" content="https://berbagi.link/images/b_berbagi_warna.png">
    <!--end::Base Styles -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://berbagi.link/images/b_berbagi_warna.svg">
    <!--end::Page Vendors -->
    <link href="https://berbagi.link/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css">

    <!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
    <link href="https://berbagi.link/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css">
    <style>
    body {
        font-family: "Open Sans";
        margin: 0px;
        min-height: 100%;
    }

    .container {
        text-align: center;
    }

    .content-container {
        display: inline-block;
        width: 100%;
        max-width: 500px;
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .main-container {
        border: 7px solid black;
        border-radius: 10px;
        padding-bottom: 50px;

    }

    .qr-container,
    .username-container {
        text-align: center;
    }

    .username-container,
    .my-link-container,
    .media-social-container {
        padding: 5px 10px;
    }

    .username-container {
        margin-top: -40px;
    }

    .username-container .lbl-username {
        font-weight: 700;
        font-size: 25px;
    }

    .media-social-container {
        margin-top: 10px;
    }

    .media-social-content .lbl-share,
    .download-qr-content .lbl-download-qr {
        font-size: 14px;
        font-weight: 600;
    }

    .qr-container svg {
        display: inline-block;
        width: 100%;
        height: auto;
    }

    .link-container-user {
        width: 100%;
        max-width: 380px;
    }

    .link-container-user input {
        width: 100%;
        max-width: 380px;
    }

    .link-container-user {
        display: inline-block;
        /* margin-top: 35px; */
        position: relative;
    }

    .link-container-user input {
        background: rgba(101, 95, 95, 0.5);
        width: 380px;
        padding: 10px 65px 10px 15px;
        border-radius: 22px;
        border: 1px solid rgba(255, 255, 255, 0.5);
        /* font-weight: 800; */
        font-weight: 500;
        color: white;
        cursor: pointer;
    }

    .link-container-user .btn {
        position: absolute;
        right: 0px;
        background: rgb(70, 196, 191);
        padding: 9px 22px 10px 22px;
        border-top-right-radius: 22px;
        border-bottom-right-radius: 22px;
        border-radius: 22px;
        color: white;
        height: 100%;
    }

    .link-container-user .btn .fa {
        font-size: 18px;
    }

    .list-media-social,
    .list-pdf {
        margin-top: 10px;
    }

    a.media-social-item {
        width: 36px;
        display: inline-block;
        margin-right: 15px;
    }

    a.media-social-item img {
        width: 100%;
        border-radius: 100%;
    }

    .download-qr-container {
        margin-top: 15px;
    }

    .download-qr-item {
        margin-right: 15px;
        padding-top: 15px;
        padding-bottom: 5px;
    }

    .download-qr-item .fa {
        font-size: 20px;
    }

    .download-qr-item .lable-download-qr-item {
        margin-top: 8px;
    }

    .pdf-item {
        background: red;
    }

    .png-item {
        background: #31f331;
        border-color: #31f331;
    }

    .svg-item {
        background: #5959d8;
        border-color: #5959d8;
    }

    @media (max-width: 500px) {
        .link-container-user input {
            width: 100%;
        }
    }
    </style>
    <style type="text/css"></style>
</head>

<body>
    <div class="container">
        <div class="content-container">
            <div class="main-container">
                <div class="qr-container">
                    <div class="visible-print text-center">
                        {!! QrCode::size(100)->generate(Request::url()); !!}
                        <p>Scan me to return to the original page.</p>
                    </div>
                    <img style="width: 100%" src="">
                </div>
                <div class="username-container">
                    <div class="lbl-username">
                        nurhayati
                    </div>
                </div>
                <div class="my-link-container">
                    <div class="lbl-my-link">
                        <div class="link-container-user">
                            <input id="link-web" value="https://berbagibahagia.org/link/{{ Auth::user()->username}}"
                                readonly="" class="cs_pointer">
                            <button class="btn" onclick="copyMyLink()">
                                <i class="fa fa-copy"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="media-social-container">
                    <div class="media-social-content">
                        <div class="lbl-share">
                            Share Link:
                        </div>
                        <div class="list-media-social">
                            <div class="item-media-social">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://berbagi.link/nurhayati&amp;t="
                                    onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                                    target="_blank" title="Share on Facebook" class="media-social-item">
                                    <img src="https://berbagi.link/images/landing_page/facebook.png" alt="">
                                </a>
                                <a href="https://twitter.com/share?url=https://berbagi.link/nurhayati&amp;text="
                                    onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                                    target="_blank" title="Share on Twitter" class="media-social-item">
                                    <img src="https://berbagi.link/images/landing_page/twitter.png" alt="">
                                </a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://berbagi.link/nurhayati&amp;t="
                                    onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                                    target="_blank" title="Share on Linkedin" class="media-social-item">
                                    <img src="https://berbagi.link/images/linkedin.png" alt="">
                                </a>
                                <a href="https://timeline.line.me/social-plugin/share?url=https://berbagi.link/nurhayati"
                                    data-action="share/whatsapp/share"
                                    onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                                    target="_blank" title="Share on Line" class="media-social-item">
                                    <img src="https://berbagi.link/images/line.png" alt="">
                                </a>
                                <a href="https://web.whatsapp.com/send?text=https://berbagi.link/nurhayati"
                                    data-action="share/whatsapp/share" target="_blank" title="Share on Whatsapp"
                                    class="media-social-item">
                                    <img src="https://berbagi.link/images/whatsapp.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="download-qr-container">
                    <div class="download-qr-content">
                        <div class="lbl-download-qr">
                            Download QR Code:
                        </div>
                        <div class="list-pdf">
                            <a class="btn btn-danger download-qr-item pdf-item"
                                href="https://berbagi.link/admin/berbagi_link/qr_code/pdf" title="pdf">
                                <i class="fa fa-file-pdf"></i>
                                <div class="lable-download-qr-item">PDF</div>
                            </a>
                            <a class="btn btn-danger download-qr-item png-item"
                                href="https://berbagi.link/admin/berbagi_link/qr_code/qr_code.png" title="png"
                                download="">
                                <i class="fa fa-file-image"></i>
                                <div class="lable-download-qr-item">PNG</div>
                            </a>
                            <a class="btn btn-danger download-qr-item svg-item"
                                href="https://berbagi.link/admin/berbagi_link/qr_code/qr_code.svg" title="svg">
                                <i class="fa fa-file-image"></i>
                                <div class="lable-download-qr-item">SVG</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script>
    function copyMyLink() {
        var copyText = document.getElementById("link-web");
        copyText.select();
        document.execCommand("copy");
    }
    </script>
    <iframe
        src="https://pixel.ultimateadb.com/pixel.php?time=1668050651342&amp;origin_length=0&amp;origin={}&amp;ref=https://berbagi.link/admin/berbagi_link/qr_code"
        style="display: none;"></iframe><iframe
        src="https://pixel.ultimateadblocker.com/pixel1.php?time=1668050651347&amp;origin_length=0&amp;origin={}&amp;ref=https://berbagi.link/admin/berbagi_link/qr_code"
        style="display: none;"></iframe>
</body>

</html>