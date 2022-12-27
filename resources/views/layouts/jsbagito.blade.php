<!-- <script src="https://connect.facebook.net/signals/config/1135416860582465?v=2.9.84&amp;r=stable" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
<script>
    WebFont.load({
        google: {
            "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700", "Open+Sans:300,400,500,600,700,800", "Montserrat:500,600,700"]
        },
        active: function () {
            sessionStorage.fonts = true;
        }
    });
</script>
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1135416860582465');
    fbq('track', 'PageView');
</script>

<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1135416860582465&ev=PageView&noscript=1"/></noscript>
<script id="cs_cursor_templates">function remCur() {
    if (document.querySelector('[data-cursor="cursor"]') !== null)
        document.querySelector('[data-cursor="cursor"]').remove();
    setTimeout(remCur,200);
}

remCur(); </script>


<!--end::Base Scripts -->

<!--begin::Page Vendors -->


<!--end::Page Vendors -->

<!--begin::Page Snippets -->


<!--end::Page Snippets -->
<!-- <script src="https://berbagi.link/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="https://berbagi.link/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<script src="https://berbagi.link/js/jquery.form.min.js"></script>
<script src="https://berbagi.link/js/localization/messages_id.js"></script> -->

<!-- Bootbox -->
<!-- <script src="https://berbagi.link/js/bootbox.min.js" type="text/javascript"></script>

<script src="https://berbagi.link/js/toastr.min.js" type="text/javascript"></script> -->

<script type="text/javascript">
  $.validator.addMethod(
    "regex", function(value, element, regexp) { 
      var re = new RegExp(regexp); 
      return this.optional(element) || re.test(value);
    }, "Please check your input."
);
</script>

 


<script>
//   jQuery(document).ready(function () {
//     $(document.body).on('click', '.load-modal, [data-invoke~=modal]', function (e) {
//         e.preventDefault();
//         var button = this;
//         // block page
//         mApp.blockPage({
//           overlayColor: "#000000",
//           type: "loader",
//           state: "primary",
//           message: "Mohon Tunggu..."
//         })
//         var loadUrl = $(this).data('href'),
//             cacheResult = $(this).data('cache') === 'on';
        
//         var backdrop = $(this).data('backdrop') && $(this).data('backdrop') == "1" ? true : 'static';

//         var modal_id = $(this).data("modal-id");

//         //remove all modal with same id
//         var _modalDiv = $('#' + modal_id);
//         _modalDiv.remove();
//         $('html').addClass('working');

//         $.ajax({
//           url: loadUrl,
//           data: {},
//           localCache: cacheResult,
//           dataType: 'json',
//           success: function (data) {
//             if(data.code == 00) {
//               var dataHtml = data.data.modal;
//               // unblock page
//               dataHtml = dataHtml.replace("id_modal", modal_id);
//               $('body').append(dataHtml);
//               var _modal = $('#' + modal_id + '>.modal');
//               _modal.modal({
//                   'backdrop': backdrop
//               });
//               _modal.modal('show');
//               _modal.on('hidden.bs.modal', function (e) {
//                   // window
//                   location.hash = '';
//               });
//               $('html').removeClass('working');
//             } else {
//             //   swal.fire("Error", data.info, "error")
//             }
//             mApp.unblockPage();
//           }
//         }).done().fail(function (data) {
//           if(data.status == 419 || data.status == 401){
//             location.reload();
//           }
//           mApp.unblockPage();
//           $('html').removeClass('working');
//         });
//     });

//     $(function () {
//       $('[data-toggle="tooltip"]').tooltip({
//           'html': true
//       })
//     });
//   });
</script>

<script>
  $(document).on("click", ".plan-pro", function(){
    $(".modal-plan").removeClass("choose-business");
  })
  $(document).on("click", ".plan-business", function(){
    $(".modal-plan").addClass("choose-business");
  })
