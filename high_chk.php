<?php
session_start();
include "conn/conn.php";
$type1 = $_POST['selecttype2'];
$_SESSION['seltype'] = $type1;
switch ($_POST['selecttype1']){
    case "Name":
        $dataName=$_POST['dataname'];
        $areaName=$_POST['areaname'];
        $publisherName=$_POST['publishername'];
        $language=$_POST['language'];
        if($type1=="audio"){
            $sql="select id,style,name,actor,remark,address from tb_audio where name like '%".$dataName."%' and froms like '%".$areaName."%' and publisher like '%".$publisherName."%' and languages like '%".$language."%'";
        }else{
            $sql="select id,style,name,actor,remark,address from tb_video where name like '%".$dataName."%' and froms like '%".$areaName."%' and publisher like '%".$publisherName."%' and languages like '%".$language."%'";
        }
        $_SESSION['sql']=$sql;
        break;
    case "Actor":
        $actor=$_POST['actor'];
        $director=$_POST['director'];
        $marker=$_POST['marker'];
        if($type1=="audio"){
            $sql="select id,style,name,actor,remark,address from tb_audio where actor like '%".$actor."%' and director like '%".$director."%' and marker like '%".$marker."%'";
        }else{
            $sql="select id,style,name,actor,remark,address from tb_video where actor like '%".$actor."%' and ci like '%".$director."%' and qu like '%".$marker."%'";
        }
        $_SESSION['sql']=$sql;
        break;
}
?>
<script>
    top.opener.location="show.php?action=high&type=<?php echo $type1; ?>";
    window.close();
</script>