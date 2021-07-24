<div class="container">
    <hr>
    <div id="customer-data">

    </div>
</div>
<script>
    $(document).ready(function() {

        $.ajax({
            url: 'viewprocess.php',
            success: function(data) {

                $("#customer-data").html(data);
            }
        })
    });
</script>