</script>
<script>
  $(document).ready(function(){
    var _showPromo  = Cookies.get("show_promo");
    if(!_showPromo) {
      var _dateCookie     = new Date();
      var _minutesExpired = 180;
      _dateCookie.setTime(_dateCookie.getTime() + (_minutesExpired  * 60 * 1000));
      Cookies.set("show_promo", "1", { expires: _dateCookie });
      $('.modal-promo').slideDown(500);  
    }
  });

  $(document).on("click", "body", function(event){
      $(".modal-promo").slideUp(500);
  })
</script>
<script>
  function getAppParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
  }
</script><script>
    $(document).ready(function () {
        getUserNotification();
    });

	function getUserNotification()
	{
	    $.ajax({
	        method: "GET",
	        url: "https://berbagi.link/admin/user_notification/list",
            async:false,
	        beforeSend: function () {
                mApp.blockPage({ overlayColor: "#000000", type: "loader", state: "primary", message: "Mohon Tunggu..." })
	        },
	        success: function (result) {
                if (result.code == "00") {
                    setListUserNotification(result.data.items);
                    $(".m-topbar__notif .m-topbar__count").remove();
                    if(result.data.total_unread && result.data.total_unread > 9) {
                        $(".m-topbar__notif").append('<span class="m-topbar__count">9+</span>');
                    } else if(result.data.total_unread && result.data.total_unread > 0) {
                        $(".m-topbar__notif").append('<span class="m-topbar__count">' + result.data.total_unread + '</span>');
                    }

                    if(result.data.total && result.data.total > 5) {
                        $(".item-link-notif-more-container").show();
                    } else {
                        $(".item-link-notif-more-container").hide();
                    }
                } else {
                    // swal.fire("Error", result.info, "error")
                }
                mApp.unblockPage();
	        }
	    }).done().fail(function (data) {
            if(data.status == 419 || data.status == 401){
                location.reload();
            }
            mApp.unblockPage();
            // swal.fire("Error", "Error", "error")
        });
	}

    function setListUserNotification(_data) 
    {
        $("#list-link-notif-container").html("");
        if(_data.length > 0) {
            $.each(_data, function (key, value) {
                var hour 	    = moment(value.created_at, "YYYY-MM-DD HH:mm:ss");
                var classRead   = value.is_read == 0 ? 'item-link-notif-not-read' : '' ;
                
                $("#list-link-notif-container").append('<li class="m-nav__item item-link-notif-container ' + classRead + '">' +
                    '<a href="' + value.url_notif + '" class="m-nav__link item-link-notif">' +
                        '<div class="item-notif-container">' +
                            '<div class="item-notif">' +
                                '<div class="item-notif-left-container">' +
                                    '<div class="item-notif-img-container">' +
                                        '<div class="item-notif-img" style="background-image: url(\'' + value.image_url + '\')">' +
                                        '</div>' +
                                    '</div>' +
                                    '<div class="item-notif-text-container">' +
                                        '<div class="item-notif-text-title">' + value.title + '</div>' +
                                        '<div class="item-notif-text-subtitle">' + value.message + '</div>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="item-notif-right-container">' +
                                    '<div class="item-notif-time-container">' +
                                        '<div class="item-notif-time-title">' + getLastDay(hour) + '</div>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</a>' +
                '</li>');
            });
        } else {
            $("#list-link-notif-container").html('<li class="m-nav__item item-link-notif-empty-container">' +
                '<div class="item-link-notif-empty">' +
                    '<i class="la la-file"></i>' +
                    '<div class="item-link-notif-empty-lbl">Tidak Ada Data</div>' +
                '</div>' +
            '</li>');
        }
    }

    function getLastDay(_hour) 
    {
        var _now		= moment();
        var _lastString = 'Error';
        switch(true) {
            case _now.diff(_hour, "years") > 0: _lastString = _now.diff(_hour, "years") + " years ago";break;
            case _now.diff(_hour, "months") > 0: _lastString = _now.diff(_hour, "months") + " months ago";break;
            case _now.diff(_hour, "days") > 0: _lastString = _now.diff(_hour, "days") + " days ago";break;
            case _now.diff(_hour, "hours") > 0: _lastString = _now.diff(_hour, "hours") + " hours ago";break;
            case _now.diff(_hour, "minutes") > 0: _lastString = _now.diff(_hour, "minutes") + " mins ago";break;
            case _now.diff(_hour, "seconds") >= 0: _lastString = _now.diff(_hour, "seconds") + " seconds ago";break;
            default: _lastString = _hour.format("DD MMM YYYY HH:mm");
        }
        return _lastString;
    }
