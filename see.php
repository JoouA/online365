<?php
require_once "inc/chec.php";
require_once "conn/conn.php";
$id = htmlspecialchars(trim($_GET['id']));
$sql = "select  picture,address from tb_audio WHERE id=$id";
$a_data = $conn->execute($sql);
if (!$a_data->EOF){
    $address = $a_data->fields['address'];
    $ext = substr(strrchr($address,'.'),1);
    $picture = $a_data->fields['picture'];
}else{
    echo "<script type='text/javascript'>alert('非法操作！');top.window.close();</script>";
    exit();
}

?>
<html>
<head>
    <link href="//vjs.zencdn.net/5.19/video-js.min.css" rel="stylesheet">
    <script src="//vjs.zencdn.net/5.19/video.min.js"></script>
</head>
<body>
<video
    id="my-player"
    class="video-js"
    controls
    preload="auto"
    poster="<?php echo $picture; ?>"
    data-setup='{}'
    width="665"
>
    <source src="<?php echo $address; ?>" type="video/<?php echo $ext; ?>"></source>
</video>
</body>
</html>
