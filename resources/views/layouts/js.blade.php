  <!-- Vendor JS Files -->
  <script src="{{ asset('nice-admin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ asset('nice-admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('nice-admin/assets/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{ asset('nice-admin/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{ asset('nice-admin/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{ asset('nice-admin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{ asset('nice-admin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{ asset('nice-admin/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('chart.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('nice-admin/assets/js/main.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jq uery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

  <!-- Template Ajax -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.2/jquery.min.js"></script>
  <script src="{{ asset('/js/crud.js') }}"></script>
  <script src="{{ asset('ijaboCropTool.min.js') }}"></script>

  <!-- Template summernote -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
  </script>

  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js">
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="plugins/Jquery-Table-Check-All/dist/TableCheckAll.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
     </script> 

  <script>
function convertToRupiah(objek) {
    separator = ".";
    a = objek.value;
    b = a.replace(/[^\d]/g, "");
    c = "";
    panjang = b.length;
    j = 0;
    for (i = panjang; i > 0; i--) {
        j = j + 1;
        if (((j % 3) == 1) && (j != 1)) {
            c = b.substr(i - 1, 1) + separator + c;
        } else {
            c = b.substr(i - 1, 1) + c;
        }
    }
    if (c <= 0) {
        objek.value = '';
    } else {
        objek.value = 'Rp. ' + c;
    }

}
  </script>

  <!-- Fungsi crop image -->
  <script type="text/javascript">
// var $modal = $('#modal');
var image = document.getElementById('image');
var cropper;

$("body").on("change", ".image", function(e) {
    var files = e.target.files;
    var done = function(url) {
        image.src = url;
        //   window.$modal.modal();
        $('#modal').modal('show');
    };
    var reader;
    var file;
    var url;

    if (files && files.length > 0) {
        file = files[0];

        if (URL) {
            done(URL.createObjectURL(file));
        } else if (FileReader) {
            reader = new FileReader();
            reader.onload = function(e) {
                done(reader.result);
            };
            reader.readAsDataURL(file);
        }
    }
});

$('#modal').on('shown.bs.modal', function() {
    cropper = new Cropper(image, {
        aspectRatio: 2,
        viewMode: 3,
        preview: '.preview'
    });
}).on('hidden.bs.modal', function() {
    cropper.destroy();
    cropper = null;
});

$("#crop").click(function() {
    canvas = cropper.getCroppedCanvas({
        width: 1066,
        height: 600,
    });

    canvas.toBlob(function(blob) {
        url = URL.createObjectURL(blob);
        var reader = new FileReader();
        reader.readAsDataURL(blob);
        reader.onloadend = function() {
            var base64data = reader.result;
            $('#modal').modal('hide');

            // document.getElementById('base').value = base64data;
            $("#base").val(base64data);
            // $.ajax({
            //     type: "POST",
            //     dataType: "json",
            //     url: "artikel/create",
            //     data: {'_token': $('meta[name="csrf_token"]').attr('content'), 'image': base64data},
            //     success: function(data){
            //         $modal.modal('hide');
            //         alert("success upload image");
            //     }
            //   });
        }
    });
})
  </script>

  <!-- SHOW HIDE TYPE -->
  <script type="text/javascript">
$(document).ready(function() {
    $('#informasi').hide();
    $('#sosmed').hide();
    $('#payment').hide();
    $('#show').on('change', function() {
        var optionSelected = $("option:selected", this);
        var valueSelected = this.value;
        if (valueSelected == 1) {
            $("#informasi").show();
            $("#sosmed").hide();
            $("#payment").hide();
            $('#email').hide();
            $('#link').hide();
            $('#generate').hide();
            $('#notlp').hide();
        } else if (valueSelected == 2) {
            $("#sosmed").show();
            $("#informasi").hide();
            $("#payment").hide();
            $('#email').hide();
            $('#link').hide();
            $('#generate').hide();
            $('#notlp').hide();
        } else {
            $("#payment").show();
            $("#sosmed").hide();
            $("#informasi").hide();
            $('#email').hide();
            $('#link').hide();
            $('#generate').hide();
            $('#notlp').hide();
        }
    });
});
  </script>

  <!-- show hide informasi -->
  <script type="text/javascript">
$(document).ready(function() {
    $('#email').hide();
    $('#link').hide();
    $('#generate').hide();
    $('#notlp').hide();
    $('#tipeinformasi').on('change', function() {
        var optionSelected = $("option:selected", this);
        var valueSelected = this.value;
        if (valueSelected == "email") {
            $("#email").show();
            $("#generate").show();
            $("#link").hide();
            $("#notlp").hide();
        } else if (valueSelected == "telp") {
            $("#notlp").show();
            $("#generate").show();
            $("#link").hide();
            $("#email").hide();
        } else {
            $("#link").show();
            $("#generate").show();
            $("#email").hide();
            $("#notlp").hide();
        }
    });
});
  </script>

  <!-- SHOW HIDE SOSIAL MEDIA -->
  <script type="text/javascript">
