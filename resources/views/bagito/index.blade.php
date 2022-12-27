<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    @include('layouts.css')
    @include('layouts.cssbagito')
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> -->
</head>

<body>
    @include('layouts.header')
    @include('layouts.sidebar')


    <main id="main" class="main">
        <div class="m-grid__item m-grid__item--fluid m-wrapper wrapper-berbagi-link">
            <div class="m-subheader position-relative">
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
            <div class="container">
                <button type="button" class="btn btn-success pull-right mb-3 " data-toggle="modal"
                    data-target="#myLink"><i class="bi bi-plus"></i> Buat Link Baru</button>
                <div class="modal fade" id="myLink" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Buat Link Baru</h4>
                            </div>
                            <div class="modal-body">
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
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>


                <div class="card-body">
                    <div class="my-2">

                        <form method="get" action="{{ url('bagito/filter')}}">
                            <div class="col-md-4">
                                <input type="date" id="filter_date" class="form-control datepicker" name="dari"
                                    placeholder="Tanggal Dibuat..." value="{{ date('Y-m-d')}}">
                            </div>
                            <div class="col-md-4">
                                <input type="date" id="filter_date" class="form-control datepicker" name="sampai"
                                    placeholder="Tanggal Dibuat..." value="{{ date('Y-m-d')}}">
                            </div>


                            <button class="btn btn-primary">GET</button>
                        </form>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Link</th>
                            <th scope="col">Date</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($links as $key => $link)
                        <tr>
                            <th scope="row">{{ $link->id_to }}</th>
                            <td>{{ $link->link_to }}</td>
                            <td>{{ showDateTime($link->created_at, 'l, d F Y')}}</td>
                            <td width="18%">
                                <div class="col-md-4 search-form-group">
                                    <button type="button" class="btn btn-xs btn-success edit" onclick="copyTo()"><i
                                            class="bi bi-clipboard"></i></button>
                                </div>
                                <div class="col-md-4 search-form-group">
                                    <form method="post" action="{{url('/bagito/'.$link->id_to)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-xs btn-danger"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                                <div class="col-md-4 search-form-group">
                                    <button type="button" class="btn btn-xs btn-primary" data-toggle="modal"
                                        data-target="#exampleModal"><i class="bi bi-share"></i></button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Share link</h5>
                        </div>
                        <div class="modal-body">

                            <div class="media-social-content">
                                <div class="list-media-social">
                                    <div class="item-media-social text-center default_cursor_cs">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://bagi.to/youtube_wr&amp;t=youtube"
                                            onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                                            target="_blank" title="Share on Facebook" class="media-social-item">
                                            <img src="https://berbagi.link/images/landing_page/facebook.png" alt="">
                                        </a>
                                        <a href="https://twitter.com/share?url=https://bagi.to/youtube_wr&amp;text=youtube"
                                            onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                                            target="_blank" title="Share on Twitter" class="media-social-item">
                                            <img src="https://berbagi.link/images/landing_page/twitter.png" alt="">
                                        </a>
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://bagi.to/youtube_wr&amp;t=youtube"
                                            onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                                            target="_blank" title="Share on Linkedin" class="media-social-item">
                                            <img src="https://berbagi.link/images/linkedin.png" alt="">
                                        </a>
                                        <a href="https://timeline.line.me/social-plugin/share?url=https://bagi.to/youtube_wr"
                                            data-action="share/whatsapp/share"
                                            onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                                            target="_blank" title="Share on Line"
                                            class="media-social-item default_pointer_cs">
                                            <img src="https://berbagi.link/images/line.png" alt=""
                                                class="default_pointer_cs">
                                        </a>
                                        <a href="https://web.whatsapp.com/send?text=https://bagi.to/youtube_wr"
                                            data-action="share/whatsapp/share" target="_blank" title="Share on Whatsapp"
                                            class="media-social-item default_pointer_cs">
                                            <img src="https://berbagi.link/images/whatsapp.png" alt=""
                                                class="default_pointer_cs">
                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

    @include('layouts.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script> -->
    <!-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> -->

    <script>
    jQuery(document).ready(function() {
        $('#create-link').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: "{{url('buat-bagi-to')}}",
                data: formData,
                cache: false,
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(data) {
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
    $(document).ready(function() {
        $("#link2").keyup(function() {
            var link2 = $("#link2").val();
            var link2 = String(link2);
            $("#generate_link").val(link2);
        });
    });

    // function copyTo() {
    //     var copyText = document.getElementById("copy-to");
    //     copyText.select();
    //     document.execCommand("copy");
    // }
    </script>
    <script type="text/javascript">
    function copyTo() {
        var copyText = document.getElementById("link2");
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);

        // Alert the copied text
        alert("Copied the text: " + copyText.value);
    }
    </script>
</body>

</html>