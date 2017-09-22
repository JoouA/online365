<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        body {
            background: #ddd;
        }
        video {
            max-width: 100%;
            height: auto;
        }

        iframe,
        embed,
        object {
            max-width: 100%;
        }

        .container {
            width: 600px;
            padding: 5%;
            margin:0px auto;
            background:#fff;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.5);
        }

        .vendor {
            padding: 2%;
            background: #d1eed1;
            margin-bottom: 2em;
        }

        .unsupported {
            background: #fddfde;
        }
    </style>
</head>
<body>
<div class="container">
    <div align="center">
        <?php
            $id = $_GET['id'];
            $path = 'upfiles/audio/'.$id;
            echo "<iframe width='425' height='349' src='$path' frameborder='0' allowfullscreen></iframe>";
        ?>
    </div>
</div>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js" type="text/javascript"></script>
<script src="js/jquery.fitvids.js" type="text/javascript"></script>
<script>
    // Basic FitVids Test
    $(".container").fitVids();
    // Custom selector and No-Double-Wrapping Prevention Test
    $(".container").fitVids({ customSelector: "iframe[src^='http://socialcam.com']"});
</script>
</body>
</html>
