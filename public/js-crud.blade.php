<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
function view_profil() {
    var username = $('#username').val();
    var name = $('#name').val();
    var lokasi = $('lokasi').val();
    var link = $('#link').val();
    var biografi = $('#biografi').val();
    $('#updateProfil').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: 'http://127.0.0.1:8000/editprofil',
            data: {
                username: username,
                name: name,
                lokasi: lokasi,
                link: link,
                biografi: biografi
            },
        },
    })
}

function editFunc(id) {
    $.ajax({
        type: "POST",
        url: "{{ url('http://127.0.0.1:8000/editprofil') }}",
        data: {
            id: id
        },
        dataType: 'json',
        success: function(res) {
            // $('#CompanyModal').html("Edit Company");
            // $('#company-modal').modal('show');
            $('#id').val(res.id);
            $('#name').val(res.name);
            $('#username').val(res.username);
            $('#lokasi').val(res.lokasi);
            $('#link').val(res.link);
            $('#biografi').val(res.biografi);
        }
    });
}
</script>