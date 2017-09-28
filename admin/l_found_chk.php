<?php
session_start();
require_once "inc/chec.php";
$types=$_POST['style'];
$days=$_POST['days'];
?>
<script type="text/javascript">
    top.opener.location="main.php?action=log&types=<?php echo $types; ?>&days=<?php echo $days; ?>&page=1";
    top.window.close();
</script>

