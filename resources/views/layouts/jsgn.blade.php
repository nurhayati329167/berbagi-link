<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
// Generate otimatis link
$(document).ready(function() {
    $("#links, #emails, #usrnm").keyup(function() {
        var links = $("#links").val();
        // var number = $('#number').val();
        // var emails = $("#emails").val();
        var jeneret = String(links);
        $("#jeneret").val(jeneret);
    });

    $("#emails").keyup(function() {
        var emails = $("#emails").val();
        var jeneret = String(emails);
        $("#jeneret").val(jeneret);
    });

    $("#usernem").keyup(function(){
        var usernem = $("#usernem").val();
        var jeneret = String(usernem);
        $("#jeneret").val(jeneret);
    });

    $("#notelp").keyup(function(){
        var notelp = $("#notelp").val();
        var jeneret = String(notelp);
        // for (const [key, value] of Object.entries(notelp)){
        //     jeneret += '${key}: ${value}\n'
        // }
        $("#jeneret").val(jeneret);
    });
});
</script>
<!-- <script>
    $(document).ready(function(){
        $("#links, #emails, #number").keyup(function(){
            if ("#links") {
                var links = $("#links").val();
                var jeneret = String(links);
                $("#jeneret").val(jeneret);
            } else if ("#number") {
                var number = $("#number").val();
                var jeneret = String(number);
                $("#jeneret").val(jeneret);
            }else {
                var emails = $("#emails").val();
                var jeneret = String(emails);
                $("#jeneret").val(jeneret);
            }
        });
    });
</script> -->
<!-- <script type="text/javascript"> 
$(document).ready(function() {
    $("#no").keyup(function() {
        var nomor = $("#no").val();
        var jeneret = String(nomor);
        $("#jeneret").val(jeneret);
    });
});
</script> -->