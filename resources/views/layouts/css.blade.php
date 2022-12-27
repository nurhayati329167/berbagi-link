<link href="https://fonts.gstatic.com" rel="preconnect">
<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ asset('nice-admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('nice-admin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
<link href="{{ asset('nice-admin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
<link href="{{ asset('nice-admin/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
<link href="{{ asset('nice-admin/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
<link href="{{ asset('nice-admin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
<link href="{{ asset('nice-admin/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
<link href="{{ asset('ijaboCropTool.min.css')}}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ asset('nice-admin/assets/css/style.css')}}" rel="stylesheet">
<link href="{{ asset('images/BB.PNG')}}" rel="shortcut icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="{{ asset('vendor/summernote/summernote.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js">
</script>

<!-- cropper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.0/cropper.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.0/cropper.js"></script>

<!-- MODAL BOOTSTRAP 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<!-- CSS Datatable -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<style type="text/css">
img {
    display: block;
    max-width: 100%;
}

.preview {
    overflow: hidden;
    width: 160px;
    height: 160px;
    margin: 10px;
    border: 1px solid red;
}

.modal-lg {
    max-width: 1000px !important;
}
</style>

<style type="text/css">
.picture-container {
    position: relative;
    cursor: pointer;
    text-align: center;
}

.picture {
    width: 106px;
    height: 106px;
    background-color: #999999;
    border: 4px solid #CCCCCC;
    color: #FFFFFF;
    border-radius: 10%;
    margin: 0px auto;
    overflow: hidden;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
}

.picture:hover {
    border-color: #2ca8ff;
}

.content.ct-wizard-green .picture:hover {
    border-color: #05ae0e;
}

.content.ct-wizard-blue .picture:hover {
    border-color: #3472f7;
}

.content.ct-wizard-orange .picture:hover {
    border-color: #ff9500;
}

.content.ct-wizard-red .picture:hover {
    border-color: #ff3b30;
}

.picture input[type="file"] {
    cursor: pointer;
    display: block;
    height: 100%;
    left: 0;
    opacity: 0 !important;
    position: absolute;
    top: 0;
    width: 100%;
}

.picture-src {
    width: 100%;

}

#imageUpload {
    display: none;
}

#profileImage {
    cursor: pointer;
}

#profile-container {
    width: 150px;
    height: 150px;
    overflow: hidden;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
}

#profile-container img {
    width: 150px;
    height: 150px;
}
</style>
<style>
input[type="date"]::before {
    content: attr(placeholder);
    position: absolute;
    color: #999999;
}

input[type="date"] {
    color: #ffffff;
}

input[type="date"]:focus,
input[type="date"]:valid {
    color: #666666;
}

input[type="date"]:focus::before,
input[type="date"]:valid::before {
    content: "";
}
</style>