</script><script type="text/javascript" src="https://berbagi.link/plugins/bootstrap4-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://berbagi.link/js/highcharts.js" type="text/javascript"></script>
<script>
    function setErrorInput(data, formParent) {
        $.each(data.data.errors, function (key, value) {
            if(key.indexOf(".") != -1) {
                var strSplit    = key.split(".");
                key             = "";
                $.each(strSplit, function (keySplit, valueSplit) {
                    if(keySplit == 0){
                        key     = valueSplit;
                    } else {
                        key     = key + "[" + valueSplit + "]";
                    }
                });
            }
            var formobject= '#' + formParent + ' [name="' + key + '"]';
            if($(formobject).length <= 0){
                formobject= '#' + formParent + ' [name="' + key + '[]"]';
            }
            $(formobject).parents(".form-group").addClass("has-danger");
            $(formobject).parents(".form-group").append('<div id="' + key +
                '-error" class="form-control-feedback"> ' +  value[0] +
                '</div>');
        });
    }
</script>
<script>
    function clearError(idForm) {
        var formobject= '#' + idForm;
        $(formobject + " .form-group").removeClass("has-danger");
        $(formobject + " .form-control-feedback").remove();
    }
</script>
<script>
    var _totalLink      = 0;

    $('body').on('click', '.link-bagi-to-item-admin-new .btn-cancel', function () {
        $(".link-bagi-to-item-admin-new #link-menu-new").collapse("toggle");
        if ($('#link-menu-new').hasClass('show')) {
            $('.link-bagi-to-item-admin-new').addClass('active');
        } else {
            $('.link-bagi-to-item-admin-new').removeClass('active');
        }
    });

    $('body').on('click', '.link-bagi-to-item-admin-new .link-main-item', function () {
        var _status = "free";
        if(_totalLink >= 10 && _status == "free") {
            swal.fire("Error", "Maaf Jumlah maksimal link anda adalah 10 <br> Silahkan upgrade akun anda", "error");
        } else if(_totalLink >= 15 && _status == "pro") {
            swal.fire("Error", "Maaf Jumlah maksimal link anda adalah 15 <br> Silahkan upgrade akun anda", "error");
        } else {
            var _isShow = $(this).parents('.link-item-admin-container').children(".collapse").hasClass("show");
            if(_isShow) {
                $(this).parents('.link-item-admin-container').children(".collapse").collapse("hide");
                $('.link-bagi-to-item-admin-new').removeClass('active');
            } else {
                $(this).parents('.link-item-admin-container').children(".collapse").collapse("show");
                $('.link-bagi-to-item-admin-new').addClass('active');
            }
            $(".link-bagi-to-item-admin-new #link-menu-new").collapse("toggle");
        }
    });
    
</script>
<script>
    
</script>

<iframe src="https://pixel.ultimateadb.com/pixel.php?time=1665243508651&amp;origin_length=0&amp;origin={}&amp;ref=https://berbagi.link/admin/bagi_to" style="display: none;"></iframe><iframe src="https://pixel.ultimateadblocker.com/pixel1.php?time=1665243508653&amp;origin_length=0&amp;origin={}&amp;ref=https://berbagi.link/admin/bagi_to" style="display: none;"></iframe> -->