$(document).ready(function() {
    $('#email').hide();
    $('#link').hide();
    $('#nomor').hide();
    $('#chat').hide();
    $('#user').hide();
    $('#tipesosmed').on('change', function() {
        var optionSelected = $("option:selected", this);
        var valueSelected = this.value;
        if (valueSelected == 'wa') {
            $("#nomor").show();
            $("#chat").show();
            $("#link").hide();
            $("#generate").hide();
            $("#user").hide();
        } else if (valueSelected == 'yt') {
            $("#link").show();
            $("#generate").show();
            $("#nomor").hide();
            $("#chat").hide();
            $("#user").hide();
        } else if (valueSelected == 'tiktok') {
            $("#link").show();
            $("#generate").show();
            $("#nomor").hide();
            $("#chat").hide();
            $("#user").hide();
        } else if (valueSelected == 'linkedin') {
            $("#link").show();
            $("#generate").show();
            $("#nomor").hide();
            $("#chat").hide();
            $("#user").hide();
        } else {
            $("#user").show();
            $("#generate").show();
            $("#nomor").hide();
            $("#chat").hide();
            $("#link").hide();
        }
    });
});
  </script>

  <!-- SHOW HIDE TYPE PAYMENT -->
  <script type="text/javascript">
$(document).ready(function() {
    $('#link').hide();
    $("#generate").hide();
    $('#tipepayment').on('change', function() {
        var optionSelected = $("option:selected", this);
        var valueSelected = this.value;
        if (valueSelected == "qris") {
            $("#link").show();
            $("#generate").show();
        } else {
            $("#user").hide();
            $("#generate").hide();
            $("#nomor").hide();
            $("#chat").hide();
            $("#link").hide();
        }
    });
});
  </script>
  <script type="text/javascript">
$("#profileImage").click(function(e) {
    $("#imageUpload").click();
});

function fasterPreview(uploader) {
    if (uploader.files && uploader.files[0]) {
        $('#profileImage').attr('src',
            window.URL.createObjectURL(uploader.files[0]));
    }
}

$("#imageUpload").change(function() {
    fasterPreview(this);
});
  </script>

  <script type="text/javascript">
  </script>
  <script type="text/javascript">
$(document).ready(function() {

    $('#master').on('click', function(e) {
        if ($(this).is(':checked', true)) {
            $(".sub_chk").prop('checked', true);
        } else {
            $(".sub_chk").prop('checked', false);
        }
    });
    $('.delete_all').on('click', function(e) {
        var allVals = [];
        $(".sub_chk:checked").each(function() {
            allVals.push($(this).attr('data-id'));
        });
        if (allVals.length <= 0) {
            alert("Please select row.");
        } else {
            var check = Swal.fire({
                icon: 'info',
                title: 'Apakah anda yakin?',
                text: 'Anda tidak akan dapat mengembalikan data yang terhapus!',
                button: 'Ok',
            });
            if (check == true) {
                var join_selected_values = allVals.join(",");
                $.ajax({
                    url: $(this).data('url'),
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: 'ids=' + join_selected_values,
                    success: function(data) {
                        if (data['success']) {
                            $(".sub_chk:checked").each(function() {
                                $(this).parents("tr").remove();
                            });
                            alert(data['success']);
                        } else if (data['error']) {
                            alert(data['error']);
                        } else {
                            alert('Whoops Something went wrong!!');
                        }
                    },
                    error: function(data) {
                        alert(data.responseText);
                    }
                });
                $.each(allVals, function(index, value) {
                    $('.list-link').filter("[data-id='" + value + "']").remove();
                });
            }
        }
    });
    $('[data-toggle=confirmation]').confirmation({
        rootSelector: '[data-toggle=confirmation]',
        onConfirm: function(event, element) {
            element.trigger('confirm');
        }
    });
    $(document).on('confirm', function(e) {
        var ele = e.target;
        e.preventDefault();
        $.ajax({
            url: ele.href,
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                if (data['success']) {
                    $("#" + data['tr']).slideUp("slow");
                    alert(data['success']);
                } else if (data['error']) {
                    alert(data['error']);
                } else {
                    alert('Whoops Something went wrong!!');
                }
            },
            error: function(data) {
                alert(data.responseText);
            }
        });
        return false;
    });
});
  </script>
  <script type="text/javascript">

  </script>

  <!-- FILTER BERDASARKAN TANGGAL BUAT BAGI TO -->