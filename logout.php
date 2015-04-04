<?php
// Start session
session_start();

if (!isset($_SESSION['stid'])){
?>
<script type="text/javascript"> window.location="index.html"; </script>
<?php
}else{        
    session_unset();
    session_destroy();
            
?>  
<script type="text/javascript"> window.location="index.html"; </script>
<?php 
}
?>