<!-- Modal -->
<div class="modal fade" id="addPostModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form id="uploaduser" action="add.php" enctype="multipart/form-data">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="username">Name</label>
                        <input type="Name" class="form-control" id="username" name="username" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            <option>Male</option>
                            <option>Female</option>

                        </select>
                    </div>


                    <div class="form-group">
                        <!--<label for="userfile">Upload Image</label>
                        <input type="file" class="form-control-file" id="userfile" name="userfile">-->

                        <div class="form-group">
                            <label>Join Date</label>
                            <input type="date" name="date" id="date" max="3000-12-31" min="1000-01-01" class="form-control" name="date" id="date">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.reload(true);">Close</button>
                        <button type="submit" class="btn btn-primary" id="butsave" name="butsave">Save </button>
                    </div>
                </div>
            </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        $("#uploaduser").on('submit', function(e) {
            e.preventDefault();
            var data = $(this).serialize();
            //console.log(data);
            var url = "add.php";
            sendForm(url, data);
        });
    });

    function sendForm(url, data) {
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            dataType: 'json',
    
            cache: false,
            contentType: false,
            processData: false

        }).done(function(resp) {
            console.log(resp);
            if (resp.err == 1) {
                alert(resp.msg);
            } else {
                alert(resp.msg);
                $('#addPostModel').modal('hide');
            }

        }).fail(function() {
            alert("Error from server");
        });
    }

    
</script>