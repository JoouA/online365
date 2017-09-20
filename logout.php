 <meta charset='utf-8' content='text/html'>
 <script type='text/javascript'>
     if(confirm('确当退出登陆吗？')==true){
         <?php  session_start(); session_destroy();?>
         location='index.php';
     }
 </script>

