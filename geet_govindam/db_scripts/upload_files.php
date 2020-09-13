<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,900;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    </head>
    <body>

    <div class="col-md-12 mx-auto text-center create_new_form" style="padding-top: 20px;">
        <h1 style="margin:40px;">Upload Files</h1>
        <form enctype="multipart/form-data" method="POST" class="col-md-8 mx-auto text-left formc" style="margin: 40px;">
            <div class="form-group">
                <label class="custom-file-upload"><input class="form-control title_field" type="file" name="fileToUpload">
                Upload Music</label>
            </div>
            <div class="form-group">
                <input class="form-control title_field" type="number" name="part" placeholder="Enter Part Number">
            </div>
            <div class="form-group">
                <textarea name="bhajan" id="" cols="30" rows="10" placeholder="Enter Bhajan" class="desc_field form-control"></textarea>
            </div>
            <button class="col-md-3 btn btn-primary form-control">Upload</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <script>
        $('.formc').on('submit', function(e){
            e.preventDefault();
            $.ajax({
                url: "ajax.php",
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success: function (data) {
                    if (data != "Done"){
                        alert(data);
                    }
                    else{
                        alert("Uploaded Successfully");
                        window.location.reload(true);
                    }
                },
                error: function (error) {
                    console.log(error);
                    alert(error);
                }
            });
        });
    </script>
    </body>

